<section class="row">
  <div class="col s2"> 
  </div>
  <article class="card-panel col s8">
    <div class="col s2">
    </div>
    <form class="col s8" method="POST" action="">
      <h3>Add Products</h3>
      <div class="row">
        <div class="input-field col s12">
          <select id="selectcategories" name="category" required>
            <?php 
              foreach($data['categories'] as $row){
                if($row['id']==$data['product'][0]['category']){
            ?>
                <option selected value="<?php echo $row['id'];?>"><?php echo $row['category'];?></option>
            <?php 
                }else{
            ?>
                <option value="<?php echo $row['id'];?>"><?php echo $row['category'];?></option>
            <?php

                }
              }
            ?>
          </select>
          <label for="selectcategories">Categories</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="product" type="text" class="validate" name="product" value="<?php echo $data['product'][0]['product']; // para PDO ?> " required>
          <input type="hidden" name="id" value="<?php echo $data['product'][0]['id']; ?>">
          <label for="product">Product</label>
        </div>
      </div>
      <div class"row">
        <div class="input-field col s6">
          <button type="submit" class="waves-effect waves-light btn"><i class="material-icons right">edit</i>Update</button>
        </div>
        <div class="input-field col s6">
          <button type="button" class="waves-effect waves-light btn red" onclick="if(confirm('Are you sure you want to delete this record?')) location.href = '<?php echo URL;?>products/delete/<?php echo $data['product'][0]['id']; // para PDO ?> <?php //echo $datos['id']; // para mysqli echo $datos[0]['product']; ?>';"><i class="material-icons right">delete</i>Delete</button>
        </div>
      </div>
      <br/>
      <br/>
      <br/>
    </form>
    <div class="col s2">
    </div>
  </article>
  <div class="col s2"> 
  </div>
</section>
