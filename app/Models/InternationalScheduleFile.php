<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternationalScheduleFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'file_name',
        'file_description',
        'delete_reason',
        'delete_by',
        'status',
    ];
}
