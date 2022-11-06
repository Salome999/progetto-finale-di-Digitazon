<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    use HasFactory;

   
    protected $fillable = ['text', 'ricipe_id', 'user_id'];

    public function ricepes()
    {
        return $this->belongsTo('App\Models\Ricepe');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
