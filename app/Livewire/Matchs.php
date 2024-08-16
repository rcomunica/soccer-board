<?php

namespace App\Livewire;

use App\Models\Player;
use App\Models\SoccerTeam;
use Exception;
use Livewire\Component;

class Matchs extends Component
{
    public $modal = true;


    public $localTeams, $visitorTeams;

    // VARIABLES FOR FIRST STEP
    public $localTeam, $visitorTeam, $matchDate;

    public $sPlayersLocalTeam;
    public $sPlayersVisitorTeam;

    public $playersLocalTeam = [];
    public $playersVisitorTeam = [];



    public function mount()
    {
        //
    }

    public function render()
    {
        $this->localTeams = SoccerTeam::all();
        $this->visitorTeams = SoccerTeam::all();
        return view('livewire.matchs');
    }

    public function openModal()
    {
        $this->resetExcept("search");
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->resetExcept("search");
        $this->modal = false;
    }

    public function searchTeams()
    {
        // dd($value);
        if ($this->localTeam) {
            $this->localTeam = SoccerTeam::find($this->localTeam);
            $this->sPlayersLocalTeam = Player::where('soccer_team_id', $this->localTeam->id)->get();
        }
        if ($this->visitorTeam) {
            $this->visitorTeam = SoccerTeam::find($this->visitorTeam);
            $this->sPlayersVisitorTeam = Player::where('soccer_team_id', $this->visitorTeam->id)->get();
        }
    }
}
