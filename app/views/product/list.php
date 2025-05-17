<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>

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
        <h1 class="text-center mb-4">Danh sách sản phẩm</h1>

        <!-- Nút thêm sản phẩm -->
        <div class="mb-4">
            <a href="/MaNguonMo/Product/add" class="btn btn-success">
                <i class="fa fa-plus"></i> Thêm sản phẩm mới
            </a>
        </div>

        <!-- Danh sách sản phẩm -->
        <div class="list-group">
            <?php foreach ($products as $product): ?>
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="mb-1"><?php echo htmlspecialchars($product->getName(), ENT_QUOTES, 'UTF-8'); ?></h5>
                        <p class="mb-1">Mô tả: <?php echo htmlspecialchars($product->getDescription(), ENT_QUOTES, 'UTF-8'); ?></p>
                        <p>Giá: <?php echo htmlspecialchars($product->getPrice(), ENT_QUOTES, 'UTF-8'); ?> VND</p>
                    </div>
                    <div class="btn-group" role="group">
                        <!-- Sửa và Xóa -->
                        <a href="/MaNguonMo/Product/edit/<?php echo $product->getID(); ?>" class="btn btn-warning">
                            <i class="fa fa-edit"></i> Sửa
                        </a>
                        <a href="/MaNguonMo/Product/delete/<?php echo $product->getID(); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');" class="btn btn-danger">
                            <i class="fa fa-trash"></i> Xóa
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>
