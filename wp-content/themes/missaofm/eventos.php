<?php 
/**
 * Template Name: Eventos
 *
 */
get_header();?>

<?php
$eventos = CustomCustomQuery(
    array(
        'post_type' => 'post_evento',
        'post_status'=>'publish',
        'posts_per_page' => 30
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

<div class="d-flex justify-content-center align-items-center w-100 pt-5 pb-5 pagina-evento">
    <div class="inner-conteudo pt-3 pb-3 w-100">
        <div class="d-flex justify-content-center align-items-center flex-wrap w-100">
            <?php for($i=0;$i<$n;$i++):?>
                <a class="d-flex w-100 container-card-post pt-4" href="<?php echo $eventos[$i]['link'];?>">
                    <div class="d-flex flex-column justify-content-start align-items-start w-100">
                        <div class="container-card-post-link w-100">
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
<script>
    ativarMenu('#eventos');
</script>
<?php 
get_footer();
?>