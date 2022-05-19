@extends('layouts/app')

@section('content')
<div class="panel-container container-sm">
    <h2>You're editing a flashcard: {{ $level }}</h2>
    <div>
        <label for="">Word</label>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="word">
            <span class="input-group-text"> </span>
            <input type="text" class="form-control" placeholder="past">
            <span class="input-group-text"> </span>
            <input type="text" class="form-control" placeholder="past">
        </div>
    </div>
    <div>
        <label for="">Polish</label>
        <input type="text" class="form-control">
    </div>
    <div>
        <label for="">English</label>
        <input type="text" class="form-control">
    </div>
    <div class="my-4">
        <input type="file" name="" id="" class="form-control">
    </div>
    <div class="mt-2">
        <button type="button" class="btn btn-primary">Save</button>
    </div>
</div>
@endsection