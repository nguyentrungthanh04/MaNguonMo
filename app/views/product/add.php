<!DOCTYPE html>
<html>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Form Name -->
    <legend>Thêm sản phẩm mới</legend>

    <!-- Gọi tệp CSS vào trong HTML -->
    <link rel="stylesheet" href="/public/css/style.css">

    <script>
        function validateForm() {
            let name = document.getElementById('name').value;
            let price = document.getElementById('price').value;
            let errors = [];
            if (name.length < 10 || name.length > 100) {}
            errors.push('Tên sản phẩm phải có từ 10 đến 100 ký tự.');
            if (price <= 0 || isNaN(price)) {
                errors.push('Giá phải là một số dương lớn hơn 0.');
            }
            if (errors.length > 0) {
                alert(errors.join('\n'));
                return false;
            }
            return true;
        }
    </script>
</head>

<body>
    <form class="form-horizontal" method="POST" action="/MaNguonMo/Product/add">
        <fieldset>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Tên sản phẩm</label>
                <div class="col-md-4">
                    <input id="name" name="name" placeholder="Nhập tên sản phẩm" class="form-control input-md" required="" type="text">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="description">Mô tả</label>
                <div class="col-md-4">
                    <input id="description" name="description" placeholder="Nhập mô tả" class="form-control input-md" required="" type="text">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="price">Giá tiền</label>
                <div class="col-md-4">
                    <input id="price" name="price" placeholder="Nhập giá tiền" class="form-control input-md" required="" type="number">

                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
                <div class="col-md-4">
                    <button type='submit' class="btn btn-primary">Thêm</button>
                    <a href="/MaNguonMo/Product/list" class="btn btn-primary">Quay lai</a>
                </div>
            </div>


        </fieldset>
    </form>


</body>


</html>