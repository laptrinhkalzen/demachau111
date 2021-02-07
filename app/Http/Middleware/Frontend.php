<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;
use Repositories\CategoryRepository;
use DB;
use Carbon\Carbon;
class Frontend {
    public function __construct( CategoryRepository $categoryRepo) {
        $this->categoryRepo = $categoryRepo;
    }

    public function handle($request, Closure $next){
        $danh_muc_tra=DB::table('category')->where('parent_id',0)->where('type',4)->where('status',1)->get();
        $product_nem=DB::table('product')->join('product_category','product_category.product_id','=','product.id')->join('category','category.id','product_category.category_id')->where('product.status',1)->where('product.alias','LIKE','%'.'dem'.'%')->orWhere('product.meta_keywords','LIKE','%'.'dem'.'%')->get()->unique('category_id')->groupBy('parent_id');
        $config = \DB::table('config')->first();
        $brand = \DB::table('brand')->orderBy('order','asc')->get();
        $slide_chinh= DB::table('slide')->where('position',1)->where('status',1)->get();
        $slide_phu= DB::table('slide')->where('position',3)->where('status',1)->first();
        $anh_duoi_slide= DB::table('slide')->where('position',2)->where('status',1)->get();
        $banner_left= DB::table('slide')->where('position',4)->where('status',1)->first();
        $banner_right= DB::table('slide')->where('position',5)->where('status',1)->first();
       // dd($silde_position1);  
        $menu_arr = \DB::table('menu')->where('parent_id',0)->where('status',1)->orderBy('ordering', 'asc')->get();
        $menu_cat = \DB::table('category')->where('status',1)->where('type', '4')->orderBy('ordering', 'asc')->get();
        $menu_cats = \DB::table('category')->where('status',1)->where('parent_id', 0)->where('type', '4')->orderBy('ordering', 'asc')->limit(10)->get();
        $menu = \DB::table('menu')->where('parent_id', 0)->get();
        
        foreach($menu as $key=>$val){
            $menu[$key]->children = \DB::table('menu')->where('parent_id',$val->id)->get();
        }
        foreach($menu_cat as $value){
            $value->children = $this->categoryRepo->getChildren($value->id);
        }
        foreach($menu_cats as $value){  
            $value->children = $this->categoryRepo->getChildren($value->id);
        }
        $category =  $this->categoryRepo->getProductCategory();
        foreach($category as $value){
            $value->children = $this->categoryRepo->getChildren($value->id);
        } 
        $social = \DB::table('social')->orderBy('order','asc')->get();
        $company_infor = \DB::table('company_infor')->orderBy('order','asc')->get();
        $customer_support = \DB::table('customer_support')->orderBy('order','asc')->get();
        $payment = \DB::table('payment')->orderBy('order','asc')->get();
        $template_setting= \DB::table('template_setting')->join('template_attribute','template_setting.attribute_id','=','template_attribute.id')->select('template_setting.name','template_setting.value','template_attribute.title')->get();
        $news_footer1 = \DB::table('news')->join('news_category', 'news.id', '=', 'news_category.news_id')->where('news_category.category_id',238)->where('status',1)->select('news.*')->orderBy('news.ordering')->get();
        $news_footer2 = \DB::table('news')->join('news_category', 'news.id', '=', 'news_category.news_id')->where('news_category.category_id',239)->where('status',1)->select('news.*')->orderBy('news.ordering')->get();
        $template=[];
        foreach($template_setting as $key=>$val){
            $template[$val->name][$val->title]=$val->value;
        }
        
         $count=0;
        if(! is_null(session('cart'))){
            foreach(session('cart') as $val){
                    $count += $val['quantity'];
            }
        }
        $total=0;
        if(! is_null(session('cart'))){
            foreach(session('cart') as $val){
                    $total += $val['price']*$val['quantity'];
            }
        }
        \View::share(['danh_muc_tra' => $danh_muc_tra]);
        \View::share(['product_nem' => $product_nem]);
        \View::share(['share_config' => $config]);
        \View::share(['count_cart' => $count]);
        \View::share(['count_total' => $total]);
        \View::share(['menu_cat' => $menu_cat]);
        \View::share(['menu_cats' => $menu_cats]);
        \View::share(['menu' => $menu]);
        \View::share(['menu_arr' => $menu_arr]);
        \View::share(['category' => $category]);
        \View::share(['social' => $social]);
        \View::share(['brand' => $brand]);
        \View::share(['company_infor' => $company_infor]);
        \View::share(['customer_support' => $customer_support]);
        \View::share(['payment' => $payment]);
        \View::share(['news_footer1' => $news_footer1]);
        \View::share(['news_footer2' => $news_footer2]);
        \View::share(['template' => $template]);
        \View::share(['slide_chinh' => $slide_chinh]);
        \View::share(['slide_phu' => $slide_phu]);
        \View::share(['anh_duoi_slide' => $anh_duoi_slide]);
        \View::share(['banner_left' => $banner_left]);
        \View::share(['banner_right' => $banner_right]);
        return $next($request);
    }
    
}
