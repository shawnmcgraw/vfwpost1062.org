<?php get_header(); ?>

<div class="container" id="main" role="main">

  <div class="m-4">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php if (has_post_thumbnail()) : ?>
          <?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
        <?php endif ?>
        <div class="container post-top mb-3 text-light" style="
          background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo $backgroundImg[0] ?>');
          background-size: cover;
        ">
          <h1 class="post-title stencil">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h1>
          <p class="post-meta stincil">
            <?php the_date(); ?>
          </p>
        </div>
        <div class="post-content">
          <?php the_excerpt(); ?>
        </div>
      <?php endwhile ?>
    <?php else : ?>
      <p><?php __('No Posts Found'); ?></p>
    <?php endif ?>
  </div>

</div> <!-- #main -->

<?php get_footer(); ?>