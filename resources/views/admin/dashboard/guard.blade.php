@extends('layouts.adminDashboardContent')
@section('content') 
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row"> 
                        @foreach($data as $user)                          
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                        <li><a class="pull-right" href="{{route('deleteGuard',['id'=>$user->id])}}"><button><i class="fa fa-trash"></i></button></a></li>
                                            <img class="rounded-circle mx-auto d-block" src="{{asset($user->guardProfile->image)}}" alt="Card image cap" height="150px" width="150px">
                                            <h5 class="text-sm-center mt-2 mb-1"><i class="fa fa-user"></i>{{$user->fname}} {{$user->lname}}</h5>
                                            <div class="location text-sm-center">
                                               {{$user->email}}</div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <ul class="list-unstyled navbar__list">
                                            <li>
                                                <strong>Guard ID:</strong><a href="#">{{$user->id}}</a>
                                            </li>
                                            <li>
                                                <strong>Gender:</strong><a href="#">{{$user->gender}}</a>
                                            </li>
                                            <li>
                                                <strong>Mobile No:</strong><a href="#">{{$user->phone}}</a>
                                            </li>
                                            <li>
                                                <strong>DOJ:</strong><a href="#">{{$user->date}}</a>
                                            </li>
                                            <hr>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->    
@endsection