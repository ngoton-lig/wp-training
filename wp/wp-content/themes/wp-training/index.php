<?php
get_header();
?>
<main class="l-index">
    <div class="l-index-catch-section">
        <section class="catch" id="js-catch">
            <div class="catch-image">
                <div class="phone" id="js-catch-image">
                    <img src="<?= resolve_uri('assets/images/phone.png') ?>"/>
                </div>
            </div>
            <div class="l-container">
                <div class="catch-text">
                    <h2 class="catch-heading">
                        Catch copy text catch copy!!
                        <span>Catch copy text!</span>
                    </h2>
                    <p class="catch-content">
                        sample text sample sample text sample sample text sample sample text sample
                        sample text sample sample text sample sample text sample sample text sample
                    </p>
                </div>
            </div>
        </section>
    </div>
    <div class="l-index-feature-section">
        <section class="feature">
            <div class="l-container">
                <h2 class="feature-heading">- Feature -</h2>
                <ul class="feature-list">
                    <li class="feature-article">
                        <article>
                            <figure>
                                <img class="feature-image" src="<?= resolve_uri('assets/images/html5.png') ?>"/>
                                <figcaption>
                                    <h2 class="feature-name">HTML5</h2>
                                    <p class="feature-description">sample text sample</p>
                                </figcaption>
                            </figure>
                        </article>
                    </li>
                    <li class="feature-article">
                        <article>
                            <figure>
                                <img class="feature-image" src="<?= resolve_uri('assets/images/css3.png') ?>"/>
                                <figcaption>
                                    <h2 class="feature-name">CSS3</h2>
                                    <p class="feature-description">sample text sample</p>
                                </figcaption>
                            </figure>
                        </article>
                    </li>
                    <li class="feature-article">
                        <article>
                            <figure>
                                <img class="feature-image" src="<?= resolve_uri('assets/images/javascript.png') ?>"/>
                                <figcaption>
                                    <h2 class="feature-name">Javascript</h2>
                                    <p class="feature-description">sample text sample</p>
                                </figcaption>
                            </figure>
                        </article>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <div class="l-index-service-section">
        <section class="service">
            <div class="l-container">
                <h2 class="service-heading">- Service -</h2>
                <article>
                    <figure>
                        <img class="service-image" src="<?= resolve_uri('assets/images/service.png') ?>"/>
                        <figcaption>
                            <h3 class="service-title">2016 our results</h3>
                            <p class="service-description">sample text sample sample text sample sample text sample sample text sample </p>
                        </figcaption>
                    </figure>
                </article>
            </div>
        </section>
    </div>
    <div class="l-index-news-section">
        <section class="news">
            <div class="l-container">
                <h2 class="news-heading">- News -</h2>
                <ul class="news-list">
                    <li class="news-article">
                        <article>
                            <time datetime="2018-06">06.18</time>
                            <h3>New title</h3>
                            <p>sample text sample sample text sample sample text sample sample text sample...</p>
                        </article>
                    </li>
                    <li class="news-article">
                        <article>
                            <time datetime="2017-06">06.17</time>
                            <h3>New title</h3>
                            <p>sample text sample sample text sample sample text sample sample text sample...</p>
                        </article>
                    </li>
                    <li class="news-article">
                        <article>
                            <time datetime="2016-06">06.16</time>
                            <h3>New title</h3>
                            <p>sample text sample sample text sample sample text sample sample text sample...</p>
                        </article>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <div class="l-index-supporter">
        <div class="l-container">
            <ul class="supporter-list">
                <li>
                    <figure>
                        <img class="supporter-image" src="<?= resolve_uri('assets/images/ibm.png') ?>"/>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img class="supporter-image" src="<?= resolve_uri('assets/images/microsoft.png') ?>"/>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img class="supporter-image" src="<?= resolve_uri('assets/images/twitter.png') ?>"/>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img class="supporter-image" src="<?= resolve_uri('assets/images/facebook.png') ?>"/>
                    </figure>
                </li>
            </ul>
        </div>
    </div>
</main>
<div class="l-mail-section">
    <section class="mail">
        <div class="l-container">
            <h2 class="mail-heading">- Mail -</h2>
            <?php import_part('mail-form'); ?>
        </div>
    </section>
</div>
<?php
get_footer();