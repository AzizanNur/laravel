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
    protected $with = ['user', 'category'];
    
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
