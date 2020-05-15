
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
			<img  src="<?=site_url('assets/images/logo - Copie.png');?>" alt="" srcset="">
	    	<a class="pl-3 navbar-brand" href="index.html">DIM BUSINESS</a>
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


	
    <section class="hero-wrap hero-wrap-2" style="background-image: url(<?=base_url('assets/images/Untitled-design-3.jpg');?>);" data-stellar-background-ratio="0.5">
      <div class="overlay  bg-light"></div>
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
				'assets/images/antenne.PNG'
			);

			$description = array (
				'Production des maïs avec Madame Clarisse',
				'Production des tomates avec Amshula Food',
				'Conférence à la maison SAFINA',
				'Le booster 4G est une antenne qui améliore l’ampli-tude'
			);

			//<div><a href="#">March 31, 2020</a></div>
			// <div><a href="#">Admin</a></div>
			// <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>

			$length = count($images);  

			for ($i=0; $i < $length; $i++) { 
				
				echo '
				<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry align-self-stretch">
				<a href="blog-single.html" class="block-20 rounded" style="background-image: url('.$images[$i].');">
				</a>
				<div class="text p-4">
					<div class="meta mb-2"> 
					
					
					</div>
					<h3 class="heading"><a href="#">'. $description[$i] .'</a></h3>
				</div>
				</div>
			</div> '; 
			}
			?>

 
      </div>
    </section>

	 