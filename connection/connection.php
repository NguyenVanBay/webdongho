<?php
	$conn = mysqli_connect("localhost:3636", "root", "","watch") or die("Không thể kết nối tới database");
	mysqli_query($conn, "SET NAMES 'UTF8'");
?>