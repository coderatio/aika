<?php
/**
 * Created by PhpStorm.
 * User: JOSIAH
 * Date: 2/13/2018
 * Time: 10:17 AM
 */

use Illuminate\Support\Facades\Route;

Route::get('login', 'Auths\LoginController@showForm');
Route::get('register', 'Auths\RegisterController@showForm');
Route::post('register', 'Auths\RegisterController@doRegistration');

// Social networks auths
Route::get('social/{network}', 'Auths\SocialAuthController@redirect');
Route::get('social/{network}/callback', 'Auths\SocialAuthController@callback');

//Verifications
Route::get('verify-account-code/{token}', 'Auths\VerifyAccountController@verifyCode');
Route::post('verify-account-code/', 'Auths\VerifyAccountController@validateAccountCode');
Route::post('get-account-code/', 'Auths\VerifyAccountController@getAccountCode');