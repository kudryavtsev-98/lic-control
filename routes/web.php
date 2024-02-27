<?php

use App\Http\Controllers\DealerController;
use App\Http\Controllers\HostController;
use App\Http\Controllers\KeyController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StartController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\VersionController;
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


// CRUD (create, read, update, delete)

Route::redirect('/', '/start');



Route::middleware('guest')->group(function () {

	Route::get('login', [LoginController::class, 'index'])->name('login');

	Route::post('login', [LoginController::class, 'store'])->name('login.store');

	Route::get('start', [StartController::class, 'index'])->name('start');
});


Route::middleware(
	// 'auth',
	'active',
)->group(function () {

	Route::get('hosts', [HostController::class, 'index'])->name('hosts');

	Route::get('hosts/create', [HostController::class, 'create'])->name('hosts.create');

	Route::post('hosts', [HostController::class, 'store'])->name('hosts.store');

	Route::get('hosts/{host}', [HostController::class, 'show'])->name('hosts.show');

	Route::get('hosts/{host}/edit', [HostController::class, 'edit'])->name('hosts.edit');

	Route::put('hosts/{host}', [HostController::class, 'update'])->name('hosts.update');

	Route::delete('hosts/{host}', [HostController::class, 'delete'])->name('hosts.delete');



	Route::get('dealers', [DealerController::class, 'index'])->name('dealers');

	Route::get('dealers/create', [DealerController::class, 'create'])->name('dealers.create');

	Route::post('dealers', [DealerController::class, 'store'])->name('dealers.store');

	Route::get('dealers/{dealer}', [DealerController::class, 'show'])->name('dealers.show');

	Route::get('dealers/{dealer}/edit', [DealerController::class, 'edit'])->name('dealers.edit');

	Route::put('dealers/{dealer}', [DealerController::class, 'update'])->name('dealers.update');

	Route::delete('dealers/{dealer}', [DealerController::class, 'delete'])->name('dealers.delete');



	Route::get('keys', [KeyController::class, 'index'])->name('keys');

	Route::get('keys/create', [KeyController::class, 'create'])->name('keys.create');

	Route::post('keys', [KeyController::class, 'store'])->name('keys.store');

	Route::get('keys/{key}', [KeyController::class, 'show'])->name('keys.show');

	Route::get('keys/{key}/edit', [KeyController::class, 'edit'])->name('keys.edit');

	Route::put('keys/{key}', [KeyController::class, 'update'])->name('keys.update');

	Route::delete('keys/{key}', [KeyController::class, 'delete'])->name('keys.delete');



	Route::get('licenses', [LicenseController::class, 'index'])->name('licenses');

	Route::get('licenses/create', [LicenseController::class, 'create'])->name('licenses.create');

	Route::post('licenses', [LicenseController::class, 'store'])->name('licenses.store');

	Route::get('licenses/{license}', [LicenseController::class, 'show'])->name('licenses.show');

	Route::get('licenses/{license}/edit', [LicenseController::class, 'edit'])->name('licenses.edit');

	Route::put('licenses/{license}', [LicenseController::class, 'update'])->name('licenses.update');

	Route::delete('licenses/{license}', [LicenseController::class, 'delete'])->name('licenses.delete');



	Route::get('products', [ProductController::class, 'index'])->name('products');

	Route::get('products/create', [ProductController::class, 'create'])->name('products.create');

	Route::post('products', [ProductController::class, 'store'])->name('products.store');

	Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');

	Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

	Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');

	Route::delete('products/{product}', [ProductController::class, 'delete'])->name('products.delete');



	Route::get('purchases', [PurchaseController::class, 'index'])->name('purchases');

	Route::get('purchases/create', [PurchaseController::class, 'create'])->name('purchases.create');

	Route::post('purchases', [PurchaseController::class, 'store'])->name('purchases.store');

	Route::get('purchases/{purchase}', [PurchaseController::class, 'show'])->name('purchases.show');

	Route::get('purchases/{purchase}/edit', [PurchaseController::class, 'edit'])->name('purchases.edit');

	Route::put('purchases/{purchase}', [PurchaseController::class, 'update'])->name('purchases.update');

	Route::delete('purchases/{purchase}', [PurchaseController::class, 'delete'])->name('purchases.delete');



	Route::get('vendors', [VendorController::class, 'index'])->name('vendors');

	Route::get('vendors/create', [VendorController::class, 'create'])->name('vendors.create');

	Route::post('vendors', [VendorController::class, 'store'])->name('vendors.store');

	Route::get('vendors/{vendor}', [VendorController::class, 'show'])->name('vendors.show');

	Route::get('vendors/{vendor}/edit', [VendorController::class, 'edit'])->name('vendors.edit');

	Route::put('vendors/{vendor}', [VendorController::class, 'update'])->name('vendors.update');

	Route::delete('vendors/{vendor}', [VendorController::class, 'delete'])->name('vendors.delete');



	Route::get('versions', [VersionController::class, 'index'])->name('versions');

	Route::get('versions/create', [VersionController::class, 'create'])->name('versions.create');

	Route::post('versions', [VersionController::class, 'store'])->name('versions.store');

	Route::get('versions/{version}', [VersionController::class, 'show'])->name('versions.show');

	Route::get('versions/{version}/edit', [VersionController::class, 'edit'])->name('versions.edit');

	Route::put('versions/{version}', [VersionController::class, 'update'])->name('versions.update');

	Route::delete('versions/{version}', [VersionController::class, 'delete'])->name('versions.delete');



	Route::get('reports', [ReportController::class, 'index'])->name('reports');

	Route::get('reports/create', [ReportController::class, 'create'])->name('reports.create');

	Route::post('reports', [ReportController::class, 'store'])->name('reports.store');

	Route::get('reports/{report}', [ReportController::class, 'show'])->name('reports.show');

	Route::get('reports/{report}/edit', [ReportController::class, 'edit'])->name('reports.edit');

	Route::put('reports/{report}', [ReportController::class, 'update'])->name('reports.update');

	Route::delete('reports/{report}', [ReportController::class, 'delete'])->name('reports.delete');

	// Маршруты для livesearch при создании/изменении информации об объекте
	Route::get('/item_product', [ProductController::class, 'search'])->name('products.search');
	Route::get('/item_vendor', [VendorController::class, 'search'])->name('vendors.search');
	Route::get('/item_dealer', [DealerController::class, 'search'])->name('dealers.search');
});
