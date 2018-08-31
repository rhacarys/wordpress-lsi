<?php get_header(); ?>

<main> <!--Main layout-->
<div class="container">
	<h1 class="h1-responsive title first center wow slideInUp">Artigos e Publicações</h1>

	<!-- Nav tabs -->
	<ul class="nav nav-tabs wow slideInUp" role="tablist">
		<li class="nav-item"><a class="nav-link active" data-toggle="tab"
			href="#panelCapitulos" role="tab">Capítulos de Livros</a></li>
		<li class="nav-item"><a class="nav-link" data-toggle="tab"
			href="#panelPeriodicos" role="tab">Periódicos</a></li>
		<li class="nav-item"><a class="nav-link" data-toggle="tab"
			href="#panelAnaisI" role="tab">Anais Internacionais</a></li>
		<li class="nav-item"><a class="nav-link" data-toggle="tab"
			href="#panelAnaisN" role="tab">Anais Nacionais</a></li>
	</ul>

	<!-- Tab panels -->
	<div class="tab-content with-bullets">
	
		<div class="tab-pane active wow slideInUp" id="panelCapitulos" role="tabpanel">
			<br>
			<?php echo get_page_by_path("artigos/capitulos-de-livros")->post_content; ?>
		</div>


		<div class="tab-pane wow slideInUp" id="panelPeriodicos" role="tabpanel">
			<br>
			<?php echo get_page_by_path("artigos/periodicos")->post_content; ?>
		</div>


		<div class="tab-pane wow slideInUp" id="panelAnaisI" role="tabpanel">
			<br>
			<?php echo get_page_by_path("artigos/anais-internacionais")->post_content; ?>
		</div>


		<div class="tab-pane wow slideInUp" id="panelAnaisN" role="tabpanel">
			<br>
			<?php echo get_page_by_path("artigos/anais-nacionais")->post_content; ?>
		</div>
		
	</div>

</div>
<!--/.Main layout--> </main>

<?php get_footer(); ?>
