@extends('layouts.app')

@section('content')

    
<div class="container card pt-1">

    <div class="row">
        <div class="col-md-8 offset-2">
            <h1>Upload Multiple Image</h1>
            <a href="{{route('image.index')}}"><i class="fa fa-image"></i> Gallery</a>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if (count($errors) > 0)

                <div class="alert alert-danger">

                    <strong>Error!</strong>

                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif
            <form action="{{route('image.store')}}" enctype="multipart/form-data" method="post" class="my-5">
                @csrf
                <div class="form-group">
                    <label for="images">Choose Multiple Image:</label>
                    <input  type="file" class="form-control" id="images" name="images[]" multiple>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
    </div>
</div>
@endsection