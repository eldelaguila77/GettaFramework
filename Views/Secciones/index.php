<section class="box-principal">
   <article>
       <h3 class="titulo">Vista de Secciones</h3>
    
   </article>
    <article class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Listado de Secciones</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        //$datos= $secciones->index();
                        while($row=  mysqli_fetch_array($datos)){
                            ?>
                        <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['nombre'];?></td>
                            <td><a class="btn btn-warning" href="<?php echo URL;?>secciones/editar/<?php echo $row['id']; ?>">Editar</a></td>
                            <td><a class="btn btn-danger" href="<?php echo URL;?>secciones/eliminar/<?php echo $row['id']; ?>">Eliminar</a></td>
                        </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </article>
</section>