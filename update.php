<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>



    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
    <?php 
    
    if(isset($_POST['showbtn']))
    {
        include 'config.php';

    $getid = $_POST['id'];

    $sql = "SELECT * FROM result WHERE id = {$getid}";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) >0){
        while($row = mysqli_fetch_assoc($result)){
   


    ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="id"  value="<?php echo $row['id']; ?>" />
            <input type="text" name="name" value="<?php echo $row['name']; ?>" />
        </div>
        <div class="form-group">
            <label>English</label>
            <input type="text" name="eng" value="<?php echo $row['eng']; ?>" />
        </div>
        
        <div class="form-group">
            <label>Physics</label>
            <input type="text" name="phy" value="<?php echo $row['phy']; ?>" />
        </div>

        <div class="form-group">
            <label>Math</label>
            <input type="text" name="math" value="<?php echo $row['math']; ?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>

    <?php        
     }
        }
    }
?>
</div>
</div>
</body>
</html>
