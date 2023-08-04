<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'title',
        'body',
        'game_session_id',
    ];

    public function gameSession()
    {
        return $this->belongsTo(GameSession::class, 'game_session_id');
    }
}
