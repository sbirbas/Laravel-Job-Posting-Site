<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class listing extends Model
{
    use HasFactory;


 //   protected $fillable =['title', 'company','location','website','email','tags','description'];


    public function scopeFilter(Builder $query, array $filters) {
        if($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }


    //relationship to user
    public function user(){
    return $this->belongsTo(User::class, 'user_id');
    }
}