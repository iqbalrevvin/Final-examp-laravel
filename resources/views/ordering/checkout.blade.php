<!DOCTYPE html>
<html lang="en">
    <head>
        @include('ordering.header')
    </head>
<body>
    @include('ordering.navbar')
<!-- Header part  -->


<div class="content-area">
    <div class="container">
        <div class="checkout-page">
            <h2>Checkout this process</h2>
            <div class="checkout-top-ok">
                <span id="check-one-top">1</span><span class="check-dots">.....</span>
                <span id="check-two-top">2</span><span class="check-dots">.....</span>
                <span id="check-three-top">3</span>
            </div>
            <form action="" method="POST" class="form-horizontal" role="form" id="checkoutForm">

                <div id="check1">
                    <h3>Basic Informations</h3>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="checkoutEmail">Email: *</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control inputs" id="checkoutEmail" placeholder="Enter email" required/>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="checkoutContact">Contact: *</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control inputs" id="checkoutContact" placeholder="01951233084 or +8801951233084"  required/> 
                        <span class="input-hint">Phone number must be a Bangladeshi number like +8801951233084 or 01951233084 [Only for test and you can add your regexp and make it difference]</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input type="button" class="btn btn-info pull-right  margin-top-20 checkbtn1" name="submit_check1" value="Next..."/>
                            <div class="clearfix"></div> 
                        </div>
                    </div>
                </div> <!-- End check1 -->



                <div id="check2" class="hidden">

                    <h3>Shipping Address Informations</h3>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="shipping_name">Shipping Name: *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control inputs" id="shipping_name" value="Maniruzzaman Akash" placeholder="Enter Your Shipping Name"  required/> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="shipping_contact">Shipping Contact: *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control inputs" value="+8801951233084" id="shipping_contact" placeholder="Enter Your Shipping Contact No"  required/> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="shipping_primary_address">Shipping Primary Address: *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control inputs" id="shipping_primary_address" placeholder="Enter Your Shipping primary Address" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="shipping_secondary_address">Shipping secondary Address:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control inputs" id="shipping_secondary_address" placeholder="Enter Your Shipping Secondary or optional Address" /> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="shipping_nearest_city">Select Nearest state: *</label>
                        <div class="col-sm-10">
                            <select name="state" class="form-control inputs"  id="shipping_nearest_city" required>
                                <option value="">Select a state</option>
                                <option value="London">London</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Mymensingh">Mymensingh</option>
                                <option value="Patuakhali">Patuakhali</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input type="button" class="btn btn-info pull-right  margin-top-20 checkbtn2" name="submit_check2" value="Next..."/>

                            <input type="button" class="btn btn-danger pull-right  margin-top-20 margin-right-20 backToCheck1" name="backToCheck1" value="Back"/>
                            <div class="clearfix"></div> 
                        </div>
                    </div>
                </div> <!-- End check2 -->
                <div id="check3" class="hidden">

                    <h3>Payment Method Informations</h3>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="address_primary">Select Payment Option: *</label>
                        <div class="col-sm-10">
                            <select name="payments" id="payments" class="form-control inputs"  required>
                                <option value="">Select A payment method</option>
                                <option value="payment_paypal">Paypal</option>
                                <option value="payment_stripe">Stripe</option>
                                <option value="payment_bkash">Bkash</option>
                            </select>
                            <div class="payment-div payment-div-paypal hidden">
                                <i class="fa fa-cc-paypal"></i> <br />
                                <a href="paypal.php?id=test" class="btn btn-lg btn-yellow">Payment Via Paypal Now</a>
                            </div>
                            <div class="payment-div payment-div-stripe hidden">
                                <i class="fa fa-cc-stripe"></i> <br />
                                <a href="stripe.php?id=test" class="btn btn-lg btn-yellow">Payment Via Stripe Now</a>
                            </div>
                            <div class="payment-div payment-div-bkash hidden">
                                <i>Bkash</i> <br />
                                <a href="bkash.php?id=test" class="btn btn-lg btn-yellow">Payment Via Bkash Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input type="submit" class="btn btn-info pull-right  margin-top-20" name="submit_check1" value="Finish Order"/>
                            <div class="clearfix"></div> 
                        </div>
                    </div>
                </div> <!-- End check3 -->

            </form>
        </div> <!--End Checkout page -->
    </div> <!-- End Container -->


</div> <!-- End content Area class -->


@include('ordering.footer') <!-- End Footer top -->

<!--End Footer bottom -->

<div class="scroll">
    <a href="#top" class="scroll-to-top hidden">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>


</div> <!-- End wrapper -->



<!-- Scripts -->

<script type="text/javascript" src="{{ asset('templateordering/js/jquery.validate.min.js') }}"></script>

<script type="text/javascript">
    // $("#checkoutForm").validate();
</script>



