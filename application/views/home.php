<div class="container-fluid p-0 m-0">
    <div class="row m-0">
        <div class="col p-5">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= assetsPath("img/ads/ads1.png") ?>" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= assetsPath("img/ads/ads2.png") ?>" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= assetsPath("img/ads/ads3.png") ?>" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= assetsPath("img/ads/ads4.png") ?>" class="d-block w-100 h-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
<section class="top border">
    <div class="top__content">
        <img src="<?= assetsPath("img/top_image.jpg") ?>" alt="men" class="top__image p-5" />
        <div class="top__text">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <small>#FANCYNANCYCARE</small>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col">
                        <h1 class="top__heading">
                            <strong>Stay Hydrated and Consistent</strong>
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="text-align: justify;">
                        <span>Remember to keep the body hydrated and consistent in doing an activity or
                            habit with beauty products that have been provided.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="catalog center mt-5">
    <h2 class="catalog__title">Best Deals For You</h2>
    <p class="catalog__text">
        Shop for items based on what we featured in this week
    </p>
    <div class="catalog__product-cards">
        <?php foreach ($products as $p) { ?>
            <div class="product" data-id="<?= $p->id ?>">
                <div class="product__image">
                    <img src="<?= assetsPath("img/products/" . $p->image) ?>" class="product__img" />
                    <div class="product__buy-me-box">
                        <div class="product__buy-me-cover">
                            <div class="product__buy-me-button">
                                <svg class="product__buy-me-logo" width="27" height="25" viewBox="0 0 27 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.9521 23.2662H21.8397C21.2306 23.2662 20.7188 22.7666 20.6746 22.1289C20.6302 21.4602 21.1187 20.8781 21.7637 20.8341C21.7891 20.8324 21.8156 20.8315 21.8417 20.8315C22.4587 20.8315 22.9755 21.3214 23.0213 21.9482C23.0331 22.1967 22.9926 22.5509 22.7371 22.8434L22.7312 22.8502L22.7254 22.8571C22.5287 23.0907 22.2619 23.2316 21.9521 23.2662ZM8.22003 23.2599C7.56946 23.2599 7.04022 22.7169 7.04022 22.0496C7.04022 21.3827 7.56946 20.8401 8.22003 20.8401C8.87061 20.8401 9.39984 21.3827 9.39984 22.0496C9.39984 22.7169 8.87061 23.2599 8.22003 23.2599Z" fill="white" />
                                    <path d="M21.8765 22.2662C21.9215 22.2549 21.9428 22.2339 21.9605 22.2129C21.9683 22.2037 21.9761 22.1946 21.9839 22.1855C22.0204 22.1438 22.0237 22.0553 22.0229 22.0105C22.0097 21.9044 21.9189 21.8315 21.8417 21.8315C21.838 21.8315 21.8341 21.8317 21.8317 21.8318C21.7536 21.8372 21.6658 21.9409 21.6724 22.0625C21.6818 22.1793 21.7679 22.2662 21.8397 22.2662H21.8765ZM8.22003 22.2599C8.31921 22.2599 8.39984 22.1655 8.39984 22.0496C8.39984 21.9341 8.31921 21.8401 8.22003 21.8401C8.12091 21.8401 8.04022 21.9341 8.04022 22.0496C8.04022 22.1655 8.12091 22.2599 8.22003 22.2599ZM21.9999 24.2662C21.9522 24.2662 21.8883 24.2662 21.8397 24.2662C20.7021 24.2662 19.7571 23.3545 19.677 22.198C19.5969 20.9929 20.4942 19.9183 21.6957 19.8364C21.7446 19.8331 21.7933 19.8315 21.8417 19.8315C22.9804 19.8315 23.9418 20.7324 24.0195 21.8884C24.051 22.4915 23.8746 23.0612 23.4903 23.5012C23.106 23.9575 22.5768 24.2177 21.9999 24.2662ZM8.22003 24.2599C7.01581 24.2599 6.04022 23.2709 6.04022 22.0496C6.04022 20.8291 7.01581 19.8401 8.22003 19.8401C9.42419 19.8401 10.3998 20.8291 10.3998 22.0496C10.3998 23.2709 9.42419 24.2599 8.22003 24.2599ZM21.1989 17.3938H9.13354C8.70062 17.3938 8.31635 17.1005 8.2038 16.6775L4.27802 2.24768H1.52222C0.993896 2.24768 0.561035 1.80859 0.561035 1.27039C0.561035 0.733032 0.993896 0.292969 1.52222 0.292969H4.99982C5.43182 0.292969 5.8161 0.586304 5.92859 1.01025L9.85443 15.4391H20.5581L24.1149 7.13379H12.2583C11.7291 7.13379 11.2962 6.69373 11.2962 6.15649C11.2962 5.61914 11.7291 5.17908 12.2583 5.17908H25.5891C25.9095 5.17908 26.2146 5.34192 26.3901 5.61914C26.5665 5.89539 26.5989 6.23743 26.4702 6.547L22.08 16.807C21.9198 17.1653 21.5832 17.3938 21.1989 17.3938Z" fill="white" />
                                    <path d="M21.8765 22.2662C21.9215 22.2549 21.9428 22.2339 21.9605 22.2129C21.9683 22.2037 21.9761 22.1946 21.9839 22.1855C22.0204 22.1438 22.0237 22.0553 22.0229 22.0105C22.0097 21.9044 21.9189 21.8315 21.8417 21.8315C21.838 21.8315 21.8341 21.8317 21.8317 21.8318C21.7536 21.8372 21.6658 21.9409 21.6724 22.0625C21.6818 22.1793 21.7679 22.2662 21.8397 22.2662H21.8765ZM8.22003 22.2599C8.31921 22.2599 8.39984 22.1655 8.39984 22.0496C8.39984 21.9341 8.31921 21.8401 8.22003 21.8401C8.12091 21.8401 8.04022 21.9341 8.04022 22.0496C8.04022 22.1655 8.12091 22.2599 8.22003 22.2599ZM21.9999 24.2662C21.9522 24.2662 21.8883 24.2662 21.8397 24.2662C20.7021 24.2662 19.7571 23.3545 19.677 22.198C19.5969 20.9929 20.4942 19.9183 21.6957 19.8364C21.7446 19.8331 21.7933 19.8315 21.8417 19.8315C22.9804 19.8315 23.9418 20.7324 24.0195 21.8884C24.051 22.4915 23.8746 23.0612 23.4903 23.5012C23.106 23.9575 22.5768 24.2177 21.9999 24.2662ZM8.22003 24.2599C7.01581 24.2599 6.04022 23.2709 6.04022 22.0496C6.04022 20.8291 7.01581 19.8401 8.22003 19.8401C9.42419 19.8401 10.3998 20.8291 10.3998 22.0496C10.3998 23.2709 9.42419 24.2599 8.22003 24.2599ZM21.1989 17.3938H9.13354C8.70062 17.3938 8.31635 17.1005 8.2038 16.6775L4.27802 2.24768H1.52222C0.993896 2.24768 0.561035 1.80859 0.561035 1.27039C0.561035 0.733032 0.993896 0.292969 1.52222 0.292969H4.99982C5.43182 0.292969 5.8161 0.586304 5.92859 1.01025L9.85443 15.4391H20.5581L24.1149 7.13379H12.2583C11.7291 7.13379 11.2962 6.69373 11.2962 6.15649C11.2962 5.61914 11.7291 5.17908 12.2583 5.17908H25.5891C25.9095 5.17908 26.2146 5.34192 26.3901 5.61914C26.5665 5.89539 26.5989 6.23743 26.4702 6.547L22.08 16.807C21.9198 17.1653 21.5832 17.3938 21.1989 17.3938Z" fill="white" />
                                </svg>
                                <button class="btn border-0 text-white product__buy-me-link">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product__content">
                    <div class="row">
                        <div class="col">
                            <h3 class="product__name" style="text-transform: uppercase;"><?= $p->name ?></h3>
                        </div>
                        <div class="col">
                            <div class="text-center" style="font-size: 9px;">
                                <?php if (!$p->avg_rating) $p->avg_rating = 0 ?>
                                <?php for ($i = 0; $i < floor($p->avg_rating); $i++) { ?>
                                    <i class="fa fa-star" style="color: #F16D7F"></i>
                                <?php } ?>
                                <?php for ($i = 0; $i < 5 - ($p->avg_rating); $i++) { ?>
                                    <i class="fa fa-star text-secondary"></i>
                                <?php } ?>
                                <span class="fw-bold mb-3">
                                    <?= $p->avg_rating > 0 ? number_format($p->avg_rating, 1) : "" ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <p class="product__description">
                        <?= $p->brand ?>
                    </p>
                    <?php if ($p->discount_percent > 0) { ?>
                        <p class="product__description text-dark text-decoration-line-through">
                            Rp. <?= number_format($p->price, 0, ',', '.') ?>
                        </p>
                    <?php } ?>
                    <p class="product__price">
                        Rp. <?= number_format($p->price - ($p->price * $p->discount_percent / 100), 0, ',', '.') ?>
                    </p>
                    <?php if ($p->discount_percent > 0) { ?>
                        <p class="product__price">
                            -<?= $p->discount_percent ?>%
                        </p>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="button">
        <a href="<?= base_url('products') ?>" class="button__link">Browse All Product</a>
    </div>
</section>
<section class="service border mb-5">
    <div class="service__content center">
        <div class="container-fluid">
            <div class="row justify-content-around">
                <div class="col">
                    <div class="row">
                        <div class="col-4 py-4">
                            <img src="<?= assetsPath("img/services/1.png") ?>" alt="service_1" class="service__img w-100 h-100" />
                        </div>
                        <div class="col">
                            <h3 class="service__heading">Asli & 100 % BPOM</h3>
                            <p>
                                Belanja produk kecantikan pasti asli dari ratusan brand yang bersertifikasi BPOM.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-4 py-4">
                            <img src="<?= assetsPath("img/services/2.png") ?>" alt="service_1" class="service__img w-100 h-100" />
                        </div>
                        <div class="col">
                            <h3 class="service__heading">Promo Cantik Tiap Hari</h3>
                            <p>
                                Temukan ribuan produk kecantikan favorit kamu dengan promo spesial setiap hari.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-4 py-4">
                            <img src="<?= assetsPath("img/services/3.png") ?>" alt="service_1" class="service__img w-100 h-100" />
                        </div>
                        <div class="col">
                            <h3 class="service__heading">Review Terpercaya</h3>
                            <p>
                                Baca jutaaan ulasan terpercaya sebelum kamu berbelanja, dari komunitas kecantikan FANCY.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>