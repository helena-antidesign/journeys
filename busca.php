
<?php include('includes/header.php') ?>


<main class="c-busca">
        
    <section class="c-banner">
        <?php include('includes/search-box--reduced.php') ?>

        <div id="principal" class="carousel slide h-100" data-bs-ride="carousel">
            
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#principal" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#principal" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#principal" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner h-100">

                <div class="carousel-item h-100 d-flex align-items-end active" style="background-image: url('assets/img/reservas-banner.jpg');">
                    <img src="assets/img/banner-bg.png" alt="background" class="c-banner__background">
                    <div class="container text-light">
                        <div class="row h-100 d-flex align-items-center">
                            <div class="col-xl-4">
                                <h2 class="fw-bold fs-3">Nusa Penida.</h2>
                                <p>Uma das ilhas com um cenário inesquecível! Se você busca sol brilhante praias desertas, este é o lugar ideal.</p>
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

    <section class="c-busca__container">
        <div class="container">
            <div class="row">

                <div class="col-xl-2 c-busca__controls">

                    <div class="row border-bottom">
                        <div class="col ">
                            <a class="text-reset fs-4 text-secondary fw-500 d-flex align-items-center justify-content-between mb-3" data-bs-toggle="collapse" href="#preco" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                Preço
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397"><path data-name="Caminho 4" d="M7.365.001a1.029 1.029 0 01.729.3l6.337 6.337a1.032 1.032 0 01-1.459 1.459l-5.6-5.6-5.6 5.6a1.036 1.036 0 11-1.47-1.459L6.631.302a1.029 1.029 0 01.734-.301z" fill="#0e6a7a"/></svg>
                            </a>

                            <div class="collapse multi-collapse mb-4 show" id="preco">
                                <label for="customRange1" class="form-label">Preço</label>
                                <input type="range" class="form-range" id="customRange1">   
                            </div>
                        </div>
                    </div>

                    <div class="row border-bottom">
                        <div class="col">
                            <a class="text-reset fs-4 text-secondary fw-500 d-flex align-items-center justify-content-between p-3 px-0" data-bs-toggle="collapse" data-bs-target="#hospedagem" aria-expanded="false" aria-controls="perfil-produto">
                                Hospedagem
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397"><path data-name="Caminho 4" d="M7.365.001a1.029 1.029 0 01.729.3l6.337 6.337a1.032 1.032 0 01-1.459 1.459l-5.6-5.6-5.6 5.6a1.036 1.036 0 11-1.47-1.459L6.631.302a1.029 1.029 0 01.734-.301z" fill="#0e6a7a"/></svg>
                            </a>
                        
                            <div class="collapse multi-collapse mb-4 show" id="hospedagem">
                              
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="hoteis-internos" />
                                    <label class="form-check-label" for="hoteis-internos">
                                        Hotéis Internos
                                    </label>
                                </div>  
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="omnibees" />
                                    <label class="form-check-label" for="omnibees">
                                        Omnibees
                                    </label>
                                </div>  
                                
                            </div>

                        </div>
                    </div>

                    <div class="row border-bottom">
                        <div class="col">
                            <a class="text-reset fs-4  text-secondary fw-500 d-flex align-items-center justify-content-between p-3 px-0" data-bs-toggle="collapse" data-bs-target="#reembolsavel" aria-expanded="false" aria-controls="perfil-produto">
                                Reembolsável 
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397"><path data-name="Caminho 4" d="M7.365.001a1.029 1.029 0 01.729.3l6.337 6.337a1.032 1.032 0 01-1.459 1.459l-5.6-5.6-5.6 5.6a1.036 1.036 0 11-1.47-1.459L6.631.302a1.029 1.029 0 01.734-.301z" fill="#0e6a7a"/></svg>
                            </a>
                        
                            <div class="collapse multi-collapse mb-4 show" id="reembolsavel">
                              
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="reembonsavel-check" />
                                    <label class="form-check-label" for="reembonsavel-check">
                                        Reembonsável
                                    </label>
                                </div>  
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="nao-reembolsavel" />
                                    <label class="form-check-label" for="nao-reembolsavel">
                                        Não Reembonsável
                                    </label>
                                </div>  
                                
                            </div>

                        </div>
                    </div>

                    <div class="row border-bottom">
                        <div class="col">
                            <a class="text-reset fs-4 text-secondary fw-500 d-flex align-items-center justify-content-between p-3 px-0" data-bs-toggle="collapse" data-bs-target="#perfil-produto" aria-expanded="false" aria-controls="perfil-produto">
                                Perfil de Produto
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397"><path data-name="Caminho 4" d="M7.365.001a1.029 1.029 0 01.729.3l6.337 6.337a1.032 1.032 0 01-1.459 1.459l-5.6-5.6-5.6 5.6a1.036 1.036 0 11-1.47-1.459L6.631.302a1.029 1.029 0 01.734-.301z" fill="#0e6a7a"/></svg>
                            </a>
                        
                            <div class="collapse multi-collapse mb-4 show" id="perfil-produto">
                              
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="brasil-secreto" />
                                    <label class="form-check-label" for="brasil-secreto">
                                        Brasil secreto
                                    </label>
                                </div>  
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="clafisicacao-hoteis" />
                                    <label class="form-check-label" for="clafisicacao-hoteis">
                                        Classificação de Hoteis
                                    </label>
                                </div>  
                                
                            </div>

                        </div>
                    </div>

                    <div class="row border-bottom">
                        <div class="col">
                            <a class="text-reset fs-4  text-secondary fw-500 d-flex align-items-center justify-content-between p-3 px-0" data-bs-toggle="collapse" data-bs-target="#refeicoes" aria-expanded="false" aria-controls="perfil-produto">
                                Refeições 
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397"><path data-name="Caminho 4" d="M7.365.001a1.029 1.029 0 01.729.3l6.337 6.337a1.032 1.032 0 01-1.459 1.459l-5.6-5.6-5.6 5.6a1.036 1.036 0 11-1.47-1.459L6.631.302a1.029 1.029 0 01.734-.301z" fill="#0e6a7a"/></svg>
                            </span></a>
                        
                            <div class="collapse multi-collapse mb-4 show" id="refeicoes">
                              
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="todos" />
                                    <label class="form-check-label" for="todos">
                                        Todos
                                    </label>
                                </div>  
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="sistema-inclusive" />
                                    <label class="form-check-label" for="sistema-inclusive">
                                        Sistema Inclusive
                                    </label>
                                </div>  
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="sem-almoco" />
                                    <label class="form-check-label" for="sem-almoco">
                                        Sem Almoço
                                    </label>
                                </div>  
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="map-bb" />
                                    <label class="form-check-label" for="map-bb">
                                        Map - BB
                                    </label>
                                </div>  
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="fab-bb" />
                                    <label class="form-check-label" for="fab-bb">
                                        FAP - BB
                                    </label>
                                </div>  
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="bb" />
                                    <label class="form-check-label" for="bb">
                                        BB
                                    </label>
                                </div>  
                            </div>

                        </div>
                    </div>

                    <div class="row border-bottom">
                        <div class="col">
                            <a class="text-reset fs-4 text-secondary fw-500 d-flex align-items-center justify-content-between p-3 px-0" data-bs-toggle="collapse" data-bs-target="#servicos" aria-expanded="false" aria-controls="perfil-produto">
                                Serviços 
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397"><path data-name="Caminho 4" d="M7.365.001a1.029 1.029 0 01.729.3l6.337 6.337a1.032 1.032 0 01-1.459 1.459l-5.6-5.6-5.6 5.6a1.036 1.036 0 11-1.47-1.459L6.631.302a1.029 1.029 0 01.734-.301z" fill="#0e6a7a"/></svg>
                            </a>
                        
                            <div class="collapse multi-collapse mb-4 show" id="servicos">
                              
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="aceita-pets" />
                                    <label class="form-check-label" for="aceita-pets">
                                        Aceita Pets
                                    </label>
                                </div>  
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="buzines-corporativo" />
                                    <label class="form-check-label" for="buzines-corporativo">
                                        Buzines & Corporativo 
                                    </label>
                                </div>  
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="ecofriendly" />
                                    <label class="form-check-label" for="ecofriendly">
                                    Ecofriendly
                                    </label>
                                </div>  
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="economico" />
                                    <label class="form-check-label" for="economico">
                                    Economico
                                    </label>
                                </div>  
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="familiar" />
                                    <label class="form-check-label" for="familiar">
                                    Familiar
                                    </label>
                                </div>  
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="frente-a-praia" />
                                    <label class="form-check-label" for="frente-a-praia">
                                    Frente a Praia
                                    </label>
                                </div>  
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="grupos" />
                                    <label class="form-check-label" for="grupos">
                                    Grupos
                                    </label>
                                </div>  
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="indicado-jovens" />
                                    <label class="form-check-label" for="indicado-jovens">
                                    Indicado para Jovens
                                    </label>
                                </div>  
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="recomendado-journeys" />
                                    <label class="form-check-label" for="recomendado-journeys">
                                    Recomendado Journeys
                                    </label>
                                </div>  
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="safe-clean" />
                                    <label class="form-check-label" for="safe-clean">
                                    Safe & Clean
                                    </label>
                                </div>  
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="terrano-plano" />
                                    <label class="form-check-label" for="terrano-plano">
                                    Terreno Plano
                                    </label>
                                </div>  
                            </div>
                        </div> 
                    </div>
                
                </div>

                <div class="col-xl-5 offset-xl-1">
                    <h2 class="d-inline-block fs-5 text-secondary px-0 mb-3">138 hotéis encontrados</h2>
                    <h3 class="c-busca__container__title fs-2 text-primary fw-normal"><span class="fw-bold">Hotéis em:</span> Rio de Janeiro</h3>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <article class="o-hotel shadow">
                                <div class="o-hotel__img w-100 overflow-hidden" style="background-image: url('assets/img/windsor-marapendi-hotel.jpg');">
                                    <img src="assets/img/hotel-bg.png">

                                    <div>
                                        <span class="o-hotel__img__item md-inline-block fs-12 fw-normal bg-white py-2 px-3 me-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.965" height="10.512"><path data-name="Caminho 36" d="M6.248.476l1.033 2.093a.853.853 0 00.642.467l2.31.335a.854.854 0 01.473 1.456L9.035 6.456a.854.854 0 00-.245.755l.395 2.3a.853.853 0 01-1.238.9L5.881 9.325a.854.854 0 00-.794 0l-2.066 1.086a.853.853 0 01-1.238-.9l.395-2.3a.853.853 0 00-.246-.755L.26 4.827a.854.854 0 01.473-1.456l2.31-.335a.853.853 0 00.642-.467L4.718.476a.853.853 0 011.53 0z" fill="#0f6b7b"/></svg>
                                            05
                                        </span>
                                        <span class="o-hotel__img__item md-inline-block fs-12 fw-normal bg-white py-2 px-3">02 Adultos  •  01 Crianças</span>
                                    </div>

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

                                        <button type="button" class="btn-close" aria-label="Close"></button>

                                    </div>

                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex align-items-center justify-content-between fs-6 text-body p-0 py-2">
                                            <div class="d-flex o-hotel__content__option">
                                                <input class="form-check-input me-3" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="d-block fw-500 text-body fs-6 pe-3" for="flexRadioDefault1">
                                                    Omnibees
                                                </label>
                                            </div>

                                            <div class="o-hotel__content__desc pe-3">
                                                Twin Standart BB
                                            </div>
                                            <div class="o-hotel__content__reembolso">
                                               <span class="text-danger">Sem Reembolso</span>
                                            </div>
                                            <div class="o-hotel__content__valor px-3">
                                                <span class="text-primary fw-500">R$ 50</span>
                                            </div>
                                            <div class="o-hotel__content__button">
                                                <div class="btn btn-primary fs-6 fw-bold py-3">Reservar</div>
                                            </div>
                                        </li>

                                        <li class="list-group-item d-flex align-items-center justify-content-between fs-6 text-body p-0 py-2">
                                            <div class="d-flex o-hotel__content__option">
                                                <input class="form-check-input me-3" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="d-block fw-500 text-body fs-6" for="flexRadioDefault1">
                                                    Omnibees
                                                </label>
                                            </div>

                                            <div class="o-hotel__content__desc pe-3">
                                                Quarto Luxo Casal - BB
                                            </div>
                                            <div class="o-hotel__content__reembolso">
                                               <span class="text-danger">Sem Reembolso</span>
                                            </div>
                                            <div class="o-hotel__content__valor px-3">
                                                <span class="text-primary fw-500">R$ 50</span>
                                            </div>
                                            <div class="o-hotel__content__button">
                                                <div class="btn btn-primary fs-6 fw-bold py-3">Reservar</div>
                                            </div>
                                        </li>
                                        
                                    </ul>

                                </div>
                            </article>
                        </div>
                        
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                        </div>

                    </div>

                </div>
                <div class="col-xl-3 offset-xl-1 c-busca__advertisement">
                    <nav>
                        <div class="nav nav-tabs border-0 d-flex justify-content-end" id="nav-tab" role="tablist">

                            <button class="nav-link active py-1 px-0 me-3" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.49" height="19.594"><g data-name="Grupo 1023" transform="translate(-1733.762 -833.738)" fill="none" stroke-miterlimit="10" stroke-width="1.5"><rect data-name="Retângulo 391" width="16.99" height="4.153" rx="1.5" transform="rotate(180 875.751 426.292)"/><rect data-name="Retângulo 392" width="16.99" height="4.153" rx="1.5" transform="rotate(180 875.751 422.806)"/><rect data-name="Retângulo 393" width="16.99" height="4.153" rx="1.5" transform="rotate(180 875.751 419.321)"/></g></svg>
                            </button>

                            <button class="nav-link p-0" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19.781" height="20.082"><g data-name="Grupo 1023" transform="translate(-1709.969 -833.25)" fill="none" stroke-miterlimit="10" stroke-width="1.5"><rect data-name="Retângulo 389" width="7.459" height="7.459" rx="1.5" transform="rotate(180 864.5 426.292)"/><rect data-name="Retângulo 390" width="7.459" height="7.459" rx="1.5" transform="rotate(180 859.089 426.292)"/><rect data-name="Retângulo 394" width="7.459" height="7.459" rx="1.5" transform="rotate(180 864.5 420.73)"/><rect data-name="Retângulo 395" width="7.459" height="7.459" rx="1.5" transform="rotate(180 859.089 420.73)"/></g></svg>
                            </button>
                        </div>
                    </nav>             
                    <img src="assets/img/advertisement.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    
</main>


<?php include('includes/footer.php') ?>

