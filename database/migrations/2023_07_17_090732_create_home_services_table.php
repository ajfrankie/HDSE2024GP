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
        Schema::create('home_services', function (Blueprint $table) {
            $table->id();
            $table->string('head');
            $table->string('tittle');
            $table->string('servicenameone');
            $table->text('serviceiconone');
            $table->string('servicenametwo');
            $table->text('serviceicontwo');
            $table->string('servicenamethree');
            $table->text('serviceiconthree');
            $table->string('servicenamefour');
            $table->text('serviceiconfour');
            $table->string('servicenamefive');
            $table->text('serviceiconfive');
            $table->string('servicenamesix');
            $table->text('serviceiconsix');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_services');
    }
};
