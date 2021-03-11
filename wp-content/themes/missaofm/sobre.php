<?php 
/**
 * Template Name: Sobre
 *
 */
get_header();?>
<div class="d-flex justify-content-center align-items-center w-100">
    <div class="d-flex conteudo conteudo-wordpress">
        <div class="d-flex titulo">
            <h2><?php echo get_the_title();?></h2>
        </div>
        <?php the_content(); ?>
        <div class="d-flex pt-5">
            <div class="d-flex titulo">
                <h2>Nossa Equipe</h2>
            </div>
        </div>
        <div class="d-flex w-100 flex-column">
            <div class="d-flex container-membro-equipe">
                <div class="d-flex imagem-membro-equipe" style="background-image: url('<?php  echo bloginfo("template_url");?>/assets/imagens/imagem.jpg');">
                </div>
                <div class="d-flex flex-column dados-integrante">
                    <h3>Nome do integrante</h3>
                    <p>Esse integrante é responsavel por fazer a mixagem do áudio</p>
                </div>
            </div>
            <div class="d-flex container-membro-equipe">
                <div class="d-flex imagem-membro-equipe" style="background-image: url('<?php  echo bloginfo("template_url");?>/assets/imagens/imagem.jpg');">
                </div>
                <div class="d-flex flex-column dados-integrante">
                    <h3>Nome do integrante</h3>
                    <p>Esse integrante é responsavel por fazer a mixagem do áudio</p>
                </div>
            </div>
            <div class="d-flex container-membro-equipe">
                <div class="d-flex imagem-membro-equipe" style="background-image: url('<?php  echo bloginfo("template_url");?>/assets/imagens/imagem.jpg');">
                </div>
                <div class="d-flex flex-column dados-integrante">
                    <h3>Nome do integrante</h3>
                    <p>Esse integrante é responsavel por fazer a mixagem do áudio</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>