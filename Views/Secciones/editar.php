<div class="box-principal">
    <h3 class="titulo">Editar Sección</h3>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Editar Sección <?php echo $datos['nombre']; ?></h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <form class="form-horizontal" action="" method="POST">
                        <div class="form-group">
                            <label for="inputNombre" class="control-label">Nombre de la Sección</label>
                            <input class="form-control" value="<?php echo $datos['nombre']; ?>" name="nombre" type="text" required />
                        </div>
                        <input type="hidden" value="<?php echo $datos['id']; ?>" name="id"/>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Editar</button>
                            <button type="reset" class="btn btn-warning">Borrar</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
</div>