<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Matches extends Model
{
    use HasFactory;

    public function LocalTeam(): BelongsTo
    {
        return $this->belongsTo(SoccerTeam::class, 'local_team_id');
    }

    public function VisitorTeam(): BelongsTo
    {
        return $this->belongsTo(SoccerTeam::class, 'visitor_team_id');
    }

    public function WinnerTeam(): BelongsTo
    {
        return $this->belongsTo(SoccerTeam::class, 'winner');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
