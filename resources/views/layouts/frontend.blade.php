<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.8, minimum-scale=0.8, user-scalable=no" />
    <meta content="@isft" name="twitter:site">
    <meta content="@isft" name="twitter:creator">
    <meta content="ISFT" name="twitter:title">
    <meta content="@lang('main.meta')">
    <title>ISFT instituti</title>

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}" />
    <link rel="apple-touch-icon" sizes="57x57"
        href="{{ asset('assets/images/favicon/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72"
        href="{{ asset('assets/images/favicon/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76"
        href="{{ asset('assets/images/favicon/apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ asset('assets/images/favicon/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120"
        href="{{ asset('assets/images/favicon/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144"
        href="{{ asset('assets/images/favicon/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152"
        href="{{ asset('assets/images/favicon/apple-touch-icon-152x152.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/images/favicon/apple-touch-icon-180x180.png') }}" />

    <link href="{{ asset('assets/css/styles.min.css?=v1.2') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(
                k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(93825267, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/93825267" style="position:absolute; left:-9999px;" alt="" />
        </div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PGKTVBX');
    </script>
    <!-- End Google Tag Manager -->
    <meta name="facebook-domain-verification" content="dx6yyf3wutq7m5ao6kudpbpneibrkf" />

    {{-- pulsing effect --}}
    <style>
        .pulse {
            animation: pulse 2s infinite;
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(0, 123, 255, 0.7);
            }

            /* 33% {
                transform: scale(1);
                box-shadow: 0 0 0 4px rgba(0, 123, 255, 0);
            } */

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 10px rgba(0, 123, 255, 0);
            }

            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(0, 123, 255, 0);
            }
        }
    </style>

    @stack('styles')
</head>

