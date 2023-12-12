<?php

namespace App\Livewire\Main;

use Livewire\Component;

class LogoFirst extends Component
{
    public $logofirst = 'logo2.jpg';
    public $namefirst = 'Negócios Promissores';
    public function render()
    {


        return view('livewire.main.logo-first');
    }
}
