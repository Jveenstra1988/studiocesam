<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<div class="container my-5">
	<div class="row">

		<cms:template clonable='1' nested_pages='1' title='Portfolio pagina'> 
			<cms:editable name='page_title' type='text' />
			<cms:editable name='page_desc' type='text' />
			<cms:editable name='page_text' type='richtext' />

			<cms:editable 
				type='reverse_relation' 
				name='product_photos' 
				masterpage='illustraties.php' 
				field='photo_product' 
				anchor_text='View images' 
				label='Gallery' 
			/>

			
		</cms:template>

		<cms:if k_is_page >

			<div class="col-12">
				<h3><cms:show page_title /></h3>
				<p class="lead"><cms:show page_desc /></p>
				<p class="lead"><cms:show page_text /></p>
			</div>

			<cms:reverse_related_pages 'photo_product' masterpage='illustraties.php' >
				<!-- All variables of 'gallery.php' are available here -->
				<div class="col-md-4 my-5">
					<a href="<cms:show gg_image />" data-lightbox="<cms:show k_template_title />" data-title="<cms:show k_page_title />" class="clickable-card-image border">
						<img class="lazy" src='assets/loading.gif' data-src="<cms:show gg_image />" title="<cms:show k_page_title />" alt="<cms:show k_page_title />" />
					</a>
					<div class="text-center">
						<p class="my-2"><cms:show k_page_title /></p>
					</div>
				</div>
				
				</cms:reverse_related_pages>

			</div>
		<!-- END ROW -->

		</div>
		<!-- END CONTAINER -->
			

		</cms:if>

<?php include 'includes/footer.php'; ?>