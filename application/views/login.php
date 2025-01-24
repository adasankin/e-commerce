<nav class="navigation">
    <div class="navigation__containter center">
        <h1 class="navigation__page-title">LOGIN</h1>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col">
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
                    <?= $this->session->flashdata('success'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('error')) : ?>
                <div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
                    <?= $this->session->flashdata('error'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<section class="registration center">
    <div class="registration__data">
        <form class="registration__form" method="POST">
            <input type="email" placeholder="Email" name="email" class="registration__form__input-field" required /><br />
            <?= form_error('email'); ?>
            <input type="password" placeholder="Password" name="password" class="registration__form__input-field" required /><br />
            <?= form_error('password'); ?>
            <div class="row">
                <div class="col">
                    <input type="submit" value="LOGIN" class="registration__form__button" />
                </div>
                <div class="col text-end">
                    <p class="registration__form__text">
                        Don't have an account? <a href="<?= base_url('register'); ?>">Register</a>
                    </p>
                </div>
            </div>
        </form>
    </div>
    <div class="registration__loyalty">
        <img class="registration__loyalty__header" src="<?= assetsPath("img/logo.png") ?>" alt="company logo" width="40%">
        <!-- <h2 class="registration__loyalty__header">LOYALTY HAS ITS PERKS</h2> -->
        <p class="registration__loyalty__text">
            Get in on the loyalty program where you can earn points and unlock
            serious perks. Starting with these as soon as you join:
        </p>
        <ul class="registration__loyalty__list">
            <li class="registration__loyalty__list-item">
                15% off welcome offer
            </li>
            <li class="registration__loyalty__list-item">
                Free shipping, returns and exchanges on all orders
            </li>
            <li class="registration__loyalty__list-item">
                $10 off a purchase on your birthday
            </li>
            <li class="registration__loyalty__list-item">
                Early access to products
            </li>
            <li class="registration__loyalty__list-item">
                Exclusive offers & rewards
            </li>
        </ul>
    </div>
</section>