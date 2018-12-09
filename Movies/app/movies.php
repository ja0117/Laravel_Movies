<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    public static function getAll()
    {
        return movies::all();
    }

    public static function getOne($id)
    {
        return movies::query()->where('id', $id)->get();
    }
}
