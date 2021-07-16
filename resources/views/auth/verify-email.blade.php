@extends('template')

@section('content')
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="/img/login.jpg" alt="login" class="login-card-img">
                </div>
                <div class="col-md-7">
                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                            <h1>{{ $error }}</h1>
                        @endforeach
                    @endif
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="card-body">
                        <div class="brand-wrapper">
                            <img src="/img/logo.png" alt="logo" class="logo">
                        </div>
                        <p class="login-card-description">You must verify your email address. Kindly check your email address to verify</p>
                        @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{session('status')}}
                        </div>
                        @endif
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                           <input name="resend" id="resend" class="btn btn-block login-btn mb-4" type="submit" value="resend Email">
                        </form>
                     
                    </div>
                </div>
            </div>
        </div>
@endsection
