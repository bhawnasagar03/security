@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Guard Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="thumbnail">
          <img src="{{asset($data->guardProfile->image)}}" class="img-responsive">
            <div class="form-group">
                <strong>First Name: {{ $data->fname}}  {{ $data->lname}}</strong>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email: {{ $data->email}}</strong>
            
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone: {{ $data->phone}}</strong>
               
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Job Type: {{ $data->guardProfile->jobType}}</strong>
            </div>
        </div><div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Locations: {{ $data->preferedLocation->loc1}}, {{ $data->preferedLocation->loc2}}, {{ $data->preferedLocation->loc3}}, {{ $data->preferedLocation->loc4}}</strong>
            </div>
        </div>
       
    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


