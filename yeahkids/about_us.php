 <!DOCTYPE html>
 <html lang="zxx">

 <?php

 include('menuinicial.php');
 $ipvisitante=$_SERVER["REMOTE_ADDR"];
 ContadorVisitas($ipvisitante,'index');
 ?>

 <div id="breadcrumbs" class="section-block-wrapper">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12">
 				<ol class="breadcrumb">
 					<li><a href="index.php">Inicio</a></li>
 					<li class="active">Nosotros</li>
 				</ol>
 			</div>
 		</div>
 	</div>
 </div>

 <section id="about_page" class="about_page">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12 dot">
 				<h2 class="section-title">Nosotros</h2>
 			</div>
 		</div>
 		<div class="row">
 			<div class="col-md-6">
 				<div class="about_page_text">
 					<p><strong>CAMELOT</strong> fue fundado en el año 2002 con el objetivo de dar una alternativa educativa seria y profesional a las familias que quisieran tenernos como sus colaboradores en la educación de sus hijos.</p>
 					<p>
 						<br>
 						<strong><h3>VISIÓN</h3></strong>
 					Ser formadores y forjadores de niños(as) que gestionen el cambio que el país necesita, fomentando variables profundas en el nivel de escolaridad de los educandos, en la calidad de la enseñanza facilitando el paso del niño(a) de la vida familiar y comunitaria a la vida escolar, así articulando el paso de este nivel a la educación básica. Con el fin de otorgar formación integral a los niños(as) en un espíritu creativo dentro de una sociedad democrática, tolerante y comprometida con los deberes y derechos humanos.</p>

 					<p>
 						<br>
 						<strong><h3>MISIÓN</h3></strong>
 					Potenciar el desarrollo de cada niño(a), según sus propias características de manera que se sienta feliz consigo mismo, con sus logros y aprendizaje, contribuyendo con sus talentos y aptitudes a hacer feliz también a los otros. Así mismo fomentando variables en el nivel de escolaridad de los educandos, facilitando el paso de la vida familiar y comunitaria a la vida escolar.</p>
 				</div>
 			</div>
 			<div class="col-md-6">
 				<div class="about_page_img wow fadeIn">
 					<img src="img/about/about_img.jpg" alt="">
 				</div>
 			</div>
 		</div>
 	</div>
 </section>
<!-- <section id="know_us" class="know_us">
 	<div class="know_us_overlay"></div>
 	<div class="container">
 		<div class="row">
 			<div class="col-md-9">
 				<div class="know_us_left">
 					<h2>Get to know us better!</h2>
 					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
 				</div>
 			</div>
 			<div class="col-md-3">
 				<div class="know_us_right">
 					<p><a href="#">read more<i class="fa fa-angle-right"></i></a></p>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>-->

 <section id="about_teacher" class="about_teacher">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12">
 				<h2 class="section-title">Profesores calificados</h2>
 				<p class="section-description">Llevar una clase  exige una gran preparación no solamente en conocimientos sino también en pedagogía y en algo en lo que es más difícil formarse: en valores. Valores entendidos como normas de conducta y actitudes que guían nuestro comportamiento, que son cohe­­rentes con lo que consideramos correcto y que dan forma a nuestra manera de <strong>ser y de sentir</strong>.</p>
 			</div>
 		</div>
 		<div class="row arrows_red">
 			<div id="about_teacher_owl" class="owl-carousel owl-theme">
 				<?php
 				$colors = array('red_block', "yellow_block", "blue_block", "grey_block");
 				$contador = 0;
 				$vector = Get_profesores();
 				foreach ($vector as $value)
 				{
 					?>
 					<div class="item">
 						<div class="col-md-12">
 							<div class="teacher_block <?php echo $colors[$contador] ?> wow fadeInUp">
 								<div class="teacher_avatar">
 									<img src="<?php echo $value['imagen'] ?>" alt="">
 								</div>
 								<div class="teacher_about">
 									<h3><a href="teacher.php?id="<?php echo $value['codigoprofesor'] ?>><?php echo $value['nombre'] ?></a></h3>
 									<span>Profesor</span>
 									<div class="teacher_link social_icon t_green_dark">
 										<ul>
 											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
 											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
 											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
 										</ul>
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>	
 					<?php
 					$contador = $contador+1;

 					if ($contador === 4) 
 					{
 						$contador =0;
 					} 

 				}
 				?>
 			</div>
 		</div>
 	</div>
 </section>

 <div id="about_counter" class="about_counter section-block-wrapper">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp">
 				<p><i class="fa fa-smile-o"></i></p>
 				<p class="number_count"><span class="counter">158</span></p>
 				<p>niños</p>
 			</div>
 			<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp">
 				<p><i class="fa fa-graduation-cap"></i></p>
 				<p class="number_count"><span class="counter">19</span></p>
 				<p>profesores</p>
 			</div>
 			<div class="col-md-3 col-sm-3 col-xs-6 p_block wow fadeInUp">
 				<p><i class="fa fa-bell"></i></p>
 				<p class="number_count"><span class="counter">40</span></p>
 				<p>horas/semana</p>
 			</div>
 			<div class="col-md-3 col-sm-3 col-xs-6 p_block wow fadeInUp">
 				<p><i class="fa fa-university"></i></p>
 				<p class="number_count"><span class="counter">1632</span></p>
 				<p>graduados</p>
 			</div>
 		</div><!-- end row -->
 	</div>
 </div>

 <section id="about_stories" class="about_stories">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12">
 				<h2 class="section-title">Historias</h2>
 			</div>
 		</div>
 		<div class="row arrows_red">
 			<div id="stories_owl" class="owl-carousel owl-theme">
 				<div class="item col-md-12">
 					<div class="s_green_block all_color wow fadeInUp">
 						<h4>Activities Improve Mind</h4>
 						<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
 						<p class="komma"><object type="image/svg+xml" data="img/icons/koma_grey.svg"> <img src="img/icons/koma.png" alt="image format png" /></object></p>
 						<div class="stories_autor">
 							<div class="stories_autor_avatar">
 								<img src="img/blog/author1.jpg" alt="">	
 							</div>
 							<div class="stories_autor_text c_green">
 								<p><span>Linda Harrison</span></p>
 								<p>Lorem ipsum dolor sit amet.</p>
 							</div>
 						</div>
 					</div>
 				</div>
 				<div class="item col-md-12">
 					<div class="s_red_block all_color wow fadeInUp">
 						<h4>School Days</h4>
 						<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
 						<p class="komma"><object type="image/svg+xml" data="img/icons/koma_grey.svg"> <img src="img/icons/koma.png" alt="image format png" /></object></p>
 						<div class="stories_autor">
 							<div class="stories_autor_avatar">
 								<img src="img/blog/author2.jpg" alt="">	
 							</div>
 							<div class="stories_autor_text c_red">
 								<p><span>Spencer Todd</span></p>
 								<p>Lorem ipsum dolor sit amet.</p>
 							</div>
 						</div>
 					</div>
 				</div>
 				<div class="item col-md-12">
 					<div class="s_margin_block all_color wow fadeInUp">
 						<h4>Active Learning</h4>
 						<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
 						<p class="komma"><object type="image/svg+xml" data="img/icons/koma_grey.svg"> <img src="img/icons/koma.png" alt="image format png" /></object></p>
 						<div class="stories_autor">
 							<div class="stories_autor_avatar">
 								<img src="img/blog/author4.jpg" alt="">	
 							</div>
 							<div class="stories_autor_text c_blue">
 								<p><span>Chloe Wilkinson</span></p>
 								<p>Lorem ipsum dolor sit amet.</p>
 							</div>
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
