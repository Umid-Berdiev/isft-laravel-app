<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <title>ISFT.UZ</title>
        <!-- App css -->
        <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{ asset('backend/js/modernizr.min.js') }}"></script>
    </head>
    <body>
        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            {{-- <div class="text-center">
                 <img src="{{ asset('backend/images/logo-full.svg') }}" alt="logo" class="logo-brend">
            </div> --}}
            <div class="m-t-20 card-box">
                <div class="text-center">
                     <img src="{{ asset('backend/images/logo-full.svg') }}" alt="logo" class="logo-brend logo-brend--width">
                </div>
                <div class="p-10">
                    <form class="form-horizontal m-t-20" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input name="email" value="{{ old('email') }}" class="form-control" type="text" placeholder="Электронная почта">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input name="password" class="form-control" type="password" placeholder="Пароль">
                            </div>
                        </div>

                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-green btn-bordred btn-block waves-effect waves-light" type="submit">Войти</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end card-box-->
        </div>
        <!-- end wrapper page -->
        <!-- jQuery  -->
        <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/js/popper.min.js') }}"></script>
        <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('backend/js/detect.js') }}"></script>
        <script src="{{ asset('backend/js/fastclick.js') }}"></script>
        <script src="{{ asset('backend/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('backend/js/waves.js') }}"></script>
        <script src="{{ asset('backend/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('backend/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('backend/js/jquery.scrollTo.min.js') }}"></script>
        <!-- App js -->
        <script src="{{ asset('backend/js/jquery.core.js') }}"></script>
        <script src="{{ asset('backend/js/jquery.app.js') }}"></script>
    </body>
</html>