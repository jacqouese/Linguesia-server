@extends('layouts/app')

@section('content')
<div class="panel-container container-sm">
    <h2>You're editing:</h2>
    <form action="/level" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $level->id }}">
        <div>
            <label for="">Polish title</label>
            <input type="text" class="form-control" name="title_polish" value="{{ $level->title_polish }}">
        </div>
        <div>
            <label for="">Polish subtitle</label>
            <input type="text" class="form-control" name="subtitle_polish" value="{{ $level->subtitle_polish }}">
        </div>
        <div>
            <label for="">English title</label>
            <input type="text" class="form-control" name="title_english" value="{{ $level->title_english }}">
        </div>
        <div>
            <label for="">English subtitle</label>
            <input type="text" class="form-control" name="subtitle_english" value="{{ $level->subtitle_english }}">
        </div>
        <div class="my-4">
            <input type="file" class="form-control" name="image_upload">
        </div>
        <div class="mt-2">
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
</div>
@endsection