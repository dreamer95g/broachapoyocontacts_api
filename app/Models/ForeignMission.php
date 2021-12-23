<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Nomenclators\Agency;
use App\Models\Missionary;
use App\Models\Contact;
use App\Models\Nomenclators\Category;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ForeignMission extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'foreign_missions';

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'campus',
        'agency',
        //este es el representante
        //que a su vez es un contacto
        'contact_id',
        'purpose',
        'ministerial_focus',
        'capacitation_resources',
        'resources',
        'global_opportunities'
    ];


    // RELACIONES

    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }

    public function missionaries(): BelongsToMany
    {
        return $this->belongsToMany(Contact::class);
    }


    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
