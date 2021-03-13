<?php get_header();?>
<div class="d-flex justify-content-center align-items-center w-100">
    <div class="d-flex conteudo conteudo-wordpress">
        <div class="d-flex titulo">
            <h2>Essa página não existe</h2>
        </div>
        <div class="d-flex">
            <p>Navegue pelas nossas páginas principais</p>
        </div>
        <div class="d-flex">
            <div class="d-flex menu-opcao" id="home">
                <a href="<?php echo get_home_url();?>">
                    HOME
                </a>
            </div>
            <div class="d-flex menu-opcao" id="sobre">
                <a href="<?php echo get_home_url();?>/sobre">
                    SOBRE
                </a>
            </div>
            <div class="d-flex menu-opcao" id="programacao">
                <a href="<?php echo get_home_url();?>/programacao">
                    PROGRAMAÇÃO
                </a>
            </div>
        </div>

        <div class="d-flex mt-4">
            <img id="error-404" src="<?php  echo bloginfo("template_url");?>/assets/imagens/404-error.gif" alt="404">
        </div>
    </div>
</div>
<?php get_footer();?>