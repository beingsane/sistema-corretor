<div class="container-fluid">
<div class="container wrapper">

	<div class="row">
		<div class="col-sm">
		
			<form action="/home/login" method="POST" class="form-login">
			<img src="/img/img-login.png" class="img-fluid img-login mx-auto d-block">
			<br/>

				<h5 class="form-login-cabecalho">Autentique-se para continuar!</h5>
				  
				<div class="form-group">
    				<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Seu email" required>
  				</div>
  
  				<div class="form-group">
    				<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
  				</div>
  
				<button type="submit" name="login" class="btn btn-primary btn-block btn-login btn-lg">Enviar</button>
				
				<?php if(!empty($data['mensagem'])) {
					foreach($data['mensagem'] as $m) {
						echo " <br/> <div class='alert alert-danger'>". $m . '</div>';
					}
				} 
				?>
			</form>
		</div>
	</div>
</div>
</div>