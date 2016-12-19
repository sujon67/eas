<table class=" bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Date</th>
        <th>Punch in</th>
        <th>Punch out</th>
        <th>Comment</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if($result){
        $n = 0;
        foreach ($result as $v_result){
            ?>
            <tr>
                <td><?php echo $n+1;?></td>
                <td><?php echo $v_result->date ?></td>
                <td><?php echo $v_result->punch_in ?></td>
                <td><?php echo $v_result->punch_out ?></td>
                <td><?php echo $v_result->out_comment ?> </td>
                <td><?php echo $v_result->status ?></td>
            </tr>
    <?php
        $n++;
        }
    }
    ?>
    </tbody>
    <tfoot>
    <tr>
        <th>#</th>
        <th>Date</th>
        <th>Punch in</th>
        <th>Punch out</th>
        <th>Comment</th>
        <th>Status</th>
    </tr>
    </tfoot>
</table>