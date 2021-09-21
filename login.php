<?php include('includes/header--white.php'); ?>

    <main class="c-page">
       <div class="container-fluid p-0 d-flex">
            <div class="c-page__img" style="background-image: url('assets/img/login-banner.jpg');"></div>

            <div class="w-100 d-flex c-page__container">

                <div class="container">

                    <div class="row d-flex justify-content-end">

                        <div class="col-lg-6">

                            <div class="row">
                                <div class="col-xxl-6">

                                    <h1 class="d-inline-block fs-5 text-primary p-2 px-0 mb-0">Bem-Vindo</h1>
                                    <h2 class="mb-4 fs-1 fw-bold text-secondary">Faça seu login para continuar</h2>

                                    <form class="row">
                                        <p class="mb-5 fs-4 text-black-50">Digite seu email cadastrado e sua senha para explorar novos caminhos Journeys</p>

                                        
                                        <label class="fs-12 text-danger mb-5">Usuário ou senha incorretos.</label>

                                        <div class="mb-5">
                                            <label for="exampleFormControlInput1" class="mb-2 d-block">Email</label>
                                            <input type="email" class="login-input w-100 fs-6" id="email" placeholder="name@example.com">
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleFormControlInput1" class="mb-2 d-block">Senha</label>
                                            <input type="password" id="password" class="login-input w-100 fs-6" placeholder="Senha: 8+ caracteres">
                                        </div>
                                        
                                        <div class="mb-5">
                                            <span class="text-decoration-none cursor-pointer text-primary fw-b fs-6 d-block fw-500" data-bs-toggle="modal" data-bs-target="#lostpassword">Esqueceu sua senha?</span>
                                        </div>
                                  
                                        <div class="mb-5 pt-2">
                                            <button type="submit" class="btn btn-primary rounded-pill px-5 fw-500">Entrar</button>
                                        </div>


                                        <div class="pt-3">
                                            <span class="fs-6 d-block text-gray-100">Ao acessar sua conta você concorda com todos os <a href="" class="d-block text-decoration-none fw-b">Termos de Politica e Privacidade & Cookies.</a></span>
                                        </div>
                                    </form>

                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="lostpassword" tabindex="-1" aria-labelledby="lostpassword" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h5 class="modal-title text-primary fs-24 fw-bold">Recuperação de senha</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body">

                                                    <div class="sucesso-hide">
                                                        <p>Informe abaixo seu email cadastrado no sistema e enviaremos um email com instruções para acessar novamente sua conta.</p>
                                                            
                                                        <form class="mt-4">
                                                            <label for="destinoInput" class="form-label">E-mail</label>
                                                            <input class="form-control" type="text" id="destinoInput" placeholder="name@example.com" aria-label="Busque por país, cidade, estado">

                                                            <div id="mensagem-erro" style="display: none;">
                                                                <label class="fs-12 text-danger mt-3">Esse email não está associado a nenhum usuário. Se você acha que isso é um erro, por favor, entre em contato com seu executivo de contas.</label>
                                                            </div>

                                                            <button class="btn btn-primary px-5 mt-4 rounded-pill">Enviar</button>
                                                        </form>
                                                    </div>
                                                    
                                                    <!-- 
                                                        Em caso de sucesso, exibir:  
                                                    -->

                                                    <div id="mensagem-sucesso" style="display: none;">
                                                        <p>Email de recuperação enviado com sucesso! Siga as instruções no email para recuperar acesso a sua conta.</p>
                                                        <button class="btn btn-primary px-5 mt-3 rounded-pill fw-500" data-bs-dismiss="modal">Voltar</button>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            
                        </div>
                    </div>

                </div>

            </div>
       </div>

    </main>

<?php include('includes/footer.php'); ?>