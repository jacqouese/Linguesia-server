<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flashcard extends Model
{
    protected $table = 'flashcards';
    protected $fillable = ['flashcard_levels_id', 'german', 'german_article', 'form_praeteritum', 'form_partizip_zwei', 'polish', 'english', 'image'];
}
