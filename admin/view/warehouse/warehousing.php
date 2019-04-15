<?php
$sql = "SELECT warehousing.id as warehousing_id, warehousing.create_at, admin.name, warehousing.admin_id , admin.id as admin_id FROM warehousing INNER JOIN admin on warehousing.admin_id = admin.id";
$query = mysqli_query($conn, $sql);
?>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<div class="card">
    <div class="card-header">
        <strong class="card-title">Dashboard - Danh sách phiếu nhập kho</strong>
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered dataTable no-footer" style="width:100%">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Mã Nhập kho</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Người nhập</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Thời gian nhập</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Hành động</th>

                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td>NK<?php echo ($row["warehousing_id"]) ?></td>
                        <td><?php echo ($row["name"]) ?></td>
                        <td><?php echo ($row["create_at"]) ?></td>
                        <td>
                            <a class="btn" href="index.php?page=warehousing_detail&id=<?php echo $row["warehousing_id"] ?>"><i class="fa fa-info"></i></a>
                    </tr>
                <?php
            }
            ?>
            </tbody>
            <tfoot>
                <tr>
                <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Mã Nhập kho</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Người nhập</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Thời gian nhập</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Hành động</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>