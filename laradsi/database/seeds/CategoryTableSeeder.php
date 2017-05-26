<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([ 'name' => 'Economía']);
        Category::create([ 'name' => 'Política']);
        Category::create([ 'name' => 'Deportes']);
        Category::create([ 'name' => 'Cultura']);
        Category::create([ 'name' => 'Entretenimiento']);
        Category::create([ 'name' => 'Salud']);
        Category::create([ 'name' => 'Religión']);
    }
}
