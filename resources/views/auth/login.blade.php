@extends('layout.auth')

@section('content')

  <form id="login" onsubmit="event.preventDefault(); loginUser();">
    @csrf
    <div class="input-group mb-3">
      <input type="email" class="form-control" placeholder="Email" id="email" name="email">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-envelope"></span>
        </div>
      </div>
    </div>
    <div class="input-group mb-3">
      <input type="password" class="form-control" placeholder="Password" id="password" name="password">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock"></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-4">
        <button class="btn btn-primary btn-block">Sign In</button>
      </div>
    </div>
  </form>    

@endsection

@section('script')

<script src="{{ asset('assets/js/Auth.js') }}"></script>

@endsection