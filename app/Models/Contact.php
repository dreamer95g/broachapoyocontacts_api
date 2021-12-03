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
    use HasFactory, SoftDeletes;

    protected $table = 'contacts';

    protected $dates = ['deleted_at'];


    protected $fillable = [

        'name',
        'dni',
        // 'personal_photo',
        'phone',
        'email',
        'family',
        // 'family_photo',
        'place',
        'ministerial_area',
        'description',
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

    // public function foreign_missions(): BelongsToMany
    // {
    //     return $this->belongsToMany(ForeignMission::class);
    // }

    // public function related_ministries(): BelongsToMany
    // {
    //     return $this->belongsToMany(RelatedMinistry::class);
    // }

}
