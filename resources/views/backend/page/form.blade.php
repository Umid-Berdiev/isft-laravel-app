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
            <form action="{{ route('backend.page.postform', ['id' => $id]) }}" method="POST" enctype="multipart/form-data">
                @csrf                
                <div class="tab-content">
                    @foreach(config()->get('app.supported_locales') as $i=>$v)
                    <div class="tab-pane fade @if($i==0) show active @endif" id="{{$v}}" role="tabpanel">                                             
                        <div class="form-group">
                            <label for="title">Заголовок</label>
                            <input type="text" name="title_{{$v}}" value="{{ empty($page) ? null : $page->{'title_'.$v} }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Описание</label>
                            <input type="text" name="text_{{$v}}" value="{{ empty($page) ? null : $page->{'text_'.$v} }}" class="js-selector">
                        </div>
                    </div>                        
                    @endforeach
                </div>
                <br>
                <div class="form-group">
                    {!! Form::label('image_page', 'Фото') !!}
                    {!! Form::file('image_page', ['class' => 'form-control']) !!}
                </div>

                @if(!empty($page))
                    <div class="form-group">
                        @if(Upload::hasFile('page', $page->id))
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="{!! Upload::getFile('page', $page->id) !!}" width="50%">
                                </div>
                            </div>
                        @endif
                    </div>
                @endif               
                <div class="form-group text-right m-b-0">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                        Сохранить
                    </button>
                    <a href="{{ route('backend.page.index') }}" class="btn btn-secondary waves-effect waves-light m-l-5">
                        Отменить
                    </a>
                </div>
            </form>
        </div>
    </div><!-- end col -->
</div>
@endsection