@extends('layouts.app')

@section('content')
<div class="w-full h-screen">
    <div class="flex justify-center">
        <div class="w-full max-w-lg shadow-lg mt-16 bg-gray-100">
            <div class="border pb-6">
                <div class="text-indigo-600 text-2xl px-12 py-4 border-b mb-6">{{ __('Two Factor Authentication') }}</div>

                <div class="mb-4 px-12">
                    <p class="text-teal=700 text-sm">Open up your 2FA mobile app and scan the following QR barcode:</p>
                    
                    <img class="my-4" alt="Image of QR barcode" src="{{ $image }}"/>
                    
                    <p class="text-teal-800 text-sm">If your 2FA mobile app does not support scanning of QR barcodes, enter in the following number:</p>
                    
                    <p class="text-grey-700 text-lg text-center mt-4">{{ $secret }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection