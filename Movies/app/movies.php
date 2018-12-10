<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    protected $fillable = ["movie_title", "movie_genre","movie_rating"];
    protected $hidden = [];
    public $timestamps = false;
    public $table = "movies";
}
