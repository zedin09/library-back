<?php

namespace App\Providers;

use App\Services\Books\AuthorService;
use App\Services\Books\BookService;
use App\Services\Books\Impl\AuthorServiceImpl;
use App\Services\Books\Impl\BookServiceImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AuthorService::class, AuthorServiceImpl::class);
        $this->app->bind(BookService::class, BookServiceImpl::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
