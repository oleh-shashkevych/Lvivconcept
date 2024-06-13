<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 
<main>
	<section class="news">
		<div class="container">
			<div class="news__inner">
				<?php 
					$category = get_category_by_slug('blog'); // Замените 'blog' на ваш слаг категории
					if ($category) :
				?>
					<h1 class="news__heading"><?php echo esc_html($category->name); ?></h1>
					<div class="news__text"><?php echo esc_html($category->description); ?></div>
				<?php endif; ?>
			</div>
			<div class="news__list">

				<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
					'post_type' => 'post', // Укажите тип поста, если это не стандартный пост
					'posts_per_page' => 10, // Укажите количество постов на странице
					'paged' => $paged,
				);

				$news_query = new WP_Query($args);

				if ($news_query->have_posts()) :
					while ($news_query->have_posts()) : $news_query->the_post();
				?>
						<div class="news__item">
							<div class="news__time-wrapper">
								<time class="news__item-date"><?php the_time('M j, Y'); ?></time>
							</div>
							<div class="news__item-inner">
								<h2 class="news__item-title"><?php the_title(); ?></h2>
								<div class="news__item-content">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
				<?php
					endwhile;
					// Пагинация
					the_posts_pagination();
				else :
					// Если нет постов
					echo 'No posts found';
				endif;
				wp_reset_postdata();
				?>

			</div>
		</div>
	</section>
</main>
<?php get_footer(); // подключаем footer.php ?>