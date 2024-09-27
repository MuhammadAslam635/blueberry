<?php

namespace App\Providers;

use App\Models\Banner;
use App\Models\Curreny;
use App\Models\NewsLetter;
use App\Models\System;
use App\Models\User;
use App\Policies\BannerPolicy;
use App\Policies\CurrenyPolicy;
use App\Policies\NewsLetterPolicy;
use App\Policies\SystemPolicy;
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
    }
}
