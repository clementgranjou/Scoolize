<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([  
            
            'id' => 1,

            'video_name' => "9 conseils pour bien s'orienter après le bac",  
   
            'littledescription' => "9 conseils pour bien s'orienter après le bac",   
   
            'bigdescription' => "On est TOUS d'accord pour dire que l'orientation, c'est pas simple ! Alors on a fait une vidéo en partenariat avec l’Education Nationale sur les 9 conseils qui peuvent vous aider dans vos démarches d’orientation. ",
            
            'link' => 'https://www.youtube.com/watch?v=I1sPoebdS2w&ab_channel=L%27Antiseche',
   
         ]);   
         
         DB::table('videos')->insert([  
            
            'id' => 2,

            'video_name' => "Prêts à transformer le monde de demain ? Découvrez Epitech Digital",  
   
            'littledescription' => "Prêts à transformer le monde de demain ? Découvrez Epitech Digital",   
   
            'bigdescription' => "Jonathan Desrumaux est le Directeur pédagogique adjoint d'Epitech Digital à Toulouse. Il raconte l'ambition d'Epitech Digital : former les étudiants aux métiers de l'entreprise qui sont transformés par la transformation digitale.",
            
            'link' => 'https://www.youtube.com/watch?v=jo3tuYupIJ8&ab_channel=EpitechDigital',
   
         ]);

         DB::table('videos')->insert([  
            
            'id' => 3,

            'video_name' => "LES ÉCOLES D'INGÉNIEURS POST BAC !",  
   
            'littledescription' => "LES ÉCOLES D'INGÉNIEURS POST BAC !",   
   
            'bigdescription' => "On va aborder des sujets liés au développement personnel afin d'apprendre à se connaître, mais on parlera également du BAC 2021 ainsi que des études supérieures #Parcoursup2021 !",
            
            'link' => 'https://www.youtube.com/watch?v=5fSQMH9-1p4&ab_channel=BrightFuture',
   
         ]);

         DB::table('videos')->insert([  
            
            'id' => 4,

            'video_name' => "LA FAC DE DROIT ( mon parcours, organisation, emploi du temps...)",  
   
            'littledescription' => "LA FAC DE DROIT ( mon parcours, organisation, emploi du temps...)",   
   
            'bigdescription' => "Comment allez-vous ? me revoilà enfin avec la vidéo sur la fac de droit ! dans une première partie je vous parle de la fac en général, et dans une deuxième partie je réponds à vos questions sur la fac de droit.",
            
            'link' => 'https://www.youtube.com/watch?v=SzCR4kDn0mU&ab_channel=FannySNL',
   
         ]);

         DB::table('videos')->insert([  
            
            'id' => 5,

            'video_name' => "[BTS] 2 min pour découvrir le BTS Électrotechnique",  
   
            'littledescription' => "[BTS] 2 min pour découvrir le BTS Électrotechnique",   
   
            'bigdescription' => "Découvrez le BTS électrotechnique du lycée Benjamin Franklin, en voie scolaire et par l'apprentissage",
            
            'link' => 'https://www.youtube.com/watch?v=aWTJXOqbaeg&ab_channel=Lyc%C3%A9eBenjaminFranklin',
   
         ]);
         
         
    }
}
