
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
			<img  src="<?=site_url('assets/images/logo - Copie.png');?>" alt="" srcset="">
	    	<a class="pl-3 navbar-brand p-3" href="<?=site_url();?>">DIM BUSINESS</a>
 
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      
	    </div>
	  </nav>
    <!-- END nav -->

	
	 

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
					<div class="col-md-8">
						<div class="wrapper">
							<div class="row no-gutters justify-content-center">
								<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4">Connectez-vous à l'équipe DIM BUSINESS</h3>
										<div id="form-message-warning" class="mb-4"></div> 
					      		 
										<form method="POST" action="<?=site_url('account/login');?>" id="contactForm" name="contactForm" class="contactForm">
											<div class="row"> 
												<div class="col-md-12"> 
													<small class="form-text text-muted"> <?= $this -> session -> error_login; ?> </small>
												</div>
												<div class="col-md-12"> 
													<div class="form-group">
														<label class="label" for="email">Adresse Email *</label>
														<input type="email" class="form-control" value="<?=set_value('email');?>" name="email" id="email" placeholder="Email">
														<small class="form-text text-danger"><?= form_error('email','<em>','</em>') ?></small>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="password">Mot de passe *</label>
														<input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
														<small class="form-text text-danger"><?= form_error('password','<em>','</em>') ?></small>
														<small class="form-text text-muted">Assurez-vous qu'il s'agit d'au moins 15 caractères OU d'au moins 8 caractères.</small>
													</div>
												</div> 
											 
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Se connecter" class="btn btn-primary w-100 border-0" style="background-color: #1d3163;"> 
													</div>
												</div>
												 
											
											 
												<div class="col-md-12">
													<div class="form-group">
														<small class="form-text text-muted">Vous n'avez pas de compte,<a href="<?=site_url('account/sign_up');?>"> <strong style="color: #1d3163;">Inscrivez-vous</strong> </a> à l'équipe DIM BUSINESS</small>
													</div>
												</div>
												 
											
											</div>
										</form>
									</div>
								</div>
								 
								</div>
							</div>
						</div>
					</div>
				</div>
    	</div>
    </section>
 