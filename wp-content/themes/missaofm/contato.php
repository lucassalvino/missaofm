<?php 
/**
 * Template Name: Contato
 *
 */
get_header();?>

<script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />

<section id="sessao-contato" class="mb-5 mt-5">
    <div class="d-flex flex-column contato-form">
        <form action="#" class="d-flex w-100 flex-column">
            <div class="d-flex justify-content-center align-items-center">
                <div class="d-flex">
                    <h3 class="titulo-contato">Contato</h3>
                </div>
            </div>
            <div class="d-flex flex-column justify-content-start align-items-start w-100">
                <div class="d-flex justify-content-between w-100 mt-4 container-dois">
                    <div class="d-flex container-input">
                        <div class="d-flex flex-column">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" placeholder="Nome" required>
                        </div>
                    </div>
                    <div class="d-flex container-input">
                        <div class="d-flex flex-column">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Email" required>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-start w-100 mt-4">
                    <div class="d-flex container-input">
                        <div class="d-flex flex-column">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="telefone" name="telefone" id="telefone" placeholder="Telefone" required>
                        </div>
                    </div>
                </div>
                <div class="d-flex w-100 mt-4">
                    <div class="d-flex flex-column w-100">
                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagem" id="mensagem" rows="5" placeholder="Escreva sua mensagem aqui" required></textarea>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <div class="d-flex">
                    <button class="button-missao" id="btnenviarcontato">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</section>
<section id="mapcontainer" class="w-100 pb-5">
    <div class="d-flex justify-content-center align-items-center w-100">
        <div class="d-flex w-100" style="max-width: 1200px!important;">
            <div id='map' style='width: 100%; height: 500px;'></div>
        </div>
    </div>
</section>
<script>
mapboxgl.accessToken = '<?php echo get_field('chave_open_box', 'option');?>';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/dark-v10',
    center: [<?php echo get_field('latitudelongitude', 'option');?>],
    zoom: 13
});
var marker1 = new mapboxgl.Marker({ color: '#F29544',})
    .setLngLat([<?php echo get_field('latitudelongitude', 'option');?>])
    .addTo(map);
</script>
<script>
    ativarMenu('#contato');
</script>
<?php get_footer();?>