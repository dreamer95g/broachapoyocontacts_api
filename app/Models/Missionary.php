<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Missionary extends Contact
{

    protected static function boot()
    {
        parent::boot();
    }
}
