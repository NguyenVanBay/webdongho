<?php


if (isset($_POST['btn_submit'])) {

    $listJson = $_POST['list'];

    $listProduct = json_decode($listJson);

    if (empty($listProduct)) {
        echo ('<script>alert("Chưa chọn sản phẩm"); location.href="index.php?page=addwarehousing"</script>');
        return;
    }

    $admin_id = $_SESSION['admin_id'];


    $sql = "INSERT INTO warehousing(admin_id) VALUES ('$admin_id')";
    if (mysqli_query($conn, $sql)) {
        $last_id = $conn->insert_id;

        foreach ($listProduct as $key => $value) {
            $idproduct = explode('-', key((array)$value))[0];
            $amount = current((array)$value);
            $inventory = $amount;
            $inventory_actual = $amount;

            $sql_product = "SELECT * FROM warehouse";
            $query_product = mysqli_query($conn, $sql_product);

            $check = 1;

            while ($row_product = mysqli_fetch_array($query_product)) {

                if ($row_product['product_id'] == $idproduct) {

                    $inventory += $row_product['inventory'];
                    $inventory_actual += $row_product['inventory_actual'];

                    $sql = "UPDATE warehouse SET inventory = '$inventory', inventory_actual = '$inventory_actual' where product_id = '$idproduct'";

                    if (mysqli_query($conn, $sql)) {
                    }

                    $check = 0;
                    break;
                }
            }

            if ($check == 1) {
                $sql = "INSERT INTO warehouse(product_id, inventory, inventory_actual) VALUES('$idproduct', '$inventory', '$inventory_actual')";

                if (mysqli_query($conn, $sql)) {
                }
            }

            $sql = "INSERT INTO warehousing_detail(product_id, warehousing_id, amount) VALUES ('$idproduct', '$last_id', '$amount')";
            if (mysqli_query($conn, $sql)) {
            }
        }
    }
    echo ('<script>alert("Nhập kho thành công"); location.href="index.php?page=warehouse"</script>');
}

?>

<div class="row">

    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Chi tiết phiếu nhập</strong>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Số lượng</th>
                            <th style="width: 50px;"></th>
                        </tr>
                    </thead>
                    <tbody id="showTable">
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        // function show product.

        function showTable() {

            let list = "";

            // lay danh sach san pham. 
            let temp = $.parseJSON($('#list').val());
            for (let i = 0; i < temp.length; i++) {

                list += "<tr>";
                list += "<th scope='row'>" + (i + 1) + "</th>";
                list += "<li><td>" + Object.keys(temp[i]) + "</td></li>";
                list += "<td>" + Object.values(temp[i]) + "</td></li>";
                list += "<td> <a onclick='myFunction(" + i + ")' value='" + Object.keys(temp[i]) + "' ><i class='fa fa-trash'></i></a></td>";
                list += "</tr>";
            }
            $('#showTable').append(list);
        }

        function myFunction(a) {
            // lay danh sach san pham. 
            let temp = $.parseJSON($('#list').val());
            var itemtoRemove = temp[a];
            temp.splice($.inArray(itemtoRemove, temp), 1);
            $('#showTable').html("");

            $('#list').val(JSON.stringify(temp));
            showTable();

        }
    </script>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Tạo phiếu nhập kho</strong>
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label for="my-input">Loại sản phẩm</label>
                    <select id="product_id" name="product_id" class="form-control">
                        <?php
                        $sql = "SELECT * FROM product";
                        $query = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($query)) {
                            ?>
                            <option value="<?php echo ($row['id'] . '-' . $row['name']); ?>"><?php echo ($row['name']); ?></option>
                        <?php
                    } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Số lượng</label>
                    <input id="amount" name="amount" class="form-control" type="text">
                </div>

                <button id="addproduct" style="float: left; margin-right: 10px; " class="btn btn-success">Thêm vào phiếu</button>

                <form action="" method="post">
                    <input type="hidden" id="list" name="list" value="">
                    <button type="submit" name="btn_submit" class="btn btn-success">Nhập kho</button>
                </form>

                <script>
                    $(document).ready(function() {
                        let result = [];
                        // array to json.
                        $('#list').val(JSON.stringify(result));

                        $('#addproduct').click(function() {

                            // lay danh sach san pham. 
                            let temp = $.parseJSON($('#list').val());
                            // lấy thông tin sản phẩm cần nhập kho.
                            let product_id = $('#product_id').val();
                            let amount = $('#amount').val();

                            console.log(product_id);

                            let check = 1;
                            for (let i = 0; i < temp.length; i++) {
                                let product_id_temp = Object.keys(temp[i]);

                                if (product_id_temp == product_id) {

                                    let productOld = {};
                                    productOld[product_id_temp] = (parseInt(amount) + parseInt(Object.values(temp[i])));
                                    temp[i] = productOld;

                                    check = 0;
                                    $('#list').val(JSON.stringify(temp));
                                    break;
                                }
                            }

                            if (check == 1) {
                                var product_new = {};
                                product_new[product_id] = parseInt(amount);
                                temp.push(product_new);
                                $('#list').val(JSON.stringify(temp));
                            }
                            $('#showTable').html("");
                            showTable();
                            console.log(temp);
                        });





                    });
                </script>

            </div>
        </div>
    </div>

</div>