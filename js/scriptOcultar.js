/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


(function($) {
$.fn.toggleText = function(a,b) {

return   this.html(this.html().replace(new RegExp("("+a+"|"+b+")"),function(x){return(x==a)?b:a;}));

}

$(document).ready(function(){

$('#jqDock').before('<span ><img src="imagem/seta_esquerda.png" class="iconesocial" title="Ocultar"></span>');

$('#jqDock').css('display', 'block')

$('span', '#dockContainer').click(function() {

$(this).next().slideToggle('slow').siblings('#jqDock:visible').slideToggle('fast');

// aqui começa o funcionamento do plugin
$(this).toggleText('<img src="imagem/seta_DIREITA.png" class="iconesocial" title="Mostrar">','<img src="imagem/seta_esquerda.png" class="iconesocial" title="Ocultar">').siblings('span').next('#jqDock:visible').prev().toggleText('<img src="imagem/seta_DIREITA.png" class="iconesocial" title="Mostrar">','<img src="imagem/seta_esquerda.png" class="iconesocial" title="Ocultar">')
});

});

})(jQuery);