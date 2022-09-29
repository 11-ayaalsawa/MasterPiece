

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>AMOUR</title>
</head>
<body>
   
    <div class="container login" >

        <div class="left">
                <h1>Hello</h1>
                <p>Lorem ipsum dolor sit amet     consectetur adipisicing elit. Doloribus reiciendis. psum dolor sit amet consectetur adipisicing elit. Doloribus reiciendis</p>
               <a href="{{ route('login') }}"><button type="button" >SIGN IN</button></a>
                </div>
        <div class="right">
        
        <div class="title"> <h1>Sign In</h1> </div>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name" >{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    
            <label for="email">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    
        <label for="password">{{ __('Password') }}</label>
        <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    
    <label for="password-confirm">{{ __('Confirm Password') }}</label>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
        </form>
        
        
        </div>
        
        </div>
        

    
</body>
</html>

