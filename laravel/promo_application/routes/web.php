<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@getHomeContent')->name('home');
Route::get('/about', 'PageController@getAboutContent')->name('about');
Route::get('/contact', 'PageController@getContactContent')->name('contact');
Route::get('/blog', 'PageController@getBlogContent')->name('blog');
Route::get('/policy', 'PageController@getPolicyContent')->name('policy');

Route::post('/blog/donate', 'PostsController@postDonate')->name('blog.donate');
Route::get('/blog/{id}/show', 'PostsController@getShow')->name('blog.show');

Route::post('/subscribe', 'NewsletterController@postSubscribe')->name('subscribe');

Route::post('/contact', 'PageController@submitContactForm')->name('contact.post');
Route::get('/contact/confirm', 'PageController@confirmContactForm')->name('mail.confirm');

Route::get('/donate','MollieController@registerPayment')->name('mollie.register');
Route::post('/mollie-payment','MollieController@preparePayment')->name('mollie.payment');
Route::name('webhooks.mollie')->post('/webhooks/mollie', 'MollieController@postRegisterPayment');
Route::get('/payment-success','MollieController@paymentSuccess')->name('payment.success');

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['verified']], function () {

    Auth::check();

    Route::get('/admin', 'DashboardController@getIndexPages')->name('page.index');
    Route::get('/pages/edit/{page}', 'DashboardController@getEditPage')->name('pages.edit');
    Route::post('/pages/edit/{page}', 'DashboardController@postEditPage')->name('pages.edit.post');
    Route::post('/pages/delete/{page}', 'DashboardController@getDeletePage')->name('pages.delete');

    Route::get('/blog/index', 'DashboardController@getIndexBlog')->name('blog.index');
    Route::get('/blog/edit/{id}', 'DashboardController@getEditBlog')->name('blog.edit.get');
    Route::post('/blog/edit/{id}', 'DashboardController@postEditBlog')->name('blog.edit.post');
    Route::post('/blog/delete/{id}', 'DashboardController@postDeleteBlog')->name('blog.delete');
    Route::get('/blog/create', 'DashboardController@postCreateBlog')->name('blog.create');
    Route::post('/blog/store', 'DashboardController@postStoreBlog')->name('blog.store');

} );

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Confirm Password (added in v6.2)
Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// Email Verification Routes...
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify'); // v6.x
/* Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify'); // v5.x */
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');