<?php

use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HighlightController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\productController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteSettingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $banner = \App\Models\Banner::latest()->first(); // or ->where('status', true)->first()
    $products = \App\Models\Product::latest()->take(6)->get();
    $customers = \App\Models\Customer::orderBy('name')->get(); // or latest()->get(); // or ->where('status', true)->first()
    $platforms = \App\Models\Platform::orderBy('name')->get();
    $features = \App\Models\Feature::all();

    return view('pages.home', compact('banner', 'products', 'customers', 'platforms', 'features'));
});
Route::get('/profile', function () {
    return view('profile.index'); // create this view if needed
})->middleware(['auth'])->name('profile');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');


Route::middleware(['auth'])->group(function () {
    Route::resource('banners', BannerController::class);
    Route::resource('site-settings', SiteSettingController::class);
    Route::resource('products', productController::class);
    Route::resource('about-sections', AboutSectionController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('platforms', PlatformController::class);
    Route::resource('features', FeatureController::class);
    Route::resource('highlights', HighlightController::class);
    Route::resource('footers', FooterController::class);
    Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::delete('contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

require __DIR__ . '/auth.php';