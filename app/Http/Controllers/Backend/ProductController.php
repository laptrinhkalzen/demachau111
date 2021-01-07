<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Repositories\CategoryRepository;
use Repositories\AttributeRepository;
use Repositories\PostHistoryRepository;
use DB;
class ProductController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(ProductRepository $productRepo, CategoryRepository $categoryRepo, AttributeRepository $attributeRepo, PostHistoryRepository $postHistoryRepo) {
        $this->productRepo = $productRepo;
        $this->categoryRepo = $categoryRepo;
        $this->attributeRepo = $attributeRepo;
        $this->postHistoryRepo = $postHistoryRepo;
    }

    public function index() {
        $option=DB::table('variant_product')->groupBy('option_sort');
        // foreach ($option as $key => $op) {
        //     $data[]=DB::table('variant_product')->where('option_sort',$op)->first();
        // }
        // dd($data);
        $records = $this->productRepo->all();
        return view('backend/product/index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        $options = $this->categoryRepo->readCategoryByType(\App\Category::TYPE_PRODUCT);
        $category_html = \App\Helpers\StringHelper::getSelectRoleOptions($options);
        $attributes = $this->attributeRepo->readAttributeByParentAdmin();
        return view('backend/product/create', compact('category_html', 'attributes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $input = $request->all();
        $validator = \Validator::make($input, $this->productRepo->validateCreate());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $input['status'] = isset($input['status']) ? 1 : 0;
        $input['is_hot'] = isset($input['is_hot']) ? 1 : 0;
        $input['is_new'] = isset($input['is_new']) ? 1 : 0;
        $input['created_by'] = \Auth::user()->id;
        $input['view_count'] = 0;
        $input['post_schedule'] = isset($input['post_schedule']) ? $input['post_schedule_submit'] : date('Y-m-d H:i:s');
        $product = $this->productRepo->create($input);
        //Thêm vào lịch sử đăng bài
        $this->addPostHistory($product);
        //Thêm danh mục sản phẩm
        $product->categories()->attach($input['category_id']);
        //Thêm thuộc tính sản phẩm
        $attributes = $this->getProductAttributes($input);
        $product->attributes()->attach($attributes);
        //$attributes=DB::table('attribute')->where('product_id',$product->id)->get();
        //Thêm variant
        $attributes=DB::table('product_attribute')->join('attribute','attribute.id','=','product_attribute.attribute_id')->where('product_id',$product->id)->where('attribute.parent_id','!=','0')->get();

        $parent_ids=DB::table('product_attribute')->join('attribute','attribute.id','=','product_attribute.attribute_id')->where('product_id',$product->id)->where('attribute.parent_id','!=','0')->groupBy('parent_id')->pluck('parent_id');
        $count=$parent_ids->count();

        foreach ($parent_ids as $key => $parent_id) { //Lấy danh mục cha
               if($key==$count-1){
                break;
               }
               foreach ($variants as $variant) { //lặp sản phẩm
                  if($parent_id==$variant->parent_id){ //lấy sản phẩm của danh mục cha 
                       $childrens=$variants->where('parent_id',$parent_ids[$key+1]); //lấy sp con của sp 
                        foreach ($childrens as  $children) {
                            $input=array();
                            $input['product_id']=$product->id;
                            $input['variant_id']=$children->id;
                            $input['parent_variant']=$variant->id;
                            $input['sort']=$key;
                            $input['count']=$count-1;
                            DB::table('variant_product')->insert($input);
                            }  
                        }
                    }
                }

         //  foreach ($parent_ids as $key => $parent_id) { //Lấy danh mục cha
         //       if($key==$count-1){
         //        break;
         //       }
         //       foreach ($variants as $variant) { //lặp sản phẩm
         //          if($parent_id==$variant->parent_id){ //lấy sản phẩm của danh mục cha 
         //               $childrens=$variants->where('parent_id',$parent_ids[$key+1]); //lấy sp con của sp 
         //                foreach ($childrens as  $children) {
         //                    $input=array();
         //                    $input['product_id']=$product->id;
         //                    $input['variant_id']=$children->id;
         //                    $input['parent_variant']=$variant->id;
         //                    $input['sort']=$key;
         //                    $input['count']=$count-1;
         //                    DB::table('variant_product')->insert($input);
         //                    }     
         //   }
         //   }
         // }

          
             
        if ($product) {
            return redirect()->route('admin.product.index')->with('success', 'Tạo mới thành công');
        } else {
            return redirect()->route('admin.product.index')->with('error', 'Tạo mới thất bại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id=64) {
         $variants=DB::table('product_attribute')->join('attribute','attribute.id','=','product_attribute.attribute_id')->where('product_id',$id)->where('attribute.parent_id','!=','0')->get();

          $parent_ids=DB::table('product_attribute')->join('attribute','attribute.id','=','product_attribute.attribute_id')->where('product_id',$id)->where('attribute.parent_id','!=','0')->groupBy('parent_id')->pluck('parent_id');
           $count=$parent_ids->count();
           $variant_products = DB::table('variant_product')->where('product_id',64)->get();
        foreach ($variant_products as $key => $parent_id) { //Lấy danh mục cha
               if($key==$count-1){
                break;
               }
               foreach ($variants as $variant) { //lặp sản phẩm
                  if($parent_id==$variant->parent_id){ //lấy sản phẩm của danh mục cha 
                       $childrens=$variants->where('parent_id',$parent_ids[$key+1]); //lấy sp con của sp 
                        foreach ($childrens as $key1 => $children) {
                            $input=array();
                            
                            $input['$group_variant']=$key1;
                            dd($input);
                            DB::table('variant_product')->insert($input);
                            }     
           }
           }
         }
        $record = $this->productRepo->find($id);
        $options = $this->categoryRepo->readCategoryByType(\App\Category::TYPE_PRODUCT);
        $category_ids = $record->categories()->get()->pluck('id')->toArray();
        $category_html = \App\Helpers\StringHelper::getSelectRoleOptions($options, $category_ids);
        $attributes = $this->attributeRepo->readAttributeByParentAdmin();
        //Lấy danh sách id thuộc tính của sản phẩm
        $product_attribute_ids = $record->attributes()->get()->pluck('id')->toArray();
        //Lấy danh sách thuộc tính cúa sản phẩm
        $product_attribute = array();
        foreach ($record->attributes()->get() as $key => $val) {
            if ($val != null) {
                $product_attribute[$val->id] = $val->pivot->value;
            }
        }
        return view('backend/product/edit', compact('record', 'category_html', 'attributes', 'product_attribute', 'product_attribute_ids'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $variants=DB::table('variant_product')->where('product_id',64)->get();
        $count=$variants->pluck('count')->first();
        $parents=DB::table('variant_product')->where('product_id',64)->groupBy('parent_variant')->pluck('parent_variant');
        // dd($parents);
        // for($i=0;$i<$count;$i++){
        //     foreach ($variants as $key => $variant) {
        //         if($variant->parent_variant==$i){
                    

        //         }
        //     }
        // }
        $input = $request->all();
        $validator = \Validator::make($input, $this->productRepo->validateUpdate($id));
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
//      status
        $input['status'] = isset($input['status']) ? 1 : 0;
        $input['is_hot'] = isset($input['is_hot']) ? 1 : 0;
        $input['is_new'] = isset($input['is_new']) ? 1 : 0;
        $input['created_by'] = \Auth::user()->id;
        $input['post_schedule'] = isset($input['post_schedule']) ? $input['post_schedule_submit'] : date('Y-m-d H:i:s');
        $res = $this->productRepo->update($input, $id);
        $product = $this->productRepo->find($id);
        //Thêm danh mục sản phẩm
        $product->categories()->sync($input['category_id']);
        //Thêm thuộc tính sản phẩm
        $attributes = $this->getProductAttributes($input);

        $product->attributes()->sync($attributes);
        if ($res) {
            return redirect()->route('admin.product.index')->with('success', 'Cập nhật thành công');
        } else {
            return redirect()->route('admin.product.index')->with('error', 'Cập nhật thất bại');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $product = $this->productRepo->find($id);
        $product->categories()->detach();
        $product->attributes()->detach();
        $this->productRepo->delete($id);
        return redirect()->back()->with('success', 'Xóa thành công');
    }

    public function getProductAttributes($input) {
        $attributes = array();

        foreach ($input['attribute'] as $key => $val) {
            $attributes[$key] = ['value' => $val];
        }
        foreach ($input['attribute_select'] as $key => $val) {
            if ($val != null) {
                $attributes[$val] = ['value' => null];
            }
        }
        return $attributes;
    }

    public function addPostHistory($product) {

        $post_history['item_id'] = $product->id;
        $post_history['created_at'] = $product->created_at;
        $post_history['updated_at'] = $product->post_schedule ?: $product->updated_at;
        $post_history['module'] = 'product';
        $this->postHistoryRepo->create($post_history);
    }

}
