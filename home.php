<main class="main-content" id="MainContent">

<section class="slideshow">
    <div class="slideshow-wrapper">

        <div class="slideshow-slide active">
            <img src="assets/banner1.jpg" alt="Slide 1">
            <img src="assets/banner2.jpg" alt="Slide 1">
            <div class="slideshow-content">
                <h2>Bem-vindo à Houlyssen</h2>
                <a href="roducts.php" class="btn">Ver produtos</a>
            </div>
        </div>

        <!-- Botões -->
        <button class="slideshow-prev">&#10094;</button>
        <button class="slideshow-next">&#10095;</button>

        <!-- Dots -->
        <div class="slideshow-dots">
            <span class="dot active"></span>
            <span class="dot"></span>
        </div>

    </div>
</section>

<section class="featured-collection">
    <div class="page-width">
        <div class="section-header">
            <h2 class="section-header__title">Produtos em Destaque</h2>
        </div>
    </div>

    <div class="page-width page-width--flush-small">
        <div class="grid grid--uniform">

            <!-- PRODUTO 1 -->
            <div class="grid__item grid-product small--one-half medium-up--one-quarter">
                <div class="grid-product__content">
                    <a href="product.php?id=1" class="grid-product__link">
                        <div class="grid-product__image-mask">
                            <img src="assets/produto1.jpg" alt="Massajador Elétrico">
                        </div>
                        <div class="grid-product__meta">
                            <div class="grid-product__title">Massajador Elétrico</div>
                            <div class="grid-product__price">€34,95</div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- PRODUTO 2 -->
            <div class="grid__item grid-product small--one-half medium-up--one-quarter">
                <div class="grid-product__content">
                    <a href="product.php?id=2" class="grid-product__link">
                        <div class="grid-product__image-mask">
                            <img src="assets/produto2.jpg" alt="Auriculares Sleep">
                        </div>
                        <div class="grid-product__meta">
                            <div class="grid-product__title">Auriculares Sleep</div>
                            <div class="grid-product__price">€19,99</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

</main>
