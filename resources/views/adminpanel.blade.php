@if (Auth::guest())
@section('title')
{{ $title}}
@endsection
@include('admin-inc.header')
@if (Auth::guest())
<div class="container" style="margin-top:8%;">
<div class="row">
<div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
    <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="card card-login card-hidden">
            <div class="card-header text-center" data-background-color="rose">
                <h4 class="card-title">{{ __('Login') }}</h4> 
            </div>
            <div class="spacer"></div>
            <br>
            <div class="card-content">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">email</i>
                    </span>
                    @section('title')
                    <div class="form-group label-floating">
                        <label for="email" class="control-label">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">lock_outline</i>
                    </span>
                    <div class="form-group label-floating">
                        <label for="password" class="control-label">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    </div>
                </div>

                <div class="checkbox" style="margin-left:10%">
                        <label>
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>                                   
                        </label>
                </div>

            </div>
            <div class="footer text-center">
                <button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg">Let<?php echo "'"; ?>s go</button><br>
            {{-- <a class="nav-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a> --}}
            </div>
        </div>
    </form>
</div>
</div>
</div>
@endif
@else
  <script>
      window.location = '/admin/dashboard';
  </script>

@endif


