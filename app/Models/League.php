<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'team_id',
        'PTS',
        'P',
        'W',
        'D',
        'L',
        'GD',
        'week_number'
    ];
}
