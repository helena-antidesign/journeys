
<?php include('includes/header.php') ?>


<main class="c-reservas">
        
    <section class="c-banner">
        <?php include('includes/search-box.php') ?>

        <div class="swiper-container h-100 JS__banner">
            
            <div class="swiper-wrapper h-100">

                <div class="c-banner__item swiper-slide h-100 d-flex align-items-end" style="background-image: url('assets/img/banner-bali.jpg');">
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

    <section class="py-3 mt-5 mb-4">
        <div class="container">

            <div class="row mb-4">
                <div class="col-xl-12">
                    <h3 class="fs-2 text-primary fw-bold">Todas as reservas</h3>
                </div>
            </div>

            <div class="row pt-1 pb-4">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-9 d-flex align-items-center mb-4">
                            <label class="icon-search me-3 fs-22 cursor-pointer" for="reserva-search"></label>
                            <input type="text" class="form-control w-100 fs-5 border-0 fw-light px-3" id="reserva-search" placeholder="Procure por uma reserva inserindo o código #000">
                        </div>
                        <div class="col-md-2 offset-md-1 d-flex align-items-center justify-content-lg-end mb-4">
                            <a class="fs-4 text-decoration-none text-primary fw-500 d-flex align-items-center c-reservas__filtros__button collapsed" data-bs-toggle="collapse" href="#filtros" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                <span class="icon-ajust me-3 fs-22"></span>
                                Filtros
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397" class="ms-3"><path data-name="Caminho 4" d="M7.366 8.397a1.029 1.029 0 01-.729-.3L.3 1.76A1.032 1.032 0 011.759.301l5.6 5.6 5.6-5.6a1.036 1.036 0 111.47 1.459L8.1 8.096a1.029 1.029 0 01-.734.301z" fill="#0e6a7a"/></svg>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="collapse multi-collapse c-reservas__filtros" id="filtros">

                <div class="d-flex align-items-baseline flex-wrap">
                    <div class="c-reservas__filtros__container mb-4">
                        <div class="d-flex no-wrap justify-content-between c-reservas__filtros__content">
                            <div class="mb-4 w-100 mx-2">
                                <label for="exampleInputEmail1" class="form-label">Id. Journeys</label>
                                <input class="form-control " type="text" aria-label="default input example">
                            </div>
                            <div class="mb-4 w-100 mx-2">
                                <label for="exampleInputEmail1" class="form-label">File/Invoice</label>
                                <input class="form-control" type="text"  aria-label="default input example">
                            </div>
                            <div class="mb-4 w-100 mx-2">
                                <label for="exampleInputEmail1" class="form-label">Usuário</label>
                                <input class="form-control" type="text" aria-label="default input example">
                            </div>
                            <div class="mb-4 w-100 mx-2">
                                <label for="exampleInputEmail1" class="form-label">Referência do Cliente</label>
                                <input class="form-control" type="text" aria-label="default input example">
                            </div>
                        </div>
                        <div class="d-flex no-wrap justify-content-between align-items-baseline c-reservas__filtros__content">
                            <div class="mb-4 w-100 mx-2">
                                <label for="exampleInputEmail1" class="form-label">Tour Líder</label>
                                <input class="form-control" type="text" aria-label="default input example">
                            </div>
                            <div class="mb-4 w-100 mx-2">
                                <label for="exampleInputEmail1" class="form-label">Cliente</label>
                                <input class="form-control" type="text" aria-label="default input example">
                            </div>
                            <div class="mb-4 w-100 mx-2">
                                <label for="exampleInputEmail1" class="form-label">Unidade de Faturamento</label>
                                <select class="form-select JS__select">
                                    <option selected="selected"></option>
                                    <option value="2">JOURNEYS AGENCIA DE VIAGENS E TURISMO EIRELI</option>
                                    <option value="3">JOURNEYS NACIONAL</option>
                                    <option value="4">NANO NACIONAL</option>
                                    <option value="1">NANO TURISMO EIRELI</option>
                                </select>
                            </div>
                            <div class="mb-4 w-100 mx-2">
                                <label for="exampleInputEmail1" class="form-label">Agrupamento</label>
                                <select class="form-select JS__select" id="filtro-agrupamento">
                                    <option selected="selected"></option>
                                    <option value="2">Journeys</option>
                                    <option value="1">Journeys AGT</option>
                                    <option value="3">Journeys ALLOT</option>
                                    <option value="4">Journeys ESP</option>
                                    <option value="5">Journeys GRP</option>
                                    <option value="7">Journeys NACIONAL</option>
                                    <option value="6">Journeys PARTNERS</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex no-wrap justify-content-between align-items-baseline c-reservas__filtros__content">
                            <div class="mb-4 w-100 mx-2">
                                <label for="country" class="form-label">País do Cliente</label>
                                <select class="form-select JS__select-country" id="filtro-pais">
                                    <option value="24">Africa do Sul </option>
                                    <option value="5">Alemanha</option>
                                    <option value="3">Argentina</option>
                                    <option value="38">Austria</option>
                                    <option value="40">Belgica</option>
                                    <option value="6">Bolivia</option>
                                    <option value="2">Brasil</option>
                                    <option value="26">Bulgaria</option>
                                    <option value="36">Canada</option>
                                    <option value="4">Chile</option>
                                    <option value="28">China</option>
                                    <option value="34">Chipre</option>
                                    <option value="13">Colômbia</option>
                                    <option value="37">Dinamarca</option>
                                    <option value="11">El Salvador</option>
                                    <option value="35">Emirados Arabes Unidos</option>
                                    <option value="10">Equador</option>
                                    <option value="12">Espanha</option>
                                    <option value="18">Estados Unidos</option>
                                    <option value="29">França</option>
                                    <option value="32">Honduras</option>
                                    <option value="27">Inglaterra</option>
                                    <option value="25">Israel </option>
                                    <option value="39">Marrocos</option>
                                    <option value="9">México</option>
                                    <option value="41">Noruega</option>
                                    <option value="23">Panamá</option>
                                     <option value="7">Paraguai</option>
                                    <option value="8">Peru</option>
                                    <option value="30">Porto Rico</option> 
                                    <option value="16">Portugal</option>
                                    <option value="14">Rep. Dominicana</option>
                                    <option value="21">República Dominicana</option>
                                    <option value="22">Russia</option>
                                    <option value="31">Suiça </option>
                                    <option value="17">Turquia</option>
                                    <option value="33">Ucrânia</option>
                                    <option value="15">Uruguai</option> 
                                    <option value="19">Venezuela</option>
                                </select>
                            </div>
                            
                            <div class="mb-4 w-100 mx-2 o-data-picker">
                                <label for="checkin" class="form-label">Datas Check-In</label>
                                <input class="form-control daterange bg-transparent" type="text" aria-label="Datas de Check-In" id="checkin">
                                <span class="icon-calendar"></span>
                            </div>
                            
                            <div class="mb-4 w-100 mx-2 o-data-picker">
                                <label for="checkout" class="form-label">Datas Check-Out</label>
                                <input class="form-control daterange bg-transparent" type="text" aria-label="Datas de Check-In" id="checkout">
                                <span class="icon-calendar"></span>
                            </div>
                            
                            <div class="mb-4 w-100 mx-2 o-data-picker">
                                <label for="data-criacao" class="form-label">Datas Criação</label>
                                <input class="form-control daterange bg-transparent" type="text" aria-label="Datas de Criação" id="data-criacao">
                                <span class="icon-calendar"></span>
                            </div>
                            
                            <div class="mb-4 w-100 mx-2 o-data-picker">
                                <label for="data-cancelamento" class="form-label">Datas Cancelamento</label>
                                <input class="form-control daterange bg-transparent" type="text" aria-label="Datas de Cancelamento" id="data-cancelamento">
                                <span class="icon-calendar"></span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mb-4 flex-wrap">
                        <div class="ms-2 me-5">   
                            <label for="exampleInputEmail1" class="form-label">Canais de Venda</label>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="mesa-operativa">
                                <label class="form-check-label fw-normal" for="mesa-operativa">
                                    Mesa Operativa
                                </label>
                            </div>  
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="pagina-web">
                                <label class="form-check-label fw-normal" for="pagina-web">
                                    Página Web
                                </label>
                            </div>  
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="nemo">
                                <label class="form-check-label fw-normal" for="nemo">
                                    Nemo
                                </label>
                            </div>  
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="hub">
                                <label class="form-check-label fw-normal" for="hub">
                                    Hub
                                </label>
                            </div>  
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="cangooroo">
                                <label class="form-check-label fw-normal" for="cangooroo">
                                    Cangooroo
                                </label>
                            </div>  
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="bookingmotor">
                                <label class="form-check-label fw-normal" for="bookingmotor">
                                    Bookingmotor
                                </label>
                            </div>  
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="consultar">
                                <label class="form-check-label fw-normal" for="consultar">
                                    Consultar
                                </label>
                            </div>  
                        </div>
                        <div class="ms-2 me-3">   
                            <label for="exampleInputEmail1" class="form-label">Status</label>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="confirmada">
                                <label class="form-check-label fw-normal" for="confirmada">
                                    Confirmada
                                </label>
                            </div>  
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="sob-consulta">
                                <label class="form-check-label fw-normal" for="sob-consulta">
                                    Sob-Consulta
                                </label>
                            </div> 
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="cancelada">
                                <label class="form-check-label fw-normal" for="cancelada">
                                    Cancelada
                                </label>
                            </div>  
                            

                            <div>
                                <label for="exampleInputEmail1" class="form-label mt-5">Visíbilidade</label>

                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="checkbox" id="visivel">
                                    <label class="form-check-label fw-normal" for="visivel">
                                        Visível ao Cliente
                                    </label>
                                </div>  
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="checkbox" id="invisivel">
                                    <label class="form-check-label fw-normal" for="invisivel">
                                        Invisível ao Cliente
                                    </label>
                                </div>  
                            </div>

                        </div>
                        <div class="ms-2">
                            <label for="exampleInputEmail1" class="form-label">Conferido</label>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="com-bookings">
                                <label class="form-check-label fw-normal" for="com-bookings">
                                    Com Bookings Não Conferidos
                                </label>
                            </div>  
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="sem-bookings">
                                <label class="form-check-label fw-normal" for="sem-bookings">
                                    Sem Bookings Não Conferidos
                                </label>
                            </div>
                        </div>
                    </div>
                </div>     

                <!-- 
                *
                *    VERSÃO NÃO-LOGADO 
                *
                -->

                <?php /*
                <div class="d-flex align-items-baseline flex-wrap">
                    <div class="c-reservas__filtros__container mb-4">
                        <div class="d-flex no-wrap justify-content-between c-reservas__filtros__content">
                            <div class="mb-4 w-100 mx-2">
                                <label for="exampleInputEmail1" class="form-label">Id. Journeys</label>
                                <input class="form-control " type="text" aria-label="default input example">
                            </div>
                            <div class="mb-4 w-100 mx-2">
                                <label for="exampleInputEmail1" class="form-label">File/Invoice</label>
                                <input class="form-control" type="text"  aria-label="default input example">
                            </div>
                            <div class="mb-4 w-100 mx-2">
                                <label for="exampleInputEmail1" class="form-label">Usuário</label>
                                <input class="form-control" type="text" aria-label="default input example">
                            </div>
                            <div class="mb-4 w-100 mx-2">
                                <label for="exampleInputEmail1" class="form-label">Referência do Cliente</label>
                                <input class="form-control" type="text" aria-label="default input example">
                            </div>
                        </div>
                        <div class="d-flex no-wrap justify-content-between align-items-baseline c-reservas__filtros__content">
                            <div class="mb-4 w-100 mx-2">
                                <label for="exampleInputEmail1" class="form-label">Tour Líder</label>
                                <input class="form-control" type="text" aria-label="default input example">
                            </div>
                            <div class="mb-4 w-100 mx-2 o-data-picker">
                                <label for="checkin" class="form-label">Datas Check-In</label>
                                <input class="form-control daterange bg-transparent" type="text" aria-label="Datas de Check-In" id="checkin">
                                <span class="icon-calendar"></span>
                            </div>
                            
                            <div class="mb-4 w-100 mx-2 o-data-picker">
                                <label for="checkout" class="form-label">Datas Check-Out</label>
                                <input class="form-control daterange bg-transparent" type="text" aria-label="Datas de Check-In" id="checkout">
                                <span class="icon-calendar"></span>
                            </div>
                            
                            <div class="mb-4 w-100 mx-2 o-data-picker">
                                <label for="data-criacao" class="form-label">Datas Criação</label>
                                <input class="form-control daterange bg-transparent" type="text" aria-label="Datas de Criação" id="data-criacao">
                                <span class="icon-calendar"></span>
                            </div>
                            
                            <div class="mb-4 w-100 mx-2 o-data-picker">
                                <label for="data-cancelamento" class="form-label">Datas Cancelamento</label>
                                <input class="form-control daterange bg-transparent" type="text" aria-label="Datas de Cancelamento" id="data-cancelamento">
                                <span class="icon-calendar"></span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mb-4 flex-wrap">
                        <div class="ms-2 me-5">   
                            <label for="exampleInputEmail1" class="form-label">Canais de Venda</label>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="pagina-web">
                                <label class="form-check-label fw-normal" for="pagina-web">
                                    Página Web
                                </label>
                            </div>  
                        </div>
                        <div class="ms-2 me-3">   
                            <label for="exampleInputEmail1" class="form-label">Status</label>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="confirmada">
                                <label class="form-check-label fw-normal" for="confirmada">
                                    Confirmada
                                </label>
                            </div>  
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="sob-consulta">
                                <label class="form-check-label fw-normal" for="sob-consulta">
                                    Sob-Consulta
                                </label>
                            </div> 
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" id="cancelada">
                                <label class="form-check-label fw-normal" for="cancelada">
                                    Cancelada
                                </label>
                            </div>  
                        </div>
                    </div>
                </div>  

                */?>

                <!-- 
                    NÁO-LOGADO END 
                -->


                <div class="mx-2 mb-5 d-flex flex-wrap justify-content-between align-items-center">
                    <a href="" class="btn-link fs-6 fw-500 me-5">Limpar filtros</a>

                    <button class="btn btn-primary px-5 rounded-pill fw-500 fs-4">Filtrar<div class="o-loader"></div></button>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 c-reservas__table overflow-x">
                    <table class="table table-striped fs-6 table-borderless table-hover JS__datatable">
                        <thead>
                            <tr class="text-secondary">
                                <th scope="col">Id.</th>
                                <th scope="col">Ref. Cliente</th>
                                <th scope="col">File/Invoice</th>
                                <th scope="col">Nome TP</th>
                                <th scope="col">Canal</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Usuário</th>
                                <th scope="col">Emissão</th>
                                <th scope="col">Check-In</th>
                                <th scope="col">Cancelamento</th>
                                <th scope="col">Status</th>
                                <th scope="col">White Label</th>
                                <th scope="col">A conferir</th>
                                <th scope="col">Visibilidade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span class="bg-warning"></span>
                                        </div>
                                   </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-show"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36524</td>
                                <td>743122768</td>
                                <td>030449b21</td>
                                <td>Dalton Marcelo</td>
                                <td>Hub</td>
                                <td>Traveltino</td>
                                <td>Traveltino-Hub</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td>-</td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-show"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                   <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span class="bg-warning"></span>
                                        </div>
                                   </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-show"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                   <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span class="bg-warning"></span>
                                        </div>
                                   </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-show"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span></span>
                                        </div>
                                    </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-show"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span class="bg-warning"></span>
                                        </div>
                                   </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-hidden"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span></span>
                                        </div>
                                    </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-show"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span class="bg-warning"></span>
                                        </div>
                                   </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-hidden"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span></span>
                                        </div>
                                    </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-show"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span class="bg-warning"></span>
                                        </div>
                                   </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-hidden"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span></span>
                                        </div>
                                    </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-show"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span class="bg-warning"></span>
                                        </div>
                                   </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-hidden"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span></span>
                                        </div>
                                    </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-show"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span class="bg-warning"></span>
                                        </div>
                                   </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-hidden"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span></span>
                                        </div>
                                    </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-show"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span class="bg-warning"></span>
                                        </div>
                                   </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-hidden"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span></span>
                                        </div>
                                    </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-show"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span class="bg-warning"></span>
                                        </div>
                                   </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-hidden"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span></span>
                                        </div>
                                    </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-show"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span class="bg-warning"></span>
                                        </div>
                                   </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-hidden"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span></span>
                                        </div>
                                    </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-show"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span class="bg-warning"></span>
                                        </div>
                                   </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-hidden"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span class="bg-warning"></span>
                                        </div>
                                   </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-hidden"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span class="bg-warning"></span>
                                        </div>
                                   </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-show"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span class="bg-warning"></span>
                                        </div>
                                   </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-show"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span class="bg-warning"></span>
                                        </div>
                                   </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-show"></span>
                                </td>
                            </tr>
                            <tr data-href="reserva.php">
                                <td scope="row">36496</td>
                                <td>1564AO</td>
                                <td>110064B21</td>
                                <td>David Baez</td>
                                <td>Mundo Travel</td>
                                <td>Caroline Menezes</td>
                                <td>Caroline Menezes</td>
                                <td>11/02/2021</td>
                                <td>15/03/2021</td>
                                <td>13/03/2021</td>
                                <td class="c-reservas__table__status">
                                    <div class="d-flex">
                                        <div class="c-reservas__table__status__item">
                                            1
                                            <span class="bg-success"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            2
                                            <span class="bg-danger"></span>
                                        </div>
                                        <div class="c-reservas__table__status__item">
                                            3
                                            <span class="bg-warning"></span>
                                        </div>
                                   </div>
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td class="fs-24 text-black-50">
                                    <span class="icon-pass-show"></span>
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

</main>


<?php include('includes/footer.php') ?>
