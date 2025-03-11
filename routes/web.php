<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
// Admin Controllers
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\SubCategoriesController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BlogController;

// Frontend Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CustomQuoteController;
use App\Http\Controllers\InstantQuoteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\StripeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Backend Routes
// Auth Routes
Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'auth_login']);
Route::get('admin/logout', [AuthController::class, 'logout_admin']);

Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'create_user']);
Route::get('verify/{token}', [AuthController::class, 'verify']);

Route::get('forget-password', [AuthController::class, 'forget']);
Route::post('forget-password', [AuthController::class, 'reset_password']);
Route::get('reset/{token}', [AuthController::class, 'reset']);
Route::post('reset/{token}', [AuthController::class, 'change_password']);



// Dashboard Routes
Route::group(['middleware' => 'admin'], function(){
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    // Users ROutes
    Route::get('admin/users', [AdminController::class, 'list']);
    Route::get('admin/users/add', [AdminController::class, 'add']);
    Route::post('admin/users/add', [AdminController::class, 'insert']);
    Route::get('admin/users/edit/{id}', [AdminController::class, 'edit']);
    Route::post('admin/users/edit/{id}', [AdminController::class, 'update']);
    Route::get('admin/users/delete/{id}', [AdminController::class, 'delete']);
    // Categories Routes
    Route::get('admin/categories', [CategoriesController::class, 'list']);
    Route::get('admin/categories/add', [CategoriesController::class, 'add']);
    Route::post('admin/categories/add', [CategoriesController::class, 'insert']);
    Route::get('admin/categories/edit/{id}', [CategoriesController::class, 'edit']);
    Route::post('admin/categories/edit/{id}', [CategoriesController::class, 'update']);
    Route::get('admin/categories/delete/{id}', [CategoriesController::class, 'delete']);
    // Sub Categories Routes
    Route::get('admin/sub_categories', [SubCategoriesController::class, 'list']);
    Route::get('admin/sub_categories/add', [SubCategoriesController::class, 'add']);
    Route::post('admin/sub_categories/add', [SubCategoriesController::class, 'insert']);
    Route::get('admin/sub_categories/edit/{id}', [SubCategoriesController::class, 'edit']);
    Route::post('admin/sub_categories/edit/{id}', [SubCategoriesController::class, 'update']);
    Route::get('admin/sub_categories/delete/{id}', [SubCategoriesController::class, 'delete']);
    Route::post('admin/get_sub_categories', [SubCategoriesController::class, 'get_sub_categories']);
    // Products Routes
    Route::get('admin/product', [ProductController::class, 'list']);
    Route::get('admin/product/add', [ProductController::class, 'add']);
    Route::post('admin/product/add', [ProductController::class, 'insert']);
    Route::get('admin/product/edit/{id}', [ProductController::class, 'edit']);
    Route::post('admin/product/edit/{id}', [ProductController::class, 'update']);
    Route::get('admin/product/delete/{id}', [ProductController::class, 'delete']);
    // Route::get('admin/product/image_delete/{id}', [ProductController::class, 'image_delete']);
    Route::post('admin/product/image_delete/{id}', [ProductController::class, 'imageDelete'])->name('image.delete');

    // Blog Routes
    Route::get('admin/blog', [BlogController::class, 'list']);
    Route::get('admin/blog/add', [BlogController::class, 'add']);
    Route::post('admin/blog/add', [BlogController::class, 'insert']);
    Route::get('admin/blog/edit/{id}', [BlogController::class, 'edit']);
    Route::post('admin/blog/edit/{id}', [BlogController::class, 'update']);
    Route::get('admin/blog/delete/{id}', [BlogController::class, 'delete']);
    // Quotes
    Route::get('admin/quote/instant', [InstantQuoteController::class, 'index']);
    Route::get('admin/quote/instant/{id}', [InstantQuoteController::class, 'getQuoteDetails']);

    Route::get('admin/quote/custom', [CustomQuoteController::class, 'index']);
    Route::get('admin/quote/custom/{id}', [CustomQuoteController::class, 'getQuoteDetails']);

});







// FrontEnd Routes
Route::get('/', [HomeController::class, 'index']);
Route::get('blog', [HomeController::class, 'blog']);
Route::get('blog/{slug}', [HomeController::class, 'blog_post']);
Route::get('privacy-policy', [HomeController::class, 'privacy']);
Route::get('terms-and-condition', [HomeController::class, 'terms']);


// Route::get('product/{product_slug}', [CollectionController::class, 'single_product']);
Route::post('instent_quote', [InstantQuoteController::class, 'add']);
Route::post('custom_quote', [CustomQuoteController::class, 'add']);
Route::get('search', [ProductController::class, 'searchProducts']);
Route::get('contact', [HomeController::class, 'contact']);
Route::post('contact', [ContactController::class, 'add']);

// Collection Urls
// Route::get('all-collections', [CollectionController::class, 'all_collections']);
// Route::get('{category_slug}', [CollectionController::class, 'collection'])
//      ->where('category_slug', '[a-z0-9\-]+');

Route::get('{subcategory_slug}', [CollectionController::class, 'sub_collection'])
     ->where(['category_slug' => '[a-z0-9\-]+', 'subcategory_slug' => '[a-z0-9\-]+']);

Route::get('/checkout/{id}', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');


Route::get('/social-media/tiktok-blade/{username}', [App\Http\Controllers\SocialMediaController::class, 'getTiktokUserBlade']);

// Route::get('/social-media/tiktok/{username}', [SocialMediaController::class, 'getTiktokUserData']);
Route::post('/store-product-session', function(Illuminate\Http\Request $request) {
    $product = \App\Models\ProductModel::find($request->input('product_id'));
    session(['product' => $product]);
    return response()->json(['success' => true]);
})->name('store.product.session');
// Add this route to store the checkout email in session
Route::post('/store-checkout-email', function(Illuminate\Http\Request $request) {
    $request->validate([
        'email' => 'required|email'
    ]);

    session(['checkout_email' => $request->email]);

    return response()->json(['success' => true]);
})->name('store.checkout.email');
Route::post('/stripe/payment', [App\Http\Controllers\StripeController::class, 'processPayment'])->name('stripe.payment');
Route::get('/payment/success/{order?}', [StripeController::class, 'success'])->name('payment.success');
Route::get('/payment/cancel', [App\Http\Controllers\StripeController::class, 'cancel'])->name('payment.cancel');
// Add this route to your web.php file
Route::get('/get-product-details/{id}', 'App\Http\Controllers\CheckoutController@getProductDetails')->name('get.product.details');


