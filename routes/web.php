<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MailerController;
use App\Http\Middleware\CheckUserStatus;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RegistrationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//base web route for management system
Route::get('/login', function () {
    return auth()->check() ? redirect()->route('dashboard') : redirect()->route('login');
});

Route::get('/home', function () {
    return view('client.home-page');
})->name('home');
Route::get('/registration', function () {
    return auth()->check() ? redirect()->route('dashboard') : view('client.registration');
});
Route::get('/passwordreset', function () {
    return auth()->check() ? redirect()->route('dashboard') : view('client.reset-password');
});
Route::get('/emailverify', function () {
    return auth()->check() ? redirect()->route('dashboard') : view('client.verify-email');
});
Route::get('/forgotpassword', function () {
    return auth()->check() ? redirect()->route('dashboard') : view('client.forgot-password');
});
Route::get('/', function () {
    return redirect()->route("home");
});
Route::get('/contactus', function () {
    return view('client.contactus');
});





Route::middleware(['auth', 'check.status', 'prevent-back-history'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/debug_auth', function () {
        $user = auth()->user();
        if ($user) {
            $user->load('office');
        }

        return [
            'isLoggedIn' => auth()->check(),
            'user' => $user,
        ];
    });
    Route::get('/page_dashboard', [PageController::class, 'page_dashboard']);
    Route::get('/page_usermanagement', [PageController::class, 'page_UserManagement']);
    Route::get('/page_menus', [PageController::class, 'page_Menus']);
    Route::get('/page_users', [PageController::class, 'page_Users']);
    Route::get('/page_settings', [PageController::class, 'page_settings']);
    Route::get('/profile', [PageController::class, 'profile'])->name('profile');
    Route::get('/settings', [PageController::class, 'settings'])->name('settings');
    Route::get('/settings', [PageController::class, 'settings'])->name('settings');
    Route::get('/testmail', [MailerController::class, 'test']);
    Route::get('/page_mailer', [PageController::class, 'page_Mailer']);
    Route::post('/mailer_save', [MailerController::class, 'save'])->name('mailer_save');
    Route::post('/mailer/send', [MailerController::class, 'send'])->name('mailer.send');
    Route::resource('users', UserController::class)->middleware('can:isSuperAdmin');
    Route::prefix('notifications')->group(function () {
        Route::get('/', [NotificationController::class, 'getNotifications']);
    });
});




require __DIR__ . '/auth.php';
