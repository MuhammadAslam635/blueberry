<?php

use App\Http\Middleware\GeoLocationMiddleware;
use App\Livewire\Admin\Banner\BannerComponent;
use App\Livewire\Admin\Banner\CreateBannerComponent;
use App\Livewire\Admin\Banner\UpdateBannerComponent;
use App\Livewire\Admin\Category\Categoriescomponent;
use App\Livewire\Admin\Category\CreateCategoryComponent;
use App\Livewire\Admin\Category\EditCategoryComponent;
use App\Livewire\Admin\Tags\TagsComponent;
use App\Livewire\Web\Pages\Category\CategoryProductComponent;
use App\Livewire\Web\Pages\CategoryComponent;
use App\Livewire\Web\Pages\HomeComponent;
use App\Livewire\Web\Pages\NoServiceComponent;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => GeoLocationMiddleware::class], function () {
    Route::get('/', HomeComponent::class)->name('home');
    Route::get('/categories', CategoryComponent::class)->name('catgeories_page');
    Route::get('/category/{slug?}/{subcatgeory?}', CategoryProductComponent::class)->name('category_products');
})->middleware('code,App\Models\Curreny');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::prefix('admin')->group(function () {
        Route::prefix('banner')->group(function () {
            Route::get('/', BannerComponent::class)->name('admin_banner')->middleware('can:viewAny,App\Models\Banner');
            Route::get('/create', CreateBannerComponent::class)->name('createBanner')->middleware('can:create,App\Models\Banner');
            Route::get('/edit/{banner}', UpdateBannerComponent::class)->name('updateBanner')->middleware('can:update,App\Models\Banner');
        });
        Route::prefix('categories')->group(function () {
            Route::get('/',Categoriescomponent::class)->name('admin_categories')->middleware('can:viewAny,App\Models\Category');
            Route::get('/create',CreateCategoryComponent::class)->name('createCategory')->middleware('can:create,App\Models\Category');
            Route::get('/edit/{id}', EditCategoryComponent::class)->name('updateCategory')->middleware('can:update,App\Models\Category');
        });
        Route::prefix('tags')->group(function(){
            Route::get('/',TagsComponent::class)->name('admin_tags')->middleware('can:viewAny,App\Models\Tag');
        });
    });
});
Route::get('/service-not-available', NoServiceComponent::class)->name('service-not-available');
