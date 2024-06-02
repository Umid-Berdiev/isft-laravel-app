@extends('layouts.frontend')

@section('content')

<section class="gallery">
	<div class="container">
		<h2 class="title">@lang('main.menu.photo')</h2>
		<div class="row">
			<div class="col-lg-12">
				<div class="masonry">
					@foreach($items as $item)
				    <a href="{{ Upload::hasFile('photogallery', $item->id) ? Upload::getFile('photogallery', $item->id) : '' }}" data-fancybox="filter">
				        <img class="masonry__item" src="{{ Upload::hasFile('photogallery', $item->id) ? Upload::getFile('photogallery', $item->id) : '' }}">				                
				    </a>
				    @endforeach	     
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('assets/js/jquery.fancybox.pack.js') }}"></script>
<script>
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