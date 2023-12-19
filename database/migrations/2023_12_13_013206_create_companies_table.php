<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {  
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fantasyname');
            $table->char('sigla',10);
            $table->string('ds_frase');
            $table->string('nm_logo');
            $table->integer('cnpj');
            $table->mediumText('description')->nullable();
            $table->text('variables')->nullable();
            $table->string('guid')->nullable();
            $table->string('url')->nullable();
            $table->char('style',10);
            $table->boolean('main');
            $table->boolean('status');
            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->timestamps();

      
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
