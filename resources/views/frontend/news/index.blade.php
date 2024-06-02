@extends('layouts.frontend')

@section('content')

<section class="news">
	<div class="container">
		<h2 class="title">@lang('main.menu.news')</h2>
		<div class="row">
			@forelse($items as $key=>$item)
			@if($key == 0)
				<div class="col-lg-6 col-md-4 col-sm-6">
					<div class="news-card">
						<a href="{{ action('NewsController@show', $item->alias) }}">
                            <div class="news-card__img" style="background-image: url({{ Upload::hasFile('news', $item->id) ? Upload::getThumbFile('news', $item->id, '555x224') : '' }});"></div>                            
						</a>
						<div class="news-card__info news-card__info--low-height">
							{{-- <p class="news-card__date">{{ Date::parse($item->created_at)->format('j F Y,  H:i') }}</p> --}}
							<h3 class="news-card__title">{!! str_limit($item->title, 50) !!}</h3>
							<div class="news-card__text">{!! str_limit(strip_tags($item->text), 180) !!}</div>
							<a href="{{ action('NewsController@show', $item->alias) }}" class="btn btn--more btn--red news-card__btn">@lang('main.more')<i class="icon-arrow-right btn__arrow"></i></a>
						</div>
					</div>
				</div>
			@else	
				<div class="col-lg-3 col-md-4 col-sm-6">
					<div class="news-card">
						<a href="{{ action('NewsController@show', $item->alias) }}">
							<div class="news-card__img" style="background-image: url({{ Upload::hasFile('news', $item->id) ? Upload::getThumbFile('news', $item->id, '262x224') : '' }});"></div>
						</a>
						<div class="news-card__info news-card__info--low-height">
							{{-- <p class="news-card__date">{{ Date::parse($item->created_at)->format('j F Y,  H:i') }}</p> --}}
							<h3 class="news-card__title news-card__title--sm">{!! str_limit($item->title, 70) !!}</h3>
							<a href="{{ action('NewsController@show', $item->alias) }}" class="btn btn--more btn--red news-card__btn">@lang('main.more')<i class="icon-arrow-right btn__arrow"></i></a>
						</div>
					</div>
				</div>
			@endif	
			@empty
				<h1 class="title text-center text-red">@lang('main.news.no_news')</h1>
			@endforelse	
		</div>
	</div>
</section>

@endsection
@section('scripts')
@endsection