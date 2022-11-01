<?php get_header(); ?>

<main class="interna interna-projeto container">
    <a href="<?php bloginfo('url'); ?>/projetos">&lt&lt principal projetos</a>
    <h1>
        <span>projetos</span><br>
        <?php the_title(); ?>
    </h1>
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Imagem destaque do projeto" data-aos="fade">
    <section class="sobre-projeto" data-aos="fade-up">
        <div class="texto-sobre">
            <h2>
                <span>sobre</span> o projeto
            </h2>
            <?php the_content(); ?>
        </div>
        <div class="detalhes-tecnicos">
            <span>detalhamento técnico</span>
            <h3><?php the_field('nome_lugar'); ?></h3>
            <ul class="lista-infos">
                <?php if(have_rows('informacoes')) : while(have_rows('informacoes')) : the_row(); ?>
                <li><?php the_sub_field('informacao'); ?></li>
                <?php endwhile; endif; ?>
            </ul>
            <p>
                <?php the_field('texto_tecnico'); ?>
            </p>
            <ul class="lista-topicos">
                <?php if(have_rows('detalhes_tecnicos')) : while(have_rows('detalhes_tecnicos')) : the_row(); ?>
                <li><?php the_sub_field('detalhe'); ?></li>
                <?php endwhile; endif; ?>
            </ul>
        </div>
    </section>
    <section class="galeria">
        <div class="owl-carousel">
            <?php if(have_rows('galeria')) : while(have_rows('galeria')) : the_row(); ?>
            <div class="item">
                <img src="<?php the_sub_field('imagem'); ?>" alt="Imagem do projeto">
            </div>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <section class="relacionados" data-aos="fade-up">
        <h3><span>projetos</span> relacionados</h3>
        <div class="cards-relacionados container">
            <?php
            wp_reset_postdata();

            $args = array(
                "posts_per_page" => "3",
                "post_type" => "projetos",
                "orderby" => 'rand'
            );
            $the_query = new WP_Query($args);

            if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post();
            ?>
            <a href="<?php the_permalink(); ?>" class="card">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Imagem destaque de post relacionado">
                <h3><?php the_title(); ?></h3>
            </a>
            <?php endwhile; endif; ?>
        </div>
        <a href="<?php bloginfo('url'); ?>/projetos">&lt&lt voltar para principal projetos ou</a>
        <select id="selectCategory">
            <option>selecione por categoria</option>
            <?php
            $terms = get_terms( array(
                'taxonomy' => 'tipo',
                'hide_empty' => true
            ) ); // lista categorias com atributo personalizado (data-category)
            foreach($terms as $cat) { if($cat->cat_name != 'Uncategorized') : ?>
            <option value="<?php bloginfo('url'); ?>/projetos#<?php echo $cat->slug ?>"><?php echo $cat->name; ?>
            </option>
            <?php endif; } ?>
        </select>
    </section>
</main>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.6.1.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/projeto-single.js"></script>
<script>
    $(document).ready(function () {

    $(".owl-carousel").owlCarousel({
        items: 1,
        nav: true,
        dots: false,
        loop: true,
        mouseDrag: true,
        navText: ['<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arrow-left.png">', '<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arrow-right.png">'],
        stagePadding: 48,
        margin: 8,
        responsive: {
            601: {
                margin: 12,
                stagePadding: 64
            },
            981: {
                margin: 48,
                stagePadding: 200
            }
        }
    });

    const navDiv = document.querySelector('.owl-nav');

    let span = document.createElement('span');
    span.innerHTML = 'photo gallery';
    navDiv.insertBefore(span, navDiv.children[1]);
    });
</script>
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