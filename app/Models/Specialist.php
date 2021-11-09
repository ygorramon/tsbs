<?php

namespace App\Models;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    protected $fillable = [
        'name', 'description', 'site','instagram','whatsapp','facebook','photo','state','city','category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
