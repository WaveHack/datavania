<?php

use App\Http\Controllers\AchievementsController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\SearchController;
use Illuminate\Routing\Router;

/** @var Router $router */

// Authentication routes
if (app()->environment() === 'local') {
    Auth::routes(['verify' => true]);
}

// Search
$router->get('search', [SearchController::class, 'index'])->name('search');

// Home
$router->get('/', function () {
    return view('pages.home');
})->name('home');

// Database
$router->group(['prefix' => 'db', 'as' => 'db.'], function (Router $router) {

    // Achievements
    $router->get('achievements', [AchievementsController::class, 'index'])->name('achievements');
    $router->get('achievements/{slug}', [AchievementsController::class, 'show'])->name('achievements.show');

    // Chapters
    // Characters
    // Dlc

    // Items
    $router->get('items', [ItemsController::class, 'index'])->name('items');
    $router->get('item/{slug}', [ItemsController::class, 'show'])->name('items.show');

    // Monsters
    // Music

});
