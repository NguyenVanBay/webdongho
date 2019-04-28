<?php

$id = $_GET['id'];

$sql = "SELECT warehousing_detail.*, product.id, product.name FROM warehousing_detail INNER JOIN product on warehousing_detail.product_id = product.id where warehousing_detail.warehousing_id = '$id'";
$query = mysqli_query($conn, $sql);
?>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<div class="card">
    <div class="card-header">
        <strong class="card-title">Chi tiết phiếu nhập kho : NK<?= $id ?></strong>
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered dataTable no-footer" style="width:100%">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Mã chi tiết nhập</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Sản phẩm</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Mã nhập kho</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Tổng số nhập</th>

                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td>DNK<?php echo ($row["id"]) ?></td>
                        <td><?php echo ($row["name"]) ?></td>
                        <td>NK<?php echo ($row["warehousing_id"]) ?></td>
                        <td><?php echo ($row["amount"]) ?></td>
                    </tr>
                <?php
            }
            ?>
            </tbody>
            <tfoot>
                <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Mã chi tiết nhập</th>
                <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Sản phẩm</th>
                <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Mã nhập kho</th>
                <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Tổng số nhập</th>
            </tfoot>
        </table>
    </div>
</div>