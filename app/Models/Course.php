<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public static function createCousre(array $courseData)
    {

        $course=self::create($courseData);
        return $course;
    }
    public static function updateCourse( array $courseData)
    {

        $course=self::update($courseData);
        return $course;
    }
}
