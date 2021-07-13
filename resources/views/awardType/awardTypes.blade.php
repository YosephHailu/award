@extends('layouts.app')

@section('content')
<div class="container pt-3 col-10">
    <div class="card">
        <a href="{{ url('awardType/create')}}" class="btn btn-primary btn-lg">ADD AWARD TYPE</a>
    </div>

    <div class="row mx-auto">
        @foreach ($awardTypes as $awardType)
        <div class="col-6">
            <div class="card col-12">
                <img class="card-img-top" src="../../assets/img/theme/img-1-1000x600.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$awardType->type}}</h5>
                    <p class="card-text">{{$awardType->type_description}}</p>
                    <a href="{{url("awardType/$awardType->id/edit")}}" class="btn btn-primary">Edit</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection