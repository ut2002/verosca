<main>
    <div class="main-wrapper">
        <div class="about-page">
            <div class="main-banner" style="background-image: url(<?= $text['banner']['image'] ?>)">
                <div class="container">
                    <div class="heading">
                        <?= $text['banner']['heading'] ?>
                    </div>
                </div>
            </div>
            <div class="section-about">
                <div class="container">
                    <div class="d-flex flex-lg-row flex-column align-items-center section-about-box">
                        <div class="info">
                            <div class="title">
                                <?= $text['info']['title'] ?>
                            </div>
                            <div class="content">
                                <?php foreach ($text['info']['content'] as $info): ?>
                                    <p>
                                        <?= $info ?>
                                    </p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="image">
                            <img src="<?= $text['info']['image'] ?>" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
