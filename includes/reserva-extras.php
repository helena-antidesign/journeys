
<section class="c-reserva-modal JS__reserva open show">

<div class="c-reserva-modal__bg JS__reservar-toggle"></div>

<div class="c-reserva-modal__box">

    <div class="c-reserva-modal__box__confirmation JS__reserva-step1 show">
    
        <div class="c-reserva-modal__close JS__reservar-toggle cursor-pointer">
            <span class="icon-close text-primary fs-28"></span>
        </div>
    
        <div class="c-reserva-modal__box__confirmation__header d-flex justify-content-between align-items-center pb-4 bg-white w-100">
            <div class="d-flex">
                <div class="c-reserva-modal__close JS__reservar-toggle cursor-pointer position-static me-5">
                    <span class="icon-close text-primary fs-28"></span>
                </div>

                <span class="fs-4 text-primary fw-light"><span class="fw-500">Reserva:</span> Ticket Entrada Beto Carreiro</span>
            </div>

            <div class="d-flex">
                <button class="btn btn-primary px-5 rounded-pill fw-500 me-3 JS__reservar-toggle">Adicionar mais itens</button>
                <button class="btn btn-primary px-5 rounded-pill fw-500 JS__reservar-toggle">Finalizar</button>
            </div>

        </div>

        <div class="c-reserva-modal__box__confirmation__container">

            <div class="row border-bottom pb-3">
                <div class="mb-4 col-2">
                    <label for="reserva-extras-file" class="form-label fw-normal">File/Referência</label>
                    <input class="form-control" type="text" id="reserva-extras-file">
                </div>
                <div class="mb-4 col-2">
                    <label for="reserva-extras-file" class="form-label fw-normal">Idioma</label>
                    <select class="form-select JS__select" id="reserva-extras-idioma">
                        <option value="7">Alemão</option>
                        <option value="11">Dinamarquês</option>
                        <option selected="selected" value="4">Espanhol</option>
                        <option value="8">Francês</option>
                        <option value="6">Inglês</option>
                        <option value="9">Italiano</option>
                        <option value="3">Português</option>
                    </select>  
                </div>
                <div class="mb-4 col-2">
                    <label for="reserva-extras--nacionalidade" class="form-label fw-normal">Nacionalidade</label>
                    
                    <select class="form-select JS__select-country" id="reserva-extras-nacionalidade">
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
                            <option selected="selected" value="15">Uruguai</option>
                            <option value="19">Venezuela</option>
                        </select>
                </div>
                <div class="mb-4 col-2">
                    <label for="reserva-extras-agrupamento" class="form-label fw-normal">Agrupamento</label>
                    <select class="form-select JS__select" id="reserva-extras-agrupamento">
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

            <div class="row pt-4">
                <div class="mb-4 col-1">
                    <label for="reserva-extras-adultos" class="form-label fw-normal mb-3">Adultos</label>
                    <div class="input-number">
                        <input type="button" value="-" class="button-minus" data-field="quantity">
                        <input type="number" step="1" max="" value="0" name="quantity" id="reserva-extras-adultos" class="JS__hotel-passageiros-value">
                        <input type="button" value="+" class="button-plus" data-field="quantity">
                    </div>
                </div>
                <div class="mb-4 col-1">
                    <div>
                        <label for="reserva-extras-criancas" class="form-label fw-normal mb-3">Crianças</label>
                    </div>
                    <div class="input-number">
                        <input type="button" value="-" class="button-minus" data-field="quantity">
                        <input type="number" step="1" max="" value="0" name="quantity" id="reserva-extras-criancas" class="JS__hotel-passageiros-value">
                        <input type="button" value="+" class="button-plus" data-field="quantity">
                    </div>
                </div>
                <div class="mb-4 col-4">
                    <label for="eserva-extras-fornecedor" class="form-label fw-normal">Fornecedor</label>
                    <select class="form-select JS__select" id="reserva-extras-fornecedor"> 
                        <option value=""></option>
                    </select>
                </div>
                <div class="mb-4 col-3">
                    <label for="reserva-extras-moeda" class="form-label fw-normal">Moeda Custo</label>
                    <select class="JS__select" id="reserva-extras-moeda"> 
                            <option value="? undefined:undefined ?" selected="selected"></option>
                            <option value="5">Bolívar venezuelano</option>
                            <option value="12">Colon/El Salvador</option>
                            <option value="17">Coroa Dinarmaquesa</option>
                            <option value="2">Dolar</option>
                            <option value="3">Euro</option>
                            <option value="7">Guarani/Paraguai</option>
                            <option value="16">Lira Turca</option>
                            <option value="6">Marco Alemao</option>
                            <option value="9">Novo Sol</option>
                            <option value="4">Peso Argentinos</option>
                            <option value="8">Peso Boliviano</option>
                            <option value="10">Peso Mexicano</option>
                            <option value="13">Peso/Colombia	</option>
                            <option value="14">Peso/Rep. Dominic</option>
                            <option value="15">Peso/Uruguaio</option>
                            <option value="1">Real</option>
                            <option value="11">Sucre Equador</option>
                    </select>
                </div>
                <div class="mb-4 col-3">
                    <label for="reserva-extras-cancelamento" class="form-label fw-normal">Política de cancelamento</label>
                    <select class="form-select JS__select" id="reserva-extras-cancelamento">
                        <option value="ValorPercentual">Valor Percentual</option>
                        <option value="SemCusto" selected="selected">Sem Custo</option>
                        <option value="ValorFixo">Valor Fixo</option>
                    </select>  
                </div>


                <div class="mb-4 col-3">
                    <label for="acompanhante-nome" class="form-label fw-normal">Nome</label>
                    <input class="form-control" type="text" id="reserva-nome" placeholder="Nome do passageiro">
                </div>
                <div class="mb-4 col-3">
                    <label for="acompanhante-sobrenome" class="form-label fw-normal">Sobrenome</label>
                    <input class="form-control" type="text" id="reserva-sobrenome" placeholder="Sobrenome do passageiro">
                </div>
                <div class="mb-4 col-3">
                    <label for="file" class="form-label fw-normal">Email</label>
                    <input class="form-control" type="email" id="file" placeholder="Nome@email.com.br">
                </div>
                <div class="mb-4 col-3">
                    <label for="reserva-telefone" class="form-label fw-normal">Telefone</label>
                    <input class="form-control" type="text" id="reserva-telefone" placeholder="+ 55 (00) 00000-0000">
                </div>
            </div>


            <div>
                <div class="mb-4">
                    <label for="reserva-comentarios" class="form-label fw-normal">Comentários</label>
                    <input class="form-control " type="text" id="reserva-comentarios" placeholder="Algum detalhe sobre a viagem?">
                </div>
            
            </div>

            <div class="d-flex border-bottom pb-2 flex-wrap">  
                <div class="form-check mb-1 me-3">
                    <input class="form-check-input" type="checkbox" name="reserva-opt" id="visivel-cliente">
                    <label class="form-check-label fw-light" for="visivel-cliente">
                        Visível para o cliente
                    </label>
                </div>
                <div class="form-check mb-1 me-3">
                    <input class="form-check-input" type="checkbox" name="reserva-opt" id="opcional">
                    <label class="form-check-label fw-light" for="opcional">
                        Opcional
                    </label>
                </div>
                <div class="form-check mb-1 me-3">
                    <input class="form-check-input" type="checkbox" name="reserva-opt" id="email-operador">
                    <label class="form-check-label fw-light" for="email-operador">
                        Enviar email ao operador
                    </label>
                </div>
                <div class="form-check mb-1 me-3">
                    <input class="form-check-input" type="checkbox" name="reserva-opt" id="email-fornecedor">
                    <label class="form-check-label fw-light" for="email-fornecedor">
                        Enviar email ao fornecedor
                    </label>
                </div>
                <div class="form-check mb-1 me-3">
                    <input class="form-check-input" type="checkbox" name="reserva-opt" id="email-cliente">
                    <label class="form-check-label fw-light" for="email-cliente">
                        Enviar email ao cliente
                    </label>
                </div>
        
            </div>

            <div class="form-check mt-4 me-3">
                <input class="form-check-input" type="checkbox" name="conferido" id="termos-e-condicoes">
                <label class="form-check-label fw-normal" for="termos-e-condicoes">
                    Concordo com os termos e condições. <a href="" class="text-decoration-none text-primary">Termos e condições</a>
                </label>
            </div>

            <button class="btn btn-primary fs-5 px-5 my-4 rounded-pill JS__reserva-next">Reservar</button>

        </div>
            
    </div>

    <div class="c-reserva-modal__box__confirmation JS__reserva-step2 position-relative fw-light ">

        <div class="c-reserva-modal__box__confirmation__header d-flex justify-content-between align-items-center pb-4 bg-white w-100">
            <div class="d-flex">
                <div class="c-reserva-modal__close JS__reservar-toggle cursor-pointer position-static me-5">
                    <span class="icon-close text-primary fs-28"></span>
                </div>

                <span class="fs-4 text-primary fw-light"><span class="fw-500">Reserva:</span> #35080</span>
            </div>

            <div class="d-flex ">
                <button class="btn btn-primary px-5 rounded-pill fw-500 me-3 JS__reservar-toggle">Adicionar mais itens</button>
                <button class="btn btn-primary px-5 rounded-pill fw-500 JS__reservar-toggle">Finalizar</button>
            </div>

        </div>

        <div class="c-reserva-modal__box__confirmation__container">
            <div class="c-reserva-modal__box__item">

                <div class="d-flex justify-content-between c-reserva-modal__box__item__content">
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
                                    <b>Center Hotel Rio</b><br>
                                    Rio de Janeiro<br>
                                    Doble Estándar BB<br>
                                    Júlio Cabral<br>
                                    02 Adultos<br>
                                    Cancelamento 15/01/2021
                                </td>
                                <td>1564AO</td>
                                <td>18/03/2021</td>
                                <td>21/03/2021</td>
                                <td>R$ 50,00</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="c-reserva-modal__box__item__total pt-5">
                        <span class="text-primary fw-normal"><span class="fw-500">Total:</span> R$ 150,00</span>
                    </div>

                    <div class="d-flex pt-5">
                        <a href="#astoria-copacabana-info"  class="border-0 me-3 bg-white text-decoration-none c-reserva-modal__box__confirmation_button collapsed" data-bs-toggle="collapse" data-bs-target="#reserva-item1" aria-expanded="false" aria-controls="info">
                            <span class="icon-privacy-policy fs-24 text-primary"></span>
                        </a>

                        <button class="border-0 bg-white c-reserva-modal__box__confirmation__button">
                            <span class="icon-trash fs-24 text-primary"></span>
                        </button>
                    </div>
                </div>
                
                <div class="multi-collapse collapse" id="reserva-item1">
                    <div class="row">
                        <div class="col pt-3">
                            <span class="text-primary fw-500 fs-24">Política e Privacidade</span>
                        </div>
                    </div>
                    <div class="row py-4"> 
                        <div class="col-xl-4 col-lg-6 fs-6 mb-4">
                            <p><b>Días normales</b></p>

                            <p>• Hasta 48 horas antes de la fecha de llegada del huésped - no habrá cargo.</p>

                            <p>• Menos de 48 horas antes de la fecha de llegada del huésped, se cobrará el mínimo de noches requeridas.</p>

                            <p><b>Vacaciones y paquetes</b></p>

                            <p>• Para feriados, el plazo para cancelación sin cargo es hasta 14 días antes de la llegada del huésped, cancelaciones posteriores a esa fecha, se cobrará el período completo del paquete.</p>
                        </div>
                        <div class="col-xl-3 col-lg-5 offset-lg-1 fs-6 mb-4">
                            <p><b>Dados</b></p>
                            Banco Santander<br>
                            Agencia: 3020<br>
                            Cuenta de cadena 13001461-5<br>
                            Vg brasil ativ.hoteleiras CNPJ (09.467.429 / 0001-68)<br>
                            Fecha límite hasta 2 días antes del checkin. El valor de cancelación es 100,00% del valor de la reserva.<br>
                            Todo incluido<br>
                            Refeições: Desayuno, Almuerzo, Cena<br>
                            Pago estándar
                        </div>
                    </div>
                </div>
            </div>
            <div class="c-reserva-modal__box__item">

                <div class="d-flex justify-content-between c-reserva-modal__box__item__content">
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
                                    Translado 35080-1-TR
                                </td>
                                <td>
                                    <b>Center Hotel Rio</b><br>
                                    Rio de Janeiro<br>
                                    Doble Estándar BB<br>
                                    Júlio Cabral<br>
                                    02 Adultos<br>
                                    Cancelamento 15/01/2021
                                </td>
                                <td>1564AO</td>
                                <td>18/03/2021</td>
                                <td>21/03/2021</td>
                                <td>R$ 85,00</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="pt-4 c-reserva-modal__box__item__total">
                        <span class="text-primary fw-normal"><span class="fw-500">Total:</span> R$ 85,00</span>
                    </div>

                    <div class="pt-4 d-flex">
                        <a href="#astoria-copacabana-info"  class="border-0 me-3 bg-white text-decoration-none c-reserva-modal__box__confirmation__button collapsed" data-bs-toggle="collapse" data-bs-target="#reserva-item2" aria-expanded="false" aria-controls="info">
                            <span class="icon-privacy-policy fs-24 text-primary"></span>
                        </a>

                        <button class="border-0 bg-white c-reserva-modal__box__confirmation__button">
                            <span class="icon-trash fs-24 text-primary"></span>
                        </button>
                    </div>
                </div>
                
                <div class="multi-collapse collapse" id="reserva-item2">
                    <div class="row">
                        <div class="col pt-3">
                            <span class="text-primary fw-500 fs-24">Política e Privacidade</span>
                        </div>
                    </div>
                    <div class="row py-4"> 
                        <div class="col-xl-4 col-lg-6 fs-6 mb-4">
                            <p><b>Días normales</b></p>

                            <p>• Hasta 48 horas antes de la fecha de llegada del huésped - no habrá cargo.</p>

                            <p>• Menos de 48 horas antes de la fecha de llegada del huésped, se cobrará el mínimo de noches requeridas.</p>

                            <p><b>Vacaciones y paquetes</b></p>

                            <p>• Para feriados, el plazo para cancelación sin cargo es hasta 14 días antes de la llegada del huésped, cancelaciones posteriores a esa fecha, se cobrará el período completo del paquete.</p>
                        </div>
                        <div class="col-xl-3 col-lg-5 offset-lg-1 fs-6 mb-4">
                            <p><b>Dados</b></p>
                            Banco Santander<br>
                            Agencia: 3020<br>
                            Cuenta de cadena 13001461-5<br>
                            Vg brasil ativ.hoteleiras CNPJ (09.467.429 / 0001-68)<br>
                            Fecha límite hasta 2 días antes del checkin. El valor de cancelación es 100,00% del valor de la reserva.<br>
                            Todo incluido<br>
                            Refeições: Desayuno, Almuerzo, Cena<br>
                            Pago estándar
                        </div>
                    </div>
                </div>

            </div>
            
            <span class="btn-link fs-6 fw-500 cursor-pointer btn-link JS__reservar-toggle border-bottom border-primary">Selecionar Outras Reservas</span>

        </div>

    </div>

</div>


    

</section>

