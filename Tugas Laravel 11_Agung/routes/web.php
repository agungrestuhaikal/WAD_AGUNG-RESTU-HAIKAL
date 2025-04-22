<?php

use App\Models\PemenangBalonDor;

Route::get('/balondor', function () {
    $data = PemenangBalonDor::all();
    return view('balondor.index', ['pemenangs' => $data]);
});
