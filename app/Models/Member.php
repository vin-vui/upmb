<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'image',
        'function',
        'description'
    ];

    protected static function booted()
    {
        static::creating(function ($question) {
            $maxOrder = self::max('order');
            $question->order = $maxOrder ? $maxOrder + 1 : 1;
        });
    }
}
