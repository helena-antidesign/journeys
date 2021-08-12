
<?php include('includes/header.php') ?>


<main class="c-reservas">
        
    <section class="c-banner">
        <?php include('includes/search-box.php') ?>

        <div class="swiper-container h-100 JS__banner">
            
            <div class="swiper-wrapper h-100">

                <div class="c-banner__item swiper-slide h-100 d-flex align-items-end" style="background-image: url('assets/img/todas-reservas-banner.jpg');">
                    <img src="assets/img/banner-bg.png" alt="background" class="c-banner__background">
                    <div class="container text-light">
                        <div class="row h-100 d-flex align-items-center">
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-8 col-sm-8">
                                <h2 class="c-banner__title fw-bold fs-3">Bali.</h2>
                                <p>Uma das ilhas com um cenário inesquecível! Se você busca sol brilhante, praias e montanhas, esse é o lugar certo</p>
                                <a href="" class="c-banner__button d-flex align-items-center text-reset text-uppercase fw-bolder">
                                    Explorar <svg xmlns="http://www.w3.org/2000/svg" width="41.29" height="20"><path d="M40.817 8.858L32.389.471a1.613 1.613 0 00-2.276 2.286l5.658 5.631H1.613a1.613 1.613 0 000 3.226h34.158l-5.658 5.631a1.613 1.613 0 002.276 2.286l8.428-8.387a1.614 1.614 0 000-2.286z" fill="#fff"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="c-banner__item swiper-slide h-100 d-flex align-items-end" style="background-image: url('assets/img/reservas-banner.jpg');">
                    <img src="assets/img/banner-bg.png" alt="background" class="c-banner__background">
                    <div class="container text-light">
                        <div class="row h-100 d-flex align-items-center">
                            <div class="col-xl-4">
                                <h2 class="c-banner__title fw-bold fs-3">Nusa Penida.</h2>
                                <p>Uma das ilhas com um cenário inesquecível! Se você busca sol brilhante, praias e montanhas, esse é o lugar certo</p>
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

    <section class="c-reservas__container">
        <div class="container">

            <div class="row mb-4">
                <div class="col-xl-12">
                    <h3 class="fs-24 text-primary fw-normal"><span class="fw-bold">Reserva:</span> #36252</h3>
                </div>
            </div>

            <div class="row">
                <div class="d-flex border-bottom pb-4 flex-wrap">
                    <div class="me-5 mb-4">
                        <span class="fw-500 fs-12 d-block">Check-In</span>
                        <div class="fs-6">12 de Fevereiro</div>
                    </div>
                    <div class="me-5 mb-4">
                        <span class="fw-500 fs-12 d-block">Check-Out</span>
                        <div class="fs-6">14 de Fevereiro</div>
                    </div>
                    <div class="me-5 mb-4">
                        <span class="fw-500 fs-12 d-block">Competência</span>
                        <div class="fs-6">Março de 2021</div>
                    </div>
                    <div class="me-5 mb-4">
                        <span class="fw-500 fs-12 d-block">Finceiramente</span>
                        <div class="fs-6">Ativo</div>
                    </div>
                    <div class="me-5 mb-4">
                        <span class="fw-500 fs-12 d-block">Unid. de Faturamento</span>
                        <div class="fs-6">Journeys Internacional</div>
                    </div>
                    <div class="me-5 mb-4">
                        <span class="fw-500 fs-12 d-block">Canal de Venda</span>
                        <div class="fs-6">Traveltino</div>
                    </div>
                    <div class="me-5 mb-4">
                        <span class="fw-500 fs-12 d-block">Empresa</span>
                        <div class="fs-6">Journeys Special Travel & More</div>
                    </div>
                    <div class="me-5 mb-4">
                        <span class="fw-500 fs-12 d-block">Tour Lider</span>
                        <div class="fs-6">Lidiane Medina</div>
                    </div>
                </div>
            </div>

            <div class="row mb-4 pt-5">
               <div class="d-flex flex-wrap">
                    <div class="mb-4 me-3">
                        <label for="reserva-referencia" class="form-label">Referência do Cliente</label>
                        <input class="form-control" id="reserva-referencia" type="text" placeholder="Editar/Ref Cliente">
                    </div>
                    <div class="mb-4 mx-3">
                        <label for="reserva-invoice" class="form-label">File/Invoice</label>
                        <input class="form-control" type="text" id="reserva-invoice" placeholder="8383283" id="file">
                    </div>
                    <div class="mb-4 mx-3">
                        <label for="reserva-agrupamento" class="form-label">Agrupamento</label>
                        <select class="form-select" id="reserva-agrupamento">
                            <option value="">Journeys</option>
                        </select>
                    </div>
                    <div class="mb-4 mx-3">
                        <label for="reserva-nacionalidade" class="form-label">Nacionalidade</label>
                        <select class="form-select" id="reserva-nacionalidade">
                            <option value="">Brasil</option>
                        </select>
                    </div>
                    <div class="mb-4 mx-3">
                        <label for="reserva-idioma" class="form-label">Idioma</label>
                        <select class="form-select" id="reserva-idioma">
                            <option value="">Selecione o idioma</option>
                        </select>
                    </div>
                    <div class="mb-4 mx-3">
                        <label for="reserva-tour" class="form-label">Tour Líder</label>
                        <input class="form-control " type="text" placeholder="Juliana Pinheiros" id="reserva-tour">
                    </div>
                    <div class="mb-4 mx-3">
                        <label for="reserva-due" class="form-label">Due Data</label>
                        <span class="form-control JS__passageiros-input" id="passageirosInput" aria-label="Passageiros + Quarto/s">
                            <span class="JS__total-passageiros">00/00/0000</span> • R$<span class="JS__total-quartos">0,00</span>   
                        </span>
                    </div>
                    <div class="mb-4 mx-3">
                        <label class="form-label">Visibilidade</label>

                        <div class="c-reservas__" aria-label="Visibilidade">
                            <div class="form-check form-switch mb-1">
                                <label class="form-check-label mb-0" for="reserva-visibilidade">
                                    Ativada
                                </label>
                                <input class="form-check-input me-2" type="checkbox" id="reserva-visibilidade">
                            </div>
                        </div>


                    </div>
               </div>
            </div>


            <div class="row">
                <div class="col-xl-12 c-reservas__table">
                    <table class="table fs-6" id="table">
                        <thead style="background-color: #FBFBFB;" class="fs-12">
                            <tr class="text-secondary">
                                <th scope="col">
                                    <div class="d-flex align-items-center">
                                        <span class="text-primary icon-product fs-24 me-2"></span>
                                        Produto
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="d-flex align-items-center">
                                        <span class="text-primary icon-status fs-24 me-2"></span>
                                        Status
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="d-flex align-items-center">
                                        <span class="text-primary icon-category fs-24 me-2"></span>
                                        Ítem
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="d-flex align-items-center">
                                        <span class="text-primary icon-calendar fs-28 me-2"></span>
                                        Check-In <span class="mx-3 text-primary fw-bold">|</span> Check Out
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="d-flex align-items-center">
                                        <span class="text-primary icon-cost fs-24 me-2"></span>
                                        Custo
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="d-flex align-items-center">
                                        <span class="text-primary icon-commission fs-24 me-2"></span>
                                        Comissão
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="d-flex align-items-center">
                                        <span class="text-primary icon-exchange fs-24 me-2"></span>
                                        Câmbio
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="d-flex align-items-center">
                                        <span class="text-primary icon-markup fs-24 me-2"></span>
                                        Markup
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="d-flex align-items-center">
                                        <span class="text-primary icon-calendar fs-24 me-2"></span>
                                        Total
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">
                                <div class="form-check bg-white">
                                    <input class="form-check-input JS__search-box__radio" type="radio" name="search-opt" id="35080-1-HT" value="35080-1-HT">
                                    <label class="form-check-label d-flex align-items-center text-primary fw-500 mb-0" for="35080-1-HT">
                                        Hotel
                                        35080-1-HT
                                    </label>
                                </div>
                                    
                                </td>
                                <td>   
                                    <div class="d-flex align-items-center">
                                        <span class="dot bg-success me-2"></span>
                                        Confirmado
                                    </div>
                                </td>
                                <td>
                                    <span class="fw-500 text-primary">TRF O.W. ARPT / HOTEL O V.V - 1 - Privado - Sólo chofer - IN</span><br>
                                    Salvador <br>
                                    02 Adultos <br> 
                                    Cancelamento 15/01/2021<br>
                                    Lidiane Medina<br>
                                    RES014998-6059<br>
                                    Fornecedor: Toca da Coruja<br>
                                    Criação: 15/02/2021 - 10:44:15
                                </td>
                                <td>18/03/2021 <span class="mx-3 text-white fw-bold">|</span> 21/03/2021</td>
                                <td>BRL 3747,20</td>
                                <td>-</td>
                                <td>15,2500</td>
                                <td>5,00 %</td>
                                <td>USD 752</td>
                            </tr>
                            <tr>
                                <td colspan="10">
                                    <div class="d-flex justify-content-between pt-5">
                                        <div class="d-flex">
                                            <div class="form-check form-switch mb-2 me-4">
                                                <input class="form-check-input me-2" type="checkbox" id="hoteis-internos">
                                                <label class="form-check-label" for="hoteis-internos">
                                                    Visível para o cliente
                                                </label>
                                            </div>
                                            <div class="form-check form-switch mb-2 me-4">
                                                <input class="form-check-input me-2" type="checkbox" id="hoteis-internos">
                                                <label class="form-check-label" for="hoteis-internos">
                                                    Confirmado
                                                </label>
                                            </div>
                                            <div class="form-check form-switch mb-2 me-4">
                                                <input class="form-check-input me-2" type="checkbox" id="hoteis-internos">
                                                <label class="form-check-label" for="hoteis-internos">
                                                    Booking não opcional
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <span class="icon-comment text-primary fs-24 me-3 cursor-pointer JS__open-editar-reserva"></span>
                                            <span class="icon-pickup text-primary fs-24 me-3 cursor-pointer JS__open-editar-reserva"></span>
                                            <span class="icon-edit-values text-primary fs-24 me-3 cursor-pointer JS__open-editar-reserva"></span>
                                            <span class="icon-change-log text-primary fs-24 me-3 cursor-pointer JS__open-editar-reserva"></span>
                                            <span class="icon-privacy-policy text-primary fs-24 me-3 cursor-pointer JS__open-editar-reserva"></span>
                                            <span class="icon-trash text-primary fs-24 me-3 cursor-pointer JS__open-editar-reserva"></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">

                <div class="col d-flex justify-content-between">

                    <div class="d-flex">

                        <div class="d-flex align-items-center me-4">
                            <span class="icon-trash text-primary fs-28 me-2"></span>
                            <span class="fs-12">Excluir Todas</span>
                        </div>
                        <div class="d-flex align-items-center me-4 cursor-pointer JS__doc-toggle">
                            <span class="icon-doc-digital text-primary fs-28 me-2"></span>
                            <span class="fs-12">DOC Digital</span>
                        </div>
                        <div class="d-flex align-items-center me-4 cursor-pointer JS__invoice-toggle">
                            <span class="icon-invoice text-primary fs-28 me-2"></span>
                            <span class="fs-12">Invoice</span>
                        </div>
                        <div class="d-flex align-items-center me-4">
                            <span class="icon-printer text-primary fs-28 me-2"></span>
                            <span class="fs-12">Imprimir</span>
                        </div>
                        <div class="d-flex align-items-center me-4 cursor-pointer JS__voucher-toggle">
                            <span class="icon-voucher text-primary fs-28 me-2"></span>
                            <span class="fs-12">Voucher</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <span class="fs-4 text-primary fw-normal me-5"><span class="fw-bold">Total:</span> USD 150,00</span>
                        <button class="btn btn-primary px-5 rounded-pill fw-500 me-3">Adicionar mais itens</button>
                    </div>

                </div>


            </div>

        </div>
    </section>

