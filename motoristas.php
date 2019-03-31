<?php
session_start();
require_once('controller/conn.php');
require_once('layouts/header.php');
require_once('layouts/sidebar.php');
?>

<main class="main">
  <section id="motoristas">
    <div class="container-fluid">
      <div class="animated fadeIn">
        <div class="text-center">
          <h2>Motoriastas</h2>
        </div>
      <div class="row">
    	<?php
			$objdb = new conn();
			$link = $objdb -> conecta_mysql();
			$sql = "SELECT * FROM usuarios";
			$resultado = mysqli_query($link, $sql);
			while($taxi = $resultado -> fetch_array(MYSQLI_ASSOC)){
				$row_usuario[] = $taxi;
		}
		foreach ($row_usuario as $user) {?>
    	<div class="col-lg-6 col-sm-6">
          <div class="row text-center">
            <div class="accordion" id="accordionExample">
			  <div class="card">
			    <div class="card-header" id="headingOne">
			      <h2 class="mb-0">
			        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#user<?php echo $user['id'];?>" aria-expanded="true" aria-controls="collapseOne">
			          <h3><?php echo $user['nome']; ?></h3>
			        </button>
			        <form method="post" action="controller/excluir_motorista.php">
				    	<input type="hidden" name="returnId" value="<?php echo $user['id'];?>">
				    	<input type="hidden" name="motorista-teste" value="true">
				    	<button class="btn btn-danger btn-edit" type="submit">
				    		Excluir
				    	</button>
			    	</form>
			    	<form method="post" action="#">
				    	<input type="hidden" name="returnId" value="<?php echo $user['id'];?>">
				    	<button class="btn btn-info btn-edit" type="submit">
				    		Editar
				    	</button>
					</form>
			      </h2>
			    </div>

			    <div id="user<?php echo $user['id'];?>" class="collapse">
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
					      <td><?php echo $user['nome']; ?></td>
					    </tr>
					    <tr>
					      <th>Sobrenome</th>
					      <td></td>
					      <td><?php echo $user['sobrenome']; ?></td>
					    </tr>
					    <tr>
					      <th>CNH</th>
					      <td></td>
					      <td><?php echo $user['cnh']; ?></td>
					    </tr>
					    <tr>
					      <th>Email</th>
					      <td></td>
					      <td><?php echo $user['email']; ?></td>
					    </tr>
					    <tr>
					      <th>Idade</th>
					      <td></td>
					      <td><?php echo $user['idade']; ?></td>
					    </tr>
					    <tr>
					      <th>Telefone</th>
					      <td></td>
					      <td><?php echo $user['telefone']; ?></td>
					    </tr>
					    <tr>
					      <th>Celular</th>
					      <td></td>
					      <td><?php echo $user['celular']; ?></td>
					    </tr>
					    <tr>
					      <th>Carro</th>
					      <td></td>
					      <td><?php echo $user['carro']; ?></td>
					    </tr>
					    <tr>
					      <th>Marca</th>
					      <td></td>
					      <td><?php echo $user['marca']; ?></td>
					    </tr>
					    <tr>
					      <th>Cor</th>
					      <td></td>
					      <td><?php echo $user['cor']; ?></td>
					    </tr>
					    <tr>
					      <th>Placa</th>
					      <td></td>
					      <td><?php echo $user['placa']; ?></td>
					    </tr>
					  </tbody>
					</table>
			      </div>
			    </div>
			  </div>
			</div>
          </div>
        </div>
        <?php } ?>
      </div>
      </div>
    </div>
  </section>
</main>
  
<?php require_once('layouts/footer.php'); ?>

</body>
</html>