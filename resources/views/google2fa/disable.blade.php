@extends('layouts.app')

@section('content')
<div class="w-full h-screen">
    <div class="flex justify-center">
        <div class="w-full max-w-lg shadow-lg mt-16 bg-gray-100">
            <div class="border pb-6">
                <div class="text-indigo-600 text-2xl px-12 py-4 border-b mb-6">{{ __('Two Factor Authentication') }}</div>
                
                <div class="mb-4 px-12">
                    <p class="text-red-700 text-sm">Google Two Factor Authentication has been disabled !!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection