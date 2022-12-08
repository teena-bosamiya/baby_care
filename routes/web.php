<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\brandsController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\productController;
use App\Http\Controllers\ratingController;
use App\Http\Controllers\userController;

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

//client Side Route
Route::get('/', [homeController::class,'index']);
Route::get('contact', [ContactController::class,'index']);
Route::get('forgot_password', [userController::class,'forgot_password']);
Route::get('product', [productController::class,'product']);
Route::get('cat_product/{cat_id}', [productController::class,'cat_product']);
Route::get('brand_product/{brand_id}', [productController::class,'brand_product']);
Route::get('user_login',[userController::class,'user_login_view']);
Route::get('user_register',[userController::class,'user_register_view']);
Route::get('product_details/{pro_id}',[productController::class,'product_details_view']);
Route::post('give_review',[feedbackController::class,'insert_review']);
Route::get('user_logout', function () {
    session()->forget('user_id');
    return redirect('/');
});
Route::get('user_cart',[cartController::class,'view_client_cart']);

//client side cart
Route::get('cart', [cartController::class, 'cart'])->name('cart');
Route::post('add-to-cart', [cartController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [cartController::class, 'update'])->name('update_cart');
Route::get('remove-from-cart', [cartController::class, 'remove'])->name('remove_from_cart');
Route::post('buyCart', [cartController::class, 'buyCart'])->name('buyCart');


//insert data from client side
Route::post('insert_contact_info', [ContactController::class,'insert_contact_info']);
Route::post('register',[userController::class,'user_register']);
Route::post('login',[userController::class,'user_login']);
Route::post('verify_user',[userController::class,'verify_user']);
Route::get('reset_password',[userController::class,'reset_password']);
Route::post('update_password',[userController::class,'update_password']);



//Admin Side Route
Route::get('admin',[adminController::class,'index']);
//Add Details Admin view Side Route
Route::get('add_category',[categoryController::class,'add_category']);
Route::get('add_brands',[brandsController::class,'add_brands']);
Route::get('add_product',[productController::class,'add_product']);
Route::get('add_new_admin',[adminController::class,'add_new_admin']);


//Insert Details Admin Side
Route::post('insert_category',[categoryController::class,'insert_category']);
Route::post('insert_brand',[brandsController::class,'insert_brand']);
Route::post('insert_product',[productController::class,'insert_product']);
Route::post('insert_new_admin',[adminController::class,'insert_new_admin']);
Route::post('admin_login',[adminController::class,'admin_login']);

Route::get('admin_logout', function () {
    session()->forget('admin_id');
    return redirect('admin');
});


//View Details Admin Side Route
Route::get('view_category',[categoryController::class,'view_category']);
Route::get('view_brands',[brandsController::class,'view_brands']);
Route::get('view_cart',[cartController::class,'view_cart']);
Route::get('view_contact',[contactController::class,'view_contact']);
Route::get('view_feedback',[feedbackController::class,'view_feedback']);
Route::get('view_product',[productController::class,'view_product']);
Route::get('view_users',[userController::class,'view_users']);
Route::get('view_admin',[adminController::class,'view_admin']);


//Update Details Admin Side Route
Route::get('edit_brand/{brand_id}', [brandsController::class,'edit_brand']);
Route::post('update_brand', [brandsController::class,'update_brand']);
Route::get('delete_brand/{brand_id}', [brandsController::class,'delete_brand']);

Route::get('edit_category/{category_id}', [categoryController::class,'edit_category']);
Route::post('update_category', [categoryController::class,'update_category']);
Route::get('delete_category/{cat_id}', [categoryController::class,'delete_category']);

Route::get('edit_product/{product_id}', [productController::class,'edit_product']);
Route::post('update_product', [productController::class,'update_product']);
Route::get('delete_product/{pro_id}', [productController::class,'delete_product']);

Route::get('profile/{admin_id}', [adminController::class,'edit_admin']);
Route::post('update_admin', [adminController::class,'update_admin']);


//reset admin password
Route::get('forgot_password_admin', [adminController::class,'forgot_password_admin']);
Route::post('verify_admin',[adminController::class,'verify_admin']);
Route::get('reset_admin_password',[adminController::class,'reset_admin_password']);
Route::post('update_admin_password',[adminController::class,'update_admin_password']);

//change status admin side
Route::get('change_cat_status/{cat_id}', [categoryController::class,'change_cat_status']);
Route::get('change_pro_status/{pro_id}', [productController::class,'change_pro_status']);
Route::get('change_brand_status/{brand_id}', [brandsController::class,'change_brand_status']);
Route::get('change_user_status/{user_id}', [userController::class,'change_user_status']);
Route::get('change_feed_status/{feed_id}', [feedbackController::class,'change_feed_status']);
