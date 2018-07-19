@extends('layouts.adminDashboardContent')
@section('content') 
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">                           
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th class="text-right">Email</th>
                                                <th class="text-right">Mobile No.</th>
                                                <th class="text-right">DOJ</th>
                                            </tr>
                                        </thead>
                                        @foreach($data as $user)
                                        <tbody>
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->fname}}</td>
                                                <td>{{$user->lname}}</td>
                                                <td class="text-right">{{$user->email}}</td>
                                                <td class="text-right">{{$user->phone}}</td>
                                                <td class="text-right">{{$user->date}}</td>
                                                <td class="text-right"><a href="{{route('deleteUser',['id'=>$user->id])}}"><button><i class="fa fa-trash"></i></button></a></td>
                                            </tr>
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