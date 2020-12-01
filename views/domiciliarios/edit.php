<?php require "views/shared/header.php";?>

     <div class="container">
        <h1>Actualizar Domiciliario</h1>

        <form action="index.php?control=domiciliario&action=update" method="post">
          <input type="hidden" name="identificador" value=<?php echo $data["numeroDocumento"]; ?> >

            <div class="form-group">
         <label for="nombre">Nombre</label>
         <input class="form-control" type="text" id="nombre" name="nombre" required  value=<?php echo $data["domiciliario"]["nombre"]; ?> 
           > </div>

            <div class="form-group">
         <label for="descripcion">descripcion</label>
         <input class="form-control" type="text" id="descripcion" name="descripcion" required  value=<?php echo $data["domiciliario"]["descripcion"]; ?>>  
            </div>

            <div class="form-group">
         <label for="foto">foto</label>
         <input class="form-control" type="file" id="foto" name="foto" required  value=<?php echo $data["domiciliario"]["foto"]; ?>>  
            </div>

            <div class="form-group">
         <label for="precio">precio</label>
         <input class="form-control" type="text" id="precio" name="precio" required  value=<?php echo $data["domiciliario"]["precio"]; ?>>  
            </div>
         
         <button class="btn btn-primary btn-block " type="submit"> Modificar</button>




        </form>
      </div>  

        
      <?php require "views/shared/footer.php";?>