@extends('layouts.app')

@section('content')

<div class="container card pt-1">
    <div class="table-responsive">
        <table class="table align-items-center">
            <thead class="thead-light">
                <tr>
                    <th scope="col" class="sort" data-sort="name">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col text-center">
                        <a href="{{ url('updateAllUserStatus')}}?status=false" class="btn btn-danger text-white mx-auto">DEACTIVATE ALL</a>
                        <a href="{{ url('updateAllUserStatus')}}?status=true" class="btn btn-success text-white mx-auto">ACTIVATE ALL</a>
                    </th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach ($users as $user)
                <tr>
                    <th scope="row">
                        <div class="media align-items-center">
                            <a href="#" class="avatar rounded-circle mr-3">
                                <img alt="Image placeholder" src="../../assets/img/theme/bootstrap.jpg">
                            </a>
                            <div class="media-body">
                                <span class="name mb-0 text-sm">{{ $user->name }}</span>
                            </div>
                        </div>
                    </th>

                    <td>{{$user->phone}}</td>
                    <td>{{$user->email}}</td>
                    <td class="text-center">
                        <a href="{{url('updateUserStatus/'. $user->id)}}" class="btn btn-{{$user->status ? 'success' : 'danger'}}">{{$user->status ? 'Activate' : 'Deactivate'}}</a>
                        <a href="{{url("user/$user->id/edit")}}" class="btn btn-success">Edit</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection