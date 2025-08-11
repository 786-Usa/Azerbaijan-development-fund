<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/investor-relation', function () {
    return view('pages.investor-relation');
})->name('investor.relation');

Route::get('/what-we-do/investment-banking', function () {
    return view('pages.what-we-do');
})->name('investment.banking');

Route::get('/ficc-and-equities', function () {
    return view('pages.what-we-do.ficc-equities');
})->name('ficc.equities');
Route::get('/what-we-do/enterprise-partnerships', function () {
    return view('pages.what-we-do.enterprise-partnerships');
})->name('enterprise.partnerships');
Route::get('/what-we-do/transaction-banking', function () {
    return view('pages.what-we-do.transaction-banking');
})->name('transaction.banking');
Route::get('/what-we-do/research', function () {
    return view('pages.what-we-do.research');
})->name('research');
Route::get('/what-we-do/institute', function () {
    return view('pages.what-we-do.institute');
})->name('institute');

Route::get('/our-firm/our-people-and-leadership', function () {
    return view('pages.our-firms.our-people-and-leadership');
})->name('our.people.and.leadership');
Route::get('/our-firm/history', function () {
    return view('pages.our-firms.history');
})->name('our.firm.history');

Route::get('/our-firm/community-impact', function () {
    return view('pages.our-firms.community-impact');
})->name('our.firm.community.impact');
Route::get('/our-firm/sustainable-finance', function () {
    return view('pages.our-firms.sustainable-finance');
})->name('our.firm.sustainable.finance');
Route::get('/our-firm/our-vendor-program', function () {
    return view('pages.our-firms.our-vendor-program');
})->name('our.firm.our.vendor.program');

Route::get('/our-firm/partnership', function () {
    return view('pages.our-firms.partnership');
})->name('our.firm.partnership');

// Public blog listing & single page
Route::get('/blog', [PostController::class, 'publicIndex'])->name('blog.index');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('blog.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');


    Route::resource('posts', PostController::class);
});

require __DIR__ . '/auth.php';
