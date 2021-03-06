<?php

$sql = "SELECT bill.*, district.name as huyen , province.name as tinh FROM bill "
	. " INNER JOIN district on district.districtid =  bill.district_id "
	. " INNER JOIN province on district.provinceid =  province.provinceid ";
$query = mysqli_query($conn, $sql);


?>

<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>

<div class="card">
	<div class="card-header">
		<strong class="card-title">Dashboard - Đơn hàng</strong>
		<a class="btn btn-success btn-sm float-right" href="index.php?page=addproduct">Thêm</a>
	</div>
	<div class="card-body">
		<table id="example" class="table table-striped table-bordered dataTable no-footer" style="width:100%">
			<thead>
				<tr role="row">
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Khách hàng</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Địa chỉ nhận hàng</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Tỉnh</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Huyện</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Số điện thoại</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Ghi chú</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Trạng thái</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Ngày tạo</th>
					<th style="width: 50px; !important"></th>

				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysqli_fetch_array($query)) {
					?>
					<tr>
						<td><?php echo ($row["address"]) ?></td>
						<td><?php echo ($row["name"]) ?></td>
						<td><?php echo ($row["tinh"]) ?></td>
						<td><?php echo ($row["huyen"]) ?></td>
						<td><?php echo ($row["phone"]) ?></td>			
						<td><?php echo ($row["note"]) ?></td>
						<td><?php echo ($row["status"]) ?></td>
						<td><?php echo ($row["created_at"]) ?></td>
						<td style="text-align: center">
							<a href="index.php?page=billdetail&id=<?php echo $row["id"] ?>"><i style="color: green;"  class="fa fa-info"></i></a>

							<?php
							if ($row["status"] == "Đã giao hàng") {
								?>
								<a href="index.php?page=updatestatus&id=<?php echo $row["id"] ?>&tt1=Đã giao hàng&tt2=Hủy đơn hàng"><i style="color: red;" class="fa fa-trash"></i></a>
							<?php
						} else if ($row["status"] == "Đang chờ duyệt") {
							?>

								<a href="index.php?page=updatestatus&id=<?php echo $row["id"] ?>&tt1=Đang chờ duyệt&tt2=Đang giao hàng"><i style="color: blue;" class="fa fa-fighter-jet"></i></a>
							<?php
						} else if ($row["status"] == "Đang giao hàng")  {
							?>
								<a href="index.php?page=updatestatus&id=<?php echo $row["id"] ?>&tt1=Đang giao hàngt&tt2=Đã giao hàng"><i style="color: yellow;" class="fa fa-check"></i></a>
							<?php
						}else if ($row["status"] == "Hủy đơn hàng")  {
							?>
								<!-- <a href="index.php?page=updatestatus&id=<?php echo $row["id"] ?>&tt1=Đang chờ duyệt&tt2=Đang giáo hàng"><i class="fa fa-trash"></i></a> -->
							<?php
						} ?>

					</tr>
				<?php
			}
			?>
			</tbody>
			<tfoot>
				<tr>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Khách hàng</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Địa chỉ nhận hàng</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Tỉnh</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Huyện</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Số điện thoại</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Ghi chú</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Trạng thái</th>
					<th class="sorting_asc" tabindex="0" aria-controls="bootstrap-data-table-export" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 209px;">Ngày tạo</th>
					<th style="width: 50px;"></th>
				</tr>
			</tfoot>
		</table>
	</div>
</div>