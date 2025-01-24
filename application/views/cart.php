<nav class="navigation">
    <div class="navigation__containter center">
        <h1 class="navigation__page-title">SHOPPING CART</h1>
    </div>
</nav>
<?php if (count($carts) > 0) { ?>
    <section class="shopping-cart center">
        <div class="shopping-cart__container-left">
            <?php foreach ($carts as $p) { ?>
                <div class="shopping-cart__product-item">
                    <img src="<?= assetsPath("img/products/" . $p->image) ?>" alt="product_1" class="shopping-cart__product-img" style="width: 50%" />
                    <div class="shopping-cart__product-info">
                        <h2 class="shopping-cart__product-header">
                            <?= $p->name ?>
                        </h2>
                        <div class="row">
                            <div class="col-auto">
                                <p class="shopping-cart__product-text">
                                    Price:
                                </p>
                            </div>
                            <div class="col">
                                <?php if ($p->discount_percent > 0) { ?>
                                    <div class="shopping-cart__product-text fs-5 text-dark text-decoration-line-through">
                                        Rp. <?= number_format($p->price, 0, ',', '.') ?>
                                    </div>
                                <?php } ?>
                                <span class="shopping-cart__product-text-colored">Rp. <?= number_format($p->price - ($p->price * $p->discount_percent / 100), 0, ',', '.') ?>
                                </span>
                            </div>
                        </div>
                        <p class="shopping-cart__product-text">
                            Quantity:
                        </p>

                        <form hx-post="<?= base_url('cartupdate/' . $p->id) ?>" hx-swap="none">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-auto">
                                        <button type="button" class="btn product__data__input__button" onclick="this.parentNode.parentNode.querySelector('input[type=number]').stepDown()">
                                            <svg class="product__data__input__button__logo" width="10" height="2" viewBox="0 0 10 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.5 1H9.5" stroke="#EF5B70" stroke-linecap="round" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="col-auto">
                                        <input type="number" class="product__data__input__number form-control text-center" name="qty" min="1" max="<?= $p->stock ?>" value="<?= $p->qty ?>" />
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
                                <div class="row">
                                    <div class="col text-center">
                                        <button class="btn btn-updatecart d-none">
                                            <i class="fa fa-repeat" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <button class="btn border-0" hx-post="<?= base_url('cartremove/' . $p->id) ?>" hx-confirm="Are you sure want to remove?">
                        <svg class="shopping-cart__product-remove" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.2453 9L17.5302 2.71516C17.8285 2.41741 17.9962 2.01336 17.9966 1.59191C17.997 1.17045 17.8299 0.76611 17.5322 0.467832C17.2344 0.169555 16.8304 0.00177586 16.4089 0.00140366C15.9875 0.00103146 15.5831 0.168097 15.2848 0.465848L9 6.75069L2.71516 0.465848C2.41688 0.167571 2.01233 0 1.5905 0C1.16868 0 0.764125 0.167571 0.465848 0.465848C0.167571 0.764125 0 1.16868 0 1.5905C0 2.01233 0.167571 2.41688 0.465848 2.71516L6.75069 9L0.465848 15.2848C0.167571 15.5831 0 15.9877 0 16.4095C0 16.8313 0.167571 17.2359 0.465848 17.5342C0.764125 17.8324 1.16868 18 1.5905 18C2.01233 18 2.41688 17.8324 2.71516 17.5342L9 11.2493L15.2848 17.5342C15.5831 17.8324 15.9877 18 16.4095 18C16.8313 18 17.2359 17.8324 17.5342 17.5342C17.8324 17.2359 18 16.8313 18 16.4095C18 15.9877 17.8324 15.5831 17.5342 15.2848L11.2453 9Z" fill="#575757" />
                        </svg>
                    </button>
                </div>
            <?php } ?>
            <div class="shopping-cart__buttons">
                <a href="<?= base_url('cartreset') ?>" onclick="return confirm('Are you sure you want to reset?')" class="shopping-cart__button-link">CLEAR SHOPPING CART</a>
                <a href="<?= base_url('products') ?>" class="shopping-cart__button-link">CONTINUE SHOPPING</a>
            </div>
        </div>
        <div class="shopping-cart__container-right">
            <!-- <div class="adress">
                <h3 class="adress__title">SHIPPING ADDRESS</h3>
                <form action="#" class="adress__form">
                    <input type="text" placeholder="City" class="adress__input" /><br />
                    <input type="text" placeholder="State" class="adress__input" /><br />
                    <input type="number" placeholder="Postcode / Zip" class="adress__input" /><br />
                </form>
            </div> -->
            <div class="bill mt-0">
                <!-- <div class="bill__subtotal">
                    <p class="bill__subtotal__text">SUB TOTAL</p>
                    <p class="bill__subtotal__amount">Rp. 900.000</p>
                </div> -->
                <div class="bill__total">
                    <p class="bill__total__text">GRAND TOTAL</p>
                    <p class="bill__total__amount">Rp. <?= number_format($total, 0, ',', '.') ?></p>
                </div>
                <?php if (count($carts) > 0) { ?>
                    <button hx-post="<?= base_url('checkout') ?>" hx-swap="none" class="btn border-0 bill__checkout-button">PROCEED TO CHECKOUT</button>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } else { ?>
    <div class="container my-5 bg-light rounded p-3">
        <div class="row">
            <div class="col text-center">
                <h2 class="shopping-cart__empty">Your cart is empty</h2>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mt-3">
            <div class="col-auto p-0">
                <a href="<?= base_url('products') ?>" class="shopping-cart__button-link fs-4 py-2">GO SHOPPING</a>
            </div>
        </div>
    </div>
<?php } ?>