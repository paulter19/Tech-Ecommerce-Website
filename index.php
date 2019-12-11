<!Doctype html>
<html>
    <head>
        <title>Pay Page</title>

        
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>

    <div id="container">
    
    <h2 class="my-4 text-center">Intro to  react course $50</h2>
                <form action="charge.php" method="post" id="payment-form">
            <div class="form-row" style="width:50%; margin:auto;">
            <input type="text" name="fullname" class="form-control mb-3 ml-3 StripeElement StripeElement--empty" placeholder="Full Name">
            <input type="email" name="email" class="form-control mb-3 ml-3 StripeElement StripeElement--empty" placeholder="Email">
                

                <div id="card-element" class="form-control mb-3 ml-3">
                <!-- A Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display Element errors. -->
                <div id="card-errors" role="alert"></div>
                <button class="btn btn-primary ml-3">Submit Payment</button>

            </div>

            </form>

           
            <script src="https://js.stripe.com/v3/"></script>
            <script src="js/charge.js"></script>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</div>
    </body>
</html>
