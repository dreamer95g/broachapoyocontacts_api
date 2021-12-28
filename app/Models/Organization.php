<?php

namespace App\Models;

use App\Models\Nomenclators\Category;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization  extends Model
{
    // use HasFactory, SoftDeletes;
    use HasFactory;

    protected $table = 'organizations';

    protected $dates = ['deleted_at'];

    protected $fillable = [

        'name',
        'purpose',
        'collaboration',
        'resources'
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
}
