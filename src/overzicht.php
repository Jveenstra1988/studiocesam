<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<cms:template title='Overzichtspagina' label='overviewpage' desc='Dit is de content van de overzichtspagina' clonable='1'>

	<cms:editable name='page_title' label='Titel' type='text' />
	<cms:editable name='page_desc' label='Subtitel' type='text' />
	<cms:editable name='page_text' label='Omschrijving' type='richtext' />
	
	<cms:repeatable name='categories' label='Categorieën' desc='Dit zijn kaarten voor de overzichtspagina' >
		<cms:editable name='card_image' type='image' label='Afbeelding' show_preview='1' preview_width='150' input_width='200' col_width='300' />
		<cms:editable name='card_title' type='text' label='Titel' />
		<cms:editable name='card_text' type='text' label='Omschrijving' />
		<cms:editable name='card_button_text' type='text' label='Knop tekst' />
		<cms:editable name='card_button_link' type='text' label='Knop link' />
	</cms:repeatable>

</cms:template>

<div class="container">
	
	<div class="row">

		<div class="col-12">
			<h3><cms:show page_title /></h3>
			<p class="lead"><cms:show page_desc /></p>
			<p class="lead"><cms:show page_text /></p>
		</div>

		<cms:show_repeatable 'categories' >
		<div class="my-5 col-4"> 
			<div class="card">
				<img class="card-img-top lazy" src='assets/loading.gif' data-src="<cms:show card_image />" src="<cms:show card_image />" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title"><cms:show card_title /></h5>
					<p class="card-text"><cms:show card_title /></p>
				</div>
				<div class="card-footer">
					<a href="<cms:show card_button_link />" class="btn btn-outline-primary"><cms:show card_button_text /></a>
				</div>
			</div>
		</div>
		</cms:show_repeatable>

	</div>

</div>

<?php include 'includes/footer.php'; ?>