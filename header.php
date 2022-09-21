<!DOCTYPE html>

<head>
  <title>Travel Blog</title>
  <meta charset="utf-8">
  <meta name="description" content="旅行ブログ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img\favicon.ico">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/main_style.css">
  <?php wp_head(); ?>
</head>

<body>
  <!-- ヘッダー -->
  <header>
    <div class="wrapper">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img\favicon.ico" alt="home"></a>
    </div>
    <nav>
      <ul class="wrapper">
        <li><a href="">NEWS</a></li>
        <li><a href="">COLUMN</a></li>
        <li><a href="">SERIES</a></li>
        <li><a href="">Q&A</a></li>
        <li><a href="">CONTACT</a></li>
      </ul>
    </nav>
  </header>