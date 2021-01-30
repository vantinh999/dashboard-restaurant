@extends('layouts.login-layout')

@section('title')
    Login 
@endsection

@section('content')

   <div class="signup-form">
   <form method="POST" action="{{ route('login') }}">
      @csrf
        <div class="form-header">
            <h2>Login to Dashboard</h2>
            
        </div>
        
        <div class="form-group">
            <label>Email Address</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
        </div>
        <div class="form-group">
            <label>Password</label>
             <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
        </div>
           
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">
                                    {{ __('Login') }}
                                </button>
                                
        </div>  
    </form>
    
    <div class="text-center small"><a href="#">
       @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </a></div>
    <div class="text-center small">Create a new account? <a href="register">Register here</a></div>
</div>

@endsection

