<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class wisata extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $wisata = ([
            ([
                "id"            => "123",
                "name"          => "raysa",
                "location"      => "bali",
                "details"       => "pantai kuta",
                "day_open"      => "monday-sunday",
                "time_open"     => "08.00-23.00",
                "pricing"        => "paid",
            ]),
            ([
                "id"            => "124",
                "name"          => "bunga",
                "location"      => "yogyakarta",
                "details"       => "malioboro",
                "day_open"      => "monday-sunday",
                "time_open"     => "08.00-00.00",
                "pricing"        => "free",
            ]),
            
            
        ]);

        wisata::insert($wisata);
    }
}
