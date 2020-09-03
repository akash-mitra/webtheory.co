@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>

                    <div class="row justify-content-center">
                        <div class="col-md-8 ml-6">
                            <div class="row">
                                <div class="col">
                                    <a href="social/login/google">
                                        <svg 
                                            style="height:50px; width:50px"
                                            xmlns="http://www.w3.org/2000/svg"
                                            aria-label="Google" role="img"
                                            viewBox="0 0 512 512"><rect
                                            width="512" height="512"
                                            rx="15%"
                                            fill="#fff"/><path fill="#4285f4" d="M386 400c45-42 65-112 53-179H260v74h102c-4 24-18 44-38 57z"/><path fill="#34a853" d="M90 341a192 192 0 0 0 296 59l-62-48c-53 35-141 22-171-60z"/><path fill="#fbbc02" d="M153 292c-8-25-8-48 0-73l-63-49c-23 46-30 111 0 171z"/><path fill="#ea4335" d="M153 219c22-69 116-109 179-50l55-54c-78-75-230-72-297 55z"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="social/login/facebook">
                                        <svg 
                                            style="height:50px; width:50px"
                                            xmlns="http://www.w3.org/2000/svg"
                                            aria-label="Facebook" role="img"
                                            viewBox="0 0 512 512"><rect
                                            width="512" height="512"
                                            rx="15%"
                                            fill="#1877f2"/><path d="M355.6 330l11.4-74h-71v-48c0-20.2 9.9-40 41.7-40H370v-63s-29.3-5-57.3-5c-58.5 0-96.7 35.4-96.7 99.6V256h-65v74h65v182h80V330h59.6z" fill="#fff"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="social/login/twitter">
                                        <svg 
                                            style="height:50px; width:50px"
                                            xmlns="http://www.w3.org/2000/svg"
                                            aria-label="Twitter" role="img"
                                            viewBox="0 0 512 512"><rect
                                            width="512" height="512"
                                            rx="15%"
                                            fill="#1da1f3"/><path fill="#fff" d="M437 152a72 72 0 0 1-40 12 72 72 0 0 0 32-40 72 72 0 0 1-45 17 72 72 0 0 0-122 65 200 200 0 0 1-145-74 72 72 0 0 0 22 94 72 72 0 0 1-32-7 72 72 0 0 0 56 69 72 72 0 0 1-32 1 72 72 0 0 0 67 50 200 200 0 0 1-105 29 200 200 0 0 0 309-179 200 200 0 0 0 35-37"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="social/login/linkedin">
                                        <svg 
                                            style="height:50px; width:50px"
                                            xmlns="http://www.w3.org/2000/svg"
                                            aria-label="LinkedIn" role="img"
                                            viewBox="0 0 512 512"
                                            fill="#fff"><rect
                                            width="512" height="512"
                                            rx="15%"
                                            fill="#0077b5"/><circle cx="142" cy="138" r="37"/><path stroke="#fff" stroke-width="66" d="M244 194v198M142 194v198"/><path d="M276 282c0-20 13-40 36-40 24 0 33 18 33 45v105h66V279c0-61-32-89-76-89-34 0-51 19-59 32"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="social/login/github">
                                        <svg 
                                            style="height:50px; width:50px"
                                            xmlns="http://www.w3.org/2000/svg"
                                            aria-label="GitHub" role="img"
                                            viewBox="0 0 512 512"><rect
                                            width="512" height="512"
                                            rx="15%"
                                            fill="#1B1817"/><path fill="#fff" d="M335 499c14 0 12 17 12 17H165s-2-17 12-17c13 0 16-6 16-12l-1-50c-71 16-86-28-86-28-12-30-28-37-28-37-24-16 1-16 1-16 26 2 40 26 40 26 22 39 59 28 74 22 2-17 9-28 16-35-57-6-116-28-116-126 0-28 10-51 26-69-3-6-11-32 3-67 0 0 21-7 70 26 42-12 86-12 128 0 49-33 70-26 70-26 14 35 6 61 3 67 16 18 26 41 26 69 0 98-60 120-117 126 10 8 18 24 18 48l-1 70c0 6 3 12 16 12z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
