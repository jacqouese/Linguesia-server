<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    // use HasFactory;
    protected $table = 'flashcard_levels';
    protected $fillable = ['title_polish', 'subtitle_polish', 'title_english', 'subtitle_english', 'is_verb', 'image'];
}
