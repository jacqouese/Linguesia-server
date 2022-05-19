@extends('layouts/app')

@section('content')
<div class="panel-container container-sm">
    <h2>You're adding a flashcard to: {{ $level->title_polish }}</h2>
    <form action="/flashcard" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="flashcard_levels_id" value="{{ $level->id }}">
        <div>
            <label for="">Word</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Infinitiv" name="german">
                <span class="input-group-text"> </span>
                <input type="text" class="form-control" placeholder="Praeteritum" name="form_praeteritum">
                <span class="input-group-text"> </span>
                <input type="text" class="form-control" placeholder="Partizip II" name="form_partizip_zwei">
            </div>
        </div>
        <div>
            <label for="">Polish</label>
            <input type="text" class="form-control" name="polish">
        </div>
        <div>
            <label for="">English</label>
            <input type="text" class="form-control" name="english">
        </div>
        <div class="my-4">
            <input type="file" class="form-control" name="image_upload">
        </div>
        <div class="mt-2">
            <button type="submit" class="btn btn-primary">Save</button>
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