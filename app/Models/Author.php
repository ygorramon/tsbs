<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name', 'description', 'site','instagram','whatsapp','facebook','photo','state','city'
    ];

    public function posts(){
        return $this->hasMany('App\Models\Post'); 
          }
}
