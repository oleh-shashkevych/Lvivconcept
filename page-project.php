<?php
/**
 * Проэкты - Один
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Проэкты - Один
 */

include 'templates/directions.php'; // подключаем directions.php

get_header(); // подключаем header.php ?>
    <main>
        <section class="section hero hero--small">
            <?php
                $tour_image = get_field('3d_tour_image');
            ?>
            <img src="<?php echo $tour_image; ?>" alt="">
            <div class="hero__wrapper">
                <div class="container">
                    <div class="hero__inner">
                        <?php
                            $project_name = get_field('project_name');
                            if($project_name) {
                                echo '<h1 class="hero__heading single-project heading-1 animation">' . $project_name . '</h1>';
                            }
                        ?>
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
        </section>

        <section class="section single pattern__wrapper">
            <img class="pattern-4" src="<?php echo get_template_directory_uri(); ?>/images/pattern_4.webp')" alt="pattern 3">
            <div class="container">
                <div class="single__data">
                    <?php
                    
                        $tour_link = get_field('3d_tour_link');
                        if($tour_link) {

                            $tour_image = get_field('3d_tour_image');
                            if($tour_image) {
                    ?>

                    <div class="single__tour animation" id="openIframePopup">
                        <img src="<?php echo $tour_image; ?>" alt="">
                        <span class="single__tour-button">3D Тур</span>
                    </div>

                    <?php
                            }
                        }
                    ?>
                    <div class="single__info">
                        <?php
                            $project_location = get_field('project_location');
                            if($project_location) {
                        ?>
                        <div class="single__info-item animation">
                            <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#6C57FF" class="bi bi-geo-alt"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"></path> <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path> </g></svg>
                            <?php
                                echo '<div>' . $project_location . '</div>';
                            ?>
                        </div>
                        <?php
                            }
                        ?>
                        <?php
                            $project_area = get_field('project_area');
                            if($project_area) {
                        ?>
                        <div class="single__info-item animation">
                            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>ionicons-v5-g</title><polyline points="176 112 256 32 336 112" style="fill:none;stroke:#6C57FF;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline><line x1="255.98" y1="32" x2="256" y2="480" style="fill:none;stroke:#6C57FF;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line><polyline points="176 400 256 480 336 400" style="fill:none;stroke:#6C57FF;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline><polyline points="400 176 480 256 400 336" style="fill:none;stroke:#6C57FF;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline><polyline points="112 176 32 256 112 336" style="fill:none;stroke:#6C57FF;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline><line x1="32" y1="256" x2="480" y2="256" style="fill:none;stroke:#6C57FF;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line></g></svg>
                            <?php
                                echo '<div>' . $project_area . ' м²</div>';
                            ?>
                        </div>
                        <?php
                            }
                        ?>
                        <?php
                            $project_area_ga = get_field('project_area_ga');
                            if($project_area_ga) {
                        ?>
                        <div class="single__info-item animation">
                            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>ionicons-v5-g</title><polyline points="176 112 256 32 336 112" style="fill:none;stroke:#6C57FF;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline><line x1="255.98" y1="32" x2="256" y2="480" style="fill:none;stroke:#6C57FF;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line><polyline points="176 400 256 480 336 400" style="fill:none;stroke:#6C57FF;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline><polyline points="400 176 480 256 400 336" style="fill:none;stroke:#6C57FF;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline><polyline points="112 176 32 256 112 336" style="fill:none;stroke:#6C57FF;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></polyline><line x1="32" y1="256" x2="480" y2="256" style="fill:none;stroke:#6C57FF;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"></line></g></svg>                            
                            <?php
                                    echo '<div>' . $project_area_ga . '</div>';
                            ?>
                        </div>
                        <?php
                            }
                        ?>
                        <?php
                                $project_description = get_field('project_description');
                                if($project_description) {
                        ?>
                        <div class="single__info-item animation">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12.37 8.87988H17.62" stroke="#6C57FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6.38 8.87988L7.13 9.62988L9.38 7.37988" stroke="#6C57FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12.37 15.8799H17.62" stroke="#6C57FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6.38 15.8799L7.13 16.6299L9.38 14.3799" stroke="#6C57FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="#6C57FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            <?php
                                    echo '<div>' . $project_description . '</div>';
                            ?>
                        </div>
                        <?php
                            }
                        ?>
                        <?php
                            if(have_rows('plan_gallery')) {
                        ?>
                            <div>
                                <div class="single__info-item single__info-item--button animation">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M2.00024 11.9994C2.00024 16.7135 2.00024 19.0705 3.46471 20.535C4.92918 21.9994 7.2862 21.9994 12.0002 21.9994C16.7143 21.9994 19.0713 21.9994 20.5358 20.535C21.8928 19.1779 21.9924 17.0545 21.9997 12.9994M11.0002 2C6.94518 2.0073 4.82174 2.10686 3.46471 3.46389C2.64814 4.28046 2.28688 5.37454 2.12705 7" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round"></path> <path d="M13 11L22 2M22 2H16.6562M22 2V7.34375M21 3L12 12M12 12H16M12 12V8" stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    <div class="single__gallery single__gallery--none" id="galleryPlans">
                                        <?php
                                            while(have_rows('plan_gallery')) {
                                                the_row();
                                                $image = get_sub_field('image');
                                                if($image) {
                                        ?>

                                        <div class="single__gallery-item animation">
                                            <span>Планувальне рішення</span>
                                            <img src="<?php echo $image; ?>" alt="">
                                        </div>

                                        <?php
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="section single">
            <div class="container">
                <h2 class="heading-3 single__heading animation">
                    Галерея
                </h2>
                <div class="single__gallery" id="galleryPhotos">
                    <?php
                        if(have_rows('photo_gallery')) {
                            $images = array();
                            while(have_rows('photo_gallery')) {
                                the_row();
                                $image = get_sub_field('image');
                                if($image) {
                                    $images[] = $image;
                                }
                            }

                            // Функция для извлечения числовых частей из URL
                            function extract_numbers($url) {
                                $filename = basename($url);
                                // Если имя файла не начинается с числа, возвращаем null
                                if (!preg_match('/^\d/', $filename)) {
                                    return null;
                                }
                                preg_match_all('!\d+!', $filename, $matches);
                                return $matches ? array_map('intval', $matches[0]) : null;
                            }

                            // Получаем значение поля "disable_sorting"
                            $disable_sorting = get_field('disable_sorting');

                            // Сортировка изображений по числовым частям в URL, если возможно и если сортировка не отключена
                            if($disable_sorting != 'yes') {
                                usort($images, function($a, $b) {
                                    $numbersA = extract_numbers($a);
                                    $numbersB = extract_numbers($b);
                                    if($numbersA && $numbersB) {
                                        for ($i = 0; $i < min(count($numbersA), count($numbersB)); $i++) {
                                            if ($numbersA[$i] != $numbersB[$i]) {
                                                return $numbersA[$i] - $numbersB[$i];
                                            }
                                        }
                                        return count($numbersA) - count($numbersB);
                                    } else {
                                        return 0; // Если невозможно извлечь числа, сохраняем исходный порядок
                                    }
                                });
                            }

                            foreach($images as $image) {
                    ?>

                    <div class="single__gallery-item animation">
                        <img src="<?php echo $image; ?>" alt="">
                    </div>

                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </section>
    </main>

    <?php
        $tour_link = get_field('3d_tour_link');
        if($tour_link) {
    ?>

    <div id="iframePopup" class="popup" style="display: none; position: fixed; width: 100%; height: 100%; top: 0; left: 0; background: rgba(0, 0, 0, 0.8); align-items: center; justify-content: center;">
        <div class="popup__inner">
            <button class="popup__close" id="closeIframePopup">╳</button>
            <iframe class="popup__iframe" src="<?php echo $tour_link; ?>" frameborder="0"></iframe>
        </div>
    </div>

    <?php
        }
    ?>
<?php get_footer(); // подключаем footer.php ?>