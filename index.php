<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="header-container">
      <h1 class="header-logo">
        <a href="/">
          <img src="http://placehold.jp/160x48.png" alt="ロゴ">
        </a>
      </h1>
      <nav class="global-menu">
        <ul class="menu">
          <li class="menu-item">
            <a href="#!">私たちについて</a>
          </li>
          <li class="menu-item">
            <a href="#!">お知らせ</a>
          </li>
          <li class="menu-item">
            <a href="#!">お問い合わせ</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

<main class="main">
  <div class="main-visual">
    <picture>
      <source srcset="http://placehold.jp/375x500.png" media="(max-width:767px)">
      <img src="http://placehold.jp/1440x436.png" alt="">
    </picture>
    <p>キャッチコピー</p>
  </div>
</main>


  <?php wp_footer(); ?>
</body>
</html>
