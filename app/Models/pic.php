<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pic extends Model
{
    use HasFactory;

    protected $fillable = ["link", "linker_id", "created_at", "updated_at"];


}
