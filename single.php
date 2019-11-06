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
      <a href="https://mrp-style.com/portfolio/01/" target="_blank">
        <?php
        if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'large' );
        }
        ?>
      </a>
    </div>

    <!-- 制作詳細 -->
    <section class="works-section">
      <h1 class="works-section__title works-section__title_en"><a href="https://mrp-style.com/portfolio/01/" target="_blank"><?php the_title(); ?> <i class="fas fa-external-link-alt works-section__title_icon"></i></a></h1>
      <?php
      //本文の表示
      the_content(); ?>
    </section>

    <?php
    endwhile;
    endif;
    ?>

    <div class="works-lower">
        <p class="works-lower__link works-lower__link_prev works-lower__link_disable"><a href="">前へ</a></p>
        <p class="works-lower__link works-lower__link_next"><a href="02.html">次へ</a></p>
    </div>

  </div><!-- /inner end -->
</main>

<?php get_footer(); ?>