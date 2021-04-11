<?php get_header(); ?>
<main>
  <div class="main__section1">
    <h1>Commit to the growth<br>for everyone</h1>
  </div>
  <div class="main__section2">
    <h2 class="main__section2-title">新着記事</h2>
    <div class="main__section2-content">
      <div class="main__section2-content-inner">
        <!-- メインループ開始 -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="main__section2-content-inner-card">
              <a href="<?php the_permalink(); ?>">
                <div class="main__section2-content-inner-card-img">

                  <!-- サムネイル出力 -->
                  <?php the_post_thumbnail(); ?>

                  <!-- <img src="img/blog__first.jpg" alt=""> -->

                  <!-- カテゴリー名表示 -->
                  <div class="main__section2-content-inner-card-img-title">
                    <?php $cat = get_the_category();
                    $cat = $cat[0]; {
                      echo $cat->cat_name;
                    } ?>
                  </div>

                </div>

                <div class="main__section2-content-inner-card-sentence">

                  <!-- 　本文出力 -->
                  <p><?php the_title(); ?></p>

                  <!-- 投稿日の出力 -->
                  <small><?php the_time("Y-m-d"); ?></small>
                </div>
              </a>
            </div>
            <!-- ループ終了 -->
        <?php endwhile;
        endif; ?>
      </div>

      <?php get_sidebar(); ?>
      <?php get_footer(); ?>