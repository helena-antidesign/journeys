
<?php include('includes/header.php') ?>


<main class="c-experiencias">
        
    <section class="c-banner c-banner--reduced-search">
        <?php include('includes/search-box--reduced.php') ?>

        <div class="swiper-container h-100 JS__banner">
            
            <div class="swiper-wrapper h-100">

                <div class="c-banner__item swiper-slide h-100 d-flex align-items-end" style="background-image: url('assets/img/banner-home2.jpg');">
                    <img src="assets/img/banner-bg--video.png" alt="background" class="c-banner__background">
                    <div class="container text-light">
                        <div class="row h-100 d-flex align-items-center">
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-8 col-sm-8">
                                <h2 class="fw-bold fs-1">Experiências</h2>
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

    <section>
        <div class="container">


            <div class="c-experiencias__filtros border-bottom">
                <ul class="nav nav-pills nav-fill mt-2">
                    <li class="c-experiencias__filtros__search">
                        <div class="me-5 position-relative input-search input-search--tarifarios">
                            <span class="icon-search position-absolute"></span>
                            <input type="text" placeholder="Busque por itens extras" class="form-control me-5">
                            <span class="text-black-50 c-experiencias__filtros__search__border">|</span>
                        </div>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tickets" type="button" role="tab" aria-controls="tour-rj-tabContent" aria-selected="true">Tickets</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="tour-nordeste-tab" data-bs-toggle="tab" data-bs-target="#tour-nordeste-tabContent" type="button" role="tab" aria-controls="tour-nordeste-tabContent" aria-selected="false">Tours</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="tour-sp-tab" data-bs-toggle="tab" data-bs-target="#tour-sp-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Transfers</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="tour-sul-tab" data-bs-toggle="tab" data-bs-target="#tour-sul-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Translados</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="tour-pantanal-tab"  data-bs-toggle="tab" data-bs-target="#tour-pantanal-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Atrações</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="tour-eco-tab"  data-bs-toggle="tab" data-bs-target="#tour-eco-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Itens extras</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="tour-destinos-tab"  data-bs-toggle="tab" data-bs-target="#tour-destinos-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Tudo</button>
                    </li>
                </ul>

                <div class="fs-6 d-flex align-items-center flex-wrap mt-4">
                    <span class="me-3">Consulte as restrições com base no Covid-19</span>
                    <a href="juntos-somos-mais-fortes.php" class="btn-link fs-12 text-secondary border-secondary py-0">Leia mais</a>
                </div>
            </div>

            <div>
                <div class="c-experiencias__content">
                    
                    <div class="c-experiencias__content__item">
                        <a href="experiencia.php" class="text-reset text-secondary">
                            <div class="c-experiencias__content__item__img" style="background-image:url('assets/img/experiencias/entrada-beto-carreiro-word.jpg');"></div>
                            <h2 class="d-inline-block fs-12 text-white bg-primary py-1 px-3 rounded-1 mb-3">Ticket</h2>
                            <h3 class="fs-4">Entrada Beto Carreiro Word</h3>
                            <p class="fs-12 mb-2">Entreterimento para toda familia!</p>
                            <span class="c-experiencias__content__item__price fs-4"><span class="text-primary fw-500">R$89,90</span> Por Pessoa</span>
                            <span class="fw-500 mt-4 d-flex align-items-center text-primary">
                                Reservar <span class="icon-arrow-right fw-bold ms-2 fs-6"></span> 
                            </span>
                        </a>
                    </div>

                    <div class="c-experiencias__content__item">
                        <a href="experiencia.php" class="text-reset text-secondary">
                            <div class="c-experiencias__content__item__img" style="background-image:url('assets/img/experiencias/transfer-rio-buzios-rio.jpg');"></div>
                            <h2 class="d-inline-block fs-12 text-white bg-primary py-1 px-3 rounded-1 mb-3">Transfer</h2>
                            <h3 class="fs-4">Transfer Rio / Buzios / Rio</h3>
                            <p class="fs-12 mb-2">Somente Motorista | Privado</p>
                            <span class="c-experiencias__content__item__price fs-4"><span class="text-primary fw-500">R$89,90</span> Por Pessoa</span>
                            <span class="fw-500 mt-4 d-flex align-items-center text-primary">
                                Reservar <span class="icon-arrow-right fw-bold ms-2 fs-6"></span> 
                            </span>
                        </a>
                    </div>

                    <div class="c-experiencias__content__item">
                        <a href="experiencia.php" class="text-reset text-secondary">
                            <div class="c-experiencias__content__item__img" style="background-image:url('assets/img/experiencias/pao-de-acucar.jpg');"></div>
                            <h2 class="d-inline-block fs-12 text-white bg-primary py-1 px-3 rounded-1 mb-3">Ticket</h2>
                            <h3 class="fs-4">HD Pão de Açúcar</h3>
                            <p class="fs-12 mb-2">Entreterimento para toda familia!</p>
                            <span class="c-experiencias__content__item__price fs-4"><span class="text-primary fw-500">R$89,90</span> Por Pessoa</span>
                            <span class="fw-500 mt-4 d-flex align-items-center text-primary">
                                Reservar <span class="icon-arrow-right fw-bold ms-2 fs-6"></span> 
                            </span>
                        </a>
                    </div>

                    <div class="c-experiencias__content__item">
                        <a href="experiencia.php" class="text-reset text-secondary">
                            <div class="c-experiencias__content__item__img" style="background-image:url('assets/img/experiencias/tour-de-escuna-em-buzios.jpg');"></div>
                            <h2 class="d-inline-block fs-12 text-white bg-primary py-1 px-3 rounded-1 mb-3">Tour</h2>
                            <h3 class="fs-4">Tour de Escuna em Buzios</h3>
                            <p class="fs-12 mb-2">Entreterimento para toda familia!</p>
                            <span class="c-experiencias__content__item__price fs-4"><span class="text-primary fw-500">R$89,90</span> Por Pessoa</span>
                            <span class="fw-500 mt-4 d-flex align-items-center text-primary">
                                Reservar <span class="icon-arrow-right fw-bold ms-2 fs-6"></span> 
                            </span>
                        </a>
                    </div>

                    <div class="c-experiencias__content__item">
                        <a href="experiencia.php" class="text-reset text-secondary">
                            <div class="c-experiencias__content__item__img" style="background-image:url('assets/img/experiencias/trnf-apto-gru-city-tour.jpg');"></div>
                            <h2 class="d-inline-block fs-12 text-white bg-primary py-1 px-3 rounded-1 mb-3">Transfer</h2>
                            <h3 class="fs-4">TRNF APTO GRU + CITY TOUR</h3>
                            <p class="fs-12 mb-2">+ 1 hora de espera em centro comercial/ hotel </p>
                            <span class="c-experiencias__content__item__price fs-4"><span class="text-primary fw-500">R$89,90</span> Por Pessoa</span>
                            <span class="fw-500 mt-4 d-flex align-items-center text-primary">
                                Reservar <span class="icon-arrow-right fw-bold ms-2 fs-6"></span> 
                            </span>
                        </a>
                    </div>

                    <div class="c-experiencias__content__item">
                        <a href="experiencia.php" class="text-reset text-secondary">
                            <div class="c-experiencias__content__item__img" style="background-image:url('assets/img/experiencias/parque-nacional-brasileiro.jpg');"></div>
                            <h2 class="d-inline-block fs-12 text-white bg-primary py-1 px-3 rounded-1 mb-3">Ticket</h2>
                            <h3 class="fs-4">Parque Nacional Brasileiro</h3>
                            <p class="fs-12 mb-2">Entreterimento para toda familia!</p>
                            <span class="c-experiencias__content__item__price fs-4 fs-6"><span class="text-primary fw-500">R$89,90</span> Por Pessoa</span>
                            <span class="fw-500 mt-4 d-flex align-items-center text-primary">
                                Reservar <span class="icon-arrow-right fw-bold ms-2 fs-6"></span> 
                            </span>
                        </a>
                    </div>
                    <div class="c-experiencias__content__item">
                        <a href="experiencia.php" class="text-reset text-secondary">
                            <div class="c-experiencias__content__item__img" style="background-image:url('assets/img/experiencias/parque-nacional-argentino.jpg');"></div>
                            <h2 class="d-inline-block fs-12 text-white bg-primary py-1 px-3 rounded-1 mb-3">Transfer</h2>
                            <h3 class="fs-4">Parque Nacional Argentino</h3>
                            <p class="fs-12 mb-2">Entreterimento para toda familia!</p>
                            <span class="c-experiencias__content__item__price fs-4"><span class="text-primary fw-500">R$89,90</span> Por Pessoa</span>
                            <span class="fw-500 mt-4 d-flex align-items-center text-primary">
                                Reservar <span class="icon-arrow-right fw-bold ms-2 fs-6"></span> 
                            </span>
                        </a>
                    </div>
                    <div class="c-experiencias__content__item">
                        <a href="experiencia.php" class="text-reset text-secondary">
                            <div class="c-experiencias__content__item__img" style="background-image:url('assets/img/experiencias/favela-brasileira.jpg');"></div>
                            <h2 class="d-inline-block fs-12 text-white bg-primary py-1 px-3 rounded-1 mb-3">Tour</h2>
                            <h3 class="fs-4">Favela Brasileira</h3>
                            <p class="fs-12 mb-2">+ 1 hora de espera em centro comercial/ hotel </p>
                            <span class="c-experiencias__content__item__price fs-4"><span class="text-primary fw-500">R$89,90</span> Por Pessoa</span>
                            <span class="fw-500 mt-4 d-flex align-items-center text-primary">
                                Reservar <span class="icon-arrow-right fw-bold ms-2 fs-6"></span> 
                            </span>
                        </a>
                    </div>
                    <div class="c-experiencias__content__item">
                        <a href="experiencia.php" class="text-reset text-secondary">
                            <div class="c-experiencias__content__item__img" style="background-image:url('assets/img/experiencias/kayak.jpg');"></div>
                            <h2 class="d-inline-block fs-12 text-white bg-primary py-1 px-3 rounded-1 mb-3">Tour</h2>
                            <h3 class="fs-4">Kayak</h3>
                            <p class="fs-12 mb-2">Passeio Privado</p>
                            <span class="c-experiencias__content__item__price fs-4"><span class="text-primary fw-500">R$89,90</span> Por Pessoa</span>
                            <span class="fw-500 mt-4 d-flex align-items-center text-primary fs-6">
                                Reservar <span class="icon-arrow-right fw-bold ms-2"></span> 
                            </span>
                        </a>
                    </div>
                    <div class="c-experiencias__content__item">
                        <a href="experiencia.php" class="text-reset text-secondary">
                            <div class="c-experiencias__content__item__img" style="background-image:url('assets/img/experiencias/passeio-de-trem.jpg');"></div>
                            <h2 class="d-inline-block fs-12 text-white bg-primary py-1 px-3 rounded-1 mb-3">Ticket</h2>
                            <h3 class="fs-4">Passeio de Trem</h3>
                            <p class="fs-12 mb-2">Com Almoço | Privado</p>
                            <span class="c-experiencias__content__item__price fs-4"><span class="text-primary fw-500">R$89,90</span> Por Pessoa</span>
                            <span class="fw-500 mt-4 d-flex align-items-center text-primary">
                                Reservar <span class="icon-arrow-right fw-bold ms-2 fs-6"></span> 
                            </span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>


<?php include('includes/footer.php') ?>

