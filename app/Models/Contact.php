<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Nomenclators\Category;
use App\Models\ForeignMission;
use App\Models\Media\Image;
use App\Models\Tracking;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model
{
    // use HasFactory;
    use HasFactory, SoftDeletes;

    protected $table = 'contacts';

    protected $dates = ['deleted_at'];


    protected $fillable = [

        'name',
        'dni',
        'phone',
        'email',
        'family',
        'place',
        'ministerial_area',
        'description',
        'commitment',
        'profession',
        'vocational_category',
        'ministerial_passion',
        'interest_group',
        'additional_note'

    ];


    // RELACIONES n * n
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
    public function images(): BelongsToMany
    {
        return $this->belongsToMany(Image::class);
    }

    public function trackings(): HasMany
    {
        return $this->hasMany(Tracking::class);
    }
}
