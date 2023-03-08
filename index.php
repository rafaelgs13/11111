<html lang="pt"><head>
<meta charset="utf-8">

<!-- viewport meta to reset iPhone inital scale -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Trio Eléctrico</title>
<meta name="description" content="Trio Eléctrico - Camião Palco - 100.00 watts de som a 360º">
<meta name="keywords" content="trio electrico, carnavais, eventos, concertos, ao vivo, movimento, camião palco">
<meta http-equiv="X-UA-Compatible" content="IE=9">
		
		<link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="estilo.css" type="text/css" media="screen">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="im.function.js"></script>
			
		<!-- The JavaScript -->	
        <script type="text/javascript" src="jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(document).ready(function() 
	{
		
		//window mobile
		if ($(window).width()<'1000')
		{
		window.location.href = "http://www.trioelectrico.com/index2.php";
		}
		
		//RIDER
		$('#bt_rider, #bt_rider1, #bt_rider2, #bt_rider3').click(function() {
		$('#rider').show();
		$('#planta').hide();
		$('#dimensoes').hide();
		$('#espaco').hide();
		$('#autonomia').hide();
   		 });
		
		//DIMENSOES 
		$('#bt_dimensoes, #bt_dimensoes2, #bt_dimensoes3').click(function() {
		$('#dimensoes').show();
		$('#rider').hide();
		$('#planta').hide();
		$('#espaco').hide();
		$('#autonomia').hide();
		});

		//PLANTA 
		$('#bt_planta, #bt_planta2, #bt_planta3').click(function() {
		$('#planta').show();
		$('#dimensoes').hide();
		$('#rider').hide();
		$('#espaco').hide();
		$('#autonomia').hide();		
		});

		//ESPAÇO 
		$('#bt_espaco, #bt_espaco2, #bt_espaco3').click(function() {
		$('#espaco').show();
		$('#dimensoes').hide();
		$('#planta').hide();
		$('#rider').hide();
		$('#autonomia').hide();
		});
		
		//AUTONOMIA 
		$('#bt_autonomia, #bt_autonomia2, #bt_autonomia3').click(function() {
		$('#autonomia').show();
		$('#espaco').hide();
		$('#dimensoes').hide();
		$('#planta').hide();
		$('#rider').hide();
		});
		
		//SLB - SLIDESHOW
		//$('#thumbs90 a').bind('click',function(event){
		
		//$('#bt_slb').click(function() {
		
		$('#thumbs90 a').click(function() {
		
			var saberid = $(this).attr("id");
			
			//alert("Nova invocação de plugin. Minha variável comum: " + saberid);
			
			//$('#slideshow').show("");
			
		
			//$('#slideshow').show("slow", function() {
			// Animation complete.
			$('#slideshow').load('slide.php?slide=' + saberid , function () {
			
			$('#slideshow').show("slow");
			
				//SLIDESHOW - Close
			$('#bt_close_slide').click(function() {
			
			$('#slideshow').hide("slow");
			//location.href = "index2.html#section4";
		
			});
			
			return;
			
			});
			
		
		});
		
		//SLIDESHOW - Close
		$('#bt_close_slide').click(function() {
		
		$('#slideshow').hide();	
		
		});
		
		//MOSTRAR -TESTE
		$('#bt_mostra').click(function() {
		
		$('#mostraload').load('autores.html');	
		
		});
		
		
		//BT finalidades 
		$('#bt_finalidades').click(function() {
		
		$('#finalidades').show();
		$('#historial').hide();		
		
		});
		
		//BT historial 
		$('#bt_historial').click(function() {
		
		$('#historial').show();
		$('#finalidades').hide();		
		
		});
		
	});
			
		/*	$(function() {
                $('.menu a,.bt').bind('click',function(event){
                    var $anchor = $(this);
                    					
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1500,'easeInQuart');
					
                    event.preventDefault();
					
                });
            }); */
			
			$(function() {
                $('.menu a,.bt').bind('click',function(event){
                    var $anchor = $(this);
                    					
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1500,'easeInQuart');
					
                    event.preventDefault();
					
                });
            });
			
			
		//thumbs
		$(function() {
                $('#th1a').bind('mouseover',function(event){
				$('#th1').show();
						$('#th1a').bind('mouseout',function(event){
						$('#th1').hide();	
						});
                });
				
				$('#th2a').bind('mouseover',function(event){
				$('#th2').show();
						$('#th2a').bind('mouseout',function(event){
						$('#th2').hide();	
						});
                });
				
				$('#th3a').bind('mouseover',function(event){
				$('#th3').show();
						$('#th3a').bind('mouseout',function(event){
						$('#th3').hide();	
						});
                });
				
				$('#th4a').bind('mouseover',function(event){
				$('#th4').show();
						$('#th4a').bind('mouseout',function(event){
						$('#th4').hide();	
						});
                });
				
				$('#th5a').bind('mouseover',function(event){
				$('#th5').show();
						$('#th5a').bind('mouseout',function(event){
						$('#th5').hide();	
						});
                });
				
				$('#th6a').bind('mouseover',function(event){
				$('#th6').show();
						$('#th6a').bind('mouseout',function(event){
						$('#th6').hide();	
						});
                });
				
				$('#th7a').bind('mouseover',function(event){
				$('#th7').show();
						$('#th7a').bind('mouseout',function(event){
						$('#th7').hide();	
						});
                });
				
				$('#th8a').bind('mouseover',function(event){
				$('#th8').show();
						$('#th8a').bind('mouseout',function(event){
						$('#th8').hide();	
						});
                });
				
				$('#th9a').bind('mouseover',function(event){
				$('#th9').show();
						$('#th9a').bind('mouseout',function(event){
						$('#th9').hide();	
						});
                });
				
				$('#th10a').bind('mouseover',function(event){
				$('#th10').show();
						$('#th10a').bind('mouseout',function(event){
						$('#th10').hide();	
						});
                });
				
				$('#th11a').bind('mouseover',function(event){
				$('#th11').show();
						$('#th11a').bind('mouseout',function(event){
						$('#th11').hide();	
						});
                });
				
				$('#th12a').bind('mouseover',function(event){
				$('#th12').show();
						$('#th12a').bind('mouseout',function(event){
						$('#th12').hide();	
						});
                });
				
				$('#th13a').bind('mouseover',function(event){
				$('#th13').show();
						$('#th13a').bind('mouseout',function(event){
						$('#th13').hide();	
						});
                });
				
				$('#th14a').bind('mouseover',function(event){
				$('#th14').show();
						$('#th14a').bind('mouseout',function(event){
						$('#th14').hide();	
						});
                });
				
				$('#th15a').bind('mouseover',function(event){
				$('#th15').show();
						$('#th15a').bind('mouseout',function(event){
						$('#th15').hide();	
						});
                });
				
				$('#th16a').bind('mouseover',function(event){
				$('#th16').show();
						$('#th16a').bind('mouseout',function(event){
						$('#th16').hide();	
						});
                });
				
				$('#th17a').bind('mouseover',function(event){
				$('#th17').show();
						$('#th17a').bind('mouseout',function(event){
						$('#th17').hide();	
						});
                });
				
				$('#th18a').bind('mouseover',function(event){
				$('#th18').show();
						$('#th18a').bind('mouseout',function(event){
						$('#th18').hide();	
						});
                });
				
            });
				
			
			$(document).ready(function(){
    $("#display").bind('click',function(event){
		
		$('.hide').show();
		$('#display').hide();
		
		var $anchor = $(this);
		
		$('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1500,'easeInQuart');
					
					
                    event.preventDefault();
    		});		
});

$(document).ready(function(){
$('div.bgParallax').each(function(){
	var $obj = $(this);

	$(window).scroll(function() {
		var yPos = -($(window).scrollTop() / $obj.data('speed')); 

		var bgpos = '50% '+ yPos + 'px';

		$obj.css('background-position', bgpos );

	}); 
});	
});

$(document).ready(function(){
$('div.bgParallax2').each(function(){
	var $obj = $(this);

	$(window).scroll(function() {
		var yPos = -($(window).scrollTop() / $obj.data('speed')); 

		var bgpos = '50% '+ yPos + 'px';

		$obj.css('background-position', bgpos );

	}); 
});	
});
        </script>
		
		<script type="text/javascript">

	$(document).ready(function() 
	{
		
		//PREV
		$('#menu_prev').click(function() {
		
		/* $("p").html($("#galeria").css("marginLeft")); */
		
		if ($("#galeria").css("marginLeft")!='0px')
		{
		$('#galeria').animate({
        'marginLeft' : "+=800px", //moves left
		});
		}
		else
		{
			$('#galeria').animate({
			'marginLeft' : "-=2400px", //moves fim
			});
		}
		
   		 });
		
		//NEXT 
		$('#menu_next').click(function() {
        
		/* $("h2").html($("#galeria").css("marginLeft")); */
		
		if ($("#galeria").css("marginLeft")!='-2400px')
		{
		$('#galeria').animate({
        'marginLeft' : "-=800px" //moves right
        	});
		}
		else
		{
			$('#galeria').animate({
			'marginLeft' : "+=2400px" //moves inicio
        	});
		}
			
		}); 
		
	});
        </script>
					<style id="devrama-css" type="text/css">					.devrama-slider,					.devrama-slider *,					.devrama-slider *::before,					.devrama-slider *::after{					 -webkit-box-sizing: border-box;					    -moz-box-sizing: border-box;					         box-sizing: border-box;					}					</style>					</head>
<body>
<!-- TOPO -->
<div id="topo">
	<div id="topo1800">
	<!-- Logotipo -->
	<img src="imagens/logotipo3.png" class="logo">
	<!-- MENU -->
	<div class="menu"><a>Home</a><a href="#section1">Sobre Nós</a><a href="#section5">Vídeos</a><a href="#section4">Galeria</a><a href="#section6">Contactos</a> <div class="band"><a href="?lang=">PT</a> | <a href="?lang=en">EN</a> | <a href="?lang=de">DE</a></div></div>
	<!--  <div style="width: 100%; height: 100px; display:block; overflow:hidden; margin-top: 40%;">
	<h1 class="slogan1">Espetáculos em movimento</h1>
	<h2 class="slogan2">Versatilidade, Flexibilidade, Mobilidade, e Alta Qualidade de Som</h2></div> -->
	</div>
    <a href="http://www.cvmusic.pt/" target="_blank"><img src="imagens/logo_cvmusic2.png" class="logo_cv"></a>
	</div>


<!-- SLIDER -->
				<div class="example-slide-left" style="position: relative; visibility: visible; width: auto; height: auto;"><div class="inner devrama-slider" style="position: relative; margin: 0px auto; width: 400px; height: 177.778px;"><div class="projector" style="position: relative; overflow: hidden; width: 400px; height: 177.778px;">
				<img data-lazy-src="imagens/destaques/espetaculo_movimento.jpg" class="primary-img image" src="imagens/destaques/espetaculo_movimento.jpg" style="display: none; position: absolute; top: 0%; left: 0%; vertical-align: bottom; width: 1800px; height: 800px;">
				<img data-lazy-src="imagens/destaques/autonomia2.jpg" class="primary-img image" src="imagens/destaques/autonomia2.jpg" style="display: none; position: absolute; top: 0%; left: 0%; vertical-align: bottom; width: 1800px; height: 800px;">
				<img data-lazy-src="imagens/destaques/carnavais.jpg" class="primary-img image" src="imagens/destaques/carnavais.jpg" style="display: none; position: absolute; top: 0%; left: 0%; vertical-align: bottom; width: 1800px; height: 800px;">
				<img data-lazy-src="imagens/destaques/atuacaodedjs.jpg" class="primary-img image" src="imagens/destaques/atuacaodedjs.jpg" style="display: none; position: absolute; top: 0%; left: 0%; vertical-align: bottom; width: 400px; height: 177.778px;">
				<img data-lazy-src="imagens/destaques/festivais.jpg" class="primary-img image active" src="imagens/destaques/festivais.jpg" style="display: block; position: absolute; top: 0%; left: 0%; vertical-align: bottom; width: 400px; height: 177.778px;">
				<img data-lazy-src="imagens/destaques/eventosdesportivos.jpg" class="primary-img image" src="data:image/gif;base64,R0lGODlhAQABAPAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" style="display: none; position: absolute; top: 0px; left: 0px; vertical-align: bottom;">
				<img data-lazy-src="imagens/destaques/marketing2.jpg" class="primary-img image" src="data:image/gif;base64,R0lGODlhAQABAPAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" style="display: none; position: absolute; top: 0px; left: 0px; vertical-align: bottom;">
	    </div></div></div>
		<script type="text/javascript">
            $(document).ready(function(){
                $('.example-slide-left').DrSlider({
                    'transition': 'slide-left',
					'showControl': false
                });
            });
        </script>
	
	<!-- CONTAINER :: inicio :: -->
	<div id="container">
		
		<!-- SOBRE NÓS -->
        <div class="section sobre" id="section1">
			
			<h1>Sobre Nós</h1>
			
			<!-- Apresentação -->
			<div class="symb apresenta">
			<h2>Apresenta</h2>
			<p></p>
			<a href="#section2" class="bt" id="bt_apresenta">VER MAIS</a>
			</div>

			<!-- Especificações -->
			<div class="symb especifica">
			<h2>Especificações</h2>
			<p></p>
			<a href="#section3" class="bt">VER MAIS</a>
			</div>
			
			<!-- Eventos -->
			<div class="symb evento last">
			<h2>Eventos</h2>
			<p></p>
			<a href="#section4" class="bt">VER MAIS</a>
			</div>
			
		</div>
		
		<!-- CONTAINER :: fim :: -->
	</div>
	
	<div id="missao3" class="bgParallax" data-speed="5">
	
	<div class="slogan3">100.000 watts de som em 360º</div>
	
	</div>
	
	
	<!-- CONTAINER :: inicio :: -->
	<div id="container">
		
		<!-- APRESENTAÇÃO -->
        <div class="section apresentacao" id="section2">
			
			<h1>Apresentação</h1>
			<div class="menu_interno">
			<a id="bt_historial">HISTORIAL</a> | <a id="bt_finalidades">FINALIDADES</a>
			</div>
			
			<!-- HISTORIAL -->
			<div id="historial">
			<h2>HISTORIAL - O TRIO ELÉCTRICO</h2>
			<p>Em 1950, surgiu, então, a famosa dupla elétrica. Após observarem o desfile da famosa "Vassourinha", entidade carnavalesca de Pernambuco que tocava frevo na Rua Chile, e empolgados com a recetividade do bloco junto ao público, a dupla elétrica formada por Adolfo Antônio Nascimento - Dodô - e Osmar Álvares de Macêdo - Osmar - resolveu restaurar um velho Ford 1929, guardado numa garagem. No Carnaval do mesmo ano, saiu às ruas tocando seus "paus elétricos" em cima do carro e com o som ampliado por alto-falantes. A apresentação aconteceu às cinco horas da tarde do domingo de Carnaval, arrastando uma multidão pelas ruas do centro da cidade.<br><br>
			</p>
			<a href="#section2" id="display"></a>
			<div class="hide">
			<p>O nome trio eléctrico surgiu em 1951, quando, pela primeira vez, apresentou-se no Carnaval um conjunto de três instrumentistas. A "dupla eléctrica" convidou o amigo e músico Temístocles Aragão para integrar o trio e tocar nas ruas de Salvador numa picape Chrysler, modelo Fargo, maior que a "fobica" do ano anterior, em cujas laterais se liam em duas placas: "O trio eléctrico".<br>
<br>
Osmar tocava a famosa "guitarra baiana", de som agudo; Dodô era responsável pelo "violão-pau-eléctrico", de som grave, e Aragão, pelo "triolim", como era conhecido o violão tenor, de som médio. Estava formado o trio musical.<br>
<br>
Surge em 1961, o primeiro desfile público do Rei Momo, papel desempenhado pelo motorista de táxi e funcionário público Ferreirinha. No ano seguinte, surgiu o primeiro grande bloco de Carnaval, denominado "Os Internacionais", composto apenas por homens. Nesta época, a todo instante "pipocava" um trio eléctrico novo, mas os blocos iam para as ruas acompanhados somente de baterias ou grupos de percussão. Foi aí que também apareceram as famosas cordas e as mortalhas para brincar o Carnaval. Em 1965 por decreto presidencial é proibido o fabrico, a comercialização e o uso do lança-perfume, introduzido em nosso Carnaval desde 1906, importado inicialmente da França e depois da Argentina.<br>
</p>
			</div>
			</div>
			
			<!-- FINALIDADES -->
			<div id="finalidades" style="display: none;">
			<h2>FINALIDADES</h2>
			<p>O Trio Eléctrico surgiu há mais de 60 anos no Brasil para alegrar as pessoas de terra em terra. O Trio é um palco sobre rodas, com uma potência de 100.000 Watts rms em 360 graus, para espetáculos musicais.<br>
<br>
Oferece a possibilidade de realizar espetáculos em movimento ou parado, bem como de atuar em diferentes locais no mesmo dia. Isto só é possível porque as infraestruturas estão sempre prontas a funcionar. Versatilidade, flexibilidade, mobilidade e alta qualidade de som, são as principais características deste inédito produto na Europa, que garante um desempenho de alto nível profissional.<br>
<br>
Vocacionado para todo tipo de espetáculos musicais, carnavais, eventos desportivos, promoções, desfiles, atuação de DJ's, animadores e bandas que viabilizam as mais variadas vertentes do mundo espetáculos.<br>
<br>
É um cenário móvel, um espetáculo em movimento.<br>
<br>
A animação pode-se realizar com DJ's, grupos musicais, bandas brasileiras, bailarinas, etc. num cenário de 6 metros de altura.<br>
<br>
As infraestruturas estão de acordo com o funcionamento. Substitui toda a montagem de um super cenário (som, luzes) e oferece outras possibilidades.<br>
<br>
O mesmo camião pode ser também utilizado no seu espaço exterior para sponsors publicitários.<br>
<br>
O Trio Eléctrico é sucesso garantido para "eletrizar" multidões. </p>
		
			</div>
		</div>
		
	<!-- CONTAINER :: fim :: -->
	</div>
		
		<!-- ESPECIFICAÇÕES -->
		<div id="missao" class="bgParallax" data-speed="5">
		
			<div class="section especificacoes" id="section3">
			<h1>Especificações</h1>
			
				<!-- MENU Caracteristicas Tecnicas -->
				<div class="symb2 caract" id="bt_rider">
				<h2>Características Técnicas</h2>
				</div>

				<!-- MENU Planta -->
				<!-- <a id="bt_planta"> -->
				<div class="symb2 planta" id="bt_planta">
				<h2>Planta Técnica</h2>
				</div>
				<!-- </a> -->
				
				<!-- MENU Espaço Publicitario -->
				<div class="symb2 espaco last" id="bt_espaco">
				<h2>Espaço Publicitário</h2>
				</div>
			
			</div>	
				
				<!--  RIDER -->
				<div class="caixa_branca" id="rider" style="display: none;">
				<h2>Rider Técnico</h2>
				
					<!-- PAG Rider Tecnico -->
					<div class="content_caract" id="rider">
					<p>
					<b>CONSOLE</b><br>
					1 Crest Audio "Century" 52 Channel<br>
					<b>FOH DRIVE RACK</b><br>
					4 Graphic Equalizer 31 Band Klark tecnik Dn 360-Wedge<br>
					4 Graphic Equalizer 31 Band Klark tecnik Dn 360-Wedge
					   main speakers<br>
					3 Noise gates Klark tecnik  DN 514<br>
					3 Compression limiters Klark tecnik  DN 504<br>
					1 Effect Processor TC Electronics D-Two<br>
					1 Effect Processor Yamaha SPX 990<br>
					1 Effect Processor Lexicon PCM 91<br>
					4 Compression limiters DBX 160 SL<br>
					1 Dual CD Player Dennon DN 2000<br>
					1 Mini Disc Recorder Dennon DN-M10<br>
					<b>MIC</b><br>
					6 Shure Beta 58A<br>
					10 Shure Beta 57<br>
					3 Shure SM 81 LC<br>
					1 Shure Beta 91<br>
					4 Shure beta 98S<br>
					2 Shure EUT 24/58 (Wireles System handheld)<br>
					<b>DI</b><br>
					7 BSS AR 133<br>
					<b>Stage Box</b><br>
					12 BSS 604 II<br>
					2 BSS 602 II<br>
					<b>Monitor System</b><br>
					4 EAW SM 155<br>
					4 EAW SM 500 BI-Amped<br>
					4 Amps Crown Macro-tech 2402<br>
					4 Amps Crwon MA 36x12<br>
					1 Crossover BSS FDS 318<br>
					1 Sistem In-ear<br>
					<b>PA Front Side</b><br>
					5 Line Array ISSO 2x10" + 2x5"- 1060W 101 db<br>
					8 Subs ISSO 18" - 1000W 106 db<br>
					2 Amplifier Crown MA-5002 Vz Subs<br>
					3 Amplifier Crown MA-3600 Mid-Low<br>
					3 Amplifier Crown MA-2402 Hi<br>
					1 Processator "Crossover" Digital XTA DP 226<br>
					<b>Back Side</b><br>
					3 Tops Line Array EAW KF 861 3 way<br>
					1 Amplifier Crown MA-2402 Hi<br>
					1 Amplifier Crown MA-3600 Vz Mid-Hi<br>
					1 Amplifier Crown MA-3600 Vz Mid-Low<br>
					1 Processator "Crossover" Digital XTA DP<br>
					<b>Right Side</b><br>
					6 Tops Line Array EAW KF 861 3 way<br>
					2 Subs 4x18" EAW<br>
					2 Amplifier Crown MA-2402 Hi<br>
					2 Amplifier Crown MA-3600 Mid-Hi<br> 
					2 Amplifier Crown MA-5002 Mid-Low<br>
					2 Amplifier Crown MA-5002 Subs<br>
					1 Processator " crossover"<br> 
					Digital XTA DP 226<br>
					<b>Left Side</b><br>
					6 Tops Line Array EAW KF 861 3 way<br>
					2 Subs 4x18" EAW<br>
					2 Amplifier Crown MA-2402 Hi<br>
					2 Amplifier Crown MA-3600 Mid-Hi<br>
					2 Amplifier Crown MA-5002 Mid-Low<br>
					2 Amplifier Crown MA-5002 Subs<br>
					1 Processator " crossover" Digital XTA DP 226<br>
					<b>Light System</b><br>
					8 Barras de Leds PL 560 dmx<br>
					8 Par 64 Soltos<br>
					1 Mesa de Luz de 24 canais com dmx de 96 chases<br>
					4 Molefay 4x12V/ 650 W Par 36<br>
					<b>Outros</b><br>
					1 Guitar System Fender The Twin<br>
					1 Bass System Peavey KBA 300<br>
					15 Stands Mic.<br>
					1 Inside Gerator 120 Kvas<br>
					1 Inside Gerator 30 Kvas<br>
					</p>
					</div>
					
					<!-- PAG Menu Caract -->
					<div class="menu_caract">
					<a id="bt_rider1">Rider Técnico</a>
					<hr>
					<a id="bt_dimensoes">Dimensões</a>
					<hr>
					<a id="bt_autonomia">Autonomia</a>
					</div>
					
				</div>
				
				<!--  DIMENSOES -->
				<div class="caixa_branca" id="dimensoes" style="display: none;">
				<h2>Dimensões</h2>
				
					<!-- PAG Dimensões -->
					<div class="content_caract">
					<p>
					Comprimento com Truck: 18 mts.<br>
Comprimento sem Truck: 13,6 mts<br>
Largura em posição de transporte: 2,5 mts<br>
Largura em posição de show: 4 mts<br>
Área do palco: 43 m2<br>
Altura: 4 mts<br>
Altura com tenda de protecção: 6,5 mts<br>
<br>
O Trio também possui na sua área interna camarins, ar condicionado e casas de banho. 					</p>
					</div>
					
					<!-- PAG Menu Caract -->
					<div class="menu_caract">
					<a id="bt_rider2">Rider Técnico</a>
					<hr>
					<a id="bt_dimensoes2">Dimensões</a>
					<hr>
					<a id="bt_autonomia2">Autonomia</a>
					</div>
					
				</div>
				
				<!--  AUTONOMIA -->
				<div class="caixa_branca" id="autonomia" style="display: none;">
				<h2>Autonomia</h2>
				
					<!-- PAG Autonomia -->
					<div class="content_caract" align="center">
					<p>
					O Trio Eléctrico dispõe de 2 Geradores<br>
<br>
- 1 Gerador de 120 KVAS<br>
- 1 Gerador de 30 KVAS<br>
<br>
que confere uma autonomia única, que nos possibilita realizar qualquer espetáculo em qualquer local, em qualquer parte do Mundo.					</p>
					</div>
					
					<!-- PAG Menu Caract -->
					<div class="menu_caract">
					<a id="bt_rider2">Rider Técnico</a>
					<hr>
					<a id="bt_dimensoes2">Dimensões</a>
					<hr>
					<a id="bt_autonomia3">Autonomia</a>
					</div>
					
				</div>
				
				<!--  PLANTA -->
				<div class="caixa_branca" id="planta" style="display: none;">
				<h2>Planta Técnica</h2>
				
					<!-- PAG Planta -->
					<div class="content_caract sem_menu_car" align="center">
					<p>
					<img src="imagens/planta1.png" style="margin-left: 167px;"><img src="imagens/planta2.png">
					</p>
					</div>
					
				</div>
				
				<!--  ESPAÇO PUBLICITARIO -->
				<div class="caixa_branca" id="espaco" style="display: none;">
				<h2>Espaço Publicitário</h2>
				
					<!-- PAG Espaço Publicitario -->
					<div class="content_caract sem_menu_car">
					<p>O Trio Eléctrico tem espaços pré-definidos para a colocação de publicidade, para além de distribuição a partir do Trio de material promocional bem como a inclusão de "jingles publicitários" no som do Trio.</p>
					<img src="imagens/espaco_pub_trio1_16.png" style="margin-left: 75px; margin-right: 20px;">
					<img src="imagens/espaco_pub_trio2_16.png">
					<img src="imagens/espaco_pub_trio3_16.png" style="margin-top: 20px; margin-left: 90px;">
					
					<p>Todas as lonas publicitárias têm obrigatoriamente de ser microperfuradas / ortofónicas e deverão ter ilhós em todas as arestas, para fixação.</p>
					</div>
					
				</div>
				
		</div>
		
		<!-- CONTAINER :: inicio :: -->
	<div id="container">
		
		<!-- GALERIA -->
        <div class="section galeria" id="section4">
		<h1>Galeria</h1>
		<h2>Versatilidade, Flexibilidade, Mobilidade, e Alta Qualidade de Som</h2>
					
			<!-- SLIDE SHOW -->
			<div id="slideshow" style="width:980px; height:702px; display: none; position: absolute; background-image: url(imagens/black_75.png);">					
			</div>
			
			<div id="thumbs90" style="width: 980px; height: auto;">
			<!-- THUMBS -->
			<div class="thumbs trio" id="th17a"><a id="trio"><span id="th17" style="display:none;"><b>O Trio Eléctrico</b><br>O Trio Eléctrico</span></a></div>
			<div class="thumbs slb" id="th1a"><a id="benfica"><span id="th1" style="display:none;"><b>S.L.B.</b><br>Festa do 33º Título</span></a></div>
			<div class="thumbs noitebranca" id="th18a"><a id="noitebranca"><span id="th18" style="display:none;"><b>Noite Branca</b><br></span></a></div>
			<div class="thumbs caloiros" id="th9a"><a id="caloiros"><span id="th9" style="display:none;"><b>Receção aos Caloiros</b><br>Cortejo - Universidade de Faro</span></a></div>
			<div class="thumbs movistar" id="th5a"><a id="movistar"><span id="th5" style="display:none;"><b>Carnavais</b><br>Movistar</span></a></div>
			<div class="thumbs fcp" id="th2a"><a id="fcp"><span id="th2" style="display:none;"><b>F.C.P.</b><br>Campeão Europeu</span></a></div>
			<div class="thumbs vivaamerica" id="th6a"><a id="vivamerica"><span id="th6" style="display:none;"><b>VivaAmérica</b><br>Festival</span></a></div>
			<div class="thumbs vsc" id="th3a"><a id="vsc"><span id="th3" style="display:none;"><b>V.S.C.</b><br>Taça de Portugal</span></a></div>
			<div class="thumbs cocacola" id="th11a"><a id="cocacola"><span id="th11" style="display:none;"><b>Coca-Cola Zero</b><br>Lançamento da Marca</span></a></div>
			<div class="thumbs verao" id="th7a"><a id="tmn"><span id="th7" style="display:none;"><b>Festivais de Verão</b><br>Publicidade e Marketing</span></a></div>
			<div class="thumbs fcb" id="th4a"><a id="fcb"><span id="th4" style="display:none;"><b>F.C.Barcelona</b><br>Campeão Europeu</span></a></div>
			<!-- <div class="thumbs oceanos" id="th8a"><a id="oceanos"><span id="th8" style="display:none;"><b>Festival dos Oceanos</b><br>A maior onda humana</span></a></div> -->
			<div class="thumbs cannes" id="th10a"><a id="cannes"><span id="th10" style="display:none;"><b>Cannes</b><br>Carnavais</span></a></div>
			<!-- <div class="thumbs blindzero" id="th14a"><a id="blindzero"><span id="th14" style="display:none;"><b>Blind Zero</b><br>13 anos 3 cidades</span></a></div>
			<div class="thumbs cristo" id="th12a"><a id="cristo"><span id="th12" style="display:none;"><b>Cristo Redentor</b><br>Campanha 7 Maravilhas do Mundo</span></a></div>
			<div class="thumbs ponte" id="th15a"><a id="ponte"><span id="th15" style="display:none;"><b>Ponte das Lezírias</b><br>Inauguração</span></a></div>
			<div class="thumbs tropical" id="th13a"><a id="tropical"><span id="th13" style="display:none;"><b>Tropical Folia</b><br>Carnaval de Verão</span></a></div>
			<div class="thumbs festrack" id="th16a"><a id="festrack"><span id="th16" style="display:none;"><b>Festrack</b><br>Festival</span></a></div> -->
			</div>
			
		</div>
		
		<!-- CONTAINER :: fim :: -->
	</div>

		<!-- VIDEOS -->
		<div class="section videos" id="section5">
		<h1>Vídeos</h1>
		</div>
		
		<div style="width: 1280px; height:400px; overflow: hidden; margin-left: auto; margin-right: auto; margin-bottom: 30px;">
		<video width="1280" height="720" autoplay="" loop="" muted="" style="position: relative; top: 0; left:0; bottom: 0; margin-top: -300px; margin-left: 0px; z-index: -1;">
		<source src="benfica_12s.ogg" type="video/ogg">
		<source src="benfica_12s.webmhd.webm" type="video/webm">
		</video>
		
		<div style="width: 100%; height: 400px; margin-top: -375px; z-index:90; display: block;" align="center">
		
		<a href="https://www.youtube.com/watch?v=sETrcRjREvg" target="_blank"><img src="imagens/video6.jpg" class="thumb_video"></a>
		
		<a href="https://www.youtube.com/watch?v=QWOntNxpoyE" target="_blank"><img src="imagens/video5.jpg" class="thumb_video"></a>
		
		<a href="https://www.youtube.com/watch?v=Tofvdd6O248" target="_blank"><img src="imagens/video1.jpg" class="thumb_video last"></a>
		
		
		
		<div style="width: 100%; height: auto; overflow:hidden; display:block; margin-top: 30px;" align="center">
		
		<a href="https://www.youtube.com/watch?v=3eXNjwkN0NI" target="_blank"><img src="imagens/video2.jpg" class="thumb_video"></a>
		
		<a href="https://www.youtube.com/watch?v=IkrCiV-G6hI" target="_blank"><img src="imagens/video3.jpg" class="thumb_video"></a>
		
		<a href="https://www.youtube.com/watch?v=N6Q7dLKhGIY" target="_blank"><img src="imagens/video4.jpg" class="thumb_video last"></a>
		
		</div>
		
		</div>
		
		</div>
		
		<!-- <div id="missao2" class="bgParallax2" data-speed="5">
			<div class="lista_videos">
			<div class="thumbs_video">
				<a href="https://www.youtube.com/watch?v=rAUkXI5Cz4w" target="_blank"><img src="imagens/video1.jpg" class="thumb_video"></a><a href="https://www.youtube.com/watch?v=8b7_r7kjYB0" target="_blank"><img src="imagens/video2.jpg" class="thumb_video"></a><a href="https://www.youtube.com/watch?v=IkrCiV-G6hI" target="_blank"><img src="imagens/video3.jpg" class="thumb_video"></a><a href="https://www.youtube.com/watch?v=nc8vINqwS3w" target="_blank"><img src="imagens/video4.jpg" class="thumb_video last"></a>
			</div>
			</div>
		</div> -->
		
		<!-- CONTACTOS -->
		<div class="section contactos" id="section6">
		<h1>Contactos</h1>
			
			<div class="contacto">
				
				<!-- Mapa -->
				<div class="contacto_col" style="width: 200px;">&nbsp;</div>
				
				<!-- Morada -->
				<div class="contacto_col" style="width: 100%; text-align:center;">
				<p style="text-align:center;">CV MUSIC</p>
				<p>
								
				</p><p style="text-align:center;">Telefone<br>
				<span>Tlm: +351 93 933 7287</span></p>
				
				<p style="text-align:center;">E-mail<br>
				<span>E-mail: <a href="mailto:geral@trioelectrico.com" target="_blank" style="color:#FFF;">geral@trioelectrico.com</a></span><br>
				<span>E-mail: <a href="mailto:geral@cvmusic.pt" target="_blank" style="color:#FFF;">geral@cvmusic.pt</a></span><br>
				<span>E-mail: <a href="mailto:carlosfilipe@cvmusic.pt" target="_blank" style="color:#FFF;">carlosfilipe@cvmusic.pt</a></span></p>
				
				<a href="https://www.youtube.com/channel/UCSs3OwN0vLt5xFZ1N_s89rg" class="redes youtube" target="_blank" style="float: none; display: inline-block;"></a><a class="redes facebook" href="https://pt-pt.facebook.com/trioelectrico" target="_blank" style="float: none; display: inline-block;"></a>
				</div>
				
			</div>
		
		</div>
	


</body></html>