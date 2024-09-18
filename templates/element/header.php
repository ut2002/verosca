<header>
    <div class="header-wrapper">
        <div id="headerPlaceholder" style="height: 0"></div>
        <div id="headerBar" style="top: 0">
            <div class="d-flex justify-content-between align-items-center">
                <div class="header-logo">
                    <a href="/">
                        <img src="<?= $global["header"][1] ?>" alt="" class="img-fluid d-none d-lg-block">
                        <img src="<?= $global["header"][2] ?>" alt="" class="img-fluid d-block d-lg-none">
                    </a>
                </div>
                <div class="header-menu d-none d-lg-block">
                    <div class="d-flex justify-content-between">
                        <?php foreach ($global['menu'] as $menu): ?>
                            <?php if ($menu["show"]): ?>
                                <div class="item">
                                    <a
                                        href="<?= $menu["link"] ?>"
                                        class="<?= isset($meta['menu_active']) && $meta['menu_active'] === $menu['menu_active'] ? 'active' : ''; ?>">
                                        <?= $menu["title"] ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <div class="item">
                            <?= $this->element('language'); ?>
                        </div>

                    </div>
                </div>
                <div class="header-menu-sp d-flex d-lg-none align-items-center">
                    <?= $this->element('language'); ?>
                    <button
                        class="btn responsive-menu-toggle"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasMenu"
                        aria-controls="offcanvasMenu"
                        aria-label="Toggle navigation"
                    >
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <?php foreach ($global['menu'] as $menu): ?>
                                    <?php if ($menu["show"]): ?>
                                        <li class="item">
                                            <a class="nav-link <?= isset($meta['menu_active']) && $meta['menu_active'] === $menu['menu_active'] ? 'active' : ''; ?>" href="<?= $menu["link"] ?>"><?= $menu["title"] ?></a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
