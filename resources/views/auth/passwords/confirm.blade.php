@extends('layouts.app')

@section('content')
<div class="w-full h-screen">
    <div class="flex justify-center">
        <div class="w-full max-w-lg shadow-lg mt-16 bg-gray-100">
            <div class="border pb-6">
                <div class="text-indigo-600 text-2xl px-12 py-4 border-b mb-6">{{ __('Confirm Password') }}</div>

                <div>
                    <div class="mb-4 px-12">
                        <p class="text-red-700 text-sm">Please confirm your password before continuing.</p>
                    </div>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="mb-4 px-12">
                            <label for="password" class="text-gray-700 text-sm uppercase">{{ __('Password') }}</label>

                            <div class="py-2">
                                <input id="password" type="password" class="bg-white border-2 rounded px-3 py-1 w-full @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 px-12">
                            <div class="flex justify-between items-center">
                                <button type="submit" class="px-8 py-2 bg-blue-500 text-white rounded shadow font-bold">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="text-sm text-blue-600" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
