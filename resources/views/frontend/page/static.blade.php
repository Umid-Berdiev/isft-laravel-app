@extends('layouts.frontend')

@section('content')

<section class="about pb-layout-xs">
	<div class="container">
		<h2 class="title">{{ $item->title }}</h2>
	</div>
	@if (Upload::hasFile('page', $item->id))
	<img src="{{ Upload::hasFile('page', $item->id) ? Upload::getFile('page', $item->id) : '' }}" class="about__banner" alt="">
	@endif
	<div class="container">
		<div class="redactor-content">
			{!! $item->text !!}
		</div>
	</div>
</section>		
@endsection