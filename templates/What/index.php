<main>
    <div class="main-wrapper">
        <div class="what-page">
            <div class="main-banner" style="background-image: url(<?= $text['banner']['image'] ?>)">
                <div class="container">
                    <div class="heading">
                        <?= $text['banner']['heading'] ?>
                    </div>
                    <div class="sub-heading">
                        <?= $text['banner']['sub'] ?>
                    </div>
                </div>
            </div>
            <div class="section-what">
                <div class="container">
                    <div class="row row-cols-2">
                        <?php foreach ($whats as $info): ?>
                            <div class="col">
                                <div class="what-card">
                                    <div class="what-card-body">
                                        <div class="title text-uppercase"><?= $info['title'] ?></div>
                                        <p>
                                            <?= $info['content'] ?>
                                        </p>
                                    </div>
                                    <div class="what-card-image">
                                        <img src="<?= $info['image'] ?>" class="w-100" alt="">
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
