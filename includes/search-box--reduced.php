

<div class="o-search-box--reduced bg-white JS__search-box">

    <div class="o-search-box--reduced__form">

        

        <div class="d-flex">

            <div class="o-search-box--reduced__form__options d-flex align-items-center">
                <div class="o-search-box--reduced__form__options__icon d-inline">
                    a
                </div>
                <span class="icon-arrow-down text-primary fw-bold fs-5"></span>
            </div>

            <div class="o-search-box__form__item JS__item-input">
                <label for="itemInput" class="form-label">Qual é o item que você busca?</label>
                <input class="form-control" type="text" id="itemInput" placeholder="Rio de Janeiro - Leblon" aria-label="Busque por tics, tours, transfers">
            </div>
            <div class="o-search-box--reduced__form__destino">
                <label for="destinoInput" class="form-label">Qual é o destino?</label>
                <input type="text" id="destinoInput" placeholder="Rio de Janeiro - Leblon" aria-label="Busque por país, cidade, estado" class="o-search-box--reduced__form__input text-body">
            </div>
            <div class="o-search-box--reduced__form__hotel">
                <label for="hotelInput" class="form-label">Qual Hotel?</label>
                <input class="o-search-box--reduced__form__input text-body" id="hotelInput" type="text" placeholder="Copacabana Palace" aria-label="Qual hotel desejado (opcional)">
            </div>
            <div class="o-search-box--reduced__form__regime position-absolute JS__regime-input">
                <label for="hotelInput" class="form-label">Regime</label>
                <select class="form-select">
                    <option value="">Todas</option>
                    <option value="">Todas</option>
                    <option value="">Todas</option>
                    <option value="">Todas</option>
                    <option value="">Todas</option>
                    <option value="">Todas</option>
                </select>
            </div>
            <div class="o-search-box--reduced__form__passageiros">

                <div class="o-search-box__form__passageiros__input">
                    <label for="passageirosInput" class="form-label">Passageiros + Quarto/s</label>

                    <span class="o-search-box--reduced__form__input JS__passageiros-input" id="passageirosInput" aria-label="Passageiros + Quarto/s"  onclick="openPassageiros()">
                        <span class="JS__total-passageiros"></span> passageiros  • <span class="JS__total-quartos"></span> Quartos
                    </span>
                </div>

                <div class="o-search-box__form__passageiros__content position-absolute bg-white d-flex JS__passageiros-box d-flex justify-content-center">

                    <div class="d-flex align-items-center o-search-box__form__passageiros__content__item">
                        <div class="me-3">
                            <span class="fs-5 fw-500 d-block mb-0">Adultos</span>
                            <span class="text-primary fs-12">13 anos +</span>
                        </div>
                        <div class="input-number">
                            <input type="button" value="-" class="button-minus" data-field="quantity">
                            <input type="number" step="1" max="" value="0" name="quantity"  value="0" id="adultos-input" class="JS__search-box__quantity"/>
                            <input type="button" value="+" class="button-plus" data-field="quantity">
                        </div>

                    </div>

                    <div class="d-flex align-items-center o-search-box__form__passageiros__content__item">
                        <div class="me-3">
                            <span class="fs-5 fw-500 d-block mb-0">Crianças</span>
                            <span class="text-primary fs-12">02 a 13 anos</span>
                        </div>
                        <div class="input-number">
                            <input type="button" class="button-minus" data-field="quantity" value="-" >
                            <input type="number" step="1" max="" value="0" name="quantity"  value="0" id="criancas-input" class="JS__search-box__quantity"/>
                            <input type="button" class="button-plus" data-field="quantity" value="+" >
                        </div>
                    </div>

                    <div class="d-flex align-items-center o-search-box__form__passageiros__content__item">
                        <div class="me-3">
                            <span class="fs-5 fw-500 d-block mb-0">Bebês</span>
                            <span class="text-primary fs-12">Menor de 2</span>
                        </div>
                        <div class="input-number">
                            <input type="button" class="button-minus" data-field="quantity" value="-" >
                            <input type="number" step="1" max="" value="0" name="quantity"  value="0" id="adultos-input" placeholder="0" class="JS__search-box__quantity"/>
                            <input type="button" class="button-plus" data-field="quantity" value="+">
                        </div>
                    </div>

                    <div class="d-flex align-items-center o-search-box__form__passageiros__content__item">
                        <div class="me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29.723" height="24.266"><g data-name="Icon | Quartos" transform="translate(.75 .75)" fill="none" stroke="#868686" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><rect data-name="Retângulo 30" width="28.223" height="8.388" rx="2.207" transform="translate(0 11.971)"/><path data-name="Linha 19" d="M2.054 20.359v2.407"/><path data-name="Linha 20" d="M26.235 20.359v2.407"/><g data-name="Grupo 94"><path data-name="Caminho 32" d="M2.665 11.751s0-4.893 3.845-4.893h4.368s3.233 0 3.233 4.893"/><path data-name="Caminho 33" d="M14.111 11.751s0-4.893 3.844-4.893h4.369s3.233.11 3.233 4.893"/></g><path data-name="Caminho 34" d="M2.054 11.967v-7.8A4.36 4.36 0 016.581-.005h15.127a4.36 4.36 0 014.527 4.172v7.8z"/></g></svg>
                        </div>
                        <div class="me-3">
                            <span class="fs-5 fw-500 d-block mb-0">Quartos</span>
                            <span class="text-primary fs-12">13 anos +</span>
                        </div>
                        <div class="input-number">
                            <input type="button" class="button-minus" data-field="quantity" value="-" >
                            <input type="number" step="1" max="" value="0" name="quantity"  value="0" id="quartos-input" class="JS__search-box__rooms"/>
                            <input type="button" class="button-plus" data-field="quantity" value="+" >
                        </div>
                    </div>

                </div>

            </div>
            <div class="o-search-box--reduced__form__checkin">

                <label for="datefilter" class="form-label">Check-In</label>
                <input class="o-search-box--reduced__form__input bg-transparent input-date" type="text" id="datepicker" placeholder="12 de Fevereiro">
                </label>

            </div>
            <div class="o-search-box--reduced__form__checkout">

                <label for="datefilter" class="form-label">Check-Out</label>
                <input class="o-search-box--reduced__form__input bg-transparent input-date" type="text" id="datepicker" placeholder="12 de Fevereiro">

            </div>
            <div class="o-search-box--reduced__form__submit">
                <button type="submit" class="btn btn-primary position-relative">
                    <span class="d-block position-relative icon-search"></span>
                </button>
            </div>
            
        </div>

    </div>
    
