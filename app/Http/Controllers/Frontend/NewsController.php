<?php

namespace App\Http\Controllers\Frontend;

use App\Repositories\NewsCategoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Repositories\NewsRepository;
use Repositories\CategoryRepository;
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
        $category_arr = $this->categoryRepo->getAllCategoryNews(2,0);
        return view('frontend/news/detail',compact('detail_news'));
    }

    public function list(Request $request,$alias) {
        $category_title = $this->categoryRepo->getCategoryNews($alias);
        $category_arr = $this->categoryRepo->getAllCategoryNews(2,0);
        $sale = $this->newsRepo->getNews('tin-khuyen-mai',3);
        $news_hl = $this->newsRepo->getAllNews(3);
        $news_arr = $this->newsRepo->getNews($alias,10);
        return view('frontend/news/children_list',compact('news_arr','category_title','category_arr','sale','news_hl','category_arr'));
    }      

}
