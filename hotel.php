
<?php include('includes/header--white.php') ?>


<main class="c-hotel">
        
    <section class="c-hotel__banner">

        <!-- Slider main container -->
        <div class="swiper-container h-100 JS__hotel-swiper">

            <!-- Additional required wrapper -->
            <div class="swiper-wrapper h-100">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div style="background-image:url('assets/img/hotel1.jpg');">
                        <a href="assets/img/hotel1.jpg" data-toggle="lightbox">
                            <img src="assets/img/hotel1.jpg" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div style="background-image:url('assets/img/hotel2.jpg');">
                        <a href="assets/img/hotel2.jpg" data-toggle="lightbox">
                            <img src="assets/img/hotel2.jpg" class="img-fluid">
                        </a>
                    </div>
                    <div style="background-image:url('assets/img/hotel3.jpg');">
                        <a href="assets/img/hotel3.jpg" data-toggle="lightbox">
                            <img src="assets/img/hotel3.jpg" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div style="background-image:url('assets/img/hotel4.jpg');">
                        <a href="assets/img/hotel4.jpg" data-toggle="lightbox">
                            <img src="assets/img/hotel4.jpg" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div style="background-image:url('assets/img/hotel2.jpg');">
                        <a href="assets/img/hotel2.jpg" data-toggle="lightbox">
                            <img src="assets/img/hotel2.jpg" class="img-fluid">
                        </a>
                    </div>
                    <div style="background-image:url('assets/img/hotel3.jpg');">
                        <a href="assets/img/hotel3.jpg" data-toggle="lightbox">
                            <img src="assets/img/hotel3.jpg" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

        


    </section>
 
    <section class="pt-5">

        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <h2 class="d-inline-block fs-5 text-primary p-2 px-0 mb-0">Hospedagem</h2>
                    <h1 class="mb-2 fs-3 fw-bold text-secondary">Belmond Copacabana Palace </h1>
                    <p class="text-black-50">Av. Atlântica, 1702 - Copacabana</p>
                    
                    <ul class="nav nav-tabs d-flex justify-content-between mt-5">
                        <li class="nav-item">
                            <button class="nav-link active" id="sobre-tab" data-bs-toggle="tab" data-bs-target="#sobre" type="button" role="tab" aria-controls="sobre" aria-selected="true">
                                <span class="icon icon-hotel"></span>Sobre o Hotel
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="apartamentos-tab" data-bs-toggle="tab" data-bs-target="#apartamentos" type="button" role="tab" aria-controls="apartamentos" aria-selected="false">
                                <span class="icon icon-hotel"></span>Apartamentos
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="localizacao-tab" data-bs-toggle="tab" data-bs-target="#localizacao" type="button" role="tab" aria-controls="localizacao" aria-selected="false">
                                <span class="icon icon-location"></span>Localização
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="destinos-tab" data-bs-toggle="tab" data-bs-target="#destinos" type="button" role="tab" aria-controls="destinos" aria-selected="false">
                                <span class="icon icon-map"></span>Destinos
                            </button>
                        </li>
                    </ul>


                    <div class="tab-content mt-5" id="myTabContent">
                        <div class="tab-pane fade show active" id="sobre" role="tabpanel" aria-labelledby="home-tab">
                            
                            <div class="border-bottom pb-5 text-secondary fs-6">

                                <h2 class="fs-28 fw-bold mb-5 col-xl-3">Um lugar cheio de histórias</h2>

                                <div class="col-xl-8">
                                    <p class="mb-5">Localizado na famosa Praia de Copacabana. o Belmond Copacabana Palace é reconhecidamente o mais luxuoso hotel do Brasil.</p>

                                    <p>Um símbolo de sofisticação e requinte, o Belmond Copacabana Palace oferece um serviço impecável, excelente gastronomia e luxuosas acomodações, confirmando a sua tradição de local ideal para se hospedar no Rio de Janeiro.</p>
                                </div>
                            </div>

                            
                            <div class="border-bottom pb-5 text-secondary fs-5 pt-5">

                                <h2 class="fs-28 fw-bold mb-5">Serviços & Comodidades</h2>

                                <div class="col-xl-8">
                                    <p class="mb-5 text-black-50">Impecáveis e habilmente projetadas, todas as acomodações apresentam comodidades e serviços muito cuidadoso.</p>
                                </div>
                            </div>

                            <div class="border-bottom pb-5 text-secondary fs-5 pt-5">

                                <h2 class="fs-28 mb-5"><span class="fw-bold">Belmond Copacabana Palace</span> (main Build)</h2>

                                <div class="col-xl-8">
                                    <p class="mb-5 text-black-50">Com 96 quartos nas categorias Vista Cidade, Suite Avenida, Suite Piscina e Suite Copacabana.</p>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="apartamentos" role="tabpanel" aria-labelledby="profile-tab">
                            b
                        </div>
                        <div class="tab-pane fade" id="localizacao" role="tabpanel" aria-labelledby="contact-tab">
                             c   
                        </div>
                        <div class="tab-pane fade" id="destinos" role="tabpanel" aria-labelledby="contact-tab">
                             d   
                        </div>
                    </div>

                </div>

                <div class="col-xl-4 offset-1">
                    <div class="c-hotel__price shadow">
                        <span class="text-primary fs-28"><span class="fw-500">R$ 510,00</span>/noite</span>
                        <div class="c-hotel__price__date d-flex">
                            <div>
                                <span>Check-In</span>
                                12 de Fevereiro
                            </div>
                            <div>
                                <span>Check-Out</span>
                                14 de Fevereiro
                            </div>
                        </div>
                        <span>Passageiros + Quarto/s</span>
                        02 passageiros • 01 Quarto
                        
                    </div>
                </div>
            </div>
        </div>

    </section>
    
    <section class="c-cards-carousel">
        <div class="container-fluid overflow-hidden">
            <div class="c-cards-carousel__title w-100 p-0">
                <h2 class="d-inline-block fs-5 text-primary p-2 px-0 mb-0">Novas experiências</h2>
                <h3 class="mb-2 fs-3 fw-bold text-secondary">Confira outros hotéis</h3>
                <p class="text-black-50 mb-5">Encontre outras opções de hotéis</p>
               
                <div class="swiper-container JS-cards">
               
                    <div class="swiper-wrapper">
                        <article class="swiper-slide o-hotel shadow">
                            <div class="o-hotel__img w-100 overflow-hidden" style="background-image: url('assets/img/windsor-marapendi-hotel.jpg');">
                                <img src="assets/img/hotel-bg.png">
                            </div>
                            <div class="o-hotel__content">

                                <div class="o-hotel__content__header border-bottom d-flex align-items-center">
                                    <div class="o-hotel__content__header__title d-inline">
                                        <span class="d-block lh-1">Centro - Rio de Janeiro - Rj</span>
                                        <span class="d-block text-primary fs-4 fw-bold">Windsor Marapendi Hotel</span>
                                    </div>
                                    <div class="o-hotel__content__header__icons text-black-50 d-flex align-items-center">
                                        <span class="icon-paw"></span>
                                        <span class="icon-beach-view"></span>
                                        <span class="icon-wifi"></span>
                                        <span class="icon-pwd"></span>
                                        <span class="icon-key"></span>
                                    </div>

                                </div>

                                

                            </div>
                        </article>
                        
                        <article class="swiper-slide o-hotel shadow">
                            <div class="o-hotel__img w-100 overflow-hidden" style="background-image: url('assets/img/windsor-marapendi-hotel.jpg');">
                                <img src="assets/img/hotel-bg.png">
                            </div>
                            <div class="o-hotel__content">

                                <div class="o-hotel__content__header border-bottom d-flex align-items-center">
                                    <div class="o-hotel__content__header__title d-inline">
                                        <span class="d-block lh-1">Centro - Rio de Janeiro - Rj</span>
                                        <span class="d-block text-primary fs-4 fw-bold">Windsor Marapendi Hotel</span>
                                    </div>
                                    <div class="o-hotel__content__header__icons text-black-50 d-flex align-items-center">
                                        <span class="icon-paw"></span>
                                        <span class="icon-beach-view"></span>
                                        <span class="icon-wifi"></span>
                                        <span class="icon-pwd"></span>
                                        <span class="icon-key"></span>
                                    </div>

                                </div>

                            </div>
                        </article>
                        <article class="swiper-slide o-hotel shadow">
                            <div class="o-hotel__img w-100 overflow-hidden" style="background-image: url('assets/img/windsor-marapendi-hotel.jpg');">
                                <img src="assets/img/hotel-bg.png">
                            </div>
                            <div class="o-hotel__content">

                                <div class="o-hotel__content__header border-bottom d-flex align-items-center">
                                    <div class="o-hotel__content__header__title d-inline">
                                        <span class="d-block lh-1">Centro - Rio de Janeiro - Rj</span>
                                        <span class="d-block text-primary fs-4 fw-bold">Windsor Marapendi Hotel</span>
                                    </div>
                                    <div class="o-hotel__content__header__icons text-black-50 d-flex align-items-center">
                                        <span class="icon-paw"></span>
                                        <span class="icon-beach-view"></span>
                                        <span class="icon-wifi"></span>
                                        <span class="icon-pwd"></span>
                                        <span class="icon-key"></span>
                                    </div>

                                </div>

                            </div>
                        </article>
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

    <?php include('includes/destaque.php') ?>

    <section class="c-cards-carousel">
        <div class="container-fluid h-100">
            <div class="row h-100 d-flex align-items-center">

                <div class="col-xl-3 c-cards-carousel__title">
                    <h2 class="d-inline-block fs-5 text-primary p-2 px-0 mb-0">Classificação</h2>
                    <h3 class="mb-4 fs-3 fw-bold text-secondary">Encontre a experiencia perfeita com nossa seleção de hotéis</h3>
                    <p class="text-black-50">Explore os diversos hotéis com classificações desde a gastronomia até a decoração</p>

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
                                    <div>
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Maraú</span>
                                        <p class="fs-6">Lugar incrível, oferecido por  <span class="fw-bold">Butterfly House Bahia</span></p>
                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-maragogi.jpg');">

                                <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <span class="icon icon-key bg-white rounded text-warning rounded-circle "></span>
                                    <div>
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Maragogi</span>
                                        <p class="fs-6">Viva uma experiência no hotel <span class="fw-bold">Camurim Grande</span>.</p>
                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-trancoso2.jpg');">

                                <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <span class="icon icon-key bg-white rounded text-warning rounded-circle "></span>
                                    <div>
                                        <span class="fs-4 text-white fw-500 mb-2 d-block">Trancoso</span>
                                        <p class="fs-6">Lugar incrível, oferecido por <span class="fw-bold">Vilas de Trancoso</span></p>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide o-card d-flex align-items-end" style="background-image: url('assets/img/card-buzios.jpg');">

                                <img src="assets/img/card-bg.png" alt="" class="o-card__bg">

                                <a href="#" class="text-reset text-white h-100 d-flex flex-wrap align-items-start justify-content-between flex-column">
                                    <span class="icon icon-key bg-white rounded text-warning rounded-circle "></span>
                                    <div>
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
    

    <section class="c-condicoes">
        <div class="container">
            <div class="row mb-5">
                <div class="col-xl-7">
                    <h2 class="d-inline-block fs-5 text-primary p-2 px-0 mb-0">Condições</h2>
                    <h3 class="mb-2 fs-3 fw-bold text-secondary">Coisas a saber</h3>
                </div>
            </div>
            <div class="row pt-5 d-flex justify-content-between">
                <div class="c-condicoes__item--1 fs-6">
                    <span class="icon-bad d-block fs-3 mb-4"></span>
                    Oferecem poucos quartos e, muitas vezes, são diferenciados, com categorias personalizadas para cada quarto.
                </div>
                <div class="c-condicoes__item--2 fs-6">
                    <span class="icon-edit-values d-block fs-3 mb-4"></span>
                    Políticas de marketing diferenciadas, pois normalmente não funcionam com tarifas de operadora e agência, ou seja, protegidas.
                </div>
                <div class="c-condicoes__item--3 fs-6">
                    <span class="icon-edit-values d-block fs-3 mb-4"></span>
                    Aplicam-se severas restrições na política de garantia de reserva, prazos de cancelamento sem despesas e reembolsos.
                </div>
                <div class="c-condicoes__item--4 fs-6">
                    <span class="icon-user d-block fs-3 mb-4"></span>
                    Valorizam um relacionamento personalizado tanto com o hóspede quanto na sua forma de marketing e divulgação.
                </div>
                <div class="c-condicoes__item--5 fs-6">
                    <span class="icon-tax-increace d-block fs-3 mb-4"></span>
                    Não funcionam com taxas de mercado nacional e internacional.
                </div>
                <div class="c-condicoes__item--6 fs-6">
                    <span class="icon-bad d-block fs-3 mb-4"></span>
                    Muitos deles não aceitam menores ou grupos.
                </div>
            
            </div>
        </div>
    </section>

</main>

<script src="assets/js/pages/hotel.js"></script>

<?php include('includes/footer.php') ?>

