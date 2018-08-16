@extends('layouts.newLayout.serviceLayout')
@section('content')
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
            <h2 class="col-md-6" style="color: #fff; margin:0 auto;">Update profile</h2>
        </div>
        <div class="panel-body mypanel">
            <form action="{{ route('updateUserProfile') }}" method="post" enctype="multipart/form-data">
                @csrf
                {{csrf_field()}}
                <input type="hidden" name="updateId" value="{{$guard->id}}">
                <div class="form-group row  gutter-left  gutter-right">
                    <div class="form-group col-md-6 col-sm-6 col-sx-6 col-lg-6 ">
                        <input type="text" autocomplete="off" name="fname" id="first" value="{{$guard['fname']}}"  class="form-control fname" placeholder="Enter first name">
                        <div id="firstname"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" autocomplete="off" name="lname" id="last" value="{{$guard->lname}}" class="form-control lname" placeholder="Enter last name">
                        <div id="lastname"></div>
                    </div>
                </div>
                <div class="form-group col-md-12 gutter-left">
                    <div class="input-group">
                        <input title="suggestion" autocomplete="off" type="text" value="{{$guard->email}}" name="email" id="email" class="form-control" placeholder="Enter email">
                        <div id="emailDiv"></div>
                    </div>
                </div>
                <div class="form-group row gutter-left gutter-right">
                    <div class="input-group col-md-6 ">
                        <input type="hidden"  name="oldpassword" class="form-control" placeholder="Enter password" maxlength="16" value="{{$guard->password}}">

                        <input type="password"  name="password" id="pas" class="form-control" placeholder="update password" maxlength="16">
                        <div id="pasdiv"></div>
                    </div>
                    <div class="input-group col-md-6">
                        <input type="password" autocomplete="off" id="cpas" name="password_confirmation" class="form-control" placeholder="confirm password" maxlength="16" >
                        <div id="confirmdiv"></div>
                    </div>
                </div>
                <div class="form-group row gutter-left gutter-right">
                    <div class="input-group col-md-12 ">
                        <input type="date" class="form-control" id="dob" name="date" value="{{$guard->date}}">
                        <div id="dobdiv"></div>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <div class="input-group">
                        <div class="input-group-addon">+91</div>
                        <input type="text" autocomplete="off" class="form-control" id="phone" name="phone" placeholder="Enter phone number" maxlength="10"  value="{{$guard->phone}}">
                        <div id="phonediv"></div>
                    </div>
                </div>
                <div class="form-group row gutter-right gutter-left ">
                    <div class="input-group col-md-6 ">
                        <select name="gender" id="gender" class="form-control">
                            <option value="{{$guard->gender}}">{{$guard->gender}}</option>
                            <option value="Male">Male</option>
                            <option value="Female">Femele</option>
                            <option value="Other">Other</option>
                        </select>
                        <div id="gendiv"></div>
                    </div>
                    <div class="input-group col-md-6">
                        <select name="location" id="location" class="form-control">
                            <option value="{{$guard->location}}">{{$guard->location}}</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Uttar pradesh">Uttar pradesh</option>
                            <option value="Rajsthan">Rajsthan</option>
                            <option value="Gujrat">Gujrat</option>
                            <option value="Tamilnadu">Tamilnadu</option>
                            <option value="keral">keral</option>
                        </select>
                        <div id="locdiv"></div>
                    </div>
                </div>
                <div class="form-group row gu gutter-left gutter-right">
                    <div class="input-group col-md-12">
                        <button type="submit" id="editGuard" class="btn btn-primary btn-block" name="submit">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--end of panel body-->
    <!--end of panel-->
</section>
@endsection