<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>

    
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" />
        </div>
        <div class="form-group">
            <label>English</label>
            <input type="text" name="eng" />
        </div>
       
        <div class="form-group">
            <label>Physics</label>
            <input type="text" name="phy" />
        </div>

        <div class="form-group">
            <label>Math</label>
            <input type="text" name="math" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
