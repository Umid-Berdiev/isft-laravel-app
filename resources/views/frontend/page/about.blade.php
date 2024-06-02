@extends('layouts.frontend')

@section('content')
<section class="about">
	<div class="container">
		<h2 class="title">@lang('main.menu.about')</h2>

		<div class="about__info">
			<div class="row about__block">
				<div class="col-md-6">
					<img src="{{ asset('assets/images/logo-black.svg') }}" style="width: 30%;" alt="" class="about__img">
					<p class="about__text ">@lang('about.text1')</p>
				</div>
				<div class="col-md-6">
					<p class="about__text ">@lang('about.text2')</p>
				</div>
			</div>
			<div class="row about__block">
				<div class="col-md-6">
					<h2 class="title">@lang('about.title1')</h2>
					<p class="about__text">@lang('about.text3')</p>
				</div>
				<div class="col-md-6">
					<img src="{{ asset('assets/images/about1.jpg') }}" alt="" class="about__img ">
				</div>
			</div>
			<div class="row about__block">
				<div class="col-md-6 col-md-push-6">
					<h2 class="title">@lang('about.title2')</h2>

					<p class="about__text">@lang('about.text4')</p>
				</div>
				<div class="col-md-6 col-md-pull-6">
					<img src="{{ asset('assets/images/about2.jpg') }}" alt="" class="about__img ">
				</div>
			</div>
			<div class="row about__block">
				<div class="col-md-6">
					<h2 class="title">@lang('about.title3')</h2>
					<p class="about__text">@lang('about.text5')</p>
				</div>
				<div class="col-md-6">
					<img src="{{ asset('assets/images/about3.jpg') }}" alt="" class="about__img">
				</div>
			</div>

			<div class="row about__block">
				<div class="col-md-6 col-md-push-6">
					<h2 class="title">@lang('about.title4')</h2>

					<ul class="about__list">
						<li class="about__item">@lang('about.item1')</li>
						<li class="about__item">@lang('about.item2')</li>
						<li class="about__item">@lang('about.item3')</li>
						<li class="about__item">@lang('about.item4')</li>
						<li class="about__item">@lang('about.item5')</li>
						<li class="about__item">@lang('about.item6')</li>
					</ul>
				</div>
				<div class="col-md-6 col-md-pull-6">
					<img src="{{ asset('assets/images/about4.jpg') }}" alt="" class="about__img">
				</div>
			</div>
		</div>

	</div>
	{{--<div class="about__rector">
		<div class="container">
			<div class="col-lg-6 col-lg-push-1">
				<h2 class="title">Послание ректора</h2>
				<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh eusimod tincidunt ut laoreet dolore magna aliquam erat volutpat eum iriure dolor in hendrerit.</p>
				<p class="text">Investigationes demonstraverunt lectores legere me lius quod ii legunt seapius. Claritas est etiam processus, qui sequitur mutationem consuetudeum lectorum. Mirum est nunc putamus parum claram, anteposuerit litterarum formas</p>
				<br><br>
				<p class="text-italic text-bold">Consuetudium lectorum mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas.</p>
			</div>
			<div class="col-lg-6 col-lg-push-1">
				<img class="about__rector-img" src="{{ asset('assets/images/rector.png') }}" alt="">
			</div>
		</div>
	</div>--}}
</section>

<section class="admission center white">
	<div class="container">
		<div class="admission__info">
			<h1 class="admission__title mb-lg">@lang('main.admis.title_2')</h1>
			<a href="{{ action('ManagementController@index') }}" class="btn btn--border btn--white">@lang('main.admis.btn_2')</a>
		</div>
	</div>
</section>

<section class="license">
	<div class="license__left"></div>
	<div class="license__right"></div>
	<h2 class="title text-center relative z-index-3">@lang('main.licenses')</h2>
	<div class="license__slider  text-center">
        @foreach($sliders as $slider)
        <div class="license__content">
	        <a href="{{ Upload::hasFile('licenses', $slider->id) ? Upload::getFile('licenses', $slider->id) : '' }}" data-fancybox="filter">
        		<img src="{{ Upload::hasFile('licenses', $slider->id) ? Upload::getFile('licenses', $slider->id) : '' }}" class="license__img" alt="">
        	</a>
        </div>
        @endforeach
    </div>
    @if($sliders->count() > 4)
    <div class="js-license-slider-arrows license__arrows">
		<button type="button" class="license-left license__arrows--icon">
			<i class="icon-slider-left"></i>
		</button>
		<button type="button" class="license-right license__arrows--icon">
			<i class="icon-slider-right"></i>
		</button>
	</div>
    @endif
</section>
@endsection
@section('scripts')
	<script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.fancybox.pack.js') }}"></script>
	<script>
	$(document).ready(function(){
        $('.license__slider').slick({
            arrows: true,
            infinite: true,
            speed: 500,
            slidesToShow: 3,
            adaptiveHeight: true,
            autoplay:false,
            centerMode: true,
            centerPadding: '190px',
            variableWidth: false,
            appendArrows: $('.js-license-slider-arrows'),
            prevArrow: $(".license-left"),
            nextArrow: $(".license-right"),
            responsive: [
              {
                  breakpoint: 1200,
                  settings: {
                      centerPadding: '50px',
                      slidesToShow: 3,
                      slidesToScroll: 1
                  }
              },
              {
                  breakpoint: 992,
                  settings: {
                      centerMode: false,
                      slidesToShow: 3,
                      slidesToScroll: 1
                  }
              },
              {
                  breakpoint: 768,
                  settings: {
                      centerMode: false,
                      slidesToShow: 1,
                      slidesToScroll: 1
                  }
              }
          ]
       });
    });

    // fancybox
	var $visible, val = this.value;

    if (val) {
        $visible = $('[data-fancybox="filter"]').hide().filter('.' + val);

    } else {
        $visible = $('[data-fancybox="filter"]');
    }

    $visible.show();
</script>
@endsection
