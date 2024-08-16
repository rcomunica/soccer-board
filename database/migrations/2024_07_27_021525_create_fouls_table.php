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
        Schema::create('fouls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("player_id");
            $table->unsignedBigInteger("match_id");
            $table->enum("type", ["1", "2", "3", "4"]);
            $table->text("note")->nullable();
            $table->timestamps();

            $table->foreign('player_id')->references("id")->on("players");
            $table->foreign('match_id')->references("id")->on("matches");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fouls');
    }
};
