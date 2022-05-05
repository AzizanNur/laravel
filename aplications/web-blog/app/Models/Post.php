<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //if meet MassAssignmentException
    // protected $fillable = ['title', 'exceprt', 'body']; //this to setting field allow to edit
    protected $guarded = ['id']; //this opposite fillable, so this id to be guard and not allow to edit
    protected $with = ['user', 'category'];//this used user eager load

    public function scopeFilter($query, array $filters){
        if(isset($filters['search']) ? $filters['search'] : false){
            return $query->where('title', 'like', '%'.$filters['search'].'%')
            ->orWhere('body', 'like', '%'.$filters['search'].'%');
        }
    }
    
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}

