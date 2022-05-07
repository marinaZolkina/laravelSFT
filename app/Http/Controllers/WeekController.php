<?php

namespace App\Http\Controllers;

use App\Http\Services\FootballTeamService;
use Illuminate\Http\Request;

class WeekController extends Controller
{
    private $footballTeamService;

    public function __construct(
        FootballTeamService $footballTeamService
    ) {
        $this->footballTeamService = $footballTeamService;
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $data = $this->footballTeamService->setAllDataForWeek($id);

        return view('home', [
            'matches' => $data['matches'],
            'leangue' => $data['leangue'],
            'percentages' => $data['percentages'],
            'week' => $id
        ]);
    }
}
