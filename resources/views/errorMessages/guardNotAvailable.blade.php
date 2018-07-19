
@extends('layouts.errorLayout')
@section('content')
<div class="text-wrapper">
    <div class="title" data-content="404">
        404
    </div>

    <div class="subtitle">
        Oops, There is no Guard exist!!!!.
    </div>

    <div class="buttons">
        <a class="button" href="{{route('welcome')}}" id="logInBtn">Go to homepage</a>
    </div>
</div>
@endsection