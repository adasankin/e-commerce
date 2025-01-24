<nav class="navigation">
    <div class="navigation__containter center">
        <h1 class="navigation__page-title">REGISTRATION</h1>
    </div>
</nav>
<section class="registration center">
    <div class="registration__data">
        <form class="registration__form" method="POST">
            <h3 class="registration__form__header">Your Name</h3>
            <input type="text" placeholder="First Name" name="first_name" class="registration__form__input-field" required /><br />
            <?= form_error('first_name'); ?>
            <input type="text" placeholder="Last Name" name="last_name" class="registration__form__input-field" required /><br />
            <?= form_error('last_name'); ?>
            <div class="registration__form__radio">
                <div class="registration__form__radio-item">
                    <input type="radio" name="gender" id="male" value="male" required />
                    <label for="male">Male</label>
                </div>
                <div class="registration__form__radio-item">
                    <input type="radio" name="gender" id="female" value="female" required />
                    <label for="female">Female</label><br />
                </div>
                <?= form_error('gender'); ?>
            </div>
            <h3 class="registration__form__header">Login details</h3>
            <input type="email" placeholder="Email" name="email" class="registration__form__input-field" required /><br />
            <?= form_error('email'); ?>
            <input type="password" placeholder="Password" name="password" class="registration__form__input-field" required /><br />
            <?= form_error('password'); ?>
            <p class="registration__form__text">
                Please use 8 or more characters, with at least 1 number and a
                mixture of uppercase and lowercase letters
            </p>
            <div class="row">
                <div class="col">
                    <input type="submit" value="JOIN NOW" class="registration__form__button" />
                </div>
                <div class="col text-end">
                    <p class="registration__form__text">
                        Already have an account? <a href="<?= base_url('login'); ?>">Login</a>
                    </p>
                </div>
            </div>
        </form>
    </div>
    <div class="registration__loyalty">
        <img class="registration__loyalty__header" src="<?= assetsPath("img/logo.png") ?>" alt="company logo" width="40%">
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