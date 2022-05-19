@extends('layouts/app')

@section('content')
<div class="panel-container container-sm">
    <h2>You're editing:</h2>
    @for ($i = 0; $i < 4; $i++)
    <div>
        <label for="">English title</label>
        <input type="text" class="form-control">
    </div>
    @endfor
    <div class="my-4">
        <input type="file" name="" id="" class="form-control">
    </div>
    <div class="my-4">
        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
            <label class="btn btn-outline-primary" for="btncheck1">Flashcards</label>
          
            <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
            <label class="btn btn-outline-primary" for="btncheck2">Articles</label>
          
            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
            <label class="btn btn-outline-primary" for="btncheck3">Writing</label>
        </div>
    </div>
    <div class="mt-2">
        <button type="button" class="btn btn-primary">Save changes</button>
    </div>
</div>
@endsection