<script type="text/javascript">
  //Scripts for checkout functions one by one input fields.
  jQuery(document).ready(function() {



    $('.checkbtn1').click(function() {




        var email = $('#checkoutEmail').val();
        var contact = $('#checkoutContact').val();
        var pass_check1 = false;

        if(email == null || email == "" || ((/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i).test(email) == false)) 
        {
            pass_check1 = false;
            $('#checkoutEmail').focus();
            $('#checkoutEmail').addClass('error-input');
        }else{
            pass_check1 = true;
            $('#checkoutContact').focus();
            $('#checkoutEmail').removeClass('error-input');
            $('#checkoutEmail').addClass('success-input');

            //pattern for Bangladeshi phone number like +8801951233084 [Not complete]
            // var bd_phone_pattern = "/^(?:\+88|01)?(?:\d{11}|\d{13})$/";
            var bd_phone_pattern = /^(?:\+88|01)?\d{11}$/;

            if(contact == null || contact == "" || bd_phone_pattern.test(contact) != true) 
            {
                pass_check1 = false;
                $('#checkoutContact').focus();
                $('#checkoutContact').addClass('error-input');
            }else{
                pass_check1 = true;
                $('#checkoutContact').removeClass('error-input');
                $('#checkoutContact').addClass('success-input');

            }
        }



        if (pass_check1 != false) {
            //Focus on next div's element and remove hidden class from it.
            
            // $('#check1').addClass('animated fadeOut');
            $('#check1').addClass('hidden');
            $('#check-one-top').html('<i class="fa fa-check"></i>');
            $('#check-one-top').css({"background-color": "#00BBB5"});
            $('#check-two-top').css({"background-color": "#004C48"});
            $('#check2').removeClass('hidden');
            $('#check2').show('slow');
            $('#shipping_name').focus();
        }

    });



    //Onclick Check button 2
    $('.checkbtn2').click(function() {
        var shipping_name = $('#shipping_name').val();
        var shipping_contact = $('#shipping_contact').val();
        var shipping_primary_address = $('#shipping_primary_address').val();
        var shipping_secondary_address = $('#shipping_secondary_address').val();
        var shipping_nearest_city = $('#shipping_nearest_city').val();
        var pass_check2 = false;
        if (shipping_name === null || shipping_name === "") {
            $('#shipping_name').focus();
            $('#shipping_name').addClass('error-input');
        }else{
            $('#shipping_name').addClass('success-input');
            if (shipping_contact === null || shipping_contact === "") {
                $('#shipping_name').focus();
                $('#shipping_name').addClass('error-input');
            }else{
                $('#shipping_contact').addClass('success-input');
                if (shipping_primary_address === null || shipping_primary_address === "") {
                    $('#shipping_primary_address').focus();
                    $('#shipping_primary_address').addClass('error-input');
                }else{

                    $('#shipping_primary_address').addClass('success-input');
                    $('#shipping_secondary_address').addClass('success-input');
                    if (shipping_nearest_city === null || shipping_nearest_city === "") {
                        $('#shipping_nearest_city').focus();
                        $('#shipping_nearest_city').addClass('error-input');
                    }else{
                        pass_check2 = true;
                    }
                }
            }
        }



        if (pass_check2 != false) {
            $('#check2').addClass('hidden');
            $('#check-two-top').html('<i class="fa fa-check"></i>');
            $('#check-two-top').css({"background-color": "#00BBB5"});
            $('#check-three-top').css({"background-color": "#004C48"});
            $('#check3').removeClass('hidden');
            $('#check3').show('slow');
            $('#payments').focus();
        }


    });


    $('.backToCheck1').click(function() {
        pass_check1 = false;
        $('#check1').removeClass('hidden');
        $('#check2').addClass('hidden');

        $('#check-one-top').html('1');
        $('#check-one-top').css({"background-color": "#004C48"});
        $('#check-two-top').css({"background-color": "#00BBB5"});
    });    

    $('.backToCheck2').click(function() {
        pass_check2 = false;
        $('#check2').removeClass('hidden');
        $('#check3').addClass('hidden');

        $('#check-two-top').html('1');
        $('#check-two-top').css({"background-color": "#004C48"});
        $('#check-three-top').css({"background-color": "#00BBB5"});
    });


                // $('.inputs').keydown(function(e) {
                //     if (e.which === 13) {
                //         var index = $('.inputs').index(this) + 1;
                //         $('.inputs').eq(index),focus();
                //     }
                // });
                
                // Onclick Payment select option payment list will apear 
                
                $('#payments').change(function(){
                    var payment_method = $('#payments').val();

                    if (payment_method === "payment_paypal") {
                        $('.payment-div-paypal').removeClass('hidden');
                        $('.payment-div-paypal').addClass('animated slideInLeft');
                        $('.payment-div-bkash').addClass('hidden');
                        $('.payment-div-stripe').addClass('hidden');
                    }
                    if (payment_method === "payment_stripe") {
                        $('.payment-div-stripe').removeClass('hidden');
                        $('.payment-div-stripe').addClass('animated slideInUp');
                        $('.payment-div-paypal').addClass('hidden');
                        $('.payment-div-bkash').addClass('hidden');
                    }
                    if (payment_method === "payment_bkash") {
                        $('.payment-div-bkash').removeClass('hidden');
                        $('.payment-div-bkash').addClass('animated slideInRight');
                        $('.payment-div-paypal').addClass('hidden');
                        $('.payment-div-stripe').addClass('hidden');
                    }

                });


            });

        </script>
    </body>
    </html>