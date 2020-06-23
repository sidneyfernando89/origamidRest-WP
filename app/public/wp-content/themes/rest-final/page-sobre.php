<?
// Template Name: Sobre
?>
<? get_header();?>
<? if (have_posts(  )) : while(have_posts(  )) : the_post(  ); ?>
		<section class="container sobre">
			<h2 class="subtitulo"> <? the_title(); ?></h2>

			<div class="grid-8">
				<img src="<? the_field('imagem_sobre');?>" alt="<? the_field('descricao_imagem');?>">
			</div>

			<div class="grid-8">
			<? if(have_rows('conteudo_sobre')): while (have_rows('conteudo_sobre')) : the_row (); ?>
				<h2><? the_sub_field('titulo_sobre');?></h2>
				<? the_sub_field('descricao_sobre');?>
			<? endwhile; else : endif; ?>
			</div>
		</section>

		<? endwhile; else: endif; ?>
<? get_footer();?>