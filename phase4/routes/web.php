<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DisplayUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DisplayPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/landing', function () {
    return view('landing');
})->name('landing');

Route::get('/signup', [RegisteredUserController::class, 'create'])->name('signup');

Route::post('/signup', [RegisteredUserController::class, 'store']);

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

//------------ Post page

Route::get('/post', [PostController::class, 'index'])->middleware('auth')->name('post');
Route::post('/post', [PostController::class, 'store'])->middleware('auth');

//----------- Contact us page

Route::get('/contactus', [ContactController::class, 'index'])->name('contactus');

Route::post('/contactus', [ContactController::class, 'store']);


Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

//------------ Forgot Password need email

Route::get('/forgotpassword', [ForgotPasswordController::class, 'index'])->name('forgotpassword');

Route::post('/forgotpassword', [ForgotPasswordController::class, 'store']);

//------------- Verify email stuff

Route::get('/verify', [VerifyEmailController::class, 'index'])->name('verify');

Route::post('/verify', [VerifyEmailController::class, 'store']);


//------------- For display function--------
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard', [DisplayUserController::class, 'index'])->name('names');

Route::get('/main', [DisplayPostController::class, 'index'])->middleware('auth')->name('main');

Route::post('/main/{search}', [DisplayPostController::class, 'index'])->middleware('auth');

Route::get('/post/{type}/{id}/detail', [DisplayPostController::class, 'detail'])->middleware('auth')->name('post.detail');

Route::get('/post/{type}/{id}/detail/mobile', [DisplayPostController::class, 'mdetail'])->middleware('auth')->name('post.detail.mobile');

Route::get('/back', [DisplayPostController::class, 'back'])->middleware('auth')->name('post.go.back');

Route::get('/detail', [DisplayPostController::class, 'showPage'])->middleware('auth')->name('detail');

//Route::get('/detail/mobile', [DisplayPostController::class, 'showPageM'])->middleware('auth')->name('detail.mobile');
Route::get('/detail/mobile', function () {return view('detail-mobile');})->middleware('auth')->name('detail.mobile');


//----------- Send Message to post owner

Route::post('/post/{type}/{id}/contact', [DisplayPostController::class, 'contact'])->middleware('auth')->name('post.contact');

Route::post('/post/{type}/{id}/mobile/contact', [DisplayPostController::class, 'mcontact'])->middleware('auth')->name('post.mobile.contact');

//------------forget password----------------
Route::get('/forget/password', [PasswordResetLinkController::class, 'create'])->name('forget.password');

Route::post('/forget/password', [PasswordResetLinkController::class, 'store']);

//----------password reset function----------
Route::get('/reset/password', [PasswordResetController::class,'create'])->middleware('auth')->name('reset.password');

Route::post('/reset/password', [PasswordResetController::class,'store'])->middleware('auth');



//-----------profile page------------------
Route::get('/profile', [ProfileController::class,'index'])->middleware('auth')->name('profile');


//-----------delete post-------------------
Route::post('/post/{type}/{id}/delete', [PostController::class, 'delete'])->middleware('auth')->name('post.delete');


//-----------edit post---------------------
Route::post('/post/{type}/{id}/edit', [PostController::class, 'edit'])->middleware('auth')->name('post.edit');


require __DIR__.'/auth.php';
