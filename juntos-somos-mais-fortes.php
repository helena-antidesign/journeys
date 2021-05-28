<?php include('includes/header--page.php'); ?>

    <main class="c-page">
        <section class="container-fluid p-0 d-flex">
            <div class="c-page__img position-absolute" style="background-image: url('assets/img/banner-covid.jpg');"></div>

            <div class="h-100 w-100 d-flex c-page__container">

                <div class="container">

                    <div class="row d-flex justify-content-end">

                        <div class="col-xl-6">

                            <h1 class="d-inline-block fs-5 text-primary p-2 px-0 mb-0">Juntos somos mais fortes</h1>
                            <h2 class="mb-4 fs-1 fw-bold col-xl-6 text-secondary">Um trabalho compartilhado</h2>

                            <div class="row">
                                <div class="col-xl-8">
                                    <p class="mb-5 fs-4 text-black-50">Entenda as medidas contra o covid, que estão sendo tomadas nos países e nossas preocupações.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-9 fs-4">
                                    <p class="mb-5">Relatamos algumas das medidas que serão tomadas para prevenir a propagação do vírus COVID-19 e trabalhamos com as medidas necessárias para uma viagem segura.</p> 

                                    <p class="mb-5">No momento não existe um cadastro pré-determinado para todos os estados do Brasil, porém cada estado está tomando suas próprias medidas e protocolos de segurança sanitária.</p>

                                    <p class="mb-5">Por este motivo, se você precisar de mais informações sobre um provedor específico, entre em contato conosco e enviaremos o que você precisa o mais breve possível.</p>

                                    <a class="text-primary fw-500 d-flex align-items-center text-decoration-none">Conheça opções de hotéis <span class="icon-arrow-right fs-4 fw-bold ms-2"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section class="pt-5">

            <div class="container">
                <div class="row">
                    <div class="col-xl-12">

                        <div class="col-xl-4">
                            <h2 class="d-inline-block fs-5 text-primary p-2 px-0 mb-0">Medidas contra o Covid</h2>
                            <h3 class="mb-2 fs-3 fw-bold text-secondary mb-4">Entenda as medidas que estão sendo tomadas!</h3>
                            <p class="text-black-50">Alguns exemplos das medidas que serão tomadas quando as atividades voltarem gradualmente</p>
                        </div>
                        
                        <ul class="nav nav-tabs d-flex justify-content-between mt-5">
                            <li class="nav-item">
                                <button class="nav-link active" id="hospedagem-tab" data-bs-toggle="tab" data-bs-target="#hospedagem" type="button" role="tab" aria-controls="hospedagem" aria-selected="true">
                                    <span class="icon icon-hotel"></span>Hospedagem
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="atracoes-tab" data-bs-toggle="tab" data-bs-target="#atracoes" type="button" role="tab" aria-controls="atracoes" aria-selected="false">
                                    <span class="icon icon-hotel"></span>Atrações Turística
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="transporte-tab" data-bs-toggle="tab" data-bs-target="#transporte" type="button" role="tab" aria-controls="transporte" aria-selected="false">
                                    <span class="icon icon-transfer"></span>Transporte Turistico
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="agencias-tab" data-bs-toggle="tab" data-bs-target="#agencias" type="button" role="tab" aria-controls="agencias" aria-selected="false">
                                    <span class="icon icon-map"></span>Agências e Operadoras
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="gastronomia-tab" data-bs-toggle="tab" data-bs-target="#gastronomia" type="button" role="tab" aria-controls="gastronomia" aria-selected="false">
                                    <span class="icon icon-map"></span>Gastronomia
                                </button>
                            </li>
                        </ul>
                    
                    </div>
                </div>
            </div>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="hospedagem" role="tabpanel" aria-labelledby="home-tab">
                    
                    <!-- Slider main container -->
                    <div class="swiper-container c-content-carousel JS__content-carousel">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">

                                <div class="c-content-carousel__img" style="background-image:url('assets/img/carousel-hospedagens.jpg')"></div>
                                <div class="c-content-carousel__content text-white bg-dark">



                                    <div class="col-xl-10">

                                    
                                        <span class="fs-3 fw-bold mb-3 d-block">Hospedagens</span>
                                        <p>As áreas de recepção, áreas comuns e circulação devem obedecer às seguintes normas</p>
                                        
                                        <div class="accordion accordion-flush mt-5" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button collapsed fw-500" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Responsabilidade corporativa nos meios de hospedagem
                                                </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed fw-500" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Comidas e bebidas nos alojamentos
                                                </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed fw-500" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Limpeza dos quartos
                                                </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed fw-500" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                                    Áreas públicas
                                                </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed fw-500" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                                    Espaço de eventos
                                                </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                    </div>

                </div>
                <div class="tab-pane fade" id="atracoes" role="tabpanel" aria-labelledby="profile-tab">
                    b
                </div>
                <div class="tab-pane fade" id="transporte" role="tabpanel" aria-labelledby="contact-tab">
                    c   
                </div>
                <div class="tab-pane fade" id="agencias" role="tabpanel" aria-labelledby="contact-tab">
                    d   
                </div>
                <div class="tab-pane fade" id="gastronomia" role="tabpanel" aria-labelledby="contact-tab">
                    e   
                </div>
            </div>



        </section>  


        <section class="c-destaque text-light w-100 container">

            <div id="destaque" class="carousel slide h-100 carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#destaque" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#destaque" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner h-100">

                    <div class="carousel-item h-100 active" style="background-image: url('assets/img/covid-diretrizes.jpg   ');">
                        <div class="container h-100">
                            <div class="row h-100 d-flex align-items-center">
                                <div>
                                    <div class="row">
                                        <div class="col-xl-3">
                                            <h2 class="d-inline-block fs-6 text-secondary bg-light p-2 px-3 rounded-1 mb-3">Diretrizes</h2>
                                            <h3 class="mb-4 fs-3">Outros recursos que estão sendo tomados</h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <p>Estamos sempre atentos a cada nova diretriz para que tudo aconteça de forma segura.</p>
                                            <a href="" class="d-flex align-items-center text-reset text-uppercase fw-bolder">
                                                Saber mais <svg xmlns="http://www.w3.org/2000/svg" width="41.29" height="20"><path d="M40.817 8.858L32.389.471a1.613 1.613 0 00-2.276 2.286l5.658 5.631H1.613a1.613 1.613 0 000 3.226h34.158l-5.658 5.631a1.613 1.613 0 002.276 2.286l8.428-8.387a1.614 1.614 0 000-2.286z" fill="#fff"/></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                </div>
            </div>
        </section>

      
    </main>

<?php include('includes/footer.php'); ?>
    