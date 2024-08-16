<?php

namespace App\Livewire;

use App\Enums\PlayerStatus;
use App\Enums\SoccerTeams;
use App\Models\Player;
use App\Models\SoccerTeam;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Players extends Component
{
    public $modal = false;

    public $soccerTeams;

    public $players;
    public $playerId;
    #[Validate('required')]
    public $name, $grade, $status = SoccerTeams::Active, $soccerTeamId;

    public function render()
    {
        $this->soccerTeams = SoccerTeam::where('status', '!=', SoccerTeams::Disable)->get();
        $this->players = Player::where('status', '!=', PlayerStatus::Disable)
            ->get();
        return view('livewire.players', ["players" => $this->players]);
    }

    public function openModal()
    {
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->modal = false;
        $this->resetExcept("search");
    }

    public function edit($id)
    {
        $this->resetExcept("search");

        $player = Player::findOrFail($id);
        $this->playerId = $id;
        $this->name = $player->name;
        $this->grade = $player->grade;
        $this->status = $player->status;
        $this->soccerTeamId = $player->soccer_team_id;

        $this->openModal();
    }


    public function store()
    {
        $this->validate();

        $player = Player::updateOrCreate([
            "id" => $this->playerId,
        ], [
            "name" => $this->name,
            "grade" => $this->grade,
            "status" => $this->status,
            "soccer_team_id" => $this->soccerTeamId,
        ]);

        session()->flash("success", $this->playerId ? "'<strong>$player->name</strong>' Fue editado" : "'<strong>$player->name</strong>' fue creado");

        $this->closeModal();
        $this->resetExcept("search");
    }

    public function delete($id)
    {
        $player = Player::find($id);
        $player->status = SoccerTeams::Disable;
        $player->save();
        session()->flash("info", "'<strong>$player->name</strong>' Fue eliminado");
    }
}
