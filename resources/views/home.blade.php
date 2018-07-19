@extends('layouts.headerFooter')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-12">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
    </div>
</div>
    <div class="row justify-content-center">
        <div class="col-md-12">
                    <div class=" dashboard" id="dashboard">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                    <div class="row">
                        @foreach($data as $value)
                       <div class="col-sm-6 col-md-4 border">
                        <div class="thumbnail">
                          <img src="{{asset($value->guardProfile->image)}}" alt="..." class="img-responsive">
                          <div class="caption" id="caption">
                            <h3>{{$value->fname}}</h3>
                            <h3>{{$value->email}}</h3>
                            @if (Route::has('login'))
                             @if(Auth::check())
                            <div class="caption">
                            <a href="{{ route('guardWishlist',['id'=>$value->id])}}" class="btn btn-default pull-left" role="button");"><i class="fa fa-heart"></i></a>
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
                            </div>
                            @else
                            <a href="{{route('customerRegister')}}" class="pull-right">Login/Signup</a>
                              @endif
                            @endif
                          </div>
                        </div>
                      </div>
                     @endforeach
                    </div>
                    

                    </div>
                   
                </div>
        </div>
    </div>
</div>
@endsection

