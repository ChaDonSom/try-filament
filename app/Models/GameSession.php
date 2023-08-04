<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'host_user_id',
    ];

    public function hostUser()
    {
        return $this->belongsTo(User::class, 'host_user_id');
    }

    public function stories()
    {
        return $this->hasMany(Story::class);
    }
}
