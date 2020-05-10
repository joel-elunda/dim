
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand p-3" href="<?=site_url();?>">DIM BUSINESS</a>

			
			<div class="searchform order-sm-start order-lg-last"> 
				<a class="btn btn-primary" href="<?=site_url('account/login_view');?>" role="button">Se connecter</a>
			</div>
	    	
	    	
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
													<div class="form-group">
														<label class="label" for="email">Adresse Email *</label>
														<input type="email" class="form-control" value="<?=set_value('email');?>" name="email" id="email" placeholder="Email">
														<small class="form-text text-muted"><?= form_error('email','<em>','</em>') ?></small>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="password">Mot de passe *</label>
														<input type="text" class="form-control" name="password" id="password" placeholder="Mot de passe">
														<small class="form-text text-muted"><?= form_error('password','<em>','</em>') ?></small>
														<small class="form-text text-muted">Assurez-vous qu'il s'agit d'au moins 15 caractères OU d'au moins 8 caractères.</small>
													</div>
												</div> 
											 
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="S'incrire" class="btn btn-primary w-100"> 
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