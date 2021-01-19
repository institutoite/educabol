<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        "title", "content", "course_id", "user_id",
        "unit_type", "unit_time", "file", "order", "free"
    ];

    const ZIP = 'ZIP';
    const VIDEO = 'VIDEO';
    const SECTION = 'SECTION';
}
