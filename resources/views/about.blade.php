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
            <p class="about__txt"><strong>Design Hub International</strong> – это команда экспертов в создании
              эффективных
              архитектурных решений. Мы архитекторы, инженеры, урбанисты и дизайнеры с большим опытом работы в
              проектировании жилой и коммерческой недвижимости.</p>
            <p class="about__txt">Наше бюро предоставляет полный спектр услуг в области архитектурного проектирования,
              инженерии, строительства, консалтинга, генерального планирования и дизайна интерьеров. Начиная от идеи
              проекта и до полной его реализации.</p>
            <p class="about__txt">Компания, с главным офисом в Киеве и представительством в Роттердаме, более 6 лет,
              успешно работает над проектами не только на территории СНГ, но и за ее пределами, предоставляя
              высококачественные услуги для наших международных клиентов.</p>
            <p class="about__txt"><strong>Мы предлагаем</strong> коммерчески эффективные архитектурные решения, которые
              удовлетворяют как потребности бизнеса, так и желания потребителя. Профессионализм и предпринимательский
              подход к работе позволяют нам создавать проекты, которые помогают оптимизировать расходы наших клиентов,
              получить максимальный результат и удовлетворить потребности конечного потребителя.</p>
            <p class="about__txt"><strong>Наша миссия</strong> – создавать архитектурные проекты, которые будут
              актуальны и
              через десятилетия. Используя многогранный подход к планированию и дизайну – placemaking approach – мы
              стремимся создавать комфортную городскую среду, благодаря которой интересы бизнеса и конечного потребителя
              не конкурируют между собой, а дополняют и усиливают друг друга.</p>
            <h3 class="mb-3 text-center text-uppercase">
              <strong>
                Основные преимущества работы с Design Hub International:
              </strong>
            </h3>
            <p class="about__txt"><strong>Efficient solutions.</strong> Создаем коммерчески эффективные решения для
              наших клиентов. Мы готовы разделить риски, стать соинвесторами вашего проекта и получить до 50% оплаты в
              м² либо долю в бизнесе.</p>
            <p class="about__txt"><strong>Smart management.</strong> Мы верим в оптимизацию ресурсов и гибкие
              интегрированные команды. Мы сокращаем наши затраты, за счет привлечения необходимой команды, в
              соответствии с масштабом проекта, сложностью и реальными потребностями.</p>
            <p class="about__txt"><strong>International experience.</strong> Благодаря большому опыту проектирования за
              границей – Нидерланды, Великобритания, Австралия – и широкой партнёрской сети, у нас есть возможность
              привлекать ведущие международные архитектурные, инжиниринговые и консалтинговые компании под свои задачи и
              проекты.</p>
            <p class="about__txt"><strong>Project Cost Reduction.</strong> При создании проекта совместно с западными
              архитекторами, мы значительно сокращаем стоимость концепции для заказчика, за счет выполнения части работ
              по адаптации концепции к локальному рынку. Благодаря такому подходу наши клиенты экономят время, деньги и
              что немаловажно могут использовать имя зарубежной архитектурной студии в своих маркетинговых целях.</p>
          @else
            <p class="about__txt"><strong>Design Hub International</strong> is an integrated design practice with its HQ
              office based in Kyiv and representative office in Rotterdam, which provides architectural, engineering,
              building consultancy,
              design & planning services in CIS region and beyond, offering a broad range of professional architectural
              services for our international partners.</p>
            <p class="about__txt">Our bureau provides a full range of services in the field of architectural design,
              engineering, construction, consulting, masterplanning and interior design. Starting from the idea of the
              project to its full implementation.</p>
            <p class="about__txt"><strong>We offer</strong> commercially effective architectural solutions that satisfy
              both the needs of
              the business and the desires of the consumer. Professionalism and an entrepreneurial approach to work
              allow us to create projects that help optimize the costs of our clients, get the maximum result, and
              satisfy the needs of the end consumer.</p>
            <p class="about__txt"><strong>Our mission</strong> is to create architectural projects that will be relevant
              even after
              decades. Using a multifaceted approach to planning and design – a placemaking approach – we strive to
              create a comfortable urban environment, thanks to which the interests of business and the end consumer do
              not compete with each other, but complement and strengthen one another.</p>
            <h3 class="mb-3 text-center text-uppercase">
              <strong>
                Key benefits of working with Design Hub International:
              </strong>
            </h3>
            <p class="about__txt"><strong>Efficient solutions.</strong> Creating commercially efficient solutions for
              our clients. We are
              ready to share the risks, become co-investors and get up to 50% of the payment in sqm or a share in the
              business.</p>
            <p class="about__txt"><strong>Smart management.</strong> We believe in resource optimization and flexible
              integrated teams.
              We reduce our costs by involving only the core specialists to the project team, depending on the scale,
              complexity and real project's needs.</p>
            <p class="about__txt"><strong>International experience.</strong> Due to our global design experience –
              Netherlands, UK,
              Australia – and an extensive partnership network, we have the opportunity to involve leading international
              architectural, engineering and consulting companies into our projects on a collaboration basis.</p>
            <p class="about__txt"><strong>Project Cost Reduction.</strong> When creating a project with foreign
              architects, we can
              significantly reduce the cost of the design project for the client due to the implementation of part of
              the work on adapting the concept to the local market. Thanks to this approach, our customers save time,
              money, and, what is not less important, can use the name of a famous architectural studio for their
              marketing purposes.</p>
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection
