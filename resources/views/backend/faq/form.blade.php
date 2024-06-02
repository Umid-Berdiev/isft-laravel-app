@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box">            
            <h4 class="header-title m-t-0 m-b-30">{{ $id == null ? 'Добавить' : 'Редактировать' }}</h4>
            <ul class="nav nav-tabs nav-justified">                
                @foreach(config()->get('app.supported_locales') as $i=>$v)                
                <li class="nav-item">
                    <a href="#{{$v}}" role="tab" data-toggle="tab" style="text-transform: uppercase"
                     aria-controls="{{$v}}" class="nav-link {{ $i==0 ? 'active show' : '' }}">
                     {{$v}}
                    </a>
                </li>
                @endforeach      
            </ul>                    
            {!! Form::open(['files' => true]) !!}  
                <div class="tab-content">
                    @foreach(config()->get('app.supported_locales') as $i=>$v)
                    <div class="tab-pane fade @if($i==0) show active @endif" id="{{$v}}" role="tabpanel">                                             
                        <div class="form-group">
                            {!! Form::label('title', 'Заголовок') !!}
                            {!! Form::text('title_'.$v, empty($item) ? null : $item->{'title_'.$v}, ["class" => "form-control"]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('text', 'Техт') !!}
                            {!! Form::text('text_'.$v, empty($item) ? null : $item->{'text_'.$v}, ["class" => "form-control js-selector"]) !!}
                        </div>
                    </div>                        
                    @endforeach
                </div>
                <div class="form-group text-right m-b-0">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                        Сохранить
                    </button>
                    <a href="{{ route('backend.faq.index') }}" class="btn btn-secondary waves-effect waves-light m-l-5">
                        Отменить
                    </a>
                </div>
            {!! Form::close() !!}
        </div>
    </div><!-- end col -->
</div>
@endsection
@section('scripts')

@endsection