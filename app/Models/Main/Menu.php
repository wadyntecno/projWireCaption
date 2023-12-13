<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded  = ['id'];

    public static function selectMenuFirst(): mixed
    {
        return Menu::where('style', '1')->orderBy('name')->get();
    }

}
