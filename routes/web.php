<?php

use App\Http\Middleware\GeoLocationMiddleware;
use App\Livewire\Admin\Banner\BannerComponent;
use App\Livewire\Admin\Banner\CreateBannerComponent;
use App\Livewire\Admin\Banner\UpdateBannerComponent;
use App\Livewire\Admin\Category\Categoriescomponent;
use App\Livewire\Admin\Category\CreateCategoryComponent;
use App\Livewire\Admin\Category\EditCategoryComponent;
use App\Livewire\Admin\Category\Sub\EditSubCategoryComponent;
use App\Livewire\Admin\Category\Sub\SubCategoryComponent;
use App\Livewire\Admin\Orders\OrdersComponent;
use App\Livewire\Admin\Products\CreateProductComponent;
use App\Livewire\Admin\Products\DetailProductComponent ;
use App\Livewire\Admin\Products\EditProductComponent;
use App\Livewire\Admin\Products\ProductsComponent;
use App\Livewire\Admin\Tags\TagsComponent;
use App\Livewire\Admin\Users\CreateUserComponent;
use App\Livewire\Admin\Users\EditUserComponent;
use App\Livewire\Admin\Users\UsersComponent;
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
    Route::get('management/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::prefix('management')->group(function () {
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
        Route::prefix('/sub-categories')->group(function(){
            Route::get('/',SubCategoryComponent::class)->name('admin_sub_categories')->middleware('can:viewAny,App\Models\SubCategory');
            Route::get('/{id}/update',EditSubCategoryComponent::class)->name('updateSubCategory')->middleware('can:update,App\Models\SubCategory');
        });
        Route::prefix('products')->group(function(){
            Route::get('/',ProductsComponent::class)->name('admin_products')->middleware('can:viewAny,App\Models\Product');
            Route::get('/create',CreateProductComponent::class)->name('createProduct')->middleware('can:create,App\Models\Product');
            Route::get('/{id}/edit',EditProductComponent::class)->name('editProduct')->middleware('can:update,App\Models\Product');
            Route::get('/{id}/detail',DetailProductComponent::class)->name('product-detail')->middleware('can:view,App\Models\Product');
        });
        Route::prefix('users')->group(function(){
            Route::get('/',UsersComponent::class)->name('admin_users')->middleware('can:viewAny,App\Models\User');
            Route::get('/create',CreateUserComponent::class)->name('createUser')->middleware('can:create,App\Models\User');
            Route::get('/{id}/user',EditUserComponent::class)->name('updateUser')->middleware('can:update,App\Models\User');
        });
        Route::prefix('orders')->group(function(){
             Route::get('/',OrdersComponent::class)->name('admin_orders')->middleware('can:viewAny,App\Models\Order');
        });
    });
});
Route::get('/service-not-available', NoServiceComponent::class)->name('service-not-available');
