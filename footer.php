<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>	
<footer class="footer pattern__wrapper" id="contact">
    <img class="pattern-footer" src="<?php echo get_template_directory_uri(); ?>/images/pattern_3.webp')" alt="pattern footer">
    <div class="container">
        <div class="footer__grid">
            <?php
                $contact_menu = wp_get_nav_menu_items('contact_menu');
                if($contact_menu) {
                    foreach($contact_menu as $menu_item) {
            ?>

            <div class="footer__item animation">
                <span><?php echo $menu_item->description; ?></span>
                <div>
                    <?php if($menu_item->url != '#') { ?>
                    <a class="footer__text" href="<?php echo $menu_item->url; ?>" target="_blank"><?php echo $menu_item->title; ?></a>
                    <?php } else { ?>
                    <p class="footer__text"><?php echo $menu_item->title; ?></p>
                    <?php } ?>
                </div>
            </div>

            <?php
                    }
                }
            ?>
            <div class="footer__item animation">
                <div>
                    <a class="button footer__button" data-popup="true" data-popup-id="a2fbaa0Popup">
                        Обговорити проєкт
                    </a>
                </div>
            </div>
        </div>
                        
        <?php
            $menu_items = wp_get_nav_menu_items('hero_social');
            if($menu_items) {
        ?>

        <div class="footer__social animation">
            <?php
                foreach($menu_items as $menu_item) {
                    if($menu_item->title == 'Instagram') {
            ?>
            <a href="<?php echo $menu_item->url; ?>" target="_blank" aria-label="Перейти на Instagram">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="#000"
                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                </svg>
            </a>
            <?php
                    } elseif($menu_item->title == 'Facebook') {
            ?>
            <a href="<?php echo $menu_item->url; ?>" target="_blank" aria-label="Перейти на Facebook">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path fill="#000"
                        d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                </svg>
            </a>
            <?php
                    } elseif($menu_item->title == 'TikTok') {
            ?>
            <a href="<?php echo $menu_item->url; ?>" target="_blank" aria-label="Перейти на Tiktok">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="#000" 
                        d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/>
                </svg>
            </a>
            <?php
                    } elseif($menu_item->title == 'Telegram') {
            ?>
            <a href="<?php echo $menu_item->url; ?>" target="_blank" aria-label="Перейти на Telegram">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 496 512">
                    <path fill="#000"
                        d="M248 8C111 8 0 119 0 256S111 504 248 504 496 393 496 256 385 8 248 8zM363 176.7c-3.7 39.2-19.9 134.4-28.1 178.3-3.5 18.6-10.3 24.8-16.9 25.4-14.4 1.3-25.3-9.5-39.3-18.7-21.8-14.3-34.2-23.2-55.3-37.2-24.5-16.1-8.6-25 5.3-39.5 3.7-3.8 67.1-61.5 68.3-66.7 .2-.7 .3-3.1-1.2-4.4s-3.6-.8-5.1-.5q-3.3 .7-104.6 69.1-14.8 10.2-26.9 9.9c-8.9-.2-25.9-5-38.6-9.1-15.5-5-27.9-7.7-26.8-16.3q.8-6.7 18.5-13.7 108.4-47.2 144.6-62.3c68.9-28.6 83.2-33.6 92.5-33.8 2.1 0 6.6 .5 9.6 2.9a10.5 10.5 0 0 1 3.5 6.7A43.8 43.8 0 0 1 363 176.7z" />
                </svg>
            </a>
            <?php
                    }
                }
            ?>
        </div>

        <?php
            }
        ?>
        <div class="footer__copyright animation">© <?php echo date('Y'); ?> ТОВ «ЛЬВІВ КОНЦЕПТ». Всі права захищені.</div>
    </div>
</footer>

<div id="a2fbaa0Popup" class="popup" style="display: none;">
    <div class="popup__form">
        <h2 class="heading-3">Обговорити проєкт</h2>
        <?php echo do_shortcode('[contact-form-7 id="a2fbaa0" title="Обговорити проєкт"]'); ?>
    </div>
</div>

<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>