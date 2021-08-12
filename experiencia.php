
<?php include('includes/header.php') ?>


<main class="c-single-experiencia">
    
        
    <section class="c-banner c-banner--reduced-search">
        <?php include('includes/search-box--reduced.php') ?>

        <div class="swiper-container h-100 JS__banner">
            
            <div class="swiper-wrapper h-100">

                <div class="c-banner__item --video swiper-slide h-100 d-flex align-items-end" style="background-image: url('assets/img/banner-buzios.jpg');">
                    <img src="assets/img/banner-bg.png" alt="background" class="c-banner__background">
                    <div class="container text-light">
                        <div class="row h-100 d-flex align-items-center">
                            <div class="col-xxl-6 col-xl-8 col-lg-12 col-md-8 col-sm-8">
                                <h2 class="d-inline-block fs-6 text-secondary bg-light p-2 px-3 rounded-1 mb-3">Experts Brazil</h2>
                                <h2 class="c-banner__title fw-500 fs-1">Búzios, uma experiência extraordinária!</h2>
                                <p>Conheça as melhores praias, experiências gastronômicas e muito mais!</p>
                                <a href="" class="c-banner__button d-flex align-items-center text-reset text-uppercase fw-bolder">
                                    Explorar <svg xmlns="http://www.w3.org/2000/svg" width="41.29" height="20"><path d="M40.817 8.858L32.389.471a1.613 1.613 0 00-2.276 2.286l5.658 5.631H1.613a1.613 1.613 0 000 3.226h34.158l-5.658 5.631a1.613 1.613 0 002.276 2.286l8.428-8.387a1.614 1.614 0 000-2.286z" fill="#fff"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>

    </section>


    <section class="c-single-experiencia__galeria">
        <div class="container">

            <div class="row">

                <div class="col-xl-4 d-flex align-items-center">
                    <div class="mb-5">
                        <div class="col-xxl-9">
                            <h2 class="mb-5 fs-1 fw-bold text-secondary">Um lugar cheio de histórias</h2>
                        </div>
                        <div class="fs-4">
                            <p>O charme de Búzios não está garantido apenas por suas belezas naturais. Destaca-se também pela sua arquitetura, que segue um estilo único, manifestado pela altura das edificações - graças a uma lei criada em 1970, que estabelece que nenhuma pode ultrapassar dois pavimentos. As casas dos pescadores influenciaram as construções.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7 offset-xl-1">
                    <div class="swiper-container c-single-experiencia__galeria__swiper JS__experiencia-galeria">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background-image:url('assets/img/buzios.jpg');"></div>
                            <div class="swiper-slide" style="background-image:url('assets/img/buzios.jpg');"></div>
                        </div>

                        <div class="c-single-experiencia__galeria__swiper__controls d-flex">
                            <div class="swiper-button-prev">
                                <span class="icon-arrow-left"></span>
                            </div>
                            <div class="swiper-button-next">
                                <span class="icon-arrow-right"></span>
                            </div>
                        </div>                        
                        
                        <div class="swiper-pagination"></div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    
    
    <section class="c-cards-carousel pt-0">

        <div class="container mb-5 pb-5">
            <div class="row">
                <div class="col">
                    <ul class="nav nav-pills nav-fill">
                        <li>
                            <div class="me-5 position-relative input-search input-search--tarifarios">
                                <span class="icon-search position-absolute"></span>
                                <input type="text" placeholder="Busque por lugares em Búzios" class="form-control me-5">
                                <span class="text-black-50">|</span>
                            </div>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link active" id="classificacao-tab-1" data-bs-toggle="tab" data-bs-target="#classificacao-tabContent-1" type="button" role="tab" aria-controls="classificacao-tabContent-1" aria-selected="true">Centro e Morro do Humaitá</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="classificacao-tab-2" data-bs-toggle="tab" data-bs-target="#classificacao-tabContent-2" type="button" role="tab" aria-controls="classificacao-tabContent-2" aria-selected="false">Praia dos Ossos</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="classificacao-tab-3" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Praia da Ferradura</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="classificacao-tab-4" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Praia de João Fernandes</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="classificacao-tab-5" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Praia de Geribá</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="classificacao-tab-6" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Praias Brava e Forno</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="classificacao-tabContent" class="tab-content mt-5">
            <div class="tab-pane fade active show" id="classificacao-tabContent-1" role="tabpanel" aria-labelledby="classificacao-tab-1">
                
                <div class="container-fluid">
                    <div class="row h-100 d-flex align-items-center">

                        <div class="col-xl-3 c-cards-carousel__title text-gray-200">
                            <h2 class="d-inline-block fs-5 text-primary p-2 px-0 mb-3">Classificação</h2>
                            <h3 class="mb-4 fs-3 fw-bold text-secondary">Encontre a experiencia perfeita com nossa seleção de hotéis</h3>
                            <p>Explore os diversos hotéis com classificações desde a gastronomia até a decoração</p>

                            <div class="position-relative JS__classificacao__pagination c-cards-carousel__pagination">
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
                        
                            <div class="swiper-container JS__classificacao">
                            <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-barra-de-sao-miguel.jpg');">

                                        <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                                        <a href="hotel.php" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                            <span></span>
                                            <div class="o-card__content">
                                                <span class="fs-4 text-white fw-500 mb-2 d-block">Pousada do Centro Oeste</span>
                                                <p class="fs-6">Pousada turistica, localizada no centro.</p>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-marau.jpg');">

                                        <img src="assets/img/card-bg.png" alt="" class="o-card__bg">
                                        
                                        <a href="hotel.php"" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                            <span></span>
                                            <div>
                                                <span class="fs-4 text-white fw-500 mb-2 d-block">Barla Inn</span>
                                                <p class="fs-6">Pousada turistica, localizada no centro.</span></p>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-maragogi.jpg');">

                                        <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                                        <a href="hotel.php"" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                            <span></span>
                                            <div>
                                                <span class="fs-4 text-white fw-500 mb-2 d-block">Pousada Centro Norte</span>
                                                <p class="fs-6">Pousada turistica, localizada no centro.</p>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-trancoso2.jpg');">

                                        <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                                        <a href="hotel.php"" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                            <span></span>
                                            <div>
                                                <span class="fs-4 text-white fw-500 mb-2 d-block">Doce Mar</span>
                                                <p class="fs-6">Pousada turistica, localizada no centro.</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-buzios.jpg');">

                                        <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                                        <a href="hotel.php" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
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

            </div>
        </div>



    </section>


    <?php include('includes/destaque.php') ?>


    <section class="c-cards-carousel">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 col-sm-11 mb-5">
                    <h2 class="d-inline-block fs-5 text-primary p-2 px-0 mb-0">Experiências únicas</h2>
                    <h3 class="mb-4 fs-3 fw-bold text-secondary">Encontre aventuras em Búzios e muito mais</h3>
                    <p class="fs-4">Consulte as restrições com base no Covid-19 <a href="juntos-somos-mais-fortes.php" class="ms-3 btn-link fs-6 text-secondary border-secondary py-0">Leia mais</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
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
                            <a class="nav-link" href="#">Praia de João Fernandes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Praia de João Fernandes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Praias Brava e Forno</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="nav-tabContent" class="tab-content mt-5">
                <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="swiper-container JS__experiencias-swiper">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide col-xl-3 col-lg-4 col-md-5 c-single-experiencia__explorar__item">
                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <div class="w-100 c-single-experiencia__explorar__item__img" style="background-image: url('assets/img/single-experiencia/aventuras-buzios01.png');"></div>
                                    <div class="mt-4 fs-6 c-single-experiencia__explorar__item__content">
                                        <span class="icon-transfer fs-28 my-2"></span>
                                        <span class="fs-4 text-secondary mb-2 d-block fw-500">Trolley</span>
                                        <p class="text-primary">Centro e Morro do Humaitá</p>
                                        <p>Um lindo passeio por 12 praias e 2 mirantes  que proporciona uma vista incrível!</p>
                                        <a href="experiencia.php" class="btn-link">Explorar</a>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide col-xl-3 col-lg-4 col-md-5 c-single-experiencia__explorar__item">
                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <div class="w-100 c-single-experiencia__explorar__item__img" style="background-image: url('assets/img/single-experiencia/aventuras-buzios02.png');"></div>
                                    <div class="mt-4 fs-6 c-single-experiencia__explorar__item__content">
                                        <span class="icon-sail fs-28 my-2"></span>
                                        <span class="fs-4 text-secondary mb-2 d-block fw-500">Passeio em Arraial do Cabo</span>
                                        <p class="text-primary">Centro e Morro do Humaitá</p>
                                        <p>Com praias de areia branca e águas cristalinas, há um passeio de escuna e três paradas para banho de mar</p>
                                        <a href="experiencia.php" class="btn-link">Explorar</a>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide col-xl-3 col-lg-4 col-md-5 c-single-experiencia__explorar__item">
                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <div class="w-100 c-single-experiencia__explorar__item__img" style="background-image: url('assets/img/single-experiencia/aventuras-buzios03.png');"></div>
                                    <div class="mt-4 fs-6 c-single-experiencia__explorar__item__content">
                                        <span class="icon-fish fs-28 my-2"></span>
                                        <span class="fs-4 text-secondary mb-2 d-block fw-500">Fishing Tour</span>
                                        <p class="text-primary">Centro e Morro do Humaitá</p>
                                        <p>Com praias de areia branca e águas cristalinas, há um passeio de escuna e três paradas para banho de mar</p>
                                        <a href="experiencia.php" class="btn-link">Explorar</a>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide col-xl-3 col-lg-4 col-md-5 c-single-experiencia__explorar__item">
                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <div class="w-100 c-single-experiencia__explorar__item__img" style="background-image: url('assets/img/single-experiencia/aventuras-buzios04.png');"></div>
                                    <div class="mt-4 fs-6 c-single-experiencia__explorar__item__content">
                                        <span class="icon-surf fs-28 my-2"></span>
                                        <span class="fs-4 text-secondary mb-2 d-block fw-500">Surf</span>
                                        <p class="text-primary">Centro e Morro do Humaitá</p>
                                        <p>Oportunidade imperdível de surf com os surfistas mais experientes de Búzios! </p>
                                        <a href="experiencia.php" class="btn-link">Explorar</a>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide col-xl-3 col-lg-4 col-md-5 c-single-experiencia__explorar__item">
                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <div class="w-100 c-single-experiencia__explorar__item__img" style="background-image: url('assets/img/single-experiencia/aventuras-buzios05.png');"></div>
                                    <div class="mt-4 fs-6 c-single-experiencia__explorar__item__content">
                                        <span class="icon-surf fs-28 my-2"></span>
                                        <span class="fs-4 text-secondary mb-2 d-block fw-500">Mergulho</span>
                                        <p class="text-primary">Centro e Morro do Humaitá</p>
                                        <p>Neste passeio há um instrutor que dará todas as instruções</p>
                                        <a href="experiencia.php" class="btn-link">Explorar</a>
                                    </div>
                                </a>
                            </div>
    
                        </div>

                        <div class="position-relative JS__experiencias-swiper__pagination c-cards-carousel__pagination mt-4">
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
    </section>


    <section class="c-cards-carousel pt-3">
        <div class="container-fluid h-100">
            <div class="row h-100 ">

                <div class="col-xl-3 c-cards-carousel__title">
                    <h2 class="d-inline-block fs-5 text-primary p-2 px-0 mb-3">Praias</h2>
                    <h3 class="mb-4 fs-3 fw-bold text-secondary">Conheça praias incríveis espalhadas por Búzios</h3>
                    <p>Desfrutes de lugares incríveis escondidos que você só vai encontrar em Búzios!</p>

                    <div class="position-relative JS__praias__pagination c-cards-carousel__pagination">
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
                
                    <div class="swiper-container JS__praias">
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

                    <div class="position-relative JS-cards__pagination c-cards-carousel__pagination mt-4">
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
    </section>

</main>



<?php include('includes/footer.php') ?>
<script src="assets/js/pages/experiencia.js"></script>

