@extends('admin.layouts.master')
@section('content')
<h3>Setting</h3>
<div class="pd-ltr-20 xs-pd-20-10">
	<div class="min-height-200px">
		<div class="page-header">
			<div class="row">
				<div class="col-md-3 col-sm-12">
					<div class="form-group">
						<label class="time-label">Select Deposit Start Time
						<div class="time-picker"></label>
							<div class="tp-col tp-hr">  
								<img src="https://image.flaticon.com/icons/svg/2089/2089643.svg"  class="tp-up-arrow"/>
								<span class="noselect" tabindex="0*">00</span>
								<img src="https://image.flaticon.com/icons/svg/2089/2089636.svg" class="tp-down-arrow"/>
							</div>
							<div class="tp-col">
								<span>:</span>
							</div>
							<div class="tp-col tp-min">
								<img src="https://image.flaticon.com/icons/svg/2089/2089643.svg"  class="tp-up-arrow"/>
								<span tabindex="0">00</span>
								<img src="https://image.flaticon.com/icons/svg/2089/2089636.svg" class="tp-down-arrow"/>
							</div>
							<div class="tp-col">
								<span class="tp-am-pm">AM</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="form-group">
						<label class="time-label">Select Deposit End Time
						<div class="time-picker"></label>
							<div class="tp-col tp-hr">  
								<img src="https://image.flaticon.com/icons/svg/2089/2089643.svg"  class="tp-up-arrow"/>
								<span class="noselect" tabindex="0*">00</span>
								<img src="https://image.flaticon.com/icons/svg/2089/2089636.svg" class="tp-down-arrow"/>
							</div>
							<div class="tp-col">
								<span>:</span>
							</div>
							<div class="tp-col tp-min">
								<img src="https://image.flaticon.com/icons/svg/2089/2089643.svg"  class="tp-up-arrow"/>
								<span tabindex="0">00</span>
								<img src="https://image.flaticon.com/icons/svg/2089/2089636.svg" class="tp-down-arrow"/>
							</div>
							<div class="tp-col">
								<span class="tp-am-pm">AM</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="form-group">
						<label class="time-label">Select Withdraw Start Time
						<div class="time-picker"></label>
							<div class="tp-col tp-hr">  
								<img src="https://image.flaticon.com/icons/svg/2089/2089643.svg"  class="tp-up-arrow"/>
								<span class="noselect" tabindex="0*">00</span>
								<img src="https://image.flaticon.com/icons/svg/2089/2089636.svg" class="tp-down-arrow"/>
							</div>
							<div class="tp-col">
								<span>:</span>
							</div>
							<div class="tp-col tp-min">
								<img src="https://image.flaticon.com/icons/svg/2089/2089643.svg"  class="tp-up-arrow"/>
								<span tabindex="0">00</span>
								<img src="https://image.flaticon.com/icons/svg/2089/2089636.svg" class="tp-down-arrow"/>
							</div>
							<div class="tp-col">
								<span class="tp-am-pm">AM</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="form-group">
					<label class="time-label">Select Withdraw End Timee
						<div class="time-picker"></label>
							<div class="tp-col tp-hr">  
								<img src="https://image.flaticon.com/icons/svg/2089/2089643.svg"  class="tp-up-arrow"/>
								<span class="noselect" tabindex="0*">00</span>
								<img src="https://image.flaticon.com/icons/svg/2089/2089636.svg" class="tp-down-arrow"/>
							</div>
							<div class="tp-col">
								<span>:</span>
							</div>
							<div class="tp-col tp-min">
								<img src="https://image.flaticon.com/icons/svg/2089/2089643.svg"  class="tp-up-arrow"/>
								<span tabindex="0">00</span>
								<img src="https://image.flaticon.com/icons/svg/2089/2089636.svg" class="tp-down-arrow"/>
							</div>
							<div class="tp-col">
								<span class="tp-am-pm">AM</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<div class="form-group table-responsive">
						<label class="time-label">Select Withdraw Days
						<div ></label>
							<ul class="d-flex ml-4">
								<li class="p-2">
									<input type="radio" id="f-option" name="selector">
									<label for="f-option">Mon</label>										
									<div class="check"></div>
								</li>									
								<li class="p-2">
									<input type="radio" id="s-option" name="selector">
									<label for="s-option">Tus</label>										
									<div class="check"><div class="inside"></div></div>
								</li>									
								<li class="p-2">
									<input type="radio" id="t-option" name="selector">
									<label for="t-option">Wed</label>										
									<div class="check"><div class="inside"></div></div>
								</li>
								<li class="p-2">
									<input type="radio" id="f-option" name="selector">
									<label for="f-option">Thu</label>										
									<div class="check"></div>
								</li>										
								<li class="p-2">
									<input type="radio" id="s-option" name="selector">
									<label for="s-option">Fri</label>									
									<div class="check"><div class="inside"></div></div>
								</li>									
								<li class="p-2">
									<input type="radio" id="t-option" name="selector">
									<label for="t-option">Sat</label>										
									<div class="check"><div class="inside"></div></div>
								</li>
								<li class="p-2">
									<input type="radio" id="t-option" name="selector">
									<label for="t-option">Sun</label>										
									<div class="check"><div class="inside"></div></div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-sm-12">
					<div class="form-group">
						<label class="time-label">Select Withdraw Limits
						<div class="inpp"></label>
							<input type="text" placeholder="Min Limit">								
							<input type="text" placeholder="Max Limit" class="mt-3">
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="form-group">
						<label class="time-label">Deposit Processing Time
						<div class="inppp"></label>
							<input type="text" placeholder="Min Limit">
							<select class="btn btn-sm" style="display: inline;">
								<option disabled="disabled" selected="selected" value="" style="display: none;">Time</option>
								<option value="Hrs">Hrs</option>
								<option value="Min">Min</option>
								<option value="Days">Days</option>
							</select>
							<input type="text" placeholder="Max Limit" class="mt-3">
							<select class="btn btn-sm" style="display: inline;">
								<option disabled="disabled" selected="selected" value="" style="display: none;">Time</option>
								<option value="Hrs">Hrs</option>
								<option value="Min">Min</option>
								<option value="Days">Days</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="form-group">
						<label class="time-label">Withdraw Processing Time
						<div class="inppp"></label>
							<input type="text" placeholder="Min Limit">
								<select class="btn btn-sm" style="display: inline;">
								<option disabled="disabled" selected="selected" value="" style="display: none;">Time</option>
								<option value="Hrs">Hrs</option>
								<option value="Min">Min</option>
								<option value="Days">Days</option>
							</select>
							<input type="text" placeholder="Max Limit" class="mt-3">
								<select class="btn btn-sm" style="display: inline;">
								<option disabled="disabled" selected="selected" value="" style="display: none;">Time</option>
								<option value="Hrs">Hrs</option>
								<option value="Min">Min</option>
								<option value="Days">Days</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="justify-content: center;margin-top: 40px;">
				<a class="btn btn-primary " href="#" role="button" >Submit</a>
			</div>
		</div>
	</div>
</div>
@endsection