@extends('admin.layouts.master')
@section('content')
<div class="pd-ltr-20">
	<div class="title pb-20">
		<h2 class="h3 mb-0">Support</h2>
	</div>       
                    
	<!-- Striped table start -->
	<section class="section" id="contact-us">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12">
					<div id="map">
						<iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<div class="contact-form justify-content-center">
						<form id="contact" action="" method="post">
							<span class="container">How To Get Id?
								<input type="radio" checked="" name="radio">
								<span class="checkmark"></span>
							</span>
							<span class="container">How To Withdraw?
								<input type="radio" name="radio">
								<span class="checkmark"></span>
							</span>
							<span class="container">How To Deposit?
								<input type="radio" name="radio">
								<span class="checkmark"></span>
							</span>
							<span class="container">How To Wallet To Wallet Transfer ?
								<input type="radio" name="radio">
								<span class="checkmark"></span>
							</span>
							<span class="container">How To Get Statement
								<input type="radio" name="radio">
								<span class="checkmark"></span>
							</span>
							<span class="container">How To Get Offer ?
								<input type="radio" name="radio">
								<span class="checkmark"></span>
							</span>
							<span class="container">How To Get Multipal Id ?
								<input type="radio" name="radio">
								<span class="checkmark"></span>
							</span>
							<span class="container">How To Change Password ?
								<input type="radio" name="radio">
								<span class="checkmark"></span>
							</span>
							<span class="container"> Other Support
								<input type="radio" name="radio">
								<span class="checkmark"></span>
							</span>
							<div class="col-lg-12">
								<fieldset>
									<textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
								</fieldset>
							</div>
							<div class="col-lg-12">
								<fieldset>
									<button type="submit" id="form-submit" class="main-button">Send Message</button>
								</fieldset>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Striped table End -->
</div>
@endsection