<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanySocialNetwork extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function company(){
        return $this->belongsTo(Company::class);
    }
}