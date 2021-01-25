<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Repositories\ProductRepository;
use Repositories\AttributeRepository;
use DB;
use Carbon\Carbon;

class ProductController extends Controller {

    public function __construct(ProductRepository $productRepo, AttributeRepository $attributeRepo) {
        $this->productRepo = $productRepo;
        $this->attributeRepo = $attributeRepo;
    }

    public function addToCart(Request $request) {
        $id = $request->get('product_id');
        $quantity = $request->get('quantity');
        $option_number=$request->get('option_number');
        $price=DB::table('option_detail')->where('product_id',$id)->where('option_id',$option_number)->pluck('option_price')->first();
        $product = $this->productRepo->find($id);
        if (!$product) {
            abort(404);
        }
        $count = 0;
        $total = 0;
        $cart = session()->get('cart');
        $product_sale=DB::table('flashsale')->join('flash_sale_product','flash_sale_product.flash_sale_id','=','flashsale.id')->where('flashsale.status',1)->where('product_id',$id)->where('flashsale.start','<', Carbon::now('Asia/Ho_Chi_Minh'))->where('flashsale.end','>',Carbon::now('Asia/Ho_Chi_Minh'))->first();  
            if($product_sale){
                if($product_sale->discount_type==0){
                    $price=$price-($price/100*$product_sale->discount_value);
                }
                if($product_sale->discount_type==1){
                    $price=$price-$product_sale->discount_value;
                }
                if($product_sale->discount_type==2){
                   $price=$product_sale->discount_value;
                }
            }
        if (is_null($cart)) {
            $cart = [
                $id.'_'.$option_number => [
                    "product_id"=>$id,
                    "alias" =>$product->alias,
                    "title" => $product->title,
                    "quantity" => $quantity,
                    "price" => $price,
                    "image" => $product->getImage(),
                    "url" => $product->alias,
                    "option_number"=>$option_number
                ]
            ];
            session()->put('cart', $cart);
             
            foreach (session('cart') as $val) {
                $count += $val['quantity'];
                $total += ($val['price'] * $val['quantity']);
            }
            return response()->json([
                       'success' => true, 'count' => $count, 'total' => number_format($total),'cart'=>$cart
            ]);
        }
        if (isset($cart[$id.'_'.$option_number]) &&  $cart[$id.'_'.$option_number]['option_number']==$option_number) {
            $cart[$id.'_'.$option_number]['quantity'] += $quantity;

            session()->put('cart', $cart);
            foreach (session('cart') as $val) {
                $count += $val['quantity'];
                $total += ($val['price'] * $val['quantity']);
            }
            return response()->json([
                       'success' => true, 'count' => $count, 'total' => number_format($total),'cart'=>$cart
            ]);
        } else {
            $cart[$id.'_'.$option_number] = [
                "product_id"=>$id,
                "alias" =>$product->alias,
                "title" => $product->title,
                "quantity" => $quantity,
                "price" => $price,
                "image" => $product->getImage(),
                "url" => $product->alias,
                "option_number"=>$option_number
            ];
            session()->put('cart', $cart);
        }
        foreach (session('cart') as $val) {
            $count += $val['quantity'];
            $total += ($val['price'] * $val['quantity']);
        }
        return response()->json([
                    'success' => true, 'count' => $count, 'total' => number_format($total),'cart'=>$cart
        ]);
    }

    public function update_cart(Request $request) {
        $total = 0;
        $count = 0;
        if ($request->id_option && $request->quantity) {
            $cart = session()->get('cart');

            $cart[$request->id_option]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            foreach (session('cart') as $val) {
                $count += $val['quantity'];
                $total += ($val['price'] * $val['quantity']);
            }
            return response()->json([
                        'success' => true, 'count' => $count, 'total' => $total
            ]);
        }
    }

    public function deleteCart(Request $request) {
        $total = 0;
        $count = 0;
        $id_option=$request->id_option;
        if ($id_option) {
            $cart = session()->get('cart');
            if (isset($cart[$id_option])) {
                unset($cart[$id_option]);
                session()->put('cart', $cart);
            }
            foreach (session('cart') as $val) {
                $count += $val['quantity'];
                $total += ($val['price'] * $val['quantity']);
            }
            return response()->json([
                        'success' => true, 'count' => $count, 'total' => $total
            ]);
        }
    }

