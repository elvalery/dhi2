@extends('layouts.main')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1 class="page-ttl">@lang('About DHI')</h1>
        <div class="about__video">
          <div class="about__video-wrap">
            <div class="about__video-helper">
              <iframe
                  src="https://www.youtube.com/embed/qBokdoVr_58"
                  frameborder="0"
                  allow="autoplay;
               encrypted-media"
                  allowfullscreen
              ></iframe>
            </div>
          </div>
        </div>
        <div class="about__content">
          @if(app()->getLocale() == 'ru')
            <p class="about__txt"><strong>Design Hub International</strong> – это команда экспертов в создании эффективных архитектурных решений. Мы архитекторы, инженеры, урбанисты и дизайнеры с большим опытом работы в проектировании жилой и коммерческой недвижимости.</p>
            <p class="about__txt">Наше бюро предоставляет полный спектр услуг в области архитектурного проектирования, инженерии, строительства, консалтинга, генерального планирования и дизайна интерьеров. Начиная от идеи проекта и до полной его реализации.</p>
            <p class="about__txt">Компания, с главным офисом в Киеве и представительством в Роттердаме, более 6 лет, успешно работает над проектами не только на территории СНГ, но и за его пределами, предоставляя высококачественные услуги для наших международных клиентов.</p>
            <p class="about__txt"><strong>Мы предлагаем</strong> коммерчески эффективные архитектурные решения, которые удовлетворяют как потребности бизнеса, так и желания потребителя. Профессионализм и предпринимательский подход к работе позволяют нам создавать проекты, которые помогают оптимизировать расходы наших клиентов, получить максимальный результат и удовлетворить потребности конечного потребителя.</p>
            <p class="about__txt"><strong>Наша миссия</strong> – создавать архитектурные проекты, которые будут актуальны и через десятилетия. Используя многогранный подход к планированию и дизайну – placemaking approach – мы стремимся создавать комфортную городскую среду, благодаря которой интересы бизнеса и конечного потребителя не конкурируют между собой, а дополняют и усиливают друг друга.</p>
            <h3 class="mb-3">Основные преимущества работы с Design Hub International:</h3>
            <p class="about__txt"><strong>Efficient solutions.</strong> Создаем коммерчески эффективные решения для наших клиентов. Мы готовы разделить риски, стать соинвесторами вашего проекта и получить до 50% оплаты в м² либо долю в бизнесе.</p>
            <p class="about__txt"><strong>Smart management.</strong> Мы верим в оптимизацию ресурсов и гибкие интегрированные команды. Мы сокращаем наши затраты, за счет привлечения необходимой команды, в соответствии с масштабом проекта, сложностью и реальными потребностями.</p>
            <p class="about__txt"><strong>International experience.</strong> Благодаря большому опыту проектирования за границей – Голландия, Великобритания, Австралия – и широкой партнёрской сети, у нас есть возможность привлекать ведущие международные архитектурные, инжиниринговые и консалтинговые компании под свои задачи и проекты.</p>
            <p class="about__txt"><strong>Project Cost Reduction.</strong> При создании проекта совместно с западными архитекторами, мы значительно сокращаем стоимость концепции для заказчика, за счет выполнения части работ по адаптации концепции к локальному рынку. Благодаря такому подходу наши клиенты экономят время, деньги и что немаловажно могут использовать имя зарубежной архитектурной студии в своих маркетинговых целях.</p>
          @else
          <p class="about__txt">Design Hub International is an integrated design practice with its HQ office based in Kiev
            and representative office in Rotterdam, which provides architectural, engineering, building consultancy,
            design & planning services in CIS region and beyond, offering a broad range of professional architectural
            services for our international partners.</p>
          <p class="about__txt">The DHI Architecture’s professional ethos extends equally to the documentation and
            delivery of our design as to the design itself. Our professional team includes highly experienced specialists
            in all aspects of project delivery. Highly developed documentation quality assurance systems are a fundamental
            part of our culture. Our offices are equipped with state-of-the-art computer design, visualization and
            documentation systems, with access to common databases and libraries. These systems enable us to provide a
            coordinated output of consistently high quality.</p>
          <p class="about__txt">Design Development, Construction Documentation, and Construction Phase services for
            building projects are highly specialized processes. Throughout the delivery phase, we exercise our proven
            experience, from the exact detailing of the project’s myriad components and the rigors of coordinating the
            developed architectural design with the other project consultant disciplines, to the scrupulous review of shop
            drawings. We understand the built work quality standards, which must be achieved for the user experience, and
            we document our work with the highest level of attention to detail, durability of the building’s performance
            and economy of upkeep. Building industry research and development is a major part of our culture, with our
            vast library and professional staff attending construction industry seminars and other ongoing research
            programs.</p>
          <p class="about__txt">Our industry over recent years has witnessed an exponential rate in the emergence of new
            technologies in both design and construction. As building design professionals, we strive to stay abreast of
            these new technologies, methods and systems, in order to best serve our Clients and our profession.</p>
          <p class="about__txt">Our Kiev office has developed and maintains a Quality Management System achieves designs
            which demonstrate an acceptable level of quality, aesthetic and commercial viability in the finished design
            which substantially meets the Client’s requirements. To achieve this, key aspects of our system include:</p>
          <p class="about__txt">• precise definition of our commission with our Client, and regular communication with and
            response to the Client, and the Client group, concerning project requirements.<br>• efficient management of
            the people and teams involved in the project.<br>• staff understanding of their responsibilities and
            authorities in respect of the project.<br>• the testing of the design in a formal manner so that it meets the
            Client’s requirements in accordance with the contractual arrangements.<br>• promotion of an effective risk
            management culture.</p>
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection
