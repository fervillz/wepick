<?php
/**
 * A basic flex grid element type.
 * 
 * @uses  assets/sass/prebuilds/_flex-grid.scss
 */
?>

<?php // Element only; Wrap it in a section for best use. ?>
<div class="flex-grid-wrapper">

	<?php // uses .col-4 .col-3 .col-2. Has responsive styles ?>
	<div class="flex-grid col-3">
		<div class="grid-item">
			<div class="your-box-element-here">
				<span>Hello World</span>
			</div><!-- .your-box-class-here -->
		</div><!-- .grid-item -->
		
		<div class="grid-item">
			<div class="your-box-element-here">
				<span>Hello World</span>
			</div><!-- .your-box-class-here -->
		</div><!-- .grid-item -->

		<div class="grid-item">
			<div class="your-box-element-here">
				<span>Hello World</span>
			</div><!-- .your-box-class-here -->
		</div><!-- .grid-item -->
	</div><!-- .flex-grid -->
</div><!-- .flex-grid-wrapper -->
