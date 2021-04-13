<?php
get_header();
?>

<div class="d-flex justify-content-center align-items-center conteudo-leitura-branco w-100">
    <div class="inner-conteudo">
        <div class="d-flex flex-column w-100">
            <div class="container-titulo">
                <div class="d-flex">
                    <h1><?php echo get_the_title();?></h1>
                </div>
            </div>
            <div class="d-flex">
                <span class="detalhes-post">Por <?php echo get_the_author();?> • <?php echo get_the_date();?></span>
            </div>
            <div class="d-flex flex-column w-100 mt-3">
                <div class="d-flex justify-content-center align-items-center w-100">
                    <img class="thumbnail-post-view" src="<?php echo get_the_post_thumbnail_url()?>" alt="<?php echo get_the_title();?>">
                </div>
                <div class="d-flex flex-column w-100 mt-3 conteudo-post">
                    <?php 
                        the_content()
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$idexcluir = get_the_ID();
$eventos = CustomCustomQuery(
    array(
        'post_type' => 'post_evento',
        'post_status'=>'publish',
        'posts_per_page' => 3,
        'post__not_in' => array($idexcluir)
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
$n = count($eventos);
?>

<div class="d-flex justify-content-center align-items-center w-100 pt-5 pb-5">
    <div class="inner-conteudo pt-3 pb-3">
        <div class="d-flex justify-content-center align-items-center flex-wrap">
            <?php for($i=0;$i<$n;$i++):?>
                <a class="d-flex container-card-post" href="<?php echo $eventos[$i]['link'];?>">
                    <div class="d-flex flex-column justify-content-start align-items-start">
                        <div class="container-card-post-link">
                            <div class="card-post-link" style="background-image: url(<?php echo $eventos[$i]['thumbnail'];?>);"></div>
                        </div>
                        <div class="d-flex mt-4">
                            <h2><?php echo $eventos[$i]['titulo']?></h2>
                        </div>
                        <div class="d-flex">
                            <span class="mt-3">Continue lendo</span>
                        </div>
                    </div>
                </a>
            <?php endfor;?>
        </div>
    </div>
</div>

<?php 
get_footer();
?>