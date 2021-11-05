@extends('register.regisTemplate')

@section('register-content')
{{-- Row --}}
<div class="row mt-4 justify-content-center">
    <div class="col-lg-10">
        <h1 class="text-center mb-3">Register</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <span class="input-group-text">Name</span>
                                <input type="text" class="form-control @error('nama_depan') is-invalid @enderror" id="nama_depan" name="nama_depan" placeholder="First Name" value="{{ old('nama_depan') }}">
                                @error('nama_depan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                <input type="text" class="form-control @error('nama_belakang') is-invalid @enderror" id="nama_belakang" name="nama_belakang" placeholder="Last Name" value="{{ old('nama_belakang') }}">
                                @error('nama_belakang')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <span class="input-group-text">Username</span>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Masukkan Username Anda" value="{{ old('username') }}">
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <span class="input-group-text">E-Mail</span>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Email Anda" value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <span class="input-group-text">Birth Place</span>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Your birthday place">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <span class="input-group-text">Birthday</span>
                                <input type="text" class="form-control datepicker" id="tgl_lahir" name="tgl_lahir" placeholder="Your birthday">
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="input-group">
                                <span class="input-group-text">Address</span>
                                <textarea name="alamat" id="alamat" class="form-control" placeholder="Where do you live"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <span class="input-group-text">Password</span>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password Baru Anda">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group">
                                <span class="input-group-text">Confirm Password</span>
                                <input type="password" name="ulangi_password" id="ulangi_password" class="form-control @error('ulangi_password') is-invalid @enderror"" placeholder=" Ulangi Password Anda">
                                @error('ulangi_password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Register</button>
                </form>
                <small class="d-block text-center mt-4">Already have an account? <a href="/login">Sign In!</a></small>
            </div>
        </div>
    </div>
</div>
{{-- End Row --}}
@endsection