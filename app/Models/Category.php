<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ["name", "description", "picture"];

    public function courses() {
        return $this->belongsToMany(Course::class)->where("status", Course::PUBLISHED);
    }

    public function imagePath() {
        return sprintf('%s/%s', 'storage/categories', $this->picture);
    }

    public function getUrlPathAttribute()
    {
        return \Storage::url($this->picture);
    }
}
