<!DOCTYPE html>
<html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<head>
    <title>Danh sách sản phẩm</title>
    <!-- Gọi tệp CSS vào trong HTML -->
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>
    <form class="form-horizontal">
        <fieldset>
            <h1>Danh sách sản phẩm</h1>
            <!-- Button -->
            <div class="form-group">
                <div class="col-md-4">
                    <a href="/MaNguonMo/Product/add" class="btn btn-primary">Thêm sản phẩm mới</a>
                </div>
            </div>

            <ul>
                <?php foreach ($products as $product): ?>
                    <li>
                        <div class="form-group">
                                <p>Tên sản phẩm: <?php echo htmlspecialchars($product->getName(), ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                        </div>
                        
                        <div class="form-group">
                                <p>Mô tả: <?php echo htmlspecialchars($product->getDescription(), ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                        </div>

                        <div class="form-group">
                                <p>Giá: <?php echo htmlspecialchars($product->getPrice(), ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                        </div>
                            <a href="/MaNguonMo/Product/edit/<?php echo $product->getID(); ?>" class="btn btn-primary">Sửa</a>
                            <a href="/MaNguonMo/Product/delete/<?php echo $product->getID(); ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');" class="btn btn-primary">Xóa</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </fieldset>
    </form>
</body>

</html>