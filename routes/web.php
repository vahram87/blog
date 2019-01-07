<?php


// User Routes-----------------------------------------

Route::group(['namespace'=>"user"],function(){
	Route::get("/","HomeController@index");
	Route::get("/գրականություն","HomeController@grak");
	Route::get("/արվեստ","HomeController@arvest");
	Route::get("/քննադատություն","HomeController@qnnadatutyun");
	Route::get("/մարդիկ","HomeController@mardik");
	Route::get("/post/{post?}","PostController@post")->name('post');
	Route::get("/post/category/{category}","HomeController@category")->name('category');
});

// Admin Routes-----------------------------------------

Route::group(['namespace'=>"admin"],function(){
	Route::get("admin/home","HomeController@index")->name("admin.home");
	Route::resource("admin/user","UserController");
	Route::resource("admin/post","PostController");
	Route::resource("admin/tag","TagController");
	Route::resource("admin/category","CategoryController");
});	


//Route::get('admin/home', function () {
    //return view('admin/home');
//});
//Route::get('admin/post', function () {
    //return view('admin/post/post');
//});
//Route::get('admin/category', function () {
   //return view('admin/post/category');
//});
//Route::get('admin/tag', function () {
    //return view('admin/post/tag');
//});


