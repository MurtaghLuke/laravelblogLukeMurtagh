<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attraction;

class AttractionSeeder extends Seeder
{
    public function run()
    {
        Attraction::create([
            'name' => 'Croke Park',
            'description' => 'The home of Gaelic games and one of the largest stadiums in Europe.',
            'image' => 'croke_park.jpg',
            'location' => 'Dublin'
        ]);

        Attraction::create([
            'name' => 'Trinity College Library',
            'description' => 'The oldest university in Ireland and its library is one of the most beautiful in the world.',
            'image' => 'trinity_college_library.jpg',
            'location' => 'Dublin'
        ]);

        Attraction::create([
            'name' => 'Glendalough',
            'description' => 'A monastic settlement founded in the 6th century, nestled in the Wicklow Mountains.',
            'image' => 'glendalough.jpg',
            'location' => 'County Wicklow'
        ]);

        Attraction::create([
            'name' => 'Newgrange',
            'description' => 'A prehistoric monument older than the pyramids of Egypt, known for its winter solstice alignment.',
            'image' => 'newgrange.jpg',
            'location' => 'County Meath'
        ]);

        Attraction::create([
            'name' => 'Dublin Castle',
            'description' => 'A historic castle located in the heart of Dublin city, originally built in the 13th century.',
            'image' => 'dublin_castle.jpg',
            'location' => 'Dublin'
        ]);

        Attraction::create([
            'name' => 'Kilmainham Gaol',
            'description' => 'A historic former prison now a museum that tells the story of Irish history and struggle.',
            'image' => 'kilmainham_gaol.jpg',
            'location' => 'Dublin'
        ]);

        Attraction::create([
            'name' => 'Connemara National Park',
            'description' => 'A vast and unspoiled landscape in County Galway, known for its mountain ranges and wildlife.',
            'image' => 'connemara_national_park.jpg',
            'location' => 'County Galway'
        ]);
        
        Attraction::create([
            'name' => 'The Aran Islands',
            'description' => 'A group of islands off the coast of Galway, known for their rugged beauty and ancient forts.',
            'image' => 'aran_islands.jpg',
            'location' => 'County Galway'
        ]);

        Attraction::create([
            'name' => 'Killarney National Park',
            'description' => 'A beautiful national park in County Kerry, known for its lakes, mountains, and rich biodiversity.',
            'image' => 'killarney_national_park.jpg',
            'location' => 'County Kerry'
        ]);

        Attraction::create([
            'name' => 'The Burren',
            'description' => 'A unique karst landscape in County Clare known for its rare flora and fauna.',
            'image' => 'the_burren.jpg',
            'location' => 'County Clare'
        ]);
        
    }
}