<?php

$sql = "SELECT product.*, category.name as category_name FROM product INNER JOIN category ON category.id = product.category_id";
$query = mysqli_query($conn, $sql);


?>

<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>

<div class="card">
	<div class="card-header">
		<strong class="card-title">Dashboard - Sản phẩm</strong>
		<a class="btn btn-success btn-sm float-right" href="index.php?page=addproduct">Thêm</a>
	</div>
	<div class="card-body">
		<table id="example" class="table table-striped table-bordered dataTable no-footer" style="width:100%">
			<thead>
				<tr role="row">
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Tên</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Giá</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Giảm giá</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Mô tả</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Thể loại</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Thumbnail</th>
					<th style="width: 50px; !important"></th>

				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo ($row["name"]) ?></td>
						<td><?php echo ($row["price"]) ?></td>
						<td><?php echo ($row["sale"]) ?></td>
						<td><?php echo ($row["description"]) ?></td>
						<td><?php echo ($row["category_name"]) ?></td>
						<td><img src="../public/upload/product/<?php echo ($row["thumbnail"]) ?>" alt="" srcset=""></td>
						<td style="text-align: center">
							<a href="index.php?page=detailproduct&id=<?php echo $row["id"] ?>"><i class="fa fa-info"></i></a>
							<a href="index.php?page=editproduct&id=<?php echo $row["id"] ?>"><i class="fa fa-edit"></i></a>
							<a href="index.php?page=deleteproduct&id=<?php echo $row["id"] ?>" onclick="return confirm('Are you sure you want to Remove?');"><i class="fa fa-trash"></i></a>
					</tr>
				<?php
			}
			?>
			</tbody>
			<tfoot>
				<tr>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Tên</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Giá</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Giảm giá</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Mô tả</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Thể loại</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Thumbnail</th>
					<th style="width: 50px;"></th>
				</tr>
			</tfoot>
		</table>
	</div>
</div>