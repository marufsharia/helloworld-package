<?php

Route::get('helloworld', function () {
    echo "hello world";
});

Route::get('add/{a}/{b}','Marufsharia\Helloworld\Controllers\HelloworldController@add');