<?php
$sql = "SELECT *  FROM admin";
$query = mysqli_query($conn, $sql);


?>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<div class="card">
    <div class="card-header">
        <strong class="card-title">Dashboard - Admin</strong>
        <a class="btn btn-success btn-sm float-right" href="index.php?page=addadmin">Thêm</a>
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered dataTable no-footer" style="width:100%">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Tên</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Email</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Địa chỉ</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Số điện thoại</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($query)) {
                    
                    ?>
                    <tr>
                    <td><?php echo ($row["name"]) ?></td>
                    <td><?php echo ($row["email"]) ?></td>
                    <td><?php echo ($row["password"]) ?></td>
                    <td><?php echo ($row["address"]) ?></td>
                    
                        <td>
                            <a class="btn" href="index.php?page=editadmin&id=<?php echo $row["id"] ?>"><i class="fa fa-edit"></i></a>
                            <a href="index.php?page=deleteadmin&id=<?php echo $row["id"] ?>" onclick="return confirm('Are you sure you want to Remove?');"><i class="fa fa-trash"></i></a>
                    </tr>
                <?php
            }
            ?>
            </tbody>
            <tfoot>
                <tr>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Tên</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Email</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Địa chỉ</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Số điện thoại</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;"></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>