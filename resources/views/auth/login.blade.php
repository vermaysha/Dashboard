@extends('layouts.guest')

@section('title', 'Login')

@section('content')
<div class="col">
    <div class="card my-5">
        <div class="card-header text-center p-2">
            <h1 class="h1">Login</h1>
            <h2 class="lead">Sign in to start your session</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('svg/login.svg') }}" alt="Login Page">
                </div>
                <div class="col">
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                    @endforeach
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                           <label for="email">Email</label>
                            <div class="input-group">
                                <input type="email" name="email" @error('email') is-invalid @enderror id="email" class="form-control" placeholder="Type your email here .." value="{{ old('email') }}">
                                <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                             <div class="input-group">
                                 <input type="password" name="password" @error('password') is-invalid @enderror id="password" class="form-control" placeholder="Type your password here ..">
                                 <div class="input-group-append">
                                 <div class="input-group-text">
                                     <span class="fas fa-lock"></span>
                                 </div>
                                 </div>
                             </div>
                         </div>
                         <div class="form-group">
                            <div class="row no-gutter mt-4">
                                <div class="col">
                                    <div class="icheck-primary">
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember">
                                          Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary float-right">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
