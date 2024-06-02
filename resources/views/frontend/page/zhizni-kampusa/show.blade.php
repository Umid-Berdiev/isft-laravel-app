@extends('layouts.frontend')

@section('content')
    <section class="news">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="news-card">
                        <div class="news-card__thumb"
                            style="background-image: url({{ Upload::hasFile('news_background', $item->id) ? Upload::getFile('news_background', $item->id) : '' }});">
                        </div>
                        <div class="news-card__info">
                            {{-- <p class="news-card__date">{{ Date::parse($item->created_at)->format('j F Y,  H:i') }}</p> --}}
                            <h3 class="news-card__title">{{ $item->title }}</h3>
                            <div class="redactor-content">
                                {!! $item->text !!}
                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($others as $key => $other)
                    @if ($key == count($others) - 1)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="news-card">
                            @else
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="news-card b-b">
                    @endif
                    <a href="{{ action('PageController@showZhizniKampusa', $other->id) }}">
                        <div class="news-card__img"
                            style="background-image: url({{ Upload::hasFile('news', $other->id) ? Upload::getThumbFile('news', $other->id, '262x224') : '' }});">
                        </div>
                        <div class="news-card__info news-card__info--low-height news-card__info--sidebar">
                            {{-- <p class="news-card__date">{{ Date::parse($other->created_at)->format('j F Y,  H:i') }}</p> --}}
                            <h3 class="news-card__title news-card__title--sm">{!! str_limit($other->title, 70) !!}</h3>
                            <a href="{{ action('PageController@showZhizniKampusa', $other->id) }}"
                                class="btn btn--more btn--red news-card__btn">@lang('main.more')<i
                                    class="icon-arrow-right btn__arrow"></i></a>
                        </div>
                    </a>
            </div>
        </div>
        @endforeach
        </div>
        </div>
    </section>
@endsection
@section('scripts')
@endsection
