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
</head>

<body class="{{ LaravelLocalization::getSupportedLocales()[App::getLocale()]['native'] == 'Ўзб' ? 'cyrillic' : '' }}">
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

            <ul class="navbar__nav nav-up">
                <li class="navbar__item js-navbar-item {{ request()->is('*about*') ? 'active' : '' }}">
                    <a class="navbar__link">
                        <span>
                            <i class="icon-arrow-left navbar-dropdown__icon"></i>
                            @lang('main.menu.about')
                        </span>
                    </a>
                    <div class="navbar-dropdown js-navbar-dropdown">
                        <button class="navbar-dropdown__dismisser js-navbar-dropdown-dismisser"><i
                                class="icon-arrow-right"></i></button>
                        <a href="{{ route('about') }}" class="navbar-dropdown__link">@lang('main.menu.common_info')</a>
                        <a href="{{ route('acca') }}" class="navbar-dropdown__link">@lang('main.menu.about_acca')</a>
                        <a href="{{ action('PageController@show', 'rukovodstvo') }}"
                            class="navbar-dropdown__link">@lang('main.menu.management')</a>
                        <a href="{{ action('PageController@show', 'fakultety') }}"
                            class="navbar-dropdown__link">@lang('main.menu.faculties')</a>
                        <a href="{{ action('PageController@show', 'vakansii') }}"
                            class="navbar-dropdown__link">@lang('main.menu.vacancy')</a>
                        {{-- <a href="#" class="navbar-dropdown__link">@lang('main.menu.teachers')</a> --}}
                        <a href="{{ route('photo') }}" class="navbar-dropdown__link">@lang('main.menu.photo')</a>
                    </div>
                </li>
                <li class="navbar__item js-navbar-item {{ request()->is('*curriculum*') ? 'active' : '' }}">
                    <a class="navbar__link">
                        <span>
                            <i class="icon-arrow-left navbar-dropdown__icon"></i>
                            @lang('main.menu.program')
                        </span>
                    </a>
                    <div class="navbar-dropdown js-navbar-dropdown">
                        <button class="navbar-dropdown__dismisser js-navbar-dropdown-dismisser"><i
                                class="icon-arrow-right"></i></button>
                        <div
                            class="navbar-dropdown__link navbar-dropdown__link--dropdown js-navbar-dropdown-wrap-toggler">
                            <span>
                                <i class="icon-arrow-left navbar-dropdown__icon"></i>
                                @lang('main.menu.international')
                            </span>
                            <div class="navbar-dropdown-wrap js-navbar-dropdown-wrap z-index-2">
                                <button class="navbar-dropdown__dismisser js-navbar-dropdown-wrap-dismisser"><i
                                        class="icon-arrow-right"></i></button>
                                <a href="{{ action('PageController@show', 'obshcheobrazovatelnyy-kurs') }}"
                                    class="navbar-dropdown__link">@lang('main.menu.preparatory_course')</a>
                                <a href="{{ action('PageController@show', 'obshcheobrazovatelnyy-1-yy-kurs-zaochnaya-forma-obucheniya') }}"
                                    class="navbar-dropdown__link">@lang('main.menu.foundation_course')</a>
                                <div
                                    class="navbar-dropdown__link navbar-dropdown__link--dropdown js-navbar-dropdown-wrap-toggler">
                                    <span>
                                        <i class="icon-arrow-left navbar-dropdown__icon"></i>
                                        @lang('main.menu.undergraduate')
                                    </span>
                                    <div class="navbar-dropdown-wrap js-navbar-dropdown-wrap">
                                        <button class="navbar-dropdown__dismisser js-navbar-dropdown-wrap-dismisser"><i
                                                class="icon-arrow-right"></i></button>
                                        <a
                                            href="{{ action('PageController@show', 'osnovnoy-bakalavriat') }}">@lang('main.menu.accounting')</a>
                                        <a
                                            href="{{ action('PageController@show', 'bachelors-in-business-management') }}">@lang('main.menu.management_business')</a>
                                        <a
                                            href="{{ action('PageController@show', 'informatsionnye-tekhnologii-dlya-predprinimatelstva') }}">@lang('main.menu.IT')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="navbar-dropdown__link navbar-dropdown__link--dropdown js-navbar-dropdown-wrap-toggler">
                            <span>
                                <i class="icon-arrow-left navbar-dropdown__icon"></i>
                                @lang('main.menu.humanitarian')
                            </span>
                            <div class="navbar-dropdown-wrap js-navbar-dropdown-wrap z-index-2">
                                <button class="navbar-dropdown__dismisser js-navbar-dropdown-wrap-dismisser"><i
                                        class="icon-arrow-right"></i></button>
                                <a href="{{ action('PageController@show', 'bakalavriat-nachalnogo-obrazovaniya') }}"
                                    class="navbar-dropdown__link">@lang('main.menu.nachalnogo_obrazovaniya')</a>
                                <a href="{{ action('PageController@show', 'bakalavriat-doshkolnogo-obrazovaniya') }}"
                                    class="navbar-dropdown__link">@lang('main.menu.doshkolnogo_obrazovaniya')</a>
                                <a href="{{ action('PageController@show', 'bakalavriat-inostrannogo-yazyka-i-literatury') }}"
                                    class="navbar-dropdown__link">@lang('main.menu.inostrannogo_yazyka')</a>
                                <a href="{{ action('PageController@show', 'bakalavriat-pedagogiki-i-psikhologii') }}"
                                    class="navbar-dropdown__link">@lang('main.menu.pedagogiki_i_psikhologii')</a>
                                <a href="{{ action('PageController@show', 'filologiya-va-tillarni-oqitish') }}"
                                    class="navbar-dropdown__link">@lang('main.menu.filology')</a>
                            </div>
                        </div>
                        <div
                            class="navbar-dropdown__link navbar-dropdown__link--dropdown js-navbar-dropdown-wrap-toggler">
                            <span>
                                <i class="icon-arrow-left navbar-dropdown__icon"></i>
                                @lang('main.menu.financial_economic')
                            </span>
                            <div class="navbar-dropdown-wrap js-navbar-dropdown-wrap z-index-2">
                                <button class="navbar-dropdown__dismisser js-navbar-dropdown-wrap-dismisser"><i
                                        class="icon-arrow-right"></i></button>
                                <a href="{{ action('PageController@show', 'bank-ishi-va-audit') }}"
                                    class="navbar-dropdown__link">@lang('main.menu.bank_and_audit')</a>
                                <a href="{{ action('PageController@show', 'marketing') }}"
                                    class="navbar-dropdown__link">@lang('main.menu.marketing')</a>
                                <a href="{{ action('PageController@show', 'iqtisodiy-xavfsizlik') }}"
                                    class="navbar-dropdown__link">@lang('main.menu.ecomonic_security')</a>
                                <a href="{{ action('PageController@show', 'iqtisodiyot') }}"
                                    class="navbar-dropdown__link">@lang('main.menu.economy')</a>
                            </div>
                        </div>
                        <div
                            class="navbar-dropdown__link navbar-dropdown__link--dropdown js-navbar-dropdown-wrap-toggler">
                            <span>
                                <i class="icon-arrow-left navbar-dropdown__icon"></i>
                                @lang('main.menu.information_technology')
                            </span>
                            <div class="navbar-dropdown-wrap js-navbar-dropdown-wrap z-index-2">
                                <button class="navbar-dropdown__dismisser js-navbar-dropdown-wrap-dismisser"><i
                                        class="icon-arrow-right"></i></button>
                                <a href="{{ action('PageController@show', 'raqamli-iqtisodiyot') }}"
                                    class="navbar-dropdown__link">@lang('main.menu.digital_economy')</a>
                                <a href="{{ action('PageController@show', 'axborot-tizimlari-va-texnologiyalari') }}"
                                    class="navbar-dropdown__link">@lang('main.menu.information_systems')</a>
                            </div>
                        </div>
                        {{-- HIDDEN LINKS
						<a href="#" class="navbar-dropdown__link">@lang('main.menu.lvl_up')</a>
						<a href="#" class="navbar-dropdown__link">@lang('main.menu.career')</a>
						--}}
                    </div>
                </li>
                <li class="navbar__item js-navbar-item {{ request()->is('*issledovanie*') ? 'active' : '' }}">
                    <a class="navbar__link">
                        <span>
                            <i class="icon-arrow-left navbar-dropdown__icon"></i>
                            @lang('main.menu.issledovanie')
                        </span>
                    </a>
                    <div class="navbar-dropdown js-navbar-dropdown">
                        <button class="navbar-dropdown__dismisser js-navbar-dropdown-dismisser"><i
                                class="icon-arrow-right"></i></button>
                        <a href="{{ action('PageController@show', 'issledovanie') }}"
                            class="navbar-dropdown__link">@lang('main.menu.issledovanie')</a>
                        <a href="{{ action('PageController@show', 'isft-jurnal') }}"
                            class="navbar-dropdown__link">@lang('main.menu.isft-jurnal')</a>
                        <a href="https://conference.isft-ilm.uz"
                            class="navbar-dropdown__link">conference.isft-ilm.uz</a>
                        <a href=" https://isft-ilm.uz" class="navbar-dropdown__link">isft-ilm.uz</a>
                    </div>
                </li>
                <li class="navbar__item {{ request()->is('*zhizni-kampusa*') ? 'active' : '' }}">
                    <a href="{{ action('PageController@show', 'zhizni-kampusa') }}">@lang('main.menu.zhizni-kampusa')</a>
                </li>
                <li class="navbar__item js-navbar-item {{ request()->is('*admission*') ? 'active' : '' }}">
                    <a class="navbar__link">
                        <span>
                            <i class="icon-arrow-left navbar-dropdown__icon"></i>
                            @lang('main.menu.admission')
                        </span>
                    </a>
                    <div class="navbar-dropdown js-navbar-dropdown">
                        <button class="navbar-dropdown__dismisser js-navbar-dropdown-dismisser"><i
                                class="icon-arrow-right"></i></button>
                        <a href="{{ route('admission') }}" class="navbar-dropdown__link">@lang('main.menu.admission_schedule')</a>
                        <a href="{{ action('PageController@show', 'obrazovatelnye-granty') }}"
                            class="navbar-dropdown__link">@lang('main.menu.grants')</a>
                        {{-- HIDDEN LINKS
						<a href="#" class="navbar-dropdown__link">@lang('main.menu.admission_winter')</a>
						<a href="#" class="navbar-dropdown__link">@lang('main.menu.open_doors')</a>
						--}}
                    </div>
                </li>
                <li class="navbar__item {{ request()->is('*news*') ? 'active' : '' }}">
                    <a href="{{ route('news') }}" class="navbar__link">@lang('main.menu.news')</a>
                </li>
                {{-- HIDDEN LINKS
				<li class="navbar__item">
					<a href="#" class="navbar__link">@lang('main.menu.partnership')</a>
				</li>
				--}}
                {{--				<li class="navbar__item {{ request()->is('*results*') ? 'active' : '' }}"> --}}
                {{--					<a href="{{ route('results') }}" class="navbar__link">@lang('main.menu.results')</a> --}}
                {{--				</li> --}}
                {{--
                <li class="navbar__item {{ request()->is('*faq*') ? 'active' : '' }}">
                    <a href="{{ action('PageController@show', 'studencheskaya-zhizn') }}">@lang('main.menu.student')</a>
                </li>
                <li class="navbar__item {{ request()->is('*faq*') ? 'active' : '' }}">
                    <a href="{{ action('PageController@show', 'platforma') }}">@lang('main.menu.platform')</a>
                </li>
                <li class="navbar__item {{ request()->is('*faq*') ? 'active' : '' }}">
                    <a href="{{ action('PageController@show', 'pochemu-my') }}">@lang('main.menu.why_us')</a>
                </li>
				--}}
                <li class="navbar__item {{ request()->is('*faq*') ? 'active' : '' }}">
                    <a href="{{ route('faq') }}" class="navbar__link">@lang('main.menu.faq')</a>
                </li>
                <li class="navbar__item {{ request()->is('*koll-tsentr*') ? 'active' : '' }}">
                    <a href="{{ action('PageController@show', 'koll-tsentr') }}"
                        class="navbar__link">@lang('main.menu.contact1')</a>
                </li>
            </ul>
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

    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        (function(a, m, o, c, r, m) {
            a[m] = {
                id: "387973",
                hash: "03a94e1eaec1dac778b7e5afa4e11cc46332f4b772f406e9b2205f0d13296b00",
                locale: "ru",
                inline: false,
                setMeta: function(p) {
                    this.params = (this.params || []).concat([p])
                }
            };
            a[o] = a[o] || function() {
                (a[o].q = a[o].q || []).push(arguments)
            };
            var d = a.document,
                s = d.createElement('script');
            s.async = true;
            s.id = m + '_script';
            s.src = 'https://gso.amocrm.ru/js/button.js?1686473732';
            d.head && d.head.appendChild(s)
        }(window, 0, 'amoSocialButton', 0, 0, 'amo_social_button'));
    </script>
    <script>
        (function(a, m, o, c, r, m) {
            a[m] = {
                id: "387973",
                hash: "03a94e1eaec1dac778b7e5afa4e11cc46332f4b772f406e9b2205f0d13296b00",
                locale: "ru",
                inline: true,
                setMeta: function(p) {
                    this.params = (this.params || []).concat([p])
                }
            };
            a[o] = a[o] || function() {
                (a[o].q = a[o].q || []).push(arguments)
            };
            var d = a.document,
                s = d.createElement('script');
            s.async = true;
            s.id = m + '_script';
            s.src = 'https://gso.amocrm.ru/js/button.js?1686473732';
            d.head && d.head.appendChild(s)
        }(window, 0, 'amoSocialButton', 0, 0, 'amo_social_button'));
    </script>
    <script src="https://callback3.onlinepbx.uz/?cb-id=8fe0b09e-59a8-4869-b2ec-32d8b7c64773"></script>
    @yield('scripts')
</body>

</html>
