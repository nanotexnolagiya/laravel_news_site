@extends('layouts.admin.admin')

@section('content')


<div class="login">
    <form method="POST" role="form" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <div class="row">
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
             <div class="col s12">
                <p>
                  <input type="checkbox" id="remember" name="remember" />
                  <label for="remember"> Remember Me</label>
                </p>
            </div>
            <br>
            <div class="input-field col s12">
                  <button class="btn waves-effect waves-light" type="submit" name="action">Login
                    <i class="material-icons right">send</i>
                  </button>
                  <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
            </div>
        </div>
    </form>
</div>
@endsection
