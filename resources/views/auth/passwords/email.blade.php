@extends('layouts.app')

@section('content')
<div class="w-full h-screen">
    <div class="flex justify-center">
        <div class="w-full max-w-lg shadow-lg mt-16 bg-gray-100">
            <div class="border pb-6">
                <div class="text-indigo-600 text-2xl px-12 py-4 border-b mb-6">{{ __('Reset Password') }}</div>

                <div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-4 px-12">
                            <label for="email" class="text-gray-700 text-sm uppercase">{{ __('E-Mail Address') }}</label>

                            <div class="py-2">
                                <input id="email" type="email" class="bg-white border-2 rounded px-3 py-1 w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 px-12">
                            <button type="submit" class="px-8 py-2 bg-blue-500 text-white rounded shadow font-bold">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
