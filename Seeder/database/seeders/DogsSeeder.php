<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// Import db facade
use DB, Carbon;
class DogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'dog_tag_number' => 'KWEENY123',
                'registration_number' => 2023,
                'name' => 'Kweeny',
                'kennel' => 'kween',
                'breeder' => 'kweenry',
                'owner' => 'kweesy',
                'color' => 'black',
                'breed' => 'sy',
                'sire' => 8,
                'dam' => 17, 
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'dog_tag_number' => 'KWEENY123',
                'registration_number' => 2023,
                'name' => 'Kalye',
                'kennel' => 'ken',
                'breeder' => 'kenny',
                'owner' => 'kenneth',
                'color' => 'black',
                'breed' => 'corn',
                'sire' => 5,
                'dam' => 9, 
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'dog_tag_number' => 'LEE1234',
                'registration_number' => 5678,
                'name' => 'Ikaw rah Dong',
                'kennel' => 'fafa',
                'breeder' => 'askal',
                'owner' => 'mark',
                'color' => 'brown',
                'breed' => 'askal',
                'sire' => 2,
                'dam' => 1, 
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'dog_tag_number' => 'AI123',
                'registration_number' => 1456,
                'name' => 'Amber',
                'kennel' => 'ambot',
                'breeder' => 'askal',
                'owner' => 'Dodong',
                'color' => 'black',
                'breed' => 'bro',
                'sire' => 6,
                'dam' => 5, 
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'dog_tag_number' => 'MARPH20210001',
                'registration_number' => 9465873,
                'name' => 'Ikaw rah gang',
                'kennel' => 'Burn',
                'breeder' => 'Pitbol',
                'owner' => 'Inday',
                'color' => 'Pink',
                'breed' => 'Askal',
                'sire' => 5,
                'dam' => 6, 
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ]
        ];

       DB::table('dogs')->insert($data);
    }
}
