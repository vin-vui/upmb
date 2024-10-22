<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'answer', 'link'];

    protected static function booted()
    {
        /**
         * Set the order of the question
         */
        static::creating(function ($question) {
            $maxOrder = self::max('order');
            $question->order = $maxOrder ? $maxOrder + 1 : 1;
        });
    }
}
