<section class="box-principal">
   <article>
       <h3 class="titulo">Vista de Estudiantes</h3>
    
   </article>
    <article class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Listado de Estudiantes</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Sección</th>
                        <th>Promedio</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        //$datos= $estudiantes->index();
                        while($row=  mysqli_fetch_array($datos)){
                            ?>
                        <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><img src="<?php echo URL;?>Views/template/<?php echo $row['imagen'] ?>" class="avatar" /></td>
                            <td><a href="<?php echo URL; ?>estudiantes/ver/<?php echo $row['id']; ?>"><?php echo $row['nombre'];?></a></td>
                            <td><?php echo $row['edad'];?></td>
                            <td><?php echo $row['nombre_seccion'];?></td>
                            <td><?php echo $row['promedio'];?></td>
                            <td><a class="btn btn-warning" href="<?php echo URL;?>estudiantes/editar/<?php echo $row['id']; ?>">Editar</a></td>
                            <td><a class="btn btn-danger" href="<?php echo URL;?>estudiantes/eliminar/<?php echo $row['id']; ?>">Eliminar</a></td>
                        </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </article>
</section>


