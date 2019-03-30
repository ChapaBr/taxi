<?php
require_once('layouts/header-1.php');
?>

<section id="index">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Welcome Again</h3>
					</div>
				  <div class="card-body text-center">
				  	<img src="assets/images/logo.svg">
				    <form action="controller/logar.php" method="post">
					  <div class="form-row align-items-center">
					    <div class="col-12">
					      <label class="sr-only" for="inputEmail">Email</label>
					      <div class="input-group mb-2">
					        <div class="input-group-prepend">
					          <div class="input-group-text icon"><i class="fas fa-at"></i></div>
					        </div>
					        <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
					      </div>
					    </div>
					    <div class="col-12">
					      <label class="sr-only" for="inputSenha">Senha</label>
					      <div class="input-group mb-2">
					        <div class="input-group-prepend">
					          <div class="input-group-text icon"><i class="fas fa-key"></i></div>
					        </div>
					        <input type="password" class="form-control" id="inputSenha" name="inputSenha" placeholder="Senha">
					      </div>
					    </div>
					    <div class="col-12">
					      <button type="submit" class="btn btn-primary col-12">Logar</button>
					    </div>
					  </div>
					</form>
				  </div>
				  <div class="card-footer">
				  	<small class="card-text">
				  		Pelo login. Eu aceito os <br/><strong>Termos de Serviço</strong> e <strong>Politica de Privacidade</strong>.
				  	</small>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
require_once('layouts/footer-1.php');
?>