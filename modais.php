<?php include('includes/header--white.php'); ?>

    <main class="c-404">
       <div class="container">

            <div class="col py-5">

                <!-- 404 -->
                <div class="mb-4">
                    <button type="button" class="btn btn-primary px-5 rounded-pill fw-500" data-bs-toggle="modal" data-bs-target="#modal404">Erro 404</button>

                    <!-- Modal -->
                    <div class="modal fade" id="modal404" tabindex="-1" aria-labelledby="modal404" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title text-primary fs-24 fw-bold" id="exampleModalLabel">Erro 404</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p>Humm… algo está errado! Tente novamente mais tarde.</p>
                                    <button class="btn btn-primary px-5 mt-3 rounded-pill fw-500" data-bs-dismiss="modal">Voltar</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <!-- 505 -->
                <div class="mb-4">
                    <button type="button" class="btn btn-primary px-5 rounded-pill fw-500" data-bs-toggle="modal" data-bs-target="#modal505">Erro 505</button>

                    <!-- Modal -->
                    <div class="modal fade" id="modal505" tabindex="-1" aria-labelledby="modal505" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title text-primary fs-24 fw-bold" id="exampleModalLabel">Erro 505</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p>Humm… algo está errado! Tente novamente mais tarde.</p>
                                    <button class="btn btn-primary px-5 mt-3 rounded-pill fw-500" data-bs-dismiss="modal">Voltar</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                
                <!-- Redefinir senha -->
                <div class="mb-4">
                    <button type="button" class="btn btn-primary px-5 rounded-pill fw-500" data-bs-toggle="modal" data-bs-target="#resetpassword1">Redefinir senha 01</button>

                    <!-- Modal -->
                    <div class="modal fade" id="resetpassword1" tabindex="-1" aria-labelledby="modal505" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title text-primary fs-24 fw-bold" id="exampleModalLabel">Redefinição de senha necessária</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">

                                    <div>
                                        <p>Enviaremos um e-mail com uma senha temporária para acessar sua conta. Deseja redefinir sua senha?</p>

                                        <div class="d-flex mt-5">
                                            <button class="btn btn-primary px-5 mb-4 rounded-pill fw-500 me-3 w-100">Redefinir Senha</button>
                                            <button class="btn btn-primary px-5 mb-4 rounded-pill fw-500 w-100" data-bs-dismiss="modal">Cancelar</button>
                                        </div>
                                    </div>

                                    <div id="mensagem-sucesso" style="display: none;">
                                        <p>Senha redefinida com sucesso! Siga as instruções no email para recuperar acesso a sua conta.</p>
                                        <button class="btn btn-primary px-5 mt-4 rounded-pill fw-500" data-bs-dismiss="modal">Voltar</button>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <button type="button" class="btn btn-primary px-5 rounded-pill fw-500" data-bs-toggle="modal" data-bs-target="#resetpassword2">Redefinir senha 02</button>

                    <!-- Modal -->
                    <div class="modal fade" id="resetpassword2" tabindex="-1" aria-labelledby="modal505" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title text-primary fs-24 fw-bold" id="exampleModalLabel">Redefinição de senha necessária</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p>Sua senha atual é temporária. Para continuar acessando o sistema, por favor, redefina sua senha no formulário abaixo.</p>
                                        
                                    <form class="mt-4">
                                        <div class="mb-3">
                                            <label for="destinoInput" class="form-label">Nova senha</label>
                                            <input class="form-control" type="password" id="destinoInput">
                                        </div>
                                        <div>
                                            <label for="destinoInput" class="form-label">Confirmação de senha</label>
                                            <input class="form-control" type="password" id="destinoInput">
                                        </div>

                                        <p class="fs-12 text-danger mt-3">As senhas não coincidem.</p>

                                        <button type="submit" class="btn btn-primary px-5 mt-4 rounded-pill JS__reserva-next" data-bs-dismiss="modal" aria-label="Close">Redefinir senha</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Sessão Expirada -->
                <div class="mb-4">
                    <button type="button" class="btn btn-primary px-5 rounded-pill fw-500" data-bs-toggle="modal" data-bs-target="#sessao-expirada">Sessão expirada</button>

                    <!-- Modal -->
                    <div class="modal fade" id="sessao-expirada" tabindex="-1" aria-labelledby="modal505" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title text-primary fs-24 fw-bold" id="exampleModalLabel">Você foi desconectado</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p>Sua sessão expirou. Faça login novamente para continuar utilizando o sistema.</p>
                                    <a href="login.php" class="btn btn-primary px-5 mt-3 rounded-pill fw-500">Fazer login</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                
                <!-- Busca Expirada -->
                <div class="mb-4">
                    <button type="button" class="btn btn-primary px-5 rounded-pill fw-500" data-bs-toggle="modal" data-bs-target="#busca-expirada">Busca expirada</button>

                    <!-- Modal -->
                    <div class="modal fade" id="busca-expirada" tabindex="-1" aria-labelledby="modal505" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title text-primary fs-24 fw-bold" id="exampleModalLabel">Sua busca expirou</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p>Renove sua pesquisa para continuar sua busca.</p>
                                    <a href="/" class="btn btn-primary px-5 mt-3 rounded-pill fw-500">Voltar para home</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                
                <!-- Erro reserva -->
                <div class="mb-4">
                    <button type="button" class="btn btn-primary px-5 rounded-pill fw-500" data-bs-toggle="modal" data-bs-target="#erro-reserva">Erro ao reservar</button>

                    <!-- Modal -->
                    <div class="modal fade" id="erro-reserva" tabindex="-1" aria-labelledby="modal505" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title text-primary fs-24 fw-bold" id="exampleModalLabel">Ops! Algo deu errado.</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="modal-body">
                                    <p>Ocorreu um problema ao realizar sua reserva. Por favor, tente novamente mais tarde ou entre em <a href="sap.php">contato</a> com nosso atendimento.</p>
                                    <button type="submit" class="btn btn-primary px-5 mt-4 rounded-pill JS__reserva-next" data-bs-dismiss="modal" aria-label="Close">Ok</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            

            </div>

       </div>

    </main>

<?php include('includes/footer.php'); ?>
    
<script src="assets/js/pages/page.js"></script>


