<?php
add_theme_support( 'post-thumbnails' );//Adiciona possibilidade imagens destacadas nas páginas

// remove barra do wordpress do site
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
		'page_title' 	=> 'Opções',
		'menu_title'	=> 'Opções',
		'menu_slug' 	=> 'opcoes',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
    ));
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Redes sociais',
		'menu_title'	=> 'Redes sociais',
		'parent_slug'	=> 'opcoes',
    ));
    acf_add_options_sub_page(array(
		'page_title' 	=> 'SEO',
		'menu_title'	=> 'SEO',
		'parent_slug'	=> 'opcoes',
	));
}

function CustomCustomQuery($args, $funcaoRetorno, &$copiaquery = null){
    $retorno = Array();
    $query = new WP_Query($args);
    if ($query->have_posts()){
        while($query->have_posts()){
			$query->the_post();
            array_push($retorno, $funcaoRetorno());
        }
    }
    if(!is_null($copiaquery)){
        $copiaquery = $query;
    }
    return $retorno;
}

function IframeSoundCloud($track){
	echo '<iframe class="iframe-sound" id="<?php echo bin2hex(random_bytes(10));?>" width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/'.$track.'&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"></div>';
}

function ImprimeCronograma($NomeCampo){
	$dados = get_field($NomeCampo);
	for($i = 0; $i<count($dados);$i++):
		?>
		<div class="item">
			<span><?php echo $dados[$i]['descricao']?></span>
		</div>
		<?php
	endfor;
}

function GetTrackFromIncorporado($str){
	$posicao = strrpos($str, "/tracks/");
	$str = substr($str, $posicao);
	$str = str_replace("/tracks/", '', $str);
	$retorno = "";
	for($i = 0; true ; $i++){
		if($str[$i] == '&')
			break;
		$retorno.=$str[$i];
	}
	return $retorno;
}

add_action( 'init', 'register_evento_post' );

function register_evento_post(){
	$labels = array(
		'name' => __( 'Evento', 'Eventos Missão' ),
		'singular_name' => __( 'Evento', 'Eventos Missão' )
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Posts Eventos',
		'public' => true,
		'menu_position' => 4,
		'supports' => array(
			'editor' , 'title', 'thumbnail', 'excerpt', 'custom-fields', 'author'
        ),
        'rewrite'=>true
	);
	register_post_type( 'post_evento', $args );
}

add_action( 'init', 'register_podcast_post' );

function register_podcast_post(){
	$labels = array(
		'name' => __( 'PodCast', 'PodCast' ),
		'singular_name' => __( 'PodCast', 'PodCast Missão' )
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Posts PodCast',
		'public' => true,
		'menu_position' => 5,
		'supports' => array(
			'title', 'custom-fields'
        ),
        'rewrite'=>true
	);
	register_post_type( 'post_podcast', $args );
}