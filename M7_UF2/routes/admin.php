<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


 
Route::middleware(['admin_db'])->group(function(){
    //els names de cada ruta tenen el mateix nom que el mètode al que fan referència
    
    //ruta 1: demana les dades de centre amb path '/centres'
   
    //ruta 2: envia dades d'usuari per fer el login/signin amb path '/usuaris'
    
    //ruta3: demana dades de professorat amb path '/professorat'
   
    //ruta4: demana dades d'alumnat amb path '/alumnat'
    
    //ruta5: demana mostrar la view d'admin amb path '/admin_view'
    

});

    



?>
