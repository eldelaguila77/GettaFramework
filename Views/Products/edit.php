<div class="row">
    <form class="col s12" method="POST" action="">
        <div class="row">
          <div class="input-field col s12">
              <h3>Edit Product</h3>
              <input id="product" name="product" type="text" class="validate" required value="<?php echo $datos[0]['product']; // para PDO ?> <?php //echo $datos['product']; // para mysqli echo $datos[0]['product']; ?>">
              <input name="id" value="<?php echo $datos[0]['id']; // para PDO ?> <?php //echo $datos['id']; // para mysqli echo $datos[0]['product']; ?>" type="hidden" />
              <label for="product"></label>
          </div>
        </div>
        <div>
            <div class="input-field col">
                <button type="submit" class="waves-effect waves-light btn"><i class="material-icons right">edit</i>Edit</button>
            </div>
            <div class="input-field col">
                <button type="button" class="waves-effect waves-light btn red" onclick="if(confirm('Do you want delete this reg?')) location.href = '<?php echo URL;?>products/delete/<?php echo $datos[0]['id']; // para PDO ?> <?php //echo $datos['id']; // para mysqli echo $datos[0]['product']; ?>';"><i class="material-icons right">delete</i>Delete</button>
            </div>
        </div>
    </form>
</div>