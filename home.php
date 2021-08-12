
<?php include('includes/header.php') ?>


<main>

    <section class="c-banner">

        <div class="swiper-container h-100 JS__banner">
            
            <div class="swiper-wrapper h-100">

                <div class="c-banner__item swiper-slide h-100 d-flex align-items-end" style="background-image: url('assets/img/banner-home2.jpg');">
                    <img src="assets/img/banner-bg--video.png" alt="background" class="c-banner__background">
                    <div class="container text-light h-100">
                        <div class="row h-100 d-flex align-items-center">
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-8 col-sm-8">
                                <h2 class="fw-bold fs-93">Experiências</h2>
                                <p>Existe momentos únicos, que podem ficar ainda melhores com novas experiências.</p>
                                <a href="experiencias.php" class="c-banner__button d-flex align-items-center text-reset text-uppercase fw-bolder">
                                    Explorar <svg xmlns="http://www.w3.org/2000/svg" width="41.29" height="20"><path d="M40.817 8.858L32.389.471a1.613 1.613 0 00-2.276 2.286l5.658 5.631H1.613a1.613 1.613 0 000 3.226h34.158l-5.658 5.631a1.613 1.613 0 002.276 2.286l8.428-8.387a1.614 1.614 0 000-2.286z" fill="#fff"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>

    </section>

    <section class="c-cards-carousel">
        <div class="container-fluid h-100">
            <div class="row h-100 d-flex align-items-center">

                <div class="c-cards-carousel__title">

                    <h2 class="d-inline-block fs-5 text-primary p-2 px-0 mb-0">Destinos destacados</h2>
                    <h3 class="mb-4 fs-3 fw-bold text-secondary">Tenha a pura sensação da liberdade</h3>
                    <p class="text-black-50">Confira os destinos que separamos especialmente para você</p>

                    <div class="position-relative c-cards-carousel__pagination JS__destinos-destacados__pagination">
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
                
                    <div class="swiper-container JS__destinos-destacados">
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
                                    <div class="o-card__content">
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Ilha Grande</span>
                                        <p class="fs-6">Todos os hotéis com serviço completo e melhor conforto.</p>
                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-jericoacoara.jpg');">

                                <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <span class="icon icon-paw bg-white rounded text-primary rounded-circle "></span>
                                    <div class="o-card__content">
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Jericoacoara</span>
                                        <p class="fs-6">Lugares que não pode ficar de fora.</p>
                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-pantanal.jpg');">

                                <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <span class="icon icon-suitcase bg-white rounded text-primary rounded-circle "></span>
                                    <div class="o-card__content">
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

    <?php include('includes/destaque.php') ?>

    <section class="c-home__advertisement">
        <div class="container">
            <div class="row">
                <a href="#">
                    <img src="assets/img/advertisement2.jpg" alt="Advertisement" class="d-block mx-auto">
                </a>
            </div>
        </div>
    </section>

    <section class="c-cards-carousel">
        <div class="container-fluid h-100">
            <div class="row h-100 d-flex align-items-center">

                <div class="col-xl-3 c-cards-carousel__title">
                    <h2 class="d-inline-block fs-5 text-primary p-2 px-0 mb-0">Praias</h2>
                    <h3 class="mb-4 fs-3 fw-bold text-secondary">Conheça praias incríveis espalhadas por Búzios</h3>
                    <p>Desfrutes de lugares incríveis escondidos que você só vai encontrar em Búzios!</p>

                    <div class="position-relative c-cards-carousel__pagination JS__praias-carousel__pagination">
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
                
                    <div class="swiper-container JS__praias-carousel">
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

    <?php include('includes/experts.php') ?>

    <section class="c-cards-carousel pt-0">
        <div class="container-fluid h-100">
            <div class="row h-100 d-flex align-items-center">

                <div class="col-xl-3 c-cards-carousel__title">
                    <h2 class="d-inline-block fs-5 text-primary p-2 px-0 mb-0">Classificação</h2>
                    <h3 class="mb-4 fs-3 fw-bold text-secondary">Encontre a experiencia perfeita com nossa seleção de hotéis</h3>
                    <p class="text-black-50">Explore os diversos hotéis com classificações desde a gastronomia até a decoração</p>

                    <div class="position-relative c-cards-carousel__pagination JS__classificacao-pagination">
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
                
                    <div class="swiper-container JS-classificacao-carousel">
                    <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-barra-de-sao-miguel.jpg');">

                                <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <span class="icon icon-key bg-white rounded text-warning rounded-circle "></span>
                                    <div class="o-card__content">
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Brasil Secreto</span>
                                        <p class="fs-6">Conheça todos os segredos escondidos deste pais incrível!</p>
                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-marau.jpg');">

                                <img src="assets/img/card-bg.png" alt="" class="o-card__bg">
                                
                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <span class="icon icon-key bg-white rounded text-warning rounded-circle "></span>
                                    <div class="o-card__content">
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Maraú</span>
                                        <p class="fs-6">Lugar incrível, oferecido por  <span class="fw-bold">Butterfly House Bahia</span></p>
                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-maragogi.jpg');">

                                <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <span class="icon icon-key bg-white rounded text-warning rounded-circle "></span>
                                    <div class="o-card__content">
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Maragogi</span>
                                        <p class="fs-6">Viva uma experiência no hotel <span class="fw-bold">Camurim Grande</span>.</p>
                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-trancoso2.jpg');">

                                <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <span class="icon icon-key bg-white rounded text-warning rounded-circle "></span>
                                    <div class="o-card__content">
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Trancoso</span>
                                        <p class="fs-6">Lugar incrível, oferecido por <span class="fw-bold">Vilas de Trancoso</span></p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-buzios.jpg');">

                                <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <span class="icon icon-key bg-white rounded text-warning rounded-circle "></span>
                                    <div class="o-card__content">
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Buzios</span>
                                        <p class="fs-6">Uma experiência única Tramonto de Búzios</p>
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


</main>


<?php include('includes/footer.php') ?>


<script src="assets/js/pages/home.js"></script>