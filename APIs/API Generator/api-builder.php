<?php
    // AGRADECIMENTO
    $nome = $_POST['nome'];
	// API 
    $cor = $_POST['cor'];
    $telefone = $_POST['telefone'];
    $dominio = $_POST['dominio'];
    $titulo_modal = $_POST['titulo_modal'];
    $contact_forms = $_POST['contact_forms'];
    // WHATSAPP
    $whatsapp = $_POST['whatsapp'];
    //GOOGLE ANALYTICS
    $analytics_script = $_POST['analytics_script'];
    //GOOGLE ADS
    $global_script = $_POST['global_script'];
    // CONVERSÕES
    $whatsapp_conversion = $_POST['whatsapp_conversion'];
    $form_conversion = $_POST['whatsapp_conversion'];


?>

<?php

ob_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>API de Contato 6.0.0</title>
	<meta charset="utf-8">
</head>
<body>
<style type="text/css">
    /*VARIABLES APPLICATION*/
    #api-contact-block, #btn-close-api-contact-block, .api-contact-cards, .api-contact-mobile{
        background: <?php echo $cor;?>;
    }
    .api-contact-section-button a, .api-contact-section-button a{
        color: <?php echo $cor;?>;
    }
	/*BEGIN API BLOCK CODE*/
	body{
		margin: 0;
	}
	/*BLOCK*/
	#api-contact-block hr {
		width: 100px;
		margin: 10px auto 15px;
	}
	#api-contact-block {
		width: 170px;
		text-align: center;
		position: fixed;
		top: 35vh;
		right: 0;
		color: white;
		padding: 10px;
		font-family: 'calibri';
		border-bottom-left-radius: 10px;
		transition-property: all;
		transition-duration: .5s;
		z-index: 999999999;
		box-shadow: 0 24px 38px 10px rgba(0,0,0,0.15), 0 9px 46px 8px rgba(0,0,0,0.22), 0 11px 15px -7px rgba(0,0,0,0.2);
	}
	/*BUTTON WITH 'X' TO CLOSE THE BLOCK*/
	#btn-close-api-contact-block {
		right: 170px;
		position: fixed;
		top: 35vh;
		padding: 5px 10px;
		color: white;
		font-family: calibri;
		border-bottom-left-radius: 10px;
		transition-property: all;
		transition-duration: .5s;
		cursor: pointer;
		z-index: 999999999999999;
	}
	/*BLOCK'S HEADER*/
	.api-contact-header span {
		font-size: 18px;
		font-weight: 600;
	}
	/*BUTTONS ON API CONTACT BLOCK*/
	.api-contact-section-icon i {
		font-size: 25px;
	}
	.api-contact-section-button {
		padding: 10px 5px 25px;
	}
	.api-contact-section-button a {
		background: white;
		padding: 10px 15px;
		text-decoration: none;
		border-radius: 2.5px;
		transition-duration: .2s;
		transition-property: all;
	}
	.api-contact-section-button a:hover{
		padding: 10px 25px;
		transition-duration: .2s;
		transition-property: all;
	}
	.api-contact-section-button i {
		margin-right: 5px;
	}
	/*END API BLOCK CODE*/
	/*BEGIN LITTLE CARDS CODE*/
	.api-contact-cards{
		width: 200px;
		position: fixed;
		right: -150px;
		top: 35vh;
		z-index: 9999999;
		transition-property: all;
		transition-duration: .3s;
		border-radius: 10px;
		box-shadow: 0 24px 38px 10px rgba(0,0,0,0.15), 0 9px 46px 8px rgba(0,0,0,0.22), 0 11px 15px -7px rgba(0,0,0,0.2);
	}
	.api-contact-cards .col-3 {
		width: 25%;
		float: left;
	}
	.api-contact-cards .col-9 {
		width: 75%;
		float: left;
	}
	.api-contact-cards .row {
		margin: 0 !important;
		color: white;
		padding: 15px;
	}
	.api-contact-cards i {
		font-size: 20px;
	}
	/*END LITTLE CARDS CODE*/
	/*BEGIN API CONTACT ON MOBILE*/
	@media(max-width: 766px){
		#btn-close-api-contact-block, #api-contact-block, .api-contact-cards{
			display: none;
		}
		.api-contact-mobile{
			display: inline-block;
		}
	}
	@media(min-width: 767px){
		#btn-close-api-contact-block, #api-contact-block, .api-contact-cards{
			display: inline-block;
		}
		.api-contact-mobile{
			display: none;
		}
	}
	/*BEGIN API CONTACT MOBILE*/
	.api-contact-mobile{
		position: fixed;
		bottom: 0;
		width: 100%;
		color: white;
		text-align: center;
		font-family: 'calibri';
		z-index: 99999999999;
		padding: 0 15px;
	}
	.api-contact-mobile .col-4 {
		width: 33.3333333%;
		padding: 10px 0;
		float: left;
	}
	.api-contact-mobile a{
		color: white;
	}
	.api-contact-mobile span{
		width: 100%;
		float: left;
	}
	@media(max-height: 250px){
		.api-contact-mobile{
			display: none;
		}
	}
	/*END API CONTACT MOBILE*/
	/*BEGIN EMAIL MODAL*/
	#email-modal{
		opacity: 0;
		visibility: hidden;
		transition: visibility 0s, opacity 0.5s linear;
	}
	#email-modal {
		position: fixed;
		width: 100%;
		height: 100vh;
		background: rgba(0,0,0,0.75);
		z-index: 99999999999;
	}
	.modal-content {
		background: white;
		width: 500px;
		margin: auto;
		text-align: center;
		margin-top: 25px;
		font-family: 'calibri';
		overflow-y: scroll;
		box-shadow: 0 24px 38px 10px rgba(0,0,0,0.15), 0 9px 46px 8px rgba(0,0,0,0.22), 0 11px 15px -7px rgba(0,0,0,0.2);
	}
	.modal-content .close-moda-email {
		float: right;
		background: red;
		padding: 5px 10px;
		color: white;
		font-weight: 800;
		font-size: 20px;
		cursor: pointer;
	}
	.modal-content .modal-title{
		font-size: 20px;
		text-transform: uppercase;
		letter-spacing: 2px;
		padding: 15px;
		color: #000;
		font-weight: 600;
	}
	.modal-header {
		padding: 0 !important;
		border-bottom: none !important;
		min-height: 0;
	}
	.modal-body {
		padding: 0 25px;
	}
	.modal-body label, .modal-body input, .modal-body textarea {
		width: 100%;
		font-weight: 600;
		font-family: 'calibri';
		text-align: left;
	}
	.modal-body input, .modal-body textarea {
		color: #000;
		background-color: white;
		border-radius: 5px;
		border: 1px solid <?php echo $cor;?>;
	}
	.modal-content form p{
		margin: 0 0 10px;
		text-align: center;
	}
	.modal-content input[type="submit"] {
		color: white !important;
		font-weight: 800;
		text-transform: uppercase;
		letter-spacing: 2px;
		padding: 15px 0;
		width: 50%;
		text-align: center;
		box-shadow: 0 24px 38px 10px rgba(0,0,0,0.15), 0 9px 46px 8px rgba(0,0,0,0.22), 0 11px 15px -7px rgba(0,0,0,0.2);
		border: none !important;
		background-color: <?php echo $cor;?>;
		margin: auto;
	}
	@media(max-width: 599px){
		.modal-header {
			padding: 0 !important;
			border-bottom: none !important;
			min-height: 0;
			position: fixed;
			background: white;
			width: 100%;
			z-index: 9999;
		}
		.modal-content {
			width: 100%;
			margin-top: 15px;
			height: 100vh;
			padding-bottom: 100px;
		}
		.modal-body {
			margin-top: 75px;
		}
	}
	/*END EMAIL MODAL*/
