@extends('../layout')
@section('content')

 <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
            <h2 class="fw-bold text-center">Update Anime Data</h2>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="/animes/{{ $anime->id }}" method="POST">
                        
                            @csrf
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $anime->title }}" placeholder="Enter title">
                            
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Synopsis</label>
                                <input type="text" class="form-control @error('synopsis') is-invalid @enderror" name="synopsis" value="{{ $anime->synopsis }}" placeholder="Enter synopsis">
                            
                                @error('synopsis')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Genres</label>
                                <input type="tel" class="form-control @error('genres') is-invalid @enderror" name="genres" value="{{ $anime->genres }}" placeholder="Enter genres">
                            
                                @error('genres')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Themes</label>
                                        <input type="text" class="form-control @error('themes') is-invalid @enderror" name="themes" value="{{ $anime->themes }}" placeholder="Enter themes">
                                    
                                        @error('themes')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">Score</label>
                                        <input type="number" class="form-control @error('score') is-invalid @enderror" name="score" value="{{ $anime->score }}" placeholder="Enter score">
                                    
                                        @error('score')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SAVE</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection