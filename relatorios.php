<?php include('includes/header--white.php'); ?>

    <main class="c-relatorios">
       <div class="container-fluid p-0 d-flex position-relative">
            <div class="c-relatorios__bg">
            </div>

            <div class="w-100 d-flex c-relatorios__container">

                <div class="container">

                    <div class="row">

                        <div class="col-xl-5 c-relatorios__container__left">
                            <h2 class="mb-4 fs-2 fw-bold text-secondary">Relatórios</h2>
                            <p class="mb-5 fs-4 text-gray-200 col-xl-8 ">Insira os dados e preencha todos os dados do relatórios basta preencher os campos abaixo.</p>

                            <div class="row">
                                <div class="col-xl-11">
                                    <form class="c-relatorios__container__form border border-dark" action="">
                                        <div class="row border-bottom pb-3 border-dark">
                                            <div class="col-6 border-end border-dark">
                                                <label for="checkin" class="form-label d-block mb-0 text-primary fs-5">Check-In</label>
                                                <input class="border-0 bg-transparent input-date text-gray-200" type="text" id="checkin" placeholder="12 de Fevereiro" readonly="readonly">
                                            </div>
                                            <div class="col-6">
                                                <label for="checkout" class="form-label d-block mb-0 text-primary fs-5">Check-Out</label>
                                                <input class="border-0 bg-transparent input-date" type="text" id="checkout" placeholder="14 de Fevereiro" readonly="readonly">
                                            </div>
                                        </div>
                                        <div class="row border-bottom pb-3 border-dark">
                                            <div class="col pt-3">
                                                <label for="destino" class="form-label d-block mb-0 text-primary fs-5">Destino</label>
                                                <input class="border-0 bg-transparent w-100" type="text" id="destino" placeholder="Rio de Janeiro - Rj">
                                            </div>
                                        </div>
                                        <div class="row border-bottom pb-3 border-dark">
                                            <div class="col pt-3">
                                                <label for="hotel" class="form-label d-block mb-0 text-primary fs-5">Hotel</label>
                                                <input class="border-0 bg-transparent w-100" type="text" id="hotel" placeholder="Belmond Copacabana Palace">
                                            </div>
                                        </div>
                                        <div class="row border-bottom pb-3 border-dark">
                                            <div class="col pt-3">
                                                <label for="empresa" class="form-label d-block mb-0 text-primary fs-5">Empresa</label>
                                                <input class="border-0 bg-transparent w-100" type="text" id="empresa" placeholder="Journeys Nacional Special Travel">
                                            </div>
                                        </div>
                                        <div class="row border-bottom pb-3 border-dark">
                                            <div class="col pt-3">
                                                <label for="fornecedor" class="form-label d-block mb-0 text-primary fs-5">Fornecedor</label>
                                                <input class="border-0 bg-transparent w-100" type="text" id="fornecedor" placeholder="Elegance Coberturas Vip Beira Mar">
                                            </div>
                                        </div>
                                        <div class="row border-bottom pb-3 border-dark pt-3">
                                            <div class="col-6 border-end border-dark">
                                                <label for="num-file" class="form-label d-block mb-0 text-primary fs-5">Número do file</label>
                                                <input class="border-0 bg-transparent" type="text" id="num-file" placeholder="656556">
                                            </div>
                                            <div class="col-6">
                                                <label for="nome-servico" class="form-label d-block mb-0 text-primary fs-5">Nome do serviço</label>
                                                <input class="border-0 bg-transparent" type="text" id="nome-servico" placeholder="Operação extra">
                                            </div>
                                        </div>
                                        <div class="row pt-5">
                                            <div class="col">
                                                <button class="btn btn-primary px-5 rounded-pill fw-500 me-3 w-100 fs-5">Gerar relatório</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 offset-xl-1 c-relatorios__container__result">

                            <h2 class="fs-2 fw-bold text-secondary mb-5 ">Todos os relatórios</h2>

                            <div class="row">
                                <table class="table pt-4" id="table">
                                    <thead class="fs-12">
                                        <tr class="text-secondary">
                                            <th scope="col" class="fw-500"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.365" height="22.916" viewBox="0 0 20.365 22.916" class="me-2">
                                                    <g id="Icon_Calendar" data-name="Icon | Calendar" transform="translate(0 1)">
                                                        <text id="Volta" transform="translate(5.183 16.792)" fill="#0f6b7b" font-size="9" font-family="Rubik-Medium, Rubik" font-weight="500"><tspan x="0" y="0">01</tspan></text>
                                                        <g id="Retângulo_22" data-name="Retângulo 22" transform="translate(0 1.395)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                        <rect width="20.365" height="20.521" rx="4" stroke="none"/>
                                                        <rect x="0.75" y="0.75" width="18.865" height="19.021" rx="3.25" fill="none"/>
                                                        </g>
                                                        <path id="Caminho_12" data-name="Caminho 12" d="M0,0H9.5" transform="translate(5.44 7.111)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-width="1.5"/>
                                                        <g id="Grupo_47" data-name="Grupo 47" transform="translate(5.631)">
                                                        <line id="Linha_14" data-name="Linha 14" y1="3.28" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-width="2"/>
                                                        <line id="Linha_15" data-name="Linha 15" y1="3.28" transform="translate(9.171)" fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-width="2"/>
                                                        </g>
                                                </g>
                                            </svg>
                                                Data de Envio
                                            </th>
                                            <th scope="col" class="fw-500">
                                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20.365" height="22.916"  viewBox="0 0 22.509 22.54"><defs/><g fill="none" stroke="#0f6b7b" stroke-miterlimit="10" stroke-width="1.5" data-name="Icon | Iten" transform="translate(.75 .75)"><rect width="8.841" height="8.841" data-name="Retângulo 66" rx="4.42"/><rect width="8.841" height="8.841" data-name="Retângulo 70" rx="4.42" transform="translate(0 12.199)"/><rect width="8.841" height="8.841" data-name="Retângulo 71" rx="4.42" transform="translate(12.168)"/><path stroke-linecap="round" d="M12.168 14.461h8.841" data-name="Linha 53"/><path stroke-linecap="round" d="M12.168 18.726h8.841" data-name="Linha 54"/></g></svg>
                                                Categoria
                                            </th>
                                            <th scope="col" class="fw-500">
                                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20.365" height="22.916" viewBox="0 0 21.995 22.399"><defs/><g fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" data-name="Grupo 525"><path stroke-width="1.457" d="M5.798.728H3.529a2.8 2.8 0 00-2.8 2.8v15.34a2.8 2.8 0 002.8 2.8h14.936a2.8 2.8 0 002.8-2.8V3.529a2.8 2.8 0 00-2.8-2.8h-2.659" data-name="Caminho 165"/><path stroke-width="1.457" d="M.728 14.246h5.235l1.582 2.326h6.962l1.524-2.268h5.235" data-name="Caminho 166"/><path stroke-width="1.381" d="M11.226 11.184V1.068" data-name="Linha 125"/><path stroke-width="1.457" d="M15.676 6.787l-4.39 5.04-4.969-5.04" data-name="Caminho 167"/></g></svg>
                                                Entrada/Saída
                                            </th>
                                            <th scope="col" class="fw-500">
                                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="20.365" height="22.916" viewBox="0 0 21.976 22.336"><defs/><g data-name="Grupo 526" transform="translate(.728)"><path fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.457" d="M0 21.608h20.519" data-name="Linha 126"/><path fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.457" d="M10.26 9.308v8.236" data-name="Linha 127"/><path fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.457" d="M4.342 11.733l5.951 5.951 5.884-5.884" data-name="Caminho 168"/><circle cx=".99" cy=".99" r=".99" fill="#0f6b7b" data-name="Elipse 60" transform="translate(9.284)"/><circle cx=".99" cy=".99" r=".99" fill="#0f6b7b" data-name="Elipse 61" transform="translate(9.284 4.654)"/></g></svg>
                                                De
                                            </th>
                                            <th scope="col" class="fw-500">
                                                <svg class="me-2" width="20.365" height="22.916" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.976 22.336"><defs/><g data-name="Grupo 527" transform="rotate(180 10.623 11.168)"><path fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.457" d="M0 21.608h20.519" data-name="Linha 126"/><path fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.457" d="M10.26 9.308v8.236" data-name="Linha 127"/><path fill="none" stroke="#0f6b7b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.457" d="M4.342 11.733l5.951 5.951 5.884-5.883" data-name="Caminho 168"/><circle cx=".99" cy=".99" r=".99" fill="#0f6b7b" data-name="Elipse 60" transform="translate(9.284)"/><circle cx=".99" cy=".99" r=".99" fill="#0f6b7b" data-name="Elipse 61" transform="translate(9.284 4.654)"/></g></svg>
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
                                        <tr>
                                            <td>13 de Dezembro</td>
                                            <td>Journeys</td>
                                            <td>Interno</td>
                                            <td>Erick</td>
                                            <td>Kelly</td>
                                        </tr>
                                        <tr>
                                            <td>13 de Dezembro</td>
                                            <td>Journeys</td>
                                            <td>Interno</td>
                                            <td>Erick</td>
                                            <td>Kelly</td>
                                        </tr>
                                        <tr>
                                            <td>13 de Dezembro</td>
                                            <td>Journeys</td>
                                            <td>Interno</td>
                                            <td>Erick</td>
                                            <td>Kelly</td>
                                        </tr>
                                        <tr>
                                            <td>13 de Dezembro</td>
                                            <td>Journeys</td>
                                            <td>Interno</td>
                                            <td>Erick</td>
                                            <td>Kelly</td>
                                        </tr>
                                    
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
       </div>
    </main>

    <?php include('includes/footer.php'); ?>