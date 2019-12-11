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
                if(isset($_GET['year']))
                {
                    $value=$_GET['year']; 
                    echo $value;
                }
                else
                {
                    echo date('Y');
                }
                ?>
            </option>
            <?php 
            $earliest_year = 1950;
            foreach (range(date('Y'), $earliest_year) as $x) {
            ?>
            <option value="<?php echo $x ?>"><?php echo $x ?></option>
            <?php
            }
            ?>
        </select>
    </div>
</div>