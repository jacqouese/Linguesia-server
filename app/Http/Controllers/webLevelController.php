<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;
use App\Models\Flashcard;

class webLevelController extends Controller
{
    public function index() {
        return view('levels', [
            'levels' => Level::all()
        ]);
    }

    public function show($id) {
        return view('singleLevel', [
            'level' => Level::findOrFail($id),
            'flashcards' => Flashcard::where('flashcard_levels_id', $id)->get()
        ]);
    }

    public function create() {
        return view('addLevel');
    }


    public function edit($id) {
        $level = Level::findOrFail($id);
        
        return view('editLevel', [
            'level' => $level
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            "title_polish" => "required",
            "is_verb" => "required|min:1|max:1",
            "image_upload" => "required|mimes:jpg,png,jpeg"
        ]);

        $request->is_verb = intval($request->is_verb);

        $imgName = time() . '.' . $request->german . '.' . $request->image_upload->extension();
        $request->image_upload->move(public_path('images'), $imgName);
        $request->merge([ 'image' => $imgName ]);
        
        $level = Level::create($request->except(['_token', 'image_upload']));

        return redirect("/panel/levels/add?success=true");
    }

    public function update(Request $request) {
        $request->validate([
            "title_polish" => "required",
            "image_upload" => "mimes:jpg,png,jpeg"
        ]);

        if ($request->image_upload !== null) {
            $imgName = time() . '.' . $request->german . '.' . $request->image_upload->extension();
            $request->image_upload->move(public_path('images'), $imgName);
            
            $request->merge([ 'image' => $imgName ]);
        }

        $level = Level::findOrFail($request->id)->update($request->except(['_token', 'image_upload']));


        return redirect("/panel/levels/?success=true");
    }
}
