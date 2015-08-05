<?php
// No direct access
defined('_JEXEC') or die;
?>
<div class="middle-section blue-grey">
	<div class="container">
		<div class="row">
			<div class="section">
				<?php if($module->showtitle) : ?>
               <h4 class="center-align brown-text text-lighten-5">
                  <?php echo $module->title; ?>
               </h4>
            <?php endif; ?>
				<p class=" center-align flow-text blue-grey-text text-darken-4">
               <?php echo $params->get('text_intro'); ?>
            </p>
			</div>
         <?php for ($i=1; $i <= 3; $i++) : ?>
				<div class="col s12 m4 center-align section">
					<div class="section">
						<img class="responsive-img circle" src="<?php echo $params->get("img_column_$i"); ?>" alt="<?php echo $params->get("alt_text_$i"); ?>">
						<h5 class="brown-text text-lighten-5">
                     <?php echo $params->get("title_$i"); ?>
                  </h5>
						<p class="blue-grey-text text-lighten-3">
                     <?php echo $params->get("description_$i"); ?>
                  </p>
						<a class="btn-large red hide-on-med-and-up" href="<?php echo $params->get("btn_url_$i"); ?>">
                     <?php echo $params->get("btn_text_$i"); ?>
                  </a>
					</div>
				</div>
         <?php endfor; ?>
		</div>
		<div class="row hide-on-small-only">
			<?php for($i=1; $i <= 3; $i++) : ?>
				<div class="col s12 m4 center-align">
					<a class="btn-large red" href="<?php echo $params->get("btn_url_$i"); ?>">
						<?php echo $params->get("btn_text_$i"); ?>
					</a>
				</div>
			<?php endfor; ?>
		</div>
	</div>
</div>
