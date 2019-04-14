<?php
$sql = "SELECT* FROM new_group";
$query = mysqli_query($conn, $sql);
?>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<div class="card">
    <div class="card-header">
        <strong class="card-title">Dashboard - Loại tin</strong>
        <a class="btn btn-success btn-sm float-right" href="index.php?page=addnew-group">Thêm</a>
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered dataTable no-footer" style="width:100%">
            <thead>
            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Name</th><th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 349px;">Position</th></tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo ($row["name"]) ?></td>
                        <td>
                            <a class="btn" href="index.php?page=editnew-group&id=<?php echo $row["id"] ?>"><i class="fa fa-edit"></i></a>
                            <a href="index.php?page=deletenew-group&id=<?php echo $row["id"] ?>" onclick="return confirm('Are you sure you want to Remove?');"><i class="fa fa-trash"></i></a>
                    </tr>
                <?php
            }
            ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Loại tin</th>
                    <th>Hành động</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>