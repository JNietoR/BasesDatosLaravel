<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    // relación 1:M
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    //relación M:M
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
