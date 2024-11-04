<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Section extends Model
{
    protected $fillable = ['title', 'paragraph', 'image', 'identifier'];

    public function items()
    {
        return $this->hasMany(Item::class, 'section_identifier', 'identifier');
    }
}
