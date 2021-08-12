<?php include('includes/header--white.php'); ?>

    <main class="c-destinos">
       <section class="container-fluid p-0 d-flex position-relative mb-5">
            <div class="c-destinos__bg position-absolute h-100"></div>
            <div class="w-100 d-flex c-destinos__container">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 c-destinos__container__left">

                            <div class="row">
                                <div class="col-xl-11 c-destinos__calendar">
                                    <input type="text" class="destino-date d-none">
                                </div>
                            </div>

                            <div class="row mb-5 mt-3">
                                <div class="col-xl-9">
                                    <h2 class="d-inline-block fs-5 text-primary p-2 px-0 mb-0">Guia</h2>
                                    <h3 class="mb-4 fs-4 fw-bold text-secondary">Ícones & Referências</h3>
                                    <p class="text-black-50 mb-5">Abaixo você encontra todas as categorias de alterações que podem ocorrer diariamente, se quiser ver alguma especifica basta clicar e filtrar.</p>

                                    <div class="d-flex flex-wrap">
                                        <button class="c-destinos__icon d-flex align-items-center border-0 fs-6 text-light bg-purple p-2 px-3 rounded mb-3 me-3">
                                            <span class="icon-save text-light fs-24 me-2"></span> Lista Especial
                                        </button>
                                        <button class="c-destinos__icon d-flex align-items-center border-0 fs-6 text-light bg-pink p-2 px-3 rounded mb-3 me-3">
                                            <span class="icon-value text-light fs-24 me-2"></span> Inserção de Tarifa
                                        </button>
                                        <button class="c-destinos__icon d-flex align-items-center border-0 fs-6 text-light bg-pink-dark p-2 px-3 rounded mb-3 me-3">
                                            <span class="icon-descont text-light fs-24 me-2"></span> Promoções
                                        </button>
                                        <button class="c-destinos__icon d-flex align-items-center border-0 fs-6 text-light bg-red p-2 px-3 rounded mb-3 me-3">
                                            <span class="icon-tax-increace text-light fs-24 me-2"></span> Aumento de Tarifas
                                        </button>
                                        <button class="c-destinos__icon d-flex align-items-center border-0 fs-6 text-light bg-warning p-2 px-3 rounded mb-3 me-3">
                                            <span class="icon-info text-light fs-24 me-2"></span> Informações
                                        </button>
                                        <button class="c-destinos__icon d-flex align-items-center border-0 fs-6 text-light bg-green p-2 px-3 rounded mb-3 me-3">
                                            <span class="icon-tax-decrese text-light fs-24 me-2"></span> Diminuição de Tarifas
                                        </button>
                                        <button class="c-destinos__icon d-flex align-items-center border-0 fs-6 text-light bg-info p-2 px-3 rounded mb-3 me-3">
                                            <span class="icon-new-product text-light fs-24 me-2"></span> Novo Produto
                                        </button>
                                        <button class="c-destinos__icon d-flex align-items-center border-0 fs-6 text-light bg-primary p-2 px-3 rounded mb-3 me-3">
                                            <span class="icon-under-construction text-light fs-24 me-2"></span> Obras
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 offset-xl-1 c-destinos__container__result">
                            <div class="col-12">
                                <div class="row">
                                    <h2 class="fs-28 fw-bold text-secondary col-xl-9 mb-4">Destinos e informações </h2>
                                    <div class="col-xl-3 text-end">
                                        <span class="text-black-50 fs-6">Atualizado as 9h</span>
                                    </div>
                                </div>
                               

                                <div class="row c-destinos__table">

                                    <table class="table" id="table">
                                        <thead class="fs-6">
                                            <tr class="text-secondary">
                                                <th scope="col" class="fw-500"> 
                                                    Destino
                                                </th>
                                                <th scope="col" class="fw-500">
                                                    Produto
                                                </th>
                                                <th scope="col" class="fw-500">
                                                    Informação
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="fs-6">
                                            <tr onclick="window.open('relatorio.pdf')">
                                                <td>Bonito</td>
                                                <td>
                                                    <span class="icon-save text-purple fs-24 me-2"></span>
                                                    <span class="icon-tax-increace text-danger fs-24 me-2"></span>
                                                    <span class="icon-descont text-red fs-24 me-2"></span>
                                                    <span class="icon-new-product text-info fs-24 me-2"></span>
                                                </td>
                                                <td>Inserção de tarifa de 01 de Julho a 30 de Dezembro</td>
                                            </tr>
                                            <tr onclick="window.open('relatorio.pdf')">
                                                <td>Bonito</td>
                                                <td>
                                                    <span class="icon-save text-purple fs-24 me-2"></span>
                                                    <span class="icon-tax-increace text-danger fs-24 me-2"></span>
                                                    <span class="icon-descont text-red fs-24 me-2"></span>
                                                    <span class="icon-new-product text-info fs-24 me-2"></span>
                                                </td>
                                                <td>Inserção de tarifa de 01 de Julho a 30 de Dezembro</td>
                                            </tr>
                                            <tr onclick="window.open('relatorio.pdf')">
                                                <td>Bonito</td>
                                                <td>
                                                    <span class="icon-save text-purple fs-24 me-2"></span>
                                                    <span class="icon-tax-increace text-danger fs-24 me-2"></span>
                                                    <span class="icon-new-product text-info fs-24 me-2"></span>
                                                </td>
                                                <td>Inserção de tarifa de 01 de Julho a 30 de Dezembro</td>
                                            </tr>
                                            <tr onclick="window.open('relatorio.pdf')">
                                                <td>Bonito</td>
                                                <td>
                                                    <span class="icon-save text-purple fs-24 me-2"></span>
                                                    <span class="icon-tax-increace text-danger fs-24 me-2"></span>
                                                    <span class="icon-new-product text-info fs-24 me-2"></span>
                                                </td>
                                                <td>Inserção de tarifa de 01 de Julho a 30 de Dezembro</td>
                                            </tr>
                                            <tr onclick="window.open('relatorio.pdf')">
                                                <td>Bonito</td>
                                                <td>
                                                    <span class="icon-save text-purple fs-24 me-2"></span>
                                                    <span class="icon-tax-increace text-danger fs-24 me-2"></span>
                                                    <span class="icon-descont text-red fs-24 me-2"></span>
                                                    <span class="icon-new-product text-info fs-24 me-2"></span>
                                                </td>
                                                <td>Aumento de tarifa Single até 30 de Dezembro</td>
                                            </tr>
                                            <tr onclick="window.open('relatorio.pdf')">
                                                <td>Bonito</td>
                                                <td>
                                                    <span class="icon-save text-purple fs-24 me-2"></span>
                                                    <span class="icon-tax-increace text-danger fs-24 me-2"></span>
                                                    <span class="icon-descont text-red fs-24 me-2"></span>
                                                    <span class="icon-new-product text-info fs-24 me-2"></span>
                                                </td>
                                                <td>Redução de tarifa para Julho de 2021</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                            <p class="fs-12 text-black-50 mt-5">Em função da constante volatilidade do dólar, muitos produtos sofrem alteração de preços constantes. Para isso criamos um novo ícone chamado “Lista Especial”, onde reportaremos de forma rápida e destacada essas variações e assim mantê-los competitivos.</p>

                        </div>
                    </div>


                </div>

            </div>
       </section>

       <section class="c-destinos__content-carousel">

           <div class="container">
                <div class="col-xxl-4 offset-lg-6 col-xl-6 col-lg-6 col-md-8">
                    <h2 class="d-inline-block fs-5 text-primary p-2 px-0 mb-0">Novos Produtos</h2>
                    <h3 class="mb-4 fs-3 fw-bold text-secondary">Confira os novos hotéis que acabaram de chegar</h3>
                </div>
           </div>
       
            <!-- Slider main container -->
            <div class="swiper-container c-destinos__content-carousel__container JS__content-carousel">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">

                        <div class="c-destinos__content-carousel__img" style="background-image:url('assets/img/destinos-carousel-1.jpg')"></div>
                        <div class="c-destinos__content-carousel__content text-white">

                            <div class="c-destinos__content-carousel__content__bg bg-dark"></div>

                            <div class="container">
                                <div class="col-xxl-3 offset-lg-6 col-xl-6 col-lg-6">
                                    <span class="fw-bold mb-3 d-block">Hotel Riazor Plaza</span>
                                    <p>Os hotéis podem aplicar tarifas diferenciadas no período de 22 a 27 de dezembro, por noite ou em pacotes mínimos de noites, com ou sem jantar de Natal obrigatório.</p>

                                    <p>Se você tiver algum serviço adicional, você será sempre informado sobre a tarifa. Os serviços
                                    podem ter taxas diferenciadas no período de
                                    22 a 27 de Dezembro.</p>
                                   
                                </div>
                            </div>

                        </div>
                    </div>
                    
                </div>
                <!-- If we need navigation buttons -->
                <div class="c-destinos__content-carousel__buttons">
                    <div class="c-destinos__content-carousel__buttons__container">
                        <div class="swiper-button-prev">
                            <span class="icon-arrow-left"></span>
                        </div>
                        <div class="swiper-button-next">
                            <span class="icon-arrow-right"></span>
                        </div>
                    </div>
                </div>

            </div>
       
       
       </section>


        <section class="c-destinos__cambio">

            <div class="container mb-5 pb-5">
                <div class="row mb-5">
                    <div class="col">
                        <h2 class="d-inline-block fs-5 text-primary p-2 px-0 mb-0">Lista especial</h2>
                        <h3 class="mb-4 fs-3 fw-bold text-secondary">Atualizações de Câmbio</h3>
                        <p class="text-black-50">Confira todas as atualizações já feitas anteriormente e as atuais</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <ul class="nav nav-pills nav-fill">
                            <li>
                                <div class="me-5 position-relative input-search">
                                    <span class="icon-search position-absolute"></span>
                                    <input type="text" placeholder="Busque por um ano ou data" class="form-control me-5">
                                    <span class="text-black-50">|</span>
                                </div>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link active" id="2021-tab" data-bs-toggle="tab" data-bs-target="#tab2021" type="button" role="tab" aria-controls="2021" aria-selected="true">2021</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="2020-tab" data-bs-toggle="tab" data-bs-target="#tab2020" type="button" role="tab" aria-controls="2020" aria-selected="false">2020</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="2020-tab" data-bs-toggle="tab" data-bs-target="#tab2020" type="button" role="tab" aria-controls="2020" aria-selected="false">2020</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="2020-tab" data-bs-toggle="tab" data-bs-target="#tab2020" type="button" role="tab" aria-controls="2020" aria-selected="false">2020</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="2020-tab" data-bs-toggle="tab" data-bs-target="#tab2020" type="button" role="tab" aria-controls="2020" aria-selected="false">2020</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="2020-tab" data-bs-toggle="tab" data-bs-target="#tab2020" type="button" role="tab" aria-controls="2020" aria-selected="false">2020</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="2020-tab" data-bs-toggle="tab" data-bs-target="#tab2020" type="button" role="tab" aria-controls="2020" aria-selected="false">2020</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="2020-tab" data-bs-toggle="tab" data-bs-target="#tab2020" type="button" role="tab" aria-controls="2020" aria-selected="false">2020</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="tab-content mt-5" id="tabContent">
                    <div class="tab-pane fade active show" id="tab2021" role="tabpanel" aria-labelledby="2021-tab">

                        <div class="d-flex flex-wrap">

                            <div class="fs-12 d-flex p-3 bg-gray rounded me-4 mb-4 c-destinos__cambio__item">
                                <div class="me-3 border-end border-secondary pe-3">14 de Maio de 2020</div>
                                <div>
                                    <a href="" target="_blank" class="text-reset">
                                        <span class="text-primary fw-bold me-3">Conferir</span> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.453" height="12.797"><g data-name="Icon | Eye - Open" transform="translate(1.29 1)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><ellipse data-name="Elipse 18" cx="3.173" cy="3.629" rx="3.173" ry="3.629" transform="translate(7.041 3.538)"/><path data-name="Caminho 67" d="M.002 8.012S3.045.002 10.216.002c6.622 0 9.659 8.01 9.659 8.01"/></g></svg>
                                    </a>
                                </div>
                            </div>

                            <div class="fs-12 d-flex p-3 bg-gray rounded me-4 mb-4 c-destinos__cambio__item">
                                <div class="me-3 border-end border-secondary pe-3">15 de Maio de 2020</div>
                                <div>
                                    <a href="" target="_blank" class="text-reset">
                                        <span class="text-primary fw-bold me-3">Conferir</span> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.453" height="12.797"><g data-name="Icon | Eye - Open" transform="translate(1.29 1)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><ellipse data-name="Elipse 18" cx="3.173" cy="3.629" rx="3.173" ry="3.629" transform="translate(7.041 3.538)"/><path data-name="Caminho 67" d="M.002 8.012S3.045.002 10.216.002c6.622 0 9.659 8.01 9.659 8.01"/></g></svg>
                                    </a>
                                </div>
                            </div>

                            <div class="fs-12 d-flex p-3 bg-gray rounded me-4 mb-4 c-destinos__cambio__item">
                                <div class="me-3 border-end border-secondary pe-3">16 de Maio de 2020</div>
                                <div>
                                    <a href="" target="_blank" class="text-reset">
                                        <span class="text-primary fw-bold me-3">Conferir</span> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.453" height="12.797"><g data-name="Icon | Eye - Open" transform="translate(1.29 1)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><ellipse data-name="Elipse 18" cx="3.173" cy="3.629" rx="3.173" ry="3.629" transform="translate(7.041 3.538)"/><path data-name="Caminho 67" d="M.002 8.012S3.045.002 10.216.002c6.622 0 9.659 8.01 9.659 8.01"/></g></svg>
                                    </a>
                                </div>
                            </div>

                            <div class="fs-12 d-flex p-3 bg-gray rounded me-4 mb-4 c-destinos__cambio__item">
                                <div class="me-3 border-end border-secondary pe-3">17 de Maio de 2020</div>
                                <div>
                                    <a href="" target="_blank" class="text-reset">
                                        <span class="text-primary fw-bold me-3">Conferir</span> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.453" height="12.797"><g data-name="Icon | Eye - Open" transform="translate(1.29 1)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><ellipse data-name="Elipse 18" cx="3.173" cy="3.629" rx="3.173" ry="3.629" transform="translate(7.041 3.538)"/><path data-name="Caminho 67" d="M.002 8.012S3.045.002 10.216.002c6.622 0 9.659 8.01 9.659 8.01"/></g></svg>
                                    </a>
                                </div>
                            </div>

                            <div class="fs-12 d-flex p-3 bg-gray rounded me-4 mb-4 c-destinos__cambio__item">
                                <div class="me-3 border-end border-secondary pe-3">18 de Maio de 2020</div>
                                <div>
                                    <a href="" target="_blank" class="text-reset">
                                        <span class="text-primary fw-bold me-3">Conferir</span> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.453" height="12.797"><g data-name="Icon | Eye - Open" transform="translate(1.29 1)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><ellipse data-name="Elipse 18" cx="3.173" cy="3.629" rx="3.173" ry="3.629" transform="translate(7.041 3.538)"/><path data-name="Caminho 67" d="M.002 8.012S3.045.002 10.216.002c6.622 0 9.659 8.01 9.659 8.01"/></g></svg>
                                    </a>
                                </div>
                            </div>

                            <div class="fs-12 d-flex p-3 bg-gray rounded me-4 mb-4 c-destinos__cambio__item">
                                <div class="me-3 border-end border-secondary pe-3">19 de Maio de 2020</div>
                                <div>
                                    <a href="" target="_blank" class="text-reset">
                                        <span class="text-primary fw-bold me-3">Conferir</span> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.453" height="12.797"><g data-name="Icon | Eye - Open" transform="translate(1.29 1)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><ellipse data-name="Elipse 18" cx="3.173" cy="3.629" rx="3.173" ry="3.629" transform="translate(7.041 3.538)"/><path data-name="Caminho 67" d="M.002 8.012S3.045.002 10.216.002c6.622 0 9.659 8.01 9.659 8.01"/></g></svg>
                                    </a>
                                </div>
                            </div>

                            <div class="fs-12 d-flex p-3 bg-gray rounded me-4 mb-4 c-destinos__cambio__item">
                                <div class="me-3 border-end border-secondary pe-3">20 de Maio de 2020</div>
                                <div>
                                    <a href="" target="_blank" class="text-reset">
                                        <span class="text-primary fw-bold me-3">Conferir</span> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.453" height="12.797"><g data-name="Icon | Eye - Open" transform="translate(1.29 1)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><ellipse data-name="Elipse 18" cx="3.173" cy="3.629" rx="3.173" ry="3.629" transform="translate(7.041 3.538)"/><path data-name="Caminho 67" d="M.002 8.012S3.045.002 10.216.002c6.622 0 9.659 8.01 9.659 8.01"/></g></svg>
                                    </a>
                                </div>
                            </div>

                            <div class="fs-12 d-flex p-3 bg-gray rounded me-4 mb-4 c-destinos__cambio__item">
                                <div class="me-3 border-end border-secondary pe-3">21 de Maio de 2020</div>
                                <div>
                                    <a href="" target="_blank" class="text-reset">
                                        <span class="text-primary fw-bold me-3">Conferir</span> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.453" height="12.797"><g data-name="Icon | Eye - Open" transform="translate(1.29 1)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><ellipse data-name="Elipse 18" cx="3.173" cy="3.629" rx="3.173" ry="3.629" transform="translate(7.041 3.538)"/><path data-name="Caminho 67" d="M.002 8.012S3.045.002 10.216.002c6.622 0 9.659 8.01 9.659 8.01"/></g></svg>
                                    </a>
                                </div>
                            </div>

                            <div class="fs-12 d-flex p-3 bg-gray rounded me-4 mb-4 c-destinos__cambio__item">
                                <div class="me-3 border-end border-secondary pe-3">22 de Maio de 2020</div>
                                <div>
                                    <a href="" target="_blank" class="text-reset">
                                        <span class="text-primary fw-bold me-3">Conferir</span> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.453" height="12.797"><g data-name="Icon | Eye - Open" transform="translate(1.29 1)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><ellipse data-name="Elipse 18" cx="3.173" cy="3.629" rx="3.173" ry="3.629" transform="translate(7.041 3.538)"/><path data-name="Caminho 67" d="M.002 8.012S3.045.002 10.216.002c6.622 0 9.659 8.01 9.659 8.01"/></g></svg>
                                    </a>
                                </div>
                            </div>

                            <div class="fs-12 d-flex p-3 bg-gray rounded me-4 mb-4 c-destinos__cambio__item">
                                <div class="me-3 border-end border-secondary pe-3">23 de Maio de 2020</div>
                                <div>
                                    <a href="" target="_blank" class="text-reset">
                                        <span class="text-primary fw-bold me-3">Conferir</span> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.453" height="12.797"><g data-name="Icon | Eye - Open" transform="translate(1.29 1)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><ellipse data-name="Elipse 18" cx="3.173" cy="3.629" rx="3.173" ry="3.629" transform="translate(7.041 3.538)"/><path data-name="Caminho 67" d="M.002 8.012S3.045.002 10.216.002c6.622 0 9.659 8.01 9.659 8.01"/></g></svg>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="tab-pane fade" id="tab2020" role="tabpanel" aria-labelledby="2020-tab">
    
                        <div class="d-flex flex-wrap">

                            <div class="fs-12 d-flex p-3 bg-gray rounded me-4 mb-4">
                                <div class="me-3 border-end border-secondary pe-3">14 de Maio de 2020</div>
                                <div>
                                    <a href="" target="_blank" class="text-reset">
                                        <span class="text-primary fw-bold me-3">Conferir</span> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.453" height="12.797"><g data-name="Icon | Eye - Open" transform="translate(1.29 1)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><ellipse data-name="Elipse 18" cx="3.173" cy="3.629" rx="3.173" ry="3.629" transform="translate(7.041 3.538)"/><path data-name="Caminho 67" d="M.002 8.012S3.045.002 10.216.002c6.622 0 9.659 8.01 9.659 8.01"/></g></svg>
                                    </a>
                                </div>
                            </div>

                            <div class="fs-12 d-flex p-3 bg-gray rounded me-4 mb-4">
                                <div class="me-3 border-end border-secondary pe-3">15 de Maio de 2020</div>
                                <div>
                                    <a href="" target="_blank" class="text-reset">
                                        <span class="text-primary fw-bold me-3">Conferir</span> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.453" height="12.797"><g data-name="Icon | Eye - Open" transform="translate(1.29 1)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><ellipse data-name="Elipse 18" cx="3.173" cy="3.629" rx="3.173" ry="3.629" transform="translate(7.041 3.538)"/><path data-name="Caminho 67" d="M.002 8.012S3.045.002 10.216.002c6.622 0 9.659 8.01 9.659 8.01"/></g></svg>
                                    </a>
                                </div>
                            </div>

                            <div class="fs-12 d-flex p-3 bg-gray rounded me-4 mb-4">
                                <div class="me-3 border-end border-secondary pe-3">16 de Maio de 2020</div>
                                <div>
                                    <a href="" target="_blank" class="text-reset">
                                        <span class="text-primary fw-bold me-3">Conferir</span> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.453" height="12.797"><g data-name="Icon | Eye - Open" transform="translate(1.29 1)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><ellipse data-name="Elipse 18" cx="3.173" cy="3.629" rx="3.173" ry="3.629" transform="translate(7.041 3.538)"/><path data-name="Caminho 67" d="M.002 8.012S3.045.002 10.216.002c6.622 0 9.659 8.01 9.659 8.01"/></g></svg>
                                    </a>
                                </div>
                            </div>

                            <div class="fs-12 d-flex p-3 bg-gray rounded me-4 mb-4">
                                <div class="me-3 border-end border-secondary pe-3">17 de Maio de 2020</div>
                                <div>
                                    <a href="" target="_blank" class="text-reset">
                                        <span class="text-primary fw-bold me-3">Conferir</span> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.453" height="12.797"><g data-name="Icon | Eye - Open" transform="translate(1.29 1)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><ellipse data-name="Elipse 18" cx="3.173" cy="3.629" rx="3.173" ry="3.629" transform="translate(7.041 3.538)"/><path data-name="Caminho 67" d="M.002 8.012S3.045.002 10.216.002c6.622 0 9.659 8.01 9.659 8.01"/></g></svg>
                                    </a>
                                </div>
                            </div>

                            <div class="fs-12 d-flex p-3 bg-gray rounded me-4 mb-4">
                                <div class="me-3 border-end border-secondary pe-3">18 de Maio de 2020</div>
                                <div>
                                    <a href="" target="_blank" class="text-reset">
                                        <span class="text-primary fw-bold me-3">Conferir</span> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.453" height="12.797"><g data-name="Icon | Eye - Open" transform="translate(1.29 1)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><ellipse data-name="Elipse 18" cx="3.173" cy="3.629" rx="3.173" ry="3.629" transform="translate(7.041 3.538)"/><path data-name="Caminho 67" d="M.002 8.012S3.045.002 10.216.002c6.622 0 9.659 8.01 9.659 8.01"/></g></svg>
                                    </a>
                                </div>
                            </div>

                            <div class="fs-12 d-flex p-3 bg-gray rounded me-4 mb-4">
                                <div class="me-3 border-end border-secondary pe-3">19 de Maio de 2020</div>
                                <div>
                                    <a href="" target="_blank" class="text-reset">
                                        <span class="text-primary fw-bold me-3">Conferir</span> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.453" height="12.797"><g data-name="Icon | Eye - Open" transform="translate(1.29 1)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><ellipse data-name="Elipse 18" cx="3.173" cy="3.629" rx="3.173" ry="3.629" transform="translate(7.041 3.538)"/><path data-name="Caminho 67" d="M.002 8.012S3.045.002 10.216.002c6.622 0 9.659 8.01 9.659 8.01"/></g></svg>
                                    </a>
                                </div>
                            </div>

                            <div class="fs-12 d-flex p-3 bg-gray rounded me-4 mb-4">
                                <div class="me-3 border-end border-secondary pe-3">20 de Maio de 2020</div>
                                <div>
                                    <a href="" target="_blank" class="text-reset">
                                        <span class="text-primary fw-bold me-3">Conferir</span> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.453" height="12.797"><g data-name="Icon | Eye - Open" transform="translate(1.29 1)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><ellipse data-name="Elipse 18" cx="3.173" cy="3.629" rx="3.173" ry="3.629" transform="translate(7.041 3.538)"/><path data-name="Caminho 67" d="M.002 8.012S3.045.002 10.216.002c6.622 0 9.659 8.01 9.659 8.01"/></g></svg>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <button class="bg-white border-0 text-primary fw-bold mt-5">
                    Ver todas as datas
                </button>

            </div>

        </section>



    </main>


    
<?php include('includes/footer.php'); ?>

<script>
//Date Picker
    flatpickr(".destino-date", {
        locale: 'pt',
        dateFormat: 'd/m/Y',
        inline: true,
        onDayCreate: function(dObj, dStr, fp, dayElem){

            // dummy logic
            if (Math.random() < 0.15)
                dayElem.innerHTML += "<div class='c-destinos__calendar__dots'><span class='bg-green'></span><span class='bg-pink'></span><span class='bg-purple'></span><span class='bg-warning'></span></div>";


        }
    });

    var swiperContent = new Swiper(".JS__content-carousel", {
        slidesPerView: 'auto',
        height: 'auto',
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
    });
    
</script>
    