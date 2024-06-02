@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-xl-4 col-md-6">
        <div class="card-box widget-user">
            <div class="card-box-wrap">
                <div class="card-box-circle bg-warning">
                	<i class="mdi mdi-file font-30"></i>
                </div>
                <div class="card-box-info">
                    <p class="text-muted m-b-5 font-15 text-center">Страницы</p>
                    <h2 class="m-0 text-center">{{ $count['page'] }}</h2>
                </div>
            </div>
        </div>
    </div><!-- end col -->
    <div class="col-xl-4 col-md-6">
        <div class="card-box widget-user">
            <div class="card-box-wrap">
                <div class="card-box-circle bg-primary">
                    <i class="mdi mdi-newspaper font-30"></i>
                </div>
                <div class="card-box-info">
                    <p class="text-muted m-b-5 font-15 text-center">Новости</p>
                    <h2 class="m-0 text-center">{{ $count['news'] }}</h2>
                </div>
            </div>
        </div>
    </div><!-- end col -->
    <div class="col-xl-4 col-md-6">
        <div class="card-box widget-user">
            <div class="card-box-wrap">
                <div class="card-box-circle bg-success">
                    <i class="mdi mdi-camera-enhance font-30"></i>
                </div>
                <div class="card-box-info">
                    <p class="text-muted m-b-5 font-15 text-center">Фотогалерея</p>
                    <h2 class="m-0 text-center">{{ $count['photo'] }}</h2>
                </div>
            </div>
        </div>
    </div><!-- end col -->
    <div class="col-xl-4 col-md-6">
        <div class="card-box widget-user">
            <div class="card-box-wrap">
                <div class="card-box-circle bg-danger">
                    <i class="mdi mdi-comment font-30"></i>
                </div>
                <div class="card-box-info">
                    <p class="text-muted m-b-5 font-15 text-center">Обратная связь</p>
                    <h2 class="m-0 text-center">{{ $count['contact'] }}</h2>
                </div>
            </div>
        </div>
    </div><!-- end col -->
    <div class="col-xl-4 col-md-6">
        <div class="card-box widget-user">
            <div class="card-box-wrap">
                <div class="card-box-circle bg-warning">
                    <i class="mdi mdi-redo font-30"></i>
                </div>
                <div class="card-box-info">
                    <p class="text-muted m-b-5 font-15 text-center">Подписчики</p>
                    <h2 class="m-0 text-center">{{ $count['subscribe'] }}</h2>
                </div>
            </div>
        </div>
    </div><!-- end col -->
</div>
@endsection