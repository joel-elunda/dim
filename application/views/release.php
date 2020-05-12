
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.html">DIM BUSINESS</a>
	    	
			<div class="searchform order-sm-start order-lg-last"> 
				<a  class="btn btn-primary btn-sm" href="<?=site_url('account/login_view');?>" role="button">Se connecter</a>
			</div>
	    	
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item"><a href="<?=site_url();?>" class="nav-link">Accueil</a></li>
	        	<li class="nav-item"><a href="<?=site_url('services');?>" class="nav-link">Services</a></li>
				<li class="nav-item  active"><a href="<?=site_url('release');?>" class="nav-link">Réalisations</a></li>
				<li class="nav-item"><a href="<?=site_url('contact');?>" class="nav-link">Contact</a></li>
				<li class="nav-item"><a href="<?=site_url('blog');?>" class="nav-link">Blog</a></li> 
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->


	
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
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

				for ($i=0; $i < 10; $i++) { 
					echo '
					<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry align-self-stretch">
					  <a href="blog-single.html" class="block-20 rounded" style="background-image: url(assets/images/image_1.jpg);">
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

	