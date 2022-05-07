<?php

namespace App\Http\Services;

use App\Models\League;
use App\Models\Match;
use App\Models\Percentage;
use App\Models\Result;
use App\Traits\FootballTrait;
use Illuminate\Support\Facades\DB;

class FootballTeamService
{
    use FootballTrait;

    public function checkResultsFootballTeams(string $week)
    {
        $matchsFullDB = [];
        //$resultsDB = Result::where('week_number', '=', $week)->get()->toArray();
        $matchsDB = Match::where('week_number', '=', $week)->get()->toArray();
       /* $matchsDB = DB::table('matchs')
            ->join('results', 'results.team_id', '=','matchs.home_id')
            ->join('results', 'results.team_id', '=','matchs.visit_id')
            ->where('week_number', '=', $week)
            ->get()
            ->toArray();*/


        foreach ($matchsDB as $match) {
            $resultHome = Result::where('team_id', '=', $match['home_id'])
                ->where('week_number', '=', $week)
                ->get()
                ->toArray();

            $resultVisit = Result::where('team_id', '=', $match['visit_id'])
                ->where('week_number', '=', $week)
                ->get()
                ->toArray();

            $matchsFullDB[$match['id']] = [
                'resultHome' => $resultHome[0],
                'resultVisit' => $resultVisit[0],
                'match' => $match
            ];
        }

        foreach ($matchsFullDB as $match) {
            $home = $match['resultHome'];
            $visit = $match['resultVisit'];

            if($home['result'] > $visit['result']) {
                $this->updateResult($week, $home['team_id'], 'victory', 1);
                $this->updateResult($week, $visit['team_id'], 'defeat', 1);
            } elseif ($home['result'] < $visit['result']) {
                $this->updateResult($week, $visit['team_id'], 'victory', 1);
                $this->updateResult($week, $home['team_id'], 'defeat', 1);
            } else {
                $this->updateResult($week, $visit['team_id'], 'equal', 1);
                $this->updateResult($week, $home['team_id'], 'equal', 1);
            }
        }

        return $matchsDB;
    }

    public function updateResult(string $week, int $team_id, string $field, string $value): void
    {
        Result::where('week_number', '=', $week)
            ->where('team_id', '=', $team_id)
            ->update([$field => $value]);
    }

    public function calculationForLeague(string $week)
    {
        $resultsDB = Result::where('week_number', '=', $week)->get()->toArray();
        $parameters = [];

        foreach ($resultsDB as $result) {
            $leagueObj =  League::where('week_number', '=', $week)
                ->where('team_id', '=', $result['team_id'])
                ->first();

            if($leagueObj) {
                $leagueObj = $leagueObj->toArray();
            }

            $parameters['team_id'] = $result['team_id'];
            $parameters['week_number'] = $week;
            $parameters['PTS'] = $this->getPTS($result, $leagueObj);
            $parameters['P'] = $week;
            $parameters['GD'] = $result['result']; // I don't have time to finish the logic
            $parameters['W'] = $result['result']; //
            $parameters['D'] = $result['result']; //
            $parameters['L'] = $result['result']; //

            $this->updateLeague($parameters);
        }
    }

    public function updateLeague(array $parameters): void
    {
        League::updateOrCreate($parameters);
    }

    public function getPTS($result, $leagueObj) {
        $bonuses = 0;

        if($leagueObj) {
            $bonuses = $leagueObj['PTS'];
        }

        if($result['victory']) {
            $bonuses = +3;
        } elseif ($result['equal']) {
            $bonuses = +1;
        }

        return $bonuses;
    }

    public function getFullMatches(string $week){
        $matchesWithResultesArray = [];

        $results = DB::table('results')
            ->join('teams', 'teams.id', '=', 'results.team_id')
            ->select('results.*', 'teams.name')
            ->where('week_number', '=', $week)
            ->get()
            ->toArray();
        $matches = Match::where('week_number', '=', $week)->get()->toArray();
        $newMatches = [];

        foreach ($matches as $match){
            foreach ($results as $result) {
                if($match['home_id'] == $result->team_id) {
                    $newMatches['home_name'] = $match['home_name'];
                    $newMatches['home_result'] = $result->result;

                } elseif ($match['visit_id'] == $result->team_id) {
                    $newMatches['visit_name'] = $match['visit_name'];
                    $newMatches['visit_result'] = $result->result;
                }
            }
            $matchesWithResultesArray[] = $newMatches;
        }
        return $matchesWithResultesArray;
    }

    public function setAllDataForWeek(string $week)
    {
        $data = [];
        $this->checkResultsFootballTeams($week);
        $data['matches'] = $this->getFullMatches($week);
        $this->calculationForLeague($week);
        $data['leangue'] = DB::table('leagues')
            ->join('teams', 'teams.id', '=', 'leagues.team_id')
            ->select('leagues.*', 'teams.name')
            ->where('week_number', '=', $week)
            ->get()
            ->toArray();
        $this->getPercentageWithSort($week);
        $data['percentages'] = DB::table('percentages')
            ->join('teams', 'teams.id', '=', 'percentages.team_id')
            ->select('percentages.*', 'teams.name')
            ->where('week_number', '=', $week)
            ->get()
            ->toArray();

        return $data;
    }
}
