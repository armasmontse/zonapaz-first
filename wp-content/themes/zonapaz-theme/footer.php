<?php

global $contact;

get_template_part('views/general/cita-footer');

?>

</div> <!-- Aquí cierra el main-wrap -->

<?php if(true): ?>

<hr class="line-footer-divisor margintop-footer">

<footer class="footer">
	<div class="logos">
		<a href="https://elcultivo.mx/">
			<img class="logos__svg" src="<?php echo THEMEURL ?>/images/footer/footer-cultivo.svg" alt="">
		</a>
		<a href="http://cardumen467.com">
			<img class="logos__svg" src="<?php echo THEMEURL ?>/images/footer/footer-cardumen.svg" alt="">
		</a>
	</div>
	<div class="footer__contenedor">
		<div class="grid__container">
			<?php
                wp_nav_menu(array(
                    'menu'           => "main",
                    'theme_location' => 'footer_menu',
                    'menu_class'     => 'lista',
            	));
            ?>
		</div>
		<div class="legales">
			<ul class="legales__lista">
				<li class="legales__item">
					<a href="mailto:<?php echo $contact->social_net['mail']; ?>"><?php echo $contact->social_net['mail']; ?></a>
				</li>
				<li class="legales__item separacion">
					<a href=" <?php echo BLOGURL ?>/aviso-de-privacidad">Aviso de privacidad</a>
				</li>
				<li class="legales__item">
					Todos los derechos reservados
				</li>
			</ul>
		</div>

	</div>
</footer>

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>

<script type='text/javascript'>
	(function($) {
		window.fnames = new Array();
		window.ftypes = new Array();
		fnames[0]='EMAIL';
		ftypes[0]='email';
	}(jQuery));

	var $mcj = jQuery.noConflict(true);
</script>

<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
