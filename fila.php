<?php
session_start();
require_once('layouts/header.php');
?>
<?php include_once('layouts/sidebar.php'); ?>
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
                  <th scope="col">Código</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Carro</th>
                  <th scope="col">Categoria</th>
                  <th scope="col">Posição</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr> 
                  <th scope="row">1</th>
                  <td>123</td>
                  <td>Claudio</td>
                  <td>Gol</td>
                  <td>VIP</td>
                  <td><button>Algo</button></td>
                  <td>
                    <a href="#"><i class="fas fa-arrow-up arrows"></i></a>
                    <a href="#"><i class="fas fa-arrow-down arrows"></i></a>
                    <a href="#"><i class="fas fa-car"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>255</td>
                  <td>Nicolas</td>
                  <td>Golf</td>
                  <td>VIP</td>
                  <td><button>Algo</button></td>
                  <td>
                    <a href="#"><i class="fas fa-arrow-up arrows"></i></a>
                    <a href="#"><i class="fas fa-arrow-down arrows"></i></a>
                    <a href="#"><i class="fas fa-car"></i></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>123</td>
                  <td>Chapa</td>
                  <td>Corsa</td>
                  <td>Comum</td>
                  <td><button>Algo</button></td>
                  <td>
                    <a href="#"><i class="fas fa-arrow-up arrows"></i></a>
                    <a href="#"><i class="fas fa-arrow-down arrows"></i></a>
                    <a href="#"><i class="fas fa-car"></i></a>
                  </td>
                </tr>
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