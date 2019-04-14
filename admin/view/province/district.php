<?php

 $id = $_GET['id'];

 
$sql = "SELECT* FROM province where provinceid = '$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_object($query);
$thanhpho = $row->name;

$sql = "SELECT* FROM district where provinceid = '$id'";
$query = mysqli_query($conn, $sql);
?>

<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>

<div class="card">
	<div class="card-header">
		<strong class="card-title"><?php echo $thanhpho ?> - Huyện</strong>
	</div>
	<div class="card-body">
		<table id="example" class="table table-striped table-bordered dataTable no-footer" style="width:100%">
			<thead>
				<tr role="row">
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Mã</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Tên</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Hành động</th>

				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo ($row["provinceid"]) ?></td>
						<td><?php echo ($row["name"]) ?></td>
						<td>
							<!-- <a class="btn" href="index.php?page=district&id=<?php echo $row["provinceid"] ?>"><i class="fa fa-info"></i></a> -->
					</tr>
				<?php
			}
			?>
			</tbody>
			<tfoot>
				<tr>
                <th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Mã</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Tên</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Hành động</th>
				</tr>
			</tfoot>
		</table>
	</div>
</div>