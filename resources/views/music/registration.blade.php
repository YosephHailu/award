@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">MUSIC REGISTRATION FORM</div>

                @include('layouts.messages')
                <div class="card-body">
                    @isset($music)
                    <form method="POST" action="{{ route('music.update', $music->id) }}" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="put">
                    @else
                    <form method="POST" action="{{ route('music.store') }}" enctype="multipart/form-data">
                    @endisset
                        @csrf
                        
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $music->title ?? old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="singer_name" class="col-md-4 col-form-label text-md-right">Singer name</label>

                            <div class="col-md-6">
                                <input id="singer_name" type="text" class="form-control @error('singer_name') is-invalid @enderror" name="singer_name" value="{{ $music->singer_name ?? old('singer_name') }}" required autocomplete="singer_name" autofocus>

                                @error('singer_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="producer" class="col-md-4 col-form-label text-md-right">Producer</label>

                            <div class="col-md-6">
                                <input id="producer" type="text" class="form-control @error('producer') is-invalid @enderror" name="producer" value="{{ $music->producer ?? old('producer') }}" required autocomplete="producer" autofocus>

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
                                <input id="genre" type="text" class="form-control @error('genre') is-invalid @enderror" name="genre" value="{{ $music->genre ?? old('genre') }}" required autocomplete="genre" autofocus>

                                @error('genre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="songwriter" class="col-md-4 col-form-label text-md-right">Songwriter</label>

                            <div class="col-md-6">
                                <input id="songwriter" type="text" class="form-control @error('songwriter') is-invalid @enderror" name="songwriter" value="{{ $music->songwriter ?? old('songwriter') }}" required autocomplete="songwriter" autofocus>

                                @error('songwriter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="released_year" class="col-md-4 col-form-label text-md-right">Released Year</label>

                            <div class="col-md-6">
                                <input id="released_year" type="text" class="form-control @error('released_year') is-invalid @enderror" name="released_year" value="{{ $music->released_year ?? old('released_year') }}" required autocomplete="released_year" autofocus>

                                @error('released_year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">Photo</label>

                            <div class="col-md-6">
                                <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ $music->photo ?? old('photo') }}" required autocomplete="photo" autofocus>

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
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description">{{ $music->description ?? old('description') }}</textarea>

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
                                    @isset($music)
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
