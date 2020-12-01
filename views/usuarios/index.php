<?php require "views/shared/header.php";?>
<br>
      <h1 style="text-align:center;">Usuarios</h1>
<br>
      
<div class="container"> 

      <table class="table mt-1 table-primary">
          
          <thead>
             <tr>
                  <th> Numero de documento</th>
                  <th> Rol</th>
                  <th> Nombre</th>
                  <th> Apellido</th>
                  <th> Direccion</th>
                  <th> Telefono</th>
                  <th> --</th>
                 
                </tr>
             
             </thead>
             <tbody>
                <?php foreach($data['usuarios'] as $usuario){ ?>

                <tr>
                    <td><?= $usuario['numeroDocumento'] ?></td>
                    <td><?= $usuario['rol'] ?></td>
                    <td><?= $usuario['nombre'] ?></td>
                    <td><?= $usuario['apellido'] ?></td>
                    <td><?= $usuario['direccion'] ?></td>
                    <td><?= $usuario['telefono'] ?></td>


                    <td>
                       
                       
                    <a href="index.php?control=usuario&action=edit&numeroDocumento=<?= $usuario['numeroDocumento'] ?>" class="btn btn-info">
                       Actualizar</a>
                  <?php
                  if( $usuario['estado'] == 'libre'){ ?>
                  
                       <a href="index.php?control=usuario&action=delete&numeroDocumento=<?= $usuario['numeroDocumento'] ?>" class="btn btn-danger">
                       Eliminar</a>

                  <?php } ?>
                  
                   
                    </td>


                </tr>    
               <?php } ?>

             </tbody>

      </table>

   </div>
</div>




   <?php require "views/shared/footer.php";?>