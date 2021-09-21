
<?php include('includes/header.php') ?>


<main class="c-reservas">

    <section class="c-banner c-banner--reduced-search">
        <?php include('includes/search-box--reduced.php') ?>

        <div class="swiper-container h-100 JS__banner">
            
            <div class="swiper-wrapper h-100">

                <div class="c-banner__item swiper-slide h-100 d-flex align-items-end" style="background-image: url('assets/img/banner-tarifarios.jpg');">
                    <img src="assets/img/banner-bg.png" alt="background" class="c-banner__background">
                    <div class="container text-light">
                        <div class="row h-100 d-flex align-items-center">
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-8 col-sm-8">
                                <h1 class="d-inline-block fs-6 text-secondary bg-light p-2 px-3 rounded-1 mb-3">Aventuras</h1>
                                <h2 class="c-banner__title fw-bold fs-3">Passeios, esportes e ecoturismo</h2>
                                <p>Vivencie experiencias únicas e deixe sua viagem muito mais marcante</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        </div>

    </section>

    <section class="py-5 mb-5">
        <div class="container">

            <div class="row mb-5">
                <div class="col">
                    <h2 class="d-inline-block fs-5 text-primary p-2 px-0 mb-0">Tarifários</h2>
                    <h1 class="mb-2 fs-3 fw-bold text-secondary">Hotéis, transfers, tours, pacotes.</h1>
                    <p class="text-black-50 mb-5 fs-4">Confira as alterações de valores do que precisar!</p>
                    
                    <div class="overflow-x">
                        <ul class="nav nav-tabs d-flex justify-content-between JS__tabsFlex">
                            <li class="nav-item">
                                <button class="nav-link active" id="hotelaria-tab" data-bs-toggle="tab" data-bs-target="#hotelaria" type="button" role="tab" aria-controls="hotelaria" aria-selected="true">
                                    <span class="icon icon-lock me-3"></span>Hotelaria
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="transfers-tab" data-bs-toggle="tab" data-bs-target="#transfers" type="button" role="tab" aria-controls="transfers" aria-selected="false">
                                    <span class="icon icon-car me-3"></span>Transfers
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="tour-tab" data-bs-toggle="tab" data-bs-target="#tour" type="button" role="tab" aria-controls="transfers" aria-selected="false">
                                    <span class="icon icon-tour me-3"></span>Tour
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="pacotes-tab" data-bs-toggle="tab" data-bs-target="#pacotes" type="button" role="tab" aria-controls="pacotes" aria-selected="false">
                                    <span class="icon icon-case me-3"></span>Pacotes
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="autos-tab" data-bs-toggle="tab" data-bs-target="#autos" type="button" role="tab" aria-controls="autos" aria-selected="false">
                                <span class="icon icon-transfer me-3"></span>Autos
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="circuitos-tab" data-bs-toggle="tab" data-bs-target="#circuitos" type="button" role="tab" aria-controls="circuitos" aria-selected="false">
                                <span class="icon icon-brasil me-3"></span>Circuitos
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="casas-tab" data-bs-toggle="tab" data-bs-target="#casas" type="button" role="tab" aria-controls="casas" aria-selected="false">
                                    <span class="icon icon-bad me-3"></span>Casas &amp; Apartamentos
                                </button>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>


            <div class="tab-content" id="tabTarifados">

                <div class="tab-pane fade active show" id="hotelaria" role="tabpanel" aria-labelledby="hotelaria-tab">

                    <div class="row">
                        <div class="col">

                            <ul class="nav nav-pills nav-fill mt-2">
                                <li class="input-search--tarifarios">
                                    <div class="me-5 position-relative input-search">
                                        <span class="icon-search position-absolute"></span>
                                        <input type="text" placeholder="Busque por um produto, cidade ou região" class="form-control me-5">
                                        <span class="text-black-50 separator">|</span>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link active" id="hotelaria-rj-tab" data-bs-toggle="tab" data-bs-target="#hotelaria-rj-tabContent" type="button" role="tab" aria-controls="hostelaria-rj-tabContent" aria-selected="true">Rio de Janeiro</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="hotelaria-nordeste-tab" data-bs-toggle="tab" data-bs-target="#hotelaria-nordeste-tabContent" type="button" role="tab" aria-controls="hotelaria-nordeste-tabContent" aria-selected="false">Nordeste</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="hotelaria-sp-tab" data-bs-toggle="tab" data-bs-target="#hotelaria-sp-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">São Paulo e Arredores</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="hotelaria-sul-tab" data-bs-toggle="tab" data-bs-target="#hotelaria-sul-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Região Sul</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="hotelaria-pantanal-tab"  data-bs-toggle="tab" data-bs-target="#hotelaria-pantanal-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Pantanal</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="hotelaria-eco-tab"  data-bs-toggle="tab" data-bs-target="#hotelaria-eco-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Eco-Destinos</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="hotelaria-destinos-tab"  data-bs-toggle="tab" data-bs-target="#hotelaria-destinos-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Demais Destinos</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="hotelaria-restaurantes-tab"  data-bs-toggle="tab" data-bs-target="#hotelaria-restaurantes-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Restaurantes</button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content" id="tabHotelaria">

                        <div class="tab-pane fade active show" id="hotelaria-rj-tabContent" role="tabpanel" aria-labelledby="hotelaria-rj-tab"> 
                            <div class="row pt-5 border-bottom pb-4">
                                <div class="col">
                                    <h2 class="mb-2 fw-bold text-secondary fs-24">Rio de Janeiro</h2>
                                    <p class="fs-12 mb-4">Se preferir escolha a cidade ou a região especificada</p>
                                    <div class="d-flex flex-wrap">
                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria_rj_rio-de-janeiro">
                                            <label class="form-check-label" for="hotelaria_rj_rio-de-janeiro">
                                                Rio de Janeiro
                                            </label>
                                        </div>  
                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria_rj_angra-dos-reis">
                                            <label class="form-check-label" for="hotelaria_rj_angra-dos-reis">
                                                Angra dos Reis
                                            </label>
                                        </div>  
                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria_rj_arraial-do-cabo">
                                            <label class="form-check-label" for="hotelaria_rj_arraial-do-cabo">
                                                Arraial do Cabo
                                            </label>
                                        </div>  
                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria_rj_buzios">
                                            <label class="form-check-label" for="hotelaria_rj_buzios">
                                                Búzios
                                            </label>
                                        </div>  
                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria_rj_cabo-frio">
                                            <label class="form-check-label" for="hotelaria_rj_cabo-frio">
                                                Cabo Frio
                                            </label>
                                        </div>  
                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria_rj_mangaratiba">
                                            <label class="form-check-label" for="hotelaria_rj_mangaratiba">
                                                Mangaratiba
                                            </label>
                                        </div>  
                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria_rj_paraty">
                                            <label class="form-check-label" for="hotelaria_rj_paraty">
                                                Paraty
                                            </label>
                                        </div>  
                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria_rj_vassouras">
                                            <label class="form-check-label" for="hotelaria_rj_vassouras">
                                                Vassouras
                                            </label>
                                        </div>  
                                    </div>
                                </div>
                            </div>

                            <div class="row border-bottom pt-5">
                                <div class="col-xl-12">
                                    <span class="d-inline-block fs-12 p-2 px-0 mb-0">Copacabana - Rio de Janeiro - Rj</span>
                                    <h2 class="mb-2 fw-bold text-primary fs-24">Belmond Copacabana Palace</h2>
                                    
                                    <p class="fs-12"> 
                                        <span class="o-hotel__img__item md-inline-block fw-500 me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.965" height="10.512"><path data-name="Caminho 36" d="M6.248.476l1.033 2.093a.853.853 0 00.642.467l2.31.335a.854.854 0 01.473 1.456L9.035 6.456a.854.854 0 00-.245.755l.395 2.3a.853.853 0 01-1.238.9L5.881 9.325a.854.854 0 00-.794 0l-2.066 1.086a.853.853 0 01-1.238-.9l.395-2.3a.853.853 0 00-.246-.755L.26 4.827a.854.854 0 01.473-1.456l2.31-.335a.853.853 0 00.642-.467L4.718.476a.853.853 0 011.53 0z" fill="#0f6b7b"></path></svg>
                                            <span class="ms-1">03</span>
                                        </span>  
                                        Twin Standart BB   |   Sem Reembolso   |   Disp. Sob-Consulta
                                    </p>
                                    
                                    <div class="c-reservas__table">
                                        <table class="table table-striped fs-6 table-borderless mt-5" id="table">
                                            <thead>
                                                <tr class="text-secondary">
                                                    <th scope="col">Categoria</th>
                                                    <th scope="col">Vista</th>
                                                    <th scope="col">In</th>
                                                    <th scope="col">Out</th>
                                                    <th scope="col">Tipo</th>
                                                    <th scope="col">EBB</th>
                                                    <th scope="col">Semana</th>
                                                    <th scope="col">Remark</th>
                                                    <th scope="col">Promo</th>
                                                    <th scope="col">BB</th>
                                                    <th scope="col">MAP</th>
                                                    <th scope="col">FAP</th>
                                                    <th scope="col">AI</th>
                                                    <th scope="col">SGL</th>
                                                    <th scope="col">DBL</th>
                                                    <th scope="col">TPL</th>
                                                    <th scope="col">QLP</th>
                                                    <th scope="col">CHD1</th>
                                                    <th scope="col">CHD2</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td scope="row">Médio</td>
                                                    <td>Cidade</td>
                                                    <td>30/03/21</td>
                                                    <td>01/04/21</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Dias de Aplicação</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Inc</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>114</td>
                                                    <td>114</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">Médio</td>
                                                    <td>Cidade</td>
                                                    <td>05/04/21</td>
                                                    <td>27/12/21</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Dias de Aplicação</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Inc</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>114</td>
                                                    <td>114</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">Grande</td>
                                                    <td>Praia</td>
                                                    <td>30/03/21</td>
                                                    <td>01/04/21</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Dias de Aplicação</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Inc</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>274</td>
                                                    <td>274</td>
                                                    <td>349</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">Grande</td>
                                                    <td>Praia</td>
                                                    <td>05/04/21</td>
                                                    <td>27/12/21</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Dias de Aplicação</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Inc</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>274</td>
                                                    <td>274</td>
                                                    <td>349</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="row border-bottom">
                                        <div class="col">

                                            <a class="c-busca__controls__item text-decoration-none fs-4 text-primary fw-500 d-flex align-items-center p-3 px-0 border-0 pb-4 collapsed" data-bs-toggle="collapse" data-bs-target="#belmond-copacabana-palace-info" aria-expanded="false" aria-controls="info">
                                                <span class="icon-info me-3 fs-28"></span>
                                                <span class="me-3">Informações Importantes</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397"><path data-name="Caminho 4" d="M7.365.001a1.029 1.029 0 01.729.3l6.337 6.337a1.032 1.032 0 01-1.459 1.459l-5.6-5.6-5.6 5.6a1.036 1.036 0 11-1.47-1.459L6.631.302a1.029 1.029 0 01.734-.301z" fill="#0e6a7a"></path></svg>
                                            </a>
                                    
                                            <div class="multi-collapse collapse border-0" id="belmond-copacabana-palace-info">
                                                <div class="row border-top py-4"> 
                                                    <div class="col-xl-4 col-lg-6 fs-6 mb-4">
                                                        <span class="d-block icon-suport fs-24 mb-3"></span>
                                                        <span class="d-block text-primary fw-500 mb-3 fs-4">Nossa Opinião</span>
                                                        <p> El hotel Arpoador, es una opción excelente para quien desea conocer Rio de Janeiro y hospedarse en una de las mejores localizaciones de la ciudad. El barrio de Ipanema,
                                                        cuenta con bares, entretenimiento y una de las mejores vistas de la ciudad. Desde la
                                                        terraza es posible visualizar un imponente atardecer, con vista al “Morro dos Irmãos”</p>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-5 offset-lg-1 fs-6 mb-4">
                                                        <span class="d-block icon-parking mb-3 fs-24"></span>
                                                        <span class="d-block text-primary fs-4 fw-500 mb-3">Condições Gerais</span>
                                                        <p>Acepta 01 Chd free hasta 05 años en habitación doble con los padres solamente en la categoria Grande.</p>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-5 offset-xl-1 fs-6">
                                                        <span class="d-block icon-calendar mb-3 fs-24"></span>
                                                        <span class="d-block text-primary fs-4 fw-500 mb-3">Check-In / Check-Out</span>
                                                        <p">14:00h / 12:00h</p>    
                                                    </div>
                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row border-bottom pt-5">
                                <div class="col-xl-12">

                                    <span class="d-inline-block fs-12 p-2 px-0 mb-0">Copacabana - Rio de Janeiro - Rj</span>
                                    <h2 class="mb-2 fw-bold text-primary fs-24">ASTORIA COPACABANA</h2>
                                    <p class="fs-12"> 
                                        <span class="o-hotel__img__item md-inline-block fw-500 me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.965" height="10.512"><path data-name="Caminho 36" d="M6.248.476l1.033 2.093a.853.853 0 00.642.467l2.31.335a.854.854 0 01.473 1.456L9.035 6.456a.854.854 0 00-.245.755l.395 2.3a.853.853 0 01-1.238.9L5.881 9.325a.854.854 0 00-.794 0l-2.066 1.086a.853.853 0 01-1.238-.9l.395-2.3a.853.853 0 00-.246-.755L.26 4.827a.854.854 0 01.473-1.456l2.31-.335a.853.853 0 00.642-.467L4.718.476a.853.853 0 011.53 0z" fill="#0f6b7b"></path></svg>
                                            <span class="ms-1">03</span>
                                        </span>  
                                        Twin Standart BB   |   Sem Reembolso   |   Disp. Sob-Consulta
                                    </p>

                                    <div class="c-reservas__table">
                                        <table class="table table-striped fs-6 table-borderless mt-5" id="table">
                                            <thead>
                                                <tr class="text-secondary">
                                                    <th scope="col">Categoria</th>
                                                    <th scope="col">Vista</th>
                                                    <th scope="col">In</th>
                                                    <th scope="col">Out</th>
                                                    <th scope="col">Tipo</th>
                                                    <th scope="col">EBB</th>
                                                    <th scope="col">Semana</th>
                                                    <th scope="col">Remark</th>
                                                    <th scope="col">Promo</th>
                                                    <th scope="col">BB</th>
                                                    <th scope="col">MAP</th>
                                                    <th scope="col">FAP</th>
                                                    <th scope="col">AI</th>
                                                    <th scope="col">SGL</th>
                                                    <th scope="col">DBL</th>
                                                    <th scope="col">TPL</th>
                                                    <th scope="col">QLP</th>
                                                    <th scope="col">CHD1</th>
                                                    <th scope="col">CHD2</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td scope="row">Standard</td>
                                                    <td>Sem Vista</td>
                                                    <td>30/03/21</td>
                                                    <td>01/04/21</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Dias de Aplicação</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Inc</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>35</td>
                                                    <td>39</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">Standard</td>
                                                    <td>Sem Vista</td>
                                                    <td>05/04/21</td>
                                                    <td>27/12/21</td>
                                                    <td>Semana Santa</td>
                                                    <td>-</td>
                                                    <td>Dias de Aplicação</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Inc</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>55</td>
                                                    <td>60</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">Standard</td>
                                                    <td>Sem Vista</td>
                                                    <td>30/03/21</td>
                                                    <td>01/04/21</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Dias de Aplicação</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Inc</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>274</td>
                                                    <td>274</td>
                                                    <td>349</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">Standard</td>
                                                    <td>Sem Vista</td>
                                                    <td>05/04/21</td>
                                                    <td>27/12/21</td>
                                                    <td>Rock in Rio</td>
                                                    <td>-</td>
                                                    <td>Dias de Aplicação</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Inc</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>274</td>
                                                    <td>274</td>
                                                    <td>349</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="row border-bottom">
                                        <div class="col">
                                            <a class="c-busca__controls__item text-decoration-none fs-4 text-primary fw-500 d-flex align-items-center p-3 px-0 border-0 pb-4 collapsed" data-bs-toggle="collapse" data-bs-target="#astoria-copacabana-info" aria-expanded="false" aria-controls="info">
                                                <span class="icon-info me-3 fs-28"></span>
                                                <span class="me-3">Informações Importantes</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397"><path data-name="Caminho 4" d="M7.365.001a1.029 1.029 0 01.729.3l6.337 6.337a1.032 1.032 0 01-1.459 1.459l-5.6-5.6-5.6 5.6a1.036 1.036 0 11-1.47-1.459L6.631.302a1.029 1.029 0 01.734-.301z" fill="#0e6a7a"></path></svg>
                                            </a>
                                        
                                            <div class="multi-collapse collapse border-0" id="astoria-copacabana-info">
                                                <div class="row border-top py-4"> 
                                                    <div class="col-xl-4 col-lg-6 fs-6 mb-4">
                                                        <span class="d-block icon-suport fs-24 mb-3"></span>
                                                        <span class="d-block text-primary fw-500 mb-3 fs-4">Nossa Opinião</span>
                                                        <p> El hotel Arpoador, es una opción excelente para quien desea conocer Rio de Janeiro y hospedarse en una de las mejores localizaciones de la ciudad. El barrio de Ipanema,
                                                        cuenta con bares, entretenimiento y una de las mejores vistas de la ciudad. Desde la
                                                        terraza es posible visualizar un imponente atardecer, con vista al “Morro dos Irmãos”</p>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-5 offset-lg-1 fs-6 mb-4">
                                                        <span class="d-block icon-parking mb-3 fs-24"></span>
                                                        <span class="d-block text-primary fs-4 fw-500 mb-3">Condições Gerais</span>
                                                        <p>Acepta 01 Chd free hasta 05 años en habitación doble con los padres solamente en la categoria Grande.</p>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-5 offset-xl-1 fs-6">
                                                        <span class="d-block icon-calendar mb-3 fs-24"></span>
                                                        <span class="d-block text-primary fs-4 fw-500 mb-3">Check-In / Check-Out</span>
                                                        <p">14:00h / 12:00h</p>    
                                                    </div>
                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row c-reservas__table pt-5">
                                <div class="col-xl-12">
                                    <span class="d-inline-block fs-12 p-2 px-0 mb-0">Copacabana - Rio de Janeiro - Rj</span>
                                    <h2 class="mb-2 fw-bold text-primary fs-24">ATLANTICO PRAIA</h2>
                                    <p class="fs-12"> 
                                        <span class="o-hotel__img__item md-inline-block fw-500 me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.965" height="10.512"><path data-name="Caminho 36" d="M6.248.476l1.033 2.093a.853.853 0 00.642.467l2.31.335a.854.854 0 01.473 1.456L9.035 6.456a.854.854 0 00-.245.755l.395 2.3a.853.853 0 01-1.238.9L5.881 9.325a.854.854 0 00-.794 0l-2.066 1.086a.853.853 0 01-1.238-.9l.395-2.3a.853.853 0 00-.246-.755L.26 4.827a.854.854 0 01.473-1.456l2.31-.335a.853.853 0 00.642-.467L4.718.476a.853.853 0 011.53 0z" fill="#0f6b7b"></path></svg>
                                            03
                                        </span>  
                                        Twin Standart BB   |   Sem Reembolso   |   Disp. Sob-Consulta
                                    </p>
                                    <div class="c-reservas__table">
                                        <table class="table table-striped fs-6 table-borderless mt-5" id="table">
                                            <thead>
                                                <tr class="text-secondary">
                                                    <th scope="col">Categoria</th>
                                                    <th scope="col">Vista</th>
                                                    <th scope="col">In</th>
                                                    <th scope="col">Out</th>
                                                    <th scope="col">Tipo</th>
                                                    <th scope="col">EBB</th>
                                                    <th scope="col">Semana</th>
                                                    <th scope="col">Remark</th>
                                                    <th scope="col">Promo</th>
                                                    <th scope="col">BB</th>
                                                    <th scope="col">MAP</th>
                                                    <th scope="col">FAP</th>
                                                    <th scope="col">AI</th>
                                                    <th scope="col">SGL</th>
                                                    <th scope="col">DBL</th>
                                                    <th scope="col">TPL</th>
                                                    <th scope="col">QLP</th>
                                                    <th scope="col">CHD1</th>
                                                    <th scope="col">CHD2</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td scope="row">Médio</td>
                                                    <td>Cidade</td>
                                                    <td>30/03/21</td>
                                                    <td>01/04/21</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Dias de Aplicação</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Inc</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>114</td>
                                                    <td>114</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">Médio</td>
                                                    <td>Cidade</td>
                                                    <td>05/04/21</td>
                                                    <td>27/12/21</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Dias de Aplicação</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Inc</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>114</td>
                                                    <td>114</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">Grande</td>
                                                    <td>Praia</td>
                                                    <td>30/03/21</td>
                                                    <td>01/04/21</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Dias de Aplicação</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Inc</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>274</td>
                                                    <td>274</td>
                                                    <td>349</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">Grande</td>
                                                    <td>Praia</td>
                                                    <td>05/04/21</td>
                                                    <td>27/12/21</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Dias de Aplicação</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Inc</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>274</td>
                                                    <td>274</td>
                                                    <td>349</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="row border-bottom">
                                        <div class="col">
                                            <a class="c-busca__controls__item text-decoration-none fs-4 text-primary fw-500 d-flex align-items-center p-3 px-0 border-0 pb-4 collapsed" data-bs-toggle="collapse" data-bs-target="#atlantico-praia-info" aria-expanded="false" aria-controls="info">
                                                <span class="icon-info me-3 fs-28"></span>
                                                <span class="me-3">Informações Importantes</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397"><path data-name="Caminho 4" d="M7.365.001a1.029 1.029 0 01.729.3l6.337 6.337a1.032 1.032 0 01-1.459 1.459l-5.6-5.6-5.6 5.6a1.036 1.036 0 11-1.47-1.459L6.631.302a1.029 1.029 0 01.734-.301z" fill="#0e6a7a"></path></svg>
                                            </a>
                                        
                                            <div class="multi-collapse collapse border-0" id="atlantico-praia-info">
                                                <div class="row border-top py-4"> 
                                                    <div class="col-xl-4 col-lg-6 fs-6 mb-4">
                                                        <span class="d-block icon-suport fs-24 mb-3"></span>
                                                        <span class="d-block text-primary fw-500 mb-3 fs-4">Nossa Opinião</span>
                                                        <p> El hotel Arpoador, es una opción excelente para quien desea conocer Rio de Janeiro y hospedarse en una de las mejores localizaciones de la ciudad. El barrio de Ipanema,
                                                        cuenta con bares, entretenimiento y una de las mejores vistas de la ciudad. Desde la
                                                        terraza es posible visualizar un imponente atardecer, con vista al “Morro dos Irmãos”</p>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-5 offset-lg-1 fs-6 mb-4">
                                                        <span class="d-block icon-parking mb-3 fs-24"></span>
                                                        <span class="d-block text-primary fs-4 fw-500 mb-3">Condições Gerais</span>
                                                        <p>Acepta 01 Chd free hasta 05 años en habitación doble con los padres solamente en la categoria Grande.</p>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-5 offset-xl-1 fs-6">
                                                        <span class="d-block icon-calendar mb-3 fs-24"></span>
                                                        <span class="d-block text-primary fs-4 fw-500 mb-3">Check-In / Check-Out</span>
                                                        <p">14:00h / 12:00h</p>    
                                                    </div>
                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="hotelaria-nordeste-tabContent" role="tabpanel" aria-labelledby="hotelaria-nordeste-tab"> 
                            <div class="row pt-5 border-bottom pb-4">
                                <div class="col">
                                    <h2 class="mb-2 fw-bold text-secondary fs-24">Nordeste</h2>
                                    <p class="fs-12 mb-4">Se preferir escolha a cidade ou a região especificada</p>
                                    <div class="d-flex flex-wrap">
                                        
                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria-nordeste-aracaju">
                                            <label class="form-check-label" for="hotelaria_nordeste-aracaju">
                                                Aracaju
                                            </label>
                                        </div>  
                                        
                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria-nordeste-arraial_dajuda">
                                            <label class="form-check-label" for="hotelaria-nordeste-arraial_dajuda">
                                                Arraial D'Ajuda
                                            </label>
                                        </div>  

                                        
                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria-nordeste-cabo_de_santo_agostinho">
                                            <label class="form-check-label" for="hotelaria-nordeste-cabo_de_santo_agostinho">
                                                Cabo de Santo Agostinho 
                                            </label>
                                        </div>  

                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria-nordeste-cairu">
                                            <label class="form-check-label" for="hotelaria-nordeste-cairu">
                                                Cairu
                                            </label>
                                        </div>  

                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria-nordeste-camacari">
                                            <label class="form-check-label" for="hotelaria-nordeste-camacari">
                                                Camaçari
                                            </label>
                                        </div>  

                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria-nordeste-camocim">
                                            <label class="form-check-label" for="hotelaria-nordeste-camocim">
                                                Camocim
                                            </label>
                                        </div>  
                                        
                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria-nordeste-costa-do-sauipe">
                                            <label class="form-check-label" for="hotelaria-nordeste-costa-do-sauipe">
                                                Costa do Sauipe
                                            </label>
                                        </div>  
                                        

                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria-nordeste-fortaleza">
                                            <label class="form-check-label" for="hotelaria-nordeste-fortaleza">
                                                Fortaleza 
                                            </label>
                                        </div>  

                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria-nordeste-fortaleza_aquiraz">
                                            <label class="form-check-label" for="hotelaria-nordeste-fortaleza_aquiraz">
                                                Fortaleza Aquiraz
                                            </label>
                                        </div>  

                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria-nordeste-fortaleza_cumbuco">
                                            <label class="form-check-label" for="hotelaria-nordeste-fortaleza_cumbuco">
                                                Fortaleza Cumbuco
                                            </label>
                                        </div>  

                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria-nordeste-fortaleza_fortim">
                                            <label class="form-check-label" for="hotelaria-nordeste-fortaleza_fortim">
                                                Fortaleza Fortim
                                            </label>
                                        </div>  

                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria-nordeste-fortaleza_trairi">
                                            <label class="form-check-label" for="hotelaria-nordeste-fortaleza_trairi">
                                                Fortaleza Trairi
                                            </label>
                                        </div>  

                                        
                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria-nordeste-ilheus">
                                            <label class="form-check-label" for="hotelaria-nordeste-ilheus">
                                                Ilheus
                                            </label>
                                        </div>  

                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria-nordeste-ilheus_ilha_de_comandatuba">
                                            <label class="form-check-label" for="hotelaria-nordeste-ilheus_ilha_de_comandatuba">
                                                Ilheus - Ilha de Comandatuba
                                            </label>
                                        </div>
                                    
                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria-nordeste-itacare">
                                            <label class="form-check-label" for="hotelaria-nordeste-itacare">
                                               Itacare
                                            </label>
                                        </div> 
                                    
                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria-nordeste-joao_pessoa">
                                            <label class="form-check-label" for="hotelaria-nordeste-joao_pessoa">
                                                João Pessoa
                                            </label>
                                        </div> 
                                        
                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria-nordeste-maceio">
                                            <label class="form-check-label" for="hotelaria-nordeste-maceio">
                                                Maceio
                                            </label>
                                        </div> 

                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria-nordeste-natal">
                                            <label class="form-check-label" for="hotelaria-nordeste-natal">
                                                Natal
                                            </label>
                                        </div>  
                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria_nordeste_natal_sao-miguel-do-gostoso">
                                            <label class="form-check-label" for="hotelaria_nordeste_natal_sao-miguel-do-gostoso">
                                                Natal - São Miguel do Gostoso
                                            </label>
                                        </div>  
                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria_nordeste_natal_touros">
                                            <label class="form-check-label" for="hotelaria_nordeste_natal_touros">
                                                Natal - Touros
                                            </label>
                                        </div>  
                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria_nordeste_pipa">
                                            <label class="form-check-label" for="hotelaria_nordeste_pipa">
                                                Pipa
                                            </label>
                                        </div>  
                                        <div class="form-check form-switch mb-2 me-5">
                                            <input class="form-check-input" type="checkbox" id="hotelaria_nordeste_salvador">
                                            <label class="form-check-label" for="salvador">
                                                Salvador
                                            </label>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row c-reservas__table border-bottom pt-5">
                                <div class="col-xl-12">
                                    <span class="d-inline-block fs-12 p-2 px-0 mb-0">Fortaleza - CE</span>
                                    <h2 class="mb-2 fw-bold text-primary fs-24">GRAN MARQUISE</h2>
                                    <p class="fs-12"> 
                                        <span class="o-hotel__img__item md-inline-block fw-500 me-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.965" height="10.512"><path data-name="Caminho 36" d="M6.248.476l1.033 2.093a.853.853 0 00.642.467l2.31.335a.854.854 0 01.473 1.456L9.035 6.456a.854.854 0 00-.245.755l.395 2.3a.853.853 0 01-1.238.9L5.881 9.325a.854.854 0 00-.794 0l-2.066 1.086a.853.853 0 01-1.238-.9l.395-2.3a.853.853 0 00-.246-.755L.26 4.827a.854.854 0 01.473-1.456l2.31-.335a.853.853 0 00.642-.467L4.718.476a.853.853 0 011.53 0z" fill="#0f6b7b"></path></svg>
                                            05
                                        </span>  
                                        Twin Standart BB   |   Sem Reembolso   |   Disp. Sob-Consulta
                                    </p>
                                    
                                    <div class="c-reservas__table">
                                        <table class="table table-striped fs-6 table-borderless mt-5" id="table">
                                            <thead>
                                                <tr class="text-secondary">
                                                    <th scope="col">Categoria</th>
                                                    <th scope="col">Vista</th>
                                                    <th scope="col">In</th>
                                                    <th scope="col">Out</th>
                                                    <th scope="col">Tipo</th>
                                                    <th scope="col">EBB</th>
                                                    <th scope="col">Semana</th>
                                                    <th scope="col">Remark</th>
                                                    <th scope="col">Promo</th>
                                                    <th scope="col">BB</th>
                                                    <th scope="col">MAP</th>
                                                    <th scope="col">FAP</th>
                                                    <th scope="col">AI</th>
                                                    <th scope="col">SGL</th>
                                                    <th scope="col">DBL</th>
                                                    <th scope="col">TPL</th>
                                                    <th scope="col">QLP</th>
                                                    <th scope="col">CHD1</th>
                                                    <th scope="col">CHD2</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td scope="row">Luxo</td>
                                                    <td>Sem Vista</td>
                                                    <td>11/06/21</td>
                                                    <td>30/06/21</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Dias de Aplicação</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Inc</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>163</td>
                                                    <td>174</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">Superior</td>
                                                    <td>Sem Vista</td>
                                                    <td>11/06/21</td>
                                                    <td>30/06/21</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Dias de Aplicação</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>Inc</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>99</td>
                                                    <td>110</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="row border-bottom">
                                        <div class="col">
                                            <a class="c-busca__controls__item text-decoration-none fs-4 text-primary fw-500 d-flex align-items-center p-3 px-0 border-0 pb-4 collapsed" data-bs-toggle="collapse" data-bs-target="#belmond-copacabana-palace-info" aria-expanded="false" aria-controls="info">
                                                <span class="icon-info me-3 fs-28"></span>
                                                <span class="me-3">Informações Importantes</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397"><path data-name="Caminho 4" d="M7.365.001a1.029 1.029 0 01.729.3l6.337 6.337a1.032 1.032 0 01-1.459 1.459l-5.6-5.6-5.6 5.6a1.036 1.036 0 11-1.47-1.459L6.631.302a1.029 1.029 0 01.734-.301z" fill="#0e6a7a"></path></svg>
                                            </a>
                                        
                                            <div class="multi-collapse collapse border-0" id="belmond-copacabana-palace-info">
                                                <div class="row border-top py-4"> 
                                                    <div class="col-xl-4 col-lg-6 fs-6 mb-4">
                                                        <span class="d-block icon-suport fs-24 mb-3"></span>
                                                        <span class="d-block text-primary fw-500 mb-3 fs-4">Nossa Opinião</span>
                                                        <p> El hotel Arpoador, es una opción excelente para quien desea conocer Rio de Janeiro y hospedarse en una de las mejores localizaciones de la ciudad. El barrio de Ipanema,
                                                        cuenta con bares, entretenimiento y una de las mejores vistas de la ciudad. Desde la
                                                        terraza es posible visualizar un imponente atardecer, con vista al “Morro dos Irmãos”</p>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-5 offset-lg-1 fs-6 mb-4">
                                                        <span class="d-block icon-parking mb-3 fs-24"></span>
                                                        <span class="d-block text-primary fs-4 fw-500 mb-3">Condições Gerais</span>
                                                        <p>Acepta 01 Chd free hasta 05 años en habitación doble con los padres solamente en la categoria Grande.</p>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-5 offset-xl-1 fs-6">
                                                        <span class="d-block icon-calendar mb-3 fs-24"></span>
                                                        <span class="d-block text-primary fs-4 fw-500 mb-3">Check-In / Check-Out</span>
                                                        <p">14:00h / 12:00h</p>    
                                                    </div>
                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="hotelaria-sp-tabContent" role="tabpanel" aria-labelledby="hotelaria-sp-tab"> 
                            <div class="row pt-5 border-bottom pb-4">
                                <div class="col">
                                    <h2 class="mb-2 fw-bold text-secondary fs-24">São Paulo e Arredores</h2>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="hotelaria-sul-tabContent" role="tabpanel" aria-labelledby="hotelaria-sul-tab"> 
                            <div class="row pt-5 border-bottom pb-4">
                                <div class="col">
                                    <h2 class="mb-2 fw-bold text-secondary fs-24">Região Sul</h2>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="hotelaria-pantanal-tabContent" role="tabpanel" aria-labelledby="hotelaria-pantanal-tab"> 
                            <div class="row pt-5 border-bottom pb-4">
                                <div class="col">
                                    <h2 class="mb-2 fw-bold text-secondary fs-24">Pantanal</h2>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="hotelaria-eco-tabContent" role="tabpanel" aria-labelledby="hotelaria-eco-tab"> 
                            <div class="row pt-5 border-bottom pb-4">
                                <div class="col">
                                    <h2 class="mb-2 fw-bold text-secondary fs-24">Eco-Destinos</h2>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="hotelaria-destinos-tabContent" role="tabpanel" aria-labelledby="hotelaria-destinos-tab"> 
                            <div class="row pt-5 border-bottom pb-4">
                                <div class="col">
                                    <h2 class="mb-2 fw-bold text-secondary fs-24">Demais Destinos</h2>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="hotelaria-restaurantes-tabContent" role="tabpanel" aria-labelledby="hotelaria-restaurantes-tab"> 
                            <div class="row pt-5 border-bottom pb-4">
                                <div class="col">
                                    <h2 class="mb-2 fw-bold text-secondary fs-24">Restaurantes</h2>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>


                <div class="tab-pane fade" id="transfers" role="tabpanel" aria-labelledby="transfers-tab">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <ul class="nav nav-pills nav-fill mt-2">
                                        <li>
                                            <div class="me-5 position-relative input-search input-search--tarifarios">
                                                <span class="icon-search position-absolute"></span>
                                                <input type="text" placeholder="Busque por um produto, cidade ou região" class="form-control me-5">
                                                <span class="text-black-50">|</span>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link active" id="transfers-rj-tab" data-bs-toggle="tab" data-bs-target="#transfers-rj-tabContent" type="button" role="tab" aria-controls="transfers-rj-tabContent" aria-selected="true">Rio de Janeiro</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" id="transfers-nordeste-tab" data-bs-toggle="tab" data-bs-target="#transfers-nordeste-tabContent" type="button" role="tab" aria-controls="transfers-nordeste-tabContent" aria-selected="false">Nordeste</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" id="transfers-sp-tab" data-bs-toggle="tab" data-bs-target="#transfers-sp-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">São Paulo e Arredores</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" id="transfers-sul-tab" data-bs-toggle="tab" data-bs-target="#transfers-sul-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Região Sul</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" id="transfers-pantanal-tab"  data-bs-toggle="tab" data-bs-target="#transfers-pantanal-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Pantanal</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" id="transfers-eco-tab"  data-bs-toggle="tab" data-bs-target="#transfers-eco-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Eco-Destinos</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" id="transfers-destinos-tab"  data-bs-toggle="tab" data-bs-target="#transfers-destinos-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Demais Destinos</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" id="transfers-restaurantes-tab"  data-bs-toggle="tab" data-bs-target="#transfers-restaurantes-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Restaurantes</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div  class="tab-content" id="tabTransfer">

                                <div class="tab-pane fade active show" id="transfers-rj-tabContent" role="tabpanel" aria-labelledby="transfers-rj-tab"> 
                                    <div class="row pt-5 border-bottom pb-4">
                                        <div class="col">
                                            <h2 class="mb-2 fw-bold text-secondary fs-24">Rio de Janeiro</h2>
                                            <p class="fs-12 mb-4">Se preferir escolha a cidade ou a região especificada</p>
                                            <div class="d-flex flex-wrap">
                                                <div class="form-check form-switch mb-2 me-5">
                                                    <input class="form-check-input" type="checkbox" id="rio-de-janeiro">
                                                    <label class="form-check-label" for="rio-de-janeiro">
                                                        Rio de Janeiro
                                                    </label>
                                                </div>  
                                                <div class="form-check form-switch mb-2 me-5">
                                                    <input class="form-check-input" type="checkbox" id="angra-dos-reis">
                                                    <label class="form-check-label" for="angra-dos-reis">
                                                        Angra dos Reis
                                                    </label>
                                                </div>  
                                                <div class="form-check form-switch mb-2 me-5">
                                                    <input class="form-check-input" type="checkbox" id="arial-do-cabo">
                                                    <label class="form-check-label" for="arial-do-cabo">
                                                        Arraial do Cabo
                                                    </label>
                                                </div>  
                                                <div class="form-check form-switch mb-2 me-5">
                                                    <input class="form-check-input" type="checkbox" id="buzios">
                                                    <label class="form-check-label" for="buzios">
                                                        Búzios
                                                    </label>
                                                </div>  
                                                <div class="form-check form-switch mb-2 me-5">
                                                    <input class="form-check-input" type="checkbox" id="cabo-frio">
                                                    <label class="form-check-label" for="cabo-frio">
                                                        Cabo Frio
                                                    </label>
                                                </div>  
                                                <div class="form-check form-switch mb-2 me-5">
                                                    <input class="form-check-input" type="checkbox" id="mangaratiba">
                                                    <label class="form-check-label" for="mangaratiba">
                                                        Mangaratiba
                                                    </label>
                                                </div>  
                                                <div class="form-check form-switch mb-2 me-5">
                                                    <input class="form-check-input" type="checkbox" id="paraty">
                                                    <label class="form-check-label" for="paraty">
                                                        Paraty
                                                    </label>
                                                </div>  
                                                <div class="form-check form-switch mb-2 me-5">
                                                    <input class="form-check-input" type="checkbox" id="vassouras">
                                                    <label class="form-check-label" for="vassouras">
                                                        Vassouras
                                                    </label>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row c-reservas__table border-bottom pt-5">
                                        <div class="col-xl-12">
                                            <span class="d-inline-block fs-12 p-2 px-0 mb-0">Rio de Janeiro - Rj</span>
                                            <h2 class="mb-2 fw-bold text-primary fs-24">TRF O.W. ARPT / HOTEL (ZONA SUL OU CENTRO) OU V.V </h2>
                                            <p class="fs-12"> 
                                                <span class="o-hotel__img__item md-inline-block fw-500 me-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.965" height="10.512"><path data-name="Caminho 36" d="M6.248.476l1.033 2.093a.853.853 0 00.642.467l2.31.335a.854.854 0 01.473 1.456L9.035 6.456a.854.854 0 00-.245.755l.395 2.3a.853.853 0 01-1.238.9L5.881 9.325a.854.854 0 00-.794 0l-2.066 1.086a.853.853 0 01-1.238-.9l.395-2.3a.853.853 0 00-.246-.755L.26 4.827a.854.854 0 01.473-1.456l2.31-.335a.853.853 0 00.642-.467L4.718.476a.853.853 0 011.53 0z" fill="#0f6b7b"></path></svg>
                                                    03
                                                </span>  
                                                Twin Standart BB   |   Sem Reembolso   |   Disp. Sob-Consulta
                                            </p>
                                            
                                            <table class="table table-striped fs-6 table-borderless mt-5" id="table">
                                                <thead>
                                                    <tr class="text-secondary">
                                                        <th scope="col">Tipo</th>
                                                        <th scope="col">Regime</th>
                                                        <th scope="col">Duração</th>
                                                        <th scope="col">Validade</th>
                                                        <th scope="col">Remark</th>
                                                        <th scope="col">Frequencia</th>
                                                        <th scope="col">Idiomas</th>
                                                        <th scope="col">Cancelamento</th>
                                                        <th scope="col">1</th>
                                                        <th scope="col">2</th>
                                                        <th scope="col">3</th>
                                                        <th scope="col">Min.Pax</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">Somente motorista</td>
                                                        <td>Privado</td>
                                                        <td>1hr</td>
                                                        <td>11/06/2021 - 27/12/2021 </td>
                                                        <td>-</td>
                                                        <td>Diária</td>
                                                        <td>Português</td>
                                                        <td>48 hs</td>
                                                        <td>33</td>
                                                        <td>17</td>
                                                        <td>11</td>
                                                        <td>1</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="row border-bottom">
                                                <div class="col">
                                                    <a class="c-busca__controls__item text-decoration-none fs-4 text-primary fw-500 d-flex align-items-center p-3 px-0 border-0 pb-4 collapsed" data-bs-toggle="collapse" data-bs-target="#belmond-copacabana-palace-info" aria-expanded="false" aria-controls="info">
                                                        <span class="icon-info me-3 fs-28"></span>
                                                        <span class="me-3">Informações Importantes</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397"><path data-name="Caminho 4" d="M7.365.001a1.029 1.029 0 01.729.3l6.337 6.337a1.032 1.032 0 01-1.459 1.459l-5.6-5.6-5.6 5.6a1.036 1.036 0 11-1.47-1.459L6.631.302a1.029 1.029 0 01.734-.301z" fill="#0e6a7a"></path></svg>
                                                    </a>
                                                
                                                    <div class="multi-collapse collapse border-0" id="belmond-copacabana-palace-info">
                                                        <div class="row border-top py-4"> 
                                                            <div class="col-xl-4 col-lg-6 fs-6 mb-4">
                                                                <span class="d-block icon-suport fs-24 mb-3"></span>
                                                                <span class="d-block text-primary fw-500 mb-3 fs-4">Nossa Opinião</span>
                                                                <p> El hotel Arpoador, es una opción excelente para quien desea conocer Rio de Janeiro y hospedarse en una de las mejores localizaciones de la ciudad. El barrio de Ipanema,
                                                                cuenta con bares, entretenimiento y una de las mejores vistas de la ciudad. Desde la
                                                                terraza es posible visualizar un imponente atardecer, con vista al “Morro dos Irmãos”</p>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-5 offset-lg-1 fs-6 mb-4">
                                                                <span class="d-block icon-parking mb-3 fs-24"></span>
                                                                <span class="d-block text-primary fs-4 fw-500 mb-3">Condições Gerais</span>
                                                                <p>Acepta 01 Chd free hasta 05 años en habitación doble con los padres solamente en la categoria Grande.</p>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-5 offset-xl-1 fs-6">
                                                                <span class="d-block icon-calendar mb-3 fs-24"></span>
                                                                <span class="d-block text-primary fs-4 fw-500 mb-3">Check-In / Check-Out</span>
                                                                <p">14:00h / 12:00h</p>    
                                                            </div>
                                                        </div>
                                                        
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="transfers-nordeste-tabContent" role="tabpanel" aria-labelledby="transfers-nordeste-tab"> 
                                    <div class="row pt-5 border-bottom pb-4">
                                        <div class="col">
                                            <h2 class="mb-2 fw-bold text-secondary fs-24">Nordeste</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="transfers-sp-tabContent" role="tabpanel" aria-labelledby="transfers-sp-tab"> 
                                    <div class="row pt-5 border-bottom pb-4">
                                        <div class="col">
                                            <h2 class="mb-2 fw-bold text-secondary fs-24">São Paulo e Arredores</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="transfers-sul-tabContent" role="tabpanel" aria-labelledby="transfers-sul-tab"> 
                                    <div class="row pt-5 border-bottom pb-4">
                                        <div class="col">
                                            <h2 class="mb-2 fw-bold text-secondary fs-24">Região Sul</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="transfers-pantanal-tabContent" role="tabpanel" aria-labelledby="transfers-pantanal-tab"> 
                                    <div class="row pt-5 border-bottom pb-4">
                                        <div class="col">
                                            <h2 class="mb-2 fw-bold text-secondary fs-24">Pantanal</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="transfers-eco-tabContent" role="tabpanel" aria-labelledby="transfers-eco-tab"> 
                                    <div class="row pt-5 border-bottom pb-4">
                                        <div class="col">
                                            <h2 class="mb-2 fw-bold text-secondary fs-24">Eco-Destinos</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="transfers-destinos-tabContent" role="tabpanel" aria-labelledby="transfers-destinos-tab"> 
                                    <div class="row pt-5 border-bottom pb-4">
                                        <div class="col">
                                            <h2 class="mb-2 fw-bold text-secondary fs-24">Demais Destinos</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="transfers-restaurantes-tabContent" role="tabpanel" aria-labelledby="transfers-restaurantes-tab"> 
                                    <div class="row pt-5 border-bottom pb-4">
                                        <div class="col">
                                            <h2 class="mb-2 fw-bold text-secondary fs-24">Restaurantes</h2>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="tour" role="tabpanel" aria-labelledby="tour-tab">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <ul class="nav nav-pills nav-fill mt-2">
                                        <li>
                                            <div class="me-5 position-relative input-search input-search--tarifarios">
                                                <span class="icon-search position-absolute"></span>
                                                <input type="text" placeholder="Busque por um produto, cidade ou região" class="form-control me-5">
                                                <span class="text-black-50">|</span>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link active" id="tour-rj-tab" data-bs-toggle="tab" data-bs-target="#tour-rj-tabContent" type="button" role="tab" aria-controls="tour-rj-tabContent" aria-selected="true">Rio de Janeiro</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" id="tour-nordeste-tab" data-bs-toggle="tab" data-bs-target="#tour-nordeste-tabContent" type="button" role="tab" aria-controls="tour-nordeste-tabContent" aria-selected="false">Nordeste</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" id="tour-sp-tab" data-bs-toggle="tab" data-bs-target="#tour-sp-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">São Paulo e Arredores</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" id="tour-sul-tab" data-bs-toggle="tab" data-bs-target="#tour-sul-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Região Sul</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" id="tour-pantanal-tab"  data-bs-toggle="tab" data-bs-target="#tour-pantanal-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Pantanal</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" id="tour-eco-tab"  data-bs-toggle="tab" data-bs-target="#tour-eco-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Eco-Destinos</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" id="tour-destinos-tab"  data-bs-toggle="tab" data-bs-target="#tour-destinos-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Demais Destinos</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" id="tour-restaurantes-tab"  data-bs-toggle="tab" data-bs-target="#tour-restaurantes-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Restaurantes</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div  class="tab-content" id="tabTransfer">

                                <div class="tab-pane fade active show" id="tour-rj-tabContent" role="tabpanel" aria-labelledby="tour-rj-tab"> 
                                    <div class="row pt-5 border-bottom pb-4">
                                        <div class="col">
                                            <h2 class="mb-2 fw-bold text-secondary fs-24">Rio de Janeiro</h2>
                                            <p class="fs-12 mb-4">Se preferir escolha a cidade ou a região especificada</p>
                                            <div class="d-flex flex-wrap">
                                                <div class="form-check form-switch mb-2 me-5">
                                                    <input class="form-check-input" type="checkbox" id="rio-de-janeiro">
                                                    <label class="form-check-label" for="rio-de-janeiro">
                                                        Rio de Janeiro
                                                    </label>
                                                </div>  
                                                <div class="form-check form-switch mb-2 me-5">
                                                    <input class="form-check-input" type="checkbox" id="angra-dos-reis">
                                                    <label class="form-check-label" for="angra-dos-reis">
                                                        Angra dos Reis
                                                    </label>
                                                </div>  
                                                <div class="form-check form-switch mb-2 me-5">
                                                    <input class="form-check-input" type="checkbox" id="arial-do-cabo">
                                                    <label class="form-check-label" for="arial-do-cabo">
                                                        Arraial do Cabo
                                                    </label>
                                                </div>  
                                                <div class="form-check form-switch mb-2 me-5">
                                                    <input class="form-check-input" type="checkbox" id="buzios">
                                                    <label class="form-check-label" for="buzios">
                                                        Búzios
                                                    </label>
                                                </div>  
                                                <div class="form-check form-switch mb-2 me-5">
                                                    <input class="form-check-input" type="checkbox" id="cabo-frio">
                                                    <label class="form-check-label" for="cabo-frio">
                                                        Cabo Frio
                                                    </label>
                                                </div>  
                                                <div class="form-check form-switch mb-2 me-5">
                                                    <input class="form-check-input" type="checkbox" id="mangaratiba">
                                                    <label class="form-check-label" for="mangaratiba">
                                                        Mangaratiba
                                                    </label>
                                                </div>  
                                                <div class="form-check form-switch mb-2 me-5">
                                                    <input class="form-check-input" type="checkbox" id="paraty">
                                                    <label class="form-check-label" for="paraty">
                                                        Paraty
                                                    </label>
                                                </div>  
                                                <div class="form-check form-switch mb-2 me-5">
                                                    <input class="form-check-input" type="checkbox" id="vassouras">
                                                    <label class="form-check-label" for="vassouras">
                                                        Vassouras
                                                    </label>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row c-reservas__table border-bottom pt-5">
                                        <div class="col-xl-12">
                                            <span class="d-inline-block fs-12 p-2 px-0 mb-0">Rio de Janeiro - Rj</span>
                                            <h2 class="mb-2 fw-bold text-primary fs-24">TRF O.W. ARPT / HOTEL (ZONA SUL OU CENTRO) OU V.V </h2>
                                            
                                            <table class="table table-striped fs-6 table-borderless mt-5" id="table">
                                                <thead>
                                                    <tr class="text-secondary">
                                                        <th scope="col">Tour</th>
                                                        <th scope="col">Regime</th>
                                                        <th scope="col">Tipo</th>
                                                        <th scope="col">Duração</th>
                                                        <th scope="col">Vigência</th>
                                                        <th scope="col">Remark</th>
                                                        <th scope="col">Dias de aplicação</th>
                                                        <th scope="col">Idiomas</th>
                                                        <th scope="col">CANCELAMENTO</th>
                                                        <th scope="col">1</th>
                                                        <th scope="col" colspan="3">2</th>
                                                        <th scope="col">Min.Pax</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td scope="row">City Tour</td>
                                                        <td>Privado</td>
                                                        <td>Padrão</td>
                                                        <td>8 hrs</td>
                                                        <td>11/06/2021 - 27/12/2021 </td>
                                                        <td>-</td>
                                                        <td>Dias de aplicação </td>
                                                        <td>Espanhol, Inglês, Português </td>
                                                        <td>48 hs</td>
                                                        <td>312</td>
                                                        <td colspan="3">183</td>
                                                        <td>1</td>
                                                    </tr>
                                                </tbody>
                                                <thead>
                                                    <tr class="text-secondary">
                                                        <th scope="col">Tour</th>
                                                        <th scope="col">Regime</th>
                                                        <th scope="col">Tipo</th>
                                                        <th scope="col">Duração</th>
                                                        <th scope="col">Vigência</th>
                                                        <th scope="col">Remark</th>
                                                        <th scope="col">Dias de aplicação</th>
                                                        <th scope="col">Idiomas</th>
                                                        <th scope="col">CANCELAMENTO</th>
                                                        <th scope="col">3</th>
                                                        <th scope="col">4</th>
                                                        <th scope="col">5/6</th>
                                                        <th scope="col">7/9</th>
                                                        <th scope="col">Min.Pax</th>
                                                    </tr>
                                                </thead>
                                                    <tr>
                                                        <td scope="row">City Tour</td>
                                                        <td>Privado</td>
                                                        <td>Padrão</td>
                                                        <td>8 hrs</td>
                                                        <td>11/06/2021 - 27/12/2021 </td>
                                                        <td>-</td>
                                                        <td>Dias de aplicação </td>
                                                        <td>Espanhol, Inglês, Português </td>
                                                        <td>48 hs</td>
                                                        <td>138</td>
                                                        <td>117</td>
                                                        <td>107</td>
                                                        <td>92</td>
                                                        <td>1</td>
                                                    </tr>
                                                </tbody>
                                               
                                            </table>

                                            <div class="row border-bottom">
                                                <div class="col">
                                                    <a class="c-busca__controls__item text-decoration-none fs-4 text-primary fw-500 d-flex align-items-center p-3 px-0 border-0 pb-4 collapsed" data-bs-toggle="collapse" data-bs-target="#belmond-copacabana-palace-info" aria-expanded="false" aria-controls="info">
                                                        <span class="icon-info me-3 fs-28"></span>
                                                        <span class="me-3">Informações Importantes</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397"><path data-name="Caminho 4" d="M7.365.001a1.029 1.029 0 01.729.3l6.337 6.337a1.032 1.032 0 01-1.459 1.459l-5.6-5.6-5.6 5.6a1.036 1.036 0 11-1.47-1.459L6.631.302a1.029 1.029 0 01.734-.301z" fill="#0e6a7a"></path></svg>
                                                    </a>
                                                
                                                    <div class="multi-collapse collapse border-0" id="belmond-copacabana-palace-info">
                                                        <div class="row border-top py-4"> 
                                                            <div class="col-xl-4 col-lg-6 fs-6 mb-4">
                                                                <span class="d-block icon-suport fs-24 mb-3"></span>
                                                                <span class="d-block text-primary fw-500 mb-3 fs-4">Nossa Opinião</span>
                                                                <p> El hotel Arpoador, es una opción excelente para quien desea conocer Rio de Janeiro y hospedarse en una de las mejores localizaciones de la ciudad. El barrio de Ipanema,
                                                                cuenta con bares, entretenimiento y una de las mejores vistas de la ciudad. Desde la
                                                                terraza es posible visualizar un imponente atardecer, con vista al “Morro dos Irmãos”</p>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-5 offset-lg-1 fs-6 mb-4">
                                                                <span class="d-block icon-parking mb-3 fs-24"></span>
                                                                <span class="d-block text-primary fs-4 fw-500 mb-3">Condições Gerais</span>
                                                                <p>Acepta 01 Chd free hasta 05 años en habitación doble con los padres solamente en la categoria Grande.</p>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-5 offset-xl-1 fs-6">
                                                                <span class="d-block icon-calendar mb-3 fs-24"></span>
                                                                <span class="d-block text-primary fs-4 fw-500 mb-3">Check-In / Check-Out</span>
                                                                <p">14:00h / 12:00h</p>    
                                                            </div>
                                                        </div>
                                                        
                                                    </div>

                                                </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tour-nordeste-tabContent" role="tabpanel" aria-labelledby="tour-nordeste-tab"> 
                                    <div class="row pt-5 border-bottom pb-4">
                                        <div class="col">
                                            <h2 class="mb-2 fw-bold text-secondary fs-24">Nordeste</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tour-sp-tabContent" role="tabpanel" aria-labelledby="tour-sp-tab"> 
                                    <div class="row pt-5 border-bottom pb-4">
                                        <div class="col">
                                            <h2 class="mb-2 fw-bold text-secondary fs-24">São Paulo e Arredores</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tour-sul-tabContent" role="tabpanel" aria-labelledby="tour-sul-tab"> 
                                    <div class="row pt-5 border-bottom pb-4">
                                        <div class="col">
                                            <h2 class="mb-2 fw-bold text-secondary fs-24">Região Sul</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tour-pantanal-tabContent" role="tabpanel" aria-labelledby="tour-pantanal-tab"> 
                                    <div class="row pt-5 border-bottom pb-4">
                                        <div class="col">
                                            <h2 class="mb-2 fw-bold text-secondary fs-24">Pantanal</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tour-eco-tabContent" role="tabpanel" aria-labelledby="tour-eco-tab"> 
                                    <div class="row pt-5 border-bottom pb-4">
                                        <div class="col">
                                            <h2 class="mb-2 fw-bold text-secondary fs-24">Eco-Destinos</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tour-destinos-tabContent" role="tabpanel" aria-labelledby="tour-destinos-tab"> 
                                    <div class="row pt-5 border-bottom pb-4">
                                        <div class="col">
                                            <h2 class="mb-2 fw-bold text-secondary fs-24">Demais Destinos</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tour-restaurantes-tabContent" role="tabpanel" aria-labelledby="tour-restaurantes-tab"> 
                                    <div class="row pt-5 border-bottom pb-4">
                                        <div class="col">
                                            <h2 class="mb-2 fw-bold text-secondary fs-24">Restaurantes</h2>
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

</main>

<script src="assets/js/pages/reservas.js"></script>


<?php include('includes/footer.php') ?>

