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
                @lang('main.menu.bakalavriat')
            </span>
        </a>
        <div class="navbar-dropdown js-navbar-dropdown">
            <button class="navbar-dropdown__dismisser js-navbar-dropdown-dismisser"><i
                    class="icon-arrow-right"></i></button>
            <div class="navbar-dropdown__link navbar-dropdown__link--dropdown js-navbar-dropdown-wrap-toggler">
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
                    <div class="navbar-dropdown__link navbar-dropdown__link--dropdown js-navbar-dropdown-wrap-toggler">
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
                            <a
                                href="{{ action('PageController@show', 'mezhdunarodnye-otnosheniya') }}">@lang('main.menu.international-relations')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-dropdown__link navbar-dropdown__link--dropdown js-navbar-dropdown-wrap-toggler">
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
                    {{-- <a href="{{ action('PageController@show', 'bakalavriat-pedagogiki-i-psikhologii') }}"
                        class="navbar-dropdown__link">@lang('main.menu.pedagogiki_i_psikhologii')</a> --}}
                    <a href="{{ action('PageController@show', 'pedagogika') }}"
                        class="navbar-dropdown__link">@lang('main.menu.pedagogy')</a>
                    <a href="{{ action('PageController@show', 'psikhologiya') }}"
                        class="navbar-dropdown__link">@lang('main.menu.psychology')</a>
                    <a href="{{ action('PageController@show', 'filologiya-va-tillarni-oqitish') }}"
                        class="navbar-dropdown__link">@lang('main.menu.filology')</a>
                </div>
            </div>
            <div class="navbar-dropdown__link navbar-dropdown__link--dropdown js-navbar-dropdown-wrap-toggler">
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
            <div class="navbar-dropdown__link navbar-dropdown__link--dropdown js-navbar-dropdown-wrap-toggler">
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
    <li class="navbar__item js-navbar-item {{ request()->is('*curriculum*') ? 'active' : '' }}">
        <a class="navbar__link">
            <span>
                <i class="icon-arrow-left navbar-dropdown__icon"></i>
                @lang('main.menu.magistratura')
            </span>
        </a>
        <div class="navbar-dropdown js-navbar-dropdown">
            <button class="navbar-dropdown__dismisser js-navbar-dropdown-dismisser"><i
                    class="icon-arrow-right"></i></button>
            <a href="{{ action('PageController@show', 'bukhgalterskiy-uchet') }}"
                class="navbar-dropdown__link">@lang('main.menu.accounting')</a>
            <a href="{{ action('PageController@show', 'inostrannyy-yazyk-i-literatura') }}"
                class="navbar-dropdown__link">@lang('main.menu.foreign_language_and_literature')</a>
            <a href="{{ action('PageController@show', 'pedagogika-i-psikhologiya') }}"
                class="navbar-dropdown__link">@lang('main.menu.pedagogy_and_psychology')</a>
            <a href="{{ action('PageController@show', 'gosudarstvennyy-finansovyy-kontrol-i-audit') }}"
                class="navbar-dropdown__link">@lang('main.menu.state-financial-control-and-audit')</a>
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
            <a href="https://conference.isft-ilm.uz" class="navbar-dropdown__link">conference.isft-ilm.uz</a>
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
    <li class="navbar__item {{ request()->is('*faq*') ? 'active' : '' }}">
        <a href="{{ route('faq') }}" class="navbar__link">@lang('main.menu.faq')</a>
    </li>
    <li class="navbar__item {{ request()->is('*koll-tsentr*') ? 'active' : '' }}">
        <a href="{{ action('PageController@show', 'koll-tsentr') }}" class="navbar__link">@lang('main.menu.contact1')</a>
    </li>
</ul>
