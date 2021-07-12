<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'celulares y tablets',
                'slug' => Str::slug('celulares y tablets'), 
                'icon' => '<i class="fas fa-mobile-alt"></i>'
            ],
            [
                'name' => 'TV, audio y video',
                'slug' => Str::slug('TV, audio y video'), 
                'icon' => '<i class="fas fa-tv"></i>'
            ],
            [
                'name' => 'consola y videojuegos',
                'slug' => Str::slug('consola y videojuegos'), 
                'icon' => '<i class="fas fa-gamepad"></i>'
            ],
            [
                'name' => 'computacion',
                'slug' => Str::slug('computacion'), 
                'icon' => '<i class="fas fa-laptop"></i>'
            ],
            [
                'name' => 'moda',
                'slug' => Str::slug('moda'), 
                'icon' => '<i class="fas fa-tshirt"></i>'
            ],
        ];

        foreach ($categories as $category){
            category::factory(1)->create($category);
        }
    }
}