</style>
<div id="api-contact">
	<!-- BEGIN API BLOCK -->
	<div id="btn-close-api-contact-block" onclick="close_api_contact_block()">
		<span>&times;</span>
	</div>
	<div id="api-contact-block">
		<div class="api-contact-header">
			<span>Fale Conosco</span>
			<hr>
		</div>
		<div class="api-contact-body">
			<div class="api-contact-whatsapp-section">
				<div class="api-contact-section">
					<div class="api-contact-section-icon">
						<i class="fa fa-whatsapp"></i>
					</div>
					<div class="api-contact-section-title">
						<span>Whatsapp</span>
					</div>
					<div class="api-contact-section-button">
						<a href="https://<?php echo $dominio;?>/whatsapp.html" class="btn-api-contact" target="_blank"><i class="fa fa-angle-right"></i>Clique aqui</a>
					</div>
				</div>
			</div>
			<div class="api-contact-email-section">
				<div class="api-contact-section">
					<div class="api-contact-section-icon">
						<i class="fa fa-envelope"></i>
					</div>
					<div class="api-contact-section-title">
						<span>E-mail</span>
					</div>
					<div class="api-contact-section-button">
						<a href="#" class="btn-api-contact" onclick="open_modal_email()"><i class="fa fa-angle-right"></i>Clique aqui</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END API BLOCK -->
	<!-- BEGIN API CARDS -->
	<div class="api-contact-cards" onmouseover="open_block()">
		<div class="api-contact-whatsapp-cardn">
			<div class="row">
				<div class="col-3">
					<i class="fa fa-whatsapp"></i>
				</div>
				<div class="col-9">
					Clique aqui
				</div>
			</div>
		</div>
		<div class="api-contact-email-card">
			<div class="row">
				<div class="col-3">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="col-9">
					<span>Clique aqui</span>
				</div>
			</div>
		</div>
	</div>
	<!-- END API CARDS -->
	<!-- BEGIN API CONTACT MOBILE -->
	<div class="api-contact-mobile">
		<div class="row">
			<a href="tel:<?php echo $telefone;?>" class="col-4">
				<i class="fa fa-phone"></i>
				<span>Telefone</span>
			</a>
			<a href="https://<?php echo $dominio;?>/whatsapp-mobile.html" class="col-4" target="_blank">
				<i class="fa fa-whatsapp"></i>
				<span>Whatsapp</span>
			</a>
			<a href="#" class="col-4" onclick="open_modal_email()">
				<i class="fa fa-envelope"></i>
				<span>E-mail</span>
			</a>
		</div>
	</div>
	<!-- END API CONTACT MOBILE -->
	<!-- The Modal -->
	<div id="email-modal"> 
		<div class="modal-content"> 
			<div class="modal-header">
				<span class="close-moda-email" onclick="close_modal_email()">&times;</span> 
				<div class="modal-title"><?php echo $titulo_modal;?></div>
			</div>
			<div class="modal-body">
				<?php echo'<?php echo do_shortcode(\''.$contact_forms.'\');?>';?>
			</div>
		</div>
	</div>
