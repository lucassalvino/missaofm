<?php 
/**
 * Template Name: Podcasts
 *
 */
get_header();?>

<div class="d-flex justify-content-center align-items-center w-100">
    <div class="d-flex justify-content-center align-items-center conteudo">
        <div class="d-flex pt-4 titulo">
            <h2 class="text-white">PODCASTS</h2>
        </div>
    </div>
</div>
<?php
    $podcast = CustomCustomQuery(
        array(
            'post_type' => 'post_podcast',
            'post_status'=>'publish',
            'posts_per_page' => 30
        ),
        function(){
            return array(
                'id' => get_the_ID(),
                'incorpora' => get_field('codigo_incorporacao')
            );
        }
    );
    $n = count($podcast);
    GetTrackFromIncorporado($podcast[0]['incorpora']);
?>
<div class="d-flex justify-content-center align-items-center w-100 pb-5 pagina-podcast">
    <div class="inner-conteudo pt-3 pb-3 w-100">
        <div class="d-flex flex-column">
            <?php for($k = 0; $k<$n; $k++):?>
                <div class="d-flex mt-3 mb-4" data-aos="zoom-in" data-aos-duration="500">
                    <?php IframeSoundCloud(GetTrackFromIncorporado($podcast[$k]['incorpora']));?>
                </div>
            <?php endfor;?>
        </div>
    </div>
</div>



<script>
    ativarMenu('#podcast');
</script>
<?php 
get_footer();
?>