<?php

use App\Enums\MatchesStatus;
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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("local_team_id");
            $table->unsignedBigInteger("visitor_team_id");
            $table->enum("status", ["1", "2", "3"])->default(MatchesStatus::Playing);
            $table->text("goals")->nullable();
            $table->unsignedBigInteger("winner")->nullable();
            $table->text("notes")->nullable();
            $table->timestamp("date");
            $table->unsignedBigInteger("user_id");
            $table->timestamps();

            $table->foreign("local_team_id")->references("id")->on("soccer_teams");
            $table->foreign("visitor_team_id")->references("id")->on("soccer_teams");
            $table->foreign("winner")->references("id")->on("soccer_teams");
            $table->foreign("user_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
