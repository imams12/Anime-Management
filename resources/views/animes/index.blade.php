@extends('../layout')
@section('content')
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Animes List</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('animes.create') }}" class="btn btn-md btn-success mb-3">ADD ANIME</a>
                        <table class="table table-stripped">
                            <thread>
                                <tr>
                                    <th scope="col">TITLE</th>
                                    <th scope="col">SYNOPSIS</th>
                                    <th scope="col">GENRES</th>
                                    <th scope="col">THEMES</th>
                                    <th scope="col">SCORE</th>
                                    <th scope="col" style="width: 20%">ACTIONS</th>
                                </tr>
                            </thread>
                            <tbody>
                                @forelse ($animes as $anime)
                                    <tr>
                                        <td>{{ $anime->title}}</td>
                                        <td>{{ $anime->synopsis}}</td>
                                        <td>{{ $anime->genres}}</td>
                                        <td>{{ $anime->themes}}</td>
                                        <td>{{ $anime->score}}</td>
                                    <td class="text-center">
                                            
                                    <div class="h-10 d-flex gap-4">
                                        <a href="/animes/{{ $anime->id }}" class="btn btn-sm btn-info">DETAIL</a>
                                        <a href="/anime/{{ $anime->id }}" class="btn btn-sm btn-primary">UPDATE</a>
                                        <form action="/anime/{{ $anime->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                                        </form>
                                    </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Animes belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection