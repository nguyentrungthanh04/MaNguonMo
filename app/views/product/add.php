<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm mới</title>

    <!-- Gọi tệp CSS Bootstrap từ CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Gọi tệp CSS của bạn (nếu có) -->
    <link rel="stylesheet" href="/public/css/style.css">

    <!-- Gọi jQuery và Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function validateForm() {
            let name = document.getElementById('name').value;
            let price = document.getElementById('price').value;
            let errors = [];
            if (name.length < 10 || name.length > 100) {
                errors.push('Tên sản phẩm phải có từ 10 đến 100 ký tự.');
            }
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
    <div class="container mt-5">
        <h2 class="text-center mb-4">Thêm sản phẩm mới</h2>

        <form class="form-horizontal" method="POST" action="/MaNguonMo/Product/add" onsubmit="return validateForm();">
            <fieldset>

                <!-- Tên sản phẩm -->
                <div class="mb-3">
                    <label class="form-label" for="name">Tên sản phẩm</label>
                    <input id="name" name="name" placeholder="Nhập tên sản phẩm" class="form-control" required type="text">
                </div>

                <!-- Mô tả sản phẩm -->
                <div class="mb-3">
                    <label class="form-label" for="description">Mô tả</label>
                    <input id="description" name="description" placeholder="Nhập mô tả" class="form-control" required type="text">
                </div>

                <!-- Giá tiền -->
                <div class="mb-3">
                    <label class="form-label" for="price">Giá tiền</label>
                    <input id="price" name="price" placeholder="Nhập giá tiền" class="form-control" required type="number">
                </div>

                <!-- Button -->
                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-success mx-2">Thêm</button>
                    <a href="/MaNguonMo/Product/list" class="btn btn-secondary mx-2">Quay lại</a>
                </div>

            </fieldset>
        </form>
    </div>
</body>

</html>