</div>

<!-- SCRIPT TO CLOSE API BLOCK -->
<script type="text/javascript">
	function close_api_contact_block(){document.getElementById("btn-close-api-contact-block").style.right="-210px";document.getElementById("api-contact-block").style.right="-210px"}
	function open_block(){document.getElementById("btn-close-api-contact-block").style.right="170px";document.getElementById("api-contact-block").style.right="0px"}

	// MODAL
	function open_modal_email(){document.getElementById("email-modal").style.opacity="1", document.getElementById("email-modal").style.visibility="visible"}
	function close_modal_email(){document.getElementById("email-modal").style.opacity="0", document.getElementById("email-modal").style.visibility="hidden"}
</script>	
</body>
</html>

<?php
$html = ob_get_contents();
ob_end_clean();

file_put_contents('arquivo.html', $html);

?>


<!-- 'AGRADECIMENTO' GENERATOR-->
<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Obrigado por entrar em com a <?php echo $nome; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilo-destino.css">
	<meta charset="utf-8">
	<!-- TAG DE REDIRECIONAMENTO PARA UMA URL DEPOIS DE 3s NA PÁGINA - SUBSTITUIR A SEQUÊNCIA DE 'X' PELA URL DA PÁGINA INICIAL DO SITE -->
	<meta http-equiv="refresh" content="5;https://<?php echo $dominio; ?>/" />
	<!-- TAGS -->
	<?php echo $analytics_script; ?>
	<?php echo $global_script; ?>
	<?php echo $form_conversion; ?>
</head>
<body>
	<div class="row">
		<div class="col col-sm-12 col-md-6 left-side">
			<p>Obrigado por Entrar <br>em Contato Conosco</p>
		</div>
		<div class="col col-sm-12 col-md-6 right-side">
			<!-- NOME DA EMPRESA -->
			<h1><?php echo $nome; ?></h1>
			<h4>Recebemos o seu e-mail! Estaremos lhe respondendo assim que possível.</h4>
			<p>Redirecionando para o site...</p>
			<!-- INSERIR URL DA PÁGINA INICIAL DO SITE -->
			<br>
			<a href="https://<?php echo $dominio; ?>/">Voltar para o site agora!</a>
		</div>
	</div>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
file_put_contents('agradecimento.html', $html);
?>


