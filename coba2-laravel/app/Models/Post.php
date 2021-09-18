<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['user', 'category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function scopeFilter($query, array $filters)
    {   
        $query->when($filters['search'] ?? false, function ($query, $search){
            return $query->where('title' , 'like', '%'.$search.'%')
           ->orWhere('body', 'like', '%'.$search.'%');
        });
    }
}