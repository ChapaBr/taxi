<?php
session_start();
require_once('controller/conn.php');
require_once('layouts/header.php');
require_once('layouts/sidebar.php');
?>
<main class="main">
  <section id="perfil">
    <div class="container-fluid">
      <div class="animated fadeIn">
        <div class="text-center">
          <h2>Perfil</h2>
        </div>
        <?php
          $objdb = new conn();
          $link = $objdb -> conecta_mysql();
          $id = $_SESSION['id'];
          $sql = "SELECT * FROM usuarios WHERE id = '$id'";
          $resultado = mysqli_query($link, $sql);
          while($taxi = $resultado -> fetch_array(MYSQLI_ASSOC)) {
            $row_user[] = $taxi;
          }

          foreach ($row_user as $dados) {?>
        <div class="col-lg-12 col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6 col-sm-6">
                  <div class="borda-mae">
                    <img src="assets/images/profile.jpg" alt="">
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                  <h3><?php echo $dados['nome'];?></h3>
                  <h4><?php echo $dados['sobrenome'];?></h4>
                  <span>Avaliação</span>
                </div>
              </div>
              <div class="row">
                <ul type="none">
                  <li>
                    <p>
                      <span>Email:</span> 
                      <span><?php echo $dados['email'];?></span>
                    </p>
                  </li>
                  <li>
                    <p>
                      <span>CNH:</span> 
                      <span><?php echo $dados['cnh'];?></span>
                    </p>
                  </li>
                  <li>
                    <p>
                      <span>Idade:</span> 
                      <span><?php echo $dados['idade'];?></span>
                    </p>
                  </li>
                  <li>
                    <p>
                      <span>Telefone:</span> 
                      <span><?php echo $dados['telefone'];?></span>
                    </p>
                  </li>
                  <li>
                    <p>
                      <span>Celular:</span> 
                      <span><?php echo $dados['celular'];?></span>
                    </p>
                  </li>
                  <li>
                    <p>
                      <span>Carro:</span> 
                      <span><?php echo $dados['carro'];?></span>
                    </p>
                  </li>
                  <li>
                    <p>
                      <span>Marca:</span> 
                      <span><?php echo $dados['marca'];?></span>
                    </p>
                  </li>
                  <li>
                    <p>
                      <span>Cor:</span> 
                      <span><?php echo $dados['cor'];?></span>
                    </p>
                  </li>
                  <li>
                    <p>
                      <span>Placa:</span> 
                      <span><?php echo $dados['placa'];?></span>
                    </p>
                  </li>
                  <li>
                    <p>
                      <span>Categoria:</span> 
                      <span><?php echo $dados['categoria'];?></span>
                    </p>
                  </li>
                  <li>
                    <p>
                      <span>Ativo:</span> 
                      <span><?php echo $dados['ativo'];?></span>
                    </p>
                  </li>
                </ul>
              </div>
              <!-- <h5 class="card-title">Guilherme Augusto</h5>
              <p>gui_2512@hotmail.com</p>
              <p>00000.000000-00</p>
              <p>19</p>
              <p>(00) 0000-0000</p>
              <p>(11) 96445-8904</p>
              <p>Corsa</p>
              <p>Wolksvagem</p>
              <p>Verde</p>
              <p>ABC-1234</p>
              <p>Categoria</p>
              <p>Ativo</p> -->
            </div>
            <div class="card-footer">
              <a class="btn btn-primary" type="button" href="editar_perfil.php">Editar</a>
            </div>
          </div>
        </div>
      <?php }?>
      </div>
    </div>
  </section>
</main>
  
<?php require_once('layouts/footer.php'); ?>

</body>
</html>