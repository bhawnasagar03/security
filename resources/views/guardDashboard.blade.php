@extends('layouts.guardLayout')
@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif
                            <div class="mx-auto d-block">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <tr>
                                            <th>
                                                <div class="thumbnail ">
                                                    <img src="{{asset($data->guardProfile->image)}}" class="img-responsive">
                                                </div>
                                            </th>
                                        </tr>
                                        <tbody>
                                            <tr>
                                                <th>ID</th>
                                                <td>{{ $data->id}}</td>
                                            </tr>
                                            <tr>
                                                <th>First Name</th>
                                                <td>{{ $data->fname}}</td>
                                            </tr>
                                            <tr>
                                                <th>Last Name</th>
                                                <td>{{ $data->lname}}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{$data->email}}</td>
                                            </tr>
                                            <tr>
                                                <th>Mobile No.</th>
                                                <td>{{$data->phone}}</td>
                                            </tr>
                                            <tr>
                                                <th>DOJ</th>
                                                <td>{{$data->date}}</td>
                                            </tr>
                                            <tr>
                                                <th>Date of birth</th>
                                                <td>{{$data->date}}</td>
                                            </tr>
                                            <tr>
                                                <th>Job Type</th>
                                                <td>{{ $data->guardProfile->jobType}}</td>
                                            </tr>
                                            <tr>
                                                <th>Job Locations</th>
                                                <td> {{ $data->preferedLocation->loc1}}, {{ $data->preferedLocation->loc2}}, {{ $data->preferedLocation->loc3}}, {{ $data->preferedLocation->loc4}}</td>
                                            </tr>
                                        </tbody>
                                        >
                                        @foreach($data as $user)
                                        <tbody>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- END PAGE CONTAINER-->
@endsection