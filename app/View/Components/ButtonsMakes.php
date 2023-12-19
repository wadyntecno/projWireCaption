<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonsMakes extends Component
{

    /**
     * @props(['disabled' => false, 
* 'type' => 'submit', 
* 'hint' => 'primary'])

     */
    public string $type = 'submit';
    public string $hint = 'primary';
    public string $name = '';
    public string $disabled = "false";

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.buttons-makes');
    }
}
