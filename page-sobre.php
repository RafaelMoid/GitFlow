<?php
// Template Name: Sobre
?>

<?php get_header(); ?>

<main class="interna interna-sobre container">
    <h1>
        <span>about us</span><br>
        light design portugal
    </h1>
    <p>
        Fundada em 1974 no Rio de Janeiro, a Light Design produz equipamentos de iluminação e
        desenvolve projectos luminotécnicos de pequeno, médio e grande portes, oferecendo suporte
        aos profissionais do setor. Atua em todas as fases do processo: cria peças exclusivas, fabrica,
        projecta, comercializa, instala e garante assistência técnica, atenta às tendências e demandas
        do mercado. Com produção local desde 2006, a Light Design possui showroom em Lisboa,
        dispondo de experiente equipe de lighting designers e instaladores.
    </p>
    <section class="galeria">
        <div class="owl-carousel">
            <?php if(have_rows('sobre_galeria')) : while(have_rows('sobre_galeria')) : the_row(); ?>
            <img src="<?php the_sub_field('imagem'); ?>" alt="<?php the_sub_field('descricao'); ?>">
            <?php endwhile; endif; ?>
        </div>
    </section>
    <section class="quote">
        <p>
            Fundada em 1974 no Rio de Janeiro, a Light Design produz equipamentos de iluminação e desenvolve projectos
            luminotécnicos de pequeno, médio e grande portes, oferecendo suporte aos profissionais do setor. Atua em
            todas as fases do processo: cria peças exclusivas, fabrica, projecta, comercializa, instala e garante
            assistência técnica, atenta às tendências e demandas do mercado. Com produção local desde 2006, a Light
            Design possui showroom em Lisboa, dispondo de experiente equipe de lighting designers e instaladores.
        </p>
        <h3>SILVIA CAETANO, CEO Light Design Portugal</h3>
    </section>
    <h1>
        <span>light design portugal</span><br>
        projetando para o mundo
    </h1>
    <section class="map">
        <iframe src="https://snazzymaps.com/embed/433812" width="100%" height="600px" style="border:none;"></iframe>
    </section>
</main>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.6.1.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/sobre.js"></script>

<?php get_footer(); ?>