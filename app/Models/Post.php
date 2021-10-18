<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'slug', 'description',
        'photo',
    ];
    public function author(){
 return $this->belongsTo('App\Models\Author'); 
   }

   
}
