<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable=[
        'title','text','image'
    ];

    //here is the one to many relationship
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //here is the many to many relationship
    public function tags(){
        return $this->hasMany(Tags::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
