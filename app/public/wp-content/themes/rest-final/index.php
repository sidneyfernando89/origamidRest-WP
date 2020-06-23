<?  get_header(); ?>

<? if (have_posts(  )) : while(have_posts(  )) : the_post(  ); ?>
  <section class="container sobre">
    <h2 class="subtitulo"> <? the_title(); ?> </h2>
      <div class=grid-8>
        <? the_content(); ?>
      </div>
  </section>
<? endwhile; else: ?>
  <section class="container sobre">
  <div class=grid-8>
    <p><? _e('Desculpe, não foram encontradas postagens'); ?>
  </div>
  </section>
<? endif; ?>

<? get_footer();?>