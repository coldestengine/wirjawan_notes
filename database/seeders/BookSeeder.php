<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $category = array('Quicks Reads', 'Medium Reads', 'Long Reads');
        $par = array(10,50,100);

        for ($i=0; $i<20; $i++){
            $temp = $faker->randomElement($par);
            switch($temp){
                case 10:
                    $cat = $category[0];
                    break;
                case 50:
                    $cat = $category[1];
                    break;
                case 100:
                    $cat = $category[2];
                    break;
            }
            DB::table('books')->insert([
                'title' => $faker->sentence(3),
                'description' => $faker->paragraph(1),
                'body' => $faker->paragraph($temp),
                'author' => $faker->name,
                'reading_time' => $cat,
                'image' => $faker->imageUrl(640, 480, 'books', true),
                'created_at' => now(),
            ]);
        }
    }
}
