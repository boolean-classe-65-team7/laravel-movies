<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                "title" => "Drive",
                "plot" => "Un pilota d'auto, oltre a lavorare come meccanico e stuntman cinematografico a Hollywood, arrotonda prestando servizio come autista per alcuni rapinatori di banche. Il suo datore di lavoro, Shannon, è un meccanico che in passato ha avuto problemi con la mafia, finendo gambizzato, e che, proprio tramite l'aiuto di un altro boss, Bernie Rose, cerca di creare una scuderia automobilistica per correre nella NASCAR, impiegando il protagonista come pilota.",
                "url_img" => "https://upload.wikimedia.org/wikipedia/it/thumb/b/b7/Drive_-_Ryan_Gosling.png/260px-Drive_-_Ryan_Gosling.png",
                "genre" => "thriller",
                "release_date" => "2011-11-03",
            ],
            [
                "title" => "Drive",
                "plot" => "Un pilota d'auto, oltre a lavorare come meccanico e stuntman cinematografico a Hollywood, arrotonda prestando servizio come autista per alcuni rapinatori di banche. Il suo datore di lavoro, Shannon, è un meccanico che in passato ha avuto problemi con la mafia, finendo gambizzato, e che, proprio tramite l'aiuto di un altro boss, Bernie Rose, cerca di creare una scuderia automobilistica per correre nella NASCAR, impiegando il protagonista come pilota.",
                "url_img" => "https://upload.wikimedia.org/wikipedia/it/thumb/b/b7/Drive_-_Ryan_Gosling.png/260px-Drive_-_Ryan_Gosling.png",
                "genre" => "thriller",
                "release_date" => "2011-11-03",
            ],
        ];

        
        foreach ($movies as $movie){

        
            $newMovie = new Movie();
    
            $newMovie->title = $movie["title"];
            $newMovie->plot = $movie["plot"];
            $newMovie->url_img = $movie["url_img"];
            $newMovie->genre = $movie["genre"];
            $newMovie->release_date = $movie["release_date"];
 
            $newMovie->save();
    
            }


    }
}
