<?php

namespace Tests\Feature\Livewire\Main;

use App\Livewire\Main\MenuFirst;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class MenuFirstTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(MenuFirst::class)
            ->assertStatus(200);
    }
}
