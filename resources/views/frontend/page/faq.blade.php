@extends('layouts.frontend')

@section('content')

<section class="faq">
		<div class="container">

			<h2 class="title mb-layout-xs">FAQ</h2>

			<div class="row">
				
				<div class="col-sm-4 js-sticky-nav">
					<div class="faq__nav js-faq-nav">
						<a href="#1" class="faq__nav-link">Кто мы? Что такое ISF?</a>
						<a href="#2" class="faq__nav-link">Что такое АССА?</a>
						<a href="#3" class="faq__nav-link">Какого признание АССА в мире?</a>
						<a href="#4" class="faq__nav-link">Какие дипломы и специализацию я получу после окончания?</a>
						<a href="#5" class="faq__nav-link">Признается ли данный диплом (от Оксфорд Брукс) в Узбекистане?</a>
						<a href="#6" class="faq__nav-link">Признают ли диплом Оксфорд Брукс на международной арене? Смогу ли я работать за границей после окончания?</a>
						<a href="#7" class="faq__nav-link">Является ли ISF государственным образовательным учреждением?</a>
					</div>
				</div>	<!-- /.col-md-4 -->

				<div class="col-sm-8">
					<div class="faq__content">
						<div class="faq__content-item js-section" id="1">
							<p class="font-semibold text-red pb-xs">Кто мы? Что такое ISF?</p>
							<p>ISF – Международная Школа Финансов (International School of Finance), одно из самых передовых и перспективных учебных заведений международного уровня в Узбекистане. Мы предоставляем уникальную возможность обучения по международной профессиональной программе АССА, при успешном окончании которой наши студенты получают степень бакалавра университета Оксфорд Брукс.</p>
						</div>	<!-- /.faq__content-item -->
						<div class="faq__content-item js-section" id="2">
							<p class="font-semibold text-red pb-xs">Что такое АССА?</p>
							<p>ACCA – Ассоциация Присяжных Сертифицированных Бухгалтеров (The Association of Chartered Certified Accountants), которая была создана в Великобритании ещё в 1904 году. На сегодняшний день ACCA – это крупнейшая международная профессиональная организация бухгалтеров высшей квалификации, завоевавшая прочную репутацию в профессиональных кругах, которая объединяет 162 000 членов и 428 000 студентов в 173 странах мира.</p>
						</div>	<!-- /.faq__content-item -->
						<div class="faq__content-item js-section" id="3">
							<p class="font-semibold text-red pb-xs">Какого признание АССА в мире?</p>
							<p>Квалификация АССА является одной из самых авторитетных в мире. Она ориентирована на подготовку финансовых директоров, главных бухгалтеров, внутренних и внешних аудиторов, финансовых аналитиков международного уровня. Учебная программа подготовки по квалификации АССА включает следующие предметные области: финансовый учет, управленческий учет, финансовый менеджмент, бизнес-стратегия и эффективность деятельности, аудит и налогообложение.</p>
						</div>	<!-- /.faq__content-item -->
						<div class="faq__content-item js-section" id="4">
							<p class="font-semibold text-red pb-xs">Какие дипломы и специализацию я получу после окончания?</p>
							<p class="pb-lg">При успешном окончании обучения и сдаче дипломной работы, студент одновременно получает Диплом Бакалавра в Прикладной Бухгалтерии университета Оксфорд Брукс (The Oxford Brookes BSc (Hons) in Applied Accounting) и свидетельство о владении профессиональной квалификацией АССА.</p>
							<p>Стоит отметить, что диплом вручается самим университетом Оксфорд Брукс, а не ISF; то есть, наше учебное заведение занимается обучением и подготовкой студентов к сдаче экзаменов, финальной дипломной работы, а также является ответственным за качество предоставленных знаний.</p>
						</div>	<!-- /.faq__content-item -->
						<div class="faq__content-item js-section" id="5">
							<p class="font-semibold text-red pb-xs">Признается ли данный диплом (от Оксфорд Брукс) в Узбекистане? Смогу ли я найти работу в нашей стране?</p>
							<p class="pb-lg">Конечно. В Узбекистане, Диплом Оксфорд Брукс подлежит государственной Нострификации без экзамена, так как университет Оксфорд Брукс входит в список 500 лучших университетов мира. <a href="https://www.topuniversities.com/university-rankings/world-university-rankings/2018" class="link" target="_blank">Читать больше...</a></p>
							<p>Также, профессиональная квалификация АССА, получаемая вместе с дипломом, признана приоритетной в финансовой сфере Узбекистана и высоко ценится банках. <a href="http://lex.uz/ru/docs/611379" class="link" target="_blank">Читать больше...</a></p>
						</div>	<!-- /.faq__content-item -->
						<div class="faq__content-item js-section" id="6">
							<p class="font-semibold text-red pb-xs">Признают ли диплом Оксфорд Брукс на международной арене? Смогу ли я работать за границей после окончания?</p>
							<p>Да. В настоящее время, диплом Оксфорд Брукс и профессиональная степень АССА признаются и высоко ценятся в более чем 170 странах мира. Работодатели из разнообразных сфер осведомлены о качестве навыков и знаний, получаемых посредством обучения по программе АССА, и предлагают престижные вакансии выпускникам программы.</p>
						</div>	<!-- /.faq__content-item -->
						<div class="faq__content-item js-section" id="7">
							<p class="font-semibold text-red pb-xs">Является ли ISF государственным образовательным учреждением?</p>
							<p>Нет. International School of Finance является негосударственным/частным образовательным учреждением. Наше заведение осуществляет свою деятельность на основе лицензии выданной Кабинетом Министров Республики Узбекистан и отвечает всем соответствующим государственным требованиям.</p>
						</div>	<!-- /.faq__content-item -->
					</div>
				</div>	<!-- /.col-md-4 -->

			</div>	<!-- /.row -->

		</div>	<!-- /.container -->
	</section>

