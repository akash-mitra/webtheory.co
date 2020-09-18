@extends('layouts.app')

@section('content')
<div class="w-full h-screen">
    <div class="flex justify-center">
        <div class="w-full max-w-lg shadow-lg mt-16 bg-gray-100">
            <div class="border pb-6">
                <div class="text-indigo-600 text-2xl px-12 py-4 border-b mb-6">{{ __('Two Factor Authentication') }}</div>
                
                <div>
                    <form method="POST" action="{{ route('google2fa.validate') }}">
                        @csrf
                        
                        <div class="mb-4 px-12">
                            <label for="totp" class="text-gray-700 text-sm uppercase">{{ __('One Time Password') }}</label>
                            
                            <div class="py-2">
                                <input id="totp" type="number" class="bg-white border-2 rounded px-3 py-1 w-full @error('totp') is-invalid @enderror" name="totp" required>

                                @error('totp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 px-12">
                            <button type="submit" class="px-8 py-2 bg-blue-500 text-white rounded shadow font-bold">
                                {{ __('Verify') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
