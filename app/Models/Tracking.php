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
    use HasFactory, SoftDeletes;

    protected $table = 'trackings';

    protected $dates = ['created_at'];

    protected $fillable = [

        'tracking_type_id',
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

    public function tracking_type(): BelongsTo
    {
        return $this->belongsTo(TrackingType::class);
    }
}
