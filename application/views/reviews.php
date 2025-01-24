<nav class="navigation">
    <div class="navigation__containter center">
        <h1 class="navigation__page-title">ADD REVIEWS</h1>
    </div>
</nav>
<?php if (count($carts) > 0) { ?>
    <form method="post" enctype="multipart/form-data" class="review-form">
        <section class="shopping-cart center w-100">
            <div class="shopping-cart__container-left w-100">
                <?php foreach ($carts as $p) { ?>
                    <input type="hidden" name="product_ids[]" value="<?= $p->id ?>">
                    <div class="shopping-cart__product-item w-100">
                        <img src="<?= assetsPath("img/products/" . $p->image) ?>" alt="product_1" class="shopping-cart__product-img" style="width: 40%; height: 400px" />
                        <div class="shopping-cart__product-info w-100">
                            <h2 class="shopping-cart__product-header">
                                <?= $p->name ?>
                            </h2>
                            <p class="shopping-cart__product-text">
                                Ratings:
                                <input type="hidden" name="ratings[]" value="5">
                                <span class="review-rating">
                                    <button class="btn border-0 p-1 review-rating-stars text-warning">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn border-0 p-1 review-rating-stars text-warning">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn border-0 p-1 review-rating-stars text-warning">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn border-0 p-1 review-rating-stars text-warning">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn border-0 p-1 review-rating-stars text-warning">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </p>
                            <p class="shopping-cart__product-text w-100">
                                Review:
                                <textarea name="reviews[]" class="form-control" rows="3"></textarea>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02" name="images[]" accept="image/*">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
        <div class="container mb-5 bg-light rounded p-3">
            <div class="row justify-content-center align-items-center mt-3">
                <div class="col-auto p-0">
                    <input type="submit" class="btn shopping-cart__button-link fs-4 py-2" value="SUBMIT">
                </div>
            </div>
        </div>
    </form>
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