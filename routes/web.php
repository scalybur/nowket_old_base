<?php

Route::group( ['prefix' => 'admin', 'namespace' => 'Admin'], function(){
  Route::resource('products','ProductsController');
});
