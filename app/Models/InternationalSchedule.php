<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternationalSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'flightNo',
        'route',
        'sector',
        'days',
        'departure',
        'arrival',
        'aircraft',
        'status',
    ];
}
