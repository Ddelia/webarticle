<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'user_id', 'title','description', 'author'
    ];

    public function owner()
    {
        return $this->belongsTo('App\User' , 'user_id');
    }
}
