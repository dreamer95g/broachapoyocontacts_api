<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Contact;
use App\Models\Nomenclators\TrackingType;

class Tracking extends Model
{
    // use HasFactory, SoftDeletes;
    use HasFactory;

    protected $table = 'trackings';

    protected $dates = ['created_at'];

    protected $fillable = [

        'tracking_type',
        'date',
        'observation',
        'pending_task',
        'ministerial_activity',
        'contact_id'
    ];

    // RELACIONES
    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }
}
