@extends('profile.profileTemplate')

@section('main-content')
<!-- Main Content -->
@if(session()->has('success'))
<div class="alert alert-success mt-4" role="alert">
    {{ session('success') }}
    <hr>
</div>
@endif

<div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
    <div class="card p-4">
        <div class=" image d-flex flex-column justify-content-center align-items-center">
            <button class="btn btn-secondary">
                <img src="https://i.imgur.com/wvxPV9S.png" height="100" width="100" />
            </button>
            <span class="name mt-3">{{ Auth::user()->firstName }} {{ Auth::user()->lastName }}</span>
            <span class="idd">{{ Auth::user()->email }}</span>
            <div class="text mt-3"> <span>Birth Place: {{ Auth::user()->birthPlace }}<br><br> Birth Date: {{ Auth::user()->birthDate }} </span> </div>
            <div class="text mt-3"> <span>Address: {{ Auth::user()->address }}</span> </div>
            <div class=" px-2 rounded mt-4 date "> <span class="join">Joined {{ Auth::user()->created_at }}</span> </div>
            <div class=" d-flex mt-2"> <a href="{{ url('/logout') }}" class="btn1 btn-warning">Logout</a> </div>
        </div>
    </div>
</div>
<!-- End Main-Content -->
@endsection