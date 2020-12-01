<?php require "views/shared/header.php";?>

</div>
     <div class="container">
        <h1 class="colorblanco"><b>Actualizar Domiciliario</b></h1>

        <form action="index.php?control=usuario&action=update" method="post">
          <input type="hidden" name="identificador" value=<?php echo $data["numeroDocumento"]; ?> >

            <div class="form-group">
         <label for="numeroDocumento"><h4 class="colorblanco"><b>Numero De Documento:</b></h4></label>
         <input  readonly class="form-control" type="text" id="numeroDocumento" name="numeroDocumento" required  value=<?php echo $data["usuario"]["numeroDocumento"]; ?> 
           > </div>

            <div class="form-group">
         
         <input class="form-control" type="hidden" id="rol" name="rol" required  value=<?php echo $data["usuario"]["rol"]; ?>>  
            </div>

            <div class="form-group">
         <label for="nombre"><h4 class="colorblanco"><b>Nombre:</b></h4></label>
         <input class="form-control" type="text" id="nombre" name="nombre" required  value=<?php echo $data["usuario"]["nombre"]; ?>>  
            </div>
            <div class="form-group">
         <label for="apellido"><h4 class="colorblanco"><b>Apellido:</b></h4></label>
         <input class="form-control" type="text" id="apellido" name="apellido" required  value=<?php echo $data["usuario"]["apellido"]; ?>>  
            </div>
           
            <div class="form-group">
         <label for="telefono"><h4 class="colorblanco"><b>Telefono:</b></h4></label>
         <input class="form-control" type="number" id="telefono" name="telefono" required  value=<?php echo $data["usuario"]["telefono"]; ?>>  
            </div>
            <div class="form-group">
         <label for="direccion"><h4 class="colorblanco"><b>Direccion:</b></h4></label>
         <input class="form-control" type="text" id="direccion" name="direccion" required  value=<?php echo $data["usuario"]["direccion"]; ?>>  
            </div>
            <div class="form-group">
         <label for="email">><h4 class="colorblanco"><b>Email:</b></h4></label>
         <input class="form-control" type="text" id="email" name="email" required  value=<?php echo $data["usuario"]["email"]; ?>>  
            </div>
            
            <div class="form-group">
         
         <input class="form-control" type="hidden" id="contrasenia" name="contrasenia" required  value=<?php echo $data["usuario"]["contrasenia"]; ?>>  
            </div>
         <button class="btn btn-primary btn-block " type="submit"> Modificar</button>




        </form>
      </div>  
      </div>

        
      <?php require "views/shared/footer.php";?>