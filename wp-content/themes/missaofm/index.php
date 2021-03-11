<?php
/**
 * Template Name: Home
 *
 */
get_header();
?>

<section id="sessao-banner" class="d-flex justify-content-center w-100">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex banner-home" style="background-image: url('<?php  echo bloginfo("template_url");?>/assets/imagens/slideteste.jpg');">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="d-flex justify-content-center align-items-center w-100 mt-5">
    <div class="d-flex conteudo conteudo-wordpress">
        <div class="d-flex titulo">
            <h2>Programas Memoráveis</h2>
        </div>
        <div class="d-flex flex-column w-100 programa-memoravel">
            <div class="d-flex">
                <h3>Entrevista com fulano</h3>
            </div>
            <div class="d-flex">
                <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/251152470&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"></div>
            </div>
        </div>
        <div class="d-flex flex-column w-100 programa-memoravel">
            <div class="d-flex">
                <h3>Entrevista com fulano</h3>
            </div>
            <div class="d-flex">
                <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/251152470&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"></div>
            </div>
        </div>
        <div class="d-flex flex-column w-100 programa-memoravel">
            <div class="d-flex">
                <h3>Entrevista com fulano</h3>
            </div>
            <div class="d-flex">
                <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/251152470&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"></div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center align-items-center w-100" style="padding-bottom: 30px;">
    <a class="link-propaganda" href="#">
        <div class="d-flex banner-propaganda" style="background-image: url('<?php echo bloginfo("template_url");?>/assets/imagens/coca-cola.jpg');">
        </div>
    </a>
</div>

<?php 
get_footer();
?>