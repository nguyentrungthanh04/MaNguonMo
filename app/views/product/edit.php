<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/public/css/style.css">

    <!-- Bootstrap Bundle JS (including Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" 
    integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Sửa sản phẩm</h1>

        <!-- Form để sửa sản phẩm -->
        <form method="POST" action="/MaNguonMo/Product/edit/<?php echo $product->getID(); ?>" class="border p-4 rounded shadow-sm">
            
            <!-- Tên sản phẩm -->
            <div class="mb-3">
                <label for="name" class="form-label">Tên sản phẩm</label>
                <input type="text" id="name" name="name" class="form-control" 
                    value="<?php echo htmlspecialchars($product->getName(), ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>

            <!-- Mô tả sản phẩm -->
            <div class="mb-3">
                <label for="description" class="form-label">Mô tả</label>
                <textarea id="description" name="description" class="form-control" required><?php echo htmlspecialchars($product->getDescription(), ENT_QUOTES, 'UTF-8'); ?></textarea>
            </div>

            <!-- Giá sản phẩm -->
            <div class="mb-3">
                <label for="price" class="form-label">Giá</label>
                <input type="number" id="price" name="price" class="form-control" 
                    value="<?php echo htmlspecialchars($product->getPrice(), ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>

            <!-- Nút lưu thay đổi -->
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i> Lưu thay đổi
                </button>
                <a href="/MaNguonMo/Product/list" class="btn btn-secondary">
                    <i class="fa fa-arrow-left"></i> Quay lại danh sách sản phẩm
                </a>
            </div>
        </form>
    </div>
</body>

</html>
