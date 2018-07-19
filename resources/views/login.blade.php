@extends('layouts.app2')
@section('content')
	<section id="login_section">

        <div class="panel panel-primary mypanel signpanel">
       
            <div class="panel-heading heading">
                <h1>Login page</h1>
            </div>
            <div class="panel-body">
                <form action="{{route('customerLogin')}}" method="post">
                {{csrf_field()}}                            
                           <div class="form-group col-md-12 >
                                <div class="input-group">
                                <input title="suggestion" autocomplete="off" type="text" value="{{old('email')}}" name="email" id="email" class="form-control" placeholder="Enter email">
                            </div>
                       <div class="form-group col-md-12">
                        <input type="password" autocomplete="off" name="password" id="pas" class="form-control" placeholder="Enter password">
                        </div>
                    <div class="form-group col-md-12 policy">
                        <p>Not Register yet<a href="{{route('signupSelection')}}" id="loginbtn">Register Here</a> </p>
                        <a class="btn btn-link" href="{{ route('user.password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                    </div>
                    <div class="form-group col-md-12">
                            <button type="submit" id="sub" class="btn btn-primary btn-block" name="submit">Login</button>

                    </div>
                </form>

            </div>
            <!--end of panel body-->
        </div>
        <!--end of panel-->
    </section>
@endsection