</div>
 
<div class="d-flex justify-content-between o-search-box--reduced__radios position-absolute bg-white">

    <span class="o-search-box__title">Encontre o destino ideal</span>

    <div class="d-flex justify-content-between o-search-box__radios">
        <div class="form-check">
            <input class="form-check-input" type="radio" name="search-opt" id="search-hotel" value="1" onclick="searchBox.handleClick(this);" checked>
            <label class="form-check-label d-flex align-items-center" for="search-hotel">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"><g data-name="Icon | Hotel"><path data-name="Caminho 5" d="M18.204 22h-.6c-.054-.017-.107-.036-.162-.051a1.926 1.926 0 01-1.414-1.366 2.02 2.02 0 01.027-1.15H5.965a.114.114 0 00-.006.03c.007.034.014.069.022.1a1.855 1.855 0 01-.664 2 4.5 4.5 0 01-.916.441h-.6a.763.763 0 00-.1-.04 1.877 1.877 0 01-1.511-1.581 5.58 5.58 0 01-.009-.966h-1.5a.634.634 0 01-.676-.67v-2.535a.633.633 0 01.663-.661h.631v-.282c0-2.57-.006-5.141.006-7.711a7.18 7.18 0 01.132-1.34 6.248 6.248 0 015.39-4.9.347.347 0 00.232-.166A1.929 1.929 0 018.894-.006h4.2a1.932 1.932 0 011.852 1.164.359.359 0 00.214.161c.43.1.878.154 1.3.292a6.214 6.214 0 014.248 5.885v8.055h.615a.632.632 0 01.679.666v2.535a.633.633 0 01-.68.665h-1.38c-.06 0-.119.01-.186.015a1.887 1.887 0 01-.616 2.107 4.544 4.544 0 01-.936.461zM4.746 15.544v-.261-6.037a1.494 1.494 0 011.516-1.512h1.932V6.647a1.488 1.488 0 011.488-1.491c.611 0 1.224.034 1.833-.007 1.779-.119 2.417.53 2.287 2.274-.007.1 0 .2 0 .285a.3.3 0 00.063.022h1.833a1.491 1.491 0 011.554 1.556V15.537h2.151c0-.055.006-.1.006-.139 0-2.635.009-5.271-.009-7.906a4.613 4.613 0 00-.2-1.329 4.873 4.873 0 00-4.057-3.539c-.135-.025-.182.032-.239.141a1.875 1.875 0 01-1.761 1.1q-2.167.011-4.335 0a1.869 1.869 0 01-1.629-.923c-.222-.344-.214-.35-.624-.259a4.946 4.946 0 00-3.968 4.918v7.944zM1.301 18.12h19.387v-1.258H1.301zm7.337-2.58h4.718v-3.927H8.638zM7.324 9.023h-.912c-.32 0-.377.056-.377.371v6.143H7.32zm7.352 6.52h1.284v-.179-4.935c0-.372.012-.745-.008-1.115-.005-.1-.106-.266-.172-.27-.368-.027-.738-.013-1.1-.013zm-3.688-12.96h2.113a.665.665 0 00.7-.636.663.663 0 00-.708-.649H8.911a.9.9 0 00-.425.118.589.589 0 00-.254.689.642.642 0 00.642.473c.705.005 1.41.005 2.114.005zm2.38 6.458H8.643v1.26h4.725zm-.856-1.314V6.698a.232.232 0 00-.259-.251h-2.5c-.141 0-.248.069-.253.21-.011.355 0 .71 0 1.072zM4.745 20.074a.668.668 0 00-.643-.652.668.668 0 00-.648.624.669.669 0 00.632.662.668.668 0 00.659-.634zm13.16.635a.667.667 0 00.643-.65.669.669 0 00-.658-.635.663.663 0 00-.632.638.668.668 0 00.646.648z" fill="#676767"/></g></svg> Hotel
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="search-opt" id="search-translado" value="2"  onclick="searchBox.handleClick(this);">
            <label class="form-check-label d-flex align-items-center" for="search-translado" value="translado">
                <svg xmlns="http://www.w3.org/2000/svg" width="21.646" height="21.488"><g data-name="Icon | Translado" fill="none" stroke="#676767" stroke-width="1.5"><g data-name="Retângulo 22" transform="translate(2.678)" stroke-linecap="round" stroke-linejoin="round"><rect width="16.292" height="19.154" rx="4" stroke="none"/><rect x=".75" y=".75" width="14.792" height="17.654" rx="3.25"/></g><path data-name="Caminho 7" d="M.75 9.001V5.019h20.146v3.982" stroke-linecap="round" stroke-linejoin="round"/><path data-name="Linha 3" stroke-linecap="round" d="M3.633 11.084h14.379"/><path data-name="Linha 4" stroke-linecap="round" d="M5.289 15.063h2.55"/><path data-name="Linha 5" stroke-linecap="round" d="M13.809 15.063h2.55"/><path data-name="Caminho 17" d="M7.872 17.781v1.882a1.062 1.062 0 01-1.049 1.075H5.055a1.062 1.062 0 01-1.049-1.075v-2.846" stroke-miterlimit="10"/><path data-name="Caminho 18" d="M13.602 17.781v1.882a1.062 1.062 0 001.049 1.075h1.768a1.062 1.062 0 001.049-1.075v-2.658" stroke-miterlimit="10"/></g></svg>
                Translado
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="search-opt" id="search-tour" value="3"  onclick="searchBox.handleClick(this);">
            <label class="form-check-label d-flex align-items-center" for="search-tour">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25.065"><g data-name="Grupo 1109"><g data-name="Retângulo 22" transform="translate(0 5.072)" fill="none" stroke="#676767" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><rect width="20" height="18.124" rx="4" stroke="none"/><rect x=".75" y=".75" width="18.5" height="16.624" rx="3.25"/></g><path data-name="Caminho 12" d="M6.766 8.708h6.546" fill="none" stroke="#676767" stroke-linecap="round" stroke-width="1.5"/><g data-name="Grupo 47" fill="none" stroke="#676767" stroke-linecap="round" stroke-width="2"><path data-name="Linha 14" d="M5.055 24.065V22.67"/><path data-name="Linha 15" d="M14.234 24.065V22.67"/></g><g data-name="Grupo 48" fill="none" stroke="#676767" stroke-linecap="round" stroke-width="1.5"><path data-name="Linha 4" d="M5.258 18.456v-6.534"/><path data-name="Linha 12" d="M10.01 18.456v-6.534"/><path data-name="Linha 13" d="M14.762 18.456v-6.534"/></g><path data-name="Caminho 11" d="M5.938 5.076V4.004a2.5 2.5 0 012.5-2.5h3.764a2.5 2.5 0 012.5 2.5v1.072h1.5V4.004a4 4 0 00-4-4H8.438a4 4 0 00-4 4v1.072z" fill="#676767"/></g></svg>
                Tour
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="search-opt" id="search-pacotes" value="4" onclick="searchBox.handleClick(this);">
            <label class="form-check-label d-flex align-items-center" for="search-pacotes">
                <svg xmlns="http://www.w3.org/2000/svg" width="25.923" height="22.322"><g data-name="Grupo 1110" fill="none" stroke="#676767" stroke-miterlimit="10" stroke-width="1.5"><path data-name="Linha 216" d="M7.488 4.68v16.891"/><g data-name="Grupo 1108" transform="translate(-760.457 -62.75)"><rect data-name="Retângulo 399" width="24.423" height="16.891" rx="3.52" transform="translate(761.207 67.43)"/><path data-name="Caminho 283" d="M775.612 63.5h-4.666a1.921 1.921 0 00-1.816 1.032l-1.185 2.9h10.668l-1.186-2.9a1.919 1.919 0 00-1.815-1.032z"/><path data-name="Linha 217" d="M778.613 67.43v8.071"/><path data-name="Linha 218" d="M778.613 79.711v4.61"/><rect data-name="Retângulo 400" width="6.808" height="4.211" rx="1.244" transform="translate(775.314 75.5)"/></g></g></svg>
                Pacotes
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="search-opt" id="search-extras" value="5" onclick="searchBox.handleClick(this);">
            <label class="form-check-label d-flex align-items-center" for="search-extras">
                <span class="icon-extra"></span> Extras
            </label>
        </div>
    </div>

</div>  

<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
<script>
    flatpickr("#datepicker", {
        mode: "range",
        showMonths: 3,
        locale: 'pt',
        dateFormat: 'd/m/Y'
    });
</script>