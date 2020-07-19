<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    //protected $fillable = ['title','excerpt','body'];   // Laravel is guarding this
    protected $guarded = [];
    public function path()
    {
        return route('articles.show',$this);
    }

    /*public function user()
    {
        return $this->belongsTo(User::class);
    }*/
    
    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
