<?php
session_start();
require_once('controller/conn.php');
require_once('layouts/header.php');
include_once('layouts/sidebar.php');
?>
<main class="main">
  <section id="fila">
    <div class="container-fluid">
      <div class="animated fadeIn">
        <div class="text-center">
          <h2>Fila de Espera</h2>
          <div class="row text-center">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">N°</th>
                  <th scope="col">Placa</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Carro</th>
                  <th scope="col">Categoria</th>
                  <th scope="col">Posição</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <?php
                $objdb = new conn();
                $link = $objdb -> conecta_mysql();
                $sql = "SELECT id, nome, carro, placa, categoria FROM usuarios";
                $resultado = mysqli_query($link, $sql);
                while($taxi = $resultado -> fetch_array(MYSQLI_ASSOC)){
                  $row_motoristas[] = $taxi;
                }
                foreach ($row_motoristas as $motorista) {?>

                <tr> 
                  <th scope="row"><?php echo $motorista['id'];?></th>
                  <td><?php echo $motorista['placa'];?></td>
                  <td><?php echo $motorista['nome'];?></td>
                  <td><?php echo $motorista['carro'];?></td>
                  <td><?php echo $motorista['categoria'];?></td>
                  <td><button>Algo</button></td>
                  <td>
                    <a href="#"><i class="fas fa-arrow-up arrows"></i></a>
                    <a href="#"><i class="fas fa-arrow-down arrows"></i></a>
                    <a href="#"><i class="fas fa-car"></i></a>
                  </td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
  
<?php require_once('layouts/footer.php'); ?>

</body>
</html>