<?php get_header(); ?>
<main>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="page">
        <div class="page__content">
          <a href="">
            <?php $cat = get_the_category();
              $cat = $cat[0]; {
              echo $cat->cat_name;
              } ?>
          </a>
          <h2><?php the_title(); ?></h2>
          <small><?php the_time("Y.m.d"); ?></small>
          <div class="page__content-img">
            <?php the_post_thumbnail(); ?>
            <!-- <img src="img/blog__first.jpg" alt=""> -->
          </div>
          <?php the_content(); ?>
        </div>
      </div>
  <?php endwhile;
  endif; ?>
</main>
<?php get_footer(); ?>