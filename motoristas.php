<?php
require_once('layouts/header.php')
?>
<?php include_once('layouts/sidebar.php'); ?>
<main class="main">
  <section id="motoristas">
    <div class="container-fluid">
      <div class="animated fadeIn">
        <div class="text-center">
          <h2>Motoriastas</h2>
        </div>
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
				      <th>Informações</th>
				      <th></th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th>Nome</th>
				      <td></td>
				      <td><?php echo $item['nome'];?></td>
				    </tr>
				    <tr>
				      <th>Sobrenome</th>
				      <td></td>
				      <td><?php echo $item['sobrenome'];?></td>
				    </tr>
				    <tr>
				      <th>Email</th>
				      <td></td>
				      <td><?php echo $item['email'];?></td>
				    </tr>
				    <tr>
				      <th>Apelido</th>
				      <td></td>
				      <td><?php echo $item['apelido'];?></td>
				    </tr>
				    <tr>
				      <th>Telefone</th>
				      <td></td>
				      <td><?php echo $item['telefone'];?></td>
				    </tr>
				    <tr>
				      <th>Celular</th>
				      <td></td>
				      <td><?php echo $item['celular'];?></td>
				    </tr>
				    <tr>
				      <th>CEP</th>
				      <td></td>
				      <td><?php echo $item['cep'];?></td>
				    </tr>
				    <tr>
				      <th>Estado</th>
				      <td></td>
				      <td><?php echo $item['estado'];?></td>
				    </tr>
				    <tr>
				      <th>Cidade</th>
				      <td></td>
				      <td><?php echo $item['cidade'];?></td>
				    </tr>
				    <tr>
				      <th>Bairro</th>
				      <td></td>
				      <td><?php echo $item['bairro'];?></td>
				    </tr>
				    <tr>
				      <th>Rua</th>
				      <td></td>
				      <td><?php echo $item['rua'];?></td>
				    </tr>
				    <tr>
				      <th>Numero</th>
				      <td></td>
				      <td><?php echo $item['numero'];?></td>
				    </tr>
				    <tr>
				      <th>Complemento</th>
				      <td></td>
				      <td><?php echo $item['complemento'];?></td>
				    </tr>
				    <tr>
				      <th>Data de Nascimento</th>
				      <td></td>
				      <td><?php echo $item['nascimento'];?></td>
				    </tr>
				    <tr>
				      <th>Idade</th>
				      <td></td>
				      <td><?php echo $item['idade'];?></td>
				    </tr>
				  </tbody>
				</table>
			      </div>
			    </div>
			  </div>
			</div>
          </div>
      </div>

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
				      <th>Informações</th>
				      <th></th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th>Nome</th>
				      <td></td>
				      <td><?php echo $item['nome'];?></td>
				    </tr>
				    <tr>
				      <th>Sobrenome</th>
				      <td></td>
				      <td><?php echo $item['sobrenome'];?></td>
				    </tr>
				    <tr>
				      <th>Email</th>
				      <td></td>
				      <td><?php echo $item['email'];?></td>
				    </tr>
				    <tr>
				      <th>Apelido</th>
				      <td></td>
				      <td><?php echo $item['apelido'];?></td>
				    </tr>
				    <tr>
				      <th>Telefone</th>
				      <td></td>
				      <td><?php echo $item['telefone'];?></td>
				    </tr>
				    <tr>
				      <th>Celular</th>
				      <td></td>
				      <td><?php echo $item['celular'];?></td>
				    </tr>
				    <tr>
				      <th>CEP</th>
				      <td></td>
				      <td><?php echo $item['cep'];?></td>
				    </tr>
				    <tr>
				      <th>Estado</th>
				      <td></td>
				      <td><?php echo $item['estado'];?></td>
				    </tr>
				    <tr>
				      <th>Cidade</th>
				      <td></td>
				      <td><?php echo $item['cidade'];?></td>
				    </tr>
				    <tr>
				      <th>Bairro</th>
				      <td></td>
				      <td><?php echo $item['bairro'];?></td>
				    </tr>
				    <tr>
				      <th>Rua</th>
				      <td></td>
				      <td><?php echo $item['rua'];?></td>
				    </tr>
				    <tr>
				      <th>Numero</th>
				      <td></td>
				      <td><?php echo $item['numero'];?></td>
				    </tr>
				    <tr>
				      <th>Complemento</th>
				      <td></td>
				      <td><?php echo $item['complemento'];?></td>
				    </tr>
				    <tr>
				      <th>Data de Nascimento</th>
				      <td></td>
				      <td><?php echo $item['nascimento'];?></td>
				    </tr>
				    <tr>
				      <th>Idade</th>
				      <td></td>
				      <td><?php echo $item['idade'];?></td>
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
  </section>
</main>
  
<?php require_once('layouts/footer.php'); ?>

</body>
</html>