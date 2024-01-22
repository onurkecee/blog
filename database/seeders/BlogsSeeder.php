<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //$faker = new Faker();
        $faker = Faker::create();

        for ($i = 0; $i < 4; $i++) {
            $title = $faker->sentence(2);
            DB::table('blogs')->insert([
                'category_id' => rand(1, 6),
                'title' => $title,
                'image' => $faker->imageUrl(800, 400, 'animals', true, 'BlogSitesi'),
                'content' => $faker->paragraph(6),
                'slug' => $title,
                //'create_at' => now(),
                //'updated_at' => now()
            ]);
        }

    }
}
