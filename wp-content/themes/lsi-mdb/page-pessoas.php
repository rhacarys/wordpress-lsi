<?php get_header(); ?>

<main> <!--Main layout-->
<div class="container">
	<h1 class="h1-responsive title first center wow slideInUp">Integrantes do LSI</h1>

	<!-- Nav tabs -->
	<ul class="nav nav-tabs wow slideInUp" role="tablist">
		<li class="nav-item"><a class="nav-link active" data-toggle="tab"
			href="#panelProfessores" role="tab">Professores</a></li>
		<li class="nav-item"><a class="nav-link" data-toggle="tab"
			href="#panelAlunos" role="tab">Alunos</a></li>
	</ul>

	<!-- Tab panels -->
	<div class="tab-content">
	
		<div class="tab-pane active wow slideInUp" id="panelProfessores" role="tabpanel">
			<br>
			<?php echo get_page_by_path("pessoas/professores")->post_content; ?>
		</div>


		<div class="tab-pane wow slideInUp" id="panelAlunos" role="tabpanel">
			<br>
			<?php echo get_page_by_path("pessoas/alunos")->post_content; ?>
		</div>
		
	</div>
	<br>

</div>
<!--/.Main layout--> </main>

<?php get_footer(); ?>
