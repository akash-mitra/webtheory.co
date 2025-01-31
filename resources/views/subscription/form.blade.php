@extends('layouts.app')

@section('content')
<div class="w-full h-screen container mx-auto px-6">
    <div class="flex justify-center">
        <div class="bg-white w-full max-w-4xl overflow-x-auto shadow border rounded whitespace-no-wrap mt-6">
            <table class="w-full text-left">
                <thead class="uppercase text-xs font-semibold text-grey-800 border-b-2">
                    <tr>
                        <th class="px-4 py-2 text-indigo-700">Name</th>
                        <th class="px-4 py-2 text-indigo-700">Description</th>
                        <th class="px-4 py-2 text-indigo-700">Currency</th>
                        <th class="px-4 py-2 text-indigo-700">Cost</th>
                        <th class="px-4 py-2 text-indigo-700">Cycle</th>
                        <th v-if="mode === 'edit'" class="px-4 py-2 text-center">Subscribed</th>
                        <th class="px-4 py-2 text-indigo-700">Choose</th>
                    </tr>
                </thead>
                <tbody class="align-baseline">
                    <tr v-for="plan in plans" :class="selected==plan.id ? ' border-t border-b border-green-200 bg-green-300' : ''">
                        <td class="px-4 py-2 align-middle text-xs" v-text="plan.product.name"></td>
                        <td class="px-4 py-2 align-middle text-xs" v-text="plan.product.description"></td>
                        <td class="px-4 py-2 align-middle text-xs" v-text="plan.currency"></td>
                        <td class="px-4 py-2 align-middle text-xs" v-text="price(plan.amount)"></td>
                        <td class="px-4 py-2 align-middle text-xs" v-text="plan.interval"></td>
                        <td v-if="mode === 'edit' && subscribed_plan === plan.id" class="px-4 py-2 align-middle text-xs text-center font-bold border-indigo-500 text-white bg-indigo-400">Y</td>
                        <td v-if="mode === 'edit' && subscribed_plan != plan.id" class="px-4 py-2 align-middle text-xs text-center">N</td>
                        <td class="px-4 py-2 align-middle text-xs">
                            <a href="#" @click.prevent="choosePlan(plan.id, plan.product.name, plan.amount)" class="mb-1 cursor-pointer text-blue-700 no-underline" title="Select Plan">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20">
                                    <path class="fill-current" d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>
                                    <path class="fill-current" d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>
                                    <path class="fill-current" d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>
                                </svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>    
        </div>
    </div>

    <div class="flex justify-center">
        <div class="px-6 py-6">
            <p :class="plan_id=='' ? 'text-red' : ' text-grey-700'" v-text="plan_detail"></p>
        </div>
    </div>
        
    <div class="flex justify-center">
        <div class="w-full max-w-xl bg-white shadow-md rounded p-4 rounded-lg">
            @if($mode == 'create')
            <form @submit.prevent="confirmPayment" action="{{ route('subscriptions.store') }}" method="post" id="payment-form">
            @else
            <form @submit.prevent="confirmPayment" action="{{ route('subscriptions.update', $site_uid) }}" method="post" id="payment-form">
                <input name="_method" value="PATCH" type="hidden">
            @endif
                @csrf
                <div class="bg-blue-100 shadow border rounded-lg px-6 py-6">
                    <div class="flex flex-wrap -mx-3 mb-4">
                        <div class="w-full px-3">
                            
                            <label for="site_name" class="inline-block text-sm text-indigo-700 font-semibold mb-2">{{ __('Site Name') }}</label>
                            <input id="site_name" name="site_name" type="text" v-model="site_name" :readonly="mode === 'edit'" placeholder="Enter your website or blog name" class="bg-white border-2 rounded-lg px-3 py-3 w-full" required>

                            <label for="card-element" class="inline-block text-sm text-gray-700 font-semibold my-2">{{ __('Credit / debit card') }}</label>
                            <div id="card-element" class="bg-gray-200 border border-gray-400 rounded-lg p-4 mb-6">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>
                    
                            <!-- Used to display form errors. -->
                            <div id="card-errors" class="text-red-700" role="alert"></div>
                        </div>
                    </div>
                    <input name="plan_id" type="text" v-model="plan_id" class="hidden">
                
                    <button id="card-button" type="submit"
                        class="inline-block w-full px-4 py-3 mb-2 text-white rounded-lg bg-indigo-500 hover:bg-green-500"
                        :class="{ 'bg-indigo-400': paymentProcessing, 'bg-indigo-600': ! paymentProcessing }"
                        :disabled="paymentProcessing">
                    Subscribe
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://js.stripe.com/v3"></script>

<script>
    // Create a Stripe client.
    window.stripe = Stripe('{{ env("STRIPE_KEY") }}');

    var app = new Vue({ 
        el: '#app', 
        data: {
            cardElement: '',
            plans: @json($plans),
            intent: @json($intent),
            site_name: @json($site_name),
            subscribed_plan: @json($subscribed_plan),
            mode: @json($mode),
            selected: '',
            plan_id: '',
            plan_detail: 'No plans selected. Choose a plan from the above !!',
            errorMessage: false,
            successMessage: false,
            paymentProcessing: false,
        },
        mounted: function () {
            this.plans = @json($plans);
            this.intent = @json($intent);
            this.site_name = @json($site_name);
            this.subscribed_plan = @json($subscribed_plan);
            this.mode = @json($mode);

            // Create an instance of Elements.
            const elements = stripe.elements();
            // Custom styling can be passed to options when creating an Element.
            const style = {
                base: {
                    // Add your base input styles here. For example:
                    fontSize: '16px',
                    color: "#32325d",
                }
            };
            // Create an instance of the card Element.
            this.cardElement = elements.create('card', {style: style});
            // Add an instance of the card Element into the `card-element` <div>.
            this.cardElement.mount('#card-element');
        },
        methods: {
            price: function(amount) {
                return amount/100;
            },
            choosePlan: function (id, name, cost) { 
                this.selected = id;
                this.plan_id = id;
                this.plan_detail = 'You will be charged $' + this.price(cost) + ' per month for the selected ' + name + ' plan';
            },
            confirmPayment: function() {
                var self = this;
                // this.paymentProcessing = true;

                stripe.handleCardSetup(this.intent.client_secret, this.cardElement, {
                    payment_method_data: {
                        // billing_details: { name: cardHolderName.value }
                    }
                }).then(function(result) {
                    if (result.error) {
                        var displayError = document.getElementById('card-errors');
                        // Inform the user if there was an error.
                        displayError.textContent = result.error.message;
                    } else {
                        // Handle form submission.
                        const form = document.getElementById('payment-form');
                        // Send the token to your server.
                        const hiddenInput = document.createElement('input');
                        hiddenInput.setAttribute('type', 'hidden');
                        hiddenInput.setAttribute('name', 'stripeToken');
                        hiddenInput.setAttribute('value', result.setupIntent.payment_method);
                        form.appendChild(hiddenInput);
                        // Submit the form
                        form.submit();
                    }
                });
            }
        }
    })
</script>

@endsection