<?php
$sql = "SELECT* FROM category";
$query = mysqli_query($conn, $sql);
?>

<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>

<div class="card">
	<div class="card-header"> 
		<strong class="card-title">Dashboard - Loại sản phẩm </strong><br><br>
		<p>(vị trí từ 0 - 10 sẽ được hiện theo thứ tự giảm dần trên menu ngang)</p>
		<p>(vị trí từ 0 - 20 sẽ được hiện theo thứ tự giảm dần trên menu dọc)</p>
		<a class="btn btn-success btn-sm float-right" href="index.php?page=addcategory">Thêm</a>
	</div>
	<div class="card-body">
		<table id="example" class="table table-striped table-bordered dataTable no-footer" style="width:100%">
			<thead>
				<tr role="row">
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Tên</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Ảnh</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Icon</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Vị trí trên menu</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Hành động</th>

				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo ($row["name"]) ?></td>
						<td style="width: 200px;">
							<img class="img-responsive" src="../public/upload/category/<?php echo ($row["image"]) ?>" alt="">
						</td>
						<td><i class="<?php echo ($row["icon"]) ?>"></i></td>
						<td><?php echo ($row["sort"]) ?></td>
						<td>
							<a class="btn" href="index.php?page=editcategory&id=<?php echo $row["id"] ?>"><i class="fa fa-edit"></i></a>
							<a href="index.php?page=deletecategory&id=<?php echo $row["id"] ?>" onclick="return confirm('Are you sure you want to Remove?');"><i class="fa fa-trash"></i></a>
					</tr>
				<?php
			}
			?>
			</tbody>
			<tfoot>
				<tr>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Tên</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Ảnh</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Icon</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Vị trí trên menu</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Hành động</th>

				</tr>
			</tfoot>
		</table>
	</div>
</div>