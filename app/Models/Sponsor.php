<?php

namespace App\Models;

use App\Models\Nomenclators\Category;
use App\Models\Offering;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sponsor extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'sponsors';

    protected $dates = ['deleted_at'];

    protected $fillable = [

        'name',
        'commitment',
        'communication',
        'contact_id'
    ];

    // RELACIONES
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function contacts(): BelongsToMany
    {
        return $this->belongsToMany(Contact::class);
    }

    public function offerings(): HasMany
    {
        return $this->hasMany(Offering::class);
    }
}
