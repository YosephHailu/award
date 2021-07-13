@extends('layouts.app')

@section('content')
<div class="container pt-6">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register Award Type</div>

                <div class="card-body">
                    @isset($awardType)
                    <form method="POST" action="{{ route('awardType.update', $awardType->id) }}">
                        <input type="hidden" name="_method" value="put">
                    @else
                    <form method="POST" action="{{ route('awardType.store') }}">
                    @endisset
                        @csrf

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">Type</label>

                            <div class="col-md-6">
                                <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ $awardType->type ?? old('type') }}" required autocomplete="type" autofocus>

                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="type_description" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <textarea id="type_description" class="form-control @error('type_description') is-invalid @enderror" name="type_description" required autocomplete="type_description">{{ $awardType->type_description ?? old('type_description') }}</textarea>

                                @error('type_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    @isset($awardType)
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
