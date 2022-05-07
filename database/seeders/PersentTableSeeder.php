<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('percentages')->delete();

        DB::table('percentages')->insert([
            [
                'team_id' => 1,
                'percentage' => rand(0,100),
                'week_number' => 1,
            ],
            [
                'team_id' => 2,
                'percentage' =>  rand(0,100),
                'week_number' => 1,
            ],
            [
                'team_id' => 3,
                'percentage' =>  rand(0,100),
                'week_number' => 1,
            ],
            [
                'team_id' => 4,
                'percentage' =>  rand(0,100),
                'week_number' => 1,
            ],
            [
                'team_id' => 1,
                'percentage' =>  rand(0,100),
                'week_number' => 2,
            ],
            [
                'team_id' => 2,
                'percentage' =>  rand(0,100),
                'week_number' => 2,
            ],
            [
                'team_id' => 3,
                'percentage' =>  rand(0,100),
                'week_number' => 2,
            ],
            [
                'team_id' => 4,
                'percentage' =>  rand(0,100),
                'week_number' => 2,
            ],
            [
                'team_id' => 1,
                'percentage' =>  rand(0,100),
                'week_number' => 3,
            ],
            [
                'team_id' => 2,
                'percentage' =>  rand(0,100),
                'week_number' => 3,
            ],
            [
                'team_id' => 3,
                'percentage' =>  rand(0,100),
                'week_number' => 3,
            ],
            [
                'team_id' => 4,
                'percentage' =>  rand(0,100),
                'week_number' => 3,
            ],
            [
                'team_id' => 1,
                'percentage' =>  rand(0,100),
                'week_number' => 4,
            ],
            [
                'team_id' => 2,
                'percentage' =>  rand(0,100),
                'week_number' => 4,
            ],
            [
                'team_id' => 3,
                'percentage' =>  rand(0,100),
                'week_number' => 4,
            ],
            [
                'team_id' => 4,
                'percentage' =>  rand(0,100),
                'week_number' => 4,
            ],
        ]);
    }
}
