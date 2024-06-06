<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    // public function centres(){
    //     return view('Admin.admin')->with(['result'=>'Aqui es mostraran els centres que el rol admin pot veure']);
    // }

    //Teoria 1.Laravel 10
    public function centres(){
        $centers = [
            ['id_center'=>'1','name'=>'Institut TIC de Barcelona', 'Address'=>'C/ de Sancho de Ávila, 133',
            'CP'=>'08018', 'City'=>'Barcelona'],
            ['id_center'=>'2','name'=>'jaume Balmes', 'Address'=>'C/ diputació, 150',
            'CP'=>'08013', 'City'=>'Barcelona'],
                ];
                /*
                afegir return per enviar la informació de $centres 
                a la plantilla de centres que està ubicada dintre de la carpeta Admin
                */
        
    }

    //amb verificació de dades
    public function users(Request $request){
        //array dades admin
        $admin_data=[
            ['email'=>'admin@admin.com', 'password'=>'admin'],
            ['email'=>'admin2@admin2.com', 'password'=>'admin2'],
        ];
        $email_login = $request->input('email_login');
        $passwd_login = $request->input('password_login');

        /*Dintre del foreach mirem si existeix l'email i el password a l'array. 
        Si és correcte es reenvia a la vista de admin de la carpeta Admin.*/
        foreach ($admin_data as $admin) {
            
        }
    
        return view('signin');
    }


    public function teach(){
        $teach = [
            ['id'=>'1','name'=>'Roger', 'surname'=>'Sobrino',
            'rol'=>'Professor', 'email'=>'roger@roger.com'],
            ['id'=>'2','name'=>'Sara', 'surname'=>'Gonzalez',
            'rol'=>'Professora', 'email'=>'sara@sara.com'],
            ['id'=>'3','name'=>'Pere', 'surname'=>'Guitart',
            'rol'=>'Professor', 'email'=>'pere@pere.com'],
            ['id'=>'4','name'=>'Oriol', 'surname'=>'Xisco',
            'rol'=>'Professor', 'email'=>'sara@sara.com'],
                ];
                /*
                afegir return per enviar la informació de $teach 
                a la plantilla de professorat que està ubicada dintre de la carpeta Admin
                */

        
    }

    public function stud(){
        $stud = [
            ['id'=>'1','name'=>'Carles', 'surname'=>'Canals',
            'rol'=>'Alumne', 'email'=>'roger@roger.com'],
            ['id'=>'2','name'=>'Sofia', 'surname'=>'Taraco',
            'rol'=>'Alumne', 'email'=>'sara@sara.com'],
            ['id'=>'3','name'=>'Francesc', 'surname'=>'Riugal',
            'rol'=>'Alumne', 'email'=>'pere@pere.com'],
            ['id'=>'4','name'=>'Laia', 'surname'=>'Manresa',
            'rol'=>'Alumne', 'email'=>'sara@sara.com'],
                ];

                /*
                afegir return per enviar la informació de $stud 
                a la plantilla de alumnat que està ubicada dintre de la carpeta Admin
                */
        
    }

    public function v_admin(){
        /*
        Funció per enviar directament a la view admin ubicada
        a la carpeta admin
        */
        
    }



}




