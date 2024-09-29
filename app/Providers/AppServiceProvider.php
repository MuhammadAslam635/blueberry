<?php

namespace App\Providers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Curreny;
use App\Models\NewsLetter;
use App\Models\System;
use App\Models\Tag;
use App\Models\User;
use App\Policies\BannerPolicy;
use App\Policies\CategoryPolicy;
use App\Policies\CurrenyPolicy;
use App\Policies\NewsLetterPolicy;
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
        Gate::policy(Curreny::class, CurrenyPolicy::class);
        Gate:policy(NewsLetter::class, NewsLetterPolicy::class);
        Gate::policy(Banner::class, BannerPolicy::class);
        Gate::policy(Category::class,CategoryPolicy::class);
        Gate::policy(Tag::class,TagPolicy::class);
    }
}
