<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert($this->getCountries());
    }

    private function getCountries(): array
    {
        return [
            [
                'code' => 370,
                'name' => 'Lithuania',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 371,
                'name' => 'Latvia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 372,
                'name' => 'Estonia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 255,
                'name' => 'Tanzania',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 66,
                'name' => 'Thailand',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
    }
}
