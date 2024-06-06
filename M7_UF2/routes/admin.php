<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


 
Route::middleware(['admin_db'])->group(function(){
    //els names de cada ruta tenen el mateix nom que el mètode al que fan referència
    
    //ruta 1: demana les dades de centre amb path '/centres'
    Route::get('/centres', [AdminController::class, 'centres'])->name('centres');
    //ruta 2: envia dades d'usuari per fer el login/signin amb path '/usuaris'
    Route::post('/usuaris', [AdminController::class, 'users'])->name('usuaris');
    //ruta3: demana dades de professorat amb path '/professorat'
    Route::get('/professorat', [AdminController::class, 'teach'])->name('teachers');
    //ruta4: demana dades d'alumnat amb path '/alumnat'
    Route::get('/alumnat', [AdminController::class, 'stud'])->name('students');
    //ruta5: demana mostrar la view d'admin amb path '/admin_view'
    Route::get('/admin_view', [AdminController::class, 'v_admin'])->name('admin_view');

});

    
?>
