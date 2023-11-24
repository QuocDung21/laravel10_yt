<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\BrandProduct;
use App\Http\Controllers\CategoryPost;
use App\Http\Controllers\Post;
use App\Http\Controllers\ProductController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/f', [HomeController::class, 'footer']);
Route::get('/upload', [HomeController::class, 'upload']);
Route::get('/cart', [HomeController::class, 'cart']);
Route::get('/checkout', [HomeController::class, 'checkout']);

Route::get('/category', [HomeController::class, 'category']);


Route::get('/', [HomeController::class, 'index']);

/// Admin

Route::get('/dang-nhap', [AdminController::class, 'index']);

Route::get('/admin', [AdminController::class, 'login']);


Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'dashboard']);

Route::get('/logout', [AdminController::class, 'logout']);
Route::get('/account', [HomeController::class, 'acount']);
Route::get('/shipping-unit', [AdminController::class, 'shipping_unit']);
Route::post('/add-shipping-unit', [AdminController::class, 'add_shipping_unit']);
Route::get('/delete-shipping-unit/{shipping_id}', [AdminController::class, 'delete_shipping_unit']);
Route::get('/discount', [AdminController::class, 'discount']);
Route::post('/add-discount', [AdminController::class, 'add_discount']);
Route::post('/check-code', [AdminController::class, 'check_code']);

Route::get('/order-list', [AdminController::class, 'order_list']);
Route::get('/cancel-bill/{bill_id}', [AdminController::class, 'cancel_bill']);
Route::get('/update-bill-status/{orderId}', [AdminController::class, 'update_bill_status']);
Route::get('/order-details/{orderId}', [AdminController::class, 'order_details']);
Route::get('/view-bill/{orderId}', [AdminController::class, 'view_bill']);
Route::get('/update3/{orderId}', [AdminController::class, 'update3']);
Route::get('/update2/{orderId}', [AdminController::class, 'update2']);
Route::get('/print-bill/{orderId}', [AdminController::class, 'print_bill']);

Route::get('/advertising', [AdminController::class, 'advertising']);
Route::get('/send-email', [AdminController::class, 'send_email']);
Route::get('/delete-email-promotion/{id}', [AdminController::class, 'delete_email_promotion']);
// Route::get('send-e', [AdminController::class, 'send_e']);
Route::get('/send-emails/{emailString}', [AdminController::class, 'sendEmails']);

Route::get('/mail-content', [AdminController::class, 'mail_content']);
Route::get('/send-mail', [AdminController::class, 'send_mail']);

// Post
Route::get('/addcatepost', [CategoryPost::class, 'show_cate_post']);
Route::post('/add-category-post', [CategoryPost::class, 'add_category_post']);
Route::get('/delete-cate-post/{catepostId}', [CategoryPost::class, 'delete_category_post']);
Route::get('/move-up-post/{catepostId}', [CategoryPost::class, 'move_up_post']);
Route::get('/get-cate-post-info/{postId}', [CategoryPost::class, 'getCatePostInfo']);
Route::post('/update-cate-post', [CategoryPost::class, 'updateCategoryPost']);
Route::get('/addpost', [Post::class, 'show_add_post']);
Route::post('/save-post', [Post::class, 'savePost']);
Route::get('/listpost', [Post::class, 'show_list_post']);
Route::get('/delete-post/{postId}', [Post::class, 'deletePost']);

// Post client
Route::get('/goc-suc-khoe', [Post::class, 'show_goc_suc_khoe']);
Route::get('/tin-tuc/{post_slug}', [Post::class, 'show_bai_viet']);

// Route::post('/add-banner', [AdminController::class, 'saveCroppedImage']);
Route::post('/add-banner', [AdminController::class, 'add_banner']);
// Route::post('/save-cropped-image-banner', [AdminController::class, 'saveCroppedImage']);
Route::get('/deletebanner/{bannerId}', [AdminController::class, 'deletebanner']);
Route::get('/hidebanner/{bannerId}', [AdminController::class, 'hidebanner']);
Route::get('/showbanner/{bannerId}', [AdminController::class, 'showbanner']);


//// Category
Route::get('/category-product', [CategoryProduct::class, 'category_product']);

Route::get('/category-product', [CategoryProduct::class, 'all_category_product']);


Route::get('/edit-category-product/{category_product_id}', [CategoryProduct::class, 'edit_category_product']);
Route::post('/update-category-product/{category_product_id}', [CategoryProduct::class, 'update_category_product']);
Route::get('/delete-category-product/{category_product_id}', [CategoryProduct::class, 'delete_category_product']);

Route::post('/save-category-product', [CategoryProduct::class, 'save_category_product']);

Route::post('/update-category-detail/{category_id}/{category_detail_id}', [CategoryProduct::class, 'updateCategoryDetail'])->name('update-category-detail');

// Route::get('/move-up-category/{category_id}', 'CategoryCProduct@moveUpCategory');
Route::get('/move-up-category/{categoryId}', [CategoryProduct::class, 'moveUpCategory'])->name('move-up-category');



