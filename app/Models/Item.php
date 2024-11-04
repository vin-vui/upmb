<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['section_identifier', 'content'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
