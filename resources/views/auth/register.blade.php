@extends('auth.index')

@section('title', 'Register')

@section('content')
<main class="form-signin w-100 m-auto">
    <form action="{{ route('register') }}" method="POST">
        @csrf
      <h1 class="h3 mb-3 fw-normal">Register</h1>
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="name" name="name">
        <label for="floatingInput">Name</label>
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email">
        <label for="floatingInput">Email address</label>
        @error('email')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
        <label for="floatingPassword">Password</label>
        @error('password')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Repeat Password" name="password_confirmation">
        <label for="floatingPassword">Repeat Password</label>
        @error('password')
        <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <input type="hidden" name="role" value="admin">
      <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
      <p class="mt-5 mb-3 text-body-secondary">&copy; POS INDONESIA</p>
    </form>
  </main>
@endsection
