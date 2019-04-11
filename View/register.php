<head>
    <style>
        .myform {
            box-sizing: border-box;
            width: 310px;
            margin: 100px auto 0;
            box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.2);
            padding-bottom: 40px;
            border-radius: 3px;
        }

        .myform h1 {
            box-sizing: border-box;
            padding: 20px;
        }

        .form_register input {
            margin: 40px 25px;
            width: 250px;
            display: block;
            border: none;
            padding: 10px 20px;
            border-bottom: solid 1px #1abc9c;
        }

        .form_register input:focus,
        .form_register input:valid {
            box-shadow: none;
            outline: none;
            background-position: 0 0;
        }

        .form_register input:focus::-webkit-input-placeholder,
        .form_register input:valid::-webkit-input-placeholder {
            color: #1abc9c;
            font-size: 11px;
            transform: translateY(-20px);
            visibility: visible !important;
        }

        .form_register button {
            border: none;
            background: #1abc9c;
            cursor: pointer;
            border-radius: 3px;
            padding: 6px;
            width: 150px;
            color: white;
            box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }
    </style>
</head>
<?php
if (isset($_POST['bt_dangky'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password_gain = $_POST['password_gain'];
  if ($username == "" || $password == "" || $password_gain == "") {
    echo ("<script language=javascript>alert('Không có ô nào được để trống !')</script>");
  } else {
    if ($password_gain != $password) {
      echo ("<script language=javascript>alert('Mời nhập lại mật khẩu đúng !')</script>");
    } else {
      $sql = "SELECT* FROM tbl_customer WHERE NameCustomer = '$username'";
      $kt = mysqli_query($conn, $sql);
      $row = mysqli_num_rows($kt);
      if ($row > 0) {
        echo ("<script language=javascript>alert('Tên tài khoản đã tồn tại')</script>");
      } else {
        $sql = "INSERT INTO tbl_customer(NameCustomer,Pass) VALUES('$username','$password')";
        mysqli_query($conn, $sql);
      }
    }
  }
}
?>

<div class="form_register">
    <div class="modal fade" id="modal-id1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body" align="center">
                    <form method="POST" id="myform">
                        <h1>Đăng ký</h1>
                        <input placeholder="Nhập tên tài khoản.." type="text" name="username" required="">
                        <input placeholder="Nhập mật khẩu.." type="password" name="password" required="">
                        <input placeholder="Nhập lại mật khẩu.." type="password" name="password_gain" required="">
                        <button name="bt_dangky">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 