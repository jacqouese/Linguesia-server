@extends('app')

@section('content')
<div class="panel-container levels-container container-sm">
<h2>Actions</h2>
<div class="w-100 d-flex gap-2">
    <div class="card w-40"  style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Add manually</h5>
            <p class="card-text">Add flashcards manually on the website</p>
            <a href="" class="btn btn-primary">Add</a>
        </div>
    </div>
    <div class="card w-40"  style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Add from txt (coming soon)</h5>
            <p class="card-text">Add multiple flashcards from txt file</p>
            <a href="#" class="btn btn-primary disabled">Add</a>
        </div>
    </div>
</div>
<hr>
<h2>Levels</h2>
<div class="container">
    <div class="row row-cols-4 gap-4">
        @foreach($levels as $level)
            <div class="card" style="width: 18rem;">
                <div class="w-100 d-flex justify-content-center">
                    <img src="http://192.168.1.5:8000/images/{{$level->image}}" class="card-img-top" alt="">
                </div>
                <div class="card-body" style="min-height: 120px;">
                <h5 class="card-title">{{ $level->title_polish }}</h5>
                <p class="card-text">{{ $level->subtitle_polish }}</p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item"><span class="badge bg-secondary">Flashcards</span> <span class="badge bg-secondary">Articles</span></li>
                </ul>
                <div class="card-body">
                    <a href="/panel/levels/{{ $level->id }}" class="btn btn-primary">See more</a>
                    <a href="/panel/levels/edit/{{ $level->id }}" class="btn btn-outline-primary">Edit level</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection