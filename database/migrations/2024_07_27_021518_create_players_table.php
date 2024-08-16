<?php

use App\Enums\PlayerStatus;
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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("grade");
            $table->enum("status", ["1", "2", "3"])->default(PlayerStatus::Active);
            $table->unsignedBigInteger("soccer_team_id");
            $table->timestamps();

            $table->foreign("soccer_team_id")->references("id")->on("soccer_teams");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
