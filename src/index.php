<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<div class="container mt-3">

	<cms:template title='Homepagina' label='Homepage' desc='Dit is de content van de homepagina'>
		<cms:editable name='main_image' type='image' desc='Dit is de grote afbeelding op de homepagina' label='Hoofdafbeelding' show_preview='1' preview_width='150' />
		<cms:editable name='main_description' type='text' desc='Dit is de omschrijving op de homepagina' label='Hoofd omschrijving' />
	</cms:template>

	<img class="img-fluid lazy" src='assets/loading.gif' data-src="<cms:show main_image />" alt="Be like the quirrel girl">

	<p class='lead text-center'><cms:show main_description /></p>

</div>

<cms:repeatable name='my_categories' label='Categorieën' desc='Dit zijn de categorie kaarten op de home' >
	<cms:editable name='card_image' type='image' label='Afbeelding' show_preview='1' preview_width='150' input_width='200' col_width='300' />
	<cms:editable name='card_title' type='text' label='Titel' />
	<cms:editable name='card_text' type='text' label='Omschrijving' />
	<cms:editable name='card_button_text' type='text' label='Knop link' />
	<cms:editable name='card_button_link' type='text' label='Knop tekst' />
</cms:repeatable>

<div class="container">
	<div class="row">

		<cms:show_repeatable 'my_categories' >
		<div class="my-5 col-sm-6 col-md-4"> 
			<div class="card">
				<img class="card-img-top lazy" src='assets/loading.gif' data-src="<cms:show card_image />" alt="Card image cap">
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

		<aside class='col-3 my-5'>
			<div class="fb-page" data-href="https://www.facebook.com/Studio-Cesam-410108515779743/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Studio-Cesam-410108515779743/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Studio-Cesam-410108515779743/">Studio Cesam</a></blockquote></div>
		</aside>

	</div>

</div>

<?php include 'includes/footer.php'; ?>