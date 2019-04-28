<?php

include("../connection/connection.php");

if (isset($_POST['username'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user == "" || $pass == "") {
        echo ("<script language = javascript>alert('Tên đăng nhập hoặc mật khẩu không được để trống')</script>");
    } else {
        $sql = "SELECT* FROM admin WHERE name = '$user' AND password = '$pass'";
        $kt = mysqli_query($conn, $sql);
        $row = mysqli_fetch_object($kt);


        if ($row == NULL) {
            echo ("<script language = javascript>alert('Tên đăng nhập hoặc mật khẩu không đúng')</script>");
        } else {
            session_start();
            $_SESSION['admin'] = $user;
            $_SESSION['admin_id'] = $row->id;
            // echo $_SESSION['admin_id'];
            header("location:Index.php?page=trangchu");
        }
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập</title>
    <style>
        body {
            background: #52d4a5;
            text-align: center;
        }
        h1 {
            color:  #fff;
        }
        input, button {
            padding: 5px 15px;
            background: #fff;
            border: none;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <div class="container">
            <h1>Welcome</h1>

            <form action="" method="post">
                <input type="text" placeholder="Username" name="username">
                <input type="password" placeholder="Password" name="password">
                <button type="submit">Login</button>
            </form>
        </div>
    </div>

</body>

</html>