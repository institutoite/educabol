<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Cohensive\Embed\Facades\Embed;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        "title", "url", "path", "course_id", "user_id",
        "unit_type", "unit_time", "file", "order", "free" , "status"
    ];

    const ZIP = 'pdf';
    const VIDEO = 'mp4';
    const SECTION = 'SECTION';

    protected static function boot()
    {
        parent::boot();

        self::saving(function ($table) {
            $table->user_id = auth()->id();
        });

        self::creating(function ($table) {
            $last = Unit::whereCourseId(request("course_id"))
                ->orderBy('order', 'desc')
                ->take(1)
                ->first();
            $table->order = $last ? $last->order += 1 : 1;
        });
    }

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function scopeForTeacher(Builder $builder) {
        return $builder
            ->with('course')
            ->where("user_id", auth()->id())
            ->paginate();
    }

    public static function unitTypes() {
        return [
            self::ZIP, self::VIDEO, self::SECTION
        ];
    }

    public function getVideoHtmlAttribute()
    {
        $embed = Embed::make($this->url)->parseUrl();

        if (!$embed)
            return '';

        $embed->setAttribute(['width' => 150]);
        return $embed->getHtml();
    }

}
