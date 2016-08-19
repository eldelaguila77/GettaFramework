<div class="row">
    <form class="col s12" method="POST" action="<?php echo URL;?>products/add/">
        <div class="row">
          <div class="input-field col s12">
              <h3>Add Product</h3>
              <input id="product" name="product" type="text" class="validate" required>
              <label for="product"></label>
          </div>
        </div>
        <div>
            <div class="input-field col s12">
                <button type="submit" class="waves-effect waves-light btn"><i class="material-icons right">add</i>Add</button>
            </div>
        </div>
    </form>
</div>
<hr/>   
<div class="row">
    <table class="highlight centered">
        <thead>
            <tr>
                <th data-field="id">#</th>
                <th data-field="product">Product</th>
                    <th data-field="edit">Edit</th>
            </tr>
        </thead>

        <tbody>
            <?php 
//                $datos= $secciones->index();
                foreach($datos as $row){
                    ?>
                <tr>
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['product'];?></td>
                  <td><a href="<?php echo URL;?>products/edit/<?php echo $row['id']; ?>" class="btn-floating"><i class="material-icons">edit</i></a></td>
                </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</div>

