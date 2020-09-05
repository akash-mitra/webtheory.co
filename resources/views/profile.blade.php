@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    
                    @if (!Auth::user()->google2fa_secret)
                        <div class="mt-4">
                            <a href="google2fa/enable" type="button" class="btn btn-success">
                                {{ __('Enable Google 2FA') }}
                            </a>
                        </div>
                    @else
                        <div class="mt-4">
                            <a href="google2fa/disable" type="button" class="btn btn-danger">
                                {{ __('Disable Google 2FA') }}
                            </a>
                        </div>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
