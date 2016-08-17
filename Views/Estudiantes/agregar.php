<div class="box-principal">
    <h3 class="titulo">Agregar Estudiante</h3>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Agregar un Nuevo Estudiante</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="inputNombre" class="control-label">Nombre del Estudiante</label>
                            <input class="form-control" name="nombre" type="text" required />
                        </div>
                        <div class="form-group">
                            <label for="inputEdad" class="control-label">Edad</label>
                            <input class="form-control" name="edad" type="number" required />
                        </div>
                        <div class="form-group">
                            <label for="inputPromedio" class="control-label">Promedio</label>
                            <input class="form-control" name="promedio" type="number" required />
                        </div>
                        <div class="form-group">
                            <label for="inputSeccion" class="control-label">Sección</label>
                            <select name="id_seccion" name="seccion" class="form-control">
                                <?php while($row= mysqli_fetch_array($datos)) {?>
                                <option value="<?php echo $row['id'];?>"><?php echo $row['nombre'];?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputImg" class="control-label">Imagen</label>
                            <input class="form-control" name="imagen" id="imagen" type="file" required />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Registrara</button>
                            <button type="reset" class="btn btn-warning">Borrar</button>
                            
                        </div>
                    </form>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
</div>

