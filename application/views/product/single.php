<nav class="navigation">
    <div class="navigation__containter center">
        <h1 class="navigation__page-title">PRODUCTS</h1>
        <nav class="navigation__breadcrumbs">
            <ul class="navigation__breadcrumbs-ul">
                <li class="navigation__breadcrumbs-li">
                    <a href="<?= base_url() ?>" class="navigation__breadcrumbs-link">HOME</a>
                </li>
                <li class="navigation__breadcrumbs-li">
                    <a href="<?= base_url('products') ?>" class="navigation__breadcrumbs-link navigation__breadcrumbs-link-last">PRODUCTS</a>
                </li>
            </ul>
        </nav>
    </div>
</nav>
<section class="product__info">
    <div class="product__gallery">
        <img src="<?= assetsPath("img/products/" . $product->image) ?>" alt="current product" class="product__gallery__image">
    </div>
    <div class="product__data center">
        <h3 class="product__data__subtitle" style="text-transform: uppercase;"><?= $product->category_name ?></h3>
        <svg class="product__data__devider" width="63" height="4" viewBox="0 0 63 4" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M63 0.786865H0V3.81225H63V0.786865Z" fill="#EF5B70" />
        </svg>
        <h2 class="product__data__title pb-0" style="text-transform: uppercase;"><?= $product->name ?></h2>
        <h2 class="product__data__title fw-bold"><?= $product->brand ?></h2>
        <p class="product__data__text text-start">
            <?= $product->description ?>
        </p>
        <?php if ($product->discount_percent > 0) { ?>
            <p class="product__data__title p-1 text-decoration-line-through">Rp. <?= number_format($product->price, 0, ',', '.') ?></p>
        <?php } ?>
        <p class="product__data__price p-1">Rp. <?= number_format($product->price - ($product->price * $product->discount_percent / 100), 0, ',', '.') ?></p>
        <?php if ($product->discount_percent > 0) { ?>
            <p class="product__data__price pb-3 fs-5">
                <small>-<?= $product->discount_percent ?>%</small>
            </p>
        <?php } ?>
        <div class="text-center">
            <!-- foreach fa-star by average rating -->
            <?php if (!$avg_rating) $avg_rating = 0 ?>
            <?php for ($i = 0; $i < floor($avg_rating); $i++) { ?>
                <i class="fa fa-star" style="color: #F16D7F"></i>
            <?php } ?>
            <?php for ($i = 0; $i < 5 - ($avg_rating); $i++) { ?>
                <i class="fa fa-star text-secondary"></i>
            <?php } ?>
            <span class="fw-bold mb-3">
                <?= $avg_rating > 0 ? number_format($avg_rating, 1) : "" ?>
            </span>
        </div>
        <svg class="product__data__devider" width="642" height="2" viewBox="0 0 642 2" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.5 1.49829H641.5H0.5Z" stroke="#EAEAEA" stroke-linejoin="round" />
        </svg>
        <form hx-post="<?= base_url('addtocart/' . $product->id) ?>" hx-swap="none">
            <div class="product__data__input mt-3">
                <div class="product__data__input__box">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-auto">
                                <button type="button" class="btn product__data__input__button" onclick="this.parentNode.parentNode.querySelector('input[type=number]').stepDown()">
                                    <svg class="product__data__input__button__logo" width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.5 1H9.5" stroke="#EF5B70" stroke-linecap="round" />
                                    </svg>
                                </button>
                            </div>
                            <div class="col">
                                <input type="number" class="product__data__input__number form-control text-center" name="qty" min="1" max="<?= $product->stock ?>" value="<?= $cart_qty ?>" />
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn product__data__input__button" onclick="this.parentNode.parentNode.querySelector('input[type=number]').stepUp()">
                                    <svg class="product__data__input__button__logo" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.5 5H9.5" stroke="#EF5B70" stroke-linecap="round" />
                                        <path d="M5 0.5V9.5" stroke="#EF5B70" stroke-linecap="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ($product->stock > 0) { ?>
                <div class="product__data__button">
                    <svg class="product__data__button__logo" width="27" height="25" viewBox="0 0 27 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.49847 22.185C5.50635 21.752 5.64091 21.3309 5.88519 20.9748C6.12947 20.6186 6.47261 20.3431 6.87158 20.1828C7.27055 20.0226 7.7076 19.9848 8.12781 20.0741C8.54802 20.1635 8.93269 20.376 9.23358 20.685C9.53447 20.994 9.73817 21.3857 9.81909 21.811C9.90002 22.2363 9.85453 22.6763 9.68842 23.0756C9.52231 23.475 9.24296 23.8161 8.88538 24.0559C8.52779 24.2957 8.10791 24.4237 7.67847 24.4237C7.38956 24.4211 7.10399 24.3611 6.83807 24.2472C6.57216 24.1333 6.3311 23.9676 6.12866 23.7597C5.92623 23.5518 5.76639 23.3057 5.65826 23.0355C5.55013 22.7653 5.49584 22.4763 5.49847 22.185ZM21.3045 24.4237C20.8711 24.4303 20.4453 24.3087 20.0797 24.074C19.7141 23.8393 19.4247 23.5017 19.2471 23.103C19.0696 22.7042 19.0117 22.2618 19.0806 21.8303C19.1496 21.3988 19.3423 20.9971 19.6351 20.6748C19.9278 20.3524 20.3077 20.1236 20.728 20.0165C21.1482 19.9095 21.5903 19.929 21.9997 20.0724C22.4091 20.2159 22.7679 20.4771 23.0317 20.8238C23.2956 21.1706 23.453 21.5877 23.4845 22.0236C23.5269 22.6155 23.3369 23.2004 22.9555 23.6523C22.7706 23.8745 22.5436 24.0574 22.2877 24.1901C22.0319 24.3227 21.7524 24.4025 21.4655 24.4247L21.3045 24.4237ZM8.59351 17.4855C8.38116 17.4851 8.17488 17.414 8.00671 17.2833C7.83855 17.1525 7.71792 16.9694 7.66351 16.7624L3.73651 2.19527H0.978516C0.719001 2.19527 0.470064 2.09128 0.28656 1.90622C0.103056 1.72116 0 1.47018 0 1.20847C0 0.946764 0.103056 0.695782 0.28656 0.510726C0.470064 0.325669 0.719001 0.22168 0.978516 0.22168H4.45752C4.66982 0.222254 4.876 0.293463 5.04413 0.424184C5.21226 0.554905 5.33295 0.737883 5.38751 0.944787L9.31451 15.5119H20.0185L23.5765 7.12665H11.7185C11.459 7.12665 11.2101 7.02266 11.0266 6.83761C10.8431 6.65255 10.74 6.40157 10.74 6.13986C10.74 5.87815 10.8431 5.62717 11.0266 5.44211C11.2101 5.25705 11.459 5.15306 11.7185 5.15306H25.0535C25.2131 5.15352 25.3701 5.19451 25.5099 5.27223C25.6497 5.34995 25.7679 5.46195 25.8535 5.59784C25.9413 5.73569 25.9945 5.89303 26.0084 6.05627C26.0224 6.21951 25.9966 6.38368 25.9335 6.53465L21.5425 16.8935C21.469 17.0684 21.3462 17.2177 21.1895 17.3229C21.0327 17.4281 20.8488 17.4846 20.6605 17.4855H8.59351Z" fill="#EF5B70" />
                    </svg>
                    <button class="btn border-0 product__data__button__text">Add to Cart</button>
                </div>
            <?php } else { ?>
                <div class="product__data__button">
                    <button class="btn border-0 product__data__button__text" disabled>Out of Stock</button>
                </div>
            <?php } ?>
        </form>
    </div>
