@extends('layouts.app')

@section('content')

<div class="w-full h-full flex justify-center items-center">
    <div class="w-full max-w-lg border rounded shadow-lg bg-gray-100 mt-20">
        <div class="px-12 py-4 text-xl text-gray-700 border-b">{{ __('Register') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="w-full mt-4">
                    <label for="name" class="px-12 py-3 text-gray-700 text-sm uppercase">{{ __('Name') }}</label>

                    <div class="px-12 mt-2 mb-4">
                        <input id="name" type="text" class="border-2 rounded px-3 py-1 w-full @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="w-full mt-4">
                    <label for="email" class="px-12 py-3 text-gray-700 text-sm uppercase">{{ __('E-Mail Address') }}</label>

                    <div class="px-12 mt-2 mb-4">
                        <input id="email" type="email" class="border-2 rounded px-3 py-1 w-full @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="w-full mt-4">
                    <label for="password" class="px-12 py-3 text-gray-700 text-sm uppercase">{{ __('Password') }}</label>

                    <div class="px-12 mt-2 mb-4">
                        <input id="password" type="password" class="border-2 rounded px-3 py-1 w-full @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="w-full mt-4">
                    <label for="password-confirm" class="px-12 py-3 text-gray-700 text-sm uppercase">{{ __('Confirm Password') }}</label>

                    <div class="px-12 mt-2 mb-4">
                        <input id="password-confirm" type="password" class="border-2 rounded px-3 py-1 w-full" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="w-full my-6 px-12">

                        <button type="submit" class="px-12 py-3 bg-blue-600 text-white text-sm font-bold rounded">
                            {{ __('Register') }}
                        </button>

                </div>
            </form>
        </div>
    </div>
</div>

@endsection
