<?php
$sql = "SELECT new.*, new_group.name FROM new INNER JOIN new_group ON new_group.id = new.new_group_id";
$query = mysqli_query($conn, $sql);
?>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<div class="card">
    <div class="card-header">
        <strong class="card-title">Dashboard - Bài viết</strong>
        <a class="btn btn-success btn-sm float-right" href="index.php?page=addnew">Thêm</a>
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered dataTable no-footer" style="width:100%">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Mã bài viết</th>
                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 349px;">Tiêu đề</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Nội dung</th>
                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 800px;">Mô tả</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Nhóm tin</th>
                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 349px;">Hình ảnh</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo ($row["id"]) ?></td>
                        <td><?php echo ($row["title"]) ?></td>
                        <td><?php echo ($row["content"]) ?></td>
                        <td><?php echo ($row["description"]) ?></td>
                        <td><?php echo ($row["name"]) ?></td>
                        <td>
                            <img src="<?php echo ('../public/upload/tintuc/' . $row['image']); ?>" class="anh_tintuc">
                        </td>
                        <td>
                            <a href="index.php?page=editnew&id=<?php echo $row["id"] ?>"><i class="fa fa-edit"></i></a><br>
                            <a href="index.php?page=deletenew&id=<?php echo $row["id"] ?>" onclick="return confirm('Are you sure you want to Remove?');"><i class="fa fa-trash"></i></a>
                    </tr>
                <?php
            }
            ?>
            </tbody>
            <tfoot>
                <tr>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Mã bài viết</th>
                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 349px;">Tiêu đề</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Nội dung</th>
                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 800px;">Mô tả</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Nhóm tin</th>
                    <th class="sorting" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 349px;">Hình ảnh</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;"></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>