@extends('layouts.newLayout.serviceLayout')
@section('content')
<!-- Start service Area -->
<section class="service-area service-page-service section-gap" id="service">
    <div class="container">
    <div class="row d-flex justify-content-center">
        <div class="menu-content pb-70 col-lg-8">
            <div class="title text-center">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif 
                <link href="{{ asset('css/app.css') }}" rel="stylesheet">
                <h1 class="mb-10">Our Offered Services</h1>
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($guard as $guard)
        <div class="col-md-4">
            <div class="single-service">
                @foreach($data as $value)
                @if($guard->guard_id==$value->id)
                <div class="thumbnail">
                    <img src="{{asset($value->guardProfile->image)}}" alt="..." class="img-responsive">
                </div>
                <div class="detail">
                    <a href="#">{{$value->fname}}
                    {{$value->email}}</a>
                    <p>
                        @if (Route::has('login'))
                        @if(Auth::check())
                        <a href="{{route('viewGuardProfile',['id'=>$value->id])}}"><button id="editGuard" class="btn btn-primary"></i>View Profile</button></a>
                    <div class="caption">
                        <form action="{{url('/addToWishlist')}}">
                            {{csrf_field()}}
                            @if ($value->guardProfile->vailable==1)
                            <input type="hidden" name="guard_id" value="{{$value->id}}">
                            <input type="hidden" name="guard_email" value="{{$value->email}}">
                            <button type="submit" hidden="hidden" value="{{$value->id}}" class="btn btn-default pull-right bookGuard" name="gurdId">Book Guard</button>
                            @else
                            <input type="hidden" name="guard_id" value="{{$value->id}}">
                            <input type="hidden" name="guard_email" value="{{$value->email}}">
                            <button type="submit" value="{{$value->id}}" class="btn btn-default pull-right bookGuard" name="gurdId">Book Guard</button>
                            @endif
                        </form>
                        <form action="{{url('/cancelGuard')}}">
                            @if($value->guardProfile->vailable==0)
                            {{csrf_field()}}
                            <input type="hidden" name="guard_id" value="{{$value->id}}">
                            <input type="hidden" name="guard_email" value="{{$value->email}}">
                            <button type="submit" hidden="hidden" value="$value->id" name="gurdId" class="btn btn-danger pull-right cancelGuard">Cancel</button>
                            @else
                            <input type="hidden" name="guard_id" value="{{$value->id}}">
                            <input type="hidden" name="guard_email" value="{{$value->email}}">
                            @foreach($data2 as $val)
                            @if($val->book_id==Auth::user()->id && $val->guard_id==$value->guardProfile->user_id)
                            <button type="submit" value="$value->id" name="gurdId" class="btn btn-danger pull-right cancelGuard">Cancel</button>
                            @endif
                            @endforeach
                            @foreach($data3 as $val2)
                            @if($val2->cancel_id==Auth::user()->id && $val->guard_id==$value->guardProfile->user_id)
                            <h6>not available</h6>
                            @endif
                            @endforeach
                            @endif
                        </form>
                        <a href="{{route('deleteWishlist',['id'=>$value->id])}}"><button class="btn btn-danger"></i>Remove from wishlist</button></a>
                        </li>
                    </div>
                    @else
                    <a href="{{route('customerRegister')}}" class="pull-right">Login/Signup</a>
                    @endif
                    @endif                               
                    </p>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- End service Area -->
@endsection