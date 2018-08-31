<?php get_header(); ?>

<main>
<!--Main layout-->

<div class="container">
	<div class="row">
	<!--Carousel Wrapper-->
	<div id="carousel-fotos-lsi" class="carousel slide carousel-fade" data-ride="carousel">
	    <!--Indicators-->
	    <ol class="carousel-indicators">
	        <li data-target="#carousel-fotos-lsi" data-slide-to="0" class="active"></li>
	        <li data-target="#carousel-fotos-lsi" data-slide-to="1"></li>
	    </ol>
	    <!--/.Indicators-->
	
	    <!--Slides-->
	    <div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
	            <!--Mask color-->
	            <div class="view hm-black-light">
	                <img src=<?php echo get_template_directory_uri() . "/img/equipe-1.png"?> class="img-fluid" alt="">
	                <div class="full-bg-img">
	                </div>
	            </div>
	            <!--Caption-->
	            <div class="carousel-caption">
	                <div class="animated fadeInDown">
	                    <h3 class="h3-responsive">Equipe LSI</h3>
	                    <br>
	                </div>
	            </div>
	            <!--Caption-->
	        </div>

			<div class="carousel-item">
	            <!--Mask color-->
	            <div class="view hm-black-light">
	                <img src=<?php echo get_template_directory_uri() . "/img/equipe-2.png"?> class="img-fluid" alt="">
	                <div class="full-bg-img">
	                </div>
	            </div>
	            <!--Caption-->
	            <div class="carousel-caption">
	                <div class="animated fadeInDown">
	                    <h3 class="h3-responsive">Equipe LSI</h3>
	                    <br>
	                </div>
	            </div>
	            <!--Caption-->
	        </div>
	    </div>
	    <!--/.Slides-->
	
	    <!--Controls-->
	    <a class="left carousel-control" href="#carousel-fotos-lsi" role="button" data-slide="prev">
	        <span class="icon-prev" aria-hidden="true"></span>
	        <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#carousel-fotos-lsi" role="button" data-slide="next">
	        <span class="icon-next" aria-hidden="true"></span>
	        <span class="sr-only">Next</span>
	    </a>
	    <!--/.Controls-->
	</div>
	<!--/.Carousel Wrapper-->
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="title first center wow slideInUp">Laboratório de Sistemas de Informação</h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-6">
			<p class="text-justified wow slideInUp">Os integrantes do grupo SINBAD desenvolvem atividades de pesquisa científica 
						e aplicada, ensino e extensão na área de Sistemas de Informação e Banco de Dados.</p>
			<p class="text-justified wow slideInUp">Na pesquisa científica, buscam-se resultados inovadores nos campos de Sistemas 
						de Suporte à Decisão (Data Warehousing), Banco de Dados Espaço-Temporal, Banco de Dados 
						Multimídia, Bibliotecas Digitais, Banco de Dados Móveis, Mineração de Dados e Informática no Ensino.</p>
		</div>
		<div class="col-md-6">
			<p class="text-justified wow slideInUp">Dessa forma, a produção científica dos integrantes do grupo é vasta, abrangendo 
						desde publicações em conferências nacionais e internacionais até periódicos e livros. 
						Além disso, também são realizadas atividades de consultoria em Banco de Dados, Sistemas 
						de Informação, SGBD Oracle 11g e PostgreSQL. Por fim, ainda são ministrados cursos de 
						extensão nas áreas de Data Warehousing, Mineração de Dados, Banco de Dados Espaço-Temporal, 
						Bibliotecas Digitais e Integração de Banco de Dados com a Web.</p>
		</div>
	</div>
</div>
<br>

<div class="container-fluid center lsi-color-bg white-text margins-y">
	<div class="row">
		<div class="col-md-12">
			<h2 class="title first wow slideInUp">Linhas de Pesquisa</h2>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-12">
			<?php 
			$linhas_de_pesquisa = array(
					"Business Inteligence" 					=> "line-chart",
					"Geoprocessamento" 						=> "globe",
					"Análise de Sentimento" 				=> "heartbeat",
					"Data Mining" 							=> "pie-chart",
					"Data Warehousing" 						=> "database",
					"Bibliotecas Digitais" 					=> "book",
					"Web Semântica" 						=> "cloud",
					"Redes Sociais" 						=> "twitter",
					"Banco de Dados Multimídia" 			=> "film",
					"Banco de Dados Espaço-Temporal" 		=> "clock-o",
					"Bancos de Dados Distribuídos" 			=> "exchange",
					"Aplicações para plataformas móveis (Context-aware systems)" => "mobile"
			);
			foreach ($linhas_de_pesquisa as $nome => $icone) { ?>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
					<div class="service wow slideInUp">
						<div class="icon">
							<i class="fa fa-<?php echo $icone ?>"></i>
						</div>
						<h5><?php echo $nome ?></h5>
					</div>
				</div>				
			<?php }?>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="title center">Projetos em desenvolvimento no LSI</h2>
		</div>
	</div>
	
	<div class="row">
		<?php
		$query_filhas = array(
				'post_parent' => get_page_by_title("current")->ID,
				'order' => 'DESC',
				'post_type' => 'page',
				'post_status' => 'publish',
				'posts_per_page' => 2
		);
		$query = new WP_Query( $query_filhas );
		
		if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
			$imagem = get_the_post_thumbnail_url();
			if ($imagem == false) {
				$imagem = get_template_directory_uri() . "/img/img-default.jpg";
			}
			?>
			<div class="col-md-6">
				<!--Card-->
				<div class="card alinhado wow slideInUp">
				
				    <!--Card image-->
				    <div class="view overlay hm-white-slight">
				        <img src=<?php echo $imagem?> class="img-fluid" alt="">
				        <a href=<?php echo the_permalink()?>>
				            <div class="mask"></div>
				        </a>
				        <!--Title-->
				        <h4 class="card-title overlay"><?php echo get_the_title()?></h4>
				    </div>
				    <!--/.Card image-->
				
				    <!--Card content-->
				    <div class="card-block">
				        <!--Text-->
				        <p class="card-text"><?php echo get_the_excerpt()?></p>
				        <br>
				        <a href=<?php echo the_permalink()?> class="btn btn-primary bottom-right">Ver Mais</a>
				    </div>
				    <!--/.Card content-->
				
				</div>
				<!--/.Card-->
			</div>
		 <?php endwhile; endif; ?>
	</div>
	
	<div class="row">
		<div class="col-md-12 center">
			<br>
			<a class="btn btn-primary-outline waves-effect wow slideInUp" href=<?php echo get_site_url() . '/projetos'?>>Todos os Projetos <i class="fa fa-share right"></i></a>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="title center wow slideInUp">Contato</h2>
		</div>
	</div>
	
	<div class="row">
	    
	    <hr class="hidden-md-up">
		
		<div class="col-md-12 wow slideInUp">
			<div class="col-md-12 center">
				<h4>RAMAIS</h4>
				<br>
				<p>(83) 2101-1922 (LSI - TCE)</p>
				<p>(83) 2101-1921 (LSI - AESA)</p>
				<p>(83) 2101-1820 (LSI - Pós)</p>
				<br>
			</div>
		</div>
	</div>
	<br>
</div>

<br>
<div class="container wow slideInUp">
	<div id="map-container" class="z-depth-1" style="height: 300px"></div>
</div>

<!--/.Main layout-->
</main>

<?php get_footer(); ?>
