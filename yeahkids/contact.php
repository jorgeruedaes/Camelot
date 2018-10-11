<!DOCTYPE html>
<html lang="zxx">

 <?php

 include('menuinicial.php');
 $ipvisitante=$_SERVER["REMOTE_ADDR"];
 ContadorVisitas($ipvisitante,'index');
 ?>

<body>
	<div id="breadcrumbs" class="section-block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ol class="breadcrumb">
						<li><a href="index.php">Inicio</a></li>
						<li class="active">Contactanos</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	
	<section id="contact_page" class="contact_page">
		<div class="container">
			<div class="row pb_50">
				<div class="col-md-1"></div>
				<div class="col-md-10 dot">
					<h2 class="section-title">Contáctanos</h2>
				</div>
				<div class="col-md-1"></div>
			</div>
			<div class="row">
				<div class="col-md-8 contact_link">
					<p class="contact-description"></p>
					<div class="row pb_50">
						<div class="col-md-6 col-sm-6 contact_block">
							<span class="contact_icon"><i class="fa fa-phone"></i></span>
							<ul>
								<li class="title">Telefonos</li>
								<li><?php echo String_Get_Valores('telefono') ?></li>
							</ul>
						</div>
						<div class="col-md-6 col-sm-6 contact_block">
							<span class="contact_icon"><i class="fa fa-envelope"></i></span>
							<ul>
								<li class="title">Email</li>
								<li><a href="#"><?php echo String_Get_Valores('email') ?></a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 contact_block">
							<span class="contact_icon"><i class="fa fa-share-alt"></i></span>
							<ul class="social_icon">
								<li class="title">Siguenos</li>
								<li class="b_blue_dark_social"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="b_blue_social"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="b_red_social"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li class="b_linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="b_red_social"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
							</ul>
						</div>
						<div class="col-md-6 col-sm-6 contact_block">
							<span class="contact_icon"><i class="fa fa-map-marker"></i></span>
							<ul>
								<li class="title">Ubicación</li>
								<li><p><?php echo String_Get_Valores('direccion') ?></p></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="sidebar">
						<div class="working_hours">
							<h4><span><i class="fa fa-clock-o"></i></span>Horarios</h4>
							<ul>
								<li class="day">Lunes</li>
								<li>8:00 am - 5:30 pm</li>
							</ul>
							<ul>
								<li class="day">Martes</li>
								<li>8:00 am - 5:30 pm</li>
							</ul>
							<ul>
								<li class="day">Miercoles</li>
								<li>8:00 am - 5:30 pm</li>
							</ul>
							<ul>
								<li class="day">Jueves</li>
								<li>8:00 am - 5:30 pm</li>
							</ul>
							<ul>
								<li class="day">Viernes</li>
								<li>8:00 am - 5:30 pm</li>
							</ul>
							<ul>
								<li class="day">Sabado</li>
								<li>Cerrado</li>
							</ul>
							<ul>
								<li class="day">Domingo</li>
								<li>Cerrado</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="contact_map">
				<div class="row">
					<div class="col-md-12">
						<div id="map"></div>
					</div>
				</div>
			</div>
			<div class="send_us">
				<div class="row">
					<div class="col-md-12">
						<div class="leave_reply">
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-10">
									<h3 class="title">Envianos un Mensaje</h3>
									<p class="description">Gracias por comunicarte con nosotros si nos dejas tus datos te responderemos lo antes posible.</p>
								</div>
								<div class="col-md-1"></div>
							</div>
							<div class="contact_form_blue">
							<form method="post" id="contact_form">
								<div id="form-messages"></div>
								<div class="form-group">
								<input id="name" name="name" type="text" placeholder="Nombre" required="required">
								</div>
								<div class="form-group m_form-group">
								<input class="m_input" id="email" name="email" type="text" placeholder="Email" required="required">
								</div>
								<div class="form-group">
								<input class="mr_0" id="phone" name="phone" type="text" placeholder="Numero celular" required="required">
								</div>
								<textarea id="message" name="message" rows="4" placeholder="Mensaje" required></textarea>
								<div id="messegeResult" class="messegeResult">
									<p>Su mensaje se envio correctamente</p>
									<button class="button" type="submit">Enviar</button>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

 <?php
 include('footerinicial.php');
 ?>


</body>

</html>
