<?php 
/**
 * Template Name: Programação
 *
 */
get_header();?>
<div class="d-flex justify-content-center align-items-center w-100 programacao">
    <div class="d-flex conteudo conteudo-wordpress">
        <div class="d-flex flex-column w-100 pt-5">

            <div class="d-flex flex-column w-100 mt-4">
                <div class="listagem-programacao" data-dia="segunda" id="segunda">
                    <span>Segunda-feira</span>
                    <div class="arrow-wrapper"> 
                        <div class="arrow" > 
                            <svg class="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1152 1792" style="background-color:inherit !important" fill="currentColor"> <path fill="inherit" d="M1075 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path></svg> 
                        </div>
                    </div>
                </div>
                <div class="conteudo-mostrar" id="horarios-segunda" style="display: none;">
                    <?php ImprimeCronograma('segunda');?>
                </div>
            </div>

            <div class="d-flex flex-column w-100 mt-4">
                <div class="listagem-programacao" data-dia="terca" id="terca">
                    <span>Terça-feira</span>
                    <div class="arrow-wrapper"> 
                        <div class="arrow" > 
                            <svg class="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1152 1792" style="background-color:inherit !important" fill="currentColor"> <path fill="inherit" d="M1075 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path></svg> 
                        </div>
                    </div>
                </div>
                <div class="conteudo-mostrar" id="horarios-terca" style="display: none;">
                    <?php ImprimeCronograma('terca');?>
                </div>
            </div>

            <div class="d-flex flex-column w-100 mt-4">
                <div class="listagem-programacao" data-dia="quarta" id="quarta">
                    <span>Quarta-feira</span>
                    <div class="arrow-wrapper"> 
                        <div class="arrow" > 
                            <svg class="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1152 1792" style="background-color:inherit !important" fill="currentColor"> <path fill="inherit" d="M1075 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path></svg> 
                        </div>
                    </div>
                </div>
                <div class="conteudo-mostrar" id="horarios-quarta" style="display: none;">
                    <?php ImprimeCronograma('quarta');?>
                </div>
            </div>

            <div class="d-flex flex-column w-100 mt-4">
                <div class="listagem-programacao" data-dia="quinta" id="quinta">
                    <span>Quinta-feira</span>
                    <div class="arrow-wrapper"> 
                        <div class="arrow" > 
                            <svg class="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1152 1792" style="background-color:inherit !important" fill="currentColor"> <path fill="inherit" d="M1075 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path></svg> 
                        </div>
                    </div>
                </div>
                <div class="conteudo-mostrar" id="horarios-quinta" style="display: none;">
                    <?php ImprimeCronograma('quinta');?>
                </div>
            </div>

            <div class="d-flex flex-column w-100 mt-4">
                <div class="listagem-programacao" data-dia="sexta" id="sexta">
                    <span>Sexta-feira</span>
                    <div class="arrow-wrapper"> 
                        <div class="arrow" > 
                            <svg class="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1152 1792" style="background-color:inherit !important" fill="currentColor"> <path fill="inherit" d="M1075 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path></svg> 
                        </div>
                    </div>
                </div>
                <div class="conteudo-mostrar" id="horarios-sexta" style="display: none;">
                    <?php ImprimeCronograma('sexta');?>
                </div>
            </div>

            <div class="d-flex flex-column w-100 mt-4">
                <div class="listagem-programacao" data-dia="sabado" id="sabado">
                    <span>Sábado</span>
                    <div class="arrow-wrapper"> 
                        <div class="arrow" > 
                            <svg class="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1152 1792" style="background-color:inherit !important" fill="currentColor"> <path fill="inherit" d="M1075 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path></svg> 
                        </div>
                    </div>
                </div>
                <div class="conteudo-mostrar" id="horarios-sabado" style="display: none;">
                    <?php ImprimeCronograma('sabado');?>
                </div>
            </div>

            <div class="d-flex flex-column w-100 mt-4">
                <div class="listagem-programacao" data-dia="domingo" id="domingo">
                    <span>Domingo</span>
                    <div class="arrow-wrapper"> 
                        <div class="arrow" > 
                            <svg class="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1152 1792" style="background-color:inherit !important" fill="currentColor"> <path fill="inherit" d="M1075 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path></svg> 
                        </div>
                    </div>
                </div>
                <div class="conteudo-mostrar" id="horarios-domingo" style="display: none;">
                    <?php ImprimeCronograma('domingo');?>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    ativarMenu('#programacao');
</script>
<?php get_footer();?>