@extends('layouts.newLayout.serviceLayout')
@section('content')
@section('homeRoute')
{{route('admin.showGuard')}}
@endsection
<section id="sign_section" style="margin-left: 300px;" >
    @if(count($errors)>0)
    @foreach($errors->all() as $error)
    <p class="alert alert-danger">{{$error}}</p>
    @endforeach
    @endif
    <div class="panel panel-primary signpanel col-md-8 right">
        <div class="panel-heading heading row">
            <h2 class="col-md-6" style="color: #fff; margin:0 auto;">Edit Guard Details</h2>
        </div>
        <div class="panel-body mypanel">
            <form action="{{ route('updateGuard') }}" method="post" enctype="multipart/form-data">
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
                        <input type="password" autocomplete="off" id="cpas" name="password_confirmation" class="form-control" placeholder="confirm password" maxlength="16">
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
                <div class="form-group row gutter-left">
                    <label class=" input-group col-md-12">Prefered locations:</label>
                </div>
                <div class="form-group row gutter-right gutter-left">
                    <div class="input-group col-md-3">
                        <input type="text" value="{{$guard->preferedLocation->loc1}}" name="loc1" id="loc1" class="form-control loc" placeholder="loc 1">
                        <div class="loc1Div" id="loc1Div"></div>
                    </div>
                    <div class="input-group col-md-3">
                        <input type="text" value="{{$guard->preferedLocation->loc2}}" name="loc2" id="loc2" class="form-control loc" placeholder="loc 2">
                        <div class="loc2Div" id="loc2Div"></div>
                    </div>
                    <div class="input-group col-md-3">
                        <input type="text" value="{{$guard->preferedLocation->loc3}}" name="loc3" id="loc3" class="form-control" placeholder="loc 3">
                        <div class="loc3Div" id="loc3Div"></div>
                    </div>
                    <div class="input-group col-md-3">
                        <input type="text" value="{{$guard->preferedLocation->loc4}}" name="loc4" id="loc4" class="form-control" placeholder="loc 4">
                        <div class="loc4Div" id="loc4Div"></div>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <div >
                        <select name="jobType" id="jobType" class="form-control">
                            <option value="{{$guard->guardProfile->jobType}}">{{$guard->guardProfile->jobType}}</option>
                            <option value="Full Time">Full Time</option>
                            <option value="Half Time">Part Time</option>
                            <option value="Event Based">Event Based</option>
                        </select>
                        <div id="jobdiv"></div>
                    </div>
                </div>
                <div class="form-group row gutter-right gutter-left">
                    <div class="input-group col-md-6 ">
                        <input type="text" value="{{$guard->guardProfile->exProfession}}" name="exProfession" id="profession" class="form-control" placeholder="Ex-profession">
                        <div id="professiondiv"></div>
                    </div>
                    <div class="input-group col-md-6">
                        <input type="text" value="{{$guard->guardProfile->qualification}}" name="qualification" id="qualification" class="form-control" placeholder="Higest qualification">
                        <div id="quadiv"></div>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <div  class="input-group">
                        <input type="text" value="{{$guard->guardProfile->language}}" name="language" id="language" class="form-control" placeholder="Known languades">
                        <div id="lang"></div>
                    </div>
                </div>
                <!-- <div class="form-group row gutter-right gutter-left">
                    <div class="input-group col-md-6"> -->
                <!-- <button id="attach"><span class="fa fa-file"></span>Upload Security License</button> -->
                <!--  Update Licence  <input type="file" id="lic" name="licence" >
                    </div> -->
                <!-- <div class="input-group col-md-6"> -->
                <!--  <button id="attach"><span class="fa fa-file"></span> Upload Photograph</button> -->
                <!--  Change Profile<input type="file" id="img" name="image" value="{{$guard->guardProfile->imaeg}}">
                    </div>
                    </div> -->
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