<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matches')->insert([
            'home_id' => 1,
            'visit_id' => 2,
            'week_number' => 1,
            'home_name' => 'Chelsea',
            'visit_name' => 'Arsenal'
        ]);

        DB::table('matches')->insert([
            'home_id' => 3,
            'visit_id' => 4,
            'week_number' => 1,
            'home_name' =>  'Manchester City',
            'visit_name' => 'Liverpool'
        ]);

        DB::table('matches')->insert([
            'home_id' => 4,
            'visit_id' => 1,
            'week_number' => 2,
            'home_name' => 'Liverpool',
            'visit_name' => 'Chelsea'
        ]);

        DB::table('matches')->insert([
            'home_id' => 2,
            'visit_id' => 3,
            'week_number' => 2,
            'home_name' => 'Arsenal',
            'visit_name' => 'Manchester City'
        ]);

        DB::table('matches')->insert([
            'home_id' => 4,
            'visit_id' => 2,
            'week_number' => 3,
            'home_name' => 'Liverpool',
            'visit_name' => 'Arsenal'
        ]);

        DB::table('matches')->insert([
            'home_id' => 1,
            'visit_id' => 3,
            'week_number' => 3,
            'home_name' => 'Chelsea',
            'visit_name' => 'Manchester City'
        ]);

        DB::table('matches')->insert([
            'home_id' => 2,
            'visit_id' => 1,
            'week_number' => 4,
            'home_name' => 'Arsenal',
            'visit_name' => 'Chelsea'
        ]);

        DB::table('matches')->insert([
            'home_id' => 3,
            'visit_id' => 4,
            'week_number' => 4,
            'home_name' => 'Manchester City',
            'visit_name' => 'Liverpool'
        ]);

        DB::table('matches')->insert([
            'home_id' => 1,
            'visit_id' => 4,
            'week_number' => 5,
            'home_name' => 'Chelsea',
            'visit_name' => 'Liverpool'
        ]);

        DB::table('matches')->insert([
            'home_id' => 3,
            'visit_id' => 2,
            'week_number' => 5,
            'home_name' => 'Manchester City',
            'visit_name' => 'Arsenal'
        ]);

        DB::table('matches')->insert([
            'home_id' => 2,
            'visit_id' => 4,
            'week_number' => 6,
            'home_name' => 'Arsenal',
            'visit_name' => 'Liverpool'
        ]);

        DB::table('matches')->insert([
            'home_id' => 3,
            'visit_id' => 1,
            'week_number' => 6,
            'home_name' => 'Manchester City',
            'visit_name' => 'Chelsea'
        ]);
    }
}
