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

<div class="container mb-5">
    <div class="row justify-content-center">

        <div class="col-md-6">
            <p class="text-justify gar-d"><span class="font-weight-bold text-primary">GARBES</span>  <br> <div class="p-2 gar-d box text-right bg-primary"> DIZON </div></p>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="lead text-muted">REGISTRATION</h3><hr>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full Name*" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            </div>
                        </div>


                        <div class="form-group row justify-content-center">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-mail Address*" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-12">
                                <input type="date" class="form-control" name="dob" placeholder="Date of birth*" value="">
                            </div>
                        </div>


                        <div class="form-group row justify-content-center">
                            <div class="col-md-12">
                                <select name="gender" class="form-control" required>
                                    <option value="" class="text-muted">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password*" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"placeholder="Confirm Password*" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0  justify-content-center">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Register') }}
                                </button>
                                <a href="/" class="btn btn-info">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('partials.footer')
@endsection
