<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DataUserController;
use App\Http\Controllers\Admin\PesananController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Frontend\BelanjaController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\DatadiriController;
use App\Http\Controllers\Frontend\FrontendController as FrontendFrontendController;
use App\Http\Controllers\Frontend\KeranjangController;
use App\Http\Controllers\Frontend\OngkirController;
use App\Http\Controllers\TambahOngkirController;
use App\Http\Controllers\Users\MyProfilController;
use App\Models\Keranjang;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

//frontend

route::get('/',[FrontendFrontendController::class,'index']);
route::get('detail-prod/{id}',[FrontendFrontendController::class,'detail']);
route::get('/view-category/{nama_kategori}',[FrontendFrontendController::class,'viewcategori']);

route::get('/produk-list',[FrontendFrontendController::class,'produklistAjax']);
route::post('searchproduk',[FrontendFrontendController::class,'Searchproduk']);

Auth::routes();

route::get('load-cart-data',[KeranjangController::class,'cartcount']);

route::get('/home',[FrontendFrontendController::class,'index']);
// route::get('myprofil',[FrontendController::class,'myprofil']);
route::post('/add-to-keranjang',[KeranjangController::class,'add']);

//ongkir
route::get('page/province',[OngkirController::class,'getprovince']);
route::middleware(['auth'])->group(function(){
    route::get('keranjang',[KeranjangController::class,'index']);
    route::get('/checkout',[CheckoutController::class,'index']);
    Route::get('/tambahongkir/{id}',[TambahOngkirController::class,'render']);
    route::post('/pesan',[CheckoutController::class,'pesan']);

    Route::get('orders/checkout', [CheckoutController::class,'checkout']);
    Route::post('orders/checkout', [CheckoutController::class,'doCheckout']);
    Route::post('orders/shipping-cost', [CheckoutController::class,'shippingCost']);
    Route::post('orders/set-shipping', [CheckoutController::class,'setShipping']);
    Route::get('orders/received/{orderID}', [CheckoutController::class,'received']);
    Route::get('orders/cities', [CheckoutController::class,'cities']);

    route::get('/data-diri',[DatadiriController::class,'index']);
    route::put('update-datadiri',[DatadiriController::class,'update']);

    route::get('hapus/{id}',[KeranjangController::class,'delete']);

    Route::post('/ongkir', [CheckoutController::class,'check_ongkir']);
    Route::get('/cities/{province_id}', [CheckoutController::class,'getCities']);

    route::get('belanja',[BelanjaController::class,'index']);
    route::get('view-pesan/{id}',[BelanjaController::class,'view']);
});


Route::middleware(['auth','isAdmin'])->group(function(){
    route::get('/dashboard',[DashboardController::class,'index']);

    //category
    route::get('categories',[CategoryController::class,'index']);
    route::get('add-category',[CategoryController::class,'add']);
    route::post('insert-category',[CategoryController::class,'tambah']);
    route::get('edit-prod/{id}',[CategoryController::class,'edit']);
    route::put('update-category/{id}',[CategoryController::class,'update']);
    route::get('delete-category/{id}',[CategoryController::class,'delete']);

    //product
    route::get('products',[ProductController::class,'index']);
    route::get('add-product',[ProductController::class,'add']);
    route::post('insert-product',[ProductController::class,'insert']);
    route::get('edit-produk/{id}',[ProductController::class,'edit']);
    route::put('update-product/{id}',[ProductController::class,'update']);
    route::get('delete-product/{id}',[ProductController::class,'delete']);
    route::get('ekspor-product',[ProductController::class,'ekspor']);
    
    //user
    route::get('datauser',[UsersController::class,'index']);
    route::get('view-users/{id}',[UsersController::class,'viewuser']);

    //pesanan
    route::get('pesanan',[PesananController::class,'index']);
    route::get('adminview-pesan/{id}',[PesananController::class,'view']);
});

