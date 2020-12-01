<?php require "views/shared/header.php";?>
<div class="card bglight rounded  ">
      <h1>Datos Domiciliario</h1>

      

      <table class="table mt-1">
          
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
                <?php foreach($data['domiciliarios'] as $domiciliario){ ?>

                <tr>
                    <td><?= $domiciliario['numeroDocumento'] ?></td>
                    <td><?= $domiciliario['nombre'] ?></td>
                    <td><?= $domiciliario['apellido'] ?></td>
                    <td><?= $domiciliario['direccion'] ?></td>
                    <td><?= $domiciliario['telefono'] ?></td>


                    <td>
                       
                       
                    <a href="index.php?control=domiciliario&action=edit&numeroDocumento=<?= $domiciliario['numeroDocumento'] ?>" class="btn btn-warning">
                       Actualizar</a>
                      


                       <a href="index.php?control=domiciliarioaction=delete&numeroDocumento=<?= $domiciliario['numeroDocumento'] ?>" class="btn btn-danger">
                       Eliminar</a>
                   
                   
                   
                   
                   
                    </td>


                </tr>    
               <?php } ?>

             </tbody>

      </table>

   </div>




   <?php require "views/shared/footer.php";?>