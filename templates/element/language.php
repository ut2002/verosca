<div class="dropdown language">
    <?php if (!empty($language_object = $global['languages'][$language_active])): ?>
    <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="<?= $language_object["flag"] ?>" class="mb-1" style="height: 15px" alt="">
        <?= $language_object["name"] ?>
    </button>
    <?php endif; ?>
    <ul class="dropdown-menu">
        <?php foreach ($global['languages'] as $lang_key => $lang): ?>
            <?php if ($lang["show"]): ?>
                <li>
                    <a class="dropdown-item text-capitalize" href="?language=<?= $lang_key ?>">
                        <img src="<?= $lang["flag"] ?>" class="me-1 mb-1" style="height: 20px" alt="">
                        <?= $lang["name"] ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</div>
