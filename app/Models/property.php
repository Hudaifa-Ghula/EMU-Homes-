<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    use HasFactory;
    public function interest(){
        return $this->belongsToMany(interest::class);
    }
    public function owner(){
        return $this->belongsTo(user::class, "owner_id","id");
    }

    public function pic()
    {
        return $this->hasMany(pic::class, "linker_id");
    }
    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, fn($query, $search) =>
        $query->where(fn($query)=>$query
        ->where ('title', 'like', '%'. $search.'%')
        ->orWhere('desc', 'like', '%'. $search.'%')));

        $query->when($filters['type'] ?? false, fn($query, $type) =>
        $query
        ->where ('type', 'like', '%'. $type.'%'));

        $query->when($filters['bedrooms'] ?? false, fn($query, $bedrooms) =>
        $query
        ->where ('bedrooms', 'like', '%'. $bedrooms.'%'));

        $query->when($filters['bathrooms'] ?? false, fn($query, $bathrooms) =>
        $query
        ->where ('bathrooms', 'like', '%'. $bathrooms.'%'));

        $query->when($filters['for'] ?? false, fn($query, $for) =>
        $query
        ->where ('for', 'like', '%'. $for.'%'));

        $query->when($filters['area'] ?? false, fn($query, $area) =>
        $query
        ->where ('area', 'like', '%'. $area.'%'));

        $query->when($filters['price'] ?? false, fn($query, $price) =>
        $query
        ->where ('price', '<=', $price))
        ->where('active', '=', '1');

    }
}
