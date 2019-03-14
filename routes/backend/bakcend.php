<?php

Route::namespace('Backend')->group(function () {
    // Controllers Within The "App\Http\Controllers\Backend" Namespace
    Route::resources([
        'blog' => 'BlogController',
        'category' => 'CategoryController',
    ]);
});

