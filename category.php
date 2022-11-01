<?php get_header(); ?>

<main class="blog container">
  <h1 class="blog-header"><?php single_cat_title(); ?></br><b>LIGHT DESIGN PORTUGAL</b></h1>
  <div class="blog-linha"></div>
  <!-- SESSÃO DE CONTEUDO -->
  <section class="content-blog-section" data-aos="fade-up">
    <div class="blog-content-wrapper">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <article class="content-blog-article">
            <a href="<?php the_permalink(); ?>"><img class="thumb-post-banco" src="<?php echo get_the_post_thumbnail_url() ?>" /></a>
            <h2 class="thumb-title-banco">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <!-- <h5 class="excerpt-banco"><?php the_excerpt(); ?></h5> -->
            <h6 class="saiba-mais-banco">
              <a class="saiba-mais-banco-a" href="<?php the_permalink(); ?>">
                <?php the_tags(); ?>
              </a>
            </h6>
            <hr class="line-post">
          </article>
        <?php endwhile; wp_reset_postdata(); ?>
      <?php else : endif; ?>
      <div class="nav-pagination-wrapper">
        <nav class="pagination"><?php echo paginate_links(); ?></nav>
      </div>
    </div>
    <aside class="aside-container">
      <!-- Primeira Caixa do Aside  -->
      <div>
        <div class="cat-container">
          <div class="title-wrapper-aside">
            <h4>CATEGORIAS</h4>
            <div class="linha-aside"></div>
          </div>
          <ol class="categorias-lista">
            <li>
              <?php wp_list_categories(array(
                'title_li' => ''
              )); ?>
            </li>
          </ol>
        </div>
      </div>
      <!-- Segunda caixa do Aside -->
      <div class="ultimas-noticias-container">
        <div class="title-wrapper-aside2">
          <h4 class="h4-aside-config">últimas notícias</h4>
          <div class="linha-aside"></div>
        </div>
        <ul class="categorias-lista-2">
          <li class="li-lista-2">
            <?php $args = array(
              'numberposts' => 4,
              'posts_per_page' => '4',
              'post_type' => 'post'
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
      <!-- Terceira caixa do Aside -->
      <div>
        <div class="tag-container">
          <ul class="categorias-lista">
            <?php
            $tags = get_tags();
            if ($tags) :
              foreach ($tags as $tag) : ?>
                <li><a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" title="<?php echo esc_attr($tag->name); ?>"><?php echo esc_html($tag->name); ?></a></li>
              <?php endforeach; ?>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </aside>
  </section>
</main>

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