<template>
    <div>
        <section class="section" id="payment">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-heading">
                            <h2>Payment <em>Methods</em></h2>
                            <img :src="origin_path + '/images/line-dec.png'" alt="">
                            <p>We have multiple options to get payment</p>
                        </div>
                    </div>
                </div>
            
                <div class="row" id="tabs">
                    <div class="col-lg-4">
                        <ul>
                            <li><a href='#tabs-1'><img :src="origin_path + '/images/bank_PNG15.png'" class="payment" alt="">Banking</a></li>
                            <li><a href='#tabs-2'><img :src="origin_path + '/images/phone-pe.png'" class="payment" alt="">PhonePay</a></li>
                            <li><a href='#tabs-3'><img :src="origin_path + '/images/upi.png'" class="payment" alt="">UPI</a></li>
                            <li><a href='#tabs-4'><img :src="origin_path + '/images/google-pay.png'" class="payment" alt="">GooglePay</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="#" class="payment-button">Deposit</a>
                            </div>
                            <div class="col-lg-6">
                                <a href="#" class="payment-button-withdraw active1">Withdraw</a>
                            </div>
                        </div>
                        <section class='tabs-content'>
                            <!-- Banking -->
                            <div class="contact-form">
                                <form id="contact" action="" method="post">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                        <fieldset>
                                            <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                                        </fieldset>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                        <fieldset>
                                            <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Account Number*" required="">
                                        </fieldset>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                        <fieldset>
                                            <input name="subject" type="text" id="subject" placeholder="IFSC Code">
                                        </fieldset>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                                        <fieldset>
                                            <input name="subject" type="text" id="subject" placeholder="Drop Message">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4 text-align-center col-sm-12">
                                            <fieldset>
                                            <input name="subject" type="text" id="subject" placeholder="Amount">
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="main-button">Transfer Money</button>
                                        </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                                <!-- PhonePay -->
                                <!-- 
                            <div class="contact-form">
                                <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                                    </fieldset>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Enter Your phonePay Number*" required="">
                                    </fieldset>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="Drop Message">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4 text-align-center col-sm-12">
                                        <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="Amount">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Send Money</button>
                                    </fieldset>
                                    </div>
                                </div>
                                </form>
                            </div> -->

                            <!-- GooglePay -->

                            <!-- <div class="contact-form">
                                <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                                    </fieldset>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Enter Your GooglePay Number*" required="">
                                    </fieldset>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="Drop Message">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4 text-align-center col-sm-12">
                                        <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="Amount">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Send Money</button>
                                    </fieldset>
                                    </div>
                                </div>
                                </form>
                            </div> -->

                            <!-- UPI -->

                            <!-- <div class="contact-form">
                                <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                                    </fieldset>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="UPI Id*" required="">
                                    </fieldset>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="Drop Message">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4 text-align-center col-sm-12 ">
                                        <fieldset>
                                        <input name="subject " type="text" id="subject" placeholder="Amount">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Send Money</button>
                                    </fieldset>
                                    </div>
                                </div>
                                </form>
                            </div> -->
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
export default {
    data() {
        return {
            origin_path: window.location.origin,
        }
    },   
}
</script>