@extends('layouts.app')

@section('content')
<style>
    .dangerbtn {
        font-family: 'Dosis', sans-serif;
        font-size: 14px;
        color: #abb7c4;
        font-weight: bold;
        text-transform: uppercase;
        color: #ffffff;
        padding: 13px 25px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        background-color: #969293
    }
    
    .greenbtn {
        font-family: 'Dosis', sans-serif;
        font-size: 14px;
        color: #abb7c4;
        font-weight: bold;
        text-transform: uppercase;
        background-color: #dd003f;
        color: #ffffff;
        padding: 13px 25px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        background-color: #00AAAA
    }
</style>
<div class="page-single movie_single pt-3">
    <div class="container" style="padding-top: 50px">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="movie-img sticky-sb">
                    <img src="{{asset('storage/uploads/movie/' . $movie->image)}}" alt="" style="height: 350px; width: 350px">
                    <div class="movie-btn col-12">
                        <div class="red col-12">
                            <div class="col-12">
                                @if (App\Models\MovieVote::where([['movie_id', $movie->id], ['user_id',
                                Auth::id()]])->get()->count() == 0)
                                <a href="{{url("movie/$movie->id/castVote")}}" class="item redbtn col-12"> <i
                                        class="ion-play"></i> Vote</a>
                                @else
                                <a class="item greenbtn col-12 text-white"> <i
                                        class="ion-play"></i> Voted</a>
                                @endif
                                
                                <a href="{{url('home')}}" class="item dangerbtn float-right text-white" style="margin-top: -10px"> <i
                                    class="ion-play"></i> Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="movie-single-ct main-content">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <h1 class="bd-hd">{{$movie->name}} <span>2015</span></h1>
                            <div class="social-btn">
                                <a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
                                <div class="hover-bnt">
                                    <a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
                                    <div class="hvr-item">
                                        <a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
                                        <a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
                                        <a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
                                        <a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
                                    </div>
                                </div>
                            </div>

                            <p>{{$movie->description}}</p>
                        </div>
                        <div class="col-md-4 col-xs-12 col-sm-12">
                            <div class="sb-it">
                                <h6>Director: </h6>
                                <p><a href="#">{{$movie->director}}</a></p>
                            </div>
                            <div class="sb-it">
                                <h6>Producer: </h6>
                                <p><a href="#">{{$movie->producer}},</a>
                            </div>
                            <div class="sb-it">
                                <h6>Production Company: </h6>
                                <p><a href="#">{{$movie->production_company}},</a>
                            </div>
                            <div class="sb-it">
                                <h6>Genre: </h6>
                                <p><a href="#">{{$movie->genre}},</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection