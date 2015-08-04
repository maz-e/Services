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
                        <?php echo $module->title; ?>Porqué BLADIS?
                     </h4>
                  <?php endif; ?>
						<p class=" center-align flow-text blue-grey-text text-darken-4">
                     <?php echo $params->get('text_intro'); ?>Sabémos lo importante que es para nuestros clientes su trabajo y nos avala más de 35 años ayudando ...
                  </p>
					</div>
               <?php for ($i=0; $i < 3 ; $i++) : ?>
   					<div class="col s12 m4 center-align section">
   						<div class="section">
   							<img class="responsive-img circle" src="<?php echo $params->get("img_column_$i"); ?>" alt="<?php echo $params->get("alt_text_$i"); ?>">
   							<h5 class="brown-text text-lighten-5">
                           <?php echo $params-get("title_$i"); ?>
                        </h5>
   							<p class="blue-grey-text text-lighten-3">
                           <?php echo $params-get("description_1"); ?>
                        </p>
   							<a class="btn-large red hide-on-med-and-up" href="<?php echo $params-get("btn_url_$i"); ?>">
                           <?php echo $params-get("btn_text_$i"); ?>
                        </a>
   						</div>
   					</div>
               <!-- <?php endfor; ?>
					<div class="col s12 m4 center-align section">
						<div class="section">
							<img class="responsive-img circle" src="http://placehold.it/200x200">
							<h5 class="brown-text text-lighten-5">Exposición</h5>
							<p class="blue-grey-text text-lighten-3">Si aún no te has decidido, puedes visitarnos y tomar ideas para tu casa. En nuestra exposición podrás ver las últimas novedades e informarte de los productos.</p>
							<a class="btn-large red hide-on-med-and-up">Galería</a>
						</div>
					</div>
					<div class="col s12 m4 center-align section">
						<div class="section">
							<img class="responsive-img circle" src="http://placehold.it/200x200">
							<h5 class="brown-text text-lighten-5">Reparto Gratuito</h5>
							<p class="blue-grey-text text-lighten-3">Servicio de entrega rápido y eficiente gracias a nuestra propia flota de vehiculos.</p>
							<a class="btn-large red hide-on-med-and-up">Llámanos</a>
						</div>
					</div>
				</div> -->
				<div class="row hide-on-small-only">
					<div class="col s12 m4 center-align">
						<a class="btn-large red">Proyectos</a>
					</div>
					<div class="col s12 m4 center-align">
						<a class="btn-large red">Galería</a>
					</div>
					<div class="col s12 m4 center-align">
						<a class="btn-large red">Llámanos</a>
					</div>
				</div>
