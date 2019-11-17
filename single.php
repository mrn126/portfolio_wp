<?php get_header(); ?>

<div class="wrapper works">

<!-- header -->
<header class="works-header">
  <div class="works-header__inner">
      <p class="works-header__back"><a href="<?php echo esc_url(home_url('/')); ?>">Topへ戻る</a></p>
  </div>
</header>

<!-- main -->
<main class="works-main">

  <!-- inner -->
  <div class="works-main__inner">

    <?php
    if ( have_posts() ) :
    while ( have_posts() ) :
    the_post();
    ?>

    <!-- mainvisual -->
    <div class="works-main__mv">
      <a href="<?php echo esc_url(get_field('制作物url')); ?>" target="_blank">
        <?php
        if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'mv' );
        }
        ?>
      </a>
    </div>

    <!-- 制作詳細 -->
    <section class="works-section">
      <h1 class="works-section__title works-section__title_en">
        <a href="<?php echo esc_url(get_field('制作物url')); ?>" target="_blank">
          <?php the_title(); ?> <i class="fas fa-external-link-alt works-section__title_icon"></i>
        </a>
      </h1>
      <?php the_content(); ?>
    </section>

    <?php
    endwhile;
    endif;
    ?>

    <div class="works-lower">
      <!-- 前の実績 -->
      <?php if (get_previous_post(true)): ?>
        <p class="works-lower__link works-lower__link_prev"><?php previous_post_link('%link', '前へ', true); ?></p>
      <?php else: ?>
        <p class="works-lower__link works-lower__link_prev works-lower__link_disable">前へ</p>
      <?php endif; ?>
      <!-- 次の実績 -->
      <?php if (get_next_post(true)): ?>
        <p class="works-lower__link works-lower__link_next"><?php next_post_link('%link', '次へ', true); ?></p>
      <?php else: ?>
        <p class="works-lower__link works-lower__link_next works-lower__link_disable">次へ</p>
      <?php endif; ?>
    </div>

  </div><!-- /inner end -->
</main>

<?php get_footer(); ?>