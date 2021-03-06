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
                                                <th class="text-right"></th>
                                            </tr>
                                        </thead>
                                        @foreach($data as $user)
                                        <tbody>
                                            <tr>
                                                <!-- <td> <img class="rounded-circle mx-auto d-block" src="{{asset($user->guardProfile->image)}}" alt="Card image cap" height="150px" width="150px"></td> -->
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->fname}}</td>
                                                <td>{{$user->lname}}</td>
                                                <td class="text-right">{{$user->email}}</td>
                                                <td class="text-right">{{$user->phone}}</td>
                                                <td class="text-right">{{$user->date}}</td>
                                                <td><a href="{{route('deleteGuard',['id'=>$user->id])}}" id="delete"><button id="delete" class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button></a>
                                                    <a href="{{route('editGuard',['id'=>$user->id])}}"><button id="editGuard" class="btn btn-warning"><i class="fa fa-edit"></i>Edit</button></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="" style="margin: 0 auto; margin-left: 360px;">{{ $data->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- END PAGE CONTAINER-->   
@endsection