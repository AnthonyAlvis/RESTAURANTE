<?php require "views/shared/header.php"; ?>

<div class="container" style="text-align:center;">

    <h1> <?php echo $data["titulo"]?></h1>
        <table class="table mt-3">
            <thead>
                <tr>
                <th> Identificador</th>
                  <th> Valor</th>
                  <th> Cliente #</th>
                  <th> -- </th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data['pedidos'] as $pedido) { ?>
              <form action="index.php?control=pedido&action=view" method="POST">
              <input type="hidden" name="identificador" id="identificador" method="post" value=<?php echo $pedido['identificador']; ?>>
                    <tr>
                        <td><?= $pedido['identificador'] ?></td>
                        <td><?= $pedido['valor'] ?></td>
                        <td><?= $pedido['numeroDocumentoCliente'] ?></td>
                        <td>
                        <div class="container" style="text-align:center;">
                        <button type="sumbit"class="btn btn-danger">Entregado :3</button>
                        </div>
                        </td>
                    </tr>
                
            </tbody>
        </table>
            <?php }?>
</div>
<div class="container" style="text-align:center;">
  <a class="btn btn-danger" href="index.php?control=home&action=index" role="button">Inicio</a>
</div>
  
            
<?php require "views/shared/footer.php"; ?>