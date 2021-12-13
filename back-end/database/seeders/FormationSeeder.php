<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formation')->insert([  
           
            'id' => 1,
     
            'formation_name' => "L'école de la transformation digitale",  
     
            'school_name' => "Epitech Digital",   
     
            'formation_type' => "Programe grandes écoles",
            
            'department' => 'Gironde',

            'long_formation_name' => "Epitech Digital, l'école de la trasformation digitale",

         ]);

         DB::table('formation')->insert([  
           
            'id' => 2,
     
            'formation_name' => "Licence droit et sciences politiques",  
     
            'school_name' => "Université de Bordeaux",   
     
            'formation_type' => "Université",
            
            'department' => 'Gironde',

            'long_formation_name' => "Faculté de droit et science politique - Université de Bordeaux",

         ]);
 
    }
}
