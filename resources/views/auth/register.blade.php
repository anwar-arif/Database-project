@extends('layouts.app')

@section('content')
<div class="container">
    <div class="test2">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{--//start Registration--}}
                        <div class="form-group{{ $errors->has('reg_no') ? ' has-error' : '' }}">
                            <label for="reg_no" class="col-md-4 control-label">Registration No</label>

                            <div class="col-md-6">
                                <input id="reg_no" type="text" class="form-control" name="reg_no" value="{{ old('reg_no') }}">

                                @if ($errors->has('reg_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('reg_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--//end Registration--}}

                        {{--//start batch--}}
                        <div class="form-group{{ $errors->has('batch') ? ' has-error' : '' }}">
                            <label for="batch" class="col-md-4 control-label">Batch</label>

                            <div class="col-md-6">
                                <input id="batch" type="text" class="form-control" name="batch" value="{{ old('batch') }}">

                                @if ($errors->has('batch'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('batch') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--//end batch--}}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
