<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
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
        //en esta posicion van los representantes
        'place',
        'purpose',
        'additional_note',
        'ministerial_focus',
        'capacitation_resources',
        'resources',
        'global_opportunities'
        //candidatos a misioneros esta en el n*n
    ];



    // RELACIONES


    public function representatives(): BelongsToMany
    {
        return $this->belongsToMany(Contact::class);
    }


    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

       public function missionaries(): BelongsToMany
    {
        return $this->belongsToMany(Missionary::class);
    }
}
