<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoodController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\EmojiController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\MembersController;

//Stats
Route::get('/stats', [StatsController::class, 'AllStats']);


//Main Index
Route::get('/', [MoodController::class, 'index'])->name('index');
Route::post('/emoji', [EmojiController::class, 'save'])->name('save-emoji');
Route::post('/reviews', [ReviewController::class, 'store'])->name('Data/reviews');
Route::get('/reviews/data', [ReviewController::class, 'getDataForPieChart']);

// routes/api.php

Route::post('/emojis', 'EmojiController@store');

//Route to dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

});
//Admin pages
Route::get('Admin/users', [MembersController::class, 'index'])->name('users');
Route::post('/edit-review', [MembersController::class, 'editReview'])->name('edit-review');
Route::post('/delete-member', [MembersController::class, 'deleteMember'])->name('delete-member');
Route::get('Admin/data', [DataController::class, 'index'])->name('data');
Route::get('Admin/settings', [SettingsController::class, 'index'])->name('settings');
Route::fallback(function () {
    return view('Admin.404');
});
//Login/Logout
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/export-reviews', [MembersController::class, 'exportReviews']);
Route::get('/dell-reviews', [ReviewController::class, 'dellall'])->name('truncateReviews');

