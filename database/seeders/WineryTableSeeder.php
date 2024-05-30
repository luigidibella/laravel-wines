<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Winery;
use App\Models\Wine;

class WineryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_str = file_get_contents('https://api.sampleapis.com/wines/reds');
        $data = json_decode($data_str);

        foreach ($data as $wine) {
            $existing_winery = Winery::where('name', $wine->winery)->first();

            if (!$existing_winery) {
                $new_winery = new Winery();
                $new_winery->name = $wine->winery;
                $new_winery->save();
            }
        }
    }
}
