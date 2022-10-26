<?php
// Template Name: Videos
?>

<?php get_header(); ?>

<main class="videos container">
  <h1 class="videos-header">VIDEOS </br> <b>LIGHT DESIGN PORTUGAL</b></h1>
  <p class="videos-sub-titulo">
    Texto convidando os usuários para assistir os vídeos da Light Design Portugal.
    Falando sobre projetos, trajetória, equipe e destaques na mídia.
  </p>
  <section class="videos-wrapper">
    <iframe width="100%" height="450" src="<?php the_field('video_destaque'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="wrapper-videos1">
      <?php if (have_rows('video-repeater')) : while (have_rows('video-repeater')) : the_row(); ?>
          <iframe width="100%" height="320" src="<?php the_sub_field('videos'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <?php endwhile;
      endif; ?>
    </div>
    <div class="wrapper-videos2">
      <?php if (have_rows('video_repeater_2')) : while (have_rows('video_repeater_2')) : the_row(); ?>
          <iframe width="100%" height="180" src="<?php the_sub_field('videos'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <?php endwhile;
      endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>