<div class="tquarterly reporttype" style="display: none;">
    <label class="text text-danger ">Per Quarter</label>
    <table id="consultatationtablereport" class="table table-bordered table-condensed nowrap" width="100%">
        <thead>
            <tr class="warning">
                <th>Quarter 1</th>
                <th>Quarter 2</th>
                <th>Quarter 3</th>
                <th>Quarter 4</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require 'require/config.php';
            require 'chartqueries/consultation_quarterly.php'; ?>
            <tr>
                <td><?php echo $q1['total']?></td>
                <td><?php echo $q2['total']?></td>
                <td><?php echo $q3['total']?></td>
                <td><?php echo $q4['total']?></td>
            </tr>
        </tbody>
    </table>
  <?php require 'require/footerreport.php'?>
</div>