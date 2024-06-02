@extends('layouts.frontend')

@section('content')

<section class="contacts">
	<div class="container">
		<h2 class="title">@lang('main.menu.contact')</h2>
		<div class="row">
			<div class="col-md-6">
				<div class="contacts__item">
					<div class="contacts__name">@lang('main.footer.adress')</div>
					<div class="contacts__info">@lang('main.footer.adress_info')</div>
				</div>
				<div class="contacts__item">
					<div class="contacts__name">@lang('main.footer.phone')</div>
					<div class="contacts__info"><a href="tel:+998555063737">+998 55 506 37 37</a></div>
				</div>
				<div class="contacts__item">
					<div class="contacts__name">@lang('main.footer.email')</div>
					<div class="contacts__info"><a href="mailto:info@isft.uz">info@isft.uz</a></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="contacts__map-cont">
	                <div class="contacts__map js-google-map" id="map" data-lng="69.341289" data-lat="41.364890"></div>
	            </div>
			</div>
		</div>

		<h2 class="title">@lang('main.feedback.title')</h2>
		<p class="text">@lang('main.feedback.short_text')</p>
		<br><br>
		
		{!! Form::open(['action' => 'ContactController@post', 'method' => 'POST', 'class' => 'contact-form']) !!}
		@csrf
		<div class="row">
			<div class="col-md-6">
		    	<div class="form-group">
		      		<input class="input" type="text" name="fio" class="form-control" id="contacts-name" placeholder="@lang('main.feedback.fio')">
		      		<label id="fio-error" class="error" for="fio">@lang('main.feedback.fio_error')</label>		      		
		    	</div>

		    	<div class="form-group">
		      		<input class="input" type="email" name="email" class="form-control" id="contacts-mail" placeholder="@lang('main.feedback.email')">	
		      		<label id="email-error" class="error" for="email">@lang('main.feedback.email_error')</label>		      		
		    	</div>

		    	<div class="form-group">
		      		<input class="input" type="text" name="phone" class="form-control" id="contacts-phone" placeholder="@lang('main.feedback.phone')">
		      		<label id="phone-error" class="error" for="phone">@lang('main.feedback.phone_error')</label>		   		      		
		    	</div>
			</div>
			<div class="col-md-6">
		    	<div class="form-group">
					<textarea class="input input--textarea js-text" type="text" name="message" class="form-control textarea" id="contacts-message" placeholder="@lang('main.feedback.comment')"></textarea>
		      		<label id="message-error" class="error" for="message">@lang('main.feedback.comment_error')</label>	
				</div>	
				<button class="btn btn--border float-right contact-button">@lang('main.feedback.send')</button>
			</div>		
		</div>
		{!! Form::close() !!}
	</div>

</section>

@endsection
@section('scripts')

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRAoBx8SKOSdXx4_-14pxDddPkWQfEU8Y&callback=initMap"></script>
<script>/* Google Maps */
	function initMap() {
	    var myLatLng = { lat: 41.364890, lng: 69.341289 };
	    var mapDiv = $('.js-google-map'),
	    stylez = [

	    ],
	    
	    myLatLng = {
	        lat: parseFloat(mapDiv.data('lat')),
	        lng: parseFloat(mapDiv.data('lng'))
	    },
	    
	    map = new google.maps.Map(mapDiv[0], {
	        zoom: 15,
	        center: myLatLng,
	        disableDefaultUI: true
	    }),
	      
	    mapType = new google.maps.StyledMapType(stylez, { name: "Grayscale" });
	    map.mapTypes.set('tehgrayz', mapType);
	    map.setMapTypeId('tehgrayz');

	    var marker = new google.maps.Marker({
	        position: myLatLng,
	        map: map,
	        scale: 0.5
	    });

	    marker.setMap(map);
	};
	
	$(document).ready(function() {
		var form = $('.contact-form'),
			button = $('.contact-button'),
			name = form.find($("input[name = 'fio']")),
			email = form.find($("input[name = 'email']")),
			phone = form.find($("input[name = 'phone']")),
			text = form.find($('.js-text'));

		var inputs = form.find("input");
		$.each(inputs, function() {
			$(this).keyup(function() {
				$(this).parent().hasClass('form-group--error') ? $(this).parent().removeClass('form-group--error') : '';
			});						
		});	
		text.keyup(function() {
			text.parent().hasClass('form-group--error') ? $(this).parent().removeClass('form-group--error') : '';
		});	

		button.on('click', function(e) {
			e.preventDefault();
			button.attr('disabled', true);
			var data = form.serialize();
			// $('.js-recaptcha-error').hide();
			$.ajax({
				type: 'POST',
				url: form.attr('action'),
				data: data,
				dataType: 'JSON',

				success:function(data) {
					button.attr('disabled', false);
					if (data.status) {
						 swal({
                          title: "@lang('alert.thank')",
                          text: data.messages,
                          icon: "success",
                          button: true                   
                        });
                        form.find('input').val('');
						text.val('');
                        window.setTimeout(function(){location.reload()},2000)
					} else {
						$.each(data.messages, function(elem, item){
                            $.each(item, function(i, error) {
                                var input = $('[name='+elem+']');
                                if (elem == 'g-recaptcha-response') {
                                	$('.js-recaptcha-error').show();
                                } else {
                                	input.parent().addClass('form-group--error');
                                }
                                
                            });
                        });
					}
				}
			});
		});
	});
</script>
@endsection