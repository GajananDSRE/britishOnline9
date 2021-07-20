<!-- message -->
<marquee behavior="scroll" class="message" direction="left">Redesign BritishOnline9. We are back with so many new feature.</marquee>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators"></ol>
	<div class="carousel-inner"></div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<script src="{{asset('js/jquery-2.1.0.min.js')}}"></script>

<script>
$(document).ready(function() {
	var base_url = window.location.origin;
	$.ajax({
		type: 'GET',
		url: "{{ route('front-slider') }}",
		beforeSend: function() {
			// setting a timeout
			// loading text
		},
		success: function(data) {
			var sliders = data.sliders;
			for (i = 0; i< sliders.length; i++)
			{
				$('<div class="carousel-item"><img class="d-block w-100" src="'+base_url+ '/images/front_slider/'+sliders[i].image+'" alt="'+sliders[i].title+'"><div class="carousel-caption"></div></div>').appendTo('.carousel-inner');
				$('<li data-target="#carouselExampleIndicators" data-slide-to="'+i+'" "></li>').appendTo('.carousel-indicators');
			}
			$('.carousel-item').first().addClass('active');
			$('.carousel-indicators > li').first().addClass('active');
			$('#carouselExampleIndicators').carousel();			
		},
		error: function(xhr) { // if error occured
			console.log(xhr);
		},
	});
});
</script>   