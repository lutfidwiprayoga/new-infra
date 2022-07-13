@extends('auth.layouts.template')
@section('auth')
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="row ">
                        <div class="col-lg-6 col-md-4 mt-3 mb-3">
                            <img src="https://i.ibb.co/3Y1Hh38/OMN.png" alt="" width="480px">
                        </div>
                        <div class="col-lg-5 col-md-7 mt-5 ml-5">
                            <div class="card-auth">
                                <div class="card-body-auth px-lg-5 py-lg-5">
                                    <div class="text-center text-muted mb-4">
                                        <h3 class="text-white">Sign In</h3>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <div class="input-group input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-single-02" style="color: #5e72e4"></i></span>
                                                </div>
                                                <input class="form-control @error('username') is-invalid @enderror"
                                                    value="{{ old('username') }}" name=" username" placeholder="Username" type="text">
                                                @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-lock-circle-open" style="color: #5e72e4"></i></span>
                                                </div>
                                                <input class="form-control @error('password') is-invalid @enderror"
                                                    value="{{ old('password') }}" name="password" placeholder="password"
                                                    type="password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary my-2">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row mt-1 mb-2 ml-3 mr-3">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-reguler"><small>Forgot
                                            password?</small></a>
                                @endif
                                <div class="ml-7 text-right">
                                    <a href="{{ route('register') }}" class="text-reguler"><small>Create new account</small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
