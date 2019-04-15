<?php
$id = $_GET['id'];
$sql = "SELECT * FROM bill_detail "
	. " INNER JOIN product on product.id = bill_detail.product_id "
	. " WHERE bill_detail.bill_id ='" . $id . "'";

$query = mysqli_query($conn, $sql);
?>

<table class="table table-striped table-bordered">
	<tr>
		<td>Tên sản phẩm</td>
		<td>Ảnh</td>
		<td>Số lượng mua</td>
	</tr>

	<?php

	while ($row = mysqli_fetch_array($query)) {
		?>
		<tr>
			<td><?= $row['name'] ?></td>
			<td style="width: 300px;"><img class="img-responsive" src="../public/upload/product/<?= $row['thumbnail'] ?>" alt=""></td>
			<td><?= $row['amount'] ?></td>
		</tr>
	<?php
}

?>
</table>