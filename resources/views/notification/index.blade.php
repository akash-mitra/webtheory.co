@extends('layouts.app')

@section('content')
<div class="w-full h-screen">
    <div class="flex justify-center">
        <div class="w-full mx-10 shadow-lg mt-16 bg-gray-100">
            <div class="border pb-6">
                <div class="text-indigo-600 text-2xl px-12 py-4 border-b mb-6">{{ __('Notifications') }}</div>

                <div class="w-full mb-4 px-12">
                    <div class="bg-white w-full overflow-x-auto shadow border rounded whitespace-no-wrap">
                        <table class="w-full text-left">
                            <thead class="uppercase text-xs font-semibold text-grey-800 border-b-2">
                                <tr>
                                    <th class="px-4 py-2 text-indigo-700">ID</th>
                                    <th class="px-4 py-2 text-indigo-700">Type</th>
                                    <th class="px-4 py-2 text-indigo-700">Created</th>
                                    <th class="px-4 py-2 text-indigo-700">Read</th>
                                    <th class="px-4 py-2 text-indigo-700">Action</th>
                                </tr>
                            </thead>
                            <tbody class="align-baseline">
                                @foreach ($notifications as $notification)
                                <tr>
                                    <td class="px-4 py-2 align-middle text-xs">{{ $notification->id }}</td>
                                    <td class="px-4 py-2 align-middle text-xs">{{ $notification->type }}</td>
                                    <td class="px-4 py-2 align-middle text-xs">{{ $notification->created_at }}</td>
                                    <td class="px-4 py-2 align-middle text-xs">{{ $notification->read_at }}</td>
                                    <td class="px-4 py-2 align-middle text-xs flex ">
                                        <a href="{{ route('notifications.show', $notification->id) }}" class="mb-1 cursor-pointer text-blue no-underline" title="Change Plan">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20">
                                                <path class="fill-current" d="M18.303,4.742l-1.454-1.455c-0.171-0.171-0.475-0.171-0.646,0l-3.061,3.064H2.019c-0.251,0-0.457,0.205-0.457,0.456v9.578c0,0.251,0.206,0.456,0.457,0.456h13.683c0.252,0,0.457-0.205,0.457-0.456V7.533l2.144-2.146C18.481,5.208,18.483,4.917,18.303,4.742 M15.258,15.929H2.476V7.263h9.754L9.695,9.792c-0.057,0.057-0.101,0.13-0.119,0.212L9.18,11.36h-3.98c-0.251,0-0.457,0.205-0.457,0.456c0,0.253,0.205,0.456,0.457,0.456h4.336c0.023,0,0.899,0.02,1.498-0.127c0.312-0.077,0.55-0.137,0.55-0.137c0.08-0.018,0.155-0.059,0.212-0.118l3.463-3.443V15.929z M11.241,11.156l-1.078,0.267l0.267-1.076l6.097-6.091l0.808,0.808L11.241,11.156z"></path>
                                            </svg>
                                        </a>
                                        <form action="{{ route('notifications.destroy', $notification->id) }}" method="post">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
