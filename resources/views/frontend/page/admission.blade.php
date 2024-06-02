@extends('layouts.frontend')

@section('content')

<section class="curriculum">
	<div class="container">
		{{-- <h2 class="title">@lang('main.admission')</h2> --}}
		{{-- <div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-6">
						<h2 class="title text-red">@lang('admission.title1')</h2>
						<p class="text-red">@lang('admission.types')</p>

						<ul class="curriculum__items">
							<li class="curriculum__item">@lang('admission.type1')</li>
							<li class="curriculum__item">@lang('admission.type2')</li>
							<li class="curriculum__item">@lang('admission.type3')</li>
						</ul>

						<p class="curriculum__text">@lang('admission.text1')</p>

						<p class="text-red">@lang('admission.period')</p>

						<ul class="curriculum__items">
							<li class="curriculum__item">@lang('admission.period1')</li>
							<li class="curriculum__item">@lang('admission.period3')</li>
						</ul>


						<p class="text-red">@lang('admission.time')</p>

						<ul class="curriculum__items">
							<li class="curriculum__item">@lang('admission.time1')</li>
						</ul>

						<p class="text-red">@lang('admission.requirement')</p>

						<ul class="curriculum__items">
							<li class="curriculum__item">@lang('admission.requirement1')</li>
							<li class="curriculum__item">@lang('admission.requirement2')</li>
						</ul>

						<p class="curriculum__text">@lang('admission.text2')</p>

						<ul class="curriculum__items">
							<li class="curriculum__item">@lang('admission.text3')</li>
							<li class="curriculum__item">@lang('admission.text4')</li>
						</ul>

					</div>
					<div class="col-lg-6">
						<div class="admission__image-cont">
							<div class="admission__image" style="background-image: url({{ asset('assets/images/admission1.png') }});"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-6 col-lg-push-6">
						<h2 class="title text-red">@lang('admission.title2')</h2>
						<p class="text-red">@lang('admission.types')</p>

						<ul class="curriculum__items">
							<li class="curriculum__item">@lang('admission.type4')</li>
							<li class="curriculum__item">@lang('admission.type1')</li>
							<li class="curriculum__item">@lang('admission.type2')</li>
							<li class="curriculum__item">@lang('admission.type3')</li>
							<li class="curriculum__item">@lang('admission.type5')</li>
						</ul>

						<p class="curriculum__text">@lang('admission.text5')</p>

						<p class="text-red">@lang('admission.period')</p>

						<ul class="curriculum__items">
							<li class="curriculum__item">@lang('admission.period2')</li>
							<li class="curriculum__item">@lang('admission.period4')</li>
						</ul>


						<p class="text-red">@lang('admission.time')</p>

						<ul class="curriculum__items">
							<li class="curriculum__item">@lang('admission.time2')</li>
						</ul>

						<p class="text-red">@lang('admission.requirement')</p>

						<ul class="curriculum__items">
							<li class="curriculum__item">@lang('admission.requirement3')</li>
							<li class="curriculum__item">@lang('admission.requirement4')</li>
						</ul>

						<p class="curriculum__text">@lang('admission.text6')</p>

					</div>
					<div class="col-lg-6 col-lg-pull-6">
						<div class="admission__image-cont">
							<div class="admission__image" style="background-image: url({{ asset('assets/images/admission2.png') }});"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-6">
						<h2  class="title text-red">@lang('admission.title3')</h2>
						<p class="text-red">@lang('admission.types')</p>

						<ul class="curriculum__items">
							<li class="curriculum__item">@lang('admission.type4')</li>
							<li class="curriculum__item">@lang('admission.type7')</li>
							<li class="curriculum__item">@lang('admission.type2')</li>
							<li class="curriculum__item">@lang('admission.type3')</li>
							<li class="curriculum__item">@lang('admission.type5')</li>
							<li class="curriculum__item">@lang('admission.type6')</li>
						</ul>

						<p class="curriculum__text">@lang('admission.text7')</p>

						<p class="text-red">@lang('admission.period')</p>

						<ul class="curriculum__items">
							<li class="curriculum__item">@lang('admission.period1')</li>
							<li class="curriculum__item">@lang('admission.period4')</li>
						</ul>


						<p class="text-red">@lang('admission.time')</p>

						<ul class="curriculum__items">
							<li class="curriculum__item">- @lang('admission.time2')</li>
						</ul>

						<p class="text-red">@lang('admission.requirement')</p>

						<ul class="curriculum__items">
							<li class="curriculum__item">@lang('admission.requirement5')</li>

							<p class="text-red">@lang('admission.text8')</p>

							<li class="curriculum__item">@lang('admission.requirement6')</li>
							<li class="curriculum__item">@lang('admission.requirement7')</li>
						</ul>

						<p class="curriculum__text">@lang('admission.text2')</p>

						<ul class="curriculum__items">
							<li class="curriculum__item">@lang('admission.text9')</li>
							<li class="curriculum__item">@lang('admission.text10')</li>
						</ul>

					</div>
					<div class="col-lg-6">
						<div class="admission__image-cont">
							<div class="admission__image" style="background-image: url({{ asset('assets/images/admission3.jpg') }});"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-6 col-lg-push-6">
						<h2 class="title text-red">@lang('admission.title4')</h2>
						<p class="text-red">@lang('admission.direction')</p>

						<ul class="curriculum__items">
							<li class="curriculum__item">@lang('admission.direction1')</li>
							<li class="curriculum__item">@lang('admission.direction2')</li>
							<li class="curriculum__item">@lang('admission.direction3')</li>
						</ul>

						<p class="curriculum__text">@lang('admission.text11') </p>

						<p class="text-red">@lang('admission.requirement')</p>

						<ul class="curriculum__items">
							<li class="curriculum__item">@lang('admission.requirement5')</li>
						</ul>


					</div>
					<div class="col-lg-6 col-lg-pull-6">
						<div class="admission__image-cont">
							<div class="admission__image" style="background-image: url({{ asset('assets/images/admission4.jpg') }});"></div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}

		<div class="redactor-content">
			@lang('main.admission_content')
		</div>

		<div class="text-center mt-xl">
			<a href="https://admission.isft.uz/" target="_blank" class="btn btn--border btn--black">@lang('main.admis.btn')</a>
		</div>

	</div>
</section>

@endsection
@section('scripts')
@endsection