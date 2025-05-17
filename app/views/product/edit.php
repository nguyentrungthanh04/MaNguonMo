<!DOCTYPE html>
<html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<head>
    <title>Sửa sản phẩm</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>
    <h1>Sửa sản phẩm</h1>
    <form method="POST" action="/MaNguonMo/Product/edit/<?php echo $product->getID();
                                                        ?>">
        <label for="name">Tên sản phẩm:</label>
        <input type="text" id="name" name="name" value="<?php echo
                                                        htmlspecialchars($product->getName(), ENT_QUOTES, 'UTF-8'); ?>" required><br><br>

        <label for="description">Mô tả:</label>
        <textarea id="description" name="description" required><?php echo
                                                                htmlspecialchars($product->getDescription(), ENT_QUOTES, 'UTF-8');
                                                                ?></textarea><br><br>

        <label for="price">Giá:</label>
        <input type="number" id="price" name="price" value="<?php echo
                                                            htmlspecialchars($product->getPrice(), ENT_QUOTES, 'UTF-8'); ?>" required><br><br>

        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
    </form>
    <a href="/MaNguonMo/Product/list">Quay lại danh sách sản phẩm</a>
</body>

</html>