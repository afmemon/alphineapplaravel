<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Livewire\Livewire;

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
        Livewire::component('students.index', \app\Http\Livewire\Students\Index::class);
        Livewire::component('students.create', \app\Http\Livewire\Students\Create::class);
        Livewire::component('students.edit', \app\Http\Livewire\Students\Edit::class);
        Livewire::component('students.show', \app\Http\Livewire\Students\Show::class);
    }
}
