<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;
use App\Models\Flashcard;

class webFlashcardController extends Controller
{
    function addNewFlashcard($id) {
        $level = Level::findOrFail($id);

        if ($level->is_verb === 0) {
            return view('addFlashcardNoun', [
                'level' => $level,
                'flashcards' => Flashcard::where('flashcard_levels_id', $id)->get()
            ]);
        }
        else if ($level->is_verb === 1) {
            return view('addFlashcardVerb', [
                'level' => $level,
                'flashcards' => Flashcard::where('flashcard_levels_id', $id)->get()
            ]);
        }
        else {
            return abort(404);
        }
    }

    function store(Request $request) {
        $request->validate([
            "flashcard_levels_id" => "required",
            "german" => "required|unique:flashcards",
            "german_article" => "min:3|max:3",
            "polish" => "required",
            "image_upload" => "required|mimes:jpg,png,jpeg"
        ]);

        $imgName = time() . '.' . $request->german . '.' . $request->image_upload->extension();
        $request->image_upload->move(public_path('images'), $imgName);
        
        $request->merge([ 'image' => $imgName ]);
        
        $flashcard = Flashcard::create($request->except(['_token', 'image_upload']));

        return redirect("/panel/levels/{$request->flashcard_levels_id}/add?success=true");
    }
}
