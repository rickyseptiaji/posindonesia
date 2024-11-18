@extends('auth.index')

@section('title', 'Login')

@section('content')
<main class="form-signin w-100 m-auto">
    <form action="{{ route('login') }}" method="POST">
        @csrf
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
        <label for="floatingPassword">Password</label>
      </div>
      @error('email')
      <div class="text-danger">{{ $message }}</div>
      @enderror
      <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
      <hr>
      <a href="{{ route('register') }}" class="btn btn-primary w-100 py-2">Register</a>
      <p class="mt-5 mb-3 text-body-secondary">&copy; POS INDONESIA</p>
    </form>
  </main>
@endsection