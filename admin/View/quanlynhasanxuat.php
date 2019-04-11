<?php
	$sql = "SELECT* FROM tbl_producer";
	$query = mysqli_query($conn, $sql);
?>	
	<table class="table table-striped table-hover table-bordered">
		<tr>
			<td style="font-weight: bold; background: #3c763d;">STT</td>
			<td style="font-weight: bold; background: #3c763d;">Tên nhà sản xuất</td>
			<td style="font-weight: bold; background: #3c763d;">Thao tác</td>
		</tr>
		<?php  
		while ($row = mysqli_fetch_array($query)) {
			?>
		<tr>
			<td><?php echo($row["IdProducer"]) ?></td>
			<td><?php echo($row["NameProducer"]) ?></td>
			<td><a class="btn btn-success" href="Index.php?page=suanhasanxuat&&mansx=<?php echo $row["IdProducer"] ?>">Sửa</a>  <a class="btn btn-danger" href="View/xoanhasanxuat.php?mansx=<?php echo $row["IdProducer"] ?>">Xóa</a></td>
		</tr>
		<?php  
	}
	?>
</table>