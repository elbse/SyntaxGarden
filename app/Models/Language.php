<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['name', 'description'];

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
