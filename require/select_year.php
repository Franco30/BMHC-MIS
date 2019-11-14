<div class="btn-group pull-right">
    <div class="pull-left">
        <select id="pyear" class="validate[required] select" data-style="btn-primary" data-live-search="true">
            <option value="<?php 
                           if(isset($_GET['year'])){
                               $value=$_GET['year']; 
                               echo $value;
                           }
                           else{
                               echo date('Y');
                           }
                           ?>">
                <?php 
                if(isset($_GET['year'])){
                    $value=$_GET['year']; 
                    echo $value;
                }
                else{
                    echo date('Y');
                }
                ?></option>
            <?php
            require 'require/config.php';
            $query = $conn->query("SELECT * FROM `patient` group by year") or die(mysqli_error());

            while($fetch = $query->fetch_array())
            {
            ?>
    <option value="<?php echo $fetch['year'];?>">
        <?php echo $fetch['year']?>
    </option>
            <?php
            }
            ?>
        </select>
    </div>
</div>
