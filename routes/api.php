<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | is assigned the "api" middleware group. Enjoy building your API!
    |
    */

    //============>>  Testing
    Route::group(['prefix' => 'testing'], function () {
        require(__DIR__ . '/api/testing.php');
    });

    //============>>  Dashboard
    require(__DIR__ . '/api/dashboard.php');

    //============>>  POS
    require(__DIR__ . '/api/pos.php');

    //============>>  Sale
    require(__DIR__ . '/api/sale.php');

    //============>>  Product
    require(__DIR__ . '/api/product.php');

    //============>>  User
    require(__DIR__ . '/api/user.php');

    //============>> My Profile
    require(__DIR__ . '/api/myprofile.php');

    // ===========>> Print
    Route::group(['prefix' => 'print'], function () {
        require(__DIR__ . '/api/printpdf.php');
    });
});

//Test Implement Send Email
// Route::post('/send-email', [EmailController::class, 'sendEmail']);
Route::post('/send-email', [EmailController::class, 'sendEmailRaw']);
