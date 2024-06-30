@extends('layouts.frontend')

@push('styles')
    <style>
        .text-with-hover {
            color: #000;
            text-decoration: underline;
        }

        .text-with-hover:hover {
            color: #00f;
        }
    </style>
@endpush

@section('content')
    <section class="curriculum">
        <div class="container">
            <div class="redactor-content">
                @lang('main.admission_content')
            </div>

            <div class="text-center mt-xl">
                <a href="https://admission.isft.uz/" target="_blank" class="btn btn--border btn--black">@lang('main.admis.btn')</a>
            </div>

            <div class="mt-xl">
                <h3>Foydali havolalar:</h3>
                <ul class="d-flex flex-column mt-lg">
                    <li>
                        <a class="text-with-hover" href="/files/ISFT_instituti_magistratura_to‘g‘risida_nizom.docx"
                            download>ISFT institutida ikkinchi va
                            undan keyingi oliy
                            ta’limni olish tartibi to‘g‘risida nizom</a>
                    </li>
                    <li class="mt-lg">
                        <a class="text-with-hover"
                            href="/files/ISFT_institutida_ikkinchi_va_undan_keyingi_oliy_ta’limni_olish_tartibi_to‘g‘risida_nizom.docx"
                            download>ISFT instituti magistratura
                            to‘g‘risida nizom</a>
                    </li>
                    <li class="mt-lg">
                        <a class="text-with-hover" href="/files/O_qishni_ko_chirish_bo_yicha_reglament.docx"
                            download>O'qishni ko'chirish bo'yicha
                            reglament</a>
                    </li>
                    <li class="mt-lg">
                        <a class="text-with-hover" href="/files/Reglament_2024.docx" download>Reglament 2024</a>
                    </li>
                </ul>
            </div>

        </div>
    </section>
@endsection
@section('scripts')
@endsection
