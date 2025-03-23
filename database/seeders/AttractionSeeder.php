<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attraction;

class AttractionSeeder extends Seeder
{
    public function run()
    {
        Attraction::create([
            'name' => 'Cliffs of Moher',
            'description' => 'One of Irelands most stunning natural wonders.',
            'image' => 'cliffsmoher2.jpg',
            'location' => 'County Clare'
        ]);
        
        Attraction::create([
            'name' => 'Giants Causeway',
            'description' => 'A unique rock formation on the Antrim coast.',
            'image' => 'giants_causeway.jpg',
            'location' => 'County Antrim'
        ]);
    }
}