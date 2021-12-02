<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flashcard;

class FlashcardController extends Controller
{
    function index() {
        return Flashcard::all();
    }
}
