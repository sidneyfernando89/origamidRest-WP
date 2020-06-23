<?
// Template Name: Contato
?>
<? get_header();?>
<? if (have_posts(  )) : while(have_posts(  )) : the_post(  ); ?>
		<section class="container contato">
			<h2 class="subtitulo"><? the_title(); ?></h2>

			<div class="grid-16">
				<a href="<? the_field('link_mapa');?>" target="_blank"><img src="<?the_field('imagem_mapa');?>" alt="Mapa para o Local"></a>
			</div>
			<? if(have_rows('dados_contato')): while (have_rows('dados_contato')) : the_row (); ?>
				<div class="grid-1-3 contato-item">
					<h2><?the_sub_field('titulo_dados_contato');?></h2>
					<? if(have_rows('conteudo_dado_contato')): while (have_rows('conteudo_dado_contato')) : the_row (); ?>
					<p><?the_sub_field('descricao_conteudo');?></p>
					<? endwhile; else: endif; ?>
				</div>
			<? endwhile; else: endif; ?>
		</section>
	<? endwhile; else: endif; ?>
<? get_footer();?>