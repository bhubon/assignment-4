<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     */
    public function register(): void {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {
        $data = [
            'name' => 'Bhubon Sutradhar Nil',
            'avatar' => 'assets/img/my-profile-img.jpg',
            'fb' => '//facebook.com',
            'tritterx' => '//twitter.com',
            'instagram' => '//instagram.com',
            'skype' => '//skype.com',
            'linkedin' => '//linkedin.com',
        ];
        View::share('globalData', $data);
    }
}
