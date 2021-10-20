<?php
get_header();
?>
<main class="l-index">
    <div class="l-index-catch-section">
        <?php import_part('catch') ?>
    </div>
    <div class="l-index-feature-section">
        <?php import_part('feature') ?>
    </div>
    <div class="l-index-service-section">
        <?php import_part('service') ?>
    </div>
    <div class="l-index-news-section">
        <?php import_part('news') ?>
    </div>
    <div class="l-index-supporter">
        <div class="l-container">
            <?php import_part('supporter-list') ?>
        </div>
    </div>
</main>
<div class="l-mail-section">
    <?php import_part('mail') ?>
</div>
<?php
get_footer();
