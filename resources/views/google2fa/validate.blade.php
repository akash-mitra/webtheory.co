@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">{{ __('Two Factor Authentication') }}</div>
            <div class="card-body">
                <form class="w-full p-6" method="POST" action="{{ route('google2fa.validate') }}">
                    @csrf
                    <div class="mb-6">
                        <label for="email" class="block text-grey-darker text-sm font-bold mb-2">
                            {{ __('One Time Password') }}:
                        </label>
                        <input id="totp" type="number" name="totp" required autofocus class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('totp') ? ' border-red' : '' }}"/>
                        @if ($errors->has('totp'))
                            <p class="text-red text-xs italic mt-4">
                                {{ $errors->first('totp') }}
                            </p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Validate') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
