<?php
	$sql1 = "SELECT* FROM tbl_bill INNER JOIN tbl_customer ON tbl_bill.IdCustomer = tbl_customer.	IdCustomer";
	$query1 = mysqli_query($conn, $sql1);
?>
	<table class="table table-striped table-hover table-bordered">
		<tr>
			<td style="font-weight: bold; background: #3c763d;">Mã</td>
			<td style="font-weight: bold; background: #3c763d;">Khách hàng</td>
			<td style="font-weight: bold; background: #3c763d;">Email</td>
			<td style="font-weight: bold; background: #3c763d;">Địa chỉ</td>
			<td style="font-weight: bold; background: #3c763d;">Số điện thoại</td>
			<td style="font-weight: bold; background: #3c763d;">Tổng tiền</td>
			<td style="font-weight: bold; background: #3c763d;">Thời gian</td>
			<td style="font-weight: bold; background: #3c763d;">Thao tác</td>
		</tr>
		<?php
		while ($row1 = mysqli_fetch_array($query1)) {
			?>
		<tr>
			<td class="otintuc"><?php echo($row1["IdBill"]) ?></td>
			<td class="otintuc"><?php echo($row1["NameCustomer"]) ?></td>
			<td class="otintuc"><?php echo($row1["Email"]) ?></td>
			<td class="otintuc"><?php echo($row1["Address"]) ?></td>
			<td class="otintuc"><?php echo($row1["Phone"]) ?></td>
			<td class="otintuc"><?php echo(number_format($row1["tongTien"]).' đ') ?></td>
			<td class="otintuc"><?php echo(date_format(date_create($row1["Date_time"]), "H:i:s d-m-Y")); ?></td>
			<td class="otintuc"><a class="btn btn-success" href="Index.php?page=xemdonhangchitiet&&dh=<?php echo $row1["IdBill"] ?>">Chi tiết</a></td>
		</tr>
		<?php  
			}
		?>
	</table>