<?php get_header(); ?>

<main class="interna interna-projetos container">
    <h1>
        <span>projetos</span><br>
        light design portugal
    </h1>
    <ul class="categorias" data-aos="fade" data-aos-duration="2000">
        <li id="btShowAll" class="active">Todos</li>
        <?php
            $categories = get_categories(); // lista categorias com atributo personalizado (data-category)
            foreach($categories as $cat) { if($cat->cat_name != 'Uncategorized') : ?>
            <li data-category="<?php echo strtolower($cat->slug); ?>"><?php echo $cat->cat_name; ?></li>
        <?php endif; } ?>
    </ul>
    <section class="projetos" data-aos="fade-up" data-aos-duration="1000">
        <?php
        $args = array(
            "posts_per_page" => "-1",
            "post_type" => "projetos"
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?> <!-- cria os cards também com atributo personalizado (data-category) -->
        <a href="<?php the_permalink(); ?>" class="projeto-card" data-category="<?php
            $category_detail=get_the_category(get_the_ID());
            foreach($category_detail as $cd){
            echo strtolower($cd->slug);
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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    window.addEventListener('load', function() {
        AOS.init({
            once: true,
            duration: 1000
        });
    });
</script>

<?php get_footer(); ?>