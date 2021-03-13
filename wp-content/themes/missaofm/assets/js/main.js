function ativarMenu(id){
    $(id).addClass('ativo');
}
$(document).ready(function(){
    $(".telefone").mask("(00) 0000-00009");
    $("summary").click(function(evento) {
        $(".listagem-programacao").removeAttr('open');
        $(this).parent().attr("open", "open");
        evento.preventDefault();
    });

    $(".iframe-sound").on('load', function(){
        var iframeid =  $(this).attr('id');
        var widgetIframe = document.getElementById(iframeid),
        widget = SC.Widget(widgetIframe);
        widget.bind(SC.Widget.Events.PLAY, function(){
            $("#pause").click();
        });
        widget.bind(SC.Widget.Events.PAUSE, function(){
            $("#play").click();
        });
        widget.bind(SC.Widget.Events.FINISH, function(){
            $("#play").click();
        });
    });

    $("#play").on('click', function(){
        radioplayer.play();
    });

    $("#pause").on('click', function(){
        radioplayer.pause();
    });
    radioplayer.play();
    radioplayer.onplaying = function() {
        $("#play").hide();
        $("#pause").show();
        $('.bar').css('animation-play-state', 'running');
    };
    radioplayer.onpause = function() {
        $("#play").show();
        $("#pause").hide();
        $('.bar').css('animation-play-state', 'paused');
    };
});