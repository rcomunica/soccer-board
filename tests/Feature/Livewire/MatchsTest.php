<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Matchs;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class MatchsTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Matchs::class)
            ->assertStatus(200);
    }
}