    public function filter_product(Request $request){
        $attr=$request->attr;
        $cat_id=$request->cat_id;
        $order_by=$request->order_by;
        $category_id=DB::table('category')->where('id',$cat_id)->first();
        if($attr){
          if($category_id->parent_id!=0){
          $product_cat = DB::table('product')->join('product_category','product.id','=','product_category.product_id')->where('product_category.category_id',$cat_id)->get();
          }
          else{
             $children_ids=DB::table('category')->where('parent_id',$cat_id)->get();
             $id_children[]=$cat_id;
             foreach($children_ids as $children_id){
                $id_children[]=$children_id->id;
             }
             $product_cat = DB::table('product')->join('product_category','product.id','=','product_category.product_id')->whereIn('product_category.category_id',$id_children)->get();
          }

        $product_ids=$product_cat->groupBy('id');
          foreach($product_ids as $key => $product_id){
              $pro_id[]=$key;
          }
        $attributes=DB::table('product')->join('product_attribute','product_attribute.product_id','=','product.id')->whereIn('product_attribute.product_id',$pro_id)->whereIn('product_attribute.attribute_id',$attr)->get()->groupBy('id');
        $dem_attr=0;
        foreach ($attr as $key1 => $attr1) {
               $dem_attr++;
           }
       $id_final=array();
       foreach ($attributes as $key => $attribute) {
            $dem_product_attr=0;
            foreach ($attribute as $key1 => $value) {
                $dem_product_attr++;
            }
            if($dem_product_attr==$dem_attr){
                $id_final[]=$key;
            }
           
       }
       $output='';
       if($id_final){
           if($order_by==0){
           $product_finals=DB::table('product')->whereIn('id',$id_final)->orderBy('created_at','desc')->get();
           }
           elseif($order_by==1){
           $product_finals=DB::table('product')->whereIn('id',$id_final)->orderBy('price','desc')->get();
           }
           else{
           $product_finals=DB::table('product')->whereIn('id',$id_final)->orderBy('price','asc')->get();
           }
       
       foreach ($product_finals as $product_arr1) {
          $output.='<div class="col-lg-4 col-md-6 col-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="'.route('product.detail',['alias'=>$product_arr1->alias]).'">
                                    <img class="default-img" src="'.$product_arr1->images.'" alt="#" style="height:255px;width:100%;">
                                    <img class="hover-img"  src="'.$product_arr1->images.'" alt="#">
                                </a>
                                <div class="button-head">
                                   
                                    <div style="background-color: #283988; text-align: center; width: 100%;" class="product-action-2">
                                        <a  title="Mua hàng" href="'.route('product.detail',['alias'=>$product_arr1->alias]).'">Mua hàng</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 style="text-align: center;"><a href="'.route('product.detail',['alias'=>$product_arr1->alias]).'" src="'.$product_arr1->images.'">'.$product_arr1->title.'</a></h3>
                                <div class="product-price" style="text-align: center; color: red;">
                                 <span>'.$product_arr1->price.'</span>
                                </div>
                            </div>
                        </div>
                    </div>';
           }
           } 
           else{
            $output.='<div class="container col-lg-12 col-md-12 col-12"><strong style="font-size:150%; background-color:#ccc;"><i class="fa fa-search" aria-hidden="true"></i> Không tìm thấy sản phẩm nào khớp với lựa chọn của bạn.</strong></div>';
           }
         echo $output;
         }
         else{

         if($category_id->parent_id!=0){
               if($order_by==0){
           $product_cat = DB::table('product')->join('product_category','product.id','=','product_category.product_id')->where('product_category.category_id',$cat_id)->orderBy('product.created_at','desc')->get();
           }
           elseif($order_by==1){
           $product_cat = DB::table('product')->join('product_category','product.id','=','product_category.product_id')->where('product_category.category_id',$cat_id)->orderBy('product.price','desc')->get();
           }
           else{
           $product_cat = DB::table('product')->join('product_category','product.id','=','product_category.product_id')->where('product_category.category_id',$cat_id)->orderBy('product.price','asc')->get();
           }
          }
          else{
             $children_ids=DB::table('category')->where('parent_id',$category_id->id)->get();
             $id_children[]=$category_id->id;
             foreach($children_ids as $children_id){
                $id_children[]=$children_id->id;
             }
            if($order_by==0){
           $product_cat = DB::table('product')->join('product_category','product.id','=','product_category.product_id')->whereIn('product_category.category_id',$id_children)->orderBy('product.created_at','desc')->get();
           }
           elseif($order_by==1){
           $product_cat = DB::table('product')->join('product_category','product.id','=','product_category.product_id')->whereIn('product_category.category_id',$id_children)->orderBy('product.price','desc')->get();
           }
           else{
           $product_cat = DB::table('product')->join('product_category','product.id','=','product_category.product_id')->whereIn('product_category.category_id',$id_children)->orderBy('product.price','asc')->get();
           }

          }



          
             
            $output='';
            foreach ($product_cat as $product_arr1) {
          $output.='<div class="col-lg-4 col-md-6 col-12">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="'.route('product.detail',['alias'=>$product_arr1->alias]).'">
                                    <img class="default-img" src="'.$product_arr1->images.'" alt="#" style="height:255px;width:100%;">
                                    <img class="hover-img"  src="'.$product_arr1->images.'" alt="#">
                                </a>
                                <div class="button-head">
                                   
                                    <div style="background-color: #283988; text-align: center; width: 100%;" class="product-action-2">
                                        <a   title="Mua hàng" href="'.route('product.detail',['alias'=>$product_arr1->alias]).'">Mua hàng</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h3 style="text-align: center;"><a href="'.route('product.detail',['alias'=>$product_arr1->alias]).'" src="'.$product_arr1->images.'">'.$product_arr1->title.'</a></h3>
                                <div class="product-price" style="text-align: center; color: red;">
                                 <span>'.$product_arr1->price.'</span>
                                </div>
                            </div>
                        </div>
                    </div>';
           }
            return $output;
         }
        }

