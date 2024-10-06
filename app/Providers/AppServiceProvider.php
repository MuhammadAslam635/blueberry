<?php

namespace App\Providers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Currency;
use App\Models\Curreny;
use App\Models\NewsLetter;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\System;
use App\Models\Tag;
use App\Models\User;
use App\Policies\BannerPolicy;
use App\Policies\CategoryPolicy;
use App\Policies\CurrencyPolicy;
use App\Policies\CurrenyPolicy;
use App\Policies\NewsLetterPolicy;
use App\Policies\ProductPolicy;
use App\Policies\SubCategoryPolicy;
use App\Policies\SystemPolicy;
use App\Policies\TagPolicy;
use App\Policies\UserPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

    }

    public function registerPolicies()
    {
        Gate::policy(User::class, UserPolicy::class);
        Gate::policy(System::class, SystemPolicy::class);
        Gate::policy(Currency::class, CurrencyPolicy::class);
        Gate:policy(NewsLetter::class, NewsLetterPolicy::class);
        Gate::policy(Banner::class, BannerPolicy::class);
        Gate::policy(Category::class,CategoryPolicy::class);
        Gate::policy(Tag::class,TagPolicy::class);
        Gate::policy(SubCategory::class,SubCategoryPolicy::class);
        Gate::policy(Product::class,ProductPolicy::class);
    }
}
