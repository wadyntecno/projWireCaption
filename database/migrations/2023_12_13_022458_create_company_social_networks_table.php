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
        Schema::create('company_social_networks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained();
            $table->enum('type', [ 'Facebook', 'Instagram', 'linkedin', 'YouTube', 'TikTok', 'Messenger', 'Kawai', 'Pinterest', 'Twitter']);
            $table->string('name');
            $table->string('url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_social_networks');
    }
};
