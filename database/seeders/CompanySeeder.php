<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            'name' => $this->faker->title,
            'fantasyname' => $this->faker->title,
            'sigla' => Str::random(10) . '@gmail.com',
            'ds_frase' => Str::random(10),
            'nm_logo' => Str::random(10),
            'cnpj' => Str::random(10),

        ]);
    }
}


// $table->string('name');
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
            