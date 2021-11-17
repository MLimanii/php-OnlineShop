    <div class="popular-dishes">
        <div class="p-d-inner">
            <h2 class="box-title">
                <span class="box-title-inner">Popular Dishes</span>
            </h2>

            <div class="p-d-boxs">
            <?php foreach($products as $key => $product) : ?>
                <div class="p-d-box">
                    <img src="<?= $product['imgUrl'] ?>" alt="">
                    <div class="p-d-box-title"><?= $product['name'] ?></div>
                    <div class="p-d-box-s-title"><?= $product['description'] ?></div>
                    <div class="p-d-b-info">
                        <div class="p-d-price"><?= $product['price'] ?></div>
                        <div class="p-d-cart"><a href="./cart.php?id=<?= $key ?>"><i class="fas fa-shopping-basket"></i></a></div>
                    </div>
                </div>
            <?php endforeach ?>
            </div>

        </div>
    </div>
