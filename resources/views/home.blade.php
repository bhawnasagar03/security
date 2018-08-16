@extends('layouts.newLayout.homeLayout')
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
        @foreach($data as $value)
        <div class="col-md-4">
            <div class="single-service">
                <div class="thumbnail">
                    <img src="{{asset($value->guardProfile->image)}}" alt="..." class="img-responsive">
                </div>
                <div class="detail">
                    <a href="#">
                        <h4>{{$value->fname}}</h4>
                        <h4>{{$value->email}}</h4>
                    </a>
                    <p>
                        @if (Route::has('login'))
                        @if(Auth::check())
                        <a href="{{route('viewGuardProfile',['id'=>$value->id])}}"><button id="editGuard" class="btn btn-primary"></i>View Profile</button></a>
                    <div class="caption">
                        <!-- <a href="{{ route('guardWishlist',['id'=>$value->id])}}" class="btn btn-default pull-left" role="button");"><i class="fa fa-heart" id="wish"></i></a> -->
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
                        <?php
                            $wishdata=DB::table('wishlists')->leftJoin('users','wishlists.guard_id','=','users.id')->where('wishlists.guard_id','=','$value->id')->get();
                            
                            $count=App\UserWishlist::where(['guard_id'=>$value->id])->count();
                            ?>
                        @foreach($wishdata as $wishd)
                        {{$wishd->id}}
                        @endforeach
                        @if($count==0)
                        <form action="{{url('/wishlist')}}" method="post">
                            {{csrf_field()}}
                            <input type="submit" name="" value="Add to wishlist" class="btn btn-success">
                            <input type="hidden" name="guard_id" value="{{$value->id}}">
                        </form>
                        @else
                        <h6 style="color: green;">Added to Wishlist<a href="{{ route('viewWishlist')}}">Wishlist</a> </h6>
                        @endif
                    </div>
                    @else
                    <a href="{{route('customerRegister')}}" class="pull-right">Login/Signup</a>
                    @endif
                    @endif
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
      
</section>
<!-- End service Area -->
@endsection