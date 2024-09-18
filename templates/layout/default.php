<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/images/favicon/favicon.ico">
    <?= $this->fetch('meta') ?>
    <title><?= !empty($meta['title']) ? ($meta['title'] . ' | ') : ''; ?><?= $global['meta_default']['title']; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css?v=<?= $global['static_version']; ?>">
    <link rel="stylesheet" href="/plugins/fontawesome/css/all.min.css?v=<?= $global['static_version']; ?>">
    <link rel="stylesheet" href="https://www.cssscript.com/demo/circular-progress-bar-plain-html-css/css-circular-prog-bar.css">
    <?= $this->fetch('css') ?>
    <link rel="stylesheet" href="/css/style.css?v=<?= $global['static_version']; ?>">
</head>
<body>
    <?= $this->element('header'); ?>
    <?= $this->fetch('content') ?>
    <?= $this->element('footer'); ?>

    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js?v=<?= $global['static_version']; ?>"></script>
    <script src="/plugins/jquery/jquery-1.12.4.min.js?v=<?= $global['static_version']; ?>"></script>
    <script>
        window.addEventListener('scroll', function() {
            let content = document.getElementById('headerBar');
            if (window.scrollY > 100) {
                content.classList.add('menu-sticky');
            } else {
                content.classList.remove('menu-sticky');
            }
        });

        window.addEventListener('load', function() {
            let content = document.getElementById('headerBar');
            if (window.scrollY > 100) {
                content.classList.add('menu-sticky');
            } else {
                content.classList.remove('menu-sticky');
            }
        });

    </script>
    <?= $this->fetch('script') ?>
</body>
</html>

