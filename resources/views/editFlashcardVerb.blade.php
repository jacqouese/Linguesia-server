@extends('layouts/app')

@section('content')
<div class="panel-container container-sm">
    <h2>You're editing a flashcard: {{ $flashcard->german }}</h2>
    <form action="/flashcard" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="flashcard_levels_id" value="{{ $flashcard->flashcard_levels_id }}">
        <input type="hidden" name="id" value="{{ $flashcard->id }}">
        <div>
            <label for="">Word</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Infinitiv" value="{{ $flashcard->german }}" name="german">
                <span class="input-group-text"> </span>
                <input type="text" class="form-control" placeholder="Praeteritum" value="{{ $flashcard->form_praeteritum }}" name="form_praeteritum">
                <span class="input-group-text"> </span>
                <input type="text" class="form-control" placeholder="Partizip II" value="{{ $flashcard->form_partizip_zwei }}" name="form_partizip_zwei">
            </div>
        </div>
        <div>
            <label for="">Polish</label>
            <input type="text" class="form-control" value="{{ $flashcard->polish }}" name="polish">
        </div>
        <div>
            <label for="">English</label>
            <input type="text" class="form-control" value="{{ $flashcard->english }}" name="english">
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