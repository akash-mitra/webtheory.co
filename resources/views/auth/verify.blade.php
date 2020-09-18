@extends('layouts.app')

@section('content')
<div class="w-full h-screen">
    <div class="flex justify-center">
        <div class="w-full max-w-lg shadow-lg mt-16 bg-gray-100">
            <div class="border pb-6">
                <div class="text-indigo-600 text-2xl px-12 py-4 border-b mb-6">{{ __('Verify Your Email Address') }}</div>

                <div>
                    <div class="mb-4 px-12">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif
                    </div>

                    <div class="mb-4 px-12">
                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                    </div>

                    <div class="mb-4 px-12">
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf

                            <button type="submit" class="px-8 py-2 bg-blue-500 text-white rounded shadow font-bold">{{ __('click here to request another') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
