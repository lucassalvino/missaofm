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
                        <a href="#" class="button-missao">
                            OUÇA TODOS OS EPISÓDIOS
                        </a>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <div class="d-flex mt-3">
                        <iframe class="iframe-sound" id="<?php echo bin2hex(random_bytes(10));?>" width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/251152470&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"></div>
                    </div>
                    <div class="d-flex mt-3">
                        <iframe class="iframe-sound" id="<?php echo bin2hex(random_bytes(10));?>" width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/251152470&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"></div>
                    </div>
                    <div class="d-flex mt-3">
                        <iframe class="iframe-sound" id="<?php echo bin2hex(random_bytes(10));?>" width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/251152470&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"></div>
                    </div>
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
    <div class="d-flex justify-content-center align-items-center flex-column w-100 mt-5 pb-5">
        <div id="carouseleventos" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-eventos" style="background-image: url(<?php echo bloginfo("template_url");?>/assets/imagens/ideia1.jpg);">
                        <div class="conteudo-carousel-eventos">
                            <a href="#">
                                <div class="d-flex justify-content-center align-items-center w-100 h-100 flex-column">
                                    <h2>Entrevista com Fulano</h2>
                                    <span class="mt-3">Continue lendo</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
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
            <a href="#" class="button-missao">
                VEJA TODOS OS EVENTOS
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