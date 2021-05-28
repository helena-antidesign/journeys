
<?php include('includes/header.php') ?>


<main class="c-reservas">
        
    <section class="c-banner">
        <?php include('includes/search-box.php') ?>

        <div id="principal" class="carousel slide carousel-fade h-100" data-bs-ride="carousel">
            
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#principal" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#principal" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>

            <div class="carousel-inner h-100">

                <div class="carousel-item h-100 d-flex align-items-end active " style="background-image: url('assets/img/todas-reservas-banner.jpg');">
                    <img src="assets/img/banner-bg.png" alt="background" class="c-banner__background">
                    <div class="container text-light">
                        <div class="row h-100 d-flex align-items-center">
                            <div class="col-xl-4">
                                <h2 class="c-banner__title fw-bold fs-3">Bali.</h2>
                                <p>Uma das ilhas com um cenário inesquecível! Se você busca sol brilhante, praias e montanhas, esse é o lugar certo</p>
                                <a href="" class="c-banner__button d-flex align-items-center text-reset text-uppercase fw-bolder">
                                    Explorar <svg xmlns="http://www.w3.org/2000/svg" width="41.29" height="20"><path d="M40.817 8.858L32.389.471a1.613 1.613 0 00-2.276 2.286l5.658 5.631H1.613a1.613 1.613 0 000 3.226h34.158l-5.658 5.631a1.613 1.613 0 002.276 2.286l8.428-8.387a1.614 1.614 0 000-2.286z" fill="#fff"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="carousel-item h-100 d-flex align-items-end " style="background-image: url('assets/img/reservas-banner.jpg');">
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
                    <h3 class="fs-2 text-primary fw-normal fw-bold">Todas as reservas</h3>
                </div>
            </div>

            <div class="row pt-1 pb-5">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-10 d-flex align-items-center">
                            <span class="icon-search me-3"></span>
                            <input type="text" class="form-control w-100 fs-5 border-0" placeholder="Procure por uma reserva inserindo o código #000">
                        </div>

                        <div class="col-1 offset-1">
                            <a class="fs-4 text-decoration-none text-primary fw-500 d-flex align-items-center justify-content-between mb-3" data-bs-toggle="collapse" href="#filtros" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                <span class="icon-ajust"></span>
                                Filtros
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.73" height="8.397"><path data-name="Caminho 4" d="M7.366 8.397a1.029 1.029 0 01-.729-.3L.3 1.76A1.032 1.032 0 011.759.301l5.6 5.6 5.6-5.6a1.036 1.036 0 111.47 1.459L8.1 8.096a1.029 1.029 0 01-.734.301z" fill="#0e6a7a"/></svg>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="collapse multi-collapse c-reservas__filtros" id="filtros">
                <div class="d-flex justify-content-between">
                    <div class="c-reservas__filtros__container">
                        <div class="d-flex no-wrap justify-content-between">
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
                        <div class="d-flex no-wrap justify-content-between">
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
                                <select class="form-select">
                                    <option value="">Todas</option>
                                    <option value="">Todas</option>
                                    <option value="">Todas</option>
                                    <option value="">Todas</option>
                                    <option value="">Todas</option>
                                    <option value="">Todas</option>
                                </select>
                            </div>
                            <div class="mb-4 w-100 mx-2">
                                <label for="exampleInputEmail1" class="form-label">Agrupamento</label>
                                <select class="form-select">
                                    <option value="">Todas</option>
                                    <option value="">Todas</option>
                                    <option value="">Todas</option>
                                    <option value="">Todas</option>
                                    <option value="">Todas</option>
                                    <option value="">Todas</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex no-wrap justify-content-between">
                            <div class="mb-4 w-100 mx-2">
                                <label for="country" class="form-label">País do Cliente</label>
                                <input type="text" class="form-control" id="country">
                            </div>
                            
                            <div class="mb-4 w-100 mx-2 o-data-picker">
                                <label for="checkin" class="form-label">Datas de Check-In</label>
                                <input class="form-control input-date bg-transparent" type="text" aria-label="Datas de Check-In" id="checkin">
                                <span class="icon-calendar"></span>
                            </div>
                            
                            <div class="mb-4 w-100 mx-2 o-data-picker">
                                <label for="checkout" class="form-label">Datas de Check-Out</label>
                                <input class="form-control input-date bg-transparent" type="text" aria-label="Datas de Check-In" id="checkout">
                                <span class="icon-calendar"></span>
                            </div>
                            
                            <div class="mb-4 w-100 mx-2 o-data-picker">
                                <label for="data-criacao" class="form-label">Datas de Criação</label>
                                <input class="form-control input-date bg-transparent" type="text" aria-label="Datas de Criação" id="data-criacao">
                                <span class="icon-calendar"></span>
                            </div>
                            
                            <div class="mb-4 w-100 mx-2 o-data-picker">
                                <label for="data-cancelamento" class="form-label">Datas de Cancelamento</label>
                                <input class="form-control input-date bg-transparent" type="text" aria-label="Datas de Cancelamento" id="data-cancelamento">
                                <span class="icon-calendar"></span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="me-5">   
                            <label for="exampleInputEmail1" class="form-label">Canais de Venda</label>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="canais-venda" id="mesa-operativa">
                                <label class="form-check-label fw-normal" for="mesa-operativa">
                                    Mesa Operativa
                                </label>
                            </div>  
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="canais-venda" id="pagina-web">
                                <label class="form-check-label fw-normal" for="pagina-web">
                                    Página Web
                                </label>
                            </div>  
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="canais-venda" id="nemo">
                                <label class="form-check-label fw-normal" for="nemo">
                                    Nemo
                                </label>
                            </div>  
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="canais-venda" id="hub">
                                <label class="form-check-label fw-normal" for="hub">
                                    Hub
                                </label>
                            </div>  
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="canais-venda" id="cangooroo">
                                <label class="form-check-label fw-normal" for="cangooroo">
                                    Cangooroo
                                </label>
                            </div>  
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="canais-venda" id="bookingmotor">
                                <label class="form-check-label fw-normal" for="bookingmotor">
                                    Bookingmotor
                                </label>
                            </div>  
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="canais-venda" id="consultar">
                                <label class="form-check-label fw-normal" for="consultar">
                                    Consultar
                                </label>
                            </div>  
                        </div>
                        <div class="me-5">   
                            <label for="exampleInputEmail1" class="form-label">Status</label>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="status" id="confirmada">
                                <label class="form-check-label fw-normal" for="confirmada">
                                    Confirmada
                                </label>
                            </div>  
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="status" id="sob-consulta">
                                <label class="form-check-label fw-normal" for="sob-consulta">
                                    Sob-Consulta
                                </label>
                            </div> 
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="status" id="cancelada">
                                <label class="form-check-label fw-normal" for="cancelada">
                                    Cancelada
                                </label>
                            </div>  
                            <label for="exampleInputEmail1" class="form-label mt-5">Visíbilidade</label>

                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="visibilidade" id="visivel">
                                <label class="form-check-label fw-normal" for="visivel">
                                    Visível ao Cliente
                                </label>
                            </div>  
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="visibilidade" id="invisivel">
                                <label class="form-check-label fw-normal" for="invisivel">
                                    Invisível ao Cliente
                                </label>
                            </div>  
                        </div>
                        <div>
                            <label for="exampleInputEmail1" class="form-label">Conferido</label>
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="conferido" id="com-bookings">
                                <label class="form-check-label fw-normal" for="com-bookings">
                                    Com Bookings Não Conferidos
                                </label>
                            </div>  
                            <div class="form-check mb-1">
                                <input class="form-check-input" type="radio" name="conferido" id="sem-bookings">
                                <label class="form-check-label fw-normal" for="sem-bookings">
                                    Sem Bookings Não Conferidos
                                </label>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="mx-2 mb-5">
                    <a href="" class="btn-link fs-6 fw-500">Limpar filtros</a>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <table class="table table-striped fs-6 table-borderless" id="table"  
                    data-locale="pt-BR"
                    data-toggle="table" 
                    data-pagination="true" 
                    >
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
                            <tr>
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
                                <td class="c-reservas__table__status d-flex">
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
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td>
                                    <span class="c-reservas__table__visibilidade"></span>
                                </td>
                            </tr>
                            <tr>
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
                                <td><span class="c-reservas__table__visibilidade check"></span></td>
                            </tr>
                            <tr>
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
                                <td class="c-reservas__table__status d-flex">
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
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td>
                                    <span class="c-reservas__table__visibilidade"></span>
                                </td>
                            </tr>
                            <tr>
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
                                <td class="c-reservas__table__status d-flex">
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
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td>
                                    <span class="c-reservas__table__visibilidade"></span>
                                </td>
                            </tr>
                            <tr>
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
                                <td class="c-reservas__table__status d-flex">
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
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td>
                                    <span class="c-reservas__table__visibilidade"></span>
                                </td>
                            </tr>
                            <tr>
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
                                <td class="c-reservas__table__status d-flex">
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
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td>
                                    <span class="c-reservas__table__visibilidade"></span>
                                </td>
                            </tr>
                            <tr>
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
                                <td class="c-reservas__table__status d-flex">
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
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td>
                                    <span class="c-reservas__table__visibilidade"></span>
                                </td>
                            </tr>
                            <tr>
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
                                <td class="c-reservas__table__status d-flex">
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
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td>
                                    <span class="c-reservas__table__visibilidade"></span>
                                </td>
                            </tr>
                            <tr>
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
                                <td class="c-reservas__table__status d-flex">
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
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td>
                                    <span class="c-reservas__table__visibilidade"></span>
                                </td>
                            </tr>
                            <tr>
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
                                <td class="c-reservas__table__status d-flex">
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
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td>
                                    <span class="c-reservas__table__visibilidade"></span>
                                </td>
                            </tr>
                            <tr>
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
                                <td class="c-reservas__table__status d-flex">
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
                                </td>
                                <td>-</td>
                                <td>01</td>
                                <td>
                                    <span class="c-reservas__table__visibilidade"></span>
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

</main>

<script src="assets/js/pages/reservas.js"></script>


<?php include('includes/footer.php') ?>

