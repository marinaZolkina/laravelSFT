<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('results')->insert([
            'team_id' => 1,
            'result' => rand(0,4),
            'week_number' => 1
        ]);

        DB::table('results')->insert([
            'team_id' => 1,
            'result' => rand(0,4),
            'week_number' => 2
        ]);

        DB::table('results')->insert([
            'team_id' => 1,
            'result' => rand(0,4),
            'week_number' => 3
        ]);

        DB::table('results')->insert([
            'team_id' => 1,
            'result' => rand(0,4),
            'week_number' => 4
        ]);

        DB::table('results')->insert([
            'team_id' => 1,
            'result' => rand(0,4),
            'week_number' => 5
        ]);

        DB::table('results')->insert([
            'team_id' => 1,
            'result' => rand(0,4),
            'week_number' => 6
        ]);

        DB::table('results')->insert([
            'team_id' => 2,
            'result' => rand(0,4),
            'week_number' => 1
        ]);

        DB::table('results')->insert([
            'team_id' => 2,
            'result' => rand(0,4),
            'week_number' => 2
        ]);

        DB::table('results')->insert([
            'team_id' => 2,
            'result' => rand(0,4),
            'week_number' => 3
        ]);

        DB::table('results')->insert([
            'team_id' => 2,
            'result' => rand(0,4),
            'week_number' => 4
        ]);

        DB::table('results')->insert([
            'team_id' => 2,
            'result' => rand(0,4),
            'week_number' => 5
        ]);

        DB::table('results')->insert([
            'team_id' => 2,
            'result' => rand(0,4),
            'week_number' => 6
        ]);

        DB::table('results')->insert([
            'team_id' => 3,
            'result' => rand(0,4),
            'week_number' => 1
        ]);

        DB::table('results')->insert([
            'team_id' => 3,
            'result' => rand(0,4),
            'week_number' => 2
        ]);

        DB::table('results')->insert([
            'team_id' => 3,
            'result' => rand(0,4),
            'week_number' => 3
        ]);

        DB::table('results')->insert([
            'team_id' => 3,
            'result' => rand(0,4),
            'week_number' => 4
        ]);

        DB::table('results')->insert([
            'team_id' => 3,
            'result' => rand(0,4),
            'week_number' => 5
        ]);

        DB::table('results')->insert([
            'team_id' => 3,
            'result' => rand(0,4),
            'week_number' => 6
        ]);

        DB::table('results')->insert([
            'team_id' => 4,
            'result' => rand(0,4),
            'week_number' => 1
        ]);

        DB::table('results')->insert([
            'team_id' => 4,
            'result' => rand(0,4),
            'week_number' => 2
        ]);

        DB::table('results')->insert([
            'team_id' => 4,
            'result' => rand(0,4),
            'week_number' => 3
        ]);

        DB::table('results')->insert([
            'team_id' => 4,
            'result' => rand(0,4),
            'week_number' => 4
        ]);

        DB::table('results')->insert([
            'team_id' => 4,
            'result' => rand(0,4),
            'week_number' => 5
        ]);

        DB::table('results')->insert([
            'team_id' => 4,
            'result' => rand(0,4),
            'week_number' => 6
        ]);
    }
}
