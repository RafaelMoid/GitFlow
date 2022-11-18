<?php
// Template Name: Equipa
?>

<?php get_header(); ?>

<main class="interna interna-equipa container">
    <h1>
        <span>Equipa</span><br>Light Design Portugal
    </h1>
    <p data-aos="fade" data-aos-duration="2000">
        Nossa equipa cria peças exclusivas, fabrica, projecta, comercializa, instala e
        garante assistência técnica, atenta às tendências e demandas do mercado.
        Com produção local desde 2006, a Light Design possui showroom em Lisboa,
        dispondo de experiente equipe de lighting designers e instaladores.
    </p>
    <section class="equipa-cards">
        <?php if(have_rows('equipa_cards')) : $i = 0; while(have_rows('equipa_cards')) : the_row(); ?>
        <div class="card" <?php if($i % 2 == 0) { ?> data-aos="fade-left" <?php } else { ?> data-aos="fade-right" <?php } ?> data-aos-offset="0">
            <div class="card-img">
                <img src="<?php the_sub_field('card_img'); ?>" alt="Foto de <?php the_sub_field('card_nome'); ?>">
            </div>
            <div class="card-info">
                <h3><?php the_sub_field('card_nome'); ?></h3>
                <div class="card-line"></div>
                <p>
                    <?php the_sub_field('card_sobre'); ?>
                </p>
                <!-- <div class="social">
                    <a href="<?php the_sub_field('link_instagram'); ?>" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="<?php the_sub_field('link_linkedin'); ?>" target="_blank">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div> -->
            </div>
        </div>
        <?php $i++; endwhile; endif; ?>
    </section>
    <section class="galeria" data-aos="fade-up">
        <div class="owl-carousel">
            <?php if(have_rows('equipa_galeria')) : while(have_rows('equipa_galeria')) : the_row(); ?>
            <img src="<?php the_sub_field('imagem'); ?>" alt="<?php the_sub_field('descricao'); ?>">
            <?php endwhile; endif; ?>
        </div>
    </section>
</main>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.6.1.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/equipa.js"></script>
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