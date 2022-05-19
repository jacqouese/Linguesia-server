@extends('app')

@section('content')
<div class="panel-container container-sm">
    <h2>You're editing:</h2>
    @for ($i = 0; $i < 4; $i++)
    <div>
        <label for="">German</label>
        <input type="text" class="form-control">
    </div>
    @endfor
    <div class="my-4">
        <input type="file" name="" id="" class="form-control">
    </div>
    <div class="mt-2">
        <button type="button" class="btn btn-primary">Save changes</button>
    </div>
</div>
@endsection