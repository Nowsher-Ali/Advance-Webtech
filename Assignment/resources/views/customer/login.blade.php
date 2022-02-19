@extends('layouts.app')
@section('Login')
<form action="{{ route('login.auth') }}">
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Email</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="email">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
@endsection