<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <table border="1px" class="table table-bordered"  style="margin-top: 100px !important; z-index: 0">
        <thead class="table-dark" style="text-align: center" >
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Date</th>
            <th>Description</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <a class="btn btn-success" href="index.php?page=product-create">Thêm Mới</a> <br>
        <form method="get">
            <input type="text" name="search"> <button type="submit">Tìm kiếm</button>
        </form>
        <?php if (isset($products)): ?>
            <?php foreach ($products as $product): ?>
                <tr>

                    <td style="text-align: center"><?php echo $product["id"] ?></td>
                    <td style="text-align: center"><?php echo $product["name"] ?></td>
                    <td style="text-align: center"><?php echo $product["category"] ?></td>
                    <td style="text-align: center"><?php echo $product["price"] ?></td>
                    <td style="text-align: center"><?php echo number_format($product["quantity"]) ?></td>
                    <td style="text-align: center"><?php echo $product["dates"] ?></td>
                    <td style="text-align: center"><?php echo $product["description"] ?></td>
                    <td><a style="margin-top: 40px" type="button" class="btn btn-success" href="index.php?page=product-edit&id=<?php echo $product["id"] ?>">Chỉnh Sửa</a></td>
                    <td><a style="margin-top: 40px" type="button" class="btn btn-danger" onclick="return confirm('ARE YOU SURE?')" href="index.php?page=product-delete&id=<?php echo $product["id"] ?>">Xóa</a></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">Khong co gi hien thi ca</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
