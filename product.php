<?php
include __DIR__ . '/data/products.php';

$id = $_GET['id'] ?? null;

if (!$id || !isset($products[$id])) {
  header('Location: index.php');
  exit;
}

$product = $products[$id];

include __DIR__ . '/includes/header.php';
?>

<main id="MainContent" class="main-content page-width" tabindex="-1">

  <div class="product-single">
    <div class="grid">

      <div class="grid__item medium-up--one-half">
        <img
          src="<?= $product['image'] ?>"
          alt="<?= htmlspecialchars($product['name']) ?>"
          class="product-single__image">
      </div>

      <div class="grid__item medium-up--one-half">
        <h1 class="product-single__title"><?= $product['name'] ?></h1>

        <div class="product-single__price">
          €<?= number_format($product['price'], 2, ',', '.') ?>
        </div>

        <p class="product-single__description">
          <?= $product['description'] ?>
        </p>

        <button class="btn btn--primary">
          Adicionar ao carrinho
        </button>
      </div>

    </div>
  </div>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
