@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">MOVIE REGISTRATION FORM</div>

                @include('layouts.messages')
                <div class="card-body">
                    @isset($movie)
                    <form method="POST" action="{{ route('movie.update', $movie->id) }}" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="put">
                    @else
                    <form method="POST" action="{{ route('movie.store') }}" enctype="multipart/form-data">
                    @endisset
                        @csrf
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $movie->name ?? old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="director" class="col-md-4 col-form-label text-md-right">Director</label>

                            <div class="col-md-6">
                                <input id="director" type="text" class="form-control @error('director') is-invalid @enderror" name="director" value="{{ $movie->director ?? old('director') }}" required autocomplete="director" autofocus>

                                @error('director')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="producer" class="col-md-4 col-form-label text-md-right">Producer</label>

                            <div class="col-md-6">
                                <input id="producer" type="text" class="form-control @error('producer') is-invalid @enderror" name="producer" value="{{ $movie->producer ?? old('producer') }}" required autocomplete="producer" autofocus>

                                @error('producer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        <div class="form-group row">
                            <label for="genre" class="col-md-4 col-form-label text-md-right">Genre</label>

                            <div class="col-md-6">
                                <input id="genre" type="text" class="form-control @error('genre') is-invalid @enderror" name="genre" value="{{ $movie->genre ?? old('genre') }}" required autocomplete="genre" autofocus>

                                @error('genre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="production_company" class="col-md-4 col-form-label text-md-right">Production Company</label>

                            <div class="col-md-6">
                                <input id="production_company" type="text" class="form-control @error('production_company') is-invalid @enderror" name="production_company" value="{{ $movie->production_company ?? old('production_company') }}" required autocomplete="production_company" autofocus>

                                @error('production_company')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="director" class="col-md-4 col-form-label text-md-right">Director</label>

                            <div class="col-md-6">
                                <input id="director" type="text" class="form-control @error('director') is-invalid @enderror" name="director" value="{{ $movie->director ?? old('director') }}" required autocomplete="director" autofocus>

                                @error('director')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="released_date" class="col-md-4 col-form-label text-md-right">Released Date</label>

                            <div class="col-md-6">
                                <input id="released_date" type="date" class="form-control @error('released_date') is-invalid @enderror" name="released_date" value="{{ $movie->released_date ?? old('released_date') }}" required autocomplete="released_date" autofocus>

                                @error('released_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="budget" class="col-md-4 col-form-label text-md-right">Budget</label>

                            <div class="col-md-6">
                                <input id="budget" type="number" class="form-control @error('budget') is-invalid @enderror" name="budget" value="{{ $movie->budget ?? old('budget') }}" required autocomplete="budget" autofocus>

                                @error('budget')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">Photo</label>

                            <div class="col-md-6">
                                <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ $movie->photo ?? old('photo') }}" required autocomplete="photo" autofocus>

                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description">{{ $movie->description ?? old('description') }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    @isset($movie)
                                        Update
                                    @else
                                        Register
                                    @endisset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
