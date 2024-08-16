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
        Schema::create('matches_playeds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("player_id");
            $table->unsignedBigInteger("match_id");
            $table->unsignedBigInteger("goals");
            $table->unsignedBigInteger("team_id");
            $table->timestamps();

            $table->foreign("player_id")->references("id")->on("players");
            $table->foreign("match_id")->references("id")->on("matches");
            $table->foreign("team_id")->references("id")->on("soccer_teams");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches_playeds');
    }
};
