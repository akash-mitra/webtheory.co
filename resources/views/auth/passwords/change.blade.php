@extends('layouts.app')

@section('content')
<div class="w-full h-screen">
    <div class="flex justify-center">
        <div class="w-full max-w-lg shadow-lg mt-16 bg-gray-100">
            <div class="border pb-6">
                <div class="text-indigo-600 text-2xl px-12 py-4 border-b mb-6">{{ __('Change Password') }}</div>

                <div>
                    <form method="POST" action="{{ route('password.change') }}">
                        @csrf

                        <div class="mb-4 px-12">
                            <label for="password" class="text-gray-700 text-sm uppercase">{{ __('New Password') }}</label>

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
                            <label for="password-confirm" class="text-gray-700 text-sm uppercase">{{ __('Confirm New Password') }}</label>

                            <div class="py-2">
                                <input id="password-confirm" type="password" class="bg-white border-2 rounded px-3 py-1 w-full" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-4 px-12">
                            <button type="submit" class="px-8 py-2 bg-blue-500 text-white rounded shadow font-bold">
                                {{ __('Change Password') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
