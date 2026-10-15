<!DOCTYPE html>
<html>
<head>
    <title>Laravel 11 Stripe Payment Gateway Integration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">
        #card-element{
            height: 50px;
            padding-top: 16px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card mt-5">
                <h3 class="card-header p-3">Laravel 11 Stripe Payment Gateway Integration</h3>
                <div class="card-body">
                  <h5 class="mb-3 text-center">
                        You Need To Pay <strong>${{ $value }}</strong>
                    </h5>
                    @session('success')
                        <div class="alert alert-success" role="alert"> 
                            {{ $value }}
                        </div>
                    @endsession
          
                    <form id='checkout-form' method='post' action="{{ route('stripe.post', $value) }}">   
                        @csrf    

                        <strong>Name:</strong>
                        <input type="input" class="form-control" name="name" placeholder="Enter Name">

                        <input type='hidden' name='stripeToken' id='stripe-token-id'>                              
                        <br>
                        <div id="card-element" class="form-control" ></div>
                        <button 
                            id='pay-btn'
                            class="btn btn-success mt-3"
                            type="button"
                            style="margin-top: 20px; width: 100%;padding: 7px;"
                            onclick="createToken()">PAY NOW
                        </button>
                    <form>
                </div>
            </div>
        </div>
    </div> 
</div>
      
</body>
     
<script src="https://js.stripe.com/v3/"></script>
```html
<!-- Stripe Payment Start -->
<script>
    const stripe = Stripe(@json(env('STRIPE_KEY')));
    const elements = stripe.elements();
    const card = elements.create('card');

    card.mount('#card-element');

    async function createToken() {
        const payButton = document.getElementById('pay-btn');
        const tokenInput = document.getElementById('stripe-token-id');
        const checkoutForm = document.getElementById('checkout-form');

        payButton.disabled = true;

        try {
            const response = await stripe.createToken(card);

            if (response.error) {
                alert(response.error.message);
                return;
            }

            if (!response.token) {
                alert('Unable to process your card. Please try again.');
                return;
            }

            tokenInput.value = response.token.id;
            checkoutForm.submit();

        } catch (error) {
            alert('Payment could not be processed. Please try again.');
            console.error(error);

        } finally {
            payButton.disabled = false;
        }
    }
</script>
<!-- Stripe Payment End -->
```
</html>


