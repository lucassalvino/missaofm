function ativarMenu(id){
    $(id).addClass('ativo');
}
$(document).ready(function(){
    radioplayer.load();
    var scroll = window.scrollY;
    if(scroll > 40){
        $("#logo-site").addClass('scroll');
    }
    $( window ).scroll(function(){
        var scroll = window.scrollY;
        if(scroll > 40){
            $("#logo-site").addClass('scroll');
        }else{
            $("#logo-site").removeClass('scroll');
        }
    });

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
        });
        widget.bind(SC.Widget.Events.FINISH, function(){
        });
    });

    $("#play").on('click', function(){
        radioplayer.play();
    });

    $("#pause").on('click', function(){
        radioplayer.pause();
    });
    radioplayer.onplaying = function() {
        $("#play").hide();
        $("#pause").show();
    };
    radioplayer.onpause = function() {
        $("#play").show();
        $("#pause").hide();
    };
});