<footer>
			<nav class="nav-footer">
				<ul>
				<? $args = array(
					'menu' => 'principal',
					'container' => false
				);
				wp_nav_menu( $args );
				?>
			</nav>

			<p><? bloginfo('name')?> © <?echo date("Y"); ?>. Alguns direitos reservados.</p>
			
</footer>
<? wp_footer(); ?>
</body>
</html>