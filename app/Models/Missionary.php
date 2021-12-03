<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Contact;

class Missionary extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'missionaries';

    protected $dates = ['deleted_at'];

    protected $fillable = [

        'contact_id',
        'profession',
        'vocational_category',
        'ministerial_passion',
        'interest_group'

    ];

    // RELACIONES
    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }
}
