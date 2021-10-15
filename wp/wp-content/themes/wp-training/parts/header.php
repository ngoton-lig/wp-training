<?php
extract(import_vars_whitelist(get_defined_vars()));
$title_tag = is_front_page() ? 'h1' : 'span';
?>
<div class="hero">
    <img class="hero-background" src="<?= resolve_uri('assets/images/hero.png') ?>"/>
    <div class="hero-text">
        <h1 class="hero-heading">Hello World</h1>
        <p class="hero-content">- description text -</p>
    </div>
    <a class="pagedown is-sp-show">
        <?= get_svg_sprite('icon-arrow-down-circle'); ?>
    </a>
</div>
<header class="<?= get_modified_class('l-header', $modifier) ?><?= get_additional_class($additional) ?>" id="js-header">
    <div class="l-header-container l-container is-pc-show">
        <<?= $title_tag ?> class="header-title">
            <a class="header-title__link" href="<?= URL_HOME ?>">
                <span class="header-title__logo">
                    <?= get_svg_img('logo', ['class' => 'header-title__logo-image', 'base64' => true, 'alt' => NAME_SITE]) ?>
                </span>
            </a>
        </<?= $title_tag ?>>
        <?php import_part('header-menu') ?>
    </div>
</header>