</main>


<div class="c-reservas__menu JS__reserva-menu">

    <div class="c-reservas__menu__bg JS__open-editar-reserva"></div>

    <div class="c-reservas__menu__content">

            <div class="c-reservas__menu__icons">
                <span class="icon-close JS__open-editar-reserva fs-28 text-primary cursor-pointer fw-bold c-reservas__menu__close position-absolute"></span>
                <div class="w-100 h-100 d-flex align-items-center">
                    <ul class="nav nav-fill d-block w-100">
                        <li class="nav-item">
                            <button class="nav-link active" id="comentarios-tab" data-bs-toggle="tab" data-bs-target="#comentarios-tabContent" type="button" role="tab" aria-controls="comentarios-tabContent" aria-selected="true">
                                <span class="icon-comment fs-24"></span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="pickup-tab" data-bs-toggle="tab" data-bs-target="#pickup-tabContent" type="button" role="tab" aria-controls="pickup-tabContent" aria-selected="true">
                                <span class="icon-pickup fs-24"></span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="valores-tab" data-bs-toggle="tab" data-bs-target="#valores-tabContent" type="button" role="tab" aria-controls="valores-tabContent" aria-selected="false">
                                <span class="icon-edit-values fs-24"></span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="log-tab" data-bs-toggle="tab" data-bs-target="#log-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                <span class="icon-change-log fs-24"></span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="politica-tab" data-bs-toggle="tab" data-bs-target="#politica-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                <span class="icon-privacy-policy fs-24"></span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="excluir-tab" data-bs-toggle="tab" data-bs-target="#excluir-tabContent" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                <span class="icon-trash fs-24"></span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-content" id="tabTarifados">
                
                <div class="tab-pane fade active show" id="comentarios-tabContent" role="tabpanel" aria-labelledby="comentarios-tab">
                    <div class="c-reservas__menu__container fs-6">
                        <span class="fs-24 text-primary mb-3 d-block fw-bold">Comentários Internos</span>

                        <p class="fw-500 mb-5">TRF O.W. ARPT / HOTEL O V.V<br> 
                        1 - Privado - Sólo chofer - IN</p>

                        <ul class="comments fs-12">
                            <li>
                                <div><span class="text-primary fw-500 me-2">Kelly Silva</span> 11, Set, 2021</div>
                                Está viagem necessita de hospedagem dupla
                            </li>
                            <li class="level-2">
                                <div><span class="text-primary fw-500 me-2">Kelly Silva</span> 12, Set, 2021</div>
                                Serão dois hóspedes
                            </li>
                            <li>
                                <div><span class="text-primary fw-500 me-2">Erick Henrique</span> 14, Set, 2021</div>
                                Viagem com alterações criadas
                            </li>
                        </ul>

                        <div class="mt-5 w-100">
                            <label for="add-comment" class="form-label">Adicionar Comentário</label>
                            <label for="add-comment" class="add-comment">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"><g data-name="Grupo 350" transform="translate(-2603.494 -740.837)" fill="none" stroke="#96929c" stroke-linecap="round"><circle data-name="Elipse 45" cx="11" cy="11" r="11" transform="translate(2603.994 741.337)" stroke-miterlimit="9" stroke-dasharray="4"/><path data-name="Linha 90" stroke-miterlimit="10" d="M2614.994 747.063v10.548"/><path data-name="Linha 91" stroke-miterlimit="10" d="M2620.268 752.337h-10.548"/></g></svg></span>
                                <input class="form-control" id="add-comment" type="text" placeholder="Adicione algum detalhe sobre a viagem">
                            </label>
                        </div>

                        <button class="btn btn-primary px-5 rounded-pill fw-500 mt-5">Salvar Alterações</button>

                    </div>
                </div>

                <div class="tab-pane fade" id="valores-tabContent" role="tabpanel" aria-labelledby="pickup-tab">
                    <div class="c-reservas__menu__container fs-6">
                        <span class="fs-24 text-primary mb-3 d-block fw-bold">Alteração de Valores</span>

                        <p class="my-5">TRF O.W. ARPT / HOTEL O V.V<br>1 Privado - Sólo chofer - IN</p>

                        <div class="mb-3 w-100 me-2">
                            <label for="exampleInputEmail1" class="form-label">Valor de Venda (USD)</label>
                            <input class="form-control " type="text" placeholder="USD 0,000">
                        </div>
                        <div class="mb-5 w-100 me-2">
                            <label for="exampleInputEmail1" class="form-label">Notas</label>
                            <input class="form-control " type="text" placeholder="Digite algo sobre…">
                        </div>
                        <div class="mb-3 w-100 me-2">
                            <label for="exampleInputEmail1" class="form-label">Valor de Venda (BRL)</label>
                            <input class="form-control" type="text" placeholder="BRL 0,000">
                        </div>
                        <div class="mb-5 w-100 me-2">
                            <label for="exampleInputEmail1" class="form-label">Notas</label>
                            <input class="form-control" type="text" placeholder="Digite algo sobre…">
                        </div>

                        <button class="btn btn-primary px-5 rounded-pill fw-500 me-3">Salvar Alterações</button>
                    </div>
                </div>

                <div class="tab-pane fade" id="pickup-tabContent" role="tabpanel" aria-labelledby="pickup-tab">
                    <div class="c-reservas__menu__container fs-6">
                        <span class="fs-24 text-primary mb-5 d-block fw-bold">Info. Pickup / Dropoff</span>


                        <div>
                            <span class="fs-6 text-primary mb-3 d-block fw-bold">Pickup</span>
                            
                            <label for="exampleInputEmail1" class="form-label">Tipo</label>
                            <div class="d-flex mb-3">
                                <div class="form-check bg-white me-4">
                                    <input class="form-check-input" type="radio" name="pickup-tipo" value="1" id="pickup-hotel" checked>
                                    <label class="form-check-label d-flex align-items-center" for="pickup-hotel">
                                        <span class="icon-hotel-3 fs-24 me-2"></span> Hotel
                                    </label>
                                </div>
                                <div class="form-check bg-white">
                                    <input class="form-check-input" type="radio" name="pickup-tipo" value="1" id="pickup-aeroporto">
                                    <label class="form-check-label d-flex align-items-center" for="pickup-aeroporto">
                                        <span class="icon-airport fs-24 me-2"></span> Aeroporto
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3 w-100 me-2">
                                <label for="exampleInputEmail1" class="form-label">Cidade</label>
                                <input class="form-control " type="text" placeholder="Digite o nome da cidade desejada">
                            </div>
                            <div class="mb-3 w-100 me-2">
                                <label for="exampleInputEmail1" class="form-label">Número do Voo</label>
                                <input class="form-control " type="text" placeholder="0000000">
                            </div>
                            <div class="mb-3 w-100 me-2">
                                <label for="exampleInputEmail1" class="form-label">Localização do Aeroporto</label>
                                <input class="form-control " type="text" placeholder="Digite o endereço">
                            </div>

                        </div>
                        <div>
                            <span class="fs-6 text-primary mb-3 mt-4 d-block fw-bold">Dropoof</span>
                            <label for="exampleInputEmail1" class="form-label">Tipo</label>
                            <div class="d-flex mb-3">
                                <div class="form-check bg-white me-4">
                                    <input class="form-check-input" type="radio" name="dropoof-tipo" value="1" id="dropoof-hotel" checked>
                                    <label class="form-check-label d-flex align-items-center" for="dropoof-hotel">
                                        <span class="icon-hotel-3 fs-24 me-2"></span> Hotel
                                    </label>
                                </div>
                                <div class="form-check bg-white">
                                    <input class="form-check-input" type="radio" name="dropoof-tipo" value="1" id="dropoof-aeroporto">
                                    <label class="form-check-label d-flex align-items-center" for="dropoof-aeroporto">
                                        <span class="icon-airport fs-24 me-2"></span> Aeroporto
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3 w-100 me-2">
                                <label for="exampleInputEmail1" class="form-label">Cidade</label>
                                <input class="form-control" type="text" placeholder="Digite o nome da cidade desejada">
                            </div>
                            <div class="mb-3 w-100 me-2">
                                <label for="exampleInputEmail1" class="form-label">Hotel</label>
                                <input class="form-control " type="text" placeholder="0000000">
                            </div>
                        </div>

                        <button class="btn btn-primary px-5 rounded-pill fw-500 mt-5">Salvar Alterações</button>

                    </div>
                </div>

                <div class="tab-pane fade" id="log-tabContent" role="tabpanel" aria-labelledby="log-tab">
                    <div class="c-reservas__menu__container fs-6">
                        <span class="fs-24 text-primary mb-5 d-block fw-bold">Log de Alterações</span>
                        <p class="fw-500 fs-6 mb-4">TRF O.W. ARPT / HOTEL O V.V - 1 - Privado - Sólo chofer - IN</p>
                        <table class="table fs-12">
                            <thead>
                                <tr>
                                    <th>
                                        Data e Hora
                                    </th>
                                    <th>
                                        Cliente
                                    </th>
                                    <th>
                                        Usuário
                                    </th>
                                    <th>
                                        Ação
                                    </th>
                                    <th>
                                        Campo
                                    </th>
                                    <th>
                                        Antes
                                    </th>
                                    <th>
                                        Depois
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>26/01/2021 13:21:28</td>
                                    <td>Journeys | Uso Interno Operações</td>
                                    <td>Kelly</td>
                                    <td>Insersção</td>
                                    <td>Opcional</td>
                                    <td>Não</td>
                                    <td>Sim</td>
                                </tr>
                                <tr>
                                    <td>26/01/2021 13:21:28</td>
                                    <td>Journeys | Uso Interno Operações</td>
                                    <td>Kelly</td>
                                    <td>-</td>
                                    <td>Opcional</td>
                                    <td>Não</td>
                                    <td>Sim</td>
                                </tr>
                                <tr>
                                    <td>26/01/2021 13:21:28</td>
                                    <td>Journeys | Uso Interno Operações</td>
                                    <td>Kelly</td>
                                    <td>Insersção</td>
                                    <td>Opcional</td>
                                    <td>Sim</td>
                                    <td>Sim</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="politica-tabContent" role="tabpanel" aria-labelledby="politica-tab">
                    <div class="c-reservas__menu__container fs-6">
                        <span class="fs-24 text-primary mb-5 d-block fw-bold">Política e Privacidade</span>

                        <h3>Días normales</h3>

                        <p>Hasta 48 horas antes de la fecha de llegada del huésped - no habrá cargo.</p>

                        <p>Menos de 48 horas antes de la fecha de llegada del huésped, se cobrará el mínimo de noches requeridas.</p>


                        <h3>Vacaciones y paquetes</h3>

                        <p>Para feriados, el plazo para cancelación sin cargo es hasta 14 días antes de la llegada del huésped, cancelaciones posteriores a esa fecha, se cobrará el período completo del paquete.</p>

                        <h3>Dados</h3>
                        <p>
                            Banco Santander<br>
                            Agencia: 3020<br>
                            Cuenta de cadena 13001461-5<br>
                            Vg brasil ativ.hoteleiras cnpj (09.467.429 / 0001-68)<br>
                            Fecha límite hasta 2 días antes del checkin. el valor de cancelación es 100,00% del valor de la reserva.<br>
                            Todo incluido<br>
                            Refeições: desayuno, almuerzo, cena<br>
                            Pago estándar
                        </p>
                    </div>
                </div>


                <div class="tab-pane fade" id="excluir-tabContent" role="tabpanel" aria-labelledby="excluir-tab">
                    <div class="c-reservas__menu__container fs-6">
                        <span class="fs-24 text-primary mb-3 d-block"><span class="fw-bold">Reserva:</span> #36252</span>
                        <p class="fw-500 mb-5">Você tem certeza que deseja efetuar a exclusão deste item? Está ação não poderá ser desfeita!</p>

                        <div>

                            <div class="mb-5">
                                <span class="d-block text-primary fs-16 fw-500">Produto</span>
                                Hotel 35080-1-HT
                            </div>
                            <div class="mb-5">
                                <span class="d-block text-primary fs-16 fw-500">Item</span>
                                    <div class="fw-500">Center Hotel Rio</div>
                                    Rio de Janeiro<br>
                                    Doble Estándar BB<br>
                                    Júlio Cabral<br>
                                    02 Adultos<br>
                                    Cancelamento 15/01/2021<br>
                            </div>
                            <div class="mb-5 d-flex">
                            <div class="me-5">
                                    <span class="d-block text-primary fs-16 fw-500">Check-In</span>
                                    12/03/2021
                            </div>
                            <div>
                                    <span class="d-block text-primary fs-16 fw-500">Check-Out</span>
                                    12/03/2021
                            </div>
                            </div>
                            <div class="mb-5">
                                <span class="d-block text-primary fs-16 fw-500">Preço</span>
                                R$ 85,00
                            </div>

                        </div>

                        <button class="btn btn-primary px-5 rounded-pill fw-500 me-3">Excluir Item</button>
                    </div>
                </div>
            </div>

    </div>

