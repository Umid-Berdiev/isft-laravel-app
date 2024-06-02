@component('mail::layout')

{{-- Header --}}
@slot('header')
    @component('mail::header', ['url' => 'http://isft.uz'])
        ISFT.UZ
    @endcomponent
@endslot

<h2>{{$data->title}}</h2>
<p>{!! str_limit($data->text, 100) !!}</p>
@component('mail::button', ['url' => route('news.show', ['alias' => $data->alias])])
    Подробнее
@endcomponent

{{-- Footer --}}
@slot('footer')
    @component('mail::footer')
    Спасибо,<br>
        {{ config('app.name') }}
    @endcomponent
@endslot

@endcomponent
