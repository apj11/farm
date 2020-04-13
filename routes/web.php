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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::group(['middleware' => ['auth:admin']], function() {
    Route::get('/admin', 'HomeController@index')->name('home');
    Route::resource('/', 'Admin\IndexController');

    Route::resource('animalmedicine', 'Admin\AnimalmedicineController');

    Route::resource('animalfood', 'Admin\AnimalfoodController');

    Route::resource('medicinestatus', 'Admin\MedicinestatusController');

    Route::resource('foodstatus', 'Admin\FoodstatusController');



    Route::resource('addanimal', 'Admin\AddanimalController');
    Route::get('/addanimal/delete/{id}', 'Admin\AddanimalController@destroy')->name('addanimal.destroy');

    Route::resource('animal', 'Admin\AnimalController');

    Route::resource('categories', 'Admin\CategoriesController');
    Route::get('/categories/delete/{id}', 'Admin\CategoriesController@destroy')->name('categories.destroy');

    Route::resource('employee', 'Admin\EmployeeController');

    Route::resource('food', 'Admin\FoodController');
    Route::get('/food/delete/{id}', 'Admin\FoodController@destroy')->name('food.destroy');

    Route::resource('medicine', 'Admin\MedicineController');
    Route::get('/medicine/delete/{id}', 'Admin\MedicineController@destroy')->name('medicine.destroy');

    Route::resource('purchasereport', 'Admin\PurchasereportController');

    Route::resource('feedfood', 'Admin\FeedfoodController');

    Route::resource('feedmedicine', 'Admin\FeedmedicineController');

    Route::resource('buy', 'Admin\BuyController');
    Route::get('/buy/delete/{id}', 'Admin\BuyController@destroy')->name('buy.destroy');

    Route::resource('salesreport', 'Admin\SalesreportController');

    Route::resource('sell', 'Admin\SellController');
    Route::get('/sell/delete/{id}', 'Admin\SellController@destroy')->name('sell.destroy');

    Route::resource('addemployee', 'Admin\AddemployeeController');
    Route::get('/addemployee/delete/{id}', 'Admin\AddemployeeController@destroy')->name('addemployee.destroy');

    Route::resource('viewemployee', 'Admin\ViewemployeeController');

    Route::resource('animalview', 'Admin\AnimalviewController');

});


Route::namespace('Admin\Auth')->group(function (){

    //login route
    Route::get('/login','LoginController@showLoginForm')->name('login');
    Route::post('/login','LoginController@login')->name('login.store');
    Route::get('/logout','LoginController@logout')->name('logout');

    //forget password
    Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::get('/password/email','ForgotPasswordController@sendLinkRequestForm')->name('password.email');

    //reset password
    Route::get('/password/reset{token}','ResetPasswordController@showResetForm')->name('password.reset');
    Route::get('/password/reset','ResetPasswordController@reset')->name('password.update');
});
