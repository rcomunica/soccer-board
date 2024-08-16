<?php

use App\Enums\SoccerTeams;
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
        Schema::create('soccer_teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum("status", ["1", "2", "3"])->default(SoccerTeams::Active);
            $table->integer("points");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soccer_teams');
    }
};
