
$(document).ready( function(){

/////////////////menuzord//////////////

	$("#menuzord").menuzord({
		align: "right"
	});

///////////////pesquisar//////////////////
	$('.inp-pesquisar').bind({
		click: function() {
			$(this).css('background','#FFF');
			$(this).css('color','#337ab7');
			$('.btn-pesquisar').css('color','#0A4980');
			$('.inp-pesquisar').css('text-indent','25px');
		},
		mouseout: function () {
			$(this).css('color','#FFF');
			$(this).css('background','#0A4980');
			$('.btn-pesquisar').css('color','#fff');
			$(this).css('font-weight','bold');
		},
		mouseover: function () {
			$(this).css('background','#FFF');
			$(this).css('color','#337ab7');
			$('.btn-pesquisar').css('color','#0A4980');
			$('.inp-pesquisar').css('text-indent','25px');
		}
	})
	$('.btn-pesquisar').hover(
		function() {
			 $('.inp-pesquisar').css('background','#FFF');
			 $('.inp-pesquisar').css('color','#337ab7');
			 $(this).css('color','#0A4980');
			 $('.inp-pesquisar').css('text-indent','25px');
		}, function() {
			 $('.inp-pesquisar').css('color','#FFF');
			 $('.inp-pesquisar').css('background','#0A4980');
			 $(this).css('color','#fff');
			 $('.inp-pesquisar').css('font-weight','bold');
		}
	);

	var $body = $('body');

/////////////script scroll lateral/////////////////////////
			$(document).on('click', '.onepage-nav a', function(e) {
					$('.showhide').trigger('click');
					return false;
			});

			$(".side-panel-trigger").click(function(){
					$body.toggleClass("side-panel-open");
					if( $body.hasClass('device-touch') ) {
						$body.toggleClass("ohidden");
							}
					return false;
			});

					$(".has-side-panel .body-overlay").click(function(){
							$body.toggleClass("side-panel-open");
							return false;
					});

					//sitebar tree
					$('.side-panel-nav .nav .tree-toggler').click(function () {
							$(this).parent().children('ul.tree').toggle(300);
					});

			$('.navbar-scrolltofixed').scrollToFixed();


////script sliders/////////////////////////////
	$(function() {
		var Page = (function() {
			var $nav = $( '#nav-dots > span' ),
				slitslider = $( '#slider' ).slitslider( {
					onBeforeChange : function( slide, pos ) {
						$nav.removeClass( 'nav-dot-current' );
						$nav.eq( pos ).addClass( 'nav-dot-current' );
					}
				}),
				init = function() {
					initEvents();
				},
				initEvents = function() {
					$nav.each( function( i ) {
						$( this ).on( 'click', function( event ) {
							var $dot = $( this );
							if( !slitslider.isActive() ) {
								$nav.removeClass( 'nav-dot-current' );
								$dot.addClass( 'nav-dot-current' );
							}
							slitslider.jump( i + 1 );
							return false;
						});
					});
				};
				return { init : init };
		})();

		Page.init();

		/*
		var $items  = $('<div class="sl-slide sl-slide-color-2"
		data-orientation	="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10"
		 data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1">
		 <div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
		// call the plugin's add method
		ss.add($items);
		*/
	});
///////////////////////////////////////

   $("#localizacao").click(function(event){
      event.preventDefault();
      $("#pages").slideUp('slow').load('localizacao.php', function() {
         $(this).fadeIn('slow');
      });
   });
////////////fancybox instalacoes//////////////
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
////////////////////////////////////////////////
$('#form-peso').mask("000.0", {reverse: true});
$('#form-altura').mask("0.00", {reverse:true});
// $.mask.definitions['~']='[+-]';
// $(".data").mask("99/99/9999");
// $(".dataNova").mask("99/99/9999")
$(".tel-fixo").mask("(99)9999-9999");
$(".tel-cell").mask("(99)99999-9999");
// $("#form-peso").mask("999,9", {placeholder:" "});
// $(".cep").mask("99999-999");
// $(".cnpj").mask("99.999.999/9999-99");

$( "form" ).submit(function( event ) {
  event.preventDefault();
});

});

var calcPeso = document.getElementById('form-peso');
var calcAltura = document.getElementById('form-altura');
var resImc = document.getElementById('form-resultado');
var valueRes = resImc.value;

var nivelB = document.getElementById("nivel-0");
var nivelN = document.getElementById("nivel-1");
var nivelS = document.getElementById("nivel-2");
var nivelO = document.getElementById("nivel-3");
var nivelOm = document.getElementById("nivel-4");
var nivelOs = document.getElementById("nivel-5");

var loadPeso = function(){
	var valuePeso = calcPeso.value;
	parseFloat(calcPeso.value);
}

var loadAltura = function(){
	var valueAltura = calcAltura.value;
	parseFloat(calcAltura.value);
}


var meuBtn   = document.getElementById('btn-calcImc');
var resetBtn = document.getElementById('btn-resetImc');

meuBtn.addEventListener('click', calcImc);
resetBtn.addEventListener('click', resetImc);

function calcImc() {
	 resImc.style.fontWeight = 'bolder';
	 loadPeso();
	 loadAltura();
	 var calcVaImc = calcPeso.value/(calcAltura.value*calcAltura.value);
	 resImc.value = calcVaImc.toFixed(1);

	 if(resImc.value < 20){
	 		nivelB.setAttribute("class", "nivel-4");
	 }
	 if(resImc.value > 20 &&  resImc.value < 25){
		 nivelN.setAttribute("class","nivel-0");
	 }

	 if(resImc.value > 25 && resImc.value < 30){
		 nivelS.setAttribute("class","nivel-2")
	 }

	 if(resImc.value > 30 && resImc.value < 35){
		 nivelO.setAttribute("class","nivel-5")
	 }

	 if(resImc.value > 35 && resImc.value < 40){
		 nivelOm.setAttribute("class","nivel-5")
	 }

	 if(resImc.value > 40 && resImc.value < 45){
		 nivelOs.setAttribute("class","nivel-5")
	 }
}

function resetImc(){
	nivelB.classList.remove("nivel-4");
	nivelN.classList.remove("nivel-0");
	nivelS.classList.remove("nivel-2");
	nivelO.classList.remove("nivel-5");
	nivelOm.classList.remove("nivel-5");
	nivelOs.classList.remove("nivel-5");
}
