<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Season;
use Illuminate\Database\Seeder;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Season::count() == 0) {
           for($i=1; $i<=15; $i++){
               Season::create([
                   'id'   => $i,
                   'name' => "Temporada $i",
                ]);
            }
        }
    }
}
