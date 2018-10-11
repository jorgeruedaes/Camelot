<!DOCTYPE html>
<html lang="zxx">

<?php

include('menuinicial.php');
$ipvisitante=$_SERVER["REMOTE_ADDR"];
ContadorVisitas($ipvisitante,'index');
?>

<body>

	
	<section id="slider" class="section-block-wrapper">

		<!-- Background swither -->
		<div class="swicher_section">


			<div class="color-sw" id="color-sw">
				<div id="color-sw-open" class="color-sw-open">
					<i class="fa fa-cog"></i>
				</div>
				<div class="color-sw-header">
					Intercambiar fondo <span class="color-sw-close" id="color-sw-close"><i class="fa fa-close"></i></span>
				</div>
				<div class="color-sw-body">
					<p>Selecciona un fondo</p>
					<div class="color-sw-item active" id="slider_background_v1">
						<div></div>
					</div>
					<div class="color-sw-item" id="slider_background_v2">
						<div></div>
					</div>
					<div class="color-sw-item" id="slider_background_v3">
						<div></div>
					</div>
					<div class="color-sw-item" id="slider_background_v6">
						<div></div>
					</div>
					<div class="color-sw-item" id="slider_background_v5">
						<div></div>
					</div>
					<div class="color-sw-item" id="slider_background_v4">
						<div></div>
					</div>
					<div class="color-sw-item" id="slider_background_v7">
						<div></div>
					</div>
					<div class="color-sw-item" id="slider_background_v8">
						<div></div>
					</div>
					<div class="color-sw-item" id="slider_background_v9">
						<div></div>
					</div>
					<div class="color-sw-item" id="slider_background_v10">
						<div></div>
					</div>
					<div class="color-sw-item" id="slider_background_v11">
						<div></div>
					</div>
					<div class="color-sw-item" id="slider_background_v12">
						<div></div>
					</div>
				</div>
			</div>

		</div>

		<!-- END Background swither -->

		<div class="parallax_bg hidden-sm hidden-xs">
			<ul id="scene" class="scene" data-scalar-x="10" data-scalar-y="4">
				<li class="layer" data-depth="0.00"><img id="sun" src="img/home/sun.png" alt=""></li>
				<li class="layer" data-depth="0.20"><img id="globe" src="img/home/globe.png" alt=""></li>
				<li class="layer" data-depth="0.30"><img id="cloud" src="img/home/clouds.png" alt=""></li>
			</ul>
		</div>
		<div id="overlay_slider_land" class="overlay_slider_land"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div id="slider_home" class="slider-pro">
						<div class="sp-slides">
							<div class="sp-slide">
								<img class="sp-image" src="img/home/slider_home_2.jpg" alt="The Last of us">
								<div class="sp-layer sp-static slide_block_text" data-position="bottomLeft" data-horizontal="40" data-vertical="57" data-show-delay="400" data-hide-delay="400">
									<h3>Bienvenido a Camelot</h3>
									<p>El centro de aprendizaje para tus hijos</p>
									<span><a href="about_us.php">Leer más</a></span>
								</div>
								<div class="sp-caption slide_block_text">
									<h3>Bienvenido a Camelot</h3>
									<p>El perfecto centro de aprendizaje para tus hijos</p>
									<span><a href="about_us.php">Leer más</a></span>
								</div>
							</div>
							<div class="sp-slide">
								<img class="sp-image" src="img/home/slider_home_3.jpg" alt="The Last of us">
								<div class="sp-layer sp-static slide_block_text" data-position="bottomLeft" data-horizontal="40" data-vertical="57" data-show-delay="400" data-hide-delay="400">
									<h3>Increibles ilustraciones</h3>
									<p>Diseños personalizables</p>
									<span><a href="#">Leer más</a></span>
								</div>
								<div class="sp-caption slide_block_text">
									<h3>Bienvenido a Camelot</h3>
									<p>El centro de aprendizaje para tus hijos</p>
									<span><a href="about_us.php">Leer más</a></span>
								</div>
							</div>
						</div>
						<div class="sp-slide">
							<img class="sp-image" src="img/home/slider_home_1.jpg" alt="The Last of us">
							<div class="sp-layer sp-static slide_block_text" data-position="bottomLeft" data-horizontal="40" data-vertical="57" data-show-delay="400" data-hide-delay="400">
								<h3>Bienvenido a Camelot</h3>
								<p>El centro de aprendizaje para tus hijos</p>
								<span><a href="#">Leer más</a></span>
							</div>
							<div class="sp-caption slide_block_text">
								<h3>Bienvenido a Camelot</h3>
								<p>El centro de aprendizaje para tus hijos</p>
								<span><a href="#">Leer más</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="offer" class="offer">
		<div class="container">
			<div class="row">
				<h2>Qué ofrecemos</h2>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="offer_block offer_red wow fadeInUp">
						<i class="fa fa-mortar-board"></i>
						<h4>Compromiso Academico</h4>
						<p>Apostamos por una enseñanza académica de calidad, para lo cual siempre requerimosde un personal docente comprometido con sus labores, con el propio crecimiento y la actualización del saber y metodologias.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="offer_block offer_blue wow fadeInUp">
						<i class="fa fa-handshake-o"></i>
						<h4>Formación integral</h4>
						<p>Un buen colegio, en ese sentido, persigue la constitución académica, moral, ética, física y espiritual de sus alumnos, a través de diversos espacios y estrategias propicios para el estímulo de dichos aprendizajes.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="offer_block offer_green wow fadeInUp">
						<i class="fa fa-futbol-o"></i>
						<h4>Formación social y deportiva</h4>
						<p>Contamos con los espacios necesarios fuera del aula para el ejercicio y el deporte, indispensables durante las etapas tempranas de la vida del niño así como de áreas que fomentan el intercambio social, la persecución de los intereses artísticos (musicales, etc.)</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="about">
		<!--<div class="overlay_one">
			<div class="bg_top"></div>
			<div class="bg_bottom"></div>
		</div>
		<div class="overlay_two">
			<div class="bg_top"></div>
			<div class="bg_bottom"></div>
		</div>
		<div class="overlay_three">
			<div class="bg_top"></div>
			<div class="bg_bottom"></div>
		</div>-->
		<div class="container">
			<div class="row">
				<h2>Nosotros</h2>
				<div class="about_text_block">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<p><strong>Gimnasio Psicopedagógico Camelot</strong>
 					educamos a su hijo teniendo en cuenta que él es el centro de desarrollo de nuestra labor educativa. Por tal motivo, nuestro trabajo tendrá como propósito orientar al niño(a) para que sea una persona creativa, crítica, autónoma, útil y responsable de sus actuaciones, que valore lo propio siendo parte activa dentro de su entorno social.</p>
 					<ul>
 						<li>Formación integral</li>
 						<li>Docentes comprometidos</li>
 						<li>La colaboración entre padres  e institución</li>
 						<li>Un clima propicio para el aprendizaje</li>
 						<li>Atención de las necesidades especiales</li>
 					</ul>
 					<p><strong>Somos Camelot, el lugar propocio para la formación de sus hijos.</strong></p>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 about_img_block wow fadeIn">
						<img src="img/home/about_img.jpg" alt="">
					</div>
				</div>
			</div>
			<!--<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="about_tabs">
						<div class="about_bear_img hidden-sm hidden-xs">
							<img src="img/home/about_bear.png" alt="">
						</div>
						<ul class="nav nav-tabs">
							<li class="active"><a class="tab_red" href="#education" data-toggle="tab">Education</a></li>
							<li><a class="tab_blue" href="#activities" data-toggle="tab">Activities</a></li>
							<li><a class="tab_lightgreen" href="#friendship" data-toggle="tab">Friendship</a></li>
							<li><a class="tab_green" href="#development" data-toggle="tab">Development</a></li>
						</ul>
						<div class="tab-content about_tabs_content">
							<div class="tab-pane tab_red active" id="education">
								<h3>Educación</h3>
								<div class="col-md-7 col-sm-12 col-xs-12">
									<div class="hidden-lg hidden-md"></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
									<p>Duis aute irure dolor in reprehenderit in <a href="#">voluptate velit esse</a> cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, <a href="#">totam rem aperiam</a>, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
									<a class="button" href="#">Button</a>
								</div>
								<div class="col-md-5 hidden-sm hidden-xs about_img_content">
									<img src="img/home/education.jpg" alt="">
								</div>
							</div>
							<div class="tab-pane tab_blue" id="activities">
								<h3>Actividades</h3>
								<div class="col-md-7 col-sm-12">
									<div class="hidden-lg hidden-md"></div>
									<p>Nam mi mi, hendrerit nec sapien in, dictum pretium lectus. In hac <a href="#">habitasse platea</a> dictumst. Donec vel libero quis enim aliquet aliquet. Aenean sit amet mi augue. Quisque efficitur tempor erat eget aliquet. Aenean eget vulputate elit. Mauris quis sem a tortor tempor sodales. </p>
									<p>Vestibulum sit amet ligula vitae felis dapibus ullamcorper nec sit amet diam. Quisque maximus, erat non scelerisque suscipit, eros risus scelerisque tortor, ut <a href="#">faucibus libero leo</a> nec sapien. Nullam non lobortis dui, eu congue quam. Vivamus finibus egestas elit vel luctus. Cras justo neque, dapibus sed dignissim ut, varius vitae sem. Morbi hendrerit at diam et varius. Fusce quis urna iaculis, viverra arcu in, imperdiet. </p>

									<a class="button" href="#">Button</a>
								</div>
								<div class="col-md-5 hidden-sm hidden-xs about_img_content">
									<img src="img/home/activities.jpg" alt="">
								</div>
							</div>
							<div class="tab-pane tab_lightgreen" id="friendship">
								<h3>Amistad</h3>
								<div class="col-md-7 col-sm-12">
									<div class="hidden-lg hidden-md"></div>
									<p>Curabitur lacinia augue metus, luctus scelerisque neque ornare sit amet. Nulla id leo eget libero efficitur pulvinar. Praesent quis sodales purus, vitae condimentum ligula. Mauris eleifend, ligula in rhoncus semper, dui turpis condimentum orci, at finibus eros nibh non erat. </p>
									<p>Donec posuere nec purus id tempus. <a href="#">Curabitur pellentesque</a> tellus sit amet tortor bibendum, imperdiet mattis turpis vulputate. Nulla sed sodales est. Morbi vitae mauris et magna varius suscipit. Nulla in maximus sem. Ut eget sem ligula. Mauris malesuada est nec pretium faucibus.</p>
									<p>Morbi gravida molestie condimentum. Pellentesque nulla quam, consequat eget enim sed, condimentum ultricies massa. </p>
									<a class="button" href="#">Button</a>
								</div>
								<div class="col-md-5 hidden-sm hidden-xs about_img_content">
									<img src="img/home/friendship.jpg" alt="">
								</div>
							</div>
							<div class="tab-pane tab_green" id="development">
								<h3>Desarrollo</h3>
								<div class="col-md-7 col-sm-12">
									<div class="hidden-lg hidden-md"></div>
									<p>Nulla erat massa, porta ut dolor a, cursus iaculis neque. Curabitur eu nulla eget arcu <a href="#">faucibus ornare vel</a> at urna. Aenean eget massa orci. </p>
									<p>Donec nec laoreet leo. Duis egestas nisi eget blandit semper. Nulla sodales, sapien et facilisis sagittis, lorem elit finibus ligula, ac efficitur eros nisl tempor nisl. Donec quis vehicula odio. Fusce sed congue augue. Fusce pellentesque rhoncus purus ut porttitor. Praesent pulvinar dignissim iaculis.</p>
									<p>Nunc <a href="#">maximus vel augue</a> nec eleifend. Vivamus sem erat, ornare vitae mi ac, ullamcorper laoreet lorem. Cras aliquet arcu finibus, feugiat nulla eget, dignissim enim.</p>
									<a class="button" href="#">Button</a>
								</div>
								<div class="col-md-5 hidden-sm hidden-xs about_img_content">
									<img src="img/home/development.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>-->
		</div>
	</section>
	<section id="portfolio" class="portfolio text-center section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="section-title">Galeria</h2>
				</div>
			</div>
			<ul class="filter">
				<li class="active"><a href="#" data-filter="*">Todo</a></li>
				<li><a href="#" data-filter=".drawing">Dibujos</a></li>
				<li><a href="#" data-filter=".events">Eventos</a></li>
				<li><a href="#" data-filter=".reading">Lecturas</a></li>
				<li><a href="#" data-filter=".photo">Fotos</a></li>
				<li><a href="#" data-filter=".songs">Canciones</a></li>
			</ul>
		</div>
		<div class="portfolio_grid">
			<div class="photo events drawing col-portfolio col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio_grid_item wow fadeInUp">
				<figure class="hover-line">
					<div class="image-holder"><img alt="" src="img/portfolio/1-thumb.jpg"></div>
					<figcaption>
						<div class="portfolio-lead">
							<div class="gallery_full_screen">
								<a title="<h4>Photo title</h4><p>Short description - Kindergarten and elementary school teachers prepare younger students for future schooling by teaching them basic subjects such as math and reading. Consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>" class="link" href="img/portfolio/1.jpg"><img src="img/icons/search_gallery.png" alt=""></a>
							</div>
							<div class="gallery_description">
								<p><span>Photo Title</span></p>
								<p>Short Description - ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
							</div>
						</div>
					</figcaption>
				</figure>
			</div>
			<div class="songs photo events col-portfolio col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio_grid_item wow fadeInUp" data-wow-delay="0.1s">
				<figure class="hover-line">
					<div class="image-holder"><img alt="" src="img/portfolio/2-thumb.jpg"></div>
					<figcaption>
						<div class="portfolio-lead">
							<div class="gallery_full_screen">
								<a title="<h4>Photo title</h4><p>Short description - Kindergarten and elementary school teachers prepare younger students for future schooling by teaching them basic subjects such as math and reading. Consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>" class="link" href="img/portfolio/2.jpg"><img src="img/icons/search_gallery.png" alt=""></a>
							</div>
							<div class="gallery_description">
								<p><span>Photo Title</span></p>
								<p>Short Description - ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
							</div>
						</div>
					</figcaption>
				</figure>
			</div>
			<div class="drawing events col-portfolio col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio_grid_item wow fadeInUp" data-wow-delay="0.2s">
				<figure class="hover-line">
					<div class="image-holder"><img alt="" src="img/portfolio/3-thumb.jpg"></div>
					<figcaption>
						<div class="portfolio-lead">
							<div class="gallery_full_screen">
								<a title="<h4>Photo title</h4><p>Short description - Kindergarten and elementary school teachers prepare younger students for future schooling by teaching them basic subjects such as math and reading. Consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>" class="link" href="img/portfolio/3.jpg"><img src="img/icons/search_gallery.png" alt=""></a>
							</div>
							<div class="gallery_description">
								<p><span>Photo Title</span></p>
								<p>Short Description - ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
							</div>
						</div>
					</figcaption>
				</figure>
			</div>
			<div class="drawing events col-portfolio col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio_grid_item wow fadeInUp" data-wow-delay="0.4s">
				<figure class="hover-line">
					<div class="image-holder"><img alt="" src="img/portfolio/4-thumb.jpg"></div>
					<figcaption>
						<div class="portfolio-lead">
							<div class="gallery_full_screen">
								<a class="popup-youtube" href="https://www.youtube.com/watch?v=jNY_8oXniKA"><img src="img/icons/video_gallery.png" alt=""></a>
							</div>
							<div class="gallery_description">
								<p><span>Video Title</span></p>
								<p>Short Description - ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
							</div>
						</div>
					</figcaption>
				</figure>
			</div>
			<div class="songs drawing reading col-portfolio col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio_grid_item wow fadeInUp" data-wow-delay="0.5s">
				<figure class="hover-line">
					<div class="image-holder"><img alt="" src="img/portfolio/5-thumb.jpg"></div>
					<figcaption>
						<div class="portfolio-lead">
							<div class="gallery_full_screen">
								<a title="<h4>Photo title</h4><p>Short description - Kindergarten and elementary school teachers prepare younger students for future schooling by teaching them basic subjects such as math and reading. Consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>" class="link" href="img/portfolio/5.jpg"><img src="img/icons/search_gallery.png" alt=""></a>
							</div>
							<div class="gallery_description">
								<p><span>Photo Title</span></p>
								<p>Short Description - ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
							</div>
						</div>
					</figcaption>
				</figure>
			</div>
			<div class="photo reading col-portfolio col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio_grid_item wow fadeInUp" data-wow-delay="0.6s">
				<figure class="hover-line">
					<div class="image-holder"><img alt="" src="img/portfolio/6-thumb.jpg"></div>
					<figcaption>
						<div class="portfolio-lead">
							<div class="gallery_full_screen">
								<a title="<h4>Photo title</h4><p>Short description - Kindergarten and elementary school teachers prepare younger students for future schooling by teaching them basic subjects such as math and reading. Consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>" class="link" href="img/portfolio/6.jpg"><img src="img/icons/search_gallery.png" alt=""></a>
							</div>
							<div class="gallery_description">
								<p><span>Photo Title</span></p>
								<p>Short Description - ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
							</div>
						</div>
					</figcaption>
				</figure>
			</div>
			<div class="songs reading photo col-portfolio col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio_grid_item wow fadeInUp" data-wow-delay="0.7s">
				<figure class="hover-line">
					<div class="image-holder"><img alt="" src="img/portfolio/7-thumb.jpg"></div>
					<figcaption>
						<div class="portfolio-lead">
							<div class="gallery_full_screen">
								<a title="<h4>Photo title</h4><p>Short description - Kindergarten and elementary school teachers prepare younger students for future schooling by teaching them basic subjects such as math and reading. Consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>" class="link" href="img/portfolio/7.jpg"><img src="img/icons/search_gallery.png" alt=""></a>
							</div>
							<div class="gallery_description">
								<p><span>Photo Title</span></p>
								<p>Short Description - ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
							</div>
						</div>
					</figcaption>
				</figure>
			</div>
			<div class="reading songs col-portfolio col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio_grid_item wow fadeInUp" data-wow-delay="0.8s">
				<figure class="hover-line">
					<div class="image-holder"><img alt="" src="img/portfolio/8-thumb.jpg"></div>
					<figcaption>
						<div class="portfolio-lead">
							<div class="gallery_full_screen">
								<a class="popup-youtube" href="https://www.youtube.com/watch?v=jNY_8oXniKA"><img src="img/icons/video_gallery.png" alt=""></a>
							</div>
							<div class="gallery_description">
								<p><span>Video Title</span></p>
								<p>Short Description - ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
							</div>
						</div>
					</figcaption>
				</figure>
			</div>
		</div>
	</section>
	<section id="teacher" class="teacher text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="section-title">Nuestros Profesores</h2>
				</div>
			</div>
			<div class="row arrows_red">
				<div id="teacher_owl" class="owl-carousel owl-theme">

					<div class="item">
						<div class="row">
							<div class="col-md-12">
								<div class="teacher_block grey_block wow fadeInUp">
									<div class="teacher_avatar">
										<img src="img/teacher/teacher_1.jpg" alt="">
									</div>
									<div class="teacher_about">
										<h3><a href="teacher.html">Helen Douglas</a></h3>
										<span>Teacher</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
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
						<div class="row teach_row">
							<div class="col-md-12">
								<div class="teacher_block blue_block wow fadeInUp">
									<div class="teacher_avatar">
										<img src="img/teacher/teacher_2.jpg" alt="">
									</div>
									<div class="teacher_about">
										<h3><a href="teacher.html">John Bishop</a></h3>
										<span>Teacher</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
										<div class="teacher_link social_icon">
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
					</div>
					
					<div class="item">
						<div class="row">
							<div class="col-md-12">
								<div class="teacher_block red_block wow fadeInUp">
									<div class="teacher_avatar">
										<img src="img/teacher/teacher_3.jpg" alt="">
									</div>
									<div class="teacher_about social_icon">
										<h3><a href="teacher.html">Bryan Barker</a></h3>
										<span>Teacher</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
										<div class="teacher_link">
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
						<div class="row teach_row">
							<div class="col-md-12">
								<div class="teacher_block yellow_block wow fadeInUp">
									<div class="teacher_avatar">
										<img src="img/teacher/teacher_4.jpg" alt="">
									</div>
									<div class="teacher_about">
										<h3><a href="teacher.html">Chloe Fowler</a></h3>
										<span>Teacher</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
										<div class="teacher_link social_icon">
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
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="timer" class="timer text-center" data-parallax="scroll" data-bleed="200" data-z-index="-100" data-speed="0.1" data-image-src="img/home/timer_bg.jpg" data-over-scroll-fix="true">
		<div class="timer_flags"></div>
		<div class="timer_overlay"></div>
		<div class="container timer_block">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<h2 class="section-title">Retorno a clases!</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div id="index_timer" class="index_timer"></div>
					<div class="timer_button">
						<p><a class="b_green_light" href="event.html">Leer más</a></p>
					</div>	
				</div>
			</div>
			<div class="row event_block">
				<div class="col-md-4 col-sm-12 timer_padding wow fadeInLeft">
					<div class="date_event">
						<p>12</p>
						<span>dec 2017</span>
					</div>
					<div class="describe_event">
						<h5>Event A</h5>
						<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 timer_padding wow fadeInUp">
					<div class="date_event">
						<p>25</p>
						<span>dec 2017</span>
					</div>
					<div class="describe_event">
						<h5>Event A</h5>
						<p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 wow fadeInRight">
					<div class="view_events">
						<p><svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="44px" height="50px"
							viewBox="0 0 38 44" style="enable-background:new 0 0 38 44;" xml:space="preserve">
							<g id="outline_6_">
								<g>
									<path class="event_icon" d="M11.7,16.3c-0.4-0.4-1-0.4-1.4,0L9,17.6l-1.4-1.4c-0.4-0.4-1-0.4-1.4,0c-0.4,0.4-0.4,1,0,1.4L7.6,19l-1.4,1.4
									c-0.4,0.4-0.4,1,0,1.4c0.4,0.4,1,0.4,1.4,0L9,20.4l1.4,1.4c0.4,0.4,1,0.4,1.4,0c0.4-0.4,0.4-1,0-1.4L10.4,19l1.4-1.4
									C12.1,17.3,12.1,16.7,11.7,16.3z M11.7,26.3c-0.4-0.4-1-0.4-1.4,0L9,27.6l-1.4-1.4c-0.4-0.4-1-0.4-1.4,0c-0.4,0.4-0.4,1,0,1.4
									L7.6,29l-1.4,1.4c-0.4,0.4-0.4,1,0,1.4c0.4,0.4,1,0.4,1.4,0L9,30.4l1.4,1.4c0.4,0.4,1,0.4,1.4,0c0.4-0.4,0.4-1,0-1.4L10.4,29
									l1.4-1.4C12.1,27.3,12.1,26.7,11.7,26.3z M37,4h-5V2c0-1.1-0.9-2-2-2h-2c-1.1,0-2,0.9-2,2v2H12V2c0-1.1-0.9-2-2-2H8
									C6.9,0,6,0.9,6,2v2H1C0.4,4,0,4.4,0,5v38c0,0.6,0.4,1,1,1h36c0.6,0,1-0.4,1-1V5C38,4.4,37.6,4,37,4z M28,3c0-0.6,0.4-1,1-1
									s1,0.4,1,1v4c0,0.6-0.4,1-1,1s-1-0.4-1-1V3z M8,3c0-0.6,0.4-1,1-1s1,0.4,1,1v4c0,0.6-0.4,1-1,1S8,7.6,8,7V3z M36,42H2V6h4v2
									c0,1.1,0.9,2,2,2h2c1.1,0,2-0.9,2-2V6h14v2c0,1.1,0.9,2,2,2h2c1.1,0,2-0.9,2-2V6h4V42z M26,28H16c-0.6,0-1,0.4-1,1s0.4,1,1,1h10
									c0.6,0,1-0.4,1-1S26.6,28,26,28z M30,18H16c-0.6,0-1,0.4-1,1s0.4,1,1,1h14c0.6,0,1-0.4,1-1S30.6,18,30,18z"/>
								</g>
							</g>
						</svg><a href="blog.php">Ver todos los eventos</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="stories" class="stories">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="section-title">Historias</h2>
				</div>
			</div>
			<div class="row arrows_red">
				<div id="stories_owl" class="owl-carousel owl-theme">
					<div class="item col-md-12 wow fadeInUp">
						<div class="s_green_block all_color">
							<div class="top_stories">
								<img src="img/home/top_stories_green.png" alt="">
							</div>
							<div class="bottom_stories">
								<img src="img/home/bottom_stories_green.png" alt="">
							</div>
							<p><i class="fa fa-quote-left"></i></p>
							<h4>Activities Improve Mind</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<div class="stories_more">
								<a href="#"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
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
					<div class="item col-md-12 wow fadeInUp" data-wow-delay="0.1s">
						<div class="s_red_block all_color">
							<div class="top_stories">
								<img src="img/home/top_stories_red.png" alt="">
							</div>
							<div class="bottom_stories">
								<img src="img/home/bottom_stories_red.png" alt="">
							</div>
							<p><i class="fa fa-quote-left"></i></p>
							<h4>School Days</h4>
							<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
							<div class="stories_more">
								<a href="#"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
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
					<div class="item col-md-12 wow fadeInUp" data-wow-delay="0.2s">
						<div class="s_margin_block all_color">
							<div class="top_stories">
								<img src="img/home/top_stories_blue.png" alt="">
							</div>
							<div class="bottom_stories">
								<img src="img/home/bottom_stories_blue.png" alt="">
							</div>
							<p><i class="fa fa-quote-left"></i></p>
							<h4>Active Learning</h4>
							<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
							<div class="stories_more">
								<a href="#"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
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
	</section>
	<section id="news" class="news">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="section-title">Ultimas noticias</h2>
				</div>
			</div>
			<div class="row mb_50">
				<div class="col-md-6 col-sm-12 mb_40 wow fadeInUp">
					<div class="news_date b_red t_white">
						<div class="news_date_number">
							<p><span>16</span></p>
							<p>oct 2017</p>
						</div>
						<div class="news_date_category">
							<a href="post_preparing-for-the-new-year-holiday.html">Rachel Brown</a>
						</div>
						<div class="news_date_comments">
							<a href="post_preparing-for-the-new-year-holiday.html"><i class="fa fa-comment"></i><span>4</span></a>
						</div>
					</div>
					<div class="news_describe">
						<div class="news_img">
							<a href="post_preparing-for-the-new-year-holiday.html"><img src="img/blog/blog_1.jpg" alt=""></a>
						</div>
						<div class="news_text b_blue t_white">
							<h4><a href="post_preparing-for-the-new-year-holiday.html">Preparing for the New Year holiday</a></h4>
							<p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, </p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 mb_40 wow fadeInUp">
					<div class="news_date b_red t_white">
						<div class="news_date_number">
							<p><span>21</span></p>
							<p>oct 2016</p>
						</div>
						<div class="news_date_category">
							<a href="post_report-children-s-birthdays.html">Rachel Brown</a>
						</div>
						<div class="news_date_comments">
							<a href="post_report-children-s-birthdays.html"><i class="fa fa-comment"></i><span>3</span></a>
						</div>
					</div>
					<div class="news_describe">
						<div class="news_img">
							<a href="post_report-children-s-birthdays.html"><img src="img/blog/blog_2.jpg" alt=""></a>
						</div>
						<div class="news_text b_green_dark t_grey">
							<h4><a href="post_report-children-s-birthdays.html">Report - Children's Birthdays!</a></h4>
							<p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, </p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-12 mb_40 wow fadeInUp">
					<div class="news_date b_red t_white">
						<div class="news_date_number">
							<p><span>02</span></p>
							<p>dec 2016</p>
						</div>
						<div class="news_date_category">
							<a href="post_week-of-football-competitions.html">Rachel Brown</a>
						</div>
						<div class="news_date_comments">
							<a href="post_week-of-football-competitions.html"><i class="fa fa-comment"></i><span>7</span></a>
						</div>
					</div>
					<div class="news_describe">
						<div class="news_img">
							<a href="post_week-of-football-competitions.html"><img src="img/blog/blog_3.jpg" alt=""></a>
						</div>
						<div class="news_text b_green_light t_grey">
							<h4><a href="post_week-of-football-competitions.html">Week of football competitions</a></h4>
							<p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, </p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 mb_40 wow fadeInUp">
					<div class="news_date b_red t_white">
						<div class="news_date_number">
							<p><span>12</span></p>
							<p>dec 2016</p>
						</div>
						<div class="news_date_category">
							<a href="post_children-take-care-of-nature.html">Rachel Brown</a>
						</div>
						<div class="news_date_comments">
							<a href="post_children-take-care-of-nature.html"><i class="fa fa-comment"></i><span>15</span></a>
						</div>
					</div>
					<div class="news_describe">
						<div class="news_img">
							<a href="post_children-take-care-of-nature.html"><img src="img/blog/blog_4.jpg" alt=""></a>
						</div>
						<div class="news_text b_red t_white">
							<h4><a href="post_children-take-care-of-nature.html">Children take care of nature</a></h4>
							<p>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Replace start-->
	<section id="contact" class="contact_v1">
		<div class="contact_overlay_ball hidden-sm hidden-xs"></div>
		<div class="contact_overlay_plain hidden-sm hidden-xs"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<h2 class="section-title">Preguntas Frecuentes</h2>
					<div class="panel-group" id="accordion">
						<div class="panel panel-contact">
							<div class="panel-heading actives">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
									Nuestros Horarios</a>
								</h4>
							</div>
							<div id="collapse1" class="panel-collapse collapse in">
								<div class="panel-body">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</div>
							</div>
						</div>
						<div class="panel panel-contact p_green">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
									Dolor sit amet Consectetur adipisicing </a>
								</h4>
							</div>
							<div id="collapse2" class="panel-collapse collapse">
								<div class="panel-body">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</div>
							</div>
						</div>
						<div class="panel panel-contact">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
									Amet Consectetur adipisicing </a>
								</h4>
							</div>
							<div id="collapse3" class="panel-collapse collapse">
								<div class="panel-body">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</div>
							</div>
						</div>
						<div class="panel panel-contact p_green">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
									Ipsum dolor sit amet Consectetur adipisicing</a>
								</h4>
							</div>
							<div id="collapse4" class="panel-collapse collapse">
								<div class="panel-body">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<h2 class="section-title">Contactanos</h2>
					<div class="contact_form contact_form_transparent">
						<form method="post" id="contact_form">
							<div id="form-messages"></div>
							<div class="form-group">
								<input id="name" name="name" type="text" placeholder="Nombre">
							</div>
							<div class="form-group">
								<input id="email" name="email" type="text" placeholder="E-mail">
							</div>
							<div class="form-group">
								<input id="phone" name="phone" type="text" placeholder="Numero de celular">
							</div>		
							<textarea id="message" name="message" rows="3" placeholder="Mensaje"></textarea>
							<div id="messegeResult" class="messegeResult">
								<p>El mensaje fue enviado correctamente!</p>
								<button type="submit">Enviar</button>
							</div>					
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div id="google_maps" class="google_maps section-block-wrapper">
		<div id="map"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-5 location_info">
					<div class="location_block">
						<div class="overlay_footer_copter hidden-sm hidden-xs"></div>
						<p class="location">Ubicación</p>
						<p class="phone"><?php echo String_Get_Valores('telefono') ?></p>
						<p class="adress"><?php echo String_Get_Valores('direccion') ?></p>
						<p><a href="#"><?php echo String_Get_Valores('email') ?></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--End JS -->


</body>

<?php
include('footerinicial.php');
?>
</html>
