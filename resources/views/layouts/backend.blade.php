<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="ESYS dev">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>ADMIN PANEL ISFT.UZ</title>
        <!-- App css -->
        <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet" type="text/css" />
        <!-- Select2 css -->
        <link rel="stylesheet" href="{{ asset('backend/css/select2.min.css') }}">
        <!-- Sweet alert -->
        <link href="{{ asset('backend/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
        @yield('styles')
    </head>
    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->                
                <div class="topbar-left">
                    <a href="{{ route('backend.home') }}" class="m-t-0">
                        <img src="{{ asset('backend/images/logo-full.svg') }}" alt="logo" class="logo-brend">
                    </a>
                </div>     
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container-flex-justify-end container-fluid p-0">
                        <nav class="navbar-custom">
                            <ul>                                 
                                <li>
                                    <a href="{{ route('backend.setting') }}">
                                        <i class="fa fa-cogs"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i>
                                    </a>
                                </li>
                                {{-- logout form for some secury reason --}}
                                <form id="logout-form" action="{{ route('logout') }}" 
                                    method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                {{-- end logout form --}}
                            </ul>
                        </nav>
                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="{{ route('backend.home') }}" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('backend.page.index') }}" class="waves-effect">
                                    <i class="mdi mdi-file"></i>
                                    <span>Страницы</span>
                                </a>
                            </li>    
                            <li>
                                <a href="{{ route('backend.news.index') }}" class="waves-effect">
                                    <i class="mdi mdi-newspaper"></i>
                                    <span>Новости</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('backend.photogallery.index') }}" class="waves-effect">
                                    <i class="mdi mdi-camera-enhance"></i>
                                    <span>Фотогалерея</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('backend.faq.index') }}" class="waves-effect">
                                    <i class="mdi mdi-help-box"></i>
                                    <span>FAQ</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('backend.acca.index') }}" class="waves-effect">
                                    <i class="mdi mdi-information-outline mdi-18px"></i>
                                    <span>Об ACCA</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('backend.licenses.index') }}" class="waves-effect">
                                    <i class=" mdi mdi-bookmark-check"></i>
                                    <span>Лицензии и серт..</span>
                                </a>
                            </li>  
                            <li>
                                <a href="{{ route('backend.video.index') }}" class="waves-effect">
                                    <i class="mdi mdi-video"></i>
                                    <span>Видео</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('backend.contact.index') }}" class="waves-effect">
                                    <i class="mdi mdi-comment"></i>
                                    <span>Обратная связь</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('backend.page.results') }}" class="waves-effect">
                                    <i class="mdi mdi-checkbox-marked-circle"></i>
                                    <span>Результаты</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('backend.fm.index') }}" class="waves-effect">
                                    <i class="mdi mdi-image"></i>
                                    <span>Файл менеджер</span>
                                </a>
                            </li>              
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                   <div class="container-fluid">
                       @yield('content')
                   </div>
                </div>
                <!-- content -->

                <footer class="footer text-right">
                    © ESYS. isft.uz
                </footer>
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->
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

        <script type="text/javascript" src="{{ asset('backend/plugins/jquery-knob/excanvas.js') }}"></script>
        <script src="{{ asset('backend/plugins/jquery-knob/jquery.knob.js') }}"></script>
        <!-- App js -->
        <script src="{{ asset('backend/js/jquery.core.js') }}"></script>
        <script src="{{ asset('backend/js/jquery.app.js') }}"></script>
        <script src="{{ asset('backend/plugins/tinymce/tinymce.min.js') }}"></script>

        <!-- Select2 js -->
        <script src="{{ asset('backend/js/select2.full.min.js') }}"></script>
        <script src="{{ asset('backend/js/app.js') }}"></script>
        
        <!-- Sweetalert js -->
        <script src="{{ asset('backend/plugins/sweet-alert/sweetalert2.min.js') }}"></script>
        <script>
            @if(session()->has('success'))
                swal({
                    title: '<i class="fa fa-thumbs-up"></i>',
                    text: '{{ session()->get("success") }}',
                    type: 'success',
                    confirmButtonColor: '#4fa7f3'
                });
            @endif
        </script>
        @yield('scripts')
    </body>
</html>