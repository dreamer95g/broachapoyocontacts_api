<?php

namespace App\Models\Nomenclators;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrackingType extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tracking_types';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
    ];
}
