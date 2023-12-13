<?php

namespace App\Livewire\Main;

use Livewire\Component;

class LogoFirst extends Component
{
    public $logofirst = 'logo2.jpg';
    public $logourl = 'http://localhost';
    public $namefirst = 'Negócios Promissores';
    public $active_css = 'h-auto rounded-sm ';
    public function render()
    {

        return view('livewire.main.logo-first');
    }
}
