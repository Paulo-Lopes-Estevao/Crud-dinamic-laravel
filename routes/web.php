<?php

use Illuminate\Support\Facades\Route;

Route::group([
    "namespace"=>"Camada"
],function(){
    Route::get("/","CrudAjaxController@index");
    Route::get("/create","CrudAjaxController@create");
    Route::post("/","CrudAjaxController@store");
    Route::get("{id}/edit","CrudAjaxController@edit");
    Route::put("/{id}","CrudAjaxController@update");
    Route::delete('/{id}',"CrudAjaxController@destroy");
});
