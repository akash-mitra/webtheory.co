@extends('layouts.app')

@section('content')
<div class="w-full h-screen">
    <div class="flex justify-center">
        <div class="w-full max-w-lg shadow-lg mt-16 bg-gray-100">
            <div class="border pb-6">
                <div class="text-indigo-600 text-2xl px-12 py-4 border-b mb-6">{{ __('Register') }}</div>

                <div>
                    <form method="POST" action="{{ route('register') }}" id="register_form">
                        @csrf

                        <div class="mb-4 px-12">
                            <label for="name" class="text-gray-700 text-sm uppercase">{{ __('Name') }}</label>

                            <div class="py-2">
                                <input id="name" type="text" class="bg-white border-2 rounded px-3 py-1 w-full @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 px-12">
                            <label for="email" class="text-gray-700 text-sm uppercase">{{ __('E-Mail Address') }}</label>

                            <div class="py-2">
                                <input id="email" type="email" class="bg-white border-2 rounded px-3 py-1 w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 px-12">
                            <label for="password" class="text-gray-700 text-sm uppercase">{{ __('Password') }}</label>

                            <div class="py-2">
                                <input id="password" type="password" class="bg-white border-2 rounded px-3 py-1 w-full @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 px-12">
                            <label for="password-confirm" class="text-gray-700 text-sm uppercase">{{ __('Confirm Password') }}</label>

                            <div class="py-2">
                                <input id="password-confirm" type="password" class="bg-white border-2 rounded px-3 py-1 w-full" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-4 px-12">
                            <input type="hidden" name="recaptcha" id="recaptcha" value="">
                            <div class="text-xs">
                                This site is protected by reCAPTCHA and the Google
                                <a class="text-blue-600 underline" href="https://policies.google.com/privacy">Privacy Policy</a> and
                                <a class="text-blue-600 underline" href="https://policies.google.com/terms">Terms of Service</a> apply.
                            </div>
                        </div>
                    
                        <div class="mb-4 px-12">
                            <button onclick="submit_register_form(event)" type="button" class="px-8 py-2 bg-blue-500 text-white rounded shadow font-bold">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>

<script>
function submit_register_form(e) {
    grecaptcha.ready(function() {
        grecaptcha.execute("{{ env('RECAPTCHA_SITE_KEY') }}", {action: 'submit'}).then(function(token) {
            document.getElementById('recaptcha').value = token;
            document.getElementById('register_form').submit();
        });
    });
}
</script>
@endsection
