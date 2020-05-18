
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
				<li class="nav-item"><a href="<?=site_url('release');?>" class="nav-link">Réalisations</a></li> 
            	<li class="nav-item"><a href="<?=site_url('actu');?>" class="nav-link">Actualités</a></li>
				<li class="nav-item active"><a href="<?=site_url('contact');?>" class="nav-link">Contact</a></li>
				<li class="nav-item"><a href="<?=site_url('blog');?>" class="nav-link">Blog</a></li> 
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

	
	
    <section class="hero-wrap hero-wrap-2" style="background-image: url(<?=base_url('assets/images/business-consult1562157427578.jpg');?>);" data-stellar-background-ratio="0.5">
      <div class="overlay  bg-light"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Contactez-nous <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Contactez-nous</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="wrapper">
							<div class="row no-gutters">
								<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4">Entrer en contact avec l'équipe DIM BUSINESS</h3>
										<div id="form-message-warning" class="mb-4"></div> 
					      		<div id="form-message-success" class="mb-4">
								  <!-- Votre message a été envoyeé, merci !  -->
					      		</div>
										<form method="POST" action="<?=site_url('contact/send');?>" id="contactForm" name="contactForm" class="contactForm">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="name">Nom Complet</label>
														<input type="text" class="form-control" name="name"  value="<?=set_value('name');?>" id="name" placeholder="Nom Complet">
														<small class="form-text text-danger"><?= form_error('name','<em>','</em>') ?></small>
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="email">Adresse Email</label>
														<input type="email" class="form-control" name="email"  value="<?=set_value('email');?>" id="email" placeholder="Email">
														<small class="form-text text-danger"><?= form_error('email','<em>','</em>') ?></small>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="subject">Sujet</label>
														<input type="text" class="form-control" name="subject"  value="<?=set_value('subject');?>" id="subject" placeholder="Sujet">
														<small class="form-text text-danger"><?= form_error('subject','<em>','</em>') ?></small>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="message">Message</label>
														<textarea name="message" value="<?=set_value('message');?>" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
														<small class="form-text text-danger"><?= form_error('message','<em>','</em>') ?></small>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Envoyer" class="btn btn-primary">
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
									<div class="info-wrap bg-primary w-100 p-md-5 p-4">
										<h3>Restons en contact</h3>
										<p class="mb-4">Nous sommes ouvert à toutes vos suggestions</p>
										<div class="dbox w-100 d-flex align-items-start">
											<div class="icon d-flex align-items-center justify-content-center">
												<span class="fa fa-map-marker"></span>
											</div>
											<div class="text pl-3">
												<p><span>Adresse : </span> Av. Femme Katangaise BP 2846. Lubumbashi, RD Congo</p>
											</div>
										</div>
										<div class="dbox w-100 d-flex align-items-center">
											<div class="icon d-flex align-items-center justify-content-center">
												<span class="fa fa-phone"></span>
											</div>
											<div class="text pl-3">
											<p><span>Phone : </span> <a href="tel://+243974752884">+ 243 97 47 52 884</a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-paper-plane"></span>
										</div>
										<div class="text pl-3">
											<p><span>Email : </span> <a href="mailto:dimbusinessfamily@gmail.com">dimbusinessfamily@gmail.com</a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-globe"></span>
										</div>
										<div class="text pl-3">
											<p><span>Our Crowd Fundind</span> <a href="<?=site_url();?>">www.dimbusiness.online</a></p>
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

   	<div  class="text-center">
	   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7814.4956141642915!2d27.48197067107271!3d-11.676842125488713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19723eedb2cee413%3A0x31ed45b8a7f14bc5!2sInstitut%20Technique%20Salama!5e0!3m2!1sen!2scd!4v1589454804988!5m2!1sen!2scd" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div> 