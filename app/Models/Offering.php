<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Sponsor;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Offering extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'offerings';

    protected $dates = ['deleted_at'];

    protected $fillable = [

        'year',
        'month',
        'amount',
        'sponsor_id'

    ];

    // RELACIONES
    public function sponsor(): BelongsTo
    {
        return $this->belongsTo(Sponsor::class);
    }
}
