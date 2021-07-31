@extends('layouts.app')

@section('content')

<style>
    .card-stats {
        background-size: cover;
        transition: all 4s;
        height: 150px;
    }

    .card-stats:hover {
        cursor: pointer;
    }

    .card-stats .card-body {
        background-color: rgba(110, 110, 110, .7);
        color: white
    }
</style>

<div class="container pt-3">
    <div class="row justify-content-center">
        @include('layouts/messages')
        <div class="col-12">
            <div class="card">
                <div class="card-header">Movies</div>

                <div class="card-body">

                    <div class="row">
                        @foreach ($movies as $movie)
                        <div class="col-xl-3 col-md-6">
                            <a href="{{url("movie/$movie->id/castVote")}}" class="item redbtn col-12">
                                <div class="card card-stats"
                                    style="background-image: url('{{asset('storage/uploads/movie/' . $movie->image)}}')">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-white mb-0">{{$movie->name}}
                                                </h5>
                                                <span class="h2 font-weight-bold mb-0">350,897</span>
                                            </div>
                                            <div class="col-auto">                                                
                                                @if (Auth::user()->hasVoted($movie))
                                                <div
                                                    class="icon icon-shape bg-gradient-success text-white rounded-circle shadow">
                                                    <i class="ni ni-check-bold"></i>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-sm">
                                            <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                            <span class="text-nowrap">Since last month</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
            
            <div class="card">
                <div class="card-header">Musics</div>

                <div class="card-body">

                    <div class="row">
                        @foreach ($musics as $music)
                        <div class="col-xl-3 col-md-6">
                            <a href="{{url("music/$music->id/castVote")}}" class="item redbtn col-12">
                                <div class="card card-stats"
                                    style="background-image: url('{{asset('storage/uploads/music/' . $music->image)}}')">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title text-uppercase text-white mb-0">{{$music->name}}
                                                </h5>
                                                <span class="h2 font-weight-bold mb-0">350,897</span>
                                            </div>
                                            <div class="col-auto">                                                
                                                @if (Auth::user()->hasVotedMusic($music))
                                                <div
                                                    class="icon icon-shape bg-gradient-success text-white rounded-circle shadow">
                                                    <i class="ni ni-check-bold"></i>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-sm">
                                            <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                            <span class="text-nowrap">Since last month</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection