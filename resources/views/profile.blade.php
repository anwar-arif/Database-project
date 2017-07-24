@extends('layouts.app')

@section('content')
    <div class="test2">
        <h3>Your Profile <br><br>
            {{--User Id         : {{$user->id}}<br>--}}
            Name            : {{$user->name}}<br>
            Batch           : {{$user->batch}}<br>
            Registration No : {{$user->reg_no}}<br>
        </h3>
    </div>
@stop