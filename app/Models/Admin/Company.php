<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function address(){
        return $this->hasMany(CompanyAddress::class);
    }

    public function branch(){ //filial
        return $this->hasMany(CompanyBranch::class);
    }

    public function email(){
        return $this->hasMany(CompanyEmail::class);
    }
    public function phone(){
        return $this->hasMany(CompanyPhone::class);
    }
    public function social(){
        return $this->hasMany(CompanySocialNetwork::class);
    }
}
//  $table->id();
//             $table->string('name');
//             $table->string('fantasyname');
//             $table->char('sigla',10);
//             $table->string('ds_frase');
//             $table->string('nm_logo');
//             $table->integer('cnpj');
//             $table->mediumText('description')->nullable();
//             $table->text('variables')->nullable();
//             $table->string('guid')->nullable();
//             $table->string('url')->nullable();
//             $table->char('style',10);
//             $table->boolean('main');
//             $table->boolean('status');
//             $table->softDeletes($column = 'deleted_at', $precision = 0);
           