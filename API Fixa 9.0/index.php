<!-- VARIÁVEIS -->
<?php
	$whatsapp = 'xxxxxxxxxxxxxxxxxxxxxxx'; //DA FORMA QUE É PARA ESTAR DENTRO DO LINK COM +55. EX: +5541996037176
	$telefone_back = 'xxxxxxxxxxxxxxxxxxxxxxx'; //DA FORMA QUE É PARA ESTAR DENTRO DO LINK SEM +55. EX: 04133333333
	$telefone_front = 'xxxxxxxxxxxxxxxxxxxxxxx'; //DA FORMA QUE É PARA APARECER NA TELA. EX: (41) 3333-3333
	$shortcode_email = 'xxxxxxxxxxxxxxxxxxxxxxx'; //PEGAR O SHORTCODE DO FORMULÁRIO DO CONTACR FORMS 7
	$url_site = 'xxxxxxxxxxxxxxxxxxxxxxx'; //SEM BARRA. EX: https://forteazul.com.br
?>
<!-- CSS DA API -->
<link rel="stylesheet" href="http://projetos.agenciaalper.com.br/seo/api/style.css">
<!-- JS DA API -->
<script type="text/javascript" src="http://projetos.agenciaalper.com.br/seo/api/js.js"></script>
<!-- HTML DA API -->
<div class="api-contato">
	<div class="floating-card z-depth" id="floating-card">
		<div class="floating-card-header">
			<span class="close-floating-card close_api" onclick="fechar_api_contato();">&times</span>
			<span>Fale Conosco</span>
			<p>Solicite um orçamento sem compromisso!</p>
		</div>
		<div class="floating-card-body">
			<div class="floating-card-body-main-content z-depth">
				<div class="floating-card-body-row">
					<div class="column-12">
						<form method="post">
							<textarea id="z-depth" placeholder="Digite sua mensagem" class="z-depth"></textarea>
						</form>
					</div>
				</div>
			</div>
			<span>Enviar via</span>
			<div class="floating-card-body-row">
				<div class="column-6">
					<a class="floating-card-whatsapp-btn" target="_blank" onclick="gtag('event', 'Clique', {'event_category':'Contato', 'event_label':'Whatsapp', 'value':1});"><i class="fa fa-whatsapp"></i>Whatsapp</a>
				</div>
				<div class="column-6">
					<a href="#api_contato_email" class="floating-card-email-btn" onclick="abrir_sidebar_email();"><i class="fa fa-envelope"></i>E-mail</a>
				</div>
				<div class="column-12">
					<div class="api-contato-telefone">
						<span>Ou ligue para <b><?php echo $telefone_front; ?></b></span>
						<div class="api-contato-telefone-mobile">
							<span>Se preferir, ligue para nós!</span>
							<a href="tel:<?php echo $telefone_back; ?>" class="api-contato-telefone-btn" onclick="gtag('event', 'Ligação', {'event_category':'Contato', 'event_label':'Telefone', 'value':1});"><i class="fa fa-phone"></i>Ligar agora!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="floating-message">
		<span>Clique aqui para falar conosco!</span>
		<div id="floating-arrow"></div>
	</div>
	<div class="floating-btn pulse" id="floating-btn-open" onclick="abrir_api_contato();">
		<span><i class="fa fa-whatsapp" id="iconID"></i></span>
	</div>
	<div class="floating-btn close_api" id="floating-btn-close" onclick="fechar_api_contato();">
		<span>&times</span>
	</div>
	<!-- SIDEBAR E-MAIL -->
	<div id="api_contato_sidebar_email" class="z-depth">
		<div class="api_contato_sidebar_email_header">
			<span class="fechar_sidebar_email" onclick="fechar_sidebar_email();">&times</span>
			<span>Envie-nos um E-mail</span>
		</div>
		<div class="api_contato_sidebar_email_body">
			<div class="api_contato_sidebar_email_body_content z-depth">
				<?php echo do_shortcode($shortcode_email);?>
			</div>
		</div>
	</div>
	<!-- PELÍCULA -->
	<div id="pelicula_sidebar_email" onclick="fechar_sidebar_email();"></div>
</div>
<!-- COOKIE PARA FECHAMENTO PERMANENTE DA API -->
<?php
	if(isset($_COOKIE['fechado'])){
		?>
		<script type="text/javascript">
			(function($) {
				setTimeout(function(){
					fechar_api_contato();
				}, 1000);
			})( jQuery );
		</script>
		<?php
	}
?>
<!-- APLICA COOKIE AO FECHAR A API -->
<script type="text/javascript">
	jQuery(document).ready(function( $ ) {
		$('.close_api').click(function(){
			var fechado = 'sim';
			$.ajax({
				url: "<?php echo $url_site;?>/session.php",
				dataType: "html",
				type: "POST",
				data: {
					fechado: fechado,
				},
				success:function(data){
					console.log(data);
				},
				error: function (request, status, error) {
					console.log(data);
				}
			});
		})
	});
	/*INICIO MEDIA QUERY - CLIQUE DO WHATSAPP*/
	jQuery(document).ready(function($){
	  function myFunctionAPI(x) {
	    if (x.matches) { // If media query matches
	      function openInNewTab(url) {
	        var win = window.open(url, '_blank');
	        win.focus();
	      }
	      $('#z-depth').keyup(function(){
	        var text = $.trim($("#z-depth").val());
	        $('.wpcf7-form-control-wrap textarea').val(text);
	      });
	      $('.floating-card-whatsapp-btn').click(function(){
	        var text = $.trim($("#z-depth").val());

	        if (text.length > 1) {
	          var url_wpp = 'https://api.whatsapp.com/send?l=pt_br&phone=<?php echo $whatsapp; ?>&text=' + text;
	          openInNewTab(url_wpp);
	        }else{
	          alert("Por favor, digite a sua mensagem antes de tentar enviar!");
	        }
	      });
	    } else {
	      function openInNewTab(url) {
	        var win = window.open(url, '_blank');
	        win.focus();
	      }
	      $('#z-depth').keyup(function(){
	        var text = $.trim($("#z-depth").val());
	        $('.wpcf7-form-control-wrap textarea').val(text);
	      });
	      $('.floating-card-whatsapp-btn').click(function(){
	        var text = $.trim($("#z-depth").val());

	        if (text.length > 1) {
	          var url_wpp = 'https://web.whatsapp.com/send?l=pt_br&phone=<?php echo $whatsapp; ?>&text=' + text;
	          openInNewTab(url_wpp);
	        }else{
	          alert("Por favor, digite a sua mensagem antes de tentar enviar!");
	        }
	      });
	    }
	  }
	  var x = window.matchMedia("(max-width: 599px)")
	  myFunctionAPI(x) // Call listener function at run time
	  x.addListener(myFunctionAPI) // Attach listener function on state changes
	});
	/*FIM MEDIA QUERY - CLIQUE DO WHATSAPP*/
</script>