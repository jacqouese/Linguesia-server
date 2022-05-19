@extends('app')

@section('content')
<div class="panel-container container-sm">
    <h2>Level details</h2>
    <div>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="http://192.168.1.5:8000/images/{{ $level->image }}" class="img-fluid rounded-start p-4" alt="">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$level->title_polish}}</h5>
                    <p class="card-text">{{$level->title_english}}</p>
                    <p class="card-text">{{$level->subtitle_polish}}</p>
                    <p class="card-text">{{$level->subtitle_english}}</p>
                    <p class="card-text"><small class="text-muted">Last updated: {{$level->updated_at}}</small></p>
                </div>
                </div>
            </div>
            </div>
    </div>
    <h2>Actions</h2>
    <div class="w-100 d-flex justify-content-start gap-2">
        <div class="card w-40"  style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Add manually</h5>
                <p class="card-text">Add flashcards manually on the website</p>
                <a href="/panel/levels/{{ $level->id }}/add" class="btn btn-primary">Add</a>
            </div>
        </div>
        <div class="card w-40"  style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Add from txt (coming soon)</h5>
                <p class="card-text">Add multiple flashcards from a txt file</p>
                <a href="#" class="btn btn-primary disabled">Add</a>
            </div>
        </div>
    </div>
    <hr>
    <table class="panel-table table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Article</th>
            <th scope="col">German</th>
            <th scope="col">Polish</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($flashcards as $flashcard)
          <tr>
            <th scope="row">{{ $flashcard->id }}</th>
            <td>
                <img class="img-thumbnail" src="http://192.168.1.5:8000/images/{{ $flashcard->image }}" alt="">
            </td>
            <td>{{ $flashcard->german_article }}</td>
            <td>{{ $flashcard->german }}</td>
            <td>{{ $flashcard->polish }}</td>
            <td>
              <a href="/panel/levels/{{ $level->id }}/edit/{{ $flashcard->id }}" class="btn btn-outline-primary">Edit</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="w-100 d-flex justify-content-center">
        <nav aria-label="...">
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
      </div>
</div>
@endsection