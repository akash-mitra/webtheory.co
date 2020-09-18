@extends('layouts.app')

@section('content')
<div class="w-full h-screen">
    <div class="flex justify-center">
        <div class="w-full max-w-lg shadow-lg mt-16 bg-gray-100">
            <div class="border pb-6">
                <div class="text-indigo-600 text-2xl px-12 py-4 border-b mb-6">{{ __('Notifications') }}</div>

                <div class="w-full mb-4 px-12">
                    <div class="bg-white mt-2">
                        {{ $notification->data['message'] }}
                    </div>
                    <div class="bg-white mt-2">
                        {{ $notification->data['action'] }}
                    </div>
                    <div class="bg-white mt-2">
                        {{ $notification->data['refer_url'] }}
                    </div>
                    <div class="bg-white mt-2">
                        {{ $notification->data['action_url'] }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