@endsection
@section('scripts')
	<script type="text/javascript" src="{{ asset('assets/js/sticky-kit.min.js') }}"></script>
	<script>
		var $window = $(window),
			nav = $('.js-faq-nav'),
			nav_height = nav.outerHeight(),
			section = $('.js-section');

	    // make sidebar sticky
	    function makeSticky() {
	      $('.js-sticky-nav').stick_in_parent({
	        offset_top: 120
	      })
	      .on('sticky_kit:bottom', function(e) {
	          $(this).parent().css('position', 'static');
	      })
	      .on('sticky_kit:unbottom', function(e) {
	          $(this).parent().css('position', 'relative');
	      });
	    }

	    makeSticky();

	    // add active class to relevant section on scroll
	    $window.on('scroll', function () {
	      var cur_pos = $(this).scrollTop();
	      
	      section.each(function() {
	        var top = $(this).offset().top - 390,
	        bottom = top + $(this).outerHeight();

	        if (cur_pos >= top && cur_pos <= bottom) {
	          nav.find('a').removeClass('active');
	          section.removeClass('active');

	          $(this).addClass('active');
	          nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
	        }
	      });
	    });

	    // scroll window to relevant sectio
	    nav.find('a').on('click', function () {
	      var $el = $(this)
	      , id = $el.attr('href');

	      $('html, body').animate({
	      scrollTop: $(id).offset().top - 320
	      }, 500);

	      return false;
	    });

	    // remove or add sticky according to window width
	    function removeStickyIfMobile() {
	      var wWidth = $window.width();

	      if (wWidth < 768) {
	        $('.js-sticky-nav').trigger('sticky_kit:detach');
	      }
	      else {
	        makeSticky();
	      }
	    }

	    removeStickyIfMobile();

	    $window.resize(function() {
	      removeStickyIfMobile();
	    });
	</script>
@endsection