<section class="row">
  <div class="col s2"> 
  </div>
  <article class="card-panel col s8">
    <div class="col s2">
    </div>
    <form class="col s8" method="POST" action="<?php echo URL;?>products/add/">
      <h3>Add Products</h3>
      <div class="row">
        <div class="input-field col s12">
          <select id="selectcategories" name="category" required>
            <option value="" disabled selected>Choose your category</option>
            <?php 
              foreach($data['categories'] as $row){
            ?>
                <option value="<?php echo $row['id'];?>"><?php echo $row['category'];?></option>
            <?php 
              }
            ?>
          </select>
          <label for="selectcategories">Categories</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="product" type="text" class="validate" name="product" required>
          <label for="product">Product</label>
        </div>
      </div>
      <div class"row">
        <div class="input-field col s12">
          <button type="submit" class="waves-effect waves-light btn"><i class="material-icons right">add</i>Add</button>
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
                foreach($data['products'] as $row){
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

