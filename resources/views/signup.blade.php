@extends('layouts.app2')
@section('content')
	<section id="sign_section">

        <div class="panel panel-primary mypanel signpanel">
            <div class="panel-heading heading">
                <h1>User's registration page</h1>                
            </div>
            <div class="panel-body signpanel">
                    @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger">{{$error}}</p>
                    @endforeach
                @endif
                <form action="{{route('customerRegister')}}" method="post">
                @csrf
                {{csrf_field()}}
                <div class="form-group row ">
                    <div class="form-group col-md-6 gutter-right">
                        <input type="text" autocomplete="off" name="fname" id="first" value="{{old('fname')}}"  class="form-control" placeholder="Enter first name">
                            <div id="firstname"></div>
                        </div>
                       <div class="form-group col-md-6 gutter-left">
                            <input type="text" autocomplete="off" name="lname" id="last" value="{{old('lname')}}" class="form-control" placeholder="Enter last name">
                            <div id="lastname"></div>
                        </div>
                    </div>                            
                    <div class="form-group col-md-12 gutter-left">
                        <div class="input-group">
                                <input title="suggestion" autocomplete="off" type="text" value="{{old('email')}}" name="email" id="email" class="form-control" placeholder="Enter email">
                                </div>
                         <div id="emailDiv"></div>
                    </div>
                    <div class="form-group col-md-12 gutter-left">
                        <div class="input-group">
                        <input type="password" autocomplete="off" name="password" id="pas" class="form-control" placeholder="Enter password">
                            <div id="pasdiv"></div>
                        </div>
                    </div>

                     <div class="form-group col-md-12 gutter-left">
                        <div class="input-group">
                        <input type="password" autocomplete="off" id="cpas" name="password_confirmation" class="form-control" placeholder="confirm password">
                            <div id="confirmdiv"></div>
                        </div>
                    </div>
                     <div class="form-group col-md-12 gutter-left">
                        <div class="input-group">
                        <input type="date" class="form-control" id="dob" name="date" >
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon">+91</div>
                                    <input type="text" autocomplete="off" class="form-control" id="phone" name="phone" placeholder="Enter phone number" maxlength="10">
                            </div>
                                    <div id="phonediv"></div>
                    </div>
                     <div class="form-group row ">
                        <div class="form-group col-md-6 gutter-right">
                            <select name="gender" id="gender" class="form-control">
                                <option>Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Femele</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <select name="location" id="location" class="form-control">
                                <option>select state</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Uttar pradesh">Uttar pradesh</option>
                                <option value="Rajsthan">Rajsthan</option>
                                <option value="Gujrat">Gujrat</option>
                                <option value="Tamilnadu">Tamilnadu</option>
                                <option value="keral">keral</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row ">
                         <div class="form-group col-md-6 policy">
                             <p><input type="checkbox" name="checkbox" value="agree withpolicy" required="required">I agree to the<a href="#"> terms and conditions</a></p>
                             </div>
                             <div class="form-group col-md-6 policy">   
                             <p>Already a user <a href="{{route('customerLogin')}}" id="loginbtn">Login here</a> </p>
                        </div>
                    <div class="form-group col-md-12">

                        <button type="submit" id="sub" class="btn btn-primary btn-block" name="submit">Register</button>
                    </div>
                    </div>
                    
                </form>
                  </div>

            </div>
            <!--end of panel body-->
        </div>
        <!--end of panel-->
    </section>
    @endsection