<?
// Template Name: Menu da Semana
?>
<?  get_header(); ?>
<? if (have_posts(  )) : while(have_posts(  )) : the_post(  ); ?>
		<section class="container">
			<h2 class="subtitulo"><? the_title(); ?></h2>
			<? if(have_rows('cardapio_menu')): while (have_rows('cardapio_menu')) : the_row (); ?>
			<div class="menu-prato grid-8">
			<h2><? the_sub_field('nome_cardapio_principal');?></h2>
				<ul>
				<? if(have_rows('prato_cardapio_menu')): while (have_rows('prato_cardapio_menu')) : the_row (); ?>
					<li>
						<span><sup>R$</sup><? the_sub_field('valor_prato_cardapio_principal');?></span>
						<div>
							<h3><? the_sub_field('titulo_prato_cardapio_principal');?></h3>
							<? the_sub_field('descricao_prato_cardapio_principal');?>
						</div>
					</li>
				<? endwhile; else: endif; ?>
				</ul>
			</div>
			<? endwhile; else: endif; ?>
		</section>

		<? endwhile; else: endif; ?>
<? get_footer();?>