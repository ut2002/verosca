<main>
    <div class="main-wrapper">
        <div class="top-page">
            <div class="top-page-banner" style="background-image: url(<?= $text['banner']['image'] ?>)">
                <div class="container">
                    <div class="d-flex flex-column justify-content-end" style="min-height: 100vh">
                        <div class="top-page-banner-caption">
                            <div class="top-page-banner-caption-heading">
                                <?= $text['banner']['heading'] ?>
                            </div>
                            <div class="top-page-banner-caption-link-box">
                                <a href="<?= $text['banner']['link']['href'] ?>" class="btn btn-href top-page-banner-caption-link"><?= $text['banner']['link']['text'] ?></a>
                            </div>
                        </div>
                        <div class="d-flex top-page-banner-card">
                            <div class="w-50 top-page-banner-card-text">
                                <?= $text['banner']['caption']['heading'] ?>
                            </div>
                            <div class="w-50 top-page-banner-card-image" style="background-image: url(<?= $text['banner']['caption']['image'] ?>)">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-page-services">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center top-page-services-header">
                        <div class="heading top-page-services-header-heading">
                            <?= $text['what']['heading'] ?>
                        </div>
                        <div class="top-page-services-header-link">
                            <a href="<?= $text['what']['link'] ?>" class="href-arrow"><?= $text['what']['title'] ?></a>
                        </div>
                    </div>
                    <div class="top-page-services-items">
                        <?php foreach ($whats as $info): ?>
                        <div class="top-page-services-item">
                            <div class="top-page-services-card">
                                <div class="card-header">
                                    <?= $info['title'] ?>
                                </div>
                                <div class="card-image">
                                    <img src="<?= $info['image'] ?>" alt="" class="img-fluid">
                                </div>
                                <div class="card-content">
                                    <?= $info['desc'] ?>
                                </div>
                                <div class="card-link">
                                    <a href="#" class="btn-arrow"></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="top-page-about">
                <div class="top-page-about-header-box">
                    <div class="container">
                        <div class="top-page-about-header">
                            <?php foreach ($text['company'] as $info): ?>
                            <div class="top-page-about-header-card">
                                <div class="card-image">
                                    <img src="<?= $info['image'] ?>" alt="" class="w-100">
                                </div>
                                <div class="card-content">
                                    <?= $info['title'] ?>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="top-page-about-body">
                        <div class="row row-cols-4">
                            <div class="col d-flex flex-column align-items-center progress-wrapper">
                                <div class="progress-circle over50 p60">
                                    <span>60+</span>
                                    <div class="left-half-clipper">
                                        <div class="first50-bar"></div>
                                        <div class="value-bar"></div>
                                    </div>
                                </div>
                                <p><?= $text['target'][1] ?></p>
                            </div>
                            <div class="col d-flex flex-column align-items-center progress-wrapper">
                                <div class="progress-circle over50 p100">
                                    <span>100+</span>
                                    <div class="left-half-clipper">
                                        <div class="first50-bar"></div>
                                        <div class="value-bar"></div>
                                    </div>
                                </div>
                                <p><?= $text['target'][2] ?></p>
                            </div>
                            <div class="col d-flex flex-column align-items-center progress-wrapper">
                                <div class="progress-circle p30">
                                    <span>30+</span>
                                    <div class="left-half-clipper">
                                        <div class="first50-bar"></div>
                                        <div class="value-bar"></div>
                                    </div>
                                </div>
                                <p><?= $text['target'][3] ?></p>
                            </div>
                            <div class="col d-flex flex-column align-items-center progress-wrapper">
                                <div class="progress-circle p10">
                                    <span>10+</span>
                                    <div class="left-half-clipper">
                                        <div class="first50-bar"></div>
                                        <div class="value-bar"></div>
                                    </div>
                                </div>
                                <p><?= $text['target'][4] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="top-page-about-footer">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 top-page-about-footer-caption">
                                <img src="<?= $text['about']['image'] ?>" alt="..." class="w-100">
                                <div class="caption"><?= $text['about']['heading'] ?></div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <div class="top-page-about-footer-card">
                                    <div class="title"><?= $text['about']['title'] ?></div>
                                    <div class="content">
                                        <?php foreach ($text['about']['content'] as $info): ?>
                                        <p><?= $info ?></p>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="link">
                                        <a href="<?= $text['about']['link']['href'] ?>" class="btn btn-href"><?= $text['about']['link']['title'] ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
