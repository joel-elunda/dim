
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.html">DIM BUSINESS</a>
	    	 
	    	
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item"><a href="<?=site_url();?>" class="nav-link">Accueil</a></li>
	        	<li class="nav-item"><a href="<?=site_url('services');?>" class="nav-link">Services</a></li>
				<li class="nav-item  active"><a href="<?=site_url('release');?>" class="nav-link">Réalisations</a></li>
            	<li class="nav-item"><a href="<?=site_url('actu');?>" class="nav-link">Actualités</a></li>
				<li class="nav-item"><a href="<?=site_url('contact');?>" class="nav-link">Contact</a></li>
				<li class="nav-item"><a href="<?=site_url('blog');?>" class="nav-link">Blog</a></li> 
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->


	
    <section class="hero-wrap hero-wrap-2" style="background-image: url(<?=base_url('assets/images/photo_2020-05-12_14-50-14.jpg');?>);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Nos réalisations <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Nos réalisations</h1>
          </div>
        </div>
      </div>
    </section>







	<section class="ftco-section">
      <div class="container">
        <div class="row d-flex">

			<?php 

				// TODO : rest of date and the description projects
				$images = array(
					'assets/images/20200129_104308.jpg', 
					'assets/images/IMG-20191231-WA0025.jpg',
					'assets/images/IMG-20190621-WA0040.jpg',
					'assets/images/DSC_0086.JPG',
					'assets/images/IMG_20191026_122120.jpg',
					'assets/images/IMG_20191026_122032.jpg'
				);

				$length = count($images);  

				for ($i=0; $i < $length; $i++) { 
					
					echo '
					<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
					  <a href="blog-single.html" class="block-20 rounded" style="background-image: url('.$images[$i].');">
					  </a>
					  <div class="text p-4">
						  <div class="meta mb-2">
						  <div><a href="#">March 31, 2020</a></div>
						  <div><a href="#">Admin</a></div>
						  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
						</div>
						<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
					  </div>
					</div>
				  </div> '; 
				}
			?>
 
      </div>
    </section>

	