<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([  
           
           'id' => 1,
    
           'date' => "Samedi 12 Septembre 2022",  
    
           'event_name' => "Journée porte ouverte: CPGE Droit",   
    
           'adress' => "Faccultés Bordeaux Montaigne",
           
           'hour' => '10h-16h',
    
        ]);

        
        DB::table('events')->insert([  
            
            'id' => 2,
            
            'date' => "Samedi 30 Septembre 2022",  
            
            'event_name' => "Salon de l'étudiant: Studyrama",   
            
            'adress' => "Parc des expositions, Bordeaux Lac",
            
            'hour' => '10h-17h30',
            
        ]); 

        DB::table('events')->insert([  
            
            'id' => 3,

            'date' => "Samedi 6 Octobre 2022",  
   
            'event_name' => "Journée porte ouverte: Licence Art et Littérature",   
   
            'adress' => "Faccultés Bordeaux Montaigne",
            
            'hour' => '10h-12h',
   
         ]);
        
        DB::table('events')->insert([  
            
            'id' => 4,
            
            'date' => "Mercredi 18 Octobre 2022",  
   
            'event_name' => "Entretien d'admission: Epitech Digital",   
   
            'adress' => "16 Rue Théodore Blanc, Bruges",
            
            'hour' => '14h-16h',
   
         ]); 


         DB::table('events')->insert([  
            
            'id' => 5,

            'date' => "Dimanche 03 Janvier 2023",  
   
            'event_name' => "Fin de la phase de choix", 
            
            'adress' => ' ',
            
            'hour' => '00h00',
   
         ]); 
    }
}
