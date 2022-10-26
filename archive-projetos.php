<?php get_header(); ?>

<main class="interna interna-projetos container">
    <h1>
        <span>projetos</span><br>
        light design portugal
    </h1>
    <ul class="categorias">
        <li id="btShowAll" class="active">Todos</li>
        <?php
            $categories = get_categories();
            foreach($categories as $cat) { if($cat->cat_name != 'Uncategorized') : ?>
            <li data-category="<?php echo strtolower($cat->cat_name); ?>"><?php echo $cat->cat_name; ?></li>
        <?php endif; } ?>
    </ul>
    <section class="projetos">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="projeto-card" data-category="<?php
            $category_detail=get_the_category(get_the_ID());
            foreach($category_detail as $cd){
            echo strtolower($cd->cat_name);
            }
        ?>">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            <h2>
                <?php the_title(); ?>
            </h2>
        </a>
        <?php endwhile; endif; ?>
    </section>
</main>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/projetos.js"></script>

<?php get_footer(); ?>