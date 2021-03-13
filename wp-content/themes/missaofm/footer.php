<section id="sessao-contato" class="mb-5 mt-5">
    <div class="d-flex flex-column contato-form">
        <form action="#" class="d-flex w-100 flex-column">
            <div class="d-flex justify-content-center align-items-center">
                <div class="d-flex">
                    <h3 class="titulo-contato">Contato</h3>
                </div>
            </div>
            <div class="d-flex flex-column justify-content-start align-items-start w-100">
                <div class="d-flex justify-content-between w-100 mt-4 container-dois">
                    <div class="d-flex container-input">
                        <div class="d-flex flex-column">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" placeholder="Nome" required>
                        </div>
                    </div>
                    <div class="d-flex container-input">
                        <div class="d-flex flex-column">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Email" required>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-start w-100 mt-4">
                    <div class="d-flex container-input">
                        <div class="d-flex flex-column">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="telefone" name="telefone" id="telefone" placeholder="Telefone" required>
                        </div>
                    </div>
                </div>
                <div class="d-flex w-100 mt-4">
                    <div class="d-flex flex-column w-100">
                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagem" id="mensagem" rows="5" placeholder="Escreva sua mensagem aqui" required></textarea>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <div class="d-flex">
                    <button id="btnenviarcontato">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</section>

        </div>
        <footer>
            <div class="d-flex rodape-fundo">
                <div class="d-flex justify-content-center flex-column">
                    <div class="d-flex">
                        <h5 class="titulos_rodape">Links</h5>
                    </div>
                    <div class="d-flex">
                        <a href="<?php echo get_home_url();?>/politica-de-privacidade">Política de Privacidade</a>
                    </div>
                    <div class="d-flex">
                        <a href="<?php echo get_home_url();?>">Home</a>
                    </div>
                    <div class="d-flex">
                        <a href="<?php echo get_home_url();?>/sobre">Sobre</a>
                    </div>
                    <div class="d-flex">
                        <a href="<?php echo get_home_url();?>/programacao">Programação</a>
                    </div>
                    <div class="d-flex">
                        <a href="#sessao-contato">Contato</a>
                    </div>
                </div>
                <div class="d-flex justify-content-center flex-column">
                    <div class="d-flex pb-3">
                        <h5 class="titulos_rodape">Contados</h5>
                    </div>
                    <div class="d-flex pb-1">
                        <a href="#">(62) 99999-9999</a>
                    </div>
                    <div class="d-flex pb-1">
                        <a href="#">teste@teste.com.br</a>
                    </div>
                    <div class="d-flex">
                        <a href="#">@missao_fm</a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>