    public function getProductAttribute(Request $request) {
        session_start();
        ini_set('memory_limit', '2048M');
        $search = explode(',', $request->get('ids'));
        $product_ids = \DB::table('product_category')->where('category_id', $request->get('category_id')?:\App\Category::PRODUCT_SHOP_ID)->pluck('product_id');
        $attribute_arr = $this->attributeRepo->readAttributeByParent($module = 'product', $parent = 0, $type = 'select', $product_ids);
        $html = '';
        foreach ($attribute_arr as $attribute) {
            $html .= '
                <div class="filter_type">
                    <h6><b>' . $attribute->title . '</b></h6>
                    <ul class="list-attribute">';
            foreach ($attribute->children as $children) {
                if ($children->products->count() > 0) {
                    $html .= '
                        <li>
                            <label class="container_check">' . $children->title . '<small>' . $children->products()->whereIn('id', $product_ids)->count() . '</small>
                                <input type="checkbox" class="attribute_select" value="' . $children->id . '" ' . ((isset($search) && in_array($children->id, $search)) ? 'checked' : '') . '>
                                       <span class="checkmark"></span>
                            </label>
                        </li>';
                }
            }
            $html .= '</ul>
            </div>';
        }
       return response()->json(array('html' => $html));
    }
    public function getSaleProductAttribute(Request $request) {
        session_start();
        ini_set('memory_limit', '2048M');
        $search = explode(',', $request->get('ids'));
        $product_ids = \DB::table('product_category')->where('category_id', $request->get('category_id')?:\App\Category::PRODUCT_SHOP_ID)->pluck('product_id');
        $attribute_arr = $this->attributeRepo->readAttributeByParent($module = 'product', $parent = 0, $type = 'select', $product_ids);
        $html = '';
        foreach ($attribute_arr as $attribute) {
            $html .= '
                <div class="filter_type">
                    <h6><b>' . $attribute->title . '</b></h6>
                    <ul class="list-attribute">';
            foreach ($attribute->children as $children) {
                if ($children->products->count() > 0) {
                    $html .= '
                        <li>
                            <label class="container_check">' . $children->title . '<small>' . $children->products()->whereIn('id', $product_ids)->where('sale_price','>',0)->count() . '</small>
                                <input type="checkbox" class="attribute_select" value="' . $children->id . '" ' . ((isset($search) && in_array($children->id, $search)) ? 'checked' : '') . '>
                                       <span class="checkmark"></span>
                            </label>
                        </li>';
                }
            }
            $html .= '</ul>
            </div>';
        }
       return response()->json(array('html' => $html));
    }

}
