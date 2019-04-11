<head>
    <style type="text/css" media="screen">
        .anh_tintuc {
            width: 130px;
            height: 100px;
        }
    </style>
</head>
<?php
$sql1 = "SELECT* FROM tbl_news_detail INNER JOIN tbl_news_group ON tbl_news_group.IdNewsGroup = tbl_news_detail.IdNewsGroup";
$query1 = mysqli_query($conn, $sql1);
?>
<h3><a class="btn btn-success" href="Index.php?page=themtintuc"><span class="glyphicon glyphicon-plus"></span> THÊM TIN TỨC</a></h3>
<br>
<table class="table table-striped table-hover table-bordered">
    <tr>
        <td style="font-weight: bold; background: #3c763d;">Mã tin tức</td>
        <td style="font-weight: bold; background: #3c763d;">Tiêu đề</td>
        <td style="font-weight: bold; background: #3c763d;">Nội dung</td>
        <td style="font-weight: bold; background: #3c763d;">Mô tả</td>
        <td style="font-weight: bold; background: #3c763d;">Tên nhóm tin tức</td>
        <td style="font-weight: bold; background: #3c763d;">Hình ảnh</td>
        <td style="font-weight: bold; background: #3c763d;">Thao tác</td>
    </tr>
    <?php
	while ($row1 = mysqli_fetch_array($query1)) {
		?>
    <tr>
        <td><?php echo ($row1["IdNews"]) ?></td>
        <td class="otintuc"><?php echo ($row1["Title"]) ?></td>
        <td class="otintuc"><?php echo ($row1["Content"]) ?></td>
        <td class="otintuc"><?php echo ($row1["Description"]) ?></td>
        <td class="otintuc"><?php echo ($row1["NameNewsGroup"]) ?></td>
        <td><img src="<?php echo ('./upload/tintuc/' . $row1['Image']); ?>" class="anh_tintuc"></td>
        <td><a class="btn btn-success" href="Index.php?page=capnhattintuc&&tt=<?php echo ($row1['IdNews']) ?>">Sửa</a> <a class="btn btn-danger" href="View/xoatintuc.php?tt=<?php echo $row1["IdNews"] ?>">Xóa</a></td>
    </tr>
    <?php 
}
?>
</table> 