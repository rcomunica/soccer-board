<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Fouls;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class FoulsTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Fouls::class)
            ->assertStatus(200);
    }
}
