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
       $destinations = ([
        ([
            "nama" => "pantai kuta bali",
            "location" => "bali",
            "details" => "Pantai",
            "day_open" => "Setiap Hari",
            "time_open" => "05:00 WIB",
            "pricing" => "Gratis",
        ]),
        ([
            "nama" => "bali zoo",
            "location" => "bali",
            "details" => "kebun binatang",
            "day_open" => "Setiap Hari",
            "time_open" => "09:00 WIB",
            "pricing" => "Berbayar",
        ])
    ]);

    Destinations::insert($destinations);
}
            
}
