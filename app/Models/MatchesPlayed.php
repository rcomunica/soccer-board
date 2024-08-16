<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MatchesPlayed extends Model
{
    use HasFactory;

    public function match(): BelongsTo
    {
        return $this->belongsTo(Matches::class, 'match_id');
    }

    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class, 'player_id');
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(SoccerTeam::class, 'team_id');
    }
}
