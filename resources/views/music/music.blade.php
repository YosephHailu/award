@extends('layouts.app')

@section('content')

<div class="container card pt-1">
    <div class="table-responsive">
        <table class="table align-items-center">
            <thead class="thead-light">
                <tr>
                    <th scope="col" class="sort" data-sort="name">Title</th>
                    <th scope="col">Singer</th>
                    <th scope="col" class="sort">Producer</th>
                    <th scope="col" class="sort">Genre</th>
                    <th scope="col" class="sort">Songwriter</th>
                    <th scope="col" class="sort">Released Year</th>
                    <th scope="col">
                        <a href="{{ url('music/create')}}" class="btn btn-primary text-white">ADD MUSIC</a>
                    </th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach ($musics as $music)
                <tr>
                    <th scope="row">
                        <div class="media align-items-center">
                            <a href="#" class="avatar rounded-circle mr-3">
                                <img alt="Image placeholder" style="height: 45px" src="{{asset('storage/uploads/music/' . $music->image)}}">
                            </a>
                            <div class="media-body">
                                <span class="name mb-0 text-sm">{{ $music->title }}</span>
                            </div>
                        </div>
                    </th>

                    <td class="budget">
                        {{$music->singer_name}}
                    </td>
                    
                    <td class="budget">
                        {{$music->producer}}
                    </td>
                    
                    <td class="budget">
                        {{$music->genre}}
                    </td>
                    
                    <td class="budget">
                        {{$music->songwriter}}
                    </td>
                    
                    <td class="budget">
                        {{$music->released_year}}
                    </td>
                    <td class="text-center row">
                        <form action="{{ url('music/' . $music->id) }}" class="pr-2" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>

                        <a href="{{url("music/$music->id/edit")}}" class="btn btn-success">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection