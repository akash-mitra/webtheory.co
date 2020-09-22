@extends('layouts.app')

@section('content')
    <div class="w-full h-screen container mx-auto px-6">
        <div class="flex justify-center">
            <div class="w-full shadow-lg mt-16 bg-white">
                <div class="border pb-6">
                    <div class="text-indigo-600 text-2xl px-12 py-4 border-b mb-6">{{ __('Dashboard') }}</div>

                    <div class="my-4 px-12">
                        
                        {{-- Sites --}}
                        <div class="mt-4 py-2 text-indigo-600">Sites</div>
                        <div class="mt-4">
                            @if(count($sites) > 0)
                            <div class="bg-white w-full overflow-x-auto shadow border rounded whitespace-no-wrap">
                                <table class="w-full text-left">
                                    <thead class="uppercase text-xs font-semibold text-grey-800 border-b-2">
                                        <tr>
                                            <th class="px-4 py-2 text-indigo-700">ID</th>
                                            <th class="px-4 py-2 text-indigo-700">Name</th>
                                            <th class="px-4 py-2 text-indigo-700">Plan</th>
                                            <th class="px-4 py-2 text-indigo-700">Domain</th>
                                            <th class="px-4 py-2 text-indigo-700">IP</th>
                                            <th class="px-4 py-2 text-indigo-700">Status</th>
                                            <th class="px-4 py-2 text-indigo-700">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-baseline">
                                        @foreach($sites as $site)
                                        <tr>
                                            <td class="px-4 py-2 align-middle text-xs">{{ $site->site_uid }}</td>
                                            <td class="px-4 py-2 align-middle text-xs">{{ $site->name }}</td>
                                            <td class="px-4 py-2 align-middle text-xs">{{ $site->stripe_plan }}</td>
                                            <td class="px-4 py-2 align-middle text-xs">{{ $site->domain_name }}</td>
                                            <td class="px-4 py-2 align-middle text-xs">{{ $site->ip_address }}</td>
                                            <td class="px-4 py-2 align-middle text-xs">{{ $site->status }}</td>
                                            <td class="px-4 py-2 align-middle text-xs flex ">
                                                <a href="{{ route('subscriptions.edit', $site->site_uid) }}" class="mb-1 cursor-pointer text-blue no-underline" title="Change Plan">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20">
                                                        <path class="fill-current" d="M18.303,4.742l-1.454-1.455c-0.171-0.171-0.475-0.171-0.646,0l-3.061,3.064H2.019c-0.251,0-0.457,0.205-0.457,0.456v9.578c0,0.251,0.206,0.456,0.457,0.456h13.683c0.252,0,0.457-0.205,0.457-0.456V7.533l2.144-2.146C18.481,5.208,18.483,4.917,18.303,4.742 M15.258,15.929H2.476V7.263h9.754L9.695,9.792c-0.057,0.057-0.101,0.13-0.119,0.212L9.18,11.36h-3.98c-0.251,0-0.457,0.205-0.457,0.456c0,0.253,0.205,0.456,0.457,0.456h4.336c0.023,0,0.899,0.02,1.498-0.127c0.312-0.077,0.55-0.137,0.55-0.137c0.08-0.018,0.155-0.059,0.212-0.118l3.463-3.443V15.929z M11.241,11.156l-1.078,0.267l0.267-1.076l6.097-6.091l0.808,0.808L11.241,11.156z"></path>
                                                    </svg>
                                                </a>
                                                <form action="{{ route('subscriptions.destroy', $site->site_uid) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="mb-1 cursor-pointer text-blue no-underline" title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20">
                                                            <path class="fill-current" d="M17.114,3.923h-4.589V2.427c0-0.252-0.207-0.459-0.46-0.459H7.935c-0.252,0-0.459,0.207-0.459,0.459v1.496h-4.59c-0.252,0-0.459,0.205-0.459,0.459c0,0.252,0.207,0.459,0.459,0.459h1.51v12.732c0,0.252,0.207,0.459,0.459,0.459h10.29c0.254,0,0.459-0.207,0.459-0.459V4.841h1.511c0.252,0,0.459-0.207,0.459-0.459C17.573,4.127,17.366,3.923,17.114,3.923M8.394,2.886h3.214v0.918H8.394V2.886z M14.686,17.114H5.314V4.841h9.372V17.114z M12.525,7.306v7.344c0,0.252-0.207,0.459-0.46,0.459s-0.458-0.207-0.458-0.459V7.306c0-0.254,0.205-0.459,0.458-0.459S12.525,7.051,12.525,7.306M8.394,7.306v7.344c0,0.252-0.207,0.459-0.459,0.459s-0.459-0.207-0.459-0.459V7.306c0-0.254,0.207-0.459,0.459-0.459S8.394,7.051,8.394,7.306"></path>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>    
                            </div>
                            @endif

                            <a href="subscriptions/create" type="button" class="mt-4 px-8 py-2 bg-indigo-700 text-white rounded shadow">
                                {{ __('Create Site') }}
                            </a>
                        </div>

                        {{-- Billing --}}
                        <div class="mt-4 py-2 border-b text-indigo-600">Billing</div>
                        <div class="mt-4">
                            @if(count($sites) > 0)
                            <div class="bg-white w-full overflow-x-auto shadow border rounded whitespace-no-wrap">
                                <table class="w-full text-left">
                                    <thead class="uppercase text-xs font-semibold text-grey-800 border-b-2">
                                        <tr>
                                            <th class="px-4 py-2 text-indigo-700">Invoice #</th>
                                            <th class="px-4 py-2 text-indigo-700">Date</th>
                                            <th class="px-4 py-2 text-indigo-700">Reason</th>
                                            <th class="px-4 py-2 text-indigo-700">Currency</th>
                                            <th class="px-4 py-2 text-indigo-700">Total</th>
                                            <th class="px-4 py-2 text-indigo-700">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-baseline">
                                        @foreach($invoices as $invoice)
                                        <tr>
                                            <td class="px-4 py-2 align-middle text-xs">{{ $invoice->number }}</td>
                                            <td class="px-4 py-2 align-middle text-xs">{{ $invoice->date()->toFormattedDateString() }}</td>
                                            <td class="px-4 py-2 align-middle text-xs">{{ $invoice->billing_reason }}</td>
                                            <td class="px-4 py-2 align-middle text-xs">{{ strtoupper($invoice->currency) }}</td>
                                            <td class="px-4 py-2 align-middle text-xs">{{ $invoice->total() }}</td>
                                            <td class="px-4 py-2 align-middle text-xs flex ">
                                                <a href="{{ $invoice->hosted_invoice_url }}" class="mb-1 cursor-pointer text-blue no-underline" title="Show Invoice/Receipt">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20">
                                                        <path class="fill-current" d="M16.469,8.924l-2.414,2.413c-0.156,0.156-0.408,0.156-0.564,0c-0.156-0.155-0.156-0.408,0-0.563l2.414-2.414c1.175-1.175,1.175-3.087,0-4.262c-0.57-0.569-1.326-0.883-2.132-0.883s-1.562,0.313-2.132,0.883L9.227,6.511c-1.175,1.175-1.175,3.087,0,4.263c0.288,0.288,0.624,0.511,0.997,0.662c0.204,0.083,0.303,0.315,0.22,0.52c-0.171,0.422-0.643,0.17-0.52,0.22c-0.473-0.191-0.898-0.474-1.262-0.838c-1.487-1.485-1.487-3.904,0-5.391l2.414-2.413c0.72-0.72,1.678-1.117,2.696-1.117s1.976,0.396,2.696,1.117C17.955,5.02,17.955,7.438,16.469,8.924 M10.076,7.825c-0.205-0.083-0.437,0.016-0.52,0.22c-0.083,0.205,0.016,0.437,0.22,0.52c0.374,0.151,0.709,0.374,0.997,0.662c1.176,1.176,1.176,3.088,0,4.263l-2.414,2.413c-0.569,0.569-1.326,0.883-2.131,0.883s-1.562-0.313-2.132-0.883c-1.175-1.175-1.175-3.087,0-4.262L6.51,9.227c0.156-0.155,0.156-0.408,0-0.564c-0.156-0.156-0.408-0.156-0.564,0l-2.414,2.414c-1.487,1.485-1.487,3.904,0,5.391c0.72,0.72,1.678,1.116,2.696,1.116s1.976-0.396,2.696-1.116l2.414-2.413c1.487-1.486,1.487-3.905,0-5.392C10.974,8.298,10.55,8.017,10.076,7.825"></path>
                                                    </svg>
                                                </a>
                                                {{-- $invoice->invoice_pdf --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>    
                            </div>
                            @endif
                        </div>

                        {{-- Profile --}}
                        <div class="mt-4 py-2 border-b text-indigo-600">Profile</div>
                        <div class="md:flex bg-white rounded-lg p-6">
                            @if(Auth::user()->avatar)
                                <img class="h-16 w-16 md:h-24 md:w-24 rounded-full mx-auto md:mx-0 md:mr-6" src="{{ Auth::user()->avatar }}">
                            @else
                                <svg class="h-16 w-16 md:h-24 md:w-24 rounded-full mx-auto md:mx-0 md:mr-6" viewBox="0 0 20 20">
                                    <path fill="fill-current" d="M10,10.9c2.373,0,4.303-1.932,4.303-4.306c0-2.372-1.93-4.302-4.303-4.302S5.696,4.223,5.696,6.594C5.696,8.969,7.627,10.9,10,10.9z M10,3.331c1.801,0,3.266,1.463,3.266,3.263c0,1.802-1.465,3.267-3.266,3.267c-1.8,0-3.265-1.465-3.265-3.267C6.735,4.794,8.2,3.331,10,3.331z"></path>
                                    <path fill="fill-current" d="M10,12.503c-4.418,0-7.878,2.058-7.878,4.685c0,0.288,0.231,0.52,0.52,0.52c0.287,0,0.519-0.231,0.519-0.52c0-1.976,3.132-3.646,6.84-3.646c3.707,0,6.838,1.671,6.838,3.646c0,0.288,0.234,0.52,0.521,0.52s0.52-0.231,0.52-0.52C17.879,14.561,14.418,12.503,10,12.503z"></path>
                                </svg>
                            @endif
                            <div class="text-center md:text-left">
                                <h2 class="text-lg">{{ Auth::user()->name }}</h2>
                                <div class="text-purple-500">Registered</div>
                                <div class="text-gray-600">{{ Auth::user()->email }}</div>
                                <div class="text-gray-600">{{ Auth::user()->country_code . '-' . Auth::user()->mobile_no }}</div>
                            </div>
                        </div>
                        
                        {{-- Security --}}
                        <div class="mt-4 py-2 border-b text-indigo-600">Security</div>
                        
                        <div class="mt-4">
                            <a href="password/change" type="button" class="px-8 py-2 bg-blue-700 text-white rounded shadow">
                                {{ __('Change Password') }}
                            </a>
                        </div>

                        @if (!Auth::user()->google2fa_secret)
                            <div class="mt-4">
                                <a href="google2fa/enable" type="button" class="px-8 py-2 bg-green-700 text-white rounded shadow">
                                    {{ __('Enable Google 2FA') }}
                                </a>
                            </div>
                        @else
                            <div class="mt-4">
                                <a href="google2fa/disable" type="button" class="px-8 py-2 bg-red-700 text-white rounded shadow">
                                    {{ __('Disable Google 2FA') }}
                                </a>
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>

    </div>
@endsection

@section('scripts')
<script>
    // if any JS is needed

</script>
@endsection