@extends('layouts.app')

@section('content')
<style>
    body{
        background-image: url('https://images.pexels.com/photos/4261793/pexels-photo-4261793.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        background-repeat: no-repeat;
        background-size: cover;
    }
    
    .container{
        opacity: 0.8;
    }
    
    h4{
        font-style: italic;
        color: #000;
    }
</style>
<style>
    
    .login_button
    {
    	float: right;
    	margin-right: 30px;
    	    	
    }
        body, html {
            height: 100%;
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

		    .bg-img {
            /* The image used */
            background-image: url("https://static1.squarespace.com/static/52d6cb6be4b0b5fc69b8d205/t/5307d431e4b06c565def6aa7/1393022004734/education-background-checks.jpg?format=1500w");
            text-rendering: all;
            min-height: 100%;
			    height: 100%;
			    width: 100%;
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Add styles to the form container */
        .container {
            position: center relative;
            right: 0;
            margin: 20px;
            max-width: 600px;
            padding: 16px;
            background-color: white;
            margin-right: auto;
            margin-left: auto;
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
<br />
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div align="center">
                    <img src="http://www.tutors246.com/img/logo.png.png">
                <div class="card-header"><h3>{{ __('Register') }}</h3></div>
                <h4>Welcome to Our Online Learning Community!</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="course" class="col-md-4 col-form-label text-md-right">{{ __('Enrolled Course') }}</label>

                            <div class="col-md-6">
                                
                                <select id="course" name="course" class="dropdown">
                                    <option value="1278 - CSEC Mathematics">1278 - CSEC Mathematics</option>
                                    <option value="1279 - CSEC English Language">1279 - CSEC English Language</option>
                                    <option value="1280 - CSEC Information Technology">1280 - CSEC Information Technology</option>
                                     <option value="1280 - CSEC Information Technology">1281 - CSEC Additional Mathematics</option>
                                    <option value="1280 - CSEC Information Technology">1282 - Common Entrance  Examination</option>

                                    </select>
                                @error('course')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>

<br />
                        
                        <div class="form-group row">
                            <label for="tutor" class="col-md-4 col-form-label text-md-right">{{ __('Requested Tutor') }}</label>

                            <div class="col-md-6">
                                <input id="tutor" type="tutor" class="form-control @error('tutor') is-invalid @enderror" name="tutor" required autocomplete="new-tutor">

                                @error('tutor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
