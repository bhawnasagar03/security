@extends('layouts.newLayout.serviceLayout')
@section('content')
@section('bannerTitle')
Guard Details
@endsection
@section('homeRoute')
{{route('home')}}
@endsection
<section id="sign_section" style="margin-left: 300px;" >
    @if(count($errors)>0)
    @foreach($errors->all() as $error)
    <p class="alert alert-danger">{{$error}}</p>
    @endforeach
    @endif
    <div class="panel panel-primary signpanel col-md-8 right">
        <div class="panel-heading heading row">
            <h2 class="col-md-6" style="color: #fff; margin:0 auto;">Guard Details</h2>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>First name</th>
                            <td>{{$data->fname}}</td>
                        </tr>
                        <tr>
                            <th>Last name</th>
                            <td>{{$data->lname}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <th>Date of birth</th>
                            <td>{{$data->date}}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>{{$data->phone}}</td>
                        </tr>
                        <tr>
                            <th>Job Type</th>
                            <td>{{$data->guardProfile->jobType}}</td>
                        </tr>
                        <tr>
                            <th>Qualification</th>
                            <td>{{$data->guardProfile->qualification}}</td>
                        </tr>
                        <tr>
                            <th>Language</th>
                            <td>{{$data->guardProfile->language}}</td>
                        </tr>
                        <tr>
                            <th>Ex Profession</th>
                            <td>{{$data->guardProfile->exProfession}}</td>
                        </tr>
                        <tr>
                            <th>Job location 1</th>
                            <td>{{$data->preferedLocation->loc1}}</td>
                        </tr>
                        <tr>
                            <th>Job location 2</th>
                            <td>{{$data->preferedLocation->loc2}}</td>
                        </tr>
                        <tr>
                            <th>Job location 3</th>
                            <td>{{$data->preferedLocation->loc3}}</td>
                        </tr>
                        <tr>
                            <th>Job location 4</th>
                            <td>{{$data->preferedLocation->loc4}}</td>
                        </tr>
                    </thead>
                </table>
                <a href="{{route('home')}}"><button class="btn btn-secondary">go to home</button></a>
            </div>
        </div>
    </div>
    <!--end of panel body-->
    <!--end of panel-->
</section>
@endsection