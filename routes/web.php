<?php

use App\Http\Controllers\UserController;

Route::resource('users', UserController::class)
    ->only(['index', 'create', 'store', 'show']);

Route::get('/aviso', function () {
    return redirect()->route('users.index')
        ->with('sucesso', 'Teste do componente de alerta!');
});


