<?php
if (isset($_POST['bt_submit'])) {
    $name = $_POST['name'];

    $sql = "INSERT INTO new_group(name) VALUES ('$name')";
    if (mysqli_query($conn, $sql)) {
        echo ("<script language='javascript'>alert('Thêm thành công');location.href='Index.php?page=new-group'</script>");
    }
}
?>
<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="my-input">Tên thể loại</label>
        <input id="my-input" class="form-control" name="name" value="" type="text">
    </div>

    <div class="form-group">
        <input type="submit" name="bt_submit" value="Thêm" class="btn btn-success">
    </div>

</form>