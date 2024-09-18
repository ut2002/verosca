<footer>
    <div class="main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-3 logo">
                    <img src="<?= $global["footer"][1] ?>" class="img-fluid" alt="">
                </div>
                <div class="col-6 title">
                    <?= $global["footer"][2] ?>
                </div>
                <div class="col-3 d-flex justify-content-end social">
                    <?php foreach ($global['social'] as $social_key => $social): ?>
                        <?php if ($social["show"]): ?>
                            <div class="social-item">
                                <a href="<?= $social["link"] ?>" target="_blank" class="<?= $social_key ?>">
                                    <span class="t">
                                        <i class="<?= $social["icon"] ?>"></i>
                                    </span>
                                    <span class="b">
                                        <i class="<?= $social["icon"] ?>"></i>
                                    </span>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p class="mb-0">
            <?= $global["footer"][3] ?>
        </p>
    </div>
</footer>
