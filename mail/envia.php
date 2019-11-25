<?php

if (isset($_POST)) {

	foreach($_POST as $nome_campo => $valor){ 
	   $comando = "\$" . $nome_campo . "='" . $valor . "';"; 
	   eval($comando); 
	} 

		
		
	require_once("../phpmailer/class.phpmailer.php");
	require_once("../phpmailer/class.smtp.php");
	 
	

	//envia o e-mail para o visitante do site
		$mailDestino = $_POST['email'];
		$nome = $_POST['nome'];
		$assunto = "Contato CRB Construtora";
		$mensagem = '
		<div class="mensagem" style="width: 500px; margin: auto; display: block; padding: 15px 10px; border: 1px solid #222; background-color: #eee; font: 500 15px Arial;">
			<div class="titulo" style="font: 500 23px Arial; width: 100%; margin-bottom: 10px; text-align: center;">
				Contato via site
			</div>
			<div class="conteudo" style="width: 95%; margin: 0 auto; display: block; background-color: #eee; padding: 10px 3px;">
				<p>
					Obrigado pelo seu contato, responderemos em breve.
				</p>
			</div>
		</div>
		';
		include("envio.php");

		//envia o e-mail para o administrador do site
		$mailDestino = 'joaonixs@gmail.com'; 
		$assunto = "Mensagem recebida do site";
		$mensagem = '
		<div class="mensagem" style="width: 500px; margin: auto; display: block; padding: 15px 10px; border: 1px solid #222; background-color: #eee; font: 500 15px Arial;">
			<div class="titulo" style="font: 500 23px Arial; width: 100%; margin-bottom: 10px; text-align: center;">
				CRB, contato realizado pelo site.
			</div>
			<div class="conteudo" style="width: 95%; margin: 0 auto; display: block; background-color: #eee; padding: 10px 3px;">
				<p>
					<b>Nome:</b> '.$nome.'
				</p>

				<p>
					<b>E-mail:</b> '.$email.'
				</p>

				<p>
					<b>Telefone:</b> '.$telefone.'
				</p>

				<p>
					<b>Estado:</b> '.$state.'
				</p>

				<p>
					<b>Cidade:</b> '.$city.'
				</p>

				<p>
					<b>Mensagem:</b> '.$message.'
				</p>

				<br>
			</div>
		</div>
	';
		include("envio.php");
}
?>