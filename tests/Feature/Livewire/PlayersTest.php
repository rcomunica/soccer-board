<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Players;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class PlayersTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Players::class)
            ->assertStatus(200);
    }
}
