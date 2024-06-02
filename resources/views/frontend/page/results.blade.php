@extends('layouts.frontend')

@section('content')

<section class="results pb-layout-xs">
	<div class="container">
		<h2 class="title pb-sm">@lang('main.menu.results')</h2>
		<h4 class="sub-title mb-md">@lang('main.results.input_id'):</h4>

		<div class="results-row">
			<div class="results-col">
				<p class="results-col__title">ID</p>
				<p class="results-col__text">
					<input type="text" class="js-input-id results__input" placeholder="@lang('main.results.enter')"
						data-path="{{ asset('storage/js/test-answers.json') }}">
				</p>
			</div>
			<div class="results-col">
				<p class="results-col__title">@lang('main.results.score')</p>
					<p class="results-col__text js-score">...</p>
			</div>
			<div class="results-col">
				<p class="results-col__title">@lang('main.results.name')</p>
					<p class="results-col__text js-name">...</p>
			</div>
			<div class="results-col">
				<p class="results-col__title">@lang('main.results.surname')</p>
					<p class="results-col__text js-surname">...</p>
			</div>
		</div>	<!-- /.results-row -->
		
		<div class="results-marks">
			<div class="results-mark results-mark--success">
				<span></span>
				<p>Success</p>
			</div>

			<div class="results-mark results-mark--fail">
				<span></span>
				<p>Fail</p>
			</div>
		</div>	<!-- /.results-marks -->
		
		<div class="results-info">
			{{-- <p class="pt-xs lh">
				@lang('main.results.failed', ['link' => '
				<a href="'.action('PageController@show', 'podgotovitelnyy-kurs').'" 
					class="text-red text-underline"
					target="_blank">
						'.trans('main.results.failed_prefoundation').'
				</a>']).
				<span style="font-weight: bold">@lang('main.results.failed_for_foundation')</span>
			</p> --}}
			<p class="pt-xl lh">
				@lang('main.results.details')
				<a href="tel:+998781473737" class="text-underline">+99878 1473737</a>
			</p>

			<p class="text pt-xl">
				<span class="text-danger text-lg">*</span>
				@lang('main.results.warn')
			</p>
		</div>	<!-- /.results-info -->
	</div>
</section>		
@endsection

@section('scripts')
	<script>
		var results = null,
			jsonPath = $('.js-input-id').data('path'),
			score = $('.js-score'),
			nameInput = $('.js-name'),
			surnameInput = $('.js-surname'),
			isFound = false;


        $(document).ready(function() { 
			$.ajax({url: jsonPath,  
	            success: function(response) { 
	            	results = response;
	            }
	        });
		})

		$('.js-input-id').on('input', function() {
			var id = $(this).val();

		    for (var i = 0; i < results.length; i++){
		       var o = results[i];
		       if (o.ID == id) {

		       		if (isNaN(o.Rate)) {
			       		if (o.Rate == 'fail') {
			       			score.text('FAIL');
			       			score.removeClass('bg-success');
			       			score.addClass('bg-danger');
			       		}
			       		else {
			       			score.text('PASS');
			       			score.removeClass('bg-danger');
			       			score.addClass('bg-success');
			       		}
		       		}
		       		else {
			       		var roundedScore = parseFloat(Math.round(o.Rate * 100) / 100).toFixed(1);

			       		score.text(roundedScore);
			       		if (roundedScore < 49.5) {
			       			score.removeClass('bg-success');
			       			score.addClass('bg-danger');
			       		}
			       		else {
			       			score.removeClass('bg-danger');
			       			score.addClass('bg-success');
			       		}
		       		}

		       		nameInput.text(o.Name);
		       		surnameInput.text(o.Surname);
		       		isFound = true;
		       		return ;
		       }
		       else {
		       		if (isFound) {
		       			score.text('--');
		       			score.removeClass('bg-danger');
		       			score.removeClass('bg-success');
		       			score.addClass('bg-lightgray');
		       			nameInput.text('--');
		       			surnameInput.text('--');
		       			isFound = false;
		       		}
		       }
		    }

		});
	</script>
@endsection