</div>


<div class="c-reserva-single c-reservas__doc JS__doc ">

    <div class="c-reserva-single__bg cursor-pointer JS__doc-toggle"></div>

    <div class="c-reserva-single__box container">

        <div class="c-reserva-single__close JS__doc-toggle cursor-pointer">
            <span class="icon-close text-primary fs-28"></span>
        </div>

        <div class="c-reserva-single__box__container--check c-reserva-single__step2 show">

            <div class="border-bottom pb-3 ps-5 pt-2 mb-4">
                <span class="fs-4 text-primary fw-bold mb-3 d-block">Doc Digital</span>
                <div class="d-flex fs-6">
                    <div class="me-5">
                        <span class="fs-12 fs-500 text-black-50">Reserva</span><br>
                        #36547
                    </div>
                    <div>
                        <span class="fs-12 fs-500 text-black-50">Ref. Journeys</span><br>
                        030458b21
                    </div>
                </div>
            </div>
            
            <div class="d-flex">

                <div class="c-reservas__doc__col1">
                    
                    <span class="text-primary fw-500 fs-6 mb-4 d-block">Entrada & Saída: <span class="text-black-50">Cliente/Fornecedor</span></span>

                    <div class="d-flex justify-content-between">

                        <div class="upload">
                            <div class="upload-files d-flex justify-content-between">
                                <footer>
                                    <div class="divider">
                                        <span class="fw-500 text-primary fs-12">Arquivos</span>
                                    </div>
                                    <div class="list-files">
                                        <!--   template   -->
                                    </div>
                                        <button class="importar btn btn-primary px-5 rounded-pill fw-500 me-3">ENVIAR</button>
                                </footer>

                                <div class="body" id="drop">
                                  
                                    <p class="pointer-none pt-0">
                                        <a id="triggerFile" class="text-decoration-none fs-12 text-black-50 d-block">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="60.499" height="55.683"><g data-name="Grupo 354" fill="none" stroke="#656565" stroke-linecap="round" stroke-width="2"><g data-name="Grupo 353" stroke-miterlimit="10"><path data-name="Linha 92" d="M30.249 23.395v17.823"/><path data-name="Linha 93" d="M39.161 32.306H21.338"/></g><path data-name="Caminho 109" d="M1 5.943v43.8a4.943 4.943 0 004.943 4.943h48.614a4.942 4.942 0 004.943-4.943V16.471a4.942 4.942 0 00-4.943-4.943H32.298a4.947 4.947 0 01-3.5-1.447l-7.583-7.583a4.942 4.942 0 00-3.474-1.447L5.959 1A4.943 4.943 0 001 5.943z" stroke-linejoin="round"/></g></svg>
                                            <div class="d-block w-50 mx-auto mb-2">Segure e arraste os arquivos até aqui</div>
                                            <span class="text-primary d-block">PDF, DOC e EXEL</span>
                                        </a></p>
                                    <input type="file" multiple="multiple" />
                                </div>

                            </div>
                        </div>
                        

                    </div>

                    <span class="text-primary fw-500 fs-16 mt-5 mb-0 d-block d-block">Documentos Salvos</span>
                    <table class="table fs-12 w-100" id="table">
                        <tbody>
                            <tr class="border-bottom">
                                <td>Nota Fiscal Journeys</td>
                                <td>Journeys | Uso Interno Operações</td>
                                <td>Key</td>
                                <td>
                                     <span class="icon-trash fs-24 text-primary"></span>
                                </td>
                                <td>
                                     <span class="icon-download fs-24 text-primary"></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Nota Fiscal Journeys</td>
                                <td>Journeys | Uso Interno Operações</td>
                                <td>Key</td>
                                <td>
                                     <span class="icon-trash fs-24 text-primary"></span>
                                </td>
                                <td>
                                     <span class="icon-download fs-24 text-primary"></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>

                <div class="c-reservas__doc__table">
                    <span class="text-primary fw-500 fs-6">Dados do Documento</span>
                    <table class="table table-striped fs-6 table-borderless table-hover w-100" id="table">
                        <thead class="fs-12">
                            <tr class="text-secondary">
                                <th scope="col" class="fw-500"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.365" height="22.916" viewBox="0 0 20.365 22.916" class="me-2">
                                        <g id="Icon_Calendar" data-name="Icon | Calendar" transform="translate(0 1)">
                                            <text id="Volta" transform="translate(5.183 16.792)" fill="#0f6b7b" font-size="9" font-family="Rubik-Medium, Rubik" font-weight="500"><tspan x="0" y="0">01</tspan></text>
                                            <g id="Retângulo_22" data-name="Retângulo 22" transform="translate(0 1.395)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                            <rect width="20.365" height="20.521" rx="4" stroke="none"></rect>
                                            <rect x="0.75" y="0.75" width="18.865" height="19.021" rx="3.25" fill="none"></rect>
                                            </g>
                                            <path id="Caminho_12" data-name="Caminho 12" d="M0,0H9.5" transform="translate(5.44 7.111)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-width="1.5"></path>
                                            <g id="Grupo_47" data-name="Grupo 47" transform="translate(5.631)">
                                            <line id="Linha_14" data-name="Linha 14" y1="3.28" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-width="2"></line>
                                            <line id="Linha_15" data-name="Linha 15" y1="3.28" transform="translate(9.171)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-width="2"></line>
                                            </g>
                                    </g>
                                </svg>
                                    Data de Envio
                                </th>
                                <th scope="col" class="fw-500">
                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20.365" height="22.916" viewBox="0 0 22.509 22.54"><defs></defs><g fill="none" stroke="#0f6b7b" stroke-miterlimit="10" stroke-width="1.5" data-name="Icon | Iten" transform="translate(.75 .75)"><rect width="8.841" height="8.841" data-name="Retângulo 66" rx="4.42"></rect><rect width="8.841" height="8.841" data-name="Retângulo 70" rx="4.42" transform="translate(0 12.199)"></rect><rect width="8.841" height="8.841" data-name="Retângulo 71" rx="4.42" transform="translate(12.168)"></rect><path stroke-linecap="round" d="M12.168 14.461h8.841" data-name="Linha 53"></path><path stroke-linecap="round" d="M12.168 18.726h8.841" data-name="Linha 54"></path></g></svg>
                                    Categoria
                                </th>
                                <th scope="col" class="fw-500">
                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20.365" height="22.916" viewBox="0 0 21.995 22.399"><defs></defs><g fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" data-name="Grupo 525"><path stroke-width="1.457" d="M5.798.728H3.529a2.8 2.8 0 00-2.8 2.8v15.34a2.8 2.8 0 002.8 2.8h14.936a2.8 2.8 0 002.8-2.8V3.529a2.8 2.8 0 00-2.8-2.8h-2.659" data-name="Caminho 165"></path><path stroke-width="1.457" d="M.728 14.246h5.235l1.582 2.326h6.962l1.524-2.268h5.235" data-name="Caminho 166"></path><path stroke-width="1.381" d="M11.226 11.184V1.068" data-name="Linha 125"></path><path stroke-width="1.457" d="M15.676 6.787l-4.39 5.04-4.969-5.04" data-name="Caminho 167"></path></g></svg>
                                    Entrada/Saída
                                </th>
                                <th scope="col" class="fw-500">
                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20.365" height="22.916" viewBox="0 0 21.976 22.336"><defs></defs><g data-name="Grupo 526" transform="translate(.728)"><path fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.457" d="M0 21.608h20.519" data-name="Linha 126"></path><path fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.457" d="M10.26 9.308v8.236" data-name="Linha 127"></path><path fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.457" d="M4.342 11.733l5.951 5.951 5.884-5.884" data-name="Caminho 168"></path><circle cx=".99" cy=".99" r=".99" fill="#0f6b7b" data-name="Elipse 60" transform="translate(9.284)"></circle><circle cx=".99" cy=".99" r=".99" fill="#0f6b7b" data-name="Elipse 61" transform="translate(9.284 4.654)"></circle></g></svg>
                                    De
                                </th>
                                <th scope="col" class="fw-500">
                                    <svg class="me-2" width="20.365" height="22.916" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.976 22.336"><defs></defs><g data-name="Grupo 527" transform="rotate(180 10.623 11.168)"><path fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.457" d="M0 21.608h20.519" data-name="Linha 126"></path><path fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.457" d="M10.26 9.308v8.236" data-name="Linha 127"></path><path fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.457" d="M4.342 11.733l5.951 5.951 5.884-5.883" data-name="Caminho 168"></path><circle cx=".99" cy=".99" r=".99" fill="#0f6b7b" data-name="Elipse 60" transform="translate(9.284)"></circle><circle cx=".99" cy=".99" r=".99" fill="#0f6b7b" data-name="Elipse 61" transform="translate(9.284 4.654)"></circle></g></svg>
                                    Para
                                </th>
                            </tr>
                        </thead>
                        <tbody class="fs-6">
                            <tr onclick="window.open('relatorio.pdf')">
                                <td>13 de Dezembro</td>
                                <td>Journeys</td>
                                <td>Interno</td>
                                <td>Erick</td>
                                <td>Kelly</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="form-floating fs-12">
                        <textarea class="form-control bg-gray w-100" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Journeys | Uso Interno Operações</label>
                    </div>
                </div>


            </div>
           

        </div>

    </div>

</div>


<div class="c-reserva-single c-reservas__invoice JS__invoice">

    <div class="c-reserva-single__bg cursor-pointer JS__invoice-toggle"></div>

    <div class="c-reserva-single__box container">

        <div class="c-reserva-single__close JS__invoice-toggle cursor-pointer">
            <span class="icon-close text-primary fs-28"></span>
        </div>

        <div class="c-reserva-single__box__container--check c-reserva-single__step2 show">

            <div class="d-flex justify-content-between align-items-center border-bottom pb-3 pt-2 ps-5 mb-4">
                <span class="fs-4 text-primary fw-normal"><span class="fw-bold">Invoice:</span> #35080</span>
            </div>
            

            <div class="c-reserva-single__box__item d-flex justify-content-between">

                <table class="table fs-6" id="table">
                    <thead>
                        <tr class="text-secondary fw-500">
                            <th scope="col">Produto</th>
                            <th scope="col"> Ítem</th>
                            <th scope="col">Status</th>
                            <th scope="col">Check-In</th>
                            <th scope="col">Check-Out</th>
                            <th scope="col">Preço</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row" class="text-primary">
                                Hotel
                                35080-1-HT
                            </td>
                            <td>
                                <span class="fw-bold text-primary">Center Hotel Rio</span><br>
                                Rio de Janeiro<br>
                                Doble Estándar BB<br>
                                Júlio Cabral<br>
                                02 Adultos<br>
                                Cancelamento 15/01/2021
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="dot bg-success me-2"></span>
                                    Confirmado  
                                </div>    
                            </td>
                            <td>18/03/2021</td>
                            <td>21/03/2021</td>
                            <td>R$ 50,00</td>
                        </tr>
                    </tbody>
                </table>

                <div class="pt-4 d-flex align-items-center">
                    <span class="fs-4 text-primary fw-normal"><span class="fw-bold">Total:</span> R$ 150,00</span>
                </div>

            </div>

            <div class="d-flex justify-content-between align-items-center pt-4 border-top">
                <div class="d-flex">
                    <div class="mb-4 me-3 c-reservas__invoice__input">
                        <label for="invoice-preco" class="form-label">Selecione uma opção para o preço</label>
                        <select class="form-select" id="invoice-preco">
                            <option value="">Total</option>
                        </select>
                    </div>
                    <div class="mb-4 me-3 c-reservas__invoice__input">
                        <label for="invoice-comentarios" class="form-label">Comentários</label>
                        <input class="form-control" id="invoice-comentarios" type="text" placeholder="Digite algo sobre">
                    </div>
                    <div class="mb-4 me-3">
                        <label for="invoice-idioma" class="form-label">Idioma da emissão</label>
                        <select class="form-select" id="invoice-idioma">
                            <option value="">Selecione o idioma</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-primary px-5 rounded-pill fw-500 me-3">Exportar Invoice</button>
               
            </div>

        </div>

    </div>