<body
    class="position-relative {{ LaravelLocalization::getSupportedLocales()[App::getLocale()]['native'] == 'Ўзб' ? 'cyrillic' : '' }}">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PGKTVBX" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <section class="navbar" id="navbar">
        <div class="container">
            <div class="navbar__hamburger hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <a href="{{ route('home') }}" class="navbar__logo">
                <img src="{{ asset('assets/images/logo-black.svg') }}" class="logo" alt="logo">
                <img src="{{ asset('assets/images/logo-black.svg') }}" style="height: 55px;" class="flag logo-min"
                    alt="logo">
            </a>

            {{-- main menu --}}
            @include('components.navs.main-menu')

            <div class="navbar__right">
                <ul class="navbar__search">
                    <form action="{{ action('NewsController@index') }}">
                        <input type="text" name="search" value="{{ request()->get('search') }}"
                            class="navbar__input" placeholder="@lang('main.search')">
                    </form>
                </ul>

                <ul class="dropdowns">
                    <li class="dropdown-item ">
                        <p class="dropdown-link">
                            {{ LaravelLocalization::getSupportedLocales()[App::getLocale()]['native'] }}
                            <i class="icon-arrow-down dropdowns__arrow"></i>
                        </p>
                    </li>
                    <div class="dropdown">
                        @foreach (LaravelLocalization::getSupportedLocales() as $code => $lang)
                            @if ($code != LaravelLocalization::getCurrentLocale())
                                {{-- @if ($code != 'en') --}}
                                <li class="dropdown-item"><a class="dropdown-link"
                                        href="{{ $lang == config()->get('app.locale') ? LaravelLocalization::getNonLocalizedURL() : LaravelLocalization::getLocalizedURL($code) }}">{{ $lang['native'] }}</a>
                                </li>
                                {{-- @endif --}}
                            @endif
                        @endforeach
                    </div>
                </ul>
            </div>
        </div>
    </section>

    @yield('content')

    <section class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-2">
                    <a href="{{ route('home') }}" class="footer__logo">
                        <img src="{{ asset('assets/images/logo-black.svg') }}" class="logo" alt="logo">
                        <img src="{{ asset('assets/images/logo-black.svg') }}" style="height: 55px;"
                            class="flag logo-min" alt="logo">
                    </a>
                    <div class="socials">
                        <a href="https://www.instagram.com/isf.tash/" target="_blank"><i
                                class="icon-instagram socials__icon"></i></a>
                        <a href="https://www.fb.com/isftash" target="_blank"><i
                                class="icon-facebook socials__icon"></i></a>
                        <a href="https://t.me/isftash" target="_blank"><i
                                class="icon-telegram socials__icon"></i></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-9">
                    <div class="footer__links">
                        <h2 class="sub-title">@lang('main.footer.link')</h2>
                        <ul class="footer__nav">
                            <li class="footer__item"><a href="{{ route('about') }}"
                                    class="footer__link {{ request()->is('*about*') ? 'footer__link--active' : '' }}">@lang('main.menu.about')</a>
                            </li>
                            {{-- <li class="footer__item"><a href="{{ route('curriculum') }}" class="footer__link {{ request()->is('*curriculum*') ? 'footer__link--active' : '' }}">@lang('main.menu.program')</a></li> --}}
                            <li class="footer__item"><a href="{{ route('admission') }}"
                                    class="footer__link {{ request()->is('*admission*') ? 'footer__link--active' : '' }}">@lang('main.menu.admission')</a>
                            </li>
                            <li class="footer__item"><a href="{{ route('contact') }}"
                                    class="footer__link {{ request()->is('*contact*') ? 'footer__link--active' : '' }}">@lang('main.menu.contact')</a>
                            </li>
                            <li class="footer__item"><a href="{{ route('news') }}"
                                    class="footer__link {{ request()->is('*news*') ? 'footer__link--active' : '' }}">@lang('main.menu.news')</a>
                            </li>
                            {{-- <li class="footer__item"><a href="/students" class="footer__link">@lang('main.menu.student')</a></li> --}}
                            <li class="footer__item"><a href="{{ route('faq') }}"
                                    class="footer__link {{ request()->is('*faq*') ? 'footer__link--active' : '' }}">@lang('main.menu.faq')</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-2 col-xs-10">
                    <h2 class="sub-title">@lang('main.menu.contact')</h2>

                    <div class="contacts__item" style="height:auto; display: flex">
                        <div class="contacts__name">@lang('main.footer.adress')</div>
                        <div class="contacts__info" style="height:auto;">@lang('main.footer.adress_info_short')</div>
                    </div>
                    <div class="contacts__item" style="height:auto; display: flex">
                        <div class="contacts__name">@lang('main.footer.phone')</div>
                        <div class="contacts__info"><a href="tel:+998555083737">+99855 508-37-37</a></div>
                    </div>
                    <div class="contacts__item" style="height:auto; display: flex">
                        <div class="contacts__name">@lang('main.footer.email')</div>
                        <div class="contacts__info"><a href="mailto:info@isft.uz">info@isft.uz</a></div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-10">
                    <h2 class="sub-title">@lang('main.menu.admission_contact')</h2>

                    <div class="contacts__item" style="height:auto; display: flex">
                        <div class="contacts__name">@lang('main.footer.adress')</div>
                        <div class="contacts__info" style="height:auto;">@lang('main.footer.admission_adress_info_short')</div>
                    </div>
                    <div class="contacts__item" style="height:auto; display: flex">
                        <div class="contacts__name">@lang('main.footer.phone')</div>
                        <div class="contacts__info"><a href="tel:+998555061717">+99855 506-17-17</a></div>
                    </div>
                    <div class="contacts__item" style="height:auto; display: flex">
                        <div class="contacts__name">@lang('main.footer.email')</div>
                        <div class="contacts__info"><a href="mailto:info@isft.uz">info@isft.uz</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__bottom">
            <div class="container">
                <p class="footer__item">© 2021 - @lang('main.brand')</p>
            </div>
        </div>
    </section>

    <div style="width: 64px; height: 64px; position: fixed; right: calc(5% - 32px); bottom: 10%;">
        {{-- telegram icon --}}
        <a href="https://t.me/isftqabul24_bot" target="_blank">
            <img class="pulse" src="/assets/images/telegram_logo.png" alt="Telegram icon">
        </a>
    </div>

    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    {{-- call center button --}}
    <script src="https://callback3.onlinepbx.uz/?cb-id=8fe0b09e-59a8-4869-b2ec-32d8b7c64773"></script>
    @yield('scripts')
</body>

</html>
