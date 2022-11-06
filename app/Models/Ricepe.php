<?php

namespace App\Models;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ricepe extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'ingredients', 'description', 'category_id','time','preparation','image'];

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    // public function ingredients() 	{  	
    //     return $this->belongsToMany('App\Models\Ingredient'); 	
    //     }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

        public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    } 

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }


    public function favorites() {
        return $this->belongsToMany('App\Models\User', 'favorites');
    }

  
}
