<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'date',
        'user_id',
        'image',
    ]; 
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
//polymorphic
    public function comments()
    {
        
        return $this->morphMany(Comment::class, 'commentable')->whereNull('blog_id');
    }

    public function reactors()
    {
        return $this->hasMany(Reactors::class);
    }

    public function likes()
    {
        return $this->hasMany(Reactors::class)->where('like',1);
    }

    public function dislikes()
    {
        return $this->hasMany(Reactors::class)->where('like',0);
    }
}
