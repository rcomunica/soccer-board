<?php

namespace Tests\Feature\Livewire;

use App\Livewire\SoccerTeam;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SoccerTeamTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(SoccerTeam::class)
            ->assertStatus(200);
    }
}
