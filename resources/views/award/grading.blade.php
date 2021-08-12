@extends('layouts.app')

@section('content')
    
  <!-- Page content -->
  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-xl-6">
        <div class="card">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">Movie votes</h3>
              </div>
              <div class="col text-right">
                <a href="#!" class="btn btn-sm btn-primary">See all</a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Movie</th>
                  <th scope="col">Description</th>
                  <th scope="col">Date</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($movies as $movie)
                <tr>
                  <th scope="row">{{$movie->name}}</th>
                  <th scope="row">{{$movie->description}}</th>
                  <th scope="row">{{$movie->movieVote->count()}}</th>
                </tr>                    
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      
      <div class="col-xl-6">
        <div class="card">
          <div class="card-header border-0">
            <div class="row align-items-center">
              <div class="col">
                <h3 class="mb-0">Music votes</h3>
              </div>
              <div class="col text-right">
                <a href="#!" class="btn btn-sm btn-primary">See all</a>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Music</th>
                  <th scope="col">Voter</th>
                  <th scope="col">Date</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($musics as $music)
                <tr>
                  <th scope="row">{{$music->title}}</th>
                  <th scope="row">{{$music->name}}</th>
                  <th scope="row">{{$music->date}}</th>
                </tr>                    
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection