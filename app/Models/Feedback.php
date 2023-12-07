<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'suggestionType',
        'subject',
        'description',
        'name',
        'email',
        'contact',
        'country',
        'flight',
        'from',
        'to',
        'journey_date',
        'file_name',
    ];
}