//// Category2
// Route::get('/edit-category-product/{category_product_id}', [CategoryProduct::class, 'show_category_detail']);
Route::get('/delete-category-product-2/{category_product_id}', [CategoryProduct::class, 'delete_category_product_2']);



Route::post('/save-category-product-2/{category_id}', [CategoryProduct::class, 'save_category_product_2'])->name('save_category_product_2');
Route::get('/show-category-detail/{category_detail_id}', [CategoryProduct::class, 'show_category_detail']);

Route::put('category/{category_detail_id}', 'CategoryProduct@update')->name('category.update');







/// Product
Route::get('/category-list', [CategoryProduct::class, 'category_product']);
Route::get('/product-list', [ProductController::class, 'product_list']);
Route::get('/add-product', [ProductController::class, 'add_product']);
Route::get('/delete-product/{product_id}', [ProductController::class, 'delete_product']);
Route::get('/show-product-cate/{category_id}/{category_detail_id}', [ProductController::class, 'show_product_cate']);
Route::post('/add-product-cate/{category_id}/{category_detail_id}', [ProductController::class, 'add_product_cate'])->name('add_product_cate');


Route::get('/product-list', [ProductController::class, 'show_all_products'])->name('product_list');



Route::post('/apply-price-filter', [ProductController::class, 'applyPriceFilter'])->name('apply.price.filter');

Route::get('/edit-product/{product_id}', [ProductController::class, 'edit_product']);


Route::get('/get-category-details/{category_id}', [ProductController::class, 'getCategoryDetails']);

Route::post('/update-product/{category_id}', [ProductController::class, 'update_product']);

Route::get('/get-category-details/{category_id}', [ProductController::class, 'getCategoryDetails2']);
Route::post('/add-product', [ProductController::class, 'addProduct']);









//// Client

Route::get('/', [HomeController::class, 'show_home']);
Route::get('/upload', [CategoryProduct::class, 'show_category_upload']);
Route::get('/category', [CategoryProduct::class, 'show_category_category']);
Route::get('/detail/{product_id}', [ProductController::class, 'detail_product']);
// Route::post('/save-cart', [ProductController::class, 'save_cart']);
Route::get('/cart', [ProductController::class, 'show_cart']);
Route::get('/address', [HomeController::class, 'show_category_address']);
Route::get('/orders', [HomeController::class, 'show_category_orders']);
Route::post('/sendemail', [HomeController::class, 'sendEmail']);







Route::post('/add-cart-ajax', [ProductController::class, 'add_cart_ajax']);
Route::get('/delete-item-product/{session_id}', [ProductController::class, 'delete_item_product']);
Route::post('/update-item-product', [ProductController::class, 'update_item_product']);
Route::get('/delete-all-cart', [ProductController::class, 'delete_all_cart']);


Route::get('/checkout', [ProductController::class, 'show_checkout']);

Route::get('/search', [ProductController::class, 'searchProducts']);

Route::post('/register', [HomeController::class, 'register']);
Route::post('/userLogin', [HomeController::class, 'login']);

Route::get('/account', [CategoryProduct::class, 'show_category_account']);
Route::get('/user-logout', [HomeController::class, 'userlogout']);

Route::post('/saveaccount', [HomeController::class, 'saveaccount']);

Route::post('/addAddress', [HomeController::class, 'address']);


Route::post('/update-address-md', [HomeController::class, 'update_address_md']);

Route::post('/pay', [HomeController::class, 'pay']);

Route::post('/update-shipping-method', [HomeController::class, 'update_shipping_method']);
Route::post('/upload-image', [HomeController::class, 'upload_image'])->name('upload-image');
Route::get('/view-order/{orderId}', [HomeController::class, 'show_category_orderdetail']);
Route::get('/vnpay-payments', [HomeController::class, 'vnpay_payments']);
Route::get('/filter-products', [HomeController::class, 'filterProducts']);


///Home
Route::get('/category/{category_id}', [HomeController::class, 'show_category_home']);

Route::get('/login-facebook', [AdminController::class, 'login_facebook']);
Route::get('/admin/callback', [AdminController::class, 'callback_facebook']);

Route::get('/login-google', [AdminController::class, 'login_google']);
Route::get('/google/callback', [AdminController::class, 'callback_google']);

Route::get('/login-google-client', [HomeController::class, 'login_google_client']);
Route::get('/client/google/callback', [HomeController::class, 'handleGoogleCallback']);



/////
Route::get('/change-password', [HomeController::class, 'show_change_password']);
Route::post('/new-change-password/{userId}', [HomeController::class, 'new_change_password']);

Route::get('/user-list', [AdminController::class, 'show_user_list']);
Route::get('/delete-user/{userId}', [AdminController::class, 'delete_user']);
Route::get('/get-user-info/{userId}', [AdminController::class, 'getUserInfo']);
Route::post('/update-user', [AdminController::class, 'updateUser']);
Route::get('/get-user-orders/{userId}', [AdminController::class, 'getUserOrders']);
Route::post('/upload-prescription', [HomeController::class, 'submitPrescription']);
Route::get('/prescription', [AdminController::class, 'show_prescription']);



