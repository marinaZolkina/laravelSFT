<?php

namespace App\Http\Controllers;

use App\Http\Services\FootballTeamService;
use App\Models\Match;

class MatchController extends Controller
{

    private $footballTeamService;

    public function __construct(
        FootballTeamService $footballTeamService
    ) {
        $this->footballTeamService = $footballTeamService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        for ($key = 1; $key <= 4; $key++){
            $matches[] = $this->footballTeamService->getFullMatches($key);
        }

        return view('matches', [
            'matches' => $matches
        ]);
    }
}
