@extends('../layout')
@section('content')

<div class="container">
    <h1 class="my-4">Detail Anime</h1>
    <div class="card">
        <div class="card-body">
            <p class="card-text"><strong>Title:</strong> {{ $anime->title }}</p>
            <p class="card-text"><strong>Synopsis:</strong> {{ $anime->synopsis }}</p>
            <p class="card-text"><strong>Genres:</strong> {{ $anime->genres }}</p>
            <p class="card-text"><strong>Themes:</strong> {{ $anime->themes }}</p>
            <p class="card-text"><strong>Score:</strong> {{ $anime->score }}</p>
            <a href="{{ url('/') }}" class="btn btn-primary">Back to Anime List</a>
        </div>
    </div>
</div>
</body>
</html>