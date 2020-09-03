@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="w-full sm:w-2/5 p-4 bg-white shadow border rounded-lg">
            <p class="text-teal text-sm">Open up your 2FA mobile app and scan the following QR barcode:</p>
            <br/>
            <img alt="Image of QR barcode" src="{{ $image }}"/>
            <br/>
            <p class="text-teal text-sm">If your 2FA mobile app does not support QR barcodes, enter in the following number:</p>
            <p class="text-grey-dark text-lg text-center mt-2">{{ $secret }}</span>
        </div>
    </div>
</div>
@endsection