<!-- 'ESTILO-DESTINO.CSS' GENERATOR-->
<?php
ob_start();
?>
body {
    margin: 0;
    font-family: calibri
}
h3 {
    font-weight: 300;
    font-size: 20px
}
h4{
	font-size: 20px;
}
.left-side p {
    color: #fff;
    font-weight: 100;
    font-size: 30px;
    text-align: left;
    margin-top: 40vh;
    font-family: calibri;
    margin-left: 50px
}
.row {
    width: 100%
}
.col-md-6 {
    width: 50%;
    max-width: 50%
}
@media(max-width:768px) {
    .left-side p {
        font-size: 30px;
        text-align: center;
        margin-top: 40vh;
        margin: 0;
        margin-top: 40px;
        font-family: calibri
    }
    .col-sm-12 {
        width: 100%!important;
        max-width: 100%!important
    }
}
.col {
    float: left
}
.left-side {
	background-color: <?php echo $cor;?>;
    height: 100vh;
}
.right-side {
    text-align: center;
    padding-top: 30vh
}
@media(max-width:768px) {
    .left-side {
        height: 35vh
    }
    .right-side {
        padding-top: 5vh
    }
}
body>div>div.col.col-sm-12.col-md-6.right-side>a {
    background: <?php echo $cor;?>;
    text-decoration: none;
    color: #fff;
    padding: 25px;
    border-radius: 10px;
}
<?php
$html = ob_get_contents();
ob_end_clean();
file_put_contents('estilo-destino.css', $html);

?>


<!-- 'WHATSAPP.HTML' GENERATOR-->
<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Redirecionando para o Whatsapp WEB da <?php echo $nome; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- TAG DE REDIRECIONAMENTO PARA O WHATSAPP DEPOIS DE 2s NA PÁGINA - SUBSTITUIR A SEQUÊNCIA DE 'X' PELO NÚMERO DO CLIENTE COM DDD -->
	<meta http-equiv="refresh" content="2;https://web.whatsapp.com/send?l=pt_br&phone=<?php echo $whatsapp; ?>&text=Olá%2C%20gostaria%20de%20maiores%20informações%20sobre" />
	<link rel="stylesheet" type="text/css" href="estilo-destino.css">
	<!-- TAGS -->
	<?php echo $analytics_script; ?>
	<?php echo $global_script; ?>
	<?php echo $whatsapp_conversion; ?>
</head>
<body>
	<div class="row">
		<div class="col col-sm-12 col-md-6 left-side">
			<p>Obrigado por Entrar <br>em Contato Conosco</p>
		</div>
		<div class="col col-sm-12 col-md-6 right-side">
			<!-- NOME DA EMPRESA -->
			<h1><?php echo $nome; ?></h1>
			<h3>Redirecionando para o Whatsapp...</h3>
			<p>Por favor, aguarde</p>
		</div>
	</div>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
file_put_contents('whatsapp.html', $html);
?>

<!-- 'WHATSAPP-MOBILE.HTML' GENERATOR-->
<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Redirecionando para o Whatsapp Mobile da <?php echo $nome; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- TAG DE REDIRECIONAMENTO PARA O WHATSAPP DEPOIS DE 2s NA PÁGINA - SUBSTITUIR A SEQUÊNCIA DE 'X' PELO NÚMERO DO CLIENTE COM DDD -->
	<meta http-equiv="refresh" content="2;https://api.whatsapp.com/send?l=pt_br&phone=<?php echo $whatsapp; ?>&text=Olá%2C%20gostaria%20de%20maiores%20informações%20sobre" />
	<link rel="stylesheet" type="text/css" href="estilo-destino.css">
	<!-- TAGS -->
	<?php echo $analytics_script; ?>
	<?php echo $global_script; ?>
	<?php echo $whatsapp_conversion; ?>
</head>
<body>
	<div class="row">
		<div class="col col-sm-12 col-md-6 left-side">
			<p>Obrigado por Entrar <br>em Contato Conosco</p>
		</div>
		<div class="col col-sm-12 col-md-6 right-side">
			<!-- NOME DA EMPRESA -->
			<h1><?php echo $nome; ?></h1>
			<h3>Redirecionando para o Whatsapp...</h3>
			<p>Por favor, aguarde</p>
		</div>
	</div>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
file_put_contents('whatsapp-mobile.html', $html);

header("Location: http://projetos.agenciaalper.com.br/api/links.html"); /* Redirect browser */
exit();
?>