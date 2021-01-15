<?php

Route::group(['middleware' => 'frontend'], function() {
    Route::get('/', ['as' => 'home.index', 'uses' => 'Frontend\FrontendController@index']);
    Route::get('/support', ['as' => 'home.support', 'uses' => 'Frontend\SupportController@index']);
    Route::get('/store', ['as' => 'home.store', 'uses' => 'Frontend\StoreController@index']);
    Route::get('/store-product', ['as' => 'home.store_product', 'uses' => 'Frontend\StoreProductController@index']);

    Route::get('/news', ['as' => 'home.news', 'uses' => 'Frontend\News2Controller@index']);
    Route::get('/flash-sale', ['as' => 'event.sale', 'uses' => 'Frontend\FrontendController@event']);

    Route::get('/about', ['as' => 'home.about', 'uses' => 'Frontend\AboutController@index']);
    Route::get('/checkout-order', ['as' => 'checkout_order.index', 'uses' => 'Frontend\CheckoutOrderController@index']);
    Route::post('/buy-now/{id}', ['as' => 'home.buy_now', 'uses' => 'Frontend\CheckoutOrderController@buy_now']);
    Route::post('/buy-now-alias/{alias}', ['as' => 'home.buy_now_alias', 'uses' => 'Frontend\CheckoutOrderController@buy_now_alias']);
    Route::get('/checkout-address', ['as' => 'home.checkout_address', 'uses' => 'Frontend\CheckoutAddressController@index']);
    Route::post('/checkout-payment', ['as' => 'home.checkout_payment', 'uses' => 'Frontend\CheckoutOrderController@checkout_payment']);
    Route::get('/marketing/activation/{key}', ['as' => 'marketing.activation', 'uses' => 'Frontend\MarketingController@activation']);
    Route::get('/construction/activation/{key}', ['as' => 'construction.activation', 'uses' => 'Frontend\ConstructionController@activation']);
    Route::get('/member/activation/{key}', ['as' => 'member.activation', 'uses' => 'Frontend\MemberController@activation']);
    Route::get('/create-payment',['as'=>'checkout.payment','uses'=>'Frontend\CheckoutOrderController@create_payment']);
    /* Sản phẩm */
    Route::get('/san-pham', ['as' => 'product.index', 'uses' => 'Frontend\ProductController@index']);
    Route::get('/danh-muc/{alias}', ['as' => 'category.show', 'uses' => 'Frontend\ProductController@category']);
    Route::get('/search-product', ['as' => 'product.search', 'uses' => 'Frontend\ProductController@search_product']);
    Route::get('/filter-product', ['as' => 'product.filter', 'uses' => 'Frontend\ProductController@filter']);
    Route::get('/news', ['as' => 'news.index', 'uses' => 'Frontend\NewsController@index']);
    
    Route::get('/sale', ['as' => 'product.sale', 'uses' => 'Frontend\ProductController@sale']);
    Route::get('/san-pham/{alias}', ['as' => 'product.detail', 'uses' => 'Frontend\ProductController@detail']);
    Route::get('/hot-product', ['as' => 'product.hot', 'uses' => 'Frontend\ProductController@hot']);
    Route::get('/all-product', ['as' => 'product.all', 'uses' => 'Frontend\ProductController@all']);
    Route::get('/product/{alias}', ['as' => 'product.detail', 'uses' => 'Frontend\ProductController@detail']);

    /* Hình ảnh */
    Route::get('/hinh-anh', ['as' => 'gallery.index', 'uses' => 'Frontend\GalleryController@index']);
    Route::get('/hinh-anh/{alias}', ['as' => 'gallery.detail', 'uses' => 'Frontend\GalleryController@detail']);
    /* Thi công */
    Route::get('/thi-cong', ['as' => 'construction.index', 'uses' => 'Frontend\ConstructionController@index']);
    Route::get('/thi-cong/{alias}', ['as' => 'construction.detail', 'uses' => 'Frontend\ConstructionController@detail']);
    Route::get('/thi-cong/du-an/danh-sach', ['as' => 'construction.list_project', 'uses' => 'Frontend\ConstructionController@listProject']);
    Route::get('/thi-cong/tao-moi/du-an', ['as' => 'construction.add_project', 'uses' => 'Frontend\ConstructionController@addProject']);
    Route::get('/thi-cong/du-an/{alias}', ['as' => 'construction.edit_project', 'uses' => 'Frontend\ConstructionController@editProject']);
    Route::get('/thi-cong/du-an/xoa/{alias}', ['as' => 'construction.delete_project', 'uses' => 'Frontend\ConstructionController@deleteProject']);
    Route::post('/thi-cong/du-an/create', ['as' => 'construction.create_project', 'uses' => 'Frontend\ConstructionController@createProject']);
    Route::post('/thi-cong/du-an/update/{id}', ['as' => 'construction.update_project', 'uses' => 'Frontend\ConstructionController@updateProject']);
    Route::get('/thi-cong/tai-khoan/{alias}', ['as' => 'construction.edit_profile', 'uses' => 'Frontend\ConstructionController@editProfile']);
    Route::post('/thi-cong/cap-nhat-tai-khoan/{alias}', ['as' => 'construction.update_profile', 'uses' => 'Frontend\ConstructionController@updateProfile']);
    /* Dự án */
    Route::get('/du-an/{alias}', ['as' => 'project.detail', 'uses' => 'Frontend\ProjectController@detail']);
    //Contact
    Route::get('/lien-he/', ['as' => 'contact.detail', 'uses' => 'Frontend\NewsController@contact_detail']);
    Route::post('/lien-he/store/', ['as' => 'contact.store', 'uses' => 'Frontend\NewsController@contact_store']);

    /* Tin tuc */
    // Route::get('/tin-tuc', ['as' => 'news.list', 'uses' => 'Frontend\NewsController@index']);
    Route::get('/danh-muc-tin/{alias}', ['as' => 'news_category.index', 'uses' => 'Frontend\NewsController@index']);
    Route::get('/tin-tuc', ['as' => 'news.list', 'uses' => 'Frontend\NewsController@list']);
    Route::get('/tin-tuc/{alias}', ['as' => 'news.detail', 'uses' => 'Frontend\NewsController@detail']);
    /* Video */
    Route::get('/video', ['as' => 'video.index', 'uses' => 'Frontend\VideoController@index']);
    Route::get('/video/{alias}', ['as' => 'video.detail', 'uses' => 'Frontend\VideoController@detail']);
    Route::get('/search-result', ['as' => 'video.search', 'uses' => 'Frontend\VideoController@search']);
    /* Giỏ hàng */
    Route::get('/cart', ['as' => 'product.cart', 'uses' => 'Frontend\ProductController@cart']);
    /* Thanh toán */
    Route::get('/checkout', ['as' => 'product.checkout', 'uses' => 'Frontend\ProductController@checkout']);
    Route::post('/checkout-success', ['as' => 'product.checkout-sucess', 'uses' => 'Frontend\ProductController@checkoutSuccess']);
    /* Tiếp thị liên kết */
    Route::get('/marketing/{alias}', ['as' => 'marketing.index', 'uses' => 'Frontend\MarketingController@index']);
    Route::get('/khach-hang/tai-khoan/{alias}', ['as' => 'member.edit_profile', 'uses' => 'Frontend\MemberController@editProfile']);
    
});
