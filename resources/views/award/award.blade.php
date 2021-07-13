@extends('layouts.app')

@section('content')

<div class="container card pt-1">
    <div class="table-responsive">
        <table class="table align-items-center">
            <thead class="thead-light">
                <tr>
                    <th scope="col" class="sort" data-sort="name">Name</th>
                    <th scope="col">Award Type</th>
                    <th scope="col" class="sort" data-sort="budget">End Date</th>
                    <th scope="col" class="sort" data-sort="budget">Status</th>
                    <th scope="col" class="sort" data-sort="status">Votes</th>
                    <th scope="col">
                        <a href="{{ url('award/create')}}" class="btn btn-primary text-white">ADD AWARD</a>
                    </th>
                </tr>
            </thead>
            <tbody class="list">
                @foreach ($awards as $award)
                <tr>
                    <th scope="row">
                        <div class="media align-items-center">
                            <a href="#" class="avatar rounded-circle mr-3">


                                <img alt="Image placeholder" src="../../assets/img/theme/bootstrap.jpg">


                            </a>
                            <div class="media-body">
                                <span class="name mb-0 text-sm">{{ $award->name }}</span>
                            </div>
                        </div>
                    </th>

                    <td class="budget">
                        {{$award->awardType->type}}
                    </td>
                    
                    <td class="budget">
                        {{$award->end_date}}
                    </td>
                    <td>
                        <span class="badge badge-dot mr-4">
                            <i class="bg-warning"></i>
                            <span class="status">pending</span>
                        </span>
                    </td>
                    <td>

















                        <div class="avatar-group">
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                data-original-title="Ryan Tompson">
                                <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg">
                            </a>
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                data-original-title="Romina Hadid">
                                <img alt="Image placeholder" src="../../assets/img/theme/team-2.jpg">
                            </a>
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                data-original-title="Alexander Smith">
                                <img alt="Image placeholder" src="../../assets/img/theme/team-3.jpg">
                            </a>
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                data-original-title="Jessica Doe">
                                <img alt="Image placeholder" src="../../assets/img/theme/team-4.jpg">
                            </a>
                        </div>




                    </td>
                    <td class="text-center">
                        <a href="{{url("award/$award->id/candidates")}}" class="btn btn-primary">CANDIDATES</a>
                        <a href="{{url("award/$award->id/edit")}}" class="btn btn-success">Edit</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection