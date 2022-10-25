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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99592.17154816639!2d-9.233154337605036!3d38.73490195509751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1ec8c960b13f03%3A0x4cda90cb2010757e!2sLight%20Design!5e0!3m2!1spt-BR!2sbr!4v1666726271404!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</main>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.6.1.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/sobre.js"></script>

<?php get_footer(); ?>