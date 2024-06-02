@extends('layouts.frontend')

@section('content')

<section class="faq">
		<div class="container">

			<h2 class="title mb-layout-xs">@lang('main.menu.about_acca')</h2>

			<div class="row">
				
				<div class="col-sm-4 js-sticky-nav">
					<div class="faq__nav js-faq-nav">
						@foreach($items as $item)
							<a href="#{{ $item->id }}" class="faq__nav-link active">{{ $item->title }}</a>
						@endforeach
					</div>
				</div>	<!-- /.col-md-4 -->

				<div class="col-sm-8">
					<div class="faq__content redactor-content">
						@foreach($items as $item)
						<div class="faq__content-item js-section" id="{{ $item->id }}">
							<p class="font-semibold text-red pb-xs">{{ $item->title }}</p>
							<p>{!! $item->text !!}</p>
						</div>	<!-- /.faq__content-item -->
						@endforeach
					</div>
				</div>	<!-- /.col-md-4 -->

			</div>	<!-- /.row -->

		</div>	<!-- /.container -->
	</section>

@endsection
@section('scripts')
	<script type="text/javascript" src="{{ asset('assets/js/sticky-kit.min.js') }}"></script>
	<script>
		var $window = $(window),
			nav = $('.js-faq-nav'),
			nav_height = nav.outerHeight(),
			section = $('.js-section');

		$(document).ready(function() {
			$('.js-sticky-nav').trigger('scroll');
		})

	    // make sidebar sticky
	    function makeSticky() {
	      $('.js-sticky-nav').stick_in_parent({
	        offset_top: 120
	      })
	      .on('sticky_kit:bottom', function(e) {
	          $(this).parent().css('position', 'static');
	      })
	      .on('sticky_kit:unbottom', function(e) {
	          $(this).parent().css('position', 'relative');
	      });
	    }

	    makeSticky();

	    // add active class to relevant section on scroll
	    $window.on('scroll', function () {
	      var cur_pos = $(this).scrollTop();
	      
	      section.each(function() {
	        var top = $(this).offset().top - 390,
	        bottom = top + $(this).outerHeight();

	        if (cur_pos >= top && cur_pos <= bottom) {
	          nav.find('a').removeClass('active');
	          section.removeClass('active');

	          $(this).addClass('active');
	          nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
	        }
	      });
	    });

	    // scroll window to relevant sectio
	    nav.find('a').on('click', function () {
	      var $el = $(this)
	      , id = $el.attr('href');

	      $('html, body').animate({
	      scrollTop: $(id).offset().top - 320
	      }, 500);

	      return false;
	    });

	    // remove or add sticky according to window width
	    function removeStickyIfMobile() {
	      var wWidth = $window.width();

	      if (wWidth < 768) {
	        $('.js-sticky-nav').trigger('sticky_kit:detach');
	      }
	      else {
	        makeSticky();
	      }
	    }

	    removeStickyIfMobile();

	    $window.resize(function() {
	      removeStickyIfMobile();
	    });
	</script>
@endsection