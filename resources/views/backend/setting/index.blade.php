@extends('layouts.backend')

@section('content')
<div class="panel panel-default">
    <div class="header-title">
        Настройки
    </div>
    <div class="card-box">
        {!! Form::open(['files' => true]) !!}
            <div class="form-group">
                {!! Form::label('email', 'E-mail') !!}
                {!! Form::text('email', $user->email, ["class" => "form-control"]) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Новый пароль') !!}
                {!! Form::password('password', ["class" => "form-control"]) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password_confirmation', 'Потвердите пароль пароль') !!}
                {!! Form::password('password_confirmation', ["class" => "form-control"]) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Сохранить', array('class' => 'btn btn-primary')) !!}
                <a href="{{ action('Backend\PageController@dashboard') }}" class="btn btn-default">Отменить</a>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@stop

