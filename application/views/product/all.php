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
<div class="filter-sort center">
    <details class="filter">
        <summary class="filter__summary">
            <span class="filter__heading">FILTER</span><svg class="filter__logo" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.833333 10H4.16667C4.625 10 5 9.625 5 9.16667C5 8.70833 4.625 8.33333 4.16667 8.33333H0.833333C0.375 8.33333 0 8.70833 0 9.16667C0 9.625 0.375 10 0.833333 10ZM0 0.833333C0 1.29167 0.375 1.66667 0.833333 1.66667H14.1667C14.625 1.66667 15 1.29167 15 0.833333C15 0.375 14.625 0 14.1667 0H0.833333C0.375 0 0 0.375 0 0.833333ZM0.833333 5.83333H9.16667C9.625 5.83333 10 5.45833 10 5C10 4.54167 9.625 4.16667 9.16667 4.16667H0.833333C0.375 4.16667 0 4.54167 0 5C0 5.45833 0.375 5.83333 0.833333 5.83333Z" fill="black" />
            </svg>
        </summary>
        <div class="filter__content">
            <details class="filter__item" open>
                <summary class="filter__head">CATEGORY</summary>
                <div class="filter__link-box">
                    <a href="<?= base_url('products') ?>" class="filter__link">All Categories</a>
                    <?php foreach ($categories as $c) { ?>
                        <a href="<?= base_url('products/category/' . $c->id) ?>" class="filter__link"><?= $c->name ?></a>
                    <?php } ?>
                </div>
            </details>
        </div>
    </details>
    <div class="sort">
        <!-- <details class="sort__details">
            <summary class="sort__summary">
                <span class="sort__heading">SIZE</span><svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.00214 5.00214C4.83521 5.00247 4.67343 4.94433 4.54488 4.83782L0.258102 1.2655C0.112196 1.14422 0.0204417 0.969958 0.00302325 0.781035C-0.0143952 0.592112 0.0439493 0.404007 0.165221 0.258101C0.286493 0.112196 0.460759 0.0204417 0.649682 0.00302327C0.838605 -0.0143952 1.02671 0.043949 1.17262 0.165221L5.00214 3.36602L8.83167 0.279536C8.90475 0.220188 8.98884 0.175869 9.0791 0.149125C9.16937 0.122382 9.26403 0.113741 9.35764 0.1237C9.45126 0.133659 9.54198 0.162021 9.6246 0.207156C9.70722 0.252292 9.7801 0.313311 9.83906 0.386705C9.90449 0.460167 9.95405 0.546351 9.98462 0.639855C10.0152 0.733359 10.0261 0.83217 10.0167 0.930097C10.0073 1.02802 9.97784 1.12296 9.93005 1.20895C9.88227 1.29494 9.81724 1.37013 9.73904 1.42982L5.45225 4.88068C5.32002 4.97036 5.16154 5.01312 5.00214 5.00214V5.00214Z" fill="#6F6E6E" />
                </svg>
            </summary>
            <div class="sort__box">
                <div class="sort__check">
                    <input id="sort__check1" type="checkbox" /><label for="sort__check1">XS</label>
                </div>
                <div class="sort__check">
                    <input id="sort__check2" type="checkbox" /><label for="sort__check2">S</label>
                </div>
                <div class="sort__check">
                    <input id="sort__check3" type="checkbox" /><label for="sort__check3">M</label>
                </div>
                <div class="sort__check">
                    <input id="sort__check4" type="checkbox" /><label for="sort__check4">L</label>
                </div>
            </div>
        </details> -->
    </div>
</div>
<section class="catalog center">
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
</section>
<div class="paginator center">
    <svg class="paginator__item paginator__icon" width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M8.99512 2L3.99512 7L8.99512 12L7.99512 14L0.995117 7L7.99512 0L8.99512 2Z" fill="black" />
    </svg>
    <?php for ($n = 1; $n <= $pages['total']; $n++) { ?>
        <?php if ($n == $pages['current']) { ?>
            <span class="paginator__item paginator__page paginator__page--active product__price"><?= $n ?></span>
        <?php } else { ?>
            <?php if ($pages['type'] == "all") { ?>
                <a href="<?= base_url("products/" . $n) ?>" class="paginator__item paginator__page"><?= $n ?></a>
            <?php } else { ?>
                <a href="<?= base_url("products/" . $pages['type'] . "/" . $n) ?>" class="paginator__item paginator__page"><?= $n ?></a>
            <?php } ?>
        <?php } ?>
    <?php } ?>
    <svg class="paginator__item paginator__icon" width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.994995 12L5.995 7L0.994995 2L1.995 0L8.995 7L1.995 14L0.994995 12Z" fill="black" />
    </svg>
</div>
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