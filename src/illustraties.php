<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<div class="container my-5">
	<div class="row">

		<cms:template title='Gallery' clonable='1' dynamic_folders='1' gallery='1' hidden='1'>
			<cms:editable
				name="gg_image"
				label="Image"
				desc="Upload your main image here"
				show_preview='1'
				preview_height='200'
				type="image"
			/>

			<cms:editable
				name="gg_thumb"
				assoc_field="gg_image"
				label="Image Thumbnail"
				desc="Thumbnail of image above"
				width='115'
				height='115'
				enforce_max='1'
				type="thumbnail"
			/>

			<cms:editable 
				type='relation'
				name='photo_product' 
				masterpage='page.php' 
				has='one' 
				no_gui='1' 
				label='-'
			/>

			<cms:editable 
				name='my_desc' 
				label='Omschrijving bij foto'
				type='textarea'
			/>
		</cms:template>

		<cms:pages masterpage="illustraties.php" include_subfolders='0' >
		
		<div class="col-md-4 my-5">
			<a href="<cms:show gg_image />" data-lightbox="<cms:show k_template_title />" data-title="<cms:show k_page_title />" class="clickable-card-image border">
				<img class='lazy' src='assets/loading.gifpng' data-src="<cms:show gg_image />" title="<cms:show k_page_title />" alt="<cms:show k_page_title />" />
			</a>
			<div class="text-center">
				<p class="my-2"><cms:show k_page_title /></p>
			</div>
		</div>
		
		</cms:pages>

	</div>
<!-- END ROW -->

</div>
<!-- END CONTAINER -->

<?php include 'includes/footer.php'; ?>