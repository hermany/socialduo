<?php
header("Content-Type: text/html;charset=utf-8");
require_once(_RUTA_NUCLEO."clases/class-constructor.php");
$fmt = new CONSTRUCTOR;
$img_bg = $fmt->class_multimedia->multimedia_cat_last("1");
?>
<section class="pub-presentacion" style="background:url(<?php echo $img_bg; ?>) no-repeat center center">
		<div class="pub-inner container">
			<div class="mensaje">
				<img src="<?php echo _RUTA_WEB; ?>/images/duo.svg" alt="">
				<span class="leyenda">Haz crecer tu negocio con un equipo de Redes Sociales</span>
				<div class="group">
					<div class="buscar">
						<i class="icn icn-search"></i>
						<input type="text" id="inputBuscar" placeholder="Buscar un equipo">
					</div>
					<a href="" class="btn btn-success btn-crear-equipo">Crear un Equipo</a>
				</div>
			</div>
		</div>
		</div>
</section>
<section class="pub-plataformas">
	<div class="pub-inner container">
		<div class="mensaje">
			Socialduo integra las plataformas de redes sociales esenciales para tu negocio.
		</div>
		<div class="plataformas">
			<img class="image" alt="Facebook"   src="<?php echo _RUTA_WEB; ?>/images/logo-facebook-1.svg">
			<img class="image" alt="Twitter"   src="<?php echo _RUTA_WEB; ?>/images/logo-twitter-1.svg">
			<img class="image img-instagram" alt="instagram"   src="<?php echo _RUTA_WEB; ?>/images/logo-instagram-1.svg">
		</div>
		<div class="mensaje mensaje-clientes">
			Algunas de las empresas que utilizan el servicio.
		</div>
		<div class="clientes"></div>
	</div>
</section>

<section class="pub-perfiles">
	<div class="pub-inner container">
		<div class="perfiles">
			<label for="" class="title">
				<h4>Perfiles que puedes encontrar en los equipos</h4>
			</label>
		</div>
		<div class="mensaje"></div>
		<div class="video-cmfn">
			<div class="inner">
				<video id="video" playsinline="" webkit-playsinline="" loop="" autoplay="" muted="" class="autoplaying fullscreen-bg__video">
					<source src="https://shemeansbusiness.fb.com/wp-content/uploads/2018/02/facebook-shemeansbusiness-banner-video1.mp4" type="video/mp4">
					<source src="https://shemeansbusiness.fb.com/wp-content/uploads/2018/02/facebook-shemeansbusiness-banner-video1.ogv" type="video/ogv">
					<source src="https://shemeansbusiness.fb.com/wp-content/uploads/2018/02/facebook-shemeansbusiness-banner-video1.webm" type="video/webm">
					Your browser does not support the video tag.
				</video>
			</div>
		</div>
	</div>
</section>