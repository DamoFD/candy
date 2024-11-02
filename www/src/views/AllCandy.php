<?php require './src/views/layouts/header.php'; ?>
    <div class="menu">
        <a href="/create" class="create-button">Create Candy</a>
        <?php foreach ($candies as $candy): ?>
            <a href="/candies/<?= $candy['id'] ?>" class="menu-item">
                <div class="item-name"><?= $candy['name'] ?></div>
                <div class="item-price">$<?= $candy['price'] ?></div>
            </a>
        <?php endforeach; ?>
    </div>
<?php require './src/views/layouts/footer.php'; ?>