</div>


<div class="c-reserva-single c-reservas__voucher JS__voucher">

    <div class="c-reserva-single__bg cursor-pointer JS__voucher-toggle"></div>

    <div class="c-reserva-single__box container">

        <div class="c-reserva-single__close JS__voucher-toggle cursor-pointer">
            <span class="icon-close text-primary fs-28"></span>
        </div>

        <div class="c-reserva-single__box__container--check c-reserva-single__step2 show">

            <div class="d-flex justify-content-between align-items-center border-bottom pb-3 ps-5 mb-4 pt-2">
                <span class="fs-4 text-primary fw-normal"><span class="fw-bold">Voucher:</span> 36547-1HT</span>
            </div>
            

            <form action="">
                <div class="d-flex">
                    <div class="mb-4 w-100 me-3">
                        <label for="voucher-descricao" class="form-label mb-2">Descrição</label>
                        <input class="form-control" id="voucher-descricao" type="text" placeholder="Superior Executivo Double BB">
                    </div>
                    <div class="mb-4 w-100 me-3">
                        <label for="voucher-fornecedor" class="form-label mb-2">Fornecedor</label>
                        <input class="form-control" id="voucher-fornecedor" type="text" placeholder="Windsor Barra Hotel E Congressos">
                    </div>
                    <div class="mb-4 w-100 me-3">
                        <label for="voucher-checkin" class="form-label mb-2">Check-In</label>
                        <input class="form-control bg-white input-date" type="text" placeholder="Selecione" id="voucher-checkin">
                    </div>
                    <div class="mb-4 w-100 me-3">
                        <label for="voucher-checkout" class="form-label mb-2">Check-Out</label>
                        <input class="form-control bg-white input-date" type="text" placeholder="Selecione" id="voucher-checkout">
                    </div>
                    <div class="mb-4 qnty me-3">
                        <label for="adultos-input" class="form-label mb-3">Adultos</label>
                        <div class="input-number">
                            <input type="button" class="button-minus" data-field="quantity" value="-">
                            <input type="number" step="1" max="" value="0" name="quantity" id="adultos-input" class="JS__hotel-passageiros-value p-0">
                            <input type="button" class="button-plus" data-field="quantity" value="+">
                        </div>
                    </div>
                    <div class="mb-4 qnty me-3 c-reserva__voucher__criancas">
                        <label for="criancas-input" class="form-label mb-3">Crianças</label>
                        <div class="input-number">
                            <input type="button" class="button-minus" data-field="quantity" value="-">
                            <input type="number" step="1" max="" value="0" name="quantity" id="criancas-input" class="JS__hotel-passageiros-value p-0">
                            <input type="button" class="button-plus" data-field="quantity" value="+">
                        </div>
                    </div>
                    <div class="mb-4 w-100 me-3">
                        <label for="voucher-tour" class="form-label">Tour Líder</label>
                        <input class="form-control" type="text" placeholder="Editar/Ref Cliente" id="voucher-tour">
                    </div>
                </div>
                <div class="d-flex">
                    <div class="mb-4 me-3 c-reservas__voucher__passageiro">
                        <label for="voucher-passageiro" class="form-label mb-2">Passageiro</label>
                        <input class="form-control" type="text" placeholder="Selma Walet" id="voucher-passageiro">
                    </div>
                    <div class="mb-4 me-3 c-reservas__voucher__idioma">
                        <label for="voucher-idioma" class="form-label mb-2">Idioma da emissão</label>
                        <select class="form-select" id="voucher-idioma">
                            <option value="">Selecione o idioma</option>
                        </select>
                    </div>
                    <div class="mb-4 me-3 w-100">
                        <label for="voucher-comentarios" class="form-label mb-2">Comentários</label>
                        <input class="form-control" type="text" placeholder="Algum detalhe sobre a viagem?" id="voucher-comentarios">
                    </div>
                </div>
            </form>

            <div class="d-flex justify-content-between align-items-center pt-4">
                <span class="btn-link fs-6 fw-500 cursor-pointer JS__voucher-toggle">Selecionar Mais Reservas</span>
                <div class="d-flex">
                    <button class="btn btn-primary px-5 rounded-pill fw-500 me-3">Imprimir Voucher</button>
                    <button class="btn btn-primary px-5 rounded-pill fw-500">Emitir Voucher</button>
                </div>
            </div>

        </div>

    </div>

</div>



<?php include('includes/footer.php') ?>


<script src="assets/js/pages/reserva.js"></script>

