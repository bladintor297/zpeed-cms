@extends('layouts.login')
@section('content')

    <main class="form-signin w-100 m-auto bg-white shadow-lg p-5  rounded">
        <form method="POST" action="{{ route('login.custom') }}">
        @csrf
            <div class="d-flex mx-auto">
                <img class="mb-4" src="assets/img/zpeed-logo-black.png" alt=""  height="40">

            </div>
            <h1 class="h6 mb-3 fw-normal  text-center">Please sign in</h1>

            <div class="form-group mb-3">
                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                    autofocus>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group mb-3">
                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-group mb-3">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>
            
            <button class="w-100 btn btn-lg btn-warning" type="submit">Sign in</button>
        </form>
    </main>

    <a type="button" class="btn btn-link text-decoration-none text-warning px-4 floating-btn rounded-pill " onclick="history.back()"><i class="bi bi-chevron-left"></i> Go Back</a>
@endsection