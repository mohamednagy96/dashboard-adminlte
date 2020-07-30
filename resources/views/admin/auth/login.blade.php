@extends('admin.layouts.auth')

@section('content')
<p class="login-box-msg">Sign in to start your session</p>

<form action="#" method="post">
    @csrf
<div class="form-group">
  <div class="input-group">
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required autocomplete="email" autofocus>
    <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-envelope"></span>
      </div>
    </div>
  </div>
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <div class="input-group">
    <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password">
    <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-lock"></span>
      </div>
    </div>
  </div>
  @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
  <div class="row">
    <div class="col-8">
      <div class="icheck-primary">
        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

        <label for="remember">
          Remember Me
        </label>
      </div>
    </div>
    <!-- /.col -->
    <div class="col-4">
      <button type="submit" class="btn btn-primary btn-block">Sign In</button>
    </div>
    <!-- /.col -->
  </div>
</form>

@endsection
