<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Course extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    public function reviews() {
        return $this->hasMany('App\Models\Review');
    }

    public function teacher() {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function level() {
        return $this->belongsTo('App\Models\Level');
    }

    public function category() {
        return $this->belongsTo('App\Models\Level');
    }
    
    public function price() {
        return $this->belongsTo('App\Models\Price');
    }

    public function students() {
        return $this->belongsToMany('App\Models\User');
    }

    
}
