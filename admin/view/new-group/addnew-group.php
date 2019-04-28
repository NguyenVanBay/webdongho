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
    <table class="table table-striped table-bordered">
        <tr>
            <td style="font-weight: bold;">Tên thể loại</td>
            <td><input type="text" name="name" class="form-control"></td>
        </tr>
    </table>
    
    <input type="submit" name="bt_submit" value="Thêm" class="btn btn-success">
</form>