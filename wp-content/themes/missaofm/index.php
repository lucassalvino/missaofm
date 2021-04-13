<?php
/**
 * Template Name: Home
 *
 */
get_header();
?>

<div class="fundo-defalt-banner" style="background-image: url(<?php echo get_field('banner_principal');?>);">
    <section id="home-play">
        <div class="d-flex justify-content-start conteudo" id="conteudo-sobre-div">
            <div class="d-flex flex-column">
                <div class="d-flex">
                    <h3>
                        <span class="texto-destaque">OUÇA AO VIVO!</span>
                    </h3>
                </div>
                <div class="d-flex justify-content-start align-items-center container-player">
                    <div class='d-flex containerpausestart'>
                        <img src="<?php  echo bloginfo("template_url");?>/assets/imagens/play-icon.svg" alt="Play rádio" title="Escutar rádio ao vivo" id="play">
                        <img src="<?php  echo bloginfo("template_url");?>/assets/imagens/pause-icon.svg" alt="Pause rádio" title="Pausar rádio" id="pause" style="display: none;">
                    </div>
                    <div class="d-flex">
                        <span class="aovivotag">AO VIVO</span>
                    </div>
                </div>
                <div class="d-flex justify-content-start align-items-center mt-5">
                    <span class="pecamusica">Peça sua música vua WhatsApp</span>
                </div>
                <div class="d-flex justify-content-start align-items-center">
                    <span class="numerowhatsapp">62 9 9677-0058</span>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="fundo-padrao w-100" id="podcasts">
    <div class="d-flex justify-content-center align-items-center pt-2">
        <div class="d-flex justify-content-center align-items-center conteudo conteudo-wordpress">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column conteudo-titulo-podcast">
                    <div class="d-flex justify-content-center titulo mt-3">
                        <h2>PODCASTS</h2>
                    </div>
                    <div class="d-flex">
                        <a href="<?php echo get_home_url();?>/podcasts" class="button-missao">
                            OUÇA TODOS OS EPISÓDIOS
                        </a>
                    </div>
                </div>
                <?php
                    $podcast = CustomCustomQuery(
                        array(
                            'post_type' => 'post_podcast',
                            'post_status'=>'publish',
                            'posts_per_page' => 3
                        ),
                        function(){
                            return array(
                                'id' => get_the_ID(),
                                'incorpora' => get_field('codigo_incorporacao')
                            );
                        }
                    );
                    wp_reset_postdata();
                    wp_reset_query();
                    $n = count($podcast);
                    GetTrackFromIncorporado($podcast[0]['incorpora']);
                ?>
                <div class="d-flex flex-column">
                    <?php for($k = 0; $k<$n; $k++):?>
                        <div class="d-flex mt-3" data-aos="zoom-in" data-aos-duration="500">
                            <?php IframeSoundCloud(GetTrackFromIncorporado($podcast[$k]['incorpora']));?>
                        </div>
                    <?php endfor;?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="fundo-padrao background-sobre pt-4" id="sobre" style="background-image: url(<?php echo get_field('banner_sobre');?>);">
    <div class="d-flex justify-content-center align-items-center flex-column pt-5 pb-5">
        <div class="d-flex" style="max-width: 900px;">
            <p class="text-center">
                A Rádio Missão traz música de qualidade, cultura e entretenimento para um público qualificado, exigente e de extremo bom gosto. Voltada para o segmento Adulto Contemporâneo e ouvida por formadores de opinião que priorizam e exigem qualidade.
            </p>
        </div>
        <div class="d-flex mt-5 mb-4">
            <a href="<?php echo get_home_url();?>/sobre" class="button-missao button-missao-sobre">
                SAIBA MAIS
            </a>
        </div>
    </div>
</section>

<section class="fundo-padrao pt-5" id="eventos">
    <div class="d-flex justify-content-center titulo mt-3">
        <h1>PRÓXIMOS EVENTOS</h1>
    </div>

<?php
$eventos = CustomCustomQuery(
    array(
        'post_type' => 'post_evento',
        'post_status'=>'publish',
        'posts_per_page' => 3
    ),
    function(){
        return array(
            'id' => get_the_ID(),
            'titulo' => get_the_title(),
            'thumbnail' => get_the_post_thumbnail_url(),
            'link' => get_post_permalink()
        );
    }
);
wp_reset_postdata();
wp_reset_query();
$n = count($eventos);
?>

    <div class="d-flex justify-content-center align-items-center flex-column w-100 mt-5 pb-5" >
        <div id="carouseleventos" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" data-aos="fade-up" data-aos-duration="1000">
                <?php for($i = 0; $i<$n; $i++): ?>
                    <div class="carousel-item <?php echo $i==0?'active':''; ?>">
                        <div class="carousel-eventos" style="background-image: url(<?php echo $eventos[$i]['thumbnail'];?>);">
                            <div class="conteudo-carousel-eventos">
                                <a href="<?php echo $eventos[$i]['link'];?>">
                                    <div class="d-flex justify-content-center align-items-center w-100 h-100 flex-column">
                                        <h2><?php echo $eventos[$i]['titulo']?></h2>
                                        <span class="mt-3">Continue lendo</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <a class="carousel-control-prev" href="#carouseleventos" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouseleventos" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
        <div class="d-flex mt-5">
            <a href="<?php echo get_home_url();?>/eventos" class="button-missao">
                VEJA TODOS OS EVENTOS
            </a>
        </div>
    </div>
</section>



<section class="fundo-padrao background-sobre  background-programaca bg-move" id="sobre" style="background-image: url(<?php echo get_field('banner_programacao');?>);">
    <div class="d-flex justify-content-center align-items-center flex-column pt-5 pb-5 fundo-preto-transparente min-hei-programaca">
        <div class="d-flex justify-content-center titulo mt-3">
            <h1>PROGRAMAÇÃO</h1>
        </div>
        <div class="d-flex" style="max-width: 900px;">
            <p class="text-center">
                O melhor da MPB, smooth jazz, baladas nacionais e internacionais, R&B, blues e bossa nova mesclando nomes consagrados e os novos talentos da música mundial, brasileira e goiana.
            </p>
        </div>
        <div class="d-flex mt-5 mb-4">
            <a href="<?php echo get_home_url();?>/programacao" class="button-missao button-missao-sobre pl-2 pr-2">
                CONFIRA NOSSA PROGRAMAÇÃO
            </a>
        </div>
    </div>
</section>

<script>
    ativarMenu('#home');
</script>
<?php 
get_footer();
?>