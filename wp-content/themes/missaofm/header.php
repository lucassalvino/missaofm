<?php

wp_reset_postdata();
wp_reset_query();

$titulo = get_the_title();
$descricao = get_bloginfo("description");
$url = get_home_url();
$nomeSite = get_bloginfo('name');
$palavraschave = get_field('palavras_chave','option');
$imagem = get_the_post_thumbnail_url();

if(!isset($palavraschave))
    $palavraschave = "";
if(!isset($imagem)||$imagem=="")
    $imagem = get_field('imagem_compartilhamento','option');
$facebook = get_field('facebook', 'option');
$instagram = get_field('instagram', 'option');
$twitter = get_field('twitter', 'option');
$linkdin = get_field('linkdin', 'option');
$youtube = get_field('youtube', 'option');
$tracking = get_field('script_tracking', 'option');
$temAlgum = false;
$socialSchema = "";
if(isset($facebook)){
    $socialSchema = "\"".$facebook."\"";
    $temAlgum = true;
}
if(isset($instagram)){
    if($temAlgum){
        $socialSchema .= ",";
    }
    $socialSchema .= "\"".$instagram."\"";
    $temAlgum = true;
}
if(isset($twitter)){
    if($temAlgum){
        $socialSchema .= ",";
    }
    $socialSchema .= "\"".$twitter."\"";
    $temAlgum = true;
}
if(isset($linkdin)){
    if($temAlgum){
        $socialSchema .= ",";
    }
    $socialSchema .= "\"".$linkdin."\"";
    $temAlgum = true;
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-tit=no"/>
    <title><?php echo $nomeSite;?> - <?php echo $titulo;?></title>
    <meta name="keywords" content="<?php echo $palavraschave;?>" />

    <?php wp_site_icon(); ?>

    <meta name="description" content="<?php echo $descricao;?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php echo $nomeSite;?> - <?php echo $titulo;?>" />
    <meta property="og:site_name" content="<?php echo $nomeSite;?>" />
    <meta property="og:url" content="<?php echo $url;?>" />
    <meta property="og:description" content="<?php echo $descricao;?>" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:image" content="<?php echo $imagem;?>"/>
    <meta name="author" content="Lucas Salvino">
    <meta name="format-detection" content="telephone=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="<?php echo bloginfo("template_url");?>/assets/js/soundcloudapi.js?v=1.0"></script>
    <script>
        var radioplayer = new Audio("https://radio.saopaulo01.com.br/8278/stream");
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>
    <script src="<?php echo bloginfo("template_url");?>/assets/js/main.js?v=1.0"></script>
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php  echo bloginfo("template_url");?>/assets/css/main.css?v=1.0">
</head>
<header>
    <div class="d-flex menu-topo">
        <div class="d-flex justify-content-center">
            <a href="<?php echo get_home_url();?>">
                <img src="<?php  echo bloginfo("template_url");?>/assets/imagens/missaofmplay.png" alt="Logo Missão FM" id="logo-site">
            </a>
        </div>

        <div class="d-flex">
            <div class="d-flex">
                <div class="d-flex menu-opcao" id="home">
                    <a href="<?php echo get_home_url();?>">
                        HOME
                    </a>
                </div>
                <div class="d-flex menu-opcao" id="sobre">
                    <a href="<?php echo get_home_url();?>/sobre">
                        SOBRE
                    </a>
                </div>
                <div class="d-flex menu-opcao" id="programacao">
                    <a href="<?php echo get_home_url();?>/programacao">
                        PROGRAMAÇÃO
                    </a>
                </div>
                <div class="d-flex menu-opcao">
                    <a href="#sessao-contato">
                        CONTATO
                    </a>
                </div>
                <div class="d-flex menu-opcao">
                    <div class='d-flex containerpausestart'>
                        <img src="<?php  echo bloginfo("template_url");?>/assets/imagens/play-icon.svg" alt="Play rádio" title="Escutar rádio ao vivo" id="play" style="display: none;">
                        <img src="<?php  echo bloginfo("template_url");?>/assets/imagens/pause-icon.svg" alt="Pause rádio" title="Pausar rádio" id="pause">
                    </div>
                    <div id='bars'>
                        <div class='bar'></div>
                        <div class='bar'></div>
                        <div class='bar'></div>
                        <div class='bar'></div>
                        <div class='bar'></div>
                        <div class='bar'></div>
                        <div class='bar'></div>
                        <div class='bar'></div>
                        <div class='bar'></div>
                        <div class='bar'></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex">
            <div class="d-flex social-opcao">
                <a href="#">
                    <img src="<?php  echo bloginfo("template_url");?>/assets/imagens/facebook.svg" alt="">
                </a>
            </div>
            <div class="d-flex social-opcao">
                <a href="#">
                    <img src="<?php  echo bloginfo("template_url");?>/assets/imagens/instagram.svg" alt="">
                </a>
            </div>
            <div class="d-flex social-opcao">
                <a href="#">
                    <img src="<?php  echo bloginfo("template_url");?>/assets/imagens/youtube.svg" alt="">
                </a>
            </div>
        </div>
    </div>
</header>
<body>
    <div class="fundo-defalt" style="background-image: url(<?php echo bloginfo("template_url");?>/assets/imagens/fundo-site.jpg);">
        
