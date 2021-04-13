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
get_footer();
?>