<?php

namespace App\Livewire\Main;

use App\Models\Main\Menu;
use Livewire\Component;

class MenuFirst extends Component
{
    public array $menus = [];
    public array $menu3 = [];
    public string $div_css = '';
    public string $ul_css = '';
    public string $active_css = '';
    public string $mensagem = ' a mensagem está chegando!! ';

    public function render()
    {
        // $menus = Menu::where('style', '1')->orderBy('name')->get();
        // $menus = Menu::selectMenuFirst();
        $menu3 = Menu::get();
        // $menus = Menu::all();
        // dd($menu3);
        return view('livewire.main.menu-first', [
            'menu3' => $menu3
        ]);
        // return view('livewire.main.menu-first')->with('menu3' , $menu3);
    }
}
