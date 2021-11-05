@extends('login.loginTemplate')

@section('login-content')
{{-- Row --}}
<div class="row justify-content-center">
    <div class="col-xl-6 col-lg-12 col-md-9">
        <h1 class="text-center mt-4">Sign In</h1>

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if(session()->has('succesLogout'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('succesLogout') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <div class="card shadow-sm my-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="login-form">
                            <form action="{{ route('loginProcess') }}" method="post" class="user">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="E-Mail" autofocus required value="{{ old('email') }}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success btn-block" type="submit">
                                        Login</button>
                                </div>
                                <hr>
                            </form>
                            <div class="text-center">
                                <small>Don't have and account? <a class="font-weight-bold small" href="/register">Register now!
                                    </a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End Row --}}
@endsection