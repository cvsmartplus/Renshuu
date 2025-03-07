<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Models\Article;
use App\Models\Course;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $articles = Article::latest()->take(4)->get(); // Ambil 4 artikel terbaru
    $courses = Course::latest()->take(3)->get(); 

    return Inertia::render('Landing', [
        'title' => 'Welcome to our application!',
        'articles' => $articles, // Kirim artikel ke frontend
        'courses' => $courses,
    ]);
})->name('welcome');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::resource('artikel', ArticleController::class)->except(['show']);
Route::get('/artikel/{artikel:slug}', [ArticleController::class, 'show'])->name('artikel.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/test-500', function () {
    abort(500);
});
Route::get('/test-403', function () {
    abort(403);
});


Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});

require __DIR__.'/auth.php';
