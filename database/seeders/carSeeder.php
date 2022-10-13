<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class carSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("cars")->insert(
            [
                "brand"=> "Audi",
                "productyear"=> 2012,
                "color_id"=> 2
                
            ]
            );
         DB::table("colors")->insert(
            [
                "color"=> "blue",
                
                    
                    
            ]
            );
    }
}
