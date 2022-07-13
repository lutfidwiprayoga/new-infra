@extends('auth.layouts.template')
@section('auth')
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="row ">
                        <div class="col-lg-6 col-md-4 mt-3 mb-3">
                            <img src="https://i.ibb.co/3Y1Hh38/OMN.png" alt="" width="500px">
                        </div>
                        <div class="col-lg-5 col-md-7 mt-5 ml-5 mb-5">
                            <div class="card-auth">
                                <div class="card-body-auth px-lg-5 py-lg-3">
                                    <div class="text-center text-muted mb-4">
                                        <h3 class="text-white">Sign Up</h3>
                                    </div>
                                    <form role="form" method="POST" action="{{ route('register') }}">
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
                                        <div class="form-group mb-3">
                                            <div class="input-group input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-email-83" style="color: #5e72e4"></i></span>
                                                </div>
                                                <input class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ old('email') }}" name=" email" placeholder="email" type="email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
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
                                        <div class="form-group mb-3">
                                            <div class="input-group input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-lock-circle-open" style="color: #5e72e4"></i></span>
                                                </div>
                                                <input class="form-control @error('password_confirmation') is-invalid @enderror"
                                                    value="{{ old('password_confirmation') }}" name="password_confirmation"
                                                    placeholder="password confirmation" type="password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <input type="hidden" name="level" value="user">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary my-2">Sign Up</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
