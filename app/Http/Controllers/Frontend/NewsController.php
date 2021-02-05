<?php

namespace App\Http\Controllers\Frontend;

use App\Repositories\NewsCategoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repositories\NewsRepository;
use Repositories\ContactRepository;
use Repositories\CategoryRepository;
use DB;
use Carbon\Carbon;
class NewsController extends Controller {

    //
    public function __construct(NewsRepository $newsRepo, CategoryRepository $categoryRepo, NewsCategoryRepository $newsCategoryRepo) {
        $this->newsRepo = $newsRepo;
        $this->categoryRepo = $categoryRepo;
        $this->newsCategoryRepo = $newsCategoryRepo;
    }

    public function index(Request $request, $alias = '') {

        $lifestyle = $this->newsRepo->getNews($alias='phong-cach-song',$limit=10);
        $experience = $this->newsRepo->getNews($alias='trai-nghiem',$limit=10);
        $expert = $this->newsRepo->getNews($alias='chuyen-gia',$limit=10);
        $tutorial = $this->newsRepo->getNews($alias='huong-dan',$limit=10);
        if ($alias) {
            $category = $this->categoryRepo->findByAlias($alias);
            $records = $this->newsRepo->readFE($request, $category->id);
        } else {
            $records = $this->newsRepo->readFE($request);
        }
        $category_arr = $this->categoryRepo->getAllCategoryNews(2,0);
        $sale = $this->newsRepo->getNews('tin-khuyen-mai',10);
        $featured_news = $this->newsRepo->readFeaturedNews($limit = 5);
        $news_hl = $this->newsRepo->getAllNews(3);
        return view('frontend/news/list', compact('records', 'category_arr', 'featured_news', 'lifestyle', 'experience', 'expert', 'tutorial','sale','news_hl'));
    }

    // public function detail($alias) {
    //     $record = $this->newsRepo->findByAlias($alias);
    //     $this->newsRepo->updateViewCount($record->id, $record->view_count);
    //     $featured_news = $this->newsRepo->readFeaturedNews($limit = 5);
    //     $category_arr = $this->categoryRepo->readHomeNewsCategory();
    //     $news_ids = $this->newsCategoryRepo->getNewsIds($record->categories->pluck('id'));
    //     $related_news = $this->newsRepo->readRelatedNews($record->id, $news_ids);
    //     $config = $this->newsRepo->getConfig($record->id);
    //     $blog = $record;
    //     //$url = \Illuminate\Support\Facades\Request::url();
    //     if (config('global.device') != 'pc') {
    //         return view('mobile/news/detail', compact('record', 'blog', 'config', 'category_arr', 'featured_news'));
    //     } else {
    //         return view('frontend/news/detail', compact('record', 'blog', 'config', 'featured_news', 'category_arr', 'related_news'));
    //     }
    // }

    public function detail(Request $request,$alias) {
        $detail_news=  $this->newsRepo->getDetailNews($alias);
        $some_news=  $this->newsRepo->getAllNews(5);
        $category = DB::table('category')->where('parent_id', 0)->where('type',2)->orderBy('ordering', 'asc')->get();
        return view('frontend/news/detail',compact('detail_news','category','some_news'));
    }

    public function category(Request $request,$alias) {
        $records = DB::table('category')->join('news_category','news_category.category_id','=','category.id')->where('category.alias',$alias)->get();
        $dem=0;
        //dd($records);
        if(is_null($records) ){
        foreach ($records as $key => $value) {
            $news_category[]=DB::table('news')->where('id',$value->news_id)->first();
            $dem++;
            }
        $some_news=  $this->newsRepo->getAllNews(5);
        $category = DB::table('category')->where('parent_id', 0)->where('type',2)->orderBy('ordering', 'asc')->get();
        //d($records);
        return view('frontend/news/category',compact('category','some_news','records','news_category','dem'));
        }
        else{
        $some_news=  $this->newsRepo->getAllNews(5);
        $category = DB::table('category')->where('parent_id', 0)->where('type',2)->orderBy('ordering', 'asc')->get();
        //d($records);
        return view('frontend/news/category',compact('category','some_news','records','dem'));
        }
        
        
    }

    public function contact_detail(Request $request) {
       return view('frontend/news/contact_detail');
    }

    public function contact_store(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['mobile'] = $request->mobile;
        $data['content'] = $request->content;
        $data['created_at'] = Carbon::now('Asia/Ho_Chi_Minh');


        $dem = 0;
        $contact=DB::table('contact')->get();
        foreach ($contact as $key => $value) {
            if($value->email == $request->email ){
                $dem++;
            }
        }
        
        $contact_detail = DB::table('contact')->insert($data);
        return redirect()->back()->with('success','Gửi thành công');
    

  }

    public function list(Request $request) {
        $category = DB::table('category')->where('parent_id', 0)->where('type',2)->orderBy('ordering', 'asc')->get();
        $some_news=  $this->newsRepo->getAllNews(5);
        $records = DB::table('news')->orderBy('ordering', 'asc')->get();
        return view('frontend/news/list',compact('records','category','some_news'));
    }      

}
