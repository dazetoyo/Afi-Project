<?php /* Template Name: Front Page test */ ?>
<?php get_header(); ?>

<!-- </div><!-- .container -->




<main id="swup" class="transition-fade">



<div class="gradient-extended"></div>

<div  class="position-relative full-width povestea-ta">

<div style="padding-top:175px;" class="d-flex justify-content-center text-center text-light h3 ">
	<p class="z-index-max h1 text-light letter-spacing-heading">Povestea ttttttta <br/>
		începe acasă</p>
	</div>

	<div style="max-width:500px; padding-top:35px; padding-bottom:50px; padding-left: 15px;
    padding-right: 15px;" class="d-flex m-auto justify-content-center text-center text-light">
		<p class="z-index-max font-weight-bold">
			AFI City este localizat in partea de nord-vest a Bucurestiului, in sectorul 1, de-a lungul Bulevardului Bucurestii Noi. Odata finalizat, acest proiect rezidential planificat la scara larga va fi unul dintre cele mai mari proiecte rezidentiale din Bucuresti.
		</p>
	</div>


	<div class="container"> <!-- CONTAINER INTERIOR -->
		<div class="row text-light">
			<div class="col-12  col-sm-3 mb-5 mb-sm-0 d-block text-center z-index-max afi-border">
				<div class="text-light letter-spacing-heading  font-weight-bold h4">Locatie</div>
				<p class="small">Mereu conectat la tot ce conteaza <br/>
					pentru tine</p>
					<i class="locatie">
						<img src="/wp-content/uploads/2019/11/Location-Icon.svg" alt="Location">
					</i>
				</div>

				<div class="col-12 col-sm-3 mb-5 mb-sm-0 d-block text-center z-index-max afi-border">
					<div class="text-light letter-spacing-heading  font-weight-bold h4">Apartamente</div>
					<p class="small" >Locuinte adaptate <br/>
						stilului tau de viata</p>
						<i class="locatie">
							<img width="38" height="38" src="/wp-content/uploads/2019/11/facilitati.svg" alt="Apartamente">
						</i>
					</div>

					<div class="col-12 col-sm-3 mb-5 mb-sm-0 d-block text-center z-index-max afi-border">
						<div class="text-light letter-spacing-heading  font-weight-bold h4">Green Homes</div>
						<p class="small">Intr-un ansamblu cu pre-certificare <br/>
							Green Homes</p>
							<i class="locatie">
								<img  width="38" height="38" src="/wp-content/uploads/2019/11/apartamente.svg" alt="Green homes">
							</i>
						</div>

						<div class="col-12 col-sm-3 mb-5 mb-sm-0 d-block text-center z-index-max afi-border">
							<div class="text-light letter-spacing-heading  font-weight-bold h4">Facilitati</div>
							<p class="small">Un loc unde esti acasa si cand iesi <br/>
								din casa</p>
								<i class="locatie">
									<img width="38" height="38" src="/wp-content/uploads/2019/11/greenhouse.svg" alt="Facilitati">
								</i>
							</div>
						</div>
					</div> <!--  CONTAINER INTERIOR END -->
				</div> <!-- section 1 end -->


				<div class="container">
				<div class="row mt-5 pt-5">
						<div class="square background-square-video"></div>
						<div class="square2 background-square-video2">
							<div class="square3 background-square-video3"></div>
						</div>
						<div class="col-10 col-lg-6  d-block m-auto text-center text-primary z-index-max afi-border-primary bg-white p-4 letter-spacing-heading floating-video">
							<h2 class="font-weight-bold h3">Gaseste-ti caminul in <br/> AFI CITY!</h2>
							<p class="h4">AFI City este situat pe bulevardul Bucurestii Noi, langa statia de metrou Laminorului, intr-una dintre cele mai verzi zone ale Bucurestiului. Zona iti ofera acces rapid la principalele artere de circulatie precum Bulevardul Bucurestii Noi, Bulevardul Ion Mihalache, Bulevardul Poligrafiei si Drumul Național 1 (DN1), dar si la zonele de relaxare, precum Parcul Bazilescu si lacurile Straulesti si Grivita.</p>
								<i class="play-button">
									<img src="/wp-content/uploads/2019/11/Play-video.svg" alt="Video">
								</i>
						</div>
				</div>



<!-- content -->
<?php /*
									<div class="wrap">
										<div id="primary" class="content-area  <?php
										if(get_field('increase_page_remove_padding_top')){echo ' pt-0 ';}
										if(get_field('increase_page_remove_padding_bottom')){echo ' pb-0 ';}
										?>">
										<main id="main" class="site-main" role="main">
											<?php if (have_posts()) { ?>
												<div class="post-wrap">
													<?php while ( have_posts() ) :  the_post();	 ?>

														<?php get_template_part( 'template-parts/page/content', 'page' ); ?>

													<?php endwhile; ?>
												</div>
											<?php }; ?>
										</main>
									</div>
								</div>

								*/ ?>


							</div> <!-- container - end -->



		<?php  //add me in
		//Fields

		$images = get_field('front_gallery');
		if( $images ): ?>
		   <p class="text-uppercase font-weight-bold text-primary mb-5 text-center">Vezi galerie</p>
		   <div class="slider-for">

		            <?php foreach( $images as $image ): ?>
		                <div id="slickkk" class="slick-container" >

							<div class="slick-item" style="background:url(<?php echo $image['url']; ?>);
								height:300px;
								margin:0 10px;">
							</div>

		                </div>
		            <?php endforeach; ?>
		    </div>
		   <div class="slider-nav"> </div>
		<?php endif;?>



		<div class="container">
			<div class="row mt-5 pt-5 position-relative">
				<div  class="adela-float-middle">
					<img src="/wp-content/uploads/2019/11/Adela-Intro.png" alt="Adela">
				</div>
				<div  class="col-12 col-md-6 square background-square-video"></div>
				<div  class="d-block mt-5 m-sm-auto sugestii-amenajare z-index-max">
					<div class="h2 mb-3 font-weight-light letter-spacing-heading">Sugestii
						de amenajare
						realizate
					</div>
					<div class="h2 mb-3 ">de Adela Pârvu</div>
					<div class=" text-muted mb-3 h4">AFI City este localizat in partea de nord-vest a Bucurestiului, in sectorul 1, de-a lungul Bulevardului Bucurestii Noi. Odata finalizat, acest proiect rezidential planificat la scara larga va fi unul dintre cele mai mari proiecte rezidentiale din Bucuresti.</div>
					<div class="pb-3">
						<a class="font-weight-bold small" href="#"><u>STUDIO DUBLU</u></a>
					</div>
					<div class="pb-3">
						<a class="font-weight-bold small" href="#"><u>APARTAMENT 2 CAM</u></a>
					</div>
					<div class="pb-3">
						<a class="font-weight-bold small" href="#"><u>APARTAMENT 3 CAM TIP A</u></a>
					</div>
					<div class="pb-3">
						<a class="font-weight-bold small" href="#"><u>APARTAMENT 3 CAM TIP B</u></a>
					</div>
				</div>
			</div>


			<div class="row mt-5 pt-5">
				<div class="col-12 col-md-6 d-block m-auto localizare-width">
				<p class="h2 font-weight-light">Localizare</p>
				<div class="h4 text-muted line-height-24">AFI CITY este situat in partea de Nord a Capitalei, pe Bulevardul Bucurestii Noi, statia de metrou Laminorului chiar in fata complexului. Cu acces rapid spre principalele artere de circulatie, acces facil spre iesirea din oras si in vecinatatea parcului Bazilescu. Lacurile Straulesti si Grivita se afla la cateva minute distanta de mers pe jos.</div>
				<a href="/locatie"><div class=" mt-5 mb-sm-0 d-block text-center z-index-max afi-border-secondary px-4 py-5">
					<div class="text-primary letter-spacing-heading  font-weight-bold h4 pb-3">DESCHIDE HARTA</div>
					<i class="deschide-harta">
						<img src="/wp-content/uploads/2019/11/Location-primary.svg" alt="">
					</i>
				</div>
			</a>
			</div>
			<div style="background:url(/wp-content/uploads/2019/11/Harta-Homepage.jpg);
			background-size:cover;" class="col-12 col-md-6 square background-square-video"></div>

		</div>



	</div>





							<style media="screen">




							.border-radius-10{
								border-radius:10px;
							}


							.gradient-extended{
							    height: 76px;
							    background: #03398C;
							    display: flex;
							    margin-top: -126px;
							    padding-top: 76px;
							}
							.povestea-ta{
								min-height:50px;
								background-image:url('http://afi.goodafternoon.ro/wp-content/uploads/2019/11/Homepage-undersection.jpg');
								height:90vh;
							}
							.floating-video{
								margin-top:-150px !important;
								margin-bottom:150px !important;
							}

							.full-width:before{
								content:'';
								background: rgba(115, 173, 251, 0.5);
								background: -webkit-linear-gradient(bottom, rgba(115, 173, 251, 0.5), #023B8C);
								background: -moz-linear-gradient(bottom, rgba(115, 173, 251, 0.5), #023B8C);
								background: linear-gradient(to top, rgba(115, 173, 251, 0.5), #023B8C);
								-webkit-background-size: cover;
								-moz-background-size: cover;
								-o-background-size: cover;
								background-size: cover;
								background-size: cover;
								background-size: cover;
								top: 0;
								left: 0;
								height: 100%;
								position: absolute;
								width: 100%;
								z-index: 99;

							}

							.sugestii-amenajare{
									max-width: 268px;
									margin-right: 25px !important;
							}

							.z-index-max{
								z-index:99999;
							}



							.afi-border-primary{
								padding:15px 0;
								border-top:2px solid #013D8C;
								border-left:2px solid #013D8C;
								border-right:2px solid #013D8C;
								transition:0.2s;
								transition-timing-function: ease-in;
							}



							.adela-float-middle{
								position: absolute;
								z-index: 99;
								display: flex;
								justify-content: center;
								text-align: center;
								left: 0;
								right: 0;
								margin-left: auto;
								margin-top: 100px;
								margin-right: auto;
							}

						.afi-border-primary:before{
							content: "";
							position: absolute;
							width: 40%;
							height: 2px;
							background: #013D8C;
							left: 0;
							bottom:0;

							transition:0.2s;
							transition-timing-function: ease-in;
						}
						.afi-border-primary:after{
							content: "";
							position: absolute;
							width: 40%;
							height: 2px;
							background: #013D8C;

							right: 0;
							bottom:0;
							transition:0.2s;
							transition-timing-function: ease-in;
						}

							.afi-border{
								padding:15px 0;
								border-top:1px solid transparent;
								border-left:1px solid transparent;
								border-right:1px solid transparent;
								transition:0.2s;
								transition-timing-function: ease-in;

							}
							.afi-border:hover{
									border-top:1px solid white;
									border-left:1px solid white;
									border-right:1px solid white;
									transition:0.2s;
									transition-timing-function: ease-in;
							}
							.afi-border:before{
								content: "";
								position: absolute;
								width: 40%;
								height: 2px;
								background: white;
								left: 0;
								bottom:0;
								opacity: 0;
								transition:0.2s;
								transition-timing-function: ease-in;
							}
							.afi-border:after{
								content: "";
								position: absolute;
								width: 40%;
								height: 2px;
								background: white;
								opacity:0;
								right: 0;
								bottom:0;
								transition:0.2s;
								transition-timing-function: ease-in;
							}
							.afi-border:hover:after,
							.afi-border:hover:before{
								opacity:1;
								transition:0.2s;
								transition-timing-function: ease-in;
							}
							.afi-border > i:after{
								/* position: absolute;
								left: 50%;
								margin-left: -15px;
								display: block;
								content: '.';
								width: 20px;
								height: 20px;
								background: url('http://afi.goodafternoon.ro/wp-content/uploads/2019/11/Location-Icon.svg');
								 border: 10px solid white;
								font-size: 0; */
							}
							.locatie {
								margin-bottom: -28px;
	    						opacity:0;
								transition:0.2s;
								transition-timing-function: ease-in;
								display:block;
							}

							.play-button {
								margin-bottom: -50px;

								transition:0.2s;
								transition-timing-function: ease-in;
								display:block;
							}

							.afi-border:hover > i{
								display:block;
								transition:0.2s;
								transition-timing-function: ease-in;
								opacity:1;
							}

							.square {
								position: relative;
								width: 50%;
								display:inline-flex;

							}

							.square:after {
								content: "";
								display: block;
								padding-bottom: 100%;


							}

							.square2 {
								position: relative;
							    width: 40%;
							    display: flex;
							    align-items: center;
							    justify-content: center;


							}

							.square2:after {
								content: "";
							    display: block;
							    max-width: 80%;
							    padding-bottom: 80%;

							    width: 100%;
							    background: url(/wp-content/uploads/2019/11/Homepage-undersection.jpg) no-repeat center center;
							    -webkit-background-size: cover;
							    -moz-background-size: cover;
							    -o-background-size: cover;
							    background-size: cover;
							}

							.square3{
							position: absolute;
						    top: 0;
						    right: -35px;
						    width: 35%;
						    display: flex;
						    align-items: center;
						    justify-content: center;
							z-index: -1;
							}

							.square3:after {
								content: "";
							    display: block;
							    max-width: 100%;
							    padding-bottom: 100%;

							    width: 100%;
							    background: url(/wp-content/uploads/2019/11/Homepage-undersection.jpg) no-repeat center center;
							    -webkit-background-size: cover;
							    -moz-background-size: cover;
							    -o-background-size: cover;
							    background-size: cover;
							}



							.background-square-video{
								background:url(/wp-content/uploads/2019/11/Homepage-undersection.jpg) no-repeat center center;
								-webkit-background-size: cover;
								-moz-background-size: cover;
								-o-background-size: cover;
								background-size: cover;
							}
							.slick-list{
								 margin-left:25px;
								 margin-right:25px;
							}

							.line-height-24{
								line-height:24px;
							}


							 .afi-border-secondary{
								 		padding:30px 0;
		 								border-top:2px solid #013D8C;
		 								border-left:2px solid #013D8C;
		 								border-right:2px solid #013D8C;
										position:relative;
										    max-width: 250px;

							 }

							 		.afi-border-secondary:before{
		 								content: "";
		 								position: absolute;
		 								width: 40%;
		 								height: 2px;
		 								background: #013D8C;
		 								left: 0;
		 								bottom:0;

		 							}
		 							.afi-border-secondary:after{
		 								content: "";
		 								position: absolute;
		 								width: 40%;
		 								height: 2px;
		 								background: #013D8C;

		 								right: 0;
		 								bottom:0;

		 							}

									.deschide-harta {
										margin-bottom: -65px;

										transition:0.2s;
										transition-timing-function: ease-in;
										display:block;
									}


									/* Slick slider */

									button.slick-next.slick-arrow{
										height: 50px;
										width: 50px;
										background: url(/wp-content/uploads/2019/11/slider-right.svg);
										background-size: cover;
										right:25px;

									}

									/* .slick-prev:before, .slick-next:before{
									background:url(/wp-content/uploads/2019/11/slider-left.svg);
									} */

									button.slick-prev.slick-arrow{
										left: 25px;
										background: url(/wp-content/uploads/2019/11/slider-left.svg);
										background-size: cover;
										height: 50px;
										width: 50px;
										z-index:99;
									}
									.slick-prev:before, .slick-next:before{
										font-size:0px !important;
									}

									.localizare-width{
										max-width:400px;
									}


							</style>

<script type="text/javascript">
	jQuery(document).ready(function($){

		// $('.slider-nav').slick({
		//   slidesToShow: 4,
		//   slidesToScroll: 3,
		//   asNavFor: '.slider-for',
		//   dots: true,
		//   // centerMode: true,
		//   // focusOnSelect: true,
		//   // arrows: true,
		//   // autoplay: false
		// });
	});
</script>

							<?php get_footer(); ?>
</main>
