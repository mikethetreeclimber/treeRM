<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ManagedTreeController;
use App\Http\Controllers\Admin\ManageUsersController;

Route::group(['middleware'=> 'auth'], function(){
    Route::group(['prefix'=>'admin', 'middleware'=>'is_admin'], function(){
        Route::resource('user_management', ManageUsersController::class);
    });
});
