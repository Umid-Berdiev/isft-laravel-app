@extends('layouts.frontend')

@section('content')

<section class="py-layout-xs bg-white">
		<div class="container">

			{{--<h2 class="title mb-layout-xs">@lang('main.menu.management')</h2>
			
			<div style="background: #f0f0f0; height: 150px; margin-bottom: 50px"></div>--}}

			<h2 class="title mb-lg">@lang('main.mail_director')</h2>
			{!! Form::open(['action' => 'ManagementController@post', 'method' => 'POST', 'class' => 'contact-form']) !!}
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
							<textarea class="input input--textarea js-text" type="text" name="message" class="form-control textarea" id="contacts-message" placeholder="@lang('main.feedback.question')"></textarea>
				      		<label id="message-error" class="error" for="message">@lang('main.feedback.comment_error')</label>	
						</div>	
						<button type="submit" class="btn btn--border float-right contact-button">@lang('main.feedback.send')</button>
					</div>		
				</div>
			{!! Form::close() !!}
		</div>	<!-- /.container -->
	</section>

@endsection
@section('scripts')
	<script>
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

			form.on('submit', function(e) {
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