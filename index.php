<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<form name="CRBform" action="mail/envia.php" onsubmit="return validateForm()" method="post">
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<input type="text" name="nome" class="form-control" placeholder="Nome">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<input type="text" name="email" class="form-control" placeholder="E-mail">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<input type="text" name="telefone" class="telefone form-control" placeholder="Telefone">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<select id="estado" class="form-control" name="estado" onchange="buscaCidades(this.value)">
							<option value="#" disabled selected>Selecione o estado</option>
						    <option value="AC">Acre</option>
						    <option value="AL">Alagoas</option>
						    <option value="AP">Amapá</option>
						    <option value="AM">Amazonas</option>
						    <option value="BA">Bahia</option>
						    <option value="CE">Ceará</option>
						    <option value="DF">Distrito Federal</option>
						    <option value="ES">Espírito Santo</option>
						    <option value="GO">Goiás</option>
						    <option value="MA">Maranhão</option>
						    <option value="MT">Mato Grosso</option>
						    <option value="MS">Mato Grosso do Sul</option>
						    <option value="MG">Minas Gerais</option>
						    <option value="PA">Pará</option>
						    <option value="PB">Paraíba</option>
						    <option value="PR">Paraná</option>
						    <option value="PE">Pernambuco</option>
						    <option value="PI">Piauí</option>
						    <option value="RJ">Rio de Janeiro</option>
						    <option value="RN">Rio Grande do Norte</option>
						    <option value="RS">Rio Grande do Sul</option>
						    <option value="RO">Rondônia</option>
						    <option value="RR">Roraima</option>
						    <option value="SC">Santa Catarina</option>
						    <option value="SP">São Paulo</option>
						    <option value="SE">Sergipe</option>
						    <option value="TO">Tocantins</option>
						    <option value="EX">Estrangeiro</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<select id="cidade" class="form-control" name="cidade">
							<option value="#" disabled selected>Selecione a cidade</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<textarea name="mensagem" class="form-control" id="" cols="30" rows="7" placeholder="Mensagem"></textarea>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<input type="submit" value="Submit">
				</div>
			</div>
		</div>
	</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>