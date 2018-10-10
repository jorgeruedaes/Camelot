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
 					<p><strong>Gimnasio Psicopedagógico Camelot</strong>
 					educamos a su hijo teniendo en cuenta que él es el centro de desarrollo de nuestra labor educativa. Por tal motivo, nuestro trabajo tendrá como propósito orientar al niño(a) para que sea una persona creativa, crítica, autónoma, útil y responsable de sus actuaciones, que valore lo propio siendo parte activa dentro de su entorno social.</p>
 					<ul>
 						<li>Excepteur sint occaecat cupidatat non proident, </li>
 						<li>sunt in culpa qui officia deserunt mollit anim id est laborum. </li>
 						<li>Sed ut perspiciatis unde omnis iste natus error </li>
 						<li>sit voluptatem accusantium doloremque laudantium, </li>
 					</ul>
 					<p><strong>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</strong></p>
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
 <section id="know_us" class="know_us">
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
 </section>

 <section id="about_teacher" class="about_teacher">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12">
 				<h2 class="section-title">Qualified Teachers</h2>
 				<p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
 			</div>
 		</div>
 		<div class="row arrows_red">
 			<div id="about_teacher_owl" class="owl-carousel owl-theme">
 				<div class="item">
 					<div class="col-md-12">
 						<div class="teacher_block grey_block wow fadeInUp">
 							<div class="teacher_avatar">
 								<img src="img/teacher/teacher_2.jpg" alt="">
 							</div>
 							<div class="teacher_about">
 								<h3><a href="teacher.html">John Bishop</a></h3>
 								<span>Teacher</span>
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
 				<div class="item">
 					<div class="col-md-12">
 						<div class="teacher_block blue_block wow fadeInUp">
 							<div class="teacher_avatar">
 								<img src="img/teacher/teacher_1.jpg" alt="">
 							</div>
 							<div class="teacher_about">
 								<h3><a href="teacher.html">Helen Douglas</a></h3>
 								<span>Teacher</span>
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
 				<div class="item">
 					<div class="col-md-12">
 						<div class="teacher_block yellow_block wow fadeInUp">
 							<div class="teacher_avatar">
 								<img src="img/teacher/teacher_3.jpg" alt="">
 							</div>
 							<div class="teacher_about">
 								<h3><a href="teacher.html">Bryan Barker</a></h3>
 								<span>Teacher</span>
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
 				<div class="item">
 					<div class="col-md-12">
 						<div class="teacher_block red_block wow fadeInUp">
 							<div class="teacher_avatar">
 								<img src="img/teacher/teacher_4.jpg" alt="">
 							</div>
 							<div class="teacher_about">
 								<h3><a href="teacher.html">Chloe Fowler</a></h3>
 								<span>Teacher</span>
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
 </section>

 <div id="about_counter" class="about_counter section-block-wrapper">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp">
 				<p><i class="fa fa-smile-o"></i></p>
 				<p class="number_count"><span class="counter">158</span></p>
 				<p>kids</p>
 			</div>
 			<div class="col-md-3 col-sm-3 col-xs-6 wow fadeInUp">
 				<p><i class="fa fa-graduation-cap"></i></p>
 				<p class="number_count"><span class="counter">19</span></p>
 				<p>teachers</p>
 			</div>
 			<div class="col-md-3 col-sm-3 col-xs-6 p_block wow fadeInUp">
 				<p><i class="fa fa-bell"></i></p>
 				<p class="number_count"><span class="counter">40</span></p>
 				<p>hours/week</p>
 			</div>
 			<div class="col-md-3 col-sm-3 col-xs-6 p_block wow fadeInUp">
 				<p><i class="fa fa-university"></i></p>
 				<p class="number_count"><span class="counter">1632</span></p>
 				<p>graduates</p>
 			</div>
 		</div><!-- end row -->
 	</div>
 </div>

 <section id="about_stories" class="about_stories">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12">
 				<h2 class="section-title">Stories</h2>
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
