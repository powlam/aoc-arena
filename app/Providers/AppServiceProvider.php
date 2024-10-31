<?php

namespace App\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
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
        // Force root URL for all routes (even Livewire)
        URL::forceRootUrl(Config::get('app.url'));
        if (Str::contains(Config::get('app.url'), 'https://')) {
            URL::forceScheme('https');
        }
        Livewire::setScriptRoute(function ($handle) {
            return Route::get($this->baseUri().'/livewire/livewire.js', $handle);
        });
    }

    /**
     * Extract the base URI from de configured app.url
     * Ex: APP_URL=http://aoc-arena.test => ''
     * Ex: APP_URL=http://192.168.1.43/aoc-arena.test/ => '/aoc-arena.test'
     * Ex: APP_URL=https://powlam.com/projects/aoc-arena.test => '/projects/aoc-arena.test'
     */
    private function baseUri(): string
    {
        $url = Str::chopStart(Config::get('app.url'), ['https://', 'http://']); // without schema
        $url = Str::unwrap($url, '/'); // without starting and trailing bar

        return Str::contains($url, '/') ? '/'.Str::after($url, '/') : '';
    }
}
