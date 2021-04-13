<?php 
/**
 * Template Name: Sobre
 *
 */
get_header();?>

<div class="d-flex justify-content-center align-items-center w-100 sobre" style="background-image: url('<?php echo get_field('fundo_sobre');?>');">
    <div class="d-flex justify-content-center align-items-center conteudo-wordpress">
        <div class="d-flex flex-column conteudo">
            <div class="d-flex titulo justify-content-center w-100">
                <h2 class="text-center"><?php echo get_the_title();?></h2>
            </div>
            <?php the_content(); ?>
        </div>
    </div>
</div>

<script>
    ativarMenu('#sobre');
</script>
<?php get_footer();?>