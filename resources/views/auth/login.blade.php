@extends('layouts.app')
@section('content')
<style>
    body{
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url('https://images.pexels.com/photos/733852/pexels-photo-733852.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
    }
    
        /* Add styles to the form container */
        .container, form-group row {
            position: center relative;
            right: 0;
            margin: 20px;
            margin-top: 155px;
            max-width: 700px;
            padding: 16px;
            background-color: white;
            margin-right: auto;
            margin-left: auto;
            opacity: 0.7;
            overflow: hidden;
            padding-left: 15px;
        }

        
                /* Full-width input fields */
        input[type=text], input[type=password], input[type=email], input[type=tutor]{
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }

            input[type=text]:focus, input[type=password]:focus {
                background-color: #ddd;
                outline: none;
            }

        /* Set a style for the submit button */
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

            .btn:hover {
                opacity: 1;
            }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }
    h4
    {
        font-weight: 100;
    }
    

</style>
<div class="container">
   <br /><center><img src="http://www.tutors246.com/img/logo.png.png" height="auto" width="auto" />

 <h2><medium>Welcome to our Online Learning Community!</medium></center></h2>    <div class="row justify-content-center">
        <div class="col-md-8">
            <div align="center">
                <div class="card-header"><h3>{{ __('Login') }}</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                   <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}<br /><br />
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div align="center">
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <br /><br /><Br />
                                <center><a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a></center><br /><br />
                                @endif
                            </div>
                        </div></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
