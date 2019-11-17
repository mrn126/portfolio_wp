<?php get_header(); ?>

<div class="wrapper">

<!-- header -->
<header class="header">
  <div class="header-bg"></div>
  <nav id="navigation" class="header-nav">
		<div class="header-nav__drawer drawer">
			<div class="header-nav__toggle navbar-toggle">
          <span class="header-nav__toggle_icon navbar_toggle_icon"></span>
          <span class="header-nav__toggle_icon navbar_toggle_icon"></span>
          <span class="header-nav__toggle_icon navbar_toggle_icon"></span>
			</div>
    </div>
    <?php
      wp_nav_menu(
        array(
        'depth' => 1,
        'theme_location' => 'gnav', //ドロワーメニューをここに表示すると指定
        'container' => false,
        'menu_class' => 'header-nav__list',
        )
      );
    ?>
	</nav>
</header>

<!-- main -->
<main class="main">

  <!-- mainvisual -->
  <div class="main-hero">
    <div class="main-hero__logo">
      <h1 class="main-hero__name"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="MARINA TOIDA"></h1>
      <div class="main-hero__line"><img src="<?php echo get_template_directory_uri(); ?>/img/line.png" alt=""></div>
    </div>
    <div class="main-hero__bg"></div>
    <div class="main-hero__scroll"><span></span><span></span><span></span></div>
  </div>

  <!-- inner -->
  <div class="main-inner">

    <!-- about 自己紹介 -->
    <section id="about" class="main-about">
      <h2 class="main-about__title inview-fade">自己紹介</h2>
      <div class="main-about__element inview-fade">
        <figure class="main-about__image main-about__image_md">
          <img src="<?php echo get_template_directory_uri(); ?>/img/about.png" alt="">
        </figure>
        <div class="main-about__profile">
          <figure class="main-about__image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/about.png" alt="">
          </figure>
          <div class="main-about__wrap">
            <p class="main-about__name"><span>Webデザイナー兼コーダー</span><br>Marina Toida</p>
            <ul class="main-about__snslist">
              <li class="main-about__snsitem"><a href="https://twitter.com/mp_yururi" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_twitter.png" alt="twitter"></a></li>
              <li class="main-about__snsitem"><a href="https://www.facebook.com/marina.toida" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_facebook.png" alt="facebook"></a></li>
              <li class="main-about__snsitem"><a href="https://github.com/mrn126" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_github.png" alt="github"></a></li>
            </ul>
          </div>
          <p class="main-about__text">茨城県出身。現在は都内のWebマーケティング会社の制作部門で派遣社員として働いています。</p>
          <p class="main-about__text">▼ 主に経験してきた業務（1年9ヶ月ほど）<br>Webサイトのコーディング（新規・流用・更新）、 HTMLメルマガのデザイン・コーディング、バナー制作等<br>※具体的なスキルは下記ご確認ください。</p>
          <p class="main-about__text">▼ だいすきなもの<br>音楽、お酒、そとあそび、ミニマリズム</p>
        </div>
      </div>
    </section>

    <!-- skills できること -->
    <section id="skills" class="main-skills">
      <h2 class="main-skills__title inview-fade">できること</h2>
      <div class="main-skills__block">
        <div class="main-skills__box">
          <table class="main-skills__table inview-fade">
            <tr class="main-skills__list">
              <td class="main-skills__item">HTML / CSS</td>
              <td class="main-skills__level">★★★★☆</td>
            </tr>
            <tr class="main-skills__list">
              <td class="main-skills__item">EJS / Sass</td>
              <td class="main-skills__level">★★★★☆</td>
            </tr>
            <tr class="main-skills__list">
              <td class="main-skills__item">JavaScript / jQuery</td>
              <td class="main-skills__level">★★★☆☆</td>
            </tr>
            <tr class="main-skills__list">
              <td class="main-skills__item">WordPress</td>
              <td class="main-skills__level">★☆☆☆☆</td>
            </tr>
            <tr class="main-skills__list">
              <td class="main-skills__item">Git</td>
              <td class="main-skills__level">★★★★☆</td>
            </tr>
          </table>
        </div>
        <div class="main-skills__wrap">
          <p class="main-skills__icon inview-fade"><img src="<?php echo get_template_directory_uri(); ?>/img/skills_img01.png" alt=""></p>
          <p class="main-skills__text inview-fade">PC・タブレット・スマホ用とレスポンシブ対応のWebサイト制作ができます。アニメーションを入れる等、動きをつけることも可能です。<br>
            現在お持ちのWebサイトの運用・更新から、新規ページ制作も対応できます。新規で制作する際は、今後更新しやすいような制作を心がけてまいります。<br>
            サイト制作におけるバージョン管理ツールはGitで管理することができます。</p>
        </div>
      </div>
      <div class="main-skills__block">
          <div class="main-skills__box">
            <table class="main-skills__table inview-fade">
              <tr class="main-skills__list">
                <td class="main-skills__item">Photoshop</td>
                <td class="main-skills__level">★★★★☆</td>
              </tr>
              <tr class="main-skills__list">
                <td class="main-skills__item">Illustrator</td>
                <td class="main-skills__level">★★★☆☆</td>
              </tr>
              <tr class="main-skills__list">
                <td class="main-skills__item">XD</td>
                <td class="main-skills__level">★★☆☆☆</td>
              </tr>
            </table>
          </div>
          <div class="main-skills__wrap">
            <p class="main-skills__icon inview-fade"><img src="<?php echo get_template_directory_uri(); ?>/img/skills_img02.png" alt=""></p>
            <p class="main-skills__text inview-fade">HTMLメルマガのデザインを一から制作してきた経験があります。公式サイトのトンマナに合わせたデザイン、バナー制作ができます。また、Photoshopを使った画像加工も可能です。<br>
              Adobe XDを使用し、ワイヤーフレームの制作から対応できます。<br>
              （当サイトはXDでワイヤーフレームからデザインまで自身で制作しています）</p>
          </div>
        </div>
    </section>

    <!-- works 制作一覧 -->
    <section id="works" class="main-works">
        <h2 class="main-works__title inview-fade">制作一覧</h2>
        <p class="main-works__text inview-fade">個人で制作したものを掲載しています。<br>仕事で制作したものについてはお問合わせください。</p>
        <ul class="main-works__list">
        <?php
        // 最新の実績3件取得
        $works_posts = get_posts( array(
          'post_type' => 'post', // 投稿タイプ
          'posts_per_page'=> 3, //3件取得
          'category_name' => 'works', // 制作実績カテゴリーのものを
          'orderby' => 'DESC', // 新しい順に
        ) );
        foreach($works_posts as $post): setup_postdata($post);
        ?>
          <li class="main-works__item inview-fade">
            <a href="<?php the_permalink(); ?>" class="main-works__link">
              <span class="main-works__arrow"></span>
              <?php the_post_thumbnail('medium'); ?>
            </a>
          </li>
        <?php endforeach; wp_reset_postdata(); ?>
        </ul>
    </section>

    <!-- contact お問合わせ -->
    <section id="contact" class="main-contact">
      <h2 class="main-contact__title inview-fade">お問合わせ</h2>
      <form action="https://docs.google.com/forms/d/e/1FAIpQLSfA9jKh1JqjBkiTmJUY9KydF1y6iInNg-iFJg7vJXW8IVblAA/formResponse" method="post" name="myForm" target="dummyIframe">
        <div class="main-contact__wrap">
          <div class="main-contact__block">
            <div class="main-contact__item inview-fade">
              <label for="name" class="main-contact__head">お名前</label>
              <input name="entry.478138996" id="name" type="text" class="main-contact__form main-contact__form_name" placeholder="お名前" required>
            </div>
            <div class="main-contact__item inview-fade">
              <label for="mail" class="main-contact__head">メールアドレス</label>
              <input name="emailAddress" id="mail" type="email" class="main-contact__form main-contact__form_mail" placeholder="sample@gmail.com">
            </div>
          </div>
          <div class="main-contact__block">
            <div class="main-contact__item inview-fade">
              <label for="message" class="main-contact__head">メッセージ</label>
              <textarea name="entry.2034297287" id="message" class="main-contact__form main-contact__form_message"></textarea>
            </div>
          </div>
        </div>
        <p class="main-contact-btnarea inview-fade">
          <input type="submit" id="submit" class="main-contact__btn" value="送信">
        </p>
      </form>
      <iframe name="dummyIframe" style="display:none;" onload="showMessage()"></iframe>
    </section>

  </div><!-- /inner end -->
</main>

<?php get_footer(); ?>