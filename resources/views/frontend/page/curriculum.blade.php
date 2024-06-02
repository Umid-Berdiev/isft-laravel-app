@extends('layouts.frontend')

@section('content')

<section class="curriculum">
	<div class="container">
		<h2 class="title">@lang('main.menu.program')</h2>
		@if(LaravelLocalization::getSupportedLocales()[App::getLocale()]['native'] == 'Рус')
			<img src="{{ asset('assets/images/curriculum/ru.svg') }}" alt="curriculum" class="curriculum__img">
		@elseif(LaravelLocalization::getSupportedLocales()[App::getLocale()]['native'] == 'Eng')
			<img src="{{ asset('assets/images/curriculum/en.svg') }}" alt="curriculum" class="curriculum__img">
		@else
			<img src="{{ asset('assets/images/curriculum/uz.svg') }}" alt="curriculum" class="curriculum__img">
		@endif
		<div class="row">
			<div class="col-lg-10 col-lg-push-1">
				<h2 class="title text-red">@lang('curriculum.0')</h2>
				<p class="text-red">@lang('curriculum.1')</p>

				<ul class="curriculum__items">
					<li class="curriculum__item"> @lang('curriculum.2')</li>
					<li class="curriculum__item"> @lang('curriculum.3')</li>
				</ul>

				<p class="curriculum__text">@lang('curriculum.4')</p>

				<p class="text-red">@lang('curriculum.5')</p>

				<ul class="curriculum__items">
					<li class="curriculum__item"> @lang('curriculum.6')</li>
				</ul>

				<h2 class="title text-red">@lang('curriculum.7')</h2>

				<p class="text-red">@lang('curriculum.8')</p>

				<ul class="curriculum__items">
					<li class="curriculum__item"> @lang('curriculum.9')</li>
					<li class="curriculum__item"> @lang('curriculum.10')</li>
				</ul>

				<p class="curriculum__text">@lang('curriculum.11')</p>

				<p class="curriculum__text">@lang('curriculum.12')</p>

				<p class="curriculum__text text-italic text-bold">@lang('curriculum.13')</p>

				<div class="cuuriculum__download">
					<a href="assets/images/curriculum.jpg" class="curriculum__link" target="_blank" download>
						<img src="{{ asset('assets/images/pdf.svg') }}" class="curriculum__icon" alt="">@lang('curriculum.14')
					</a>
					<a href="assets/images/curriculum.jpg" class="curriculum__link" target="_blank" download>
						<img src="{{ asset('assets/images/jpg.svg') }}" class="curriculum__icon" alt="">@lang('curriculum.15')
					</a>
				</div>

			</div>
		</div>

	</div>
</section>

@endsection
@section('scripts')
@endsection