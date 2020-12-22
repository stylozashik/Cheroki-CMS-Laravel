<?php

use Illuminate\Support\Facades\Route;


Route::get('/', "HomeController@choose_index");

// Routes for saloon frontend
Route::get('/saloon', "HomeController@saloon_index");

// Routes for tailor frontend
Route::get('/tailor', "TailorHomeController@tailor_index");

// Routes start for saloon backend
// Admin Dashboard
Route::get('/dashboard','SuperAdminController@index');

// Manage Logo Section
Route::get('/dashboard/logo','BrandController@index');
Route::post('/dashboard/logo/store','BrandController@store');

// Manage Banner Section
Route::get('/dashboard/banner','BannerController@index');
Route::post('/dashboard/banner/store','BannerController@store');
Route::get('/dashboard/banner/edit','BannerController@edit');
Route::patch('/dashboard/banner/update','BannerController@update');

// Manage banner logo
Route::get('/dashboard/banner/logo','BannerController@banner_logo');
Route::post('/dashboard/banner/logo/store','BannerController@store_banner_logo');

// Manage banner image
Route::get('/dashboard/banner/image','BannerController@banner_image');
Route::post('/dashboard/banner/image/store','BannerController@store_banner_image');

// Manage about info
Route::get('/dashboard/about/info','AboutController@create_info');
Route::post('/dashboard/about/info/store','AboutController@store_info');

// Manage about image
Route::get('/dashboard/about/image','AboutImageController@create_about_image');
Route::post('/dashboard/about/image/store','AboutImageController@store_about_image');

// Manage services section
Route::get('/dashboard/services','ServiceController@index');
Route::get('/dashboard/service/add','ServiceController@create_service');
Route::post('/dashboard/service/store','ServiceController@store_service');

// Manage Team Section
Route::get('/dashboard/team','TeamController@index');
Route::get('/dashboard/team/add','TeamController@create_member');
Route::post('/dashboard/team/store','TeamController@store_member');

// Our Works section
Route::get('/dashboard/our-works','OurWorksController@index');
Route::get('/dashboard/our-works/add','OurWorksController@create');
Route::post('/dashboard/our-works/store','OurWorksController@store');

// pricing section
Route::get('/dashboard/pricing','PriceListController@create');
Route::post('/dashboard/pricing/store','PriceListController@store');

// Testimonial Section
Route::get('/dashboard/testimonial','TestimonialController@create');
Route::post('/dashboard/testimonial/store','TestimonialController@store');

// Booking section
Route::get('/dashboard/booking','BookingController@index');
Route::post('/saloon/booking','BookingController@store');
Route::get('/dashboard/booking/{Booking}','BookingController@show');
Route::get('/dashboard/booking/{Booking}/edit','BookingController@edit');
Route::patch('/dashboard/booking/{Booking}/update','BookingController@update');
Route::delete('/dashboard/booking/{Booking}/delete','BookingController@destroy');

// Footer Section
Route::get('/dashboard/footer','FooterController@index');
Route::post('/dashboard/footer/store','FooterController@store');

// Admin login
Route::get('/admin-login','AdminController@login');
Route::post('/admin-data','AdminController@admin_data');

// Admin logout
Route::get('/admin-logout','SuperAdminController@logout');

// Admin Profile
Route::get('/dashboard/profile/admin','SuperAdminController@admin_profile');
Route::patch('/dashboard/profile/admin/update','SuperAdminController@update_admin_profile');


// Routes for saloon frontend
Route::get('/saloon', "HomeController@saloon_index");

// Routes for tailor frontend
Route::get('/tailor', "TailorHomeController@tailor_index");

// Routes start for tailor backend
// Tailor Admin Dashboard
Route::get('/dashboard/tailor','TailorSuperAdminController@index');

// Tailor  Logo Section
Route::get('/dashboard/tailor/logo','TailorBrandController@index');
Route::post('/dashboard/tailor/logo/store','TailorBrandController@store');

// Tailor  Banner Section
Route::get('/dashboard/tailor/banner','TailorBannerController@index');
Route::post('/dashboard/tailor/banner/store','TailorBannerController@store');
Route::get('/dashboard/tailor/banner/edit','TailorBannerController@edit');
Route::patch('/dashboard/tailor/banner/update','TailorBannerController@update');

// Tailor  banner logo
Route::get('/dashboard/tailor/banner/logo','TailorBannerController@banner_logo');
Route::post('/dashboard/tailor/banner/logo/store','TailorBannerController@store_banner_logo');

// Tailor  banner image
Route::get('/dashboard/tailor/banner/image','TailorBannerController@banner_image');
Route::post('/dashboard/tailor/banner/image/store','TailorBannerController@store_banner_image');

// Tailor  about info
Route::get('/dashboard/tailor/about/info/create','TailorAboutController@create');
Route::post('/dashboard/tailor/about/info/store','TailorAboutController@store');

// Tailor  about image
Route::get('/dashboard/tailor/about/image','TailorAboutImageController@create_about_image');
Route::post('/dashboard/tailor/about/image/store','TailorAboutImageController@store_about_image');

// Tailor  services section
Route::get('/dashboard/tailor/services','TailorServiceController@index');
Route::get('/dashboard/tailor/service/add','TailorServiceController@create_service');
Route::post('/dashboard/tailor/service/store','TailorServiceController@store_service');

// Tailor  Team Section
Route::get('/dashboard/tailor/team','TailorTeamController@index');
Route::get('/dashboard/tailor/team/add','TailorTeamController@create_member');
Route::post('/dashboard/tailor/team/store','TailorTeamController@store_member');

// Tailor Our Works section
Route::get('/dashboard/tailor/our-works','TailorOurWorksController@index');
Route::get('/dashboard/tailor/our-works/add','TailorOurWorksController@create');
Route::post('/dashboard/tailor/our-works/store','TailorOurWorksController@store');

// Tailor pricing section
Route::get('/dashboard/tailor/pricing','TailorPriceListController@create');
Route::post('/dashboard/tailor/pricing/store','TailorPriceListController@store');

// Tailor Testimonial Section
Route::get('/dashboard/tailor/testimonial','TailorTestimonialController@create');
Route::post('/dashboard/tailor/testimonial/store','TailorTestimonialController@store');

// Tailor Booking section
Route::get('/dashboard/tailor/booking','TailorBookingController@index');
Route::post('/tailor/booking','TailorBookingController@store');
Route::get('/dashboard/tailor/booking/{Booking}','TailorBookingController@show');
Route::get('/dashboard/tailor/booking/{Booking}/edit','TailorBookingController@edit');
Route::patch('/dashboard/tailor/booking/{Booking}/update','TailorBookingController@update');
Route::delete('/dashboard/tailor/booking/{Booking}/delete','TailorBookingController@destroy');

Route::get('/dashboard/footer','FooterController@index');

// Tailor Admin login
Route::get('/tailor/admin-login','TailorAdminController@login');
Route::post('/tailor/admin-data','TailorAdminController@admin_data');

// Tailor Admin logout
Route::get('/tailor/admin-logout','TailorSuperAdminController@logout');

// Tailor Admin Profile
Route::get('/dashboard/profile/admin','SuperAdminController@admin_profile');
Route::patch('/dashboard/profile/admin/update','SuperAdminController@update_admin_profile');

