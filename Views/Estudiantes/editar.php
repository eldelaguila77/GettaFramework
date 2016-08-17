<?php //$secciones=$estudiantes->listarSecciones(); 
    $secciones=$datos['secciones'];
?>

<div class="box-principal">
    <h3 class="titulo">Editar Estudiante <?php echo $datos['datos']['nombre']; ?></h3>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Editar Estudiante</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img class="img-responsive" src="<?php echo URL; ?>Views/template/<?php echo $datos['datos']['imagen']; ?>"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="inputNombre" class="control-label">Nombre del Estudiante</label>
                            <input class="form-control" name="nombre" type="text" value="<?php echo $datos['datos']['nombre']; ?>" required />
                        </div>
                        <div class="form-group">
                            <label for="inputEdad" class="control-label">Edad</label>
                            <input class="form-control" name="edad" value="<?php echo $datos['datos']['edad']; ?>" type="number" required />
                        </div>
                        <div class="form-group">
                            <label for="inputPromedio" class="control-label">Promedio</label>
                            <input class="form-control" name="promedio" value="<?php echo $datos['datos']['promedio']; ?>" type="number" required />
                        </div>
                        <div class="form-group">
                            <label for="inputSeccion" class="control-label">Sección (<b>Sección Actual: <?php echo $datos['datos']['nombre_seccion']; ?></b>)</label>
                            <select name="id_seccion" name="seccion" class="form-control">
                                <?php while($row= mysqli_fetch_array($secciones)) {?>
                                <option value="<?php echo $row['id'];?>"><?php echo $row['nombre'];?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <input class="form-control" name="id" value="<?php echo $datos['datos']['id']; ?>" type="hidden" />
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Editar</button>
                            <button type="reset" class="btn btn-warning">Limpiar</button>
                            
                        </div>
                    </form>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
</div>

