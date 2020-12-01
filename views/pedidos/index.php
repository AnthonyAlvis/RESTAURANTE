<?php require "views/shared/header.php"; ?>

<br><br> 
    
    <div class="container">
        <table class="table mt-1 table-primary">
          <thead>
             <tr>
            
                  <th> Identificador</th>
                  <th> Valor</th>
                  <th> Cliente #</th>
                  <th> -- </th>
                 
                </tr>
             
             </thead>
          <?php foreach ($data['pedidos'] as $pedido) { ?>
          <form action="index.php?control=pedido&action=update" method="POST">
          <input type="hidden" name="identificador" id="identificador" method="post" value=<?php echo $pedido['identificador']; ?>>

            <tr>
                    <td><?= $pedido['identificador'] ?></td>
                    <td><?= $pedido['valor'] ?></td>
                    <td><?= $pedido['cliente'] ?></td>
                    <td>
                      <div class="pull-right">
                        <button type="sumbit"class="btn btn-danger">Aceptar Pedido</button>
                      </div>   
                    </td>
          </form>
                    
      <?php } ?>    
    </div>  
          <form action="index.php?control=pedido&action=inicio" method="POST">
                      <div class="pull-right">
                        <button type="sumbit"class="btn btn-info ">Ver Pedido</button>
                      </div>   
          </form>

            
<?php require "views/shared/footer.php"; ?>
