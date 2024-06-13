<?php
/**
 * Главная home.html
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Главная
 */

include 'templates/directions.php'; // подключаем directions.php

get_header(); // подключаем header.php ?>
    <main>
        <section class="section hero">
            <video id="heroMobileVideo" class="hero__video-mobile" autoplay muted loop playsinline>
                <source src="<?php echo get_template_directory_uri(); ?>/images/hero.mp4" type="video/mp4">
                Ваш браузер не поддерживает тег video.
            </video>
            <video class="hero__video-desktop" autoplay muted loop>
                <source src="/wp-content/uploads/2024/05/img_3218.mp4" type="video/mp4">
                Ваш браузер не поддерживает тег video.
            </video>
            <div class="hero__wrapper">
                <div class="container">
                    <div class="hero__inner">
                        <h1 class="hero__heading heading-1 animation d-mobile-none">Проєктуємо та<br>втілюємо ваші мрії</h1>
                        <h1 class="hero__heading heading-1 animation d-none d-mobile-block">Проєктуємо<br>та втілюємо<br>ваші мрії</h1>
                        <a class="button hero__button animation" data-popup="true" data-popup-id="a2fbaa0Popup">
                            Обговорити проєкт
                        </a>
                    </div>
                    <?php
                        $menu_items = wp_get_nav_menu_items('hero_social');
                        if($menu_items) {
                    ?>

                    <div class="hero__social d-mobile-none">
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

        <section class="section about pattern__wrapper" id="about">
            <img class="pattern-1" src="<?php echo get_template_directory_uri(); ?>/images/pattern_1.webp')" alt="pattern 1">
            <div class="container">
                <div class="about__grid">
                    <div class="about__text">
                        <h2 class="heading-2 about__heading animation">
                            Про нас
                            <a href="#" aria-label="Перейти на Instagram">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="#000000"
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg>
                            </a>
                        </h2>
                        <p class="animation">Lviv Concept - це молода компанія, заснована у&nbsp;Львові в 2022. Ми зібрали людей з різних куточків України, об'єднавши досвід, талант та енергію в сильну та амбітну команду.</p>
                        <p class="animation">Ми займаємось дизайном інтер'єру та архітектурним проєктуванням, а також повною реалізацією наших проєктів. Ми не лише творимо, а й втілюємо, і це саме те, за чим до нас приходять клієнти - за втіленням їхніх мрій. </p>
                    </div>
                    <div class="about__img animation" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/about.webp');"></div>
                </div>
            </div>
        </section>

        <div class="section marquee">
            <div class="marquee__inner">
                <div class="marquee__group">
                    <span>#дизайн</span>
                    <span>#емоції</span>
                    <span>#креатив</span>
                    <span>#натхнення</span>
                    <span>#сміливість</span>
                </div>
                <div class="marquee__group">
                    <span>#дизайн</span>
                    <span>#емоції</span>
                    <span>#креатив</span>
                    <span>#натхнення</span>
                    <span>#сміливість</span>
                </div>
            </div>
        </div>

        <section class="section projects">
            <a href="/projects" data-active-tab="zhyt" class="projects__item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/p-zhyt.webp);">
                <span>Житло</span>
            </a>
            <a href="/projects" data-active-tab="com" class="projects__item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/p-com.webp);">
                <span>Комерція</span>
            </a>
            <a href="/projects" data-active-tab="arch" class="projects__item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/p-arch.webp);">
                <span>Архітектура</span>
            </a>
        </section>

        <section class="section values pattern__wrapper" id="values">
            <img class="pattern-2" src="<?php echo get_template_directory_uri(); ?>/images/pattern_2.webp')" alt="pattern 2">
            <div class="container">
                <h2 class="values__heading heading-2 animation">
                    <div>Ключові<br><span class="secondary-color">цінності</span></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/sign.webp" alt="">
                </h2>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="values__grid">
                                <div class="values__img animation">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/v-1.webp" alt="">
                                </div>
                                <div class="values__data animation">                                        
                                    <div class="values__title-wrapper">
                                        <div class="heading-2">//</div>
                                        <h2 class="values__title heading-4">Відкритість</h2>
                                    </div>
                                    <div class="values__text">
                                        <p>Ринок проєктування та реалізації складний. Ми максимально відкриті на кожному етапі співпраці. Ви бачите, як ми досягаємо результату та хто за цим стоїть. Це все ми активно транслюємо у&nbsp;наших соцмережах.</p>
                                    </div>
                                    <div class="values__nav">
                                        <div class="values__num"><span class="secondary-color">01</span> / 03</div>
                                        <button class="values__arrow" aria-label="Наступний слайд">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="250" height="30" viewBox="0 0 250 30">
                                                <line x1="0" y1="15" x2="250" y2="15" stroke="black" stroke-width="3"></line>
                                                <polyline points="235 0, 250 15, 235 30" stroke="black" stroke-width="3" fill="none"></polyline>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="values__grid">
                                <div class="values__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/v-2.webp" alt="">
                                </div>
                                <div class="values__data">
                                    <div class="values__title-wrapper">
                                        <div class="heading-2">//</div>
                                        <h2 class="values__title heading-4">Системність</h2>
                                    </div>
                                    <div class="values__text">
                                        <p>Результат - це не лише професійна команда. Ми приділяємо багато часу менеджменту та систематизації процесів нашої компанії, що гарантує стабільно високий результат при великій кількості проєктів.</p>
                                    </div>
                                    <div class="values__nav">
                                        <div class="values__num"><span class="secondary-color">02</span> / 03</div>
                                        <button class="values__arrow" aria-label="Наступний слайд">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="250" height="30" viewBox="0 0 250 30">
                                                <line x1="0" y1="15" x2="250" y2="15" stroke="black" stroke-width="3"></line>
                                                <polyline points="235 0, 250 15, 235 30" stroke="black" stroke-width="3" fill="none"></polyline>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="values__grid">
                                <div class="values__img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/v-3.webp" alt="">
                                </div>
                                <div class="values__data">
                                    <div class="values__title-wrapper">
                                        <div class="heading-2">//</div>
                                        <h2 class="values__title heading-4">Амбітність</h2>
                                    </div>
                                    <div class="values__text">
                                        <p>В нас немає "прохідних" проєктів. Якщо ми взялись за роботу - докладемо максимум зусиль для успішної реалізації. Ви можете бути певні - труднощі трапляються, але ми їх вирішимо.</p>
                                    </div>
                                    <div class="values__nav">
                                        <div class="values__num"><span class="secondary-color">03</span> / 03</div>
                                        <button class="values__arrow" aria-label="Наступний слайд">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="250" height="30" viewBox="0 0 250 30">
                                                <line x1="0" y1="15" x2="250" y2="15" stroke="black" stroke-width="3"></line>
                                                <polyline points="235 0, 250 15, 235 30" stroke="black" stroke-width="3" fill="none"></polyline>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination"></div>
                </div>
            </div>
        </section>

        <section class="section statistics">
            <div class="container">
                <div class="statistics__grid">
                    <div class="statistics__title-wrapper animation">
                        <h2 class="statistics__title">Ми у цифрах</h2>
                    </div>
                </div>
                <div class="statistics__wrapper animation">
                    <div class="statistics__item">
                        <div class="statistics__item-heading">
                            <span>> <span class="counting">120</span> проєктів</span>
                        </div>
                        <div class="statistics__text text">
                            <p>Розроблено та реалізовано</p>
                        </div>
                    </div>
                    <div class="statistics__item">
                        <div class="statistics__item-heading">
                            <span>> <span class="counting">25000</span> м²</span>
                        </div>
                        <div class="statistics__text text">
                            <p>Загальної площі проєктів</p>
                        </div>
                    </div>
                    <div class="statistics__item">
                        <div class="statistics__item-heading">
                            <span>> <span class="counting">60</span> людей</span>
                        </div>
                        <div class="statistics__text text">
                            <p>Наша неймовірна команда</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); // подключаем footer.php ?>