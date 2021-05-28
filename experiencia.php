
<?php include('includes/header.php') ?>


<main>
        
    <section class="c-banner">

        <div id="principal" class="carousel slide h-100" data-bs-ride="carousel">
            
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#principal" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#principal" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#principal" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner h-100">

                <div class="carousel-item h-100 d-flex align-items-end active" style="background-image: url('assets/img/banner-buzios.jpg');">
                    
                    <img src="assets/img/banner-bg--video.png" alt="background" class="c-banner__background">
                    <div class="container text-light h-100">
                        <div class="row h-100 d-flex align-items-center">
                            <div class="col-md-8 col-lg-7 col-xl-6 col-xxl-6">
                                <h2 class="d-inline-block fs-6 text-secondary bg-light p-2 px-3 rounded-1 mb-3">Experts Brazil</h2>
                                <h1 class="fw-500 fs-1 mb-3">Búzios, uma experiência extraordinária!</h1>
                                <p class="w-50">Conheça as melhores praias, experiências gastronômicas e muito mais!</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            
        </div>

    </section>


    <section>
        <div class="container">

            <div class="row">

                <div class="col-xl-4">
                    <div class="col-xl-9">
                        <h2 class="mb-5 fs-1 fw-bold text-secondary">Um lugar cheio de histórias</h2>
                    </div>
                    <div>
                        <p>O charme de Búzios não está garantido apenas por suas belezas naturais. Destaca-se também pela sua arquitetura, que segue um estilo único, manifestado pela altura das edificações - graças a uma lei criada em 1970, que estabelece que nenhuma pode ultrapassar dois pavimentos. As casas dos pescadores influenciaram as construções.</p>
                    </div>
                </div>



                <div class="col-xl-7 offset-xl-1">
                    <div class="swiper-container JS__carousel-expert">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background-image:url('assets/img/buzios.jpg');">Slide 1</div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    
    

    <section class="c-cards-carousel">
        <div class="container-fluid h-100">
            <div class="row h-100 d-flex align-items-center">

                <div class="col-xl-3 c-cards-carousel__title">
                    <h2 class="d-inline-block fs-5 text-primary p-2 px-0 mb-3">Destinos destacados</h2>
                    <h3 class="mb-4 fs-3 fw-bold text-secondary">Tenha a pura sensação da liberdade</h3>
                    <p>Confira os destinos que separamos especialmente para você</p>

                    <div class="position-relative JS-cards__pagination">
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev fs-4 shadow rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8.397" height="14.73"><path data-name="Caminho 4" d="M8.396 7.365a1.029 1.029 0 01-.3.729l-6.337 6.337A1.032 1.032 0 01.3 12.972l5.6-5.6-5.6-5.6A1.036 1.036 0 111.759.302l6.336 6.329a1.029 1.029 0 01.301.734z" fill="#0e6a7a"/></svg>
                        </div>
                        <div class="swiper-button-next fs-4 shadow rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8.397" height="14.73"><path data-name="Caminho 4" d="M8.396 7.365a1.029 1.029 0 01-.3.729l-6.337 6.337A1.032 1.032 0 01.3 12.972l5.6-5.6-5.6-5.6A1.036 1.036 0 111.759.302l6.336 6.329a1.029 1.029 0 01.301.734z" fill="#0e6a7a"/></svg>
                        </div>
                    </div>

                </div>

                <div class="c-cards-carousel__content">
                
                    <div class="swiper-container JS-cards">
                    <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide o-card o-card--first d-flex align-items-end" style="background-image: url('assets/img/card-trancoso.jpg');">

                                <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <span class="icon icon-airport bg-white rounded text-primary rounded-circle"></span>
                                    <div class="o-card__content">
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Trancoso</span>
                                        <p class="fs-6">Um lugar incrível para ficar na memória</p>
                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-ilha-grande.jpg');">

                                <img src="assets/img/card-bg.png" alt="" class="o-card__bg">
                                
                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <span class="icon icon-beach-view bg-white rounded text-primary rounded-circle "></span>
                                    <div>
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Ilha Grande</span>
                                        <p class="fs-6">Todos os hotéis com serviço completo e melhor conforto.</p>
                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-jericoacoara.jpg');">

                                <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <span class="icon icon-paw bg-white rounded text-primary rounded-circle "></span>
                                    <div>
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Jericoacoara</span>
                                        <p class="fs-6">Lugares que não pode ficar de fora.</p>
                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-pantanal.jpg');">

                                <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <span class="icon icon-suitcase bg-white rounded text-primary rounded-circle "></span>
                                    <div>
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Pantanal</span>
                                        <p class="fs-6">Confira um guia de habitações para famílias.</p>
                                    </div>
                                </a>

                            </div>
                            
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    
    <section class="c-cards-carousel pt-0">
        <div class="container-fluid h-100">
            <div class="row h-100 d-flex align-items-center">

                <div class="col-xl-3 c-cards-carousel__title">
                    <h2 class="d-inline-block fs-5 text-primary p-2 px-0 mb-3">Classificação</h2>
                    <h3 class="mb-4 fs-3 fw-bold text-secondary">Encontre a experiencia perfeita com nossa seleção de hotéis</h3>
                    <p>Explore os diversos hotéis com classificações desde a gastronomia até a decoração</p>

                    <div class="position-relative JS-cards__pagination">
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev fs-4 shadow rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8.397" height="14.73"><path data-name="Caminho 4" d="M8.396 7.365a1.029 1.029 0 01-.3.729l-6.337 6.337A1.032 1.032 0 01.3 12.972l5.6-5.6-5.6-5.6A1.036 1.036 0 111.759.302l6.336 6.329a1.029 1.029 0 01.301.734z" fill="#0e6a7a"/></svg>
                        </div>
                        <div class="swiper-button-next fs-4 shadow rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8.397" height="14.73"><path data-name="Caminho 4" d="M8.396 7.365a1.029 1.029 0 01-.3.729l-6.337 6.337A1.032 1.032 0 01.3 12.972l5.6-5.6-5.6-5.6A1.036 1.036 0 111.759.302l6.336 6.329a1.029 1.029 0 01.301.734z" fill="#0e6a7a"/></svg>
                        </div>
                    </div>

                </div>

                <div class="c-cards-carousel__content">
                
                    <div class="swiper-container JS-cards">
                    <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-barra-de-sao-miguel.jpg');">

                                <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <span></span>
                                    <div class="o-card__content">
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Pousada do Centro Oeste</span>
                                        <p class="fs-6">Pousada turistica, localizada no centro.</p>
                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-marau.jpg');">

                                <img src="assets/img/card-bg.png" alt="" class="o-card__bg">
                                
                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <span></span>
                                    <div>
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Barla Inn</span>
                                        <p class="fs-6">Pousada turistica, localizada no centro.</span></p>
                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-maragogi.jpg');">

                                <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <span></span>
                                    <div>
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Pousada Centro Norte</span>
                                        <p class="fs-6">Pousada turistica, localizada no centro.</p>
                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-trancoso2.jpg');">

                                <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <span></span>
                                    <div>
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Doce Mar</span>
                                        <p class="fs-6">Pousada turistica, localizada no centro.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-buzios.jpg');">

                                <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <span></span>
                                    <div>
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Água Mar</span>
                                        <p class="fs-6">Pousada turistica, localizada no centro.</p>
                                    </div>
                                </a>

                            </div>
                            
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <?php include('includes/destaque.php') ?>


    <section class="c-cards-carousel">
        <div class="container-fluid overflow-hidden">
            <div class="c-cards-carousel__title w-100 p-0">

                <div class="col-xl-3">
                    <h2 class="d-inline-block fs-5 text-primary p-2 px-0 mb-0">Experiências únicas</h2>
                    <h3 class="mb-4 fs-3 fw-bold text-secondary">Encontre aventuras em Búzios e muito mais</h3>
                    <p class="fs-4">Consulte as restrições com base no Covid-19</p>
                </div>
                <div class="col-xl-12">
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Centro e Morro do Humaitá</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Praia dos Ossos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Praia da Ferradura</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Praia de João Fernandes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Praia de João Fernandes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Praias Brava e Forno</a>
                        </li>
                    </ul>
                </div>

                <div id="nav-tabContent" class="tab-content mt-5">
                    <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="swiper-container JS-cards">
                    
                            <div class="swiper-wrapper">

                               <div class="swiper-slide o-praia">
                                    <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                        <div class="o-praia__image w-100" style="background-image: url('assets/img/praia-ferradurinha.jpg');"></div>
                                        <div class="mt-3 fs-6 ">
                                            <span class="fs-4 text-secondary mb-2 d-block">Trolley</span>
                                            <p class="text-primary">Centro e Morro do Humaitá</p>
                                            <p>Um lindo passeio por 12 praias e 2 mirantes  que proporciona uma vista incrível!</p>
                                            <a href="vouchers.php" class="btn-link">Explorar</a>
                                        </div>
                                    </a>
                                </div>
        
                            </div>

                            <div class="position-relative JS-cards__pagination mt-4">
                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev fs-4 shadow rounded-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8.397" height="14.73"><path data-name="Caminho 4" d="M8.396 7.365a1.029 1.029 0 01-.3.729l-6.337 6.337A1.032 1.032 0 01.3 12.972l5.6-5.6-5.6-5.6A1.036 1.036 0 111.759.302l6.336 6.329a1.029 1.029 0 01.301.734z" fill="#0e6a7a"/></svg>
                                </div>
                                <div class="swiper-button-next fs-4 shadow rounded-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8.397" height="14.73"><path data-name="Caminho 4" d="M8.396 7.365a1.029 1.029 0 01-.3.729l-6.337 6.337A1.032 1.032 0 01.3 12.972l5.6-5.6-5.6-5.6A1.036 1.036 0 111.759.302l6.336 6.329a1.029 1.029 0 01.301.734z" fill="#0e6a7a"/></svg>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                    </div>
                </div>



            </div>

            </div>
        </div>
    </section>


    <section class="c-cards-carousel">
        <div class="container-fluid h-100">
            <div class="row h-100 d-flex align-items-center">

                <div class="col-xl-3 c-cards-carousel__title">
                    <h2 class="d-inline-block fs-5 text-primary p-2 px-0 mb-3">Praias</h2>
                    <h3 class="mb-4 fs-3 fw-bold text-secondary">Conheça praias incríveis espalhadas por Búzios</h3>
                    <p>Desfrutes de lugares incríveis escondidos que você só vai encontrar em Búzios!</p>

                    <div class="position-relative JS-cards__pagination">
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev fs-4 shadow rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8.397" height="14.73"><path data-name="Caminho 4" d="M8.396 7.365a1.029 1.029 0 01-.3.729l-6.337 6.337A1.032 1.032 0 01.3 12.972l5.6-5.6-5.6-5.6A1.036 1.036 0 111.759.302l6.336 6.329a1.029 1.029 0 01.301.734z" fill="#0e6a7a"/></svg>
                        </div>
                        <div class="swiper-button-next fs-4 shadow rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8.397" height="14.73"><path data-name="Caminho 4" d="M8.396 7.365a1.029 1.029 0 01-.3.729l-6.337 6.337A1.032 1.032 0 01.3 12.972l5.6-5.6-5.6-5.6A1.036 1.036 0 111.759.302l6.336 6.329a1.029 1.029 0 01.301.734z" fill="#0e6a7a"/></svg>
                        </div>
                    </div>

                </div>

                <div class="c-cards-carousel__content">
                
                    <div class="swiper-container JS-cards">
                    <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            
                            <div class="swiper-slide o-praia">

                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">

                                    <div class="o-praia__image w-100" style="background-image: url('assets/img/praia-ferradurinha.jpg');"></div>
                                    <div class="mt-3 fw-500 ">
                                        <span class="fs-4 text-secondary mb-2 d-block">Praia da Ferradurinha </span>
                                        <p class="fs-6 text-primary d-flex align-items-center">Conheça opções de hotéis <span class="icon-arrow-right fs-4 fw-bold ms-2"></span>  </p>
                                    </div>

                                </a>

                            </div>
                            <div class="swiper-slide o-praia">

                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">

                                    <div class="o-praia__image w-100" style="background-image: url('assets/img/praia-Curio.jpg');"></div>
                                    <div class="mt-3 fw-500 ">
                                        <span class="fs-4 text-secondary mb-2 d-block">Praia da Curio </span>
                                        <p class="fs-6 text-primary d-flex align-items-center">Conheça opções de hotéis <span class="icon-arrow-right fs-4 fw-bold ms-2"></span>  </p>
                                    </div>

                                </a>

                            </div>
                            <div class="swiper-slide o-praia">
                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <div class="o-praia__image w-100" style="background-image: url('assets/img/praia-Ossos.jpg');"></div>
                                    <div class="mt-3 fw-500 ">
                                        <span class="fs-4 text-secondary mb-2 d-block">Praia dos Ossos</span>
                                        <p class="fs-6 text-primary d-flex align-items-center">Conheça opções de hotéis <span class="icon-arrow-right fs-4 fw-bold ms-2"></span>  </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="c-cards-carousel pt-0">
        <div class="container-fluid overflow-hidden">
            <div class="c-cards-carousel__title w-100 p-0">
                <h2 class="d-inline-block fs-5 text-primary p-2 px-0 mb-0">Gastronomia</h2>
                <h3 class="mb-4 fs-3 fw-bold text-secondary">Bares & Música</h3>
               
                <div class="swiper-container JS-cards">
               
                    <div class="swiper-wrapper">
                        <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/buzios-bares_anexo-praia-buzios.jpg');">

                            <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                            <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                <span class="icon icon-beach-view bg-white rounded text-primary rounded-circle"></span>
                                <div class="o-card__content">
                                    <span class="fs-4 text-white fw-500 mb-2 d-block">Anexo Praia Buzios</span>
                                    <p class="fs-6">Todos os hotéis com serviço completo e melhor conforto.</p>
                                </div>
                            </a>

                        </div>
                        <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/buzios-bares_patio-havana.jpg');">

                            <img src="assets/img/card-bg.png" alt="" class="o-card__bg">
                            
                            <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                <span class="icon icon-paw bg-white rounded text-primary rounded-circle "></span>
                                <div>
                                    <span class="fs-4 text-white fw-500 mb-2 d-block">Pátio Havana</span>
                                    <p class="fs-6">Sempre tem um membro que não pode ficar de fora.</p>
                                </div>
                            </a>

                        </div>
                        <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/buzios-bares_chez-michou-crepiere.jpg');">

                            <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                            <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                <span class="icon icon-suitcase bg-white rounded text-primary rounded-circle "></span>
                                <div>
                                    <span class="fs-4 text-white fw-500 mb-2 d-block">Chez Michou Crêperie</span>
                                    <p class="fs-6">Confira um guia de habitações para famílias.</p>
                                </div>
                            </a>

                        </div>
                        <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/buzios-bares_playa-de-manguinhos.jpg');">

                            <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                            <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                <span class="icon icon-beach-view bg-white rounded text-primary rounded-circle "></span>
                                <div>
                                    <span class="fs-4 text-white fw-500 mb-2 d-block">Playa de Manguinhos</span>
                                    <p class="fs-6">Todos os hotéis com serviço completo e melhor conforto.</p>
                                </div>
                            </a>

                        </div>
                        <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/buzios-bares_cigalon.jpg');">

                            <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                            <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                <span class="icon icon-paw bg-white rounded text-primary rounded-circle"></span>
                                <div>
                                    <span class="fs-4 text-white fw-500 mb-2 d-block">Cigalon</span>
                                    <p class="fs-6">Sempre tem um membro que não pode ficar de fora.</p>
                                </div>
                            </a>

                        </div>
                        <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/buzios-bares_altto-ristorante-e-lounge.jpg');">

                            <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                            <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                <span class="icon icon-suitcase bg-white rounded text-primary rounded-circle "></span>
                                <div>
                                    <span class="fs-4 text-white fw-500 mb-2 d-block">Altto Ristorante & Lounge Bar</span>
                                    <p class="fs-6">Confira um guia de habitações para famílias.</p>
                                </div>
                            </a>

                        </div>
                        <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/buzios-bares_chez-michou-crepiere.jpg');">

                            <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                            <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                <span class="icon icon-suitcase bg-white rounded text-primary rounded-circle "></span>
                                <div>
                                    <span class="fs-4 text-white fw-500 mb-2 d-block">Brasil para familias</span>
                                    <p class="fs-6">Confira um guia de habitações para famílias.</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="position-relative JS-cards__pagination mt-4">
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev fs-4 shadow rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8.397" height="14.73"><path data-name="Caminho 4" d="M8.396 7.365a1.029 1.029 0 01-.3.729l-6.337 6.337A1.032 1.032 0 01.3 12.972l5.6-5.6-5.6-5.6A1.036 1.036 0 111.759.302l6.336 6.329a1.029 1.029 0 01.301.734z" fill="#0e6a7a"/></svg>
                        </div>
                        <div class="swiper-button-next fs-4 shadow rounded-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8.397" height="14.73"><path data-name="Caminho 4" d="M8.396 7.365a1.029 1.029 0 01-.3.729l-6.337 6.337A1.032 1.032 0 01.3 12.972l5.6-5.6-5.6-5.6A1.036 1.036 0 111.759.302l6.336 6.329a1.029 1.029 0 01.301.734z" fill="#0e6a7a"/></svg>
                        </div>
                    </div>

                </div>

            </div>

            </div>
        </div>
    </section>


</main>


<?php include('includes/footer.php') ?>

