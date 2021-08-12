<?php include('includes/header--white.php'); ?>

    <main class="c-page">
        <section class="container-fluid p-0 d-flex">
            <div class="c-page__img position-absolute" style="background-image: url('assets/img/banner-covid.jpg');"></div>

            <div class="w-100 d-flex c-page__container">

                <div class="container">

                    <div class="row d-flex justify-content-end">

                        <div class="col-lg-6">  

                            <h1 class="d-inline-block fs-5 text-primary p-2 px-0 mb-0">Juntos somos mais fortes</h1>
                            <h2 class="mb-4 fs-1 fw-bold col-xxl-6 text-secondary">Um trabalho compartilhado</h2>

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

                                    <a href="#medidas" class="text-primary fw-500 d-flex align-items-center text-decoration-none">Conheça as medidas <span class="icon-arrow-right fs-4 fw-bold ms-2"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section class="pt-5" id="medidas">

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
                                    <span class="icon icon-hotel1"></span>Hospedagem
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="atracoes-tab" data-bs-toggle="tab" data-bs-target="#atracoes" type="button" role="tab" aria-controls="atracoes" aria-selected="false">
                                    <span class="icon icon-atraction fs-4"></span>Atrações Turísticas
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="transporte-tab" data-bs-toggle="tab" data-bs-target="#transporte" type="button" role="tab" aria-controls="transporte" aria-selected="false">
                                    <span class="icon icon-transfer"></span>Transporte Turistico
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="agencias-tab" data-bs-toggle="tab" data-bs-target="#agencias" type="button" role="tab" aria-controls="agencias" aria-selected="false">
                                    <span class="icon icon-suport"></span>Agências e Operadoras
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="gastronomia-tab" data-bs-toggle="tab" data-bs-target="#gastronomia" type="button" role="tab" aria-controls="gastronomia" aria-selected="false">
                                    <span class="icon icon-food"></span>Gastronomia
                                </button>
                            </li>
                        </ul>
                    
                    </div>
                </div>
            </div>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="hospedagem" role="tabpanel" aria-labelledby="home-tab">
                    
                    <div class="c-content-carousel">
                        <div class="d-flex">
                            <div class="w-100">

                                <div class="c-content-carousel__img" style="background-image:url('assets/img/carousel-hospedagens.jpg')"></div>

                                <div class="c-content-carousel__content text-white">

                                    <div class="c-content-carousel__content__bg bg-dark"></div>

                                    <div class="container">
                                        <div class="col-xxl-5 offset-xxl-6 col-xl-6 col-lg-6 offset-lg-6 ">
                                            <span class="fs-3 fw-500 mb-3 d-block">Hospedagens</span>
                                            <p>As áreas de recepção, áreas comuns e circulação devem obedecer às seguintes normas</p>
                                       
                                            <div class="accordion accordion-flush mt-5 border-top border-bottom" id="accordion-hospedagens">
                                                <div class="accordion-item border-white">

                                                    <h2 class="accordion-header" id="hospedagens-headingOne">
                                                        <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#hospedagens-collapseOne" aria-expanded="false" aria-controls="hospedagens-collapseOne">
                                                            Responsabilidade corporativa nos meios de hospedagem
                                                        </button>
                                                    </h2>
                                                    <div id="hospedagens-collapseOne" class="accordion-collapse collapse" aria-labelledby="hospedagens-headingOne" data-bs-parent="#accordion-hospedagens">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="accordion-item border-white">
                                                    <h2 class="accordion-header" id="hospedagens-headingTwo">
                                                        <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#hospedagens-collapseTwo" aria-expanded="false" aria-controls="hospedagens-collapseTwo">
                                                            Comidas e bebidas nos alojamentos
                                                        </button>
                                                    </h2>
                                                    <div id="hospedagens-collapseTwo" class="accordion-collapse collapse" aria-labelledby="hospedagens-headingTwo" data-bs-parent="#accordion-hospedagens">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-white">
                                                    <h2 class="accordion-header" id="hospedagens-headingThree">
                                                        <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#hospedagens-collapseThree" aria-expanded="false" aria-controls="hospedagens-collapseThree">
                                                            Limpeza dos quartos
                                                        </button>
                                                    </h2>
                                                    <div id="hospedagens-collapseThree" class="accordion-collapse collapse" aria-labelledby="hospedagens-headingThree" data-bs-parent="#accordion-hospedagens">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-white">
                                                    <h2 class="accordion-header" id="hospedagens-headingFour">
                                                        <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#hospedagens-collapseFour" aria-expanded="false" aria-controls="hospedagens-collapseFour">
                                                            Áreas públicas
                                                        </button>
                                                    </h2>
                                                    <div id="hospedagens-collapseFour" class="accordion-collapse collapse" aria-labelledby="hospedagens-headingFour" data-bs-parent="#accordion-hospedagens">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-white">
                                                    <h2 class="accordion-header" id="hospedagens-headingFive">
                                                    <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#hospedagens-collapseFive" aria-expanded="false" aria-controls="hospedagens-collapseFive">
                                                        Espaço de eventos
                                                    </button>
                                                    </h2>
                                                    <div id="hospedagens-collapseFive" class="accordion-collapse collapse" aria-labelledby="hospedagens-headingFive" data-bs-parent="#accordion-hospedagens">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="atracoes" role="tabpanel" aria-labelledby="profile-tab">
                       
                    <div class="c-content-carousel">
                        <div class="d-flex">
                            <div class="w-100">

                                <div class="c-content-carousel__img" style="background-image:url('assets/img/carousel-hospedagens.jpg')"></div>

                                <div class="c-content-carousel__content text-white">

                                    <div class="c-content-carousel__content__bg bg-dark"></div>

                                    <div class="container">
                                        <div class="col-xxl-5 offset-xxl-6 col-xl-6 col-lg-6 offset-lg-6 ">
                                            <span class="fs-3 fw-500 mb-3 d-block">Atrações Turísticas</span>
                                            <p>As áreas de recepção, áreas comuns e circulação devem obedecer às seguintes normas</p>
                                       
                                            
                                            <div class="accordion accordion-flush mt-5 border-top border-bottom" id="accordion-atracoes">
                                                <div class="accordion-item border-white">

                                                    <h2 class="accordion-header" id="atracoes-headingOne">
                                                        <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#atracoes-collapseOne" aria-expanded="false" aria-controls="atracoes-collapseOne">
                                                            Responsabilidade corporativa nos meios de hospedagem
                                                        </button>
                                                    </h2>
                                                    <div id="atracoes-collapseOne" class="accordion-collapse collapse" aria-labelledby="atracoes-headingOne" data-bs-parent="#accordion-atracoes">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="accordion-item border-white">
                                                    <h2 class="accordion-header" id="atracoes-headingTwo">
                                                        <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#atracoes-collapseTwo" aria-expanded="false" aria-controls="atracoes-collapseTwo">
                                                            Comidas e bebidas nos alojamentos
                                                        </button>
                                                    </h2>
                                                    <div id="atracoes-collapseTwo" class="accordion-collapse collapse" aria-labelledby="atracoes-headingTwo" data-bs-parent="#accordion-atracoes">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-white">
                                                    <h2 class="accordion-header" id="atracoes-headingThree">
                                                        <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#atracoes-collapseThree" aria-expanded="false" aria-controls="atracoes-collapseThree">
                                                            Limpeza dos quartos
                                                        </button>
                                                    </h2>
                                                    <div id="atracoes-collapseThree" class="accordion-collapse collapse" aria-labelledby="atracoes-headingThree" data-bs-parent="#accordion-atracoes">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-white">
                                                    <h2 class="accordion-header" id="atracoes-headingFour">
                                                        <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#atracoes-collapseFour" aria-expanded="false" aria-controls="atracoes-collapseFour">
                                                            Áreas públicas
                                                        </button>
                                                    </h2>
                                                    <div id="atracoes-collapseFour" class="accordion-collapse collapse" aria-labelledby="atracoes-headingFour" data-bs-parent="#accordion-atracoes">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-white">
                                                    <h2 class="accordion-header" id="atracoes-headingFive">
                                                    <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#atracoes-collapseFive" aria-expanded="false" aria-controls="atracoes-collapseFive">
                                                        Espaço de eventos
                                                    </button>
                                                    </h2>
                                                    <div id="atracoes-collapseFive" class="accordion-collapse collapse" aria-labelledby="atracoes-headingFive" data-bs-parent="#accordion-atracoes">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="transporte" role="tabpanel" aria-labelledby="contact-tab">
                           
                    <div class="c-content-carousel">
                        <div class="d-flex">
                            <div class="w-100">

                                <div class="c-content-carousel__img" style="background-image:url('assets/img/carousel-hospedagens.jpg')"></div>

                                <div class="c-content-carousel__content text-white">

                                    <div class="c-content-carousel__content__bg bg-dark"></div>

                                    <div class="container">
                                        <div class="col-xxl-5 offset-xxl-6 col-xl-6 col-lg-6 offset-lg-6 ">
                                            <span class="fs-3 fw-500 mb-3 d-block">Transporte Turístico</span>
                                            <p>As áreas de recepção, áreas comuns e circulação devem obedecer às seguintes normas</p>
                                       
                                            
                                            <div class="accordion accordion-flush mt-5 border-top border-bottom" id="accordion-transporte">
                                                <div class="accordion-item border-white">

                                                    <h2 class="accordion-header" id="transporte-headingOne">
                                                        <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#transporte-collapseOne" aria-expanded="false" aria-controls="transporte-collapseOne">
                                                            Responsabilidade corporativa nos meios de hospedagem
                                                        </button>
                                                    </h2>
                                                    <div id="transporte-collapseOne" class="accordion-collapse collapse" aria-labelledby="transporte-headingOne" data-bs-parent="#accordion-transporte">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="accordion-item border-white">
                                                    <h2 class="accordion-header" id="transporte-headingTwo">
                                                        <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#transporte-collapseTwo" aria-expanded="false" aria-controls="transporte-collapseTwo">
                                                            Comidas e bebidas nos alojamentos
                                                        </button>
                                                    </h2>
                                                    <div id="transporte-collapseTwo" class="accordion-collapse collapse" aria-labelledby="transporte-headingTwo" data-bs-parent="#accordion-transporte">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-white">
                                                    <h2 class="accordion-header" id="transporte-headingThree">
                                                        <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#transporte-collapseThree" aria-expanded="false" aria-controls="transporte-collapseThree">
                                                            Limpeza dos quartos
                                                        </button>
                                                    </h2>
                                                    <div id="transporte-collapseThree" class="accordion-collapse collapse" aria-labelledby="transporte-headingThree" data-bs-parent="#accordion-transporte">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-white">
                                                    <h2 class="accordion-header" id="transporte-headingFour">
                                                        <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#transporte-collapseFour" aria-expanded="false" aria-controls="transporte-collapseFour">
                                                            Áreas públicas
                                                        </button>
                                                    </h2>
                                                    <div id="transporte-collapseFour" class="accordion-collapse collapse" aria-labelledby="transporte-headingFour" data-bs-parent="#accordion-transporte">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-white">
                                                    <h2 class="accordion-header" id="transporte-headingFive">
                                                    <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#transporte-collapseFive" aria-expanded="false" aria-controls="transporte-collapseFive">
                                                        Espaço de eventos
                                                    </button>
                                                    </h2>
                                                    <div id="transporte-collapseFive" class="accordion-collapse collapse" aria-labelledby="transporte-headingFive" data-bs-parent="#accordion-transporte">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="agencias" role="tabpanel" aria-labelledby="contact-tab">    
                    <div class="c-content-carousel">
                        <div class="d-flex">
                            <div class="w-100">

                                <div class="c-content-carousel__img" style="background-image:url('assets/img/carousel-hospedagens.jpg')"></div>

                                <div class="c-content-carousel__content text-white">

                                    <div class="c-content-carousel__content__bg bg-dark"></div>

                                    <div class="container">
                                        <div class="col-xxl-5 offset-xxl-6 col-xl-6 col-lg-6 offset-lg-6 ">
                                            <span class="fs-3 fw-500 mb-3 d-block">Agências e Operadoras</span>
                                            <p>As áreas de recepção, áreas comuns e circulação devem obedecer às seguintes normas</p>
                                       
                                            
                                            <div class="accordion accordion-flush mt-5 border-top border-bottom" id="accordion-agencias">
                                                <div class="accordion-item border-white">

                                                    <h2 class="accordion-header" id="agencias-headingOne">
                                                        <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#agencias-collapseOne" aria-expanded="false" aria-controls="agencias-collapseOne">
                                                            Responsabilidade corporativa nos meios de hospedagem
                                                        </button>
                                                    </h2>
                                                    <div id="agencias-collapseOne" class="accordion-collapse collapse" aria-labelledby="agencias-headingOne" data-bs-parent="#accordion-agencias">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="accordion-item border-white">
                                                    <h2 class="accordion-header" id="agencias-headingTwo">
                                                        <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#agencias-collapseTwo" aria-expanded="false" aria-controls="agencias-collapseTwo">
                                                            Comidas e bebidas nos alojamentos
                                                        </button>
                                                    </h2>
                                                    <div id="agencias-collapseTwo" class="accordion-collapse collapse" aria-labelledby="agencias-headingTwo" data-bs-parent="#accordion-agencias">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-white">
                                                    <h2 class="accordion-header" id="agencias-headingThree">
                                                        <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#agencias-collapseThree" aria-expanded="false" aria-controls="agencias-collapseThree">
                                                            Limpeza dos quartos
                                                        </button>
                                                    </h2>
                                                    <div id="agencias-collapseThree" class="accordion-collapse collapse" aria-labelledby="agencias-headingThree" data-bs-parent="#accordion-agencias">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-white">
                                                    <h2 class="accordion-header" id="agencias-headingFour">
                                                        <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#agencias-collapseFour" aria-expanded="false" aria-controls="agencias-collapseFour">
                                                            Áreas públicas
                                                        </button>
                                                    </h2>
                                                    <div id="agencias-collapseFour" class="accordion-collapse collapse" aria-labelledby="agencias-headingFour" data-bs-parent="#accordion-agencias">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-white">
                                                    <h2 class="accordion-header" id="agencias-headingFive">
                                                    <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#agencias-collapseFive" aria-expanded="false" aria-controls="agencias-collapseFive">
                                                        Espaço de eventos
                                                    </button>
                                                    </h2>
                                                    <div id="agencias-collapseFive" class="accordion-collapse collapse" aria-labelledby="agencias-headingFive" data-bs-parent="#accordion-agencias">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="gastronomia" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="c-content-carousel">
                        <div class="d-flex">
                            <div class="w-100">

                                <div class="c-content-carousel__img" style="background-image:url('assets/img/carousel-hospedagens.jpg')"></div>

                                <div class="c-content-carousel__content text-white">

                                    <div class="c-content-carousel__content__bg bg-dark"></div>

                                    <div class="container">
                                        <div class="col-xxl-5 offset-xxl-6 col-xl-6 col-lg-6 offset-lg-6 ">
                                            <span class="fs-3 fw-500 mb-3 d-block">Gastronomia</span>
                                            <p>As áreas de recepção, áreas comuns e circulação devem obedecer às seguintes normas</p>
                                       
                                            
                                            <div class="accordion accordion-flush mt-5 border-top border-bottom" id="accordion-gastronomia">
                                                <div class="accordion-item border-white">

                                                    <h2 class="accordion-header" id="gastronomia-headingOne">
                                                        <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#gastronomia-collapseOne" aria-expanded="false" aria-controls="gastronomia-collapseOne">
                                                            Responsabilidade corporativa nos meios de hospedagem
                                                        </button>
                                                    </h2>
                                                    <div id="gastronomia-collapseOne" class="accordion-collapse collapse" aria-labelledby="gastronomia-headingOne" data-bs-parent="#accordion-gastronomia">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="accordion-item border-white">
                                                    <h2 class="accordion-header" id="gastronomia-headingTwo">
                                                        <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#gastronomia-collapseTwo" aria-expanded="false" aria-controls="gastronomia-collapseTwo">
                                                            Comidas e bebidas nos alojamentos
                                                        </button>
                                                    </h2>
                                                    <div id="gastronomia-collapseTwo" class="accordion-collapse collapse" aria-labelledby="gastronomia-headingTwo" data-bs-parent="#accordion-gastronomia">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-white">
                                                    <h2 class="accordion-header" id="gastronomia-headingThree">
                                                        <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#gastronomia-collapseThree" aria-expanded="false" aria-controls="gastronomia-collapseThree">
                                                            Limpeza dos quartos
                                                        </button>
                                                    </h2>
                                                    <div id="gastronomia-collapseThree" class="accordion-collapse collapse" aria-labelledby="gastronomia-headingThree" data-bs-parent="#accordion-gastronomia">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-white">
                                                    <h2 class="accordion-header" id="gastronomia-headingFour">
                                                        <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#gastronomia-collapseFour" aria-expanded="false" aria-controls="gastronomia-collapseFour">
                                                            Áreas públicas
                                                        </button>
                                                    </h2>
                                                    <div id="gastronomia-collapseFour" class="accordion-collapse collapse" aria-labelledby="gastronomia-headingFour" data-bs-parent="#accordion-gastronomia">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item border-white">
                                                    <h2 class="accordion-header" id="gastronomia-headingFive">
                                                    <button class="accordion-button collapsed fw-500 bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#gastronomia-collapseFive" aria-expanded="false" aria-controls="gastronomia-collapseFive">
                                                        Espaço de eventos
                                                    </button>
                                                    </h2>
                                                    <div id="gastronomia-collapseFive" class="accordion-collapse collapse" aria-labelledby="gastronomia-headingFive" data-bs-parent="#accordion-gastronomia">
                                                        <div class="accordion-body bg-dark text-white">
                                                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </section>  

        <section class="c-destaque c-destaque--reduced JS__destaque container text-light">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide" style="background-image: url('assets/img/covid-diretrizes.jpg');">
                    <a class="container h-100 d-block text-reset" href="juntos-somos-mais-fortes.php">
                        <div class="row h-100 d-flex align-items-center text-white">
                            <div>
                                <div class="row">
                                    <div class="col-xxl-4 col-xl-6 col-md-8">
                                        <h2 class="d-inline-block fs-6 text-secondary bg-light p-2 px-3 rounded-1 mb-3">Diretrizes</h2>
                                        <h3 class="mb-4 fs-3">Outros recursos que estão sendo tomados</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xxl-3 col-xl-6 col-md-8">
                                        <p>Estamos sempre atentos a cada nova diretriz para que tudo aconteça de forma segura.</p>
                                        <span class="d-flex align-items-center text-reset fw-500 mt-5">
                                            Veja as regras <svg xmlns="http://www.w3.org/2000/svg" width="8.397" height="14.73" class="ms-3"><path data-name="Caminho 4" d="M8.4 7.365a1.029 1.029 0 01-.3.729L1.761 14.43A1.033 1.033 0 01.3 12.969l5.6-5.6-5.6-5.6A1.032 1.032 0 111.759.31L8.1 6.636a1.029 1.029 0 01.3.729z" fill="#fff"/></svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="swiper-slide" style="background-image: url('assets/img/banner-home2.jpg');">
                    <a class="container h-100 d-block text-reset" href="juntos-somos-mais-fortes.php">
                        <div class="row h-100 d-flex align-items-center text-white">
                            <div>
                                <div class="row">
                                    <div class="col-xxl-4 col-xl-6 col-md-8">
                                        <h2 class="d-inline-block fs-6 text-secondary bg-light p-2 px-3 rounded-1 mb-3">Diretrizes</h2>
                                        <h3 class="mb-4 fs-3">Lorem Ipsum</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xxl-3 col-xl-6 col-md-8">
                                        <p>Maecenas placerat enim diam, id aliquet dui pharetra sit amet</p>
                                        <span class="d-flex align-items-center text-reset fw-500 mt-5">
                                            Veja as regras <svg xmlns="http://www.w3.org/2000/svg" width="8.397" height="14.73" class="ms-3"><path data-name="Caminho 4" d="M8.4 7.365a1.029 1.029 0 01-.3.729L1.761 14.43A1.033 1.033 0 01.3 12.969l5.6-5.6-5.6-5.6A1.032 1.032 0 111.759.31L8.1 6.636a1.029 1.029 0 01.3.729z" fill="#fff"/></svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination container"></div>

        </section>

      <!--  -->


    </main>

<?php include('includes/footer.php'); ?>
    
