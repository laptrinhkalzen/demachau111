<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('/', ['as' => 'admin.index', 'uses' => 'Backend\BackendController@index']);
    /* Cấu hình website */
    Route::get('/config', ['as' => 'admin.config.index', 'uses' => 'Backend\ConfigController@index']);
    Route::post('/config/update/{id}', ['as' => 'admin.config.update', 'uses' => 'Backend\ConfigController@update']);

    /* Quản lý danh mục */
    Route::get('/category/{type}', ['as' => 'admin.category.index', 'uses' => 'Backend\CategoryController@index']);
    Route::get('/category/{type}/create', ['as' => 'admin.category.create', 'uses' => 'Backend\CategoryController@create']);
    Route::get('/category/{type}/edit/{id}', ['as' => 'admin.category.edit', 'uses' => 'Backend\CategoryController@edit']);
    Route::post('/category/{type}/store', ['as' => 'admin.category.store', 'uses' => 'Backend\CategoryController@store']);
    Route::post('/category/{type}/update/{id}', ['as' => 'admin.category.update', 'uses' => 'Backend\CategoryController@update']);
    Route::delete('/category/{type}/delete/{id}', ['as' => 'admin.category.destroy', 'uses' => 'Backend\CategoryController@destroy']);

       /* Quản lý coupon */
    Route::get('/coupon', ['as' => 'admin.coupon.index', 'uses' => 'Backend\CouponController@index']);
    Route::get('/coupon/create', ['as' => 'admin.coupon.create', 'uses' => 'Backend\CouponController@create']);
    Route::post('/coupon/store', ['as' => 'admin.coupon.store', 'uses' => 'Backend\CouponController@store']);
    Route::get('/coupon/edit/{id}', ['as' => 'admin.coupon.edit', 'uses' => 'Backend\CouponController@edit']);
    Route::post('/coupon/update/{id}', ['as' => 'admin.coupon.update', 'uses' => 'Backend\CouponController@update']);
    Route::delete('/coupon/delete/{id}', ['as' => 'admin.coupon.destroy', 'uses' => 'Backend\CouponController@destroy']);

    /* Quản lý flashsale */
    Route::get('/flashsale', ['as' => 'admin.flashsale.index', 'uses' => 'Backend\FlashSaleController@index']);
    Route::get('/flashsale/create', ['as' => 'admin.flashsale.create', 'uses' => 'Backend\FlashSaleController@create']);
    Route::post('/flashsale/store', ['as' => 'admin.flashsale.store', 'uses' => 'Backend\FlashSaleController@store']);
    Route::get('/flashsale/edit/{id}', ['as' => 'admin.flashsale.edit', 'uses' => 'Backend\FlashSaleController@edit']);
    Route::post('/flashsale/update/{id}', ['as' => 'admin.flashsale.update', 'uses' => 'Backend\FlashSaleController@update']);
    Route::delete('/flashsale/delete/{id}', ['as' => 'admin.flashsale.destroy', 'uses' => 'Backend\FlashSaleController@destroy']);

    // Giao diện: social
     Route::get('/social', ['as' => 'admin.social.index', 'uses' => 'Backend\SocialController@index']);
    Route::get('/social/create', ['as' => 'admin.social.create', 'uses' => 'Backend\SocialController@create']);
    Route::get('/social/edit/{id}', ['as' => 'admin.social.edit', 'uses' => 'Backend\SocialController@edit']);
    Route::post('/social/store', ['as' => 'admin.social.store', 'uses' => 'Backend\SocialController@store']);
    Route::post('/social/update/{id}', ['as' => 'admin.social.update', 'uses' => 'Backend\SocialController@update']);
    Route::delete('/social/delete/{id}', ['as' => 'admin.social.destroy', 'uses' => 'Backend\SocialController@destroy']);

    // Giao diện: company-infor
     Route::get('/company-infor', ['as' => 'admin.company_infor.index', 'uses' => 'Backend\CompanyInforController@index']);
    Route::get('/company-infor/create', ['as' => 'admin.company_infor.create', 'uses' => 'Backend\CompanyInforController@create']);
    Route::get('/company-infor/edit/{id}', ['as' => 'admin.company_infor.edit', 'uses' => 'Backend\CompanyInforController@edit']);
    Route::post('/company-infor/store', ['as' => 'admin.company_infor.store', 'uses' => 'Backend\CompanyInforController@store']);
    Route::post('/company-infor/update/{id}', ['as' => 'admin.company_infor.update', 'uses' => 'Backend\CompanyInforController@update']);
    Route::delete('/company-infor/delete/{id}', ['as' => 'admin.company_infor.destroy', 'uses' => 'Backend\CompanyInforController@destroy']);

    // Giao diện: customer-support
     Route::get('/customer-support', ['as' => 'admin.customer_support.index', 'uses' => 'Backend\CustomerSupportController@index']);
    Route::get('/customer-support/create', ['as' => 'admin.customer_support.create', 'uses' => 'Backend\CustomerSupportController@create']);
    Route::get('/customer-support/edit/{id}', ['as' => 'admin.customer_support.edit', 'uses' => 'Backend\CustomerSupportController@edit']);
    Route::post('/customer-support/store', ['as' => 'admin.customer_support.store', 'uses' => 'Backend\CustomerSupportController@store']);
    Route::post('/customer-support/update/{id}', ['as' => 'admin.customer_support.update', 'uses' => 'Backend\CustomerSupportController@update']);
    Route::delete('/customer-support/delete/{id}', ['as' => 'admin.customer_support.destroy', 'uses' => 'Backend\CustomerSupportController@destroy']);

    // Quan ly benefit
     Route::get('/benefit', ['as' => 'admin.benefit.index', 'uses' => 'Backend\BenefitController@index']);
    Route::get('/benefit/create', ['as' => 'admin.benefit.create', 'uses' => 'Backend\BenefitController@create']);
    Route::get('/benefit/edit/{id}', ['as' => 'admin.benefit.edit', 'uses' => 'Backend\BenefitController@edit']);
    Route::post('/benefit/store', ['as' => 'admin.benefit.store', 'uses' => 'Backend\BenefitController@store']);
    Route::post('/benefit/update/{id}', ['as' => 'admin.benefit.update', 'uses' => 'Backend\BenefitController@update']);
    Route::delete('/benefit/delete/{id}', ['as' => 'admin.benefit.destroy', 'uses' => 'Backend\BenefitController@destroy']);

    /* Phương thức thanh toán */
    Route::get('/payment-method', ['as' => 'admin.payment_method.index', 'uses' => 'Backend\PaymentMethodController@index']);
    Route::get('/payment-method/create', ['as' => 'admin.payment_method.create', 'uses' => 'Backend\PaymentMethodController@create']);
    Route::get('/payment-method/edit/{id}', ['as' => 'admin.payment_method.edit', 'uses' => 'Backend\PaymentMethodController@edit']);
    Route::post('/payment-method/store', ['as' => 'admin.payment_method.store', 'uses' => 'Backend\PaymentMethodController@store']);
    Route::post('/payment-method/update/{id}', ['as' => 'admin.payment_method.update', 'uses' => 'Backend\PaymentMethodController@update']);
    Route::delete('/payment-method/delete/{id}', ['as' => 'admin.payment_method.destroy', 'uses' => 'Backend\PaymentMethodController@destroy']);
    Route::get('/', ['as' => 'admin.index', 'uses' => 'Backend\BackendController@index']);

    /* Quản lý video */
    Route::get('/video', ['as' => 'admin.video.index', 'uses' => 'Backend\VideoController@index']);
    Route::get('/video/create', ['as' => 'admin.video.create', 'uses' => 'Backend\VideoController@create']);
    Route::post('/video/store', ['as' => 'admin.video.store', 'uses' => 'Backend\VideoController@store']);
    Route::get('/video/edit/{id}', ['as' => 'admin.video.edit', 'uses' => 'Backend\VideoController@edit']);
    Route::post('/video/update/{id}', ['as' => 'admin.video.update', 'uses' => 'Backend\VideoController@update']);
    Route::delete('/video/delete/{id}', ['as' => 'admin.video.destroy', 'uses' => 'Backend\VideoController@destroy']);

    /* Quản lý news */
    Route::get('/news', ['as' => 'admin.news.index', 'uses' => 'Backend\NewsController@index']);
    Route::get('/news/create', ['as' => 'admin.news.create', 'uses' => 'Backend\NewsController@create']);
    Route::post('/news/store', ['as' => 'admin.news.store', 'uses' => 'Backend\NewsController@store']);
    Route::get('/news/edit/{id}', ['as' => 'admin.news.edit', 'uses' => 'Backend\NewsController@edit']);
    Route::post('/news/update/{id}', ['as' => 'admin.news.update', 'uses' => 'Backend\NewsController@update']);
    Route::delete('/news/delete/{id}', ['as' => 'admin.news.destroy', 'uses' => 'Backend\NewsController@destroy']);

    /* Quản lý product */
    Route::get('/product', ['as' => 'admin.product.index', 'uses' => 'Backend\ProductController@index']);
    Route::get('/product/create', ['as' => 'admin.product.create', 'uses' => 'Backend\ProductController@create']);
    Route::post('/product/store', ['as' => 'admin.product.store', 'uses' => 'Backend\ProductController@store']);
    Route::get('/product/edit/{id}', ['as' => 'admin.product.edit', 'uses' => 'Backend\ProductController@edit']);
    Route::post('/product/update/{id}', ['as' => 'admin.product.update', 'uses' => 'Backend\ProductController@update']);
    Route::delete('/product/delete/{id}', ['as' => 'admin.product.destroy', 'uses' => 'Backend\ProductController@destroy']);

    /* Quản lý attribute */
    Route::get('/attribute', ['as' => 'admin.attribute.index', 'uses' => 'Backend\AttributeController@index']);
    Route::get('/attribute/create', ['as' => 'admin.attribute.create', 'uses' => 'Backend\AttributeController@create']);
    Route::post('/attribute/store', ['as' => 'admin.attribute.store', 'uses' => 'Backend\AttributeController@store']);
    Route::get('/attribute/edit/{id}', ['as' => 'admin.attribute.edit', 'uses' => 'Backend\AttributeController@edit']);
    Route::post('/attribute/update/{id}', ['as' => 'admin.attribute.update', 'uses' => 'Backend\AttributeController@update']);
    Route::delete('/attribute/delete/{id}', ['as' => 'admin.attribute.destroy', 'uses' => 'Backend\AttributeController@destroy']);

    /* Quản lý facebook-url */
    Route::get('/facebook-url', ['as' => 'admin.facebook_url.index', 'uses' => 'Backend\FacebookUrlController@index']);
    Route::post('/facebook-url/update', ['as' => 'admin.facebook_url.update', 'uses' => 'Backend\FacebookUrlController@update']);

     /* Quản lý đăng ký nhận tin */
    Route::get('/mes-register', ['as' => 'admin.mes_register.index', 'uses' => 'Backend\MesRegisterController@index']);
    Route::post('/mes-register/update', ['as' => 'admin.mes_register.update', 'uses' => 'Backend\MesRegisterController@update']);
    

    /* Quản lý hạng mục */
    Route::get('/item', ['as' => 'admin.item.index', 'uses' => 'Backend\ItemController@index']);
    Route::get('/item/create', ['as' => 'admin.item.create', 'uses' => 'Backend\ItemController@create']);
    Route::post('/item/store', ['as' => 'admin.item.store', 'uses' => 'Backend\ItemController@store']);
    Route::get('/item/edit/{id}', ['as' => 'admin.item.edit', 'uses' => 'Backend\ItemController@edit']);
    Route::post('/item/update/{id}', ['as' => 'admin.item.update', 'uses' => 'Backend\ItemController@update']);
    Route::delete('/item/delete/{id}', ['as' => 'admin.item.destroy', 'uses' => 'Backend\ItemController@destroy']);

    /* Quản lý đơn vị thi công */
    Route::get('/construction', ['as' => 'admin.construction.index', 'uses' => 'Backend\ConstructionController@index']);

    Route::get('/construction/edit/{id}', ['as' => 'admin.construction.edit', 'uses' => 'Backend\ConstructionController@edit']);
    Route::post('/construction/update/{id}', ['as' => 'admin.construction.update', 'uses' => 'Backend\ConstructionController@update']);
    Route::delete('/construction/delete/{id}', ['as' => 'admin.construction.destroy', 'uses' => 'Backend\ConstructionController@destroy']);

    /* Quản lý dự án */
    Route::get('/project', ['as' => 'admin.project.index', 'uses' => 'Backend\ProjectController@index']);
    Route::get('/project/edit/{id}', ['as' => 'admin.project.edit', 'uses' => 'Backend\ProjectController@edit']);
    Route::post('/project/update/{id}', ['as' => 'admin.project.update', 'uses' => 'Backend\ProjectController@update']);
    Route::delete('/project/delete/{id}', ['as' => 'admin.project.destroy', 'uses' => 'Backend\ProjectController@destroy']);

    /* Quản lý đơn vị thi công */
    Route::get('/review', ['as' => 'admin.review.index', 'uses' => 'Backend\ReviewController@index']);
    Route::delete('/review/delete/{id}', ['as' => 'admin.review.destroy', 'uses' => 'Backend\ReviewController@destroy']);

    /* Quản lý gallery */
    Route::get('/gallery', ['as' => 'admin.gallery.index', 'uses' => 'Backend\GalleryController@index']);
    Route::get('/gallery/create', ['as' => 'admin.gallery.create', 'uses' => 'Backend\GalleryController@create']);
    Route::post('/gallery/store', ['as' => 'admin.gallery.store', 'uses' => 'Backend\GalleryController@store']);
    Route::get('/gallery/edit/{id}', ['as' => 'admin.gallery.edit', 'uses' => 'Backend\GalleryController@edit']);
    Route::post('/gallery/update/{id}', ['as' => 'admin.gallery.update', 'uses' => 'Backend\GalleryController@update']);
    Route::delete('/gallery/delete/{id}', ['as' => 'admin.gallery.destroy', 'uses' => 'Backend\GalleryController@destroy']);

    /* Quản lý danh mục cấp bậc */
    Route::get('/rank', ['as' => 'admin.rank.index', 'uses' => 'Backend\RankController@index']);
    Route::get('/rank/create', ['as' => 'admin.rank.create', 'uses' => 'Backend\RankController@create']);
    Route::post('/rank/store', ['as' => 'admin.rank.store', 'uses' => 'Backend\RankController@store']);
    Route::get('/rank/edit/{id}', ['as' => 'admin.rank.edit', 'uses' => 'Backend\RankController@edit']);
    Route::post('/rank/update/{id}', ['as' => 'admin.rank.update', 'uses' => 'Backend\RankController@update']);
    Route::delete('/rank/delete/{id}', ['as' => 'admin.rank.destroy', 'uses' => 'Backend\RankController@destroy']);

    /* Quản lý danh mục cấp bậc */
    Route::get('/marketing', ['as' => 'admin.marketing.index', 'uses' => 'Backend\MarketingController@index']);
    Route::get('/marketing/edit/{id}', ['as' => 'admin.marketing.edit', 'uses' => 'Backend\MarketingController@edit']);
    Route::post('/marketing/update/{id}', ['as' => 'admin.marketing.update', 'uses' => 'Backend\MarketingController@update']);
    Route::delete('/marketing/delete/{id}', ['as' => 'admin.marketing.destroy', 'uses' => 'Backend\MarketingController@destroy']);

    /* Quản lý user */
    Route::get('/user', ['as' => 'admin.user.index', 'uses' => 'Backend\UserController@index']);
    Route::get('/user/create', ['as' => 'admin.user.create', 'uses' => 'Backend\UserController@create']);
    Route::post('/user/store', ['as' => 'admin.user.store', 'uses' => 'Backend\UserController@store']);
    Route::get('/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Backend\UserController@edit']);
    Route::post('/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Backend\UserController@update']);
    Route::delete('/user/delete/{id}', ['as' => 'admin.user.destroy', 'uses' => 'Backend\UserController@destroy']);

    Route::get('/user/edit_profile/{id}', ['as' => 'admin.user.index_profile', 'uses' => 'Backend\UserController@editProfile']);
    Route::post('/user/update_profile/{id}', ['as' => 'admin.user.update_profile', 'uses' => 'Backend\UserController@updateProfile']);
    /* Quản lý quyền */
    Route::get('/role', ['as' => 'admin.role.index', 'uses' => 'Backend\RoleController@index']);
    Route::get('/role/create', ['as' => 'admin.role.create', 'uses' => 'Backend\RoleController@create']);
    Route::post('/role/store', ['as' => 'admin.role.store', 'uses' => 'Backend\RoleController@store']);
    Route::get('/role/edit/{id}', ['as' => 'admin.role.edit', 'uses' => 'Backend\RoleController@edit']);
    Route::post('/role/update/{id}', ['as' => 'admin.role.update', 'uses' => 'Backend\RoleController@update']);
    Route::delete('/role/delete/{id}', ['as' => 'admin.role.destroy', 'uses' => 'Backend\RoleController@destroy']);

    /* Menu*/
    Route::get('/menu', ['as' => 'admin.menu.index', 'uses' => 'Backend\MenuController@index']);
    Route::get('/menu/create', ['as' => 'admin.menu.create', 'uses' => 'Backend\MenuController@create']);
    Route::get('/menu/edit/{id}', ['as' => 'admin.menu.edit', 'uses' => 'Backend\MenuController@edit']);
    Route::post('/menu/store', ['as' => 'admin.menu.store', 'uses' => 'Backend\MenuController@store']);
    Route::post('/menu/update/{id}', ['as' => 'admin.menu.update', 'uses' => 'Backend\MenuController@update']);
    Route::delete('/menu/delete/{id}', ['as' => 'admin.menu.destroy', 'uses' => 'Backend\MenuController@destroy']);
    /* Block*/
    Route::get('/block', ['as' => 'admin.block.index', 'uses' => 'Backend\BlockController@index']);
    Route::get('/block/create', ['as' => 'admin.block.create', 'uses' => 'Backend\BlockController@create']);
    Route::get('/block/edit/{id}', ['as' => 'admin.block.edit', 'uses' => 'Backend\BlockController@edit']);
    Route::post('/block/store', ['as' => 'admin.block.store', 'uses' => 'Backend\BlockController@store']);
    Route::post('/block/update/{id}', ['as' => 'admin.block.update', 'uses' => 'Backend\BlockController@update']);
    Route::delete('/block/delete/{id}', ['as' => 'admin.block.destroy', 'uses' => 'Backend\BlockController@destroy']);
    /* Slide*/
    Route::get('/slide', ['as' => 'admin.slide.index', 'uses' => 'Backend\SlideController@index']);
    Route::get('/slide/create', ['as' => 'admin.slide.create', 'uses' => 'Backend\SlideController@create']);
    Route::get('/slide/edit/{id}', ['as' => 'admin.slide.edit', 'uses' => 'Backend\SlideController@edit']);
    Route::post('/slide/store', ['as' => 'admin.slide.store', 'uses' => 'Backend\SlideController@store']);
    Route::post('/slide/update/{id}', ['as' => 'admin.slide.update', 'uses' => 'Backend\SlideController@update']);
    Route::delete('/slide/delete/{id}', ['as' => 'admin.slide.destroy', 'uses' => 'Backend\SlideController@destroy']);
    /* Dịch vụ*/
    Route::get('/service', ['as' => 'admin.service.index', 'uses' => 'Backend\ServiceController@index']);
    Route::get('/service/create', ['as' => 'admin.service.create', 'uses' => 'Backend\ServiceController@create']);
    Route::get('/service/edit/{id}', ['as' => 'admin.service.edit', 'uses' => 'Backend\ServiceController@edit']);
    Route::post('/service/store', ['as' => 'admin.service.store', 'uses' => 'Backend\ServiceController@store']);
    Route::post('/service/update/{id}', ['as' => 'admin.service.update', 'uses' => 'Backend\ServiceController@update']);
    Route::delete('/service/delete/{id}', ['as' => 'admin.service.destroy', 'uses' => 'Backend\ServiceController@destroy']);
    /* Người đăng kí*/
    Route::get('/subscriber', ['as' => 'admin.subscriber.index', 'uses' => 'Backend\SubscriberController@index']);
    Route::delete('/subscriber/delete/{id}', ['as' => 'admin.subscriber.destroy', 'uses' => 'Backend\SubscriberController@destroy']);
    /* Liên hệ*/
    Route::get('/contact', ['as' => 'admin.contact.index', 'uses' => 'Backend\ContactController@index']);
    Route::delete('/contact/delete/{id}', ['as' => 'admin.contact.destroy', 'uses' => 'Backend\ContactController@destroy']);
    Route::get('/contact/show/{id}', ['as' => 'admin.contact.edit', 'uses' => 'Backend\ContactController@show']);
    /* Thành viên*/
    Route::get('/member', ['as' => 'admin.member.index', 'uses' => 'Backend\MemberController@index']);
    Route::delete('/member/delete/{id}', ['as' => 'admin.member.destroy', 'uses' => 'Backend\MemberController@destroy']);
    Route::get('/member/show/{id}', ['as' => 'admin.member.edit', 'uses' => 'Backend\MemberController@show']);
    /* Đơn hàng*/
    Route::get('/order', ['as' => 'admin.order.index', 'uses' => 'Backend\OrderController@index']);
    Route::delete('/order/delete/{id}', ['as' => 'admin.order.destroy', 'uses' => 'Backend\OrderController@destroy']);
    Route::get('/order/show/{id}', ['as' => 'admin.order.edit', 'uses' => 'Backend\OrderController@show']);
     /* Template_seting*/
    Route::get('/template_setting', ['as' => 'admin.template_setting.index', 'uses' => 'Backend\TemplateSettingController@index']);
    Route::get('/template_setting/create', ['as' => 'admin.template_setting.create', 'uses' => 'Backend\TemplateSettingController@create']);
    Route::post('/template_setting/store', ['as' => 'admin.template_setting.store', 'uses' => 'Backend\TemplateSettingController@store']);

});
