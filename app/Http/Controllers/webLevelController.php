<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;
use App\Models\Flashcard;

class webLevelController extends Controller
{
    function index() {
        return view('levels', [
            'levels' => Level::all()
        ]);
    }

    function indexSingle($id) {
        return view('singleLevel', [
            'level' => Level::findOrFail($id),
            'flashcards' => Flashcard::where('flashcard_levels_id', $id)->get()
        ]);
    }

    
}
