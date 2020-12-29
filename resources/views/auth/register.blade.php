@extends('layouts.guest')

@section('title', 'Reguster')

@section('content')
<div class="col">
    <div class="card my-5">
        <div class="card-header text-center p-2">
            <h1 class="h1">Register</h1>
            <h2 class="lead">Register a new membership</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('svg/register.svg') }}" alt="Register Page">
                </div>
                <div class="col">
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                    @endforeach
                    @endif
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" @error('name') is-invalid @enderror placeholder="Type your full name here .." name="name" value="{{ old('name') }}">
                                <div class="input-group-append">
                                  <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                  </div>
                                </div>
                            </div>
                        </div>
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
                         <div class="form-group">Retype Password</div>
                         <div class="input-group">
                            <input type="password" class="form-control" @error('password_confirmation') is-invalid @enderror  placeholder="Retype your password .." name="password_confirmation">
                            <div class="input-group-append">
                              <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                              </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row no-gutter mt-4">
                                <div class="col">
                                    <a href="{{ route('login') }}">I already have a membership</a>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary float-right">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
