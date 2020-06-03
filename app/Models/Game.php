<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['name', 'description', 'image', 'user_id'];

    public function user()
    {
        return $this->belongTo(User::class);
    }

}
