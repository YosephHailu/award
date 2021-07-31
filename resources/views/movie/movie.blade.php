@extends('layouts.app')

@section('content')

<div class="container card pt-1">
    <div class="table-responsive">
        <table class="table align-items-center">
            <thead class="thead-light">
                <tr>
                    <th scope="col" class="sort" data-sort="name">Name</th>
                    <th scope="col">Director</th>
                    <th scope="col" class="sort" data-sort="budget">Producer</th>
                    <th scope="col" class="sort" data-sort="budget">Genre</th>
                    <th scope="col" class="sort" data-sort="status">Production</th>
                    <th scope="col" class="sort" data-sort="status">Released Date</th>
                    <th scope="col" class="sort" data-sort="status">Budget</th>
                    <th scope="col">
                        <a href="{{ url('movie/create')}}" class="btn btn-primary text-white">ADD AWARD</a>
                    </th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach ($movies as $movie)
                <tr>
                    <th scope="row">
                        <div class="media align-items-center">
                            <a href="#" class="avatar rounded-circle mr-3">
                                <img alt="Image placeholder" style="height: 45px" src="{{asset('storage/uploads/movie/' . $movie->image)}}">
                            </a>
                            <div class="media-body">
                                <span class="name mb-0 text-sm">{{ $movie->name }}</span>
                            </div>
                        </div>
                    </th>

                    <td>{{$movie->director}}</td>
                    <td>{{$movie->producer}}</td>
                    <td>{{$movie->genre}}</td>
                    <td>{{$movie->production_company}}</td>
                    <td>{{$movie->released_date}}</td>
                    <td>{{$movie->budget}}</td>
                    <td class="text-center">
                        <a href="" class="btn btn-danger">Delete</a>
                        <a href="{{url("movie/$movie->id/edit")}}" class="btn btn-success">Edit</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection