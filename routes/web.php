<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('index.html', function () {
    return view('index');
});
Route::get('index.php', function () {
    return view('index');
});
Route::get('index', function () {
    return view('index');
});


Route::get('page1','AdminController@IndexShow')->name('index');


//Auth::routes();

Route::group(['namespace' => 'Auth'] , function (){
    // Authentication Routes...
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::get('logout', 'LoginController@logout')->name('logout');
    Route::post('logout', 'LoginController@logout')->name('logout');

    // Login And Register With Google
    Route::get('login/google', 'LoginController@redirectToProvider');
    Route::get('login/google/callback', 'LoginController@handleProviderCallback');

    // Registration Routes...
    Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/editeproduct','ProductController@showEdit');

Route::get('/send/emailregister', 'HomeController@mail');

//-------USERS and ADMIN Routes---------
Route::group(['prefix'=>'admin','middleware'=>'checkrole'] , function()
{
    Route::get('userslist', 'AdminController@showlistpage')->name('userslist');
    Route::get('submituser','AdminController@SubmitUser')->name('submituser');
    Route::get('edituser/{id}','AdminController@EditUser')->name('edituser');
    Route::post('edituser','AdminController@EditUserDb')->name('edituserdb');
    Route::post('changeroleinline','AdminController@ChangeRoleInline')->name('changeroleinline');
    Route::post('changestatusinline','AdminController@ChangeStatusInline')->name('changestatusinline');
    Route::post('adduser','AdminController@AddUser')->name('adduser');
    Route::get('/','AdminController@AdminShow')->name('adminpage');
    Route::get('editeproduct','ProductController@showEdit')->name('editproduct');
    Route::get('addproduct','ProductController@showAdd')->name('showaddproductpage');
    Route::post('addproduct','ProductController@AddProduct')->name('addProduct');
    Route::get('cat','CategoryController@ShowCatPage')->name('catpage');
    Route::post('subcat','CategoryController@CatSubmit')->name('catsub');

});
