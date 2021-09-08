<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('about', function () {
    return view('about');
     
});
Route::get('terms', function () {
    return view('terms');
     
});
Route::get('policy', function () {
    return view('policy');
     
});
// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::view('/', 'welcome');
Route::get('/', 'Controller@welcome');
    Auth::routes();

    Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
    Route::get('/login/agent', 'Auth\LoginController@showAgentLoginForm');
    Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
    Route::get('/register/agent', 'Auth\RegisterController@showAgentRegisterForm');

    Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    Route::post('/login/agent', 'Auth\LoginController@agentLogin');
    Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
    Route::post('/register/agent', 'Auth\RegisterController@createAgent');

    Route::view('/home', 'user.dashboard')->middleware('auth');
    Route::view('/home', 'user.shopping')->middleware('auth');
    Route::view('/home', 'user.youtube_click')->middleware('auth');
    Route::view('/home', 'user.offer_list')->middleware('auth');
    Route::view('/home', 'user.new_membar')->middleware('auth');
    Route::view('/home', 'user.car_tre')->middleware('auth');
    Route::view('/admin', 'admin')->middleware('auth:admin');
    Route::view('/agent', 'agent')->middleware('auth:agent');
    
     //offer
    Route::post('admin/offer', 'PlanController@offer')->middleware('auth:admin');
    Route::post('admin/marketing', 'PlanController@marketing')->middleware('auth:admin');
    Route::post('admin/renew', 'PlanController@renew')->middleware('auth:admin');
    Route::post('admin/rank', 'PlanController@rank')->middleware('auth:admin');
    Route::post('admin/offer_details', 'PlanController@offer_details')->middleware('auth:admin');
    
    //wallet
    Route::post('admin/wallet', 'PlanController@wallet')->middleware('auth:admin');
    Route::post('admin/withdraw', 'PlanController@withdraw')->middleware('auth:admin');
    Route::post('admin/register_wallet', 'PlanController@register_wallet')->middleware('auth:admin');
    Route::post('admin/sponsor', 'PlanController@sponsor')->middleware('auth:admin');
    Route::post('admin/rankwallet', 'PlanController@rankwallet')->middleware('auth:admin');
    Route::post('admin/youtube', 'PlanController@youtube')->middleware('auth:admin');
    Route::post('admin/renew', 'PlanController@renew')->middleware('auth:admin');
    Route::post('admin/carry', 'PlanController@carry')->middleware('auth:admin');
    Route::post('admin/gen_wallet', 'PlanController@gen_wallet')->middleware('auth:admin');

    Route::get('admin/plan', 'PlanController@index')->middleware('auth:admin');
    Route::post('admin/plan/create', 'PlanController@plan_create')->middleware('auth:admin');
    Route::get('admin/plan/edit/{id}', 'PlanController@edit')->middleware('auth:admin');
    Route::post('admin/plan/update/{id}','PlanController@update')->middleware('auth:admin');
    Route::post('admin/plan/destroy/{id}','PlanController@destroy')->middleware('auth:admin');
    
    Route::get('admin/work/delete/{id}','PlanController@wdelete')->middleware('auth:admin');
    Route::get('admin/slider/delete/{id}','PlanContro@sllerdelete')->middleware('auth:admin');
    Route::get('admin/work', 'PlanController@work')->middleware('auth:admin');
    Route::post('admin/work/create', 'PlanController@work_create')->middleware('auth:admin');
    Route::get('admin/work/wedit/{id}', 'PlanController@wedit')->middleware('auth:admin');
    Route::post('admin/work/wupdate/{id}','PlanController@wupdate')->middleware('auth:admin');
    Route::get('admin/slider', 'PlanController@slider')->middleware('auth:admin');
    Route::post('admin/slider/create', 'PlanController@slider_create')->middleware('auth:admin');
    Route::get('admin/slider/sedit/{id}', 'PlanController@sedit')->middleware('auth:admin');
    Route::post('admin/slider/supdate/{id}','PlanController@supdate')->middleware('auth:admin');


//zahidul
Route::resource('admin/video', 'VideoController')->middleware('auth:admin');
Route::resource('admin/payby', 'PaybyController')->middleware('auth:admin');
Route::resource('admin/rank', 'RankController')->middleware('auth:admin');
Route::resource('admin/matching', 'MatchingController')->middleware('auth:admin');
Route::resource('admin/commission', 'CommissionController')->middleware('auth:admin');
Route::resource('admin/sponsor', 'SponsorController')->middleware('auth:admin');
    

Route::group([ 'prefix'=>'user',
'namespace'=>'User',
'middleware'=> 'auth',


], function() {
    Route::get('dashboard', 'DashboardController@index');
    Route::get('shopping', 'DashboardController@shopping');
    Route::get('youtube_click', 'DashboardController@youtube_click');
    Route::get('offer_list', 'DashboardController@offer_list');
    Route::get('new_membar', 'DashboardController@new_membar');
    Route::get('car_tre', 'DashboardController@car_tre');
    Route::get('marketingplan', 'DashboardController@marketingplan');
     Route::get('offer_details', 'DashboardController@offer_details');
    Route::get('renewplan', 'DashboardController@renewplan');
    Route::get('offer', 'DashboardController@offer');
    Route::get('work', 'DashboardController@work');
    Route::get('rank', 'DashboardController@rank');
    Route::get('wallet', 'DashboardController@wallet');
    Route::get('withdraw', 'DashboardController@withdraw');
    Route::get('register_wallet', 'DashboardController@register_wallet');
    Route::get('sponsor', 'DashboardController@sponsor');
    Route::get('rankwallet', 'DashboardController@rankwallet');
    Route::get('renew', 'DashboardController@renew');
    Route::get('carry', 'DashboardController@carry');
    Route::get('gen_wallet', 'DashboardController@gen_wallet');
    Route::get('youtube', 'DashboardController@youtube');
    Route::get('video', 'VideoController@index');
    Route::post('video', 'VideoController@store');
   
   
}
);