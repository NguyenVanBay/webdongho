<?php
	$sql = "SELECT* FROM tbl_product_detail INNER JOIN tbl_product_group ON tbl_product_detail.IdGroupProduct = tbl_product_group.IdGroupProduct INNER JOIN tbl_producer ON tbl_product_detail.IdProducer = tbl_producer.IdProducer";
	$query = mysqli_query($conn, $sql);
?>
	<h3><a class="btn btn-success" href="Index.php?page=themsanpham"><span class="glyphicon glyphicon-plus"></span> THÊM SẢN PHẨM</a></h3>
	<br>
	<table class="table table-striped table-hover table-bordered">
		<tr>
			<td style="font-weight: bold; background: #3c763d;">Mã sản phẩm</td>
			<td style="font-weight: bold; background: #3c763d;">Tên sản phẩm</td>
			<td style="font-weight: bold; background: #3c763d;">Giá cũ</td>
			<td style="font-weight: bold; background: #3c763d;">Giá mới</td>
			<td style="font-weight: bold; background: #3c763d;">Tên nhà sản xuất</td>
			<td style="font-weight: bold; background: #3c763d;">Tên nhóm sản phẩm</td>
			<td style="font-weight: bold; background: #3c763d;">Số lượng</td>
			<td style="font-weight: bold; background: #3c763d;">Thumbnail</td>
			<td style="font-weight: bold; background: #3c763d;">Thao tác</td>
		</tr>
		<?php  
		while ($row = mysqli_fetch_array($query)) {
			?>
		<tr>
			<td><?php echo($row["IdProduct"]) ?></td>
			<td><?php echo($row["NameProduct"]) ?></td>
			<td><?php echo($row["OldPrice"]) ?></td>
			<td><?php echo($row["NewPrice"]) ?></td>
			<td><?php echo($row["NameProducer"]) ?></td>
			<td><?php echo($row["NameGroupProduct"]) ?></td>
			<td><?php echo($row["Amount"]) ?></td>
			<td>
				<img class="img-responsive" src="<?php echo('./upload/sanpham/'.$row["Image"]) ?>" alt="">
			</td>
			<td><a class="btn btn-success" href="Index.php?page=capnhatsanpham&&spct=<?php echo($row['IdProduct']) ?>">Sửa</a>  <a class="btn btn-danger" href="View/xoasanpham.php?spct=<?php echo $row["IdProduct"] ?>">Xóa</a></td>
		</tr>
		<?php  
	}
	?>
</table>