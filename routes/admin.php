<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ManageUserController;

Route::group(['middleware'=> 'auth'], function(){
    Route::group(['prefix'=>'admin', 'middleware'=>'is_admin'], function(){
        Route::resource('user_management', ManageUserController::class)->parameters([
            'user_management' => 'user'
        ]);
    });
});
