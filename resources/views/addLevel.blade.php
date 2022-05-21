@extends('layouts/app')

@section('content')
<div class="panel-container container-sm">
    <h2>You're adding a new level</h2>
    <form action="/level" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Polish title</label>
            <input type="text" class="form-control" name="title_polish">
        </div>
        <div>
            <label for="">Polish subtitle</label>
            <input type="text" class="form-control" name="subtitle_polish">
        </div>
        <div>
            <label for="">English title</label>
            <input type="text" class="form-control" name="title_english">
        </div>
        <div>
            <label for="">English subtitle</label>
            <input type="text" class="form-control" name="subtitle_english">
        </div>
        <div class="my-4">
            <input type="file" class="form-control" name="image_upload">
        </div>
        <div class="my-4">
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="is_verb" id="btnradio1" value="0" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="btnradio1">Noun</label>
            
                <input type="radio" class="btn-check" name="is_verb" id="btnradio2" value="1" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio2">Verb</label>
            </div>
        </div>
        <div class="mt-2">
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
    @if ($errors->any())
        @php
            var_dump($errors->all());
        @endphp
    @endif
    @if (request()->success == true)
        @php
            echo 'added successfully';
        @endphp
    @endif
</div>
@endsection