@extends('layouts.admin.admin')

@section('content')

<div class="register">
    <form method="POST" role="form" action="{{ url('/register') }}">
        {{ csrf_field() }}
        <div class="row">
            <!-- ************************************************************* -->
            <div class="input-field col s12{{ $errors->has('name') ? ' has-error' : '' }}">
                <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Name" />
                <label for="name">Name</label>
            </div>
            @if ($errors->has('email'))
            <div class="col s12">
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            </div>
            @endif
            <!-- ************************************************************* -->
            <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="E-mail" />
                <label for="email">E-mail</label>
            </div>
            @if ($errors->has('email'))
            <div class="col s12">
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            </div>
            @endif
            <!-- ************************************************************* -->
            <div class="input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" id="password" name="password" placeholder="Password" />
                <label for="password">Password</label>
            </div>
            @if ($errors->has('password'))
            <div class="col s12">
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            </div>
            @endif
            <!-- ************************************************************* -->
            <div class="input-field col s12{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input type="password" id="password-confirm" name="password_confirmation" placeholder="Password Confirm" />
                <label for="password-confirm">Password Confirm</label>
            </div>
            @if ($errors->has('password_confirmation'))
            <div class="col s12">
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            </div>
            @endif
            <!-- ************************************************************* -->
            <div class="input-field col s12">
                  <button class="btn waves-effect waves-light" type="submit" name="action">Registration
                    <i class="material-icons right">send</i>
                  </button>
                  <a class="btn btn-link" href="{{ url('/login') }}">Login</a>
            </div>
        </div>
    </form>
</div>
@endsection
