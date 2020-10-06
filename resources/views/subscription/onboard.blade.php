@extends('layouts.app')

@section('content')
<div class="w-full h-screen container mx-auto px-6">

    <div class="flex justify-center">
        <div class="px-6 py-6">
            <p :class="plan_id=='' ? 'text-red' : ' text-grey-700'" v-text="plan_detail"></p>
        </div>
    </div>
        
    <div class="flex justify-center">
        <div class="w-full max-w-xl bg-white shadow-md rounded p-4 rounded-lg">
            <form @submit.prevent="confirmPayment" action="{{ route('subscriptions.store') }}" method="post" id="payment-form">
                @csrf
                <div class="bg-blue-100 shadow border rounded-lg px-6 py-6">
                    <div class="flex flex-wrap -mx-3 mb-4">
                        <div class="w-full px-3">
                            
                            <label for="site_name" class="inline-block text-sm text-indigo-700 font-semibold mb-2">{{ __('Site Name') }}</label>
                            <input id="site_name" name="site_name" type="text" v-model="site_name" placeholder="Enter your website or blog name" class="bg-white border-2 rounded-lg px-3 py-3 w-full" required>

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
            intent: @json($intent),
            site_name: @json($site_name),
            selected: '',
            plan_id: '',
            plan_detail: '',
            errorMessage: false,
            successMessage: false,
            paymentProcessing: false,
        },
        mounted: function () {
            this.plan = @json($plan);
            this.intent = @json($intent);
            this.site_name = @json($site_name);
            this.plan_id = this.plan.id;
            this.choosePlan(this.plan.id, this.plan.product.name, this.plan.amount);

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
                this.plan_detail = 'You will be charged $' + this.price(cost) + ' per month for the ' + name + ' plan';
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