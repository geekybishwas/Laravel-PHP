<?php

namespace App\Models;

use App\Models\Review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    public function reviews(){
        return $this->hasMany(Review::class);
    }

    // Local Scoping
    public function scopeTitle(Builder $query,string $title):Builder
    {
        return $query->where('title','LIKE',"%" . $title . "%");   
    }

    public function scopePopular(Builder $query):Builder
    {
        return $query->withCount('reviews')
        ->orderBy('reviews_count','desc');
    }

    public function scopeHighestRated(Builder $query):Builder
    {
        return $query->withAvg('reviews','rating')
        ->orderBy('reviews_avg_rating','desc');
    }
}
