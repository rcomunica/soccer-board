<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "name",
        "grade",
        "status",
        "soccer_team_id",
    ];

    public function soccerTeam(): BelongsTo
    {
        return $this->belongsTo(SoccerTeam::class, 'team_id');
    }
}
