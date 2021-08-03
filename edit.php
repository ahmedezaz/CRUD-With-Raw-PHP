<?php include 'header.php'; ?>

<div id="main-content">
    <?php 

    include 'config.php';
    $getid = $_GET['id'];




    $sql = "SELECT * FROM result WHERE id ={$getid}";
    $result = mysqli_query($conn, $sql) or die ("SQL ERROR");
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){

       

    ?>
    <h2>Update Record</h2>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="id" value="<?php echo $row['id'] ?>"/>
          <input type="text" name="name" value="<?php echo $row['name'] ?>"/>
      </div>
      <div class="form-group">
          <label>English</label>
          <input type="text" name="eng" value="<?php echo $row['eng'] ?>"/>
      </div>
      
      <div class="form-group">
          <label>Physics</label>
          <input type="text" name="phy" value="<?php echo $row['phy'] ?>"/>
      </div>
      <div class="form-group">
          <label>Math</label>
          <input type="text" name="math" value="<?php echo $row['math'] ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>

    <?php
     }
    }
    ?>
</div>
</div>
</body>
</html>
