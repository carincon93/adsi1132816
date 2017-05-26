<?php

use Illuminate\Database\Seeder;
use App\Article;


class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([ 'name' => 'El barril de petróleo subió', 
        				'image' => 'imgs/articles/foto1.png', 
        				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, architecto.', 
        				'category_id' => 1 ]);
        Article::create([ 'name' => 'Nairo es lider', 
        				'image' => 'imgs/articles/nairo.png', 
        				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, architecto.', 
        				'category_id' => 3 ]);
        Article::create([ 'name' => 'Cura para el cancer', 
        				'image' => 'imgs/articles/laboratorio.png', 
        				'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, architecto.', 
        				'category_id' => 6 ]);
    }
}
