<table id="data-table" class="table table-bordered table-striped">
<thead>
    <tr>
        <th>Invoice NO</th>
        <th>Invoice Date</th>
        <th>Recever Name</th>
        <th>Invoice Total</th>
        <th>PDF</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
</thead>
<tbody>
    <?php foreach($orders as $key => $value) { ?>
    <tr>
        <td><?php echo $value->order_no; ?></td>
        <td><?php echo $value->order_date; ?></td>
        <td><?php echo $value->order_recever_name; ?></td>
        <td><?php echo $value->order_total_before_tax; ?></td>
        <td><a href="">PDF</a></td>
        <td><a href="">edit</a></td>
        <td><a href="">remove</a></td>
    </tr>
    <?php } ?>
</tbody>
</table>
<script type="text/javascript">
    $(document).ready(function(){
        var table = $('data-table').DataTable();
    });
</script>