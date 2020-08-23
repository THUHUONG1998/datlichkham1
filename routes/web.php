<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();



Route::group(['middleware' => ['auth']], function() {
    Route::group(['prefix'=>'admin'], function() {
        Route::get('', 'HomeController@userProFile')->name('profile');
        Route::resource('users','UsersController');
        Route::get('deleteRole', 'RoleController@destroy1')->name('roles.destroy1');
        Route::get('deletePermission','Permission@destroy')->name('permission.destroy');
        Route::resource('roles','RoleController');
        Route::resource('permission','PermissionController');
        Route::post('update_profile', 'HomeController@updateUserProfile')->name('update-profile');
        Route::resource('benhvien', 'benhvienController');
        Route::resource('chuyenkhoa', 'chuyenkhoaController');
        Route::resource('bacsi','bacsiController');
        Route::resource('khunggio','khunggioController');
        Route::resource('sms','smsController');
        Route::resource('email','EmailController');
        Route::resource('chitietbenhnhan', 'chitietbenhnhanController');
        Route::resource('benhnhan','benhnhanController');

        Route::post('cropie', 'UsersController@uploadImage')->name('croppie');
        Route::get('changePassword', 'HomeController@changePassword')->name('changePassword');
        Route::get('export', 'MyController@export')->name('export');
        Route::get('export-bacsi', 'MyController@exportBS')->name('exportBS');
        Route::get('export-benhnhan', 'MyController@exportBN')->name('exportbenhnhan');
        Route::get('export-benhnhantheongay', 'MyController@exportBN3')->name('exportBN3');
        Route::get('importExportView', 'MyController@importExportView');
        Route::post('import', 'MyController@import')->name('import');
        Route::post('import-bacsi', 'MyController@importBS')->name('importBS');
        Route::post('showchuyenkhoa','bacsiController@showChuyenKhoainBenhVien')->name('show-chuyenkhoa');
        Route::post('showchuyenkhoabn','benhnhanController@showChuyenKhoainBenhNhan')->name('show-chuyenkhoainbenhnhan');
        Route::post('showbacsi','benhnhanController@showBacSiinBenhNhan')->name('show-bacsi');
        Route::post('showkhunggio','benhnhanController@showKhungGioinBenhNhan')->name('show-khunggioinbenhnhan');
    
        Route::get('noidung/{id}', 'benhnhanController@noidung')->name('noidung');
        Route::post('guimail/{id}', 'benhnhanController@guimail')->name('guimail');
        Route::get('datlichkham/{id}', 'benhnhanController@datlichkham')->name('datlichkham');
        Route::post('luulichkham/{id}', 'benhnhanController@luulichkham')->name('luulichkham');
        Route::get('chitietkham/{id}', 'chitietbenhnhanController@chitiet')->name('chitietkham');
        Route::post('luuchitietkham/{id}', 'chitietbenhnhanController@luuchitietkham')->name('luuchitietkham');
        Route::get('generate-pdf/{id}','PDFController@generatePDF')->name('exportdonthuoc');
        Route::get('donthuoc/{id}','PDFController@index')->name('donthuoc');
        Route::get('lichsu/{id}','benhnhanController@lichsu')->name('lichsu');
        Route::get('export-user', 'MyController@exportuser')->name('exportuser');
    });
});

