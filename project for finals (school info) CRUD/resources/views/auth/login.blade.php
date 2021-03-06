@extends('layouts.app')

@section('content')

<style>
    .logo{
        max-height:100px;
    }

    
</style>
<div class="container mb-5 custom-cont">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white lead text-center">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <img class="logo rounded mx-auto d-block" src="https://scontent.fcrk1-2.fna.fbcdn.net/v/t1.0-9/92830722_2763571763751143_5025302845184802816_o.jpg?_nc_cat=106&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeHIrOaJYpeMPUn-LIigb19hey1P0_5N78V7LU_T_k3vxbLQwCNlcSvn2MNW1qMQEdnr1-d5xi4U2p4tb8BNKcbs&_nc_ohc=Y4SbTTktCaoAX8hYX6C&_nc_ht=scontent.fcrk1-2.fna&oh=bea92ba4f8a705b930def16c34e3d698&oe=5FEF29C2" alt="">
                        </div>
                        <hr>

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

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

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
