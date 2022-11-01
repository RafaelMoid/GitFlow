<?php
// Template Name: Home
?>

<?php get_header(); ?>

<main class="home">
    <section class="destaque">
        <div class="owl-carousel owl-destaque">
            <div class="item">
                <div id="firstBannerLeft" class="item-left">
                    <img src="<?php the_field('primeira_esquerda'); ?>" alt="">
                    <div>
                        <p>welcome to</p>
                    </div>
                </div>
                <div id="firstBannerRight" class="item-right">
                    <img src="<?php the_field('primeira_direita'); ?>" alt="">
                    <div>
                        <p>light design <strong>experience</strong></p>
                    </div>
                    <span>
                        <?php the_field('detalhes_primeira_direita'); ?>
                    </span>
                </div>
            </div>
            <?php if(have_rows('destaque')) : while(have_rows('destaque')) : the_row(); ?>
            <div class="item">
                <div class="item-left">
                    <img src="<?php the_sub_field('imagem_esquerda'); ?>">
                </div>
                <div class="item-right">
                    <img src="<?php the_sub_field('imagem_direita'); ?>">
                    <span>
                        <?php the_sub_field('detalhes_direita'); ?>
                    </span>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <section class="projetos" data-aos="fade" data-aos-offset="120">
        <h2><span>we create environments</span><br> that light up your world</h2>
        <p>
            Fundada em 1974 no Rio de Janeiro, a Light Design produz equipamentos de iluminação e
            desenvolve projectos luminotécnicos de pequeno, médio e grande portes, oferecendo suporte
            aos profissionais do setor. Atua em todas as fases do processo: cria peças exclusivas, fabrica,
            projecta, comercializa, instala e garante assistência técnica, atenta às tendências e demandas
            do mercado. Com produção local desde 2006, a Light Design possui showroom em Lisboa,
            dispondo de experiente equipe de lighting designers e instaladores.
        </p>
        <div class="projetos-galeria">
            <div class="owl-carousel owl-projetos">
                <?php
                    $args = array(
                        "post_type" => "projetos",
                        "posts_per_page" => "6"
                    );

                    $the_query = new WP_Query($args);
                ?>
                <?php if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="item">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                        alt="Imagem destaque do projeto <?php the_title(); ?>"
                        onclick="window.location.href = '<?php the_permalink(); ?>'">
                    <div class="ficha" onclick="window.location.href = '<?php the_permalink(); ?>'">
                        <span>featured project</span>
                        <h3><?php the_field('nome_lugar'); ?></h3>
                        <ul class="lista-infos">
                            <?php if(have_rows('informacoes')) : while(have_rows('informacoes')) : the_row(); ?>
                            <li><?php the_sub_field('informacao'); ?></li>
                            <?php endwhile; endif; ?>
                        </ul>
                        <a href="<?php the_permalink(); ?>">view project <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </div>
    </section>
    <section class="news container">
        <h2><span>latest</span> news</h2>
        <div class="grid-cards">
            <?php
            $args = array(
                "post_type" => "post",
                "posts_per_page" => "4"
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if($the_query->have_posts()) : $i = 1; while($the_query->have_posts()) : $the_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="card-<?php echo $i ?>">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                <div class="card-texto">
                    <h3><?php the_title(); ?></h3>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                    <span>more <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </a>
            <?php $i++; endwhile; wp_reset_query(); endif; ?>
        </div>
        <a href="<?php bloginfo('url'); ?>/blog">ver todas as notícias <i class="fa-solid fa-arrow-right"></i></a>
    </section>
    <section class="brochure">
        <a href="<?php bloginfo('url'); ?>/contactos" class="brochure-card">
            <div class="card-texto">
                <h3>find <strong>out more</strong></h3>
                <h4>more than a brochure<br>more projects, more photos, more insights</h4>
                <p>
                    Our beautiful, glossy brochure contains all the details on our favourite lighting design projects,
                    as
                    well as more information about us and how we work.
                </p>
                <h5>request a brochure <i class="fa-solid fa-arrow-right"></i></h5>
            </div>
            <div class="card-img">
                <img src="<?php the_field('imagem_brochura'); ?>" alt="cabeça de gelo">
            </div>
        </a>
    </section>
</main>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.6.1.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script>
$(document).ready(function() {
    const firstBannerLeft = document.getElementById('firstBannerLeft');
    const firstBannerRight = document.getElementById('firstBannerRight');

    setTimeout(() => {
        firstBannerLeft.style.transform = 'translateX(0%)';
        firstBannerRight.style.transform = 'translateX(0%)';
    }, 300);

    setTimeout(() => {
        firstBannerLeft.children[1].style.maxWidth = '400px';
        firstBannerRight.children[1].style.visibility = 'visible';
        firstBannerRight.children[1].style.left = '0px';
    }, 1100);

    setTimeout(() => {
        firstBannerRight.children[2].style.bottom = '0px';
    }, 1500);
});
</script>
<script>
$(document).ready(function() {

    $(".owl-projetos").owlCarousel({
        items: 1,
        nav: true,
        dots: false,
        loop: true,
        mouseDrag: true,
        navText: ['<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arrow-left.png">',
            '<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arrow-right.png">'
        ],
        stagePadding: 0,
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

    const navDiv = document.querySelectorAll('.owl-nav')[0];

    let a = document.createElement('a');
    a.href = "<?php bloginfo('url'); ?>/projetos";
    a.innerHTML = 'discover projects';
    navDiv.insertBefore(a, navDiv.children[1]);

    $(".owl-destaque").owlCarousel({
        items: 1,
        nav: true,
        dots: true,
        loop: false,
        rewind: true,
        mouseDrag: true,
        navText: ['←', '→'],
        margin: 8,
    });

    const navDestaque = document.querySelector('.owl-destaque .owl-nav');
    const dotsDestaque = document.querySelector('.owl-destaque .owl-dots');

    setTimeout(() => {
        navDestaque.style.opacity = '1';
        dotsDestaque.style.opacity = '1';
    }, 1500);
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