<?php

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

    Route::match(['get'], '/', 'MainController@index');
    Route::match(['get'], '/material', 'MaterialController@index')->name('material');
    Route::match(['get'], '/material/new', 'MaterialController@new')->name('new_material');
    Route::match(['post'], '/material/new', 'MaterialController@new_save')->name('new_save_material');
    Route::match(['get'], '/material/edit/{material_id?}', 'MaterialController@edit')->name('edit_material');
    Route::match(['post'], '/material/edit/{material_id?}', 'MaterialController@edit_update')->name('edit_update_material');
    Route::match(['get'], '/material_group', 'MaterialGroupController@index')->name('materialGroup');
    Route::match(['get'], '/material_group/new', 'MaterialGroupController@new')->name('new_materialGroup');
    Route::match(['post'], '/material_group/new', 'MaterialGroupController@new_save')->name('new_save_materialGroup');
    Route::match(['get'], '/material_group/edit/{material_group_id}', 'MaterialGroupController@edit')->name('edit_materialGroup');
    Route::match(['post'], '/material_group/edit/{material_group_id}', 'MaterialGroupController@edit_update')->name('edit_update_materialGroup');
    Route::match(['get'], '/unit-of-measure', 'UnitOfMeasureController@index')->name('unitOfMeasure');
    Route::match(['get'], '/unit-of-measure/new', 'UnitOfMeasureController@new')->name('new_unitOfMeasure');
    Route::match(['post'], '/unit-of-measure/new', 'UnitOfMeasureController@new_save')->name('new_save_unitOfMeasure');
    Route::match(['get'], '/unit-of-measure/edit/{unit_id}', 'UnitOfMeasureController@edit')->name('edit_unitOfMeasure');
    Route::match(['post'], '/unit-of-measure/edit/{unit_id}', 'UnitOfMeasureController@edit_update')->name('edit_update_unitOfMeasure');
