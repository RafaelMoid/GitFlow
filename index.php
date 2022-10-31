<?php get_header(); ?>

<main class="blog container">
  <h1 class="blog-header">BLOG</br><b>LIGHT DESIGN PORTUGAL</b></h1>
  <p class="blog-sub-titulo" data-aos="fade">
    Se sua empresa necessita de um projeto profissional de iluminação, entre em
    contato conosco e em breve nosso setor comercial retornará sua mensagem.
  </p>
  <div class="blog-linha"></div>
  <!-- SESSÃO DE CONTEUDO -->
  <section class="content-blog-section">
    <div class="blog-content-wrapper">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <article class="content-blog-article">
            <a href="<?php the_permalink(); ?>"><img class="thumb-post-banco" src="<?php echo get_the_post_thumbnail_url() ?>" /></a>
            <h2 class="thumb-title-banco">
              <a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
            </h2>
            <h5 class="excerpt-banco"><?php the_excerpt(); ?></h5>
            <h6 class="saiba-mais-banco">
              <a class="saiba-mais-banco-a" href="<?php the_permalink(); ?>" >SAIBA MAIS</a>
            </h6>
            <hr class="line-post">
          </article>
        <?php endwhile; ?>
      <?php else : endif; ?>
      <div class="nav-pagination-wrapper">
        <nav class="pagination"><?php echo paginate_links(); ?></nav>
      </div>
    </div>
    <aside class="aside-container">
      <div>
        <div class="cat-container">
          <h4>CATEGORIAS</h4>
          <div class="linha-aside"></div>
          <ul class="categorias-lista">
            <li>
              <?php wp_list_categories(array(
                'title_li' => ''
              )); ?>
            </li>
          </ul>
        </div>
      </div>
      <div class="ultimas-noticias-container">
        <h4 class="h4-aside-config">últimas notícias</h4>
        <ul class="categorias-lista-2">
          <li class="li-lista-2">
            <?php $args = array(
              'numberposts' => 4,
              'posts_per_page' => '4',
            );
            $the_query = new WP_Query($args); ?>
            <?php if (have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
              <?php endwhile;
            else : ?>
              <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
          </li>
        </ul>
      </div>
    </aside>
  </section>
</main>

<?php get_footer(); ?>