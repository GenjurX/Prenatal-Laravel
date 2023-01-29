<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('marche', 'like', '%' . request('search') . '%')
                ->orWhere('colore', 'like', '%' . request('search') . '%')
                ->orWhere('marche', 'like', '%' . request('search') . '%');
        }
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
