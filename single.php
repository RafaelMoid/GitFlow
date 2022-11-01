<?php get_header(); ?>

<main class="interna blog-single container">
    <h1>
        <span>blog</span><br>
        light design portugal
    </h1>
    <div class="blog-linha"></div>
    <section class="post">
        <img class="thumb" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Imagem destaque">
        <h2><?php the_title(); ?></h2>
        <small><?php echo get_the_date(); ?></small>
        <?php the_content(); ?>
    </section>
</main>

<?php get_footer(); ?>