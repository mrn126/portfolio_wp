$(function(){
  // スムーススクロール設定
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false; //URLに影響を与えない
  });

  // ドロワーメニュー
  $('.navbar-toggle').on('click', function () {
    var $menu = $('.menu');
    var $menuBtn = $(this);
    $menuBtn.toggleClass('open');
    if($menuBtn.hasClass('open')){
      $menu.slideDown(500);
    } else {
      $menu.slideUp(500);
    }
    // リンクを押すとメニュー非表示
    $('.menu a').on('click',function(){
      $menuBtn.removeClass('open');
      $menu.slideUp(500);
    });
    // ウィンドウ幅を可変させた時の処理
    $(window).resize(function(){
      var windowWidth = window.innerWidth;
      if(windowWidth > 1023){                //PCサイズの時は常にメニュー表示
        $menuBtn.removeClass('open');
        $menu.addClass('menu-pc');
      } else if($menuBtn.hasClass('open')) { //メニューが開かれてる時は常に表示
        $menu.removeClass('menu-pc');
        $menu.show();
      } else {                               //メニュー非表示
        $menu.removeClass('menu-pc');
        $menu.hide();
      }
    });
  });

  // 画面スクロールでフワッと表示
  $('.inview-fade').on('inview', function() {
      $(this).css("opacity", "1");
  });

  // mainvisual以降でヘッダー背景透過
  var $win = $(window),
      $headerBg = $('.header-bg'),
      $main = $('.main-inner'),
      mainPos = $main.offset().top;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > mainPos ) {
      $headerBg.addClass('bgnone');
    } else {
      $headerBg.removeClass('bgnone');
    }
  });

});