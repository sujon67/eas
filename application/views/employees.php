
<table class="bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Birth date</th>
        <th>Joining date</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $n = 0;
    if($employee){
        foreach ($employee as $v_employee){
            ?>
            <tr>
                <td><?php echo $n+1 ?></td>
                <td><?php echo $v_employee->name ?></td>
                <td><?php echo $v_employee->gender ?></td>
                <td><?php echo $v_employee->date_birth ?></td>
                <td><?php echo $v_employee->join_date    ?></td>
            </tr>
    <?php
            $n++;
        }
    }?>

    </tbody>
    <tfoot>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Birth date</th>
        <th>Joining date</th>
    </tr>
    </tfoot>
</table>
