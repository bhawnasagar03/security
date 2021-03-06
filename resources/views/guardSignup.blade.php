@extends('layouts.app2')
@section('content')
<section id="sign_section" style="margin-left: 300px;" >
    @if(count($errors)>0)
    @foreach($errors->all() as $error)
    <p class="alert alert-danger">{{$error}}</p>
    @endforeach
    @endif
    <div class="panel panel-primary signpanel col-md-8 right">
        <div class="panel-heading heading row">
            <div class="login-logo col-md-4" style="border-radius: 50%;">
                <a href="{{route('welcome')}}"><img src="img/seclogo.png" alt="logo" title="" height="50px" width="50px" style="border-radius: 50%;" /></a>
            </div>
            <p class="col-md-6">Guard registration page</p>
        </div>
        <div class="panel-body mypanel">
            <form action="{{route('customerRegister')}}" method="post" enctype="multipart/form-data">
                @csrf
                {{csrf_field()}}
                <div class="form-group row  gutter-left  gutter-right">
                    <div class="form-group col-md-6 col-sm-6 col-sx-6 col-lg-6 ">
                        <input type="text" autocomplete="off" name="fname" id="first" value="{{old('fname')}}"  class="form-control fname" placeholder="Enter first name">
                        <div id="firstname"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" autocomplete="off" name="lname" id="last" value="{{old('lname')}}" class="form-control lname" placeholder="Enter last name">
                        <div id="lastname"></div>
                    </div>
                </div>
                <div class="form-group col-md-12 gutter-left">
                    <div class="input-group">
                        <input title="suggestion" autocomplete="off" type="text" value="{{old('email')}}" name="email" id="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div id="emailDiv"></div>
                </div>
                <div class="form-group row gutter-left gutter-right">
                    <div class="input-group col-md-6 ">
                        <input type="password" autocomplete="off" name="password" id="pas" class="form-control" placeholder="Enter password" maxlength="16">
                        <div id="pasdiv"></div>
                    </div>
                    <div class="input-group col-md-6">
                        <input type="password" autocomplete="off" id="cpas" name="password_confirmation" class="form-control" placeholder="confirm password" maxlength="16">
                        <div id="confirmdiv"></div>
                    </div>
                </div>
                <div class="form-group row gutter-left gutter-right">
                    <div class="input-group col-md-12 ">
                        <input type="date" class="form-control" id="dob" name="date" >
                        <div id="dobdiv"></div>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <div class="input-group">
                        <div class="input-group-addon">+91</div>
                        <input type="text" autocomplete="off" class="form-control" id="phone" name="phone" placeholder="Enter phone number" maxlength="10">
                    </div>
                    <div id="phonediv"></div>
                </div>
                <div class="form-group row gutter-right gutter-left ">
                    <div class="input-group col-md-6 ">
                        <select name="gender" id="gender" class="form-control">
                            <option value="">Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Femele</option>
                            <option value="Other">Other</option>
                        </select>
                        <div id="gendiv"></div>
                    </div>
                    <div class="input-group col-md-6">
                        <select name="location" id="location" class="form-control">
                            <option value="">select state</option>
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
                        <input type="text" autocomplete="off" name="loc1" id="loc1" class="form-control loc" placeholder="loc 1">
                        <div class="loc1Div" id="loc1Div"></div>
                    </div>
                    <div class="input-group col-md-3">
                        <input type="text" autocomplete="off" name="loc2" id="loc2" class="form-control loc" placeholder="loc 2">
                        <div class="loc2Div" id="loc2Div"></div>
                    </div>
                    <div class="input-group col-md-3">
                        <input type="text" autocomplete="off" name="loc3" id="loc3" class="form-control" placeholder="loc 3">
                        <div class="loc3Div" id="loc3Div"></div>
                    </div>
                    <div class="input-group col-md-3">
                        <input type="text" autocomplete="off" name="loc4" id="loc4" class="form-control" placeholder="loc 4">
                        <div class="loc4Div" id="loc4Div"></div>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <div >
                        <select name="jobType" id="jobType" class="form-control">
                            <option value="">Job Type</option>
                            <option value="Full Time">Full Time</option>
                            <option value="Half Time">Part Time</option>
                            <option value="Event Based">Event Based</option>
                        </select>
                        <div id="jobdiv"></div>
                    </div>
                </div>
                <div class="form-group row gutter-right gutter-left">
                    <div class="input-group col-md-6 ">
                        <input type="text" autocomplete="off" name="exProfession" id="profession" class="form-control" placeholder="Ex-profession">
                        <div id="professiondiv"></div>
                    </div>
                    <div class="input-group col-md-6">
                        <input type="text" autocomplete="off" name="qualification" id="qualification" class="form-control" placeholder="Higest qualification">
                        <div id="quadiv"></div>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <div  class="input-group">
                        <input type="text" autocomplete="off" name="language" id="language" class="form-control" placeholder="Known languades">
                        <div id="lang"></div>
                    </div>
                </div>
                <div class="form-group row gutter-right gutter-left">
                    <div class="input-group col-md-6">
                        <!-- <button id="attach"><span class="fa fa-file"></span>Upload Security License</button> -->
                        Upload Licence  <input type="file" id="lic" name="licence" >
                        <div id="attach2"></div>
                    </div>
                    <div class="input-group col-md-6">
                        <!--  <button id="attach"><span class="fa fa-file"></span> Upload Photograph</button> -->
                        Upload Profile<input type="file" id="img" name="image">
                        <div id="attachResult"></div>
                    </div>
                </div>
                <div class="form-group row gutter-left gutter-right">
                    <div class="input-group col-md-6 policy ">
                        <input type="checkbox" name="checkbox" value="policy" required="required">I agree to the<a href="#"> terms and conditions</a>
                    </div>
                    <div class="input-group col-md-6">
                        Already a user <a href="{{route('customerLogin')}}" id="loginbtn">Login here</a>/
                        <a href="{{ route('welcome') }}">Home</a>
                    </div>
                </div>
                <div class="form-group row gu gutter-left gutter-right">
                    <div class="input-group col-md-12">
                        <button type="submit" id="sub" class="btn btn-primary btn-block" name="submit">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--end of panel body-->
    <!--end of panel-->
</section>
@endsection