</section>
<?php if (count($reviews) > 0) { ?>
    <section class="catalog catalog-space center py-3">
        <div class="container border">
            <div class="row">
                <div class="col text-center">
                    <h1 class="navigation__page-title fw-bord text-black">USER REVIEWS</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <?php foreach ($reviews as $r) { ?>
                            <div class="col-12">
                                <div class="card mb-3">
                                    <div class="card-body px-5">
                                        <div class="row">
                                            <div class="col">
                                                <div class="d-flex justify-content-between">
                                                    <h5 class="card-title"><?= $r->f_name ?> <?= $r->l_name ?> - <?= $r->email ?></h5>
                                                </div>
                                                <p class="card-text"><?= $r->review ?></p>
                                            </div>
                                            <div class="col text-end">
                                                <p class="card-text">
                                                    <small class="text-muted">
                                                        <?php for ($i = 0; $i < $r->rating; $i++) { ?>
                                                            <i class="fa fa-star" style="color: #F16D7F"></i>
                                                        <?php } ?>
                                                        <?php for ($i = 0; $i < 5 - $r->rating; $i++) { ?>
                                                            <i class="fa fa-star text-secondary"></i>
                                                        <?php } ?>
                                                    </small>
                                                </p>
                                                <?php if ($r->image) { ?>
                                                    <a href="<?= assetsPath("img/reviews/" . $r->image) ?>" target="_blank">
                                                        <img src="<?= assetsPath("img/reviews/" . $r->image) ?>" class="card-img-top" alt="review image" style="object-fit : cover;width:200px; height: 200px" />
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<section class="catalog catalog-space center">
    <div class="catalog__product-cards">
        <?php foreach ($related_products as $p) { ?>
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
</section>