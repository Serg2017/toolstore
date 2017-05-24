<div class="content">

    <?php if(count($products) > 0): ?>
        <h1 class="content__header"><?=$name?></h1>
        <?php foreach($products as $product):?>
            <div class="product">
                <div class="product__img">
                    <a href="/product/view/<?=$product['id']?>">
                        <img src="/public/images/product/<?=$product['img']?>" alt="bosh">
                    </a>
                </div>
                <div class="product__description"><?=$product['name']?></div>
                <div class="product__price"><?=$product['price']?> грн.</div>
                <a href="/cart/add/<?=$product['id']?>" class="product__cart">Добавить в корзину</a>
            </div>
        <?php endforeach;?>
        <?php else: ?>
            <p class="g-text">
                В данной категории нет товаров.
            </p>
    <?php endif;?>

</div>