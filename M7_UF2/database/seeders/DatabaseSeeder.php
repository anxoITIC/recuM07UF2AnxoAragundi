<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Centre;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*
        Si es fa servir Fake() no caldrà afegir dades,
        sino indicar que es crei la Factory amb 25 registres
        en cas d'haver-hi ja altres registres a la taula,
        els afegirà
        */
        Centre::factory(15)->create();

        
    }
}



