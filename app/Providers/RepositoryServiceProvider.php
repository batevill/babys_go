<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            \App\Repositories\Interfaces\UserRepositoryInterface::class,
            \App\Repositories\Eloquent\UserRepository::class
        );
        $this->app->bind(
            \App\Repositories\Interfaces\ChildRepositoryInterface::class,
            \App\Repositories\Eloquent\ChildRepository::class
        );
        $this->app->bind(
            \App\Repositories\Interfaces\DiaryRepositoryInterface::class,
            \App\Repositories\Eloquent\DiaryRepository::class
        );
        $this->app->bind(
            \App\Repositories\Interfaces\DiaryEntryRepositoryInterface::class,
            \App\Repositories\Eloquent\DiaryEntryRepository::class
        );
        $this->app->bind(
            \App\Repositories\Interfaces\GrowthRecordRepositoryInterface::class,
            \App\Repositories\Eloquent\GrowthRecordRepository::class
        );
        $this->app->bind(
            \App\Repositories\Interfaces\MedicalRecordRepositoryInterface::class,
            \App\Repositories\Eloquent\MedicalRecordRepository::class
        );
        $this->app->bind(
            \App\Repositories\Interfaces\ReminderRepositoryInterface::class,
            \App\Repositories\Eloquent\ReminderRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
