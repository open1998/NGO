<?php

namespace Database\Seeders;

use App\Models\Stat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    
    public function run(): void
    {
        $stats =[
           [
            'key' => '1000+',
            'value' => 'Children Educated'
           ],

           [
            'key' => '500+',
            'value' => 'Meals Served'
           ],

           [
            'key' => '200+',
            'value' => 'Volunteer Engaged'
           ],

           [
            'key' => '50+',
            'value' => 'Communities Helped'
           ],
        ];

        foreach ($stats as $stat) {
            Stat::updateOrCreate( [
            'value' => $stat['value']
            ], [
            'key' => $stat['key'],
            ]);


        }
        echo "StatSeeder: seeded" . count ($stats) . "\n";

    }
}
