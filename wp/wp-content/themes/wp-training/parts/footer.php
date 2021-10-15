<?php
extract(import_vars_whitelist(get_defined_vars()));
?>
<footer class="<?= get_modified_class('l-footer', $modifier) ?><?= get_additional_class($additional) ?>">
    <div class="l-footer-container l-container">
        <div class="footer-copyright">
            <small>
                &copy; <?= the_time('Y') ?> Sample
            </small>
        </div>
        <div class="footer-sns">
            <?php import_part('sns-menu', ['modifier' => 'footer']) ?>
        </div>
    </div>
</footer>