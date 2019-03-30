<?php
session_start();
require_once('layouts/header.php');
?>
<?php include_once('layouts/sidebar.php'); ?>
<main class="main">
  <section id="motoristas">
    <div class="container-fluid">
      <div class="animated fadeIn">
        <div class="text-center">
          <h2>Motoriastas</h2>
        </div>
      <div class="row">
    	<div class="col-lg-6 col-sm-6">
          <div class="row text-center">
            <div class="accordion" id="accordionExample">
			  <div class="card">
			    <div class="card-header" id="headingOne">
			      <h2 class="mb-0">
			        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#motorista-teste" aria-expanded="true" aria-controls="collapseOne">
			          <h3>Nome Motoristas</h3>
			        </button>
			        <form method="post" action="#">
				    	<input type="hidden" name="returnId" value="motorista-teste">
				    	<input type="hidden" name="motorista-teste" value="true">
				    	<button class="btn btn-danger btn-edit" type="submit">
				    		Excluir
				    	</button>
			    	</form>
			    	<form method="post" action="#">
				    	<input type="hidden" name="returnId" value="ID DO MOTORISTA">
				    	<button class="btn btn-info btn-edit" type="submit">
				    		Editar
				    	</button>
					</form>
			      </h2>
			    </div>

			    <div id="motorista-teste" class="collapse">
			      <div class="card-body">
			        <table class="table">
				  <thead class="thead-dark">
				    <tr class="text-center">
				      <th></th>
				      <th>INFORMAÇÕES</th>
				      <th></th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th>Nome</th>
				      <td></td>
				      <td>Nome de Alguem</td>
				    </tr>
				    <tr>
				      <th>CNH</th>
				      <td></td>
				      <td>Sobre Nome de Alguem</td>
				    </tr>
				    <tr>
				      <th>Email</th>
				      <td></td>
				      <td>Email de Alguem</td>
				    </tr>
				    <tr>
				      <th>Idade</th>
				      <td></td>
				      <td>Apelido de Alguem</td>
				    </tr>
				    <tr>
				      <th>Telefone</th>
				      <td></td>
				      <td>Telefone de Alguem</td>
				    </tr>
				    <tr>
				      <th>Celular</th>
				      <td></td>
				      <td>Celular de Alguem</td>
				    </tr>
				    <tr>
				      <th>Carro</th>
				      <td></td>
				      <td>CEP de Alguem</td>
				    </tr>
				    <tr>
				      <th>Marca</th>
				      <td></td>
				      <td>Algum Estado</td>
				    </tr>
				    <tr>
				      <th>Cor</th>
				      <td></td>
				      <td>Essa Cidade</td>
				    </tr>
				    <tr>
				      <th>Placa</th>
				      <td></td>
				      <td>Algum Bairro</td>
				    </tr>
				    <tr>
				      <th>CEP</th>
				      <td></td>
				      <td>Rua das Ruas</td>
				    </tr>
				    <tr>
				      <th>Estado</th>
				      <td></td>
				      <td>Um Numero Qualquer</td>
				    </tr>
				    <tr>
				      <th>Cidade</th>
				      <td></td>
				      <td>Complementando</td>
				    </tr>
				    <tr>
				      <th>Bairro</th>
				      <td></td>
				      <td>Nasceu Nascimentos</td>
				    </tr>
				    <tr>
				      <th>Rua</th>
				      <td></td>
				      <td>Numero</td>
				    </tr>
				    <tr>
				      <th>Numero</th>
				      <td></td>
				      <td>Numero</td>
				    </tr>
				    <tr>
				      <th>Complemento</th>
				      <td></td>
				      <td>Numero</td>
				    </tr>
				  </tbody>
				</table>
			      </div>
			    </div>
			  </div>
			</div>
          </div>
        </div>
      </div>
     
      </div>
    </div>
  </section>
</main>
  
<?php require_once('layouts/footer.php'); ?>

</body>
</html>