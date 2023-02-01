<?php

namespace App\Models\Instrument;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use ShiftOneLabs\LaravelCascadeDeletes\CascadesDeletes;

class Instrument extends Model
{
    use HasFactory,
        SoftDeletes,
        InstrumentRelationships,
        InstrumentModifiers,
        Sluggable,
        CascadesDeletes;

    protected $table = 'instruments';
}
