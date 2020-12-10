@extends('layouts.app')

@section('content')

<style>
    .gar-d{
        font-size:100px;
    }

    .box{
        color:white;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <p class="text-justify gar-d"><span class="font-weight-bold text-primary">GARBES</span>  <br> <div class="p-2 gar-d box text-right bg-primary"> DIZON </div></p>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-center text-muted lead">LOGIN</h5>
                    <hr>
                    <form method="POST" action="{{ route('login') }}" autocomplete="off">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">

                            <div class="col-md-12">
                                <input id="password" type="password"  placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0 justify-content-center">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success btn-block">
                                    {{ __('Login') }}
                                </button>

                                <a type="button" href="/register" class="btn btn-primary btn-block">
                                    Register
                                </a>

                            </div>
                        </div>
                        <hr>
                        <p class="text-muted text-center">Garbes Dizon 2020</p>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.footer')
@endsection
