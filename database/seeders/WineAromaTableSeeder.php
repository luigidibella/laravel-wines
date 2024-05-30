<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aroma;
use App\Models\Wine;

class WineAromaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (Wine::all() as $wine) {
            $wine->aromas()->attach(Aroma::all()->random(3));
        }
    }
}
