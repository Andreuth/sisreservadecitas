<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ruta para el admin
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware("auth","can:admin.index") ;

//ruta para admin-usuario
Route::get('/admin/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->name('admin.usuarios.index')->middleware("auth","can:admin.usuarios.index") ;
Route::get('/admin/usuarios/create', [App\Http\Controllers\UsuariosController::class, 'create'])->name('admin.usuarios.create')->middleware("auth","can:admin.usuarios.create") ;
Route::post('/admin/usuarios/create', [App\Http\Controllers\UsuariosController::class, 'store'])->name('admin.usuarios.store')->middleware("auth","can:admin.usuarios.store") ;

//ruta para admin-docentes-personals
Route::get('/admin/personals', [App\Http\Controllers\PersonalController::class, 'index'])->name('admin.personals.index')->middleware("auth","can:admin.personals.index") ;
Route::get('/admin/personals/create', [App\Http\Controllers\PersonalController::class, 'create'])->name('admin.personals.create')->middleware("auth","can:admin.personals.create") ;
Route::post('/admin/personals/create', [App\Http\Controllers\PersonalController::class, 'store'])->name('admin.personals.store')->middleware("auth","can:admin.personals.store") ;


//ruta para admin-laboratorio
Route::get('/admin/laboratorios', [App\Http\Controllers\LaboratorioController::class, 'index'])->name('admin.laboratorios.index')->middleware("auth","can:admin.laboratorios.index") ;
Route::get('/admin/laboratorios/create', [App\Http\Controllers\LaboratorioController::class, 'create'])->name('admin.laboratorios.create')->middleware("auth","can:admin.laboratorios.create") ;
Route::post('/admin/laboratorios/create', [App\Http\Controllers\LaboratorioController::class, 'store'])->name('admin.laboratorios.store')->middleware("auth","can:admin.laboratorios.store") ;



//ruta para admin-horarios
Route::get('/admin/horarios', [App\Http\Controllers\HorarioController::class, 'index'])->name('admin.horarios.index')->middleware("auth","can:admin.horarios.index") ;
Route::get('/admin/horarios/create', [App\Http\Controllers\HorarioController::class, 'create'])->name('admin.horarios.create')->middleware("auth","can:admin.horarios.create") ;
Route::post('/admin/horarios/create', [App\Http\Controllers\HorarioController::class, 'store'])->name('admin.horarios.store')->middleware("auth","can:admin.horarios.store") ;