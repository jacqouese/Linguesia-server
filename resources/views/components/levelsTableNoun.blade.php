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