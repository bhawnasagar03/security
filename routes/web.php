<?php

use App\notification\Notification;

/*use 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','SearchController@welcome')->name('welcome');
Route::get('/index', 'SearchController@headView')->name('index');

Route::get('header', 'SearchController@index')->name('header');


    
		//guard selection..
Route::get('signup-selection', 'User\RegisterController@selectSignup')->name('signupSelection');


		//Guard Regstration..
Route::get('guard-signup', 'User\RegisterController@guardSignup')->name('guardSignup');
		

		//Customer Regstration..
Route::get('customer-regstration','User\RegisterController@showSignupForm')->name('customerRegister');
Route::post('customer-regstration','User\RegisterController@registerUser');


		// Login Form..
Route::get('customer-login','User\LoginController@showLoginForm')->name('customerLogin');
Route::post('customer-login','User\LoginController@login');


		//Email Verification..
Route::get('verifyEmailFirst','User\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');

		//Send Verification Email..
Route::get('verify/{email}/{verifyToken}','User\RegisterController@sendEmailDone')->name('sendEmailDone');

Auth::routes();
		//Customer Dashboard
Route::get('/home', 'SignupAuthController@index')->name('home');

			//show data
Route::get('/showData', 'SignupAuthController@showData')->name('showData');

		//Customer Dashboard show data..
Route::get('show', 'SignupAuthController@showData')->name('showData');

		// Guard Dashboard..
Route::get('guardHome', 'HomeController@guardHome')->name('guardHome');

		// Admin Dashboard..
Route::get('adminHome', 'HomeController@guardHome')->name('adminHome');

		//user Wishlist
Route::get('/guardWishlist/{id}', 'HomeController@guardWishlist')->name('guardWishlist');

		//add to kart
Route::get('/getWishlist', 'HomeController@getWishlist')->name('getWishlist');

		// add to wishlist
Route::get('/addToWishlist', 'HomeController@wishlist')->name('addToWishlist');

		// Book Guard
Route::get('/bookGuard', 'HomeController@bookGuard')->name('bookGuard');

		//cancelGuard
Route::get('/cancelGuard', 'HomeController@cancelGuard')->name('cancelGuard');

		// Contact guard
Route::get('contact', 'GuardBookedController@index')->name('contact');
Route::post('contact', 'GuardBookedController@contact');

       //notifications

Route::get('markAsRead', 'HomeController@markAsRead')->name('markRead');

 			//guard filter 
 Route::post('/search/guards', 'SearchController@guardSearch')->name('search.guard');


Auth::routes();

//user reset password
 Route::POST('user-password/email','User\ForgotPasswordController@sendResetLinkEmail')->name('user.password.email');

Route::GET('user-password/reset','User\ForgotPasswordController@showLinkRequestForm')->name('user.password.request');

Route::POST('user-password/reset','User\ResetPasswordController@reset');

Route::GET('user-password/reset/{token}','User\ResetPasswordController@showResetForm')->name('user.password.reset');


		//Admin Panel routes
Route::POST('admin/register','Admin\RegisterController@register');

Route::GET('admin/register','Admin\RegisterController@showRegistrationForm')->name('admin.register');

		//login and logout
Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');

Route::POST('admin','Admin\LoginController@login');


		//reset password of admin
 Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');

Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');

Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

		//logout 

Route::POST('admin/logout','Admin\LoginController@logout')->name('admin.logout');

		//admin home
Route::GET('admin/Dashboard','AdminController@index')->name('admin.dashboard');

Route::GET('admin/show/Guard','AdminController@showGuard')->name('admin.showGuard');


Route::GET('admin/show/User','AdminController@showUser')->name('admin.showUser');


Route::GET('admin/delete/User/{id}','AdminController@deleteUser')->name('deleteUser');


Route::GET('admin/delete/Guard/{id}','AdminController@deleteGuard')->name('deleteGuard');


Route::GET('admin/search/user','AdminController@searchUser')->name('searchUser');

Route::GET('admin/search/users','AdminController@searchU')->name('searchU');


