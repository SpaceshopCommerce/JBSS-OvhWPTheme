<?php
get_header();
?>
<main id="page-content" class="l-main">
  <?php
  while (have_posts()) {
    the_post();

    get_template_part('content');
  }
  ?>
</main>
<?php
get_footer();
?>