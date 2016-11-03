<?php
get_header(); ?>

<div id="content">
	<section id="servicos">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<a href="<?php echo esc_url( home_url( '/' ) )."manutencao-corretiva"; ?>" rel="home"><img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-corretiva.jpg"; ?>"/></a>
					<p>Somos uma agência de marketing digital especializada em micro e pequenas empresas brasileiras a se destacaremno mercado digital.</p>
					<a href="<?php echo esc_url( home_url( '/' ) )."manutencao-corretiva"; ?>" class="btn-confira">CONFIRA</a>
				</div>
				<div class="col-md-4">
					<a href="<?php echo esc_url( home_url( '/' ) )."servico-de-instalacao"; ?>" rel="home"><img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-higienizacao.jpg"; ?>"/></a>
					<p>Somos uma agência de marketing digital especializada em micro e pequenas empresas brasileiras a se destacaremno mercado digital.</p>
					<a href="<?php echo esc_url( home_url( '/' ) )."servico-de-instalacao"; ?>" class="btn-confira">CONFIRA</a>
				</div>
				<div class="col-md-4">
					<a href="<?php echo esc_url( home_url( '/' ) )."manutencao-preventiva"; ?>" rel="home"><img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner-manutencao.jpg"; ?>"/></a>
					<p>Somos uma agência de marketing digital especializada em micro e pequenas empresas brasileiras a se destacaremno mercado digital.</p>
					<a href="<?php echo esc_url( home_url( '/' ) )."manutencao-preventiva"; ?>" class="btn-confira">CONFIRA</a>
				</div>
			</div>
		</div>		
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
