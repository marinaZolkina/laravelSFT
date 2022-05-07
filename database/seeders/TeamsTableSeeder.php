<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->delete();

        DB::table('teams')->insert([
            [
                'id' => 1,
                'name' => 'Chelsea',
            ],
            [
                'id' => 2,
                'name' => 'Arsenal',
            ],
            [
                'id' => 3,
                'name' => 'Manchester City ',
            ],
            [
                'id' => 4,
                'name' => 'Liverpool',
            ]
        ]);
    }
}
