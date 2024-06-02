@extends('layouts.frontend')

@section('content')

<section class="main js-main-slider">
	<div class="main__slider-item" style="background-image: url({{ asset('assets/images/main/bg.jpg') }})">
		<div class="main__bg"></div>
		<div class="container">
			<div class="main__info">
				{{-- <i class="icon-logo main__logo white"></i> --}}
				{{-- <h1 class="main__title">International School of Finance!</h1> --}}
				<img src="{{ asset('assets/images/logo-black.svg') }}" class="main__logo" style="max-width: 150px" alt="logo">
				<p class="main__text">@lang('main.about.info')</p>
				<a href="{{ action('PageController@show', 'obrazovatelnye-granty') }}" class="btn btn--more btn--white">@lang('main.more')<i class="icon-arrow-right btn__arrow"></i></a>
			</div>
		</div>
	</div>
	<div class="main__slider-item" style="background-image: url({{ asset('assets/images/main/bg1.jpg') }})">
		<div class="main__bg"></div>
		<div class="container">
			<div class="main__info">
				{{-- <i class="icon-logo main__logo white"></i> --}}
				{{-- <h1 class="main__title">International School of Finance!</h1> --}}
				<img src="{{ asset('assets/images/logo-black.svg') }}" class="main__logo" style="max-width: 150px" alt="logo">
				<p class="main__text">@lang('main.about.info_2')</p>
				<a href="{{ route('about') }}" class="btn btn--more btn--white">@lang('main.more')<i class="icon-arrow-right btn__arrow"></i></a>
			</div>
		</div>
	</div>
</section>

<section class="mission">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-7">
				<div class="mission__info">
					<h2 class="title">@lang('main.about.title')</h2>
					<p class="mission__text">@lang('main.about.info_second')</p>
					<a href="{{ route('about') }}" class="btn btn--border">@lang('main.about.btn')</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-5">
				<div >
					<iframe class="mission__video" src="{{ isset($video->link) ? $video->link : '' }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="admission center white">
	<div class="container">
		<div class="admission__info">
			<h1 class="admission__title">@lang('main.admis.title')</h1>
{{--			<p class="admission__text">@lang('main.admis.short_text')</p>--}}
			{{-- <a href="{{ route('admission') }}" class="btn btn--border btn--white">@lang('main.admis.btn')</a> --}}
			<a style="margin-top: 15px;" href="https://admission.isft.uz/registration?utm_source=site" class="btn btn--border btn--white" target="_blank">@lang('main.admis.btn')</a>
		</div>
	</div>
</section>

<section class="news">
	<div class="container">
		<div class="row">
			<div class="col-xs-8">
				<h2 class="title">@lang('main.news.title')</h2>
			</div>
			<div class="col-xs-4 text-right">
				<a href="{{ route('news') }}" class="btn btn--more btn">@lang('main.news.all_news')<i class="icon-arrow-right btn__arrow"></i></a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-lg-push-9 col-md-12">
				<div class="news__mailbox">
					<img src="{{ asset('assets/images/mailbox.svg') }}" alt="" class="news__icon">
						<p class="news__subscribe white">@lang('main.subscribe.title')</p>
					{!! Form::open(['action' => 'SubscribeController@post', 'method' => 'POST', 'class' => 'subscribe-form']) !!}
					<div class="news__inputs">
						<input type="text" placeholder="E-mail" class="news__input" name="email">
						<button class="btn btn--full subscribe-button">@lang('main.subscribe.btn')</button>
					</div>
				 {!! Form::close() !!}
				</div>
			</div>
			@foreach($news as $key=>$new)
			@if($key == 0)
			<div class="col-lg-4 col-lg-pull-3 col-md-5 col-sm-12">
				<div class="news__card news__card--big">
					<a href="{{ action('NewsController@show', $new->alias) }}">
						<div class="news__img" style="background-image: url({{ Upload::hasFile('news', $new->id) ? Upload::getFile('news', $new->id) : '' }}); height: 224px"></div>

						<div class="news__info">
							<br>
							{{-- <p class="news-card__date">{{ Date::parse($new->created_at)->format('j F Y,  H:i') }}</p> --}}
							<h3 class="news-card__title mb-md">{!! str_limit($new->title, 60) !!}</h3>
							<p class="news-card__text">{!! str_limit(strip_tags($new->text), 180) !!}</p>
							<br>
							<a href="{{ action('NewsController@show', $new->alias) }}" class="btn btn--more btn--red">@lang('main.more')<i class="icon-arrow-right btn__arrow"></i></a>
						</div>
					</a>
				</div>
			</div>
			@else
			<div class="col-lg-5 col-lg-pull-3 col-md-7 col-sm-12">
				<div class="row">
					<div class="col-xs-12">
						<div class="news__card news__card--sm">
							<a href="{{ action('NewsController@show', $new->alias) }}">
								<div class="news__img news__img--sm" style="background-image: url({{ Upload::hasFile('news', $new->id) ? Upload::getThumbFile('news', $new->id, '262x224') : '' }}); height: 140px"></div>
							</a>
							<div class="news__info news__info--sm">
								{{-- <p class="news-card__date">{{ Date::parse($new->created_at)->format('j F Y,  H:i') }}</p> --}}
								<h3 class="news-card__title news-card__title--sm mb-md">{!! str_limit($new->title, 70) !!}</h3>
								<a href="{{ action('NewsController@show', $new->alias) }}" class="btn btn--more btn--red">@lang('main.more')<i class="icon-arrow-right btn__arrow"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endif
			@endforeach
		</div>
	</div>
</section>

@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}"></script>
<script type="text/javascript">

	var _body = $('body');
	$(document).ready(function() {

		$('.js-main-slider').slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			fade: true,
			arrows: false,
			cssEase: 'linear',
			dots: false,
			autoplaySpeed: 3500,
			autoplay: true
		});

	    var jsForm = $('.subscribe-form'),
	        jsButton = $('.subscribe-button'),
	        email = jsForm.find($("input[name = 'email']"));

	    var inputs = jsForm.find('input');
	        $.each(inputs,function () {
	            $(this).keyup(function() {
	                $(this).parent().hasClass('input--error') ? $(this).parent().removeClass('input--error') : '';
	            });
	        });

	    jsButton.on('click', function(e) {
	        e.preventDefault();
	        jsButton.attr('disabled', true);
	        var data = jsForm.serialize();

	        $.ajax({
	            type: 'POST',
	            url: jsForm.attr('action'),
	            data: data,
	            dataType: 'JSON',

	            success: function(data) {
	                jsButton.attr('disabled', false);
	                if(data.status) {
	                    swal({
	                      title: "@lang('alert.thank')",
	                      text: data.messages,
	                      icon: "success",
	                      button: true
	                    });
	                    email.val('');
	                } else {
	                    swal({
	                      title: data.messages,
	                      icon: "warning",
	                      dangerMode: true,
	                      button: true
	                    });
	                }
	            }
	        });
	    });
	});
</script>
@endsection
