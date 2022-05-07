<?php

namespace App\Traits;

use App\Models\Team;
use App\Models\Percentage;
use Illuminate\Support\Facades\DB;

trait FootballTrait
{
    public function getPercentages(string $week)
    {
        $teams = Team::all()->toArray();

        foreach($teams as $team) {
            $percentageArray = [
                'team_id' => $team['id'],
                'week_number' => $week,
                'percentage' => rand(1,100),
            ];

            Percentage::create($percentageArray);

        }
    }

    public function getPercentageWithSort(string $week)
    {
        $percentages = Percentage::where('week_number', '=', $week)->get()->toArray();
        return asort($percentages);
    }
}
