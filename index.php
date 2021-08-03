<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>

    
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
        <?php
    
    include "config.php";

    $sql = "SELECT * FROM result";

    $result = mysqli_query($conn, $sql) or die ("sql error"); 

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){     

    ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['eng']; ?></td>
                <td><?php echo $row['phy']; ?></td>
                <td><?php echo $row['math']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['id']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['id']; ?>'>Delete</a>
                </td>
            </tr>        

            <?php 
              }
            }
            ?>
        </tbody>
    </table>
</div>
</div>
</body>
</html>
