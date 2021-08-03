<?php include 'header.php'; ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>

    <?php 
    
    if(isset($_POST['deletebtn'])){
        include 'config.php';
        $getid = $_POST['id'];
        $sql = "DELETE FROM result WHERE id = {$getid}";
        
        $result  = mysqli_query($conn, $sql);

        header ("location: http://localhost/result/index.php");

        mysqli_close($conn);
    }

    ?>
</div>
</div>
</body>
</html>
