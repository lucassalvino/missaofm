<?php 
/**
 * Template Name: Programação
 *
 */
get_header();?>
<div class="d-flex justify-content-center align-items-center w-100">
    <div class="d-flex conteudo conteudo-wordpress">
        <div class="d-flex titulo">
            <h2><?php echo get_the_title();?></h2>
        </div>
        <?php the_content(); ?>
        <div class="d-flex flex-column pt-4">
            <details class="listagem-programacao">
                <summary>Domingo</summary>
                <ul>
                    <li><b>08:00:</b> Programa 1</li>
                    <li><b>09:00:</b> Programa 2</li>
                    <li><b>10:00:</b> Programa 3</li>
                </ul>
            </details>
            <details class="listagem-programacao">
                <summary>Segunda</summary>
                <ul>
                    <li><b>08:00:</b> Programa 1</li>
                    <li><b>09:00:</b> Programa 2</li>
                    <li><b>10:00:</b> Programa 3</li>
                </ul>
            </details>
            <details class="listagem-programacao">
                <summary>Terça</summary>
                <ul>
                    <li><b>08:00:</b> Programa 1</li>
                    <li><b>09:00:</b> Programa 2</li>
                    <li><b>10:00:</b> Programa 3</li>
                </ul>
            </details>
            <details class="listagem-programacao">
                <summary>Quarta</summary>
                <ul>
                    <li><b>08:00:</b> Programa 1</li>
                    <li><b>09:00:</b> Programa 2</li>
                    <li><b>10:00:</b> Programa 3</li>
                </ul>
            </details>
            <details class="listagem-programacao">
                <summary>Quinta</summary>
                <ul>
                    <li><b>08:00:</b> Programa 1</li>
                    <li><b>09:00:</b> Programa 2</li>
                    <li><b>10:00:</b> Programa 3</li>
                </ul>
            </details>
            <details class="listagem-programacao">
                <summary>Sexta</summary>
                <ul>
                    <li><b>08:00:</b> Programa 1</li>
                    <li><b>09:00:</b> Programa 2</li>
                    <li><b>10:00:</b> Programa 3</li>
                </ul>
            </details>
            <details class="listagem-programacao">
                <summary>Sábado</summary>
                <ul>
                    <li><b>08:00:</b> Programa 1</li>
                    <li><b>09:00:</b> Programa 2</li>
                    <li><b>10:00:</b> Programa 3</li>
                </ul>
            </details>
        </div>
        <div class="d-flex titulo mt-5">
            <h2>Nossos Programas</h2>
        </div>
        <div class="d-flex flex-column">
            <div class="d-flex container-programa">
                <div class="d-flex imagem-programa" style="background-image: url('<?php  echo bloginfo("template_url");?>/assets/imagens/programa1.png');">
                </div>
                <div class="d-flex flex-column dados-programa">
                    <h3>Programa 1</h3>
                    <p>Programa para iniciar seu dia com o pé direito</p>
                    <div class="d-flex flex-column mt-4 contato-programa">
                        <p><b>Fale com a gente:</b> (62) 9 9999-9999</p>
                        <p><b>Apresentador:</b> Integrante Equipe</p>
                    </div>
                </div>
            </div>
            <div class="d-flex container-programa">
                <div class="d-flex imagem-programa" style="background-image: url('<?php  echo bloginfo("template_url");?>/assets/imagens/program2.png');">
                </div>
                <div class="d-flex flex-column dados-programa">
                    <h3>Programa 2</h3>
                    <p>Programa aumentar o volume</p>
                    <div class="d-flex flex-column mt-4 contato-programa">
                        <p><b>Fale com a gente:</b> (62) 9 9999-9999</p>
                        <p><b>Apresentador:</b> Integrante Equipe</p>
                    </div>
                </div>
            </div>
            <div class="d-flex container-programa">
                <div class="d-flex imagem-programa" style="background-image: url('<?php  echo bloginfo("template_url");?>/assets/imagens/programa1.png');">
                </div>
                <div class="d-flex flex-column dados-programa">
                    <h3>Programa 3</h3>
                    <p>Programa aumentar o volume</p>
                    <div class="d-flex flex-column mt-4 contato-programa">
                        <p><b>Fale com a gente:</b> (62) 9 9999-9999</p>
                        <p><b>Apresentador:</b> Integrante Equipe</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    ativarMenu('#programacao');
</script>
<?php get_footer();?>