<?php get_header(); ?>
<main>
  <article>
    <section class="wrapper">
      <div class="pickup-all">
        <div class="pickup">
          <img src="<?php echo get_template_directory_uri(); ?>/img\pickup1.jpg" alt="pickup1">
          <h2>タイトルテキストテキストテキストテキストテキストテキストテキスト</h2>
          <div class="readmore">
            <a href="">READ MORE</a>
          </div>
        </div>
        <div class="pickup">
          <img src="<?php echo get_template_directory_uri(); ?>/img\pickup2.jpg" alt="pickup2">
          <h2>タイトルテキストテキストテキストテキストテキストテキストテキスト</h2>
          <div class="readmore">
            <a href="">READ MORE</a>
          </div>
        </div>
        <div class="pickup">
          <img src="<?php echo get_template_directory_uri(); ?>/img\pickup3.jpg" alt="pickup3">
          <h2>タイトルテキストテキストテキストテキストテキストテキストテキスト</h2>
          <div class="readmore">
            <a href="">READ MORE</a>
          </div>
        </div>
      </div>
    </section>
  </article>

  <article>
    <section id="main-content" class="wrapper">
      <div class="container">
        <?php
        //取得したい投稿記事などの条件を引数として渡す
        $args = array(
          // 投稿タイプ
          'post_type'      => 'post',
          // カテゴリー名
          'category_name' => 'news',
          // 1ページに表示する投稿数
          'posts_per_page' => 3,
        );
        // データの取得
        $posts = get_posts($args);
        ?>

        <!-- ループ処理 -->
        <?php foreach ($posts as $post) : ?>
          <?php setup_postdata($post); ?>
          <div class="news_post">
            <div class="title">
              <!--  投稿記事のタイトルを表示する -->
              <?php the_title(); ?>
            </div>
            <ul class="second">
              <li>
                <!-- 日付を出力する -->
                <?php echo get_the_date(); ?>
              </li>
              <li>
                <!-- タグを出力する -->
                <?php the_tags(''); ?>
              </li>
            </ul>
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img\main1.jpg" alt="投稿1"> -->
            <?php
            if (has_post_thumbnail()) :
              the_post_thumbnail();
            endif;
            ?>
            <p><?php
                $content = wp_trim_words(get_the_content(),  38, '...');
                echo $content;
                ?></p>
            <div class="readmore">
              <!-- aタグで投稿記事へのリンクを作成 -->
              <a href="<?php echo get_permalink(); ?>">
                READ MORE
              </a>
            </div>
          </div>

        <?php endforeach; ?>
        <!-- 使用した投稿データをリセット -->
        <?php wp_reset_postdata(); ?>

      </div>

      <!-- サイト右側（プロフィールなど） -->
      <div class="side-content">
        <!-- プロフィール -->
        <div class="profile">
          <img src="<?php echo get_template_directory_uri(); ?>/img\author.jpg" alt="profile image">
          <h2>Name Name</h2>
          <p>プロフィールテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキストテキストテキスト
            テキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        </div>
        <!-- ランキング -->
        <div class="ranking">
          <h2>Ranking</h2>
          <div class="ranking-frame">
            <img src="<?php echo get_template_directory_uri(); ?>/img\ranking1.jpg" alt="rank1">
            <a href="#" class="link">タイトルテキストテキストテキストテキストテキストテキスト</a>
          </div>
          <div class="ranking-frame">
            <img src="<?php echo get_template_directory_uri(); ?>/img\ranking2.jpg" alt="rank2">
            <a href="#" class="link">タイトルテキストテキストテキストテキストテキストテキスト</a>
          </div>
          <div class="ranking-frame">
            <img src="<?php echo get_template_directory_uri(); ?>/img\ranking3.jpg" alt="rank3">
            <a href="#" class="link">タイトルテキストテキストテキストテキストテキストテキスト</a>
          </div>
        </div>
        <!-- アーカイブ -->
        <div class="archive">
          <h2>Archive</h2>
          <ul>
            <li><a>XXXX年XX月(XX)</a></li>
            <li><a>XXXX年XX月(XX)</a></li>
            <li><a>XXXX年XX月(XX)</a></li>
            <li><a>XXXX年XX月(XX)</a></li>
            <li><a>XXXX年XX月(XX)</a></li>
            <li><a>XXXX年XX月(XX)</a></li>
            <li><a>XXXX年XX月(XX)</a></li>
            <li><a>XXXX年XX月(XX)</a></li>
            <li><a>XXXX年XX月(XX)</a></li>
            <li><a>XXXX年XX月(XX)</a></li>
            <li><a>XXXX年XX月(XX)</a></li>
            <li><a>XXXX年XX月(XX)</a></li>
            <li><a>XXXX年XX月(XX)</a></li>
            <li><a>XXXX年XX月(XX)</a></li>
            <li><a>XXXX年XX月(XX)</a></li>
          </ul>
        </div>
      </div>
    </section>
  </article>
</main>
<?php get_footer(); ?>