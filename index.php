
<?php include('includes/header.php') ?>


<main class="c-home">

    <section class="c-banner">
        <?php include('includes/search-box.php') ?>

        <div class="swiper-container h-100 JS__banner">
            
            <div class="swiper-wrapper h-100">

                <div class="c-banner__item swiper-slide h-100 d-flex align-items-end" style="background-image: url('assets/img/home/home-banner.jpg');">
                    
                    <img src="assets/img/banner-bg.png" alt="background" class="c-banner__background">
                    <div class="container text-light">
                        <div class="row h-100 d-flex align-items-center">
                            <div class="col-md-8 col-lg-7 col-xl-6 col-xxl-4">
                                <h2 class="fw-bold fs-3">Peru, uma experiência extraordinária!</h2>
                                <p>Com templos sagrados em florestas, cidades com vibrante vida noturna mares perfeitos para surfar e uma cultura de bem-estar.</p>
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

    <section class="c-home__tarifarios">
        <div class="c-home__tarifarios__box bg-white position-relative">
            <div class="container">
                <div class="row mb-5">
                    <h2 class="d-inline-block fs-5 text-primary p-2 mb-3">Tarifários</h2>
                    <h3 class="mb-4 fs-2 fw-bold text-secondary col-xl-4 col-xxl-3">Hotéis, transfers, tours, pacotes.</h3>
                    <p class="text-gray-200 fs-4 mb-5">Confira as alterações de valores do que precisar!</p>
                </div>
                <div class="row">
                    <div class="overflow-x">
                        <ul class="nav nav-tabs justify-content-between JS__tabsFlex">
                            <li class="nav-item">
                                <a class="nav-link" href="tarifarios.php">
                                    <span class="icon icon-lock"></span>Hotelaria
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tarifarios.php">
                                    <span class="icon icon-car"></span>Transfers
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tarifarios.php"><span class="icon icon-tour"></span>Tour</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tarifarios.php"><span class="icon icon-case"></span>Pacotes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tarifarios.php"><span class="icon icon-transfer"></span>Autos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tarifarios.php"><span class="icon icon-brasil"></span>Circuitos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tarifarios.php"><span class="icon icon-bad"></span>Casas & Apartamentos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
    
    <?php include('includes/destaque.php') ?>

    <section class="c-cards-carousel JS__cards-carousel">
        <div class="container-fluid h-100">
            <div class="row h-100 d-flex align-items-center">

                <div class="col-xl-3 c-cards-carousel__title h-100">

                    <div class="row">
                        <h2 class="d-inline-block fs-5 text-primary p-2 mb-0">Brasil por perfil de viagens</h2>
                        <h3 class="mb-4 fs-3 fw-bold text-secondary">Escolha a experiência ideal para seus clientes!</h3>
                        <p>Guia de produtos por perfil de viagens</p>
                    </div>
                    <div class="position-relative c-cards-carousel__pagination">
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev fs-4 shadow rounded-circle">
                            <span class="icon-arrow-left fw-bold text-primary"></span>
                        </div>
                        <div class="swiper-button-next fs-4 shadow rounded-circle">
                            <span class="icon-arrow-right fw-bold text-primary"></span>
                        </div>
                    </div>

                </div>

                <div class="c-cards-carousel__content">
                
                    <div class="swiper-container">
                    <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">

                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-brasil-secreto.jpg');">
                                <img src="assets/img/card-bg.png" class="o-card__bg">
                                <a href="brasil-secreto.php" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column w-100">
                                    <span class="icon icon-airport bg-white rounded text-primary rounded-circle "></span>
                                    <div class="o-card__content">
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Brasil Secreto</span>
                                        <p class="fs-6">Conheça todos os segredos escondidos deste pais incrível!</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-Hotelaria-all-Inclusive.jpg');">
                                <img src="assets/img/card-bg.png" alt="" class="o-card__bg">
                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <span class="icon icon-beach-view bg-white rounded text-primary rounded-circle "></span>
                                    <div>
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Hotelaria All Inclusive</span>
                                        <p class="fs-6">Todos os hotéis com serviço completo e melhor conforto.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-hotel-pet-friendly.jpg');">
                                <img src="assets/img/card-bg.png" alt="" class="o-card__bg">
                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <span class="icon icon-paw bg-white rounded text-primary rounded-circle "></span>
                                    <div>
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Hotéis Pet Friendly</span>
                                        <p class="fs-6">Sempre tem um membro que não pode ficar de fora.</p>
                                    </div>
                                </a>
                            </div>

                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-brasil-familias.jpg');">
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
                        
                    </div>
                </div>

            </div>
        </div>
    </section>


    <?php include('includes/experts.php') ?>


    <section class="c-home__info d-flex align-items-center">

        <div class="c-home__info__bg position-absolute" style="background-image: url('assets/img/home/home-info.jpg');"></div>

        <div class="container d-flex justify-content-end">
            
            <div class="c-home__info__container col-xl-12">

                <div class="bg-white c-home__info__container__box">

                    <div class="row mb-5">
                        <div class="col-xxl-3 col-xl-5 col-lg-6">
                            <h3 class="fs-2 fw-bold text-secondary">Informações técnicas e suporte</h3>
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-5 c-home__info__container__box__item">
                            <div>
                                <span class="c-home__info__container__box__icon icon-commission d-block"></span>
                                <h3 class="mb-4 fs-5 fw-500 text-secondary">Atualização de Tarifas</h3>
                                <p class="fs-6">Acompanhe as atualizações Tarifarias diariamente em um só lugar.</p>
                            </div>
                            <a href="destinos.php" class="btn-link fs-6">Saber mais</a>
                            
                        </div>      
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-5 c-home__info__container__box__item">
                            <span class="c-home__info__container__box__icon icon-document d-block"></span>
                            <h3 class="mb-4 fs-5 fw-500 text-secondary">Condições Gerais</h3>
                            <p class="fs-6">As condições regem todas nossas politicas, fique a parte sobre tudo.</p>
                            <a href="como-funcionamos.php" class="btn-link fs-6">Saber mais</a>
                        </div>      
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-5 c-home__info__container__box__item">
                            <span class="c-home__info__container__box__icon icon-user d-block"></span>
                            <h3 class="mb-4 fs-5 fw-500 text-secondary">Fornecedores</h3>
                            <p class="fs-6">Conheça todos os fornecedores espalhados pelo Brasil.</p>
                            <a href="parcerias.php" class="btn-link fs-6">Saber mais</a>
                        </div>      
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-5 c-home__info__container__box__item">
                            <span class="c-home__info__container__box__icon icon-sun d-block"></span>
                            <h3 class="mb-4 fs-5 fw-500 text-secondary">Covid-19</h3>
                            <p class="fs-6">Saiba quais as medidas vem sendo tomadas pela Journeys e parceiros.</p>
                            <a href="juntos-somos-mais-fortes.php" class="btn-link fs-6">Saber mais</a>
                        </div>      
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-5 c-home__info__container__box__item">
                            <span class="c-home__info__container__box__icon icon-suporter d-block"></span>
                            <h3 class="mb-4 fs-5 fw-500 text-secondary">Sap - Atendimento</h3>
                            <p class="fs-6">Atendimento dedicado a você para tirar qualquer dúvida, estamos a sua disposição.</p>
                            <a href="sap.php" class="btn-link fs-6">Saber mais</a>
                        </div>      
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-5 c-home__info__container__box__item">
                            <span class="c-home__info__container__box__icon icon-pin d-block"></span>
                            <h3 class="mb-4 fs-5 fw-500 text-secondary">Datas Especiais</h3>
                            <p class="fs-6">Algumas tarifas podem sofrer alterações de acordo com algumas datar, fique a parte.</p>
                            <a href="eventos.php" class="btn-link fs-6">Saber mais</a>
                        </div>      
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-5 c-home__info__container__box__item">
                            <span class="c-home__info__container__box__icon icon-beach d-block"></span>
                            <h3 class="mb-4 fs-5 fw-500 text-secondary">Vouchers</h3>
                            <p class="fs-6">Informações sobre utilizações de vouchers</p>
                            <a href="vouchers.php" class="btn-link fs-6">Saber mais</a>
                        </div>      
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-5 c-home__info__container__box__item">
                            <span class="c-home__info__container__box__icon icon-download d-block"></span>
                            <h3 class="mb-4 fs-5 fw-500 text-secondary">Downloads & Kit De Mídia</h3>
                            <p class="fs-6">Pegue nossos recursos oficiais da marca e saiba mais sobre as diretrizes de uso.</p>
                            <a href="kit-de-midia.php" class="btn-link fs-6">Saber mais</a>
                        </div>      
                       
                        
                    </div>

                </div>
                
            </div>
            
        </div>

    </section>


</main>


<?php include('includes/footer.php') ?>

