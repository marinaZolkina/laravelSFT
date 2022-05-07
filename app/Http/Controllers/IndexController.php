<?php

namespace App\Http\Controllers;

use App\Http\Services\FootballTeamService;

class IndexController extends Controller
{

    private $footballTeamService;

    public function __construct(
        FootballTeamService $footballTeamService
    ) {
        $this->footballTeamService = $footballTeamService;
    }

    public function __invoke()
    {
        $data = $this->footballTeamService->setAllDataForWeek(1);

        return view('home', [
            'matches' => $data['matches'],
            'leangue' => $data['leangue'],
            'percentages' => $data['percentages'],
            'week' => 1
        ]);
    }
}
