<?php

namespace App\Models\Teacher;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use ShiftOneLabs\LaravelCascadeDeletes\CascadesDeletes;

class Teacher extends Model
{
    use HasFactory,
        SoftDeletes,
        TeacherRelationships,
        TeacherModifiers,
        Sluggable,
        CascadesDeletes;

    protected $table = 'teachers';
}
