<?php get_header();?>
<div class="d-flex justify-content-center align-items-center w-100">
    <div class="d-flex conteudo conteudo-wordpress">
        <div class="d-flex titulo">
            <h2><?php echo get_the_title();?></h2>
        </div>
        <?php the_content(); ?>
    </div>
</div>
<?php get_footer();?>