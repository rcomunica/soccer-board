<?php

namespace App\Livewire;

use App\Enums\SoccerTeams;
use App\Models\SoccerTeam as ModelsSoccerTeam;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SoccerTeam extends Component
{

    public $modal = false;

    #
    public $search = '';

    public $teamId;
    public $teams;
    #[Validate('required')]
    public $name,
        $status = SoccerTeams::Active->value,
        $points = 0;


    public function render()
    {
        $this->teams = ModelsSoccerTeam::query()->orderBy("status", "asc")
            ->get();
        return view(
            'livewire.soccer-team',
            [
                "teams" => $this->teams
            ]
        );
    }

    public function openModal()
    {
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->modal = false;
    }


    public function edit($id)
    {
        $this->teamId = $id;

        $soccerTeam = ModelsSoccerTeam::findOrFail($id);

        $this->name = $soccerTeam->name;
        $this->status = $soccerTeam->status;
        $this->points = $soccerTeam->points;
        $this->openModal();
    }

    public function store()
    {
        // Validar datos
        $this->validate();

        // Guardar info
        $soccerTeam = ModelsSoccerTeam::updateOrCreate([
            "id" => $this->teamId
        ], [
            "name" => $this->name,
            "status" => SoccerTeams::from($this->status)->value,
            "points" => $this->points,
        ]);

        session()->flash("success", $this->teamId ? "'<strong>$soccerTeam->name</strong>' Fue editado" : "'<strong>$soccerTeam->name</strong>' fue creado");

        $this->closeModal();
        $this->resetExcept("search");
    }

    public function delete($id)
    {
        $soccerTeam = ModelsSoccerTeam::find($id);
        $soccerTeam->status = SoccerTeams::Disable;
        $soccerTeam->save();
        session()->flash("info", "'<strong>$soccerTeam->name</strong>' Fue eliminado");
    }
}
