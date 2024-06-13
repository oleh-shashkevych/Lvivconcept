<?php
/**
 * Проэкты
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Проэкты
 */

include 'templates/directions.php'; // подключаем directions.php

get_header(); // подключаем header.php ?>
<style>
    @media (max-width: 768px) {
        .header {
            background-color: rgba(0, 0, 0, .4);
            -webkit-backdrop-filter: blur(3px);
            backdrop-filter: blur(3px);
        }

        .hero {
            pointer-events: none;
            visibility: hidden;
            height: 95px;
        }
    }
</style>
    <main>
        <section class="section hero hero--small">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="">
            <div class="hero__wrapper">
                <div class="container">
                    <div class="hero__inner">
                        <h1 class="hero__heading heading-1 animation"><?php echo get_the_title(); ?></h1>
                        <a class="button hero__button animation" data-popup="true" data-popup-id="a2fbaa0Popup">
                            Обговорити проєкт
                        </a>
                    </div>
                    <?php
                        $menu_items = wp_get_nav_menu_items('hero_social');
                        if($menu_items) {
                    ?>

                    <div class="hero__social  d-mobile-none">
                        <?php
                            foreach($menu_items as $menu_item) {
                                if($menu_item->title == 'Instagram') {
                        ?>
                        <a href="<?php echo $menu_item->url; ?>" target="_blank" aria-label="Перейти на Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="#ffffff"
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg>
                        </a>
                        <?php
                                } elseif($menu_item->title == 'Facebook') {
                        ?>
                        <a href="<?php echo $menu_item->url; ?>" target="_blank" aria-label="Перейти на Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path fill="#ffffff"
                                    d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                            </svg>
                        </a>
                        <?php
                                } elseif($menu_item->title == 'TikTok') {
                        ?>
                        <a href="<?php echo $menu_item->url; ?>" target="_blank" aria-label="Перейти на Tiktok">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="#ffffff" 
                                    d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z"/>
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
                </div>
            </div>
            <div id="category" style="position: absolute; bottom: 0; width: 100%;"></div>
        </section>

        <section class="section rooms pattern__wrapper">
            <img class="pattern-4" src="<?php echo get_template_directory_uri(); ?>/images/pattern_4.webp')" alt="pattern 3">
            <div class="container">
                <div class="rooms__tabs animation" id="roomsTabs">
                    <button class="rooms__tab active" id="roomsTabs-all"><span>Всі</span></button>
                    <button class="rooms__tab" id="roomsTabs-zhyt"><span>Житло</span></button>
                    <button class="rooms__tab" id="roomsTabs-com"><span>Комерція</span></button>
                    <button class="rooms__tab" id="roomsTabs-arch"><span>Архітектура</span></button>
                </div>
                <?php
                    $parent_id = get_the_ID(); // Получаем ID текущей страницы
                    $child_pages = get_pages(array(
                        'sort_column' => 'menu_order', // Сортировка по порядку в меню
                        'parent' => $parent_id // Получаем только дочерние страницы текущей страницы
                    ));

                    if($child_pages) {
                ?>

                <div class="rooms__list" data-tabs-id="roomsTabs">
                    <?php
                        foreach($child_pages as $page) {
                            $image_url = get_the_post_thumbnail_url($page->ID, 'full'); // Получаем URL оригинального изображения страницы
                            $content = get_post_field('post_content', $page->ID); // Получаем контент страницы

                            // Определяем значение data-tab-id на основе контента страницы
                            if(strpos($content, 'Комерція') !== false) {
                                $tab_id = 'roomsTabs-com';
                            } elseif(strpos($content, 'Житло') !== false) {
                                $tab_id = 'roomsTabs-zhyt';
                            } elseif(strpos($content, 'Архітектура') !== false) {
                                $tab_id = 'roomsTabs-arch';
                            } else {
                                $tab_id = '';
                            }
                    ?>
                    <a href="<?php echo get_permalink($page->ID); ?>" class="rooms__item animation" data-tab-id="<?php echo $tab_id; ?>">
                        <article>
                            <div>
                                <h2><?php echo $page->post_title; ?></h2>
                            </div>
                        </article>
                        <img src="<?php echo $image_url; ?>" alt="">
                    </a>
                    <?php
                        }
                    ?>
                </div>

                <?php
                    }
                ?>

            </div>
        </section>
    </main>
<?php get_footer(); // подключаем footer.php ?>