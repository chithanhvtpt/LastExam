
<div class="container mt-5 " style="width: 30%">
    <form method="post" enctype="multipart/form-data">
        <div>
            <form method="post">
                <input  name="id" placeholder="id" value="<?php echo $product['id']?>" hidden><br><br>
                <input  name="name" placeholder="Tên Sản phẩm" value="<?php echo $product['name']?>" ><br><br>
                <input  name="category" placeholder="Loại hàng" value=""<?php echo $product['category'] ?>"><br><br>
                <input  name="price" placeholder="Giá" value=""<?php echo $product['price'] ?>"><br><br>
                <input  name="quantity" placeholder="Số lượng" value=""<?php echo $product['quantity'] ?>"><br><br>
                <input  name="dates" placeholder="Ngày-tháng" value=""<?php echo $product['dates'] ?>"><br><br>
                <input  name="description" placeholder="Mô tả" value=""<?php echo $product['description'] ?>"><br><br>
                <button class="btn btn-success" type="submit" name="submit">Thay đổi</button>
                <a class="btn btn-danger" href="index.php?page=product-list">Trở lại</a>
            </form>
    </form>
</div>
