<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aroma;
use App\Models\Wine;

class AromaWineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i = 0; $i < 200; $i++) {

            $wine = Wine::inRandomOrder()->first();

            $aroma_id = Aroma::inRandomOrder()->first()->id;


            $wine->aromas()->attach($aroma_id);

        }
    }
}
