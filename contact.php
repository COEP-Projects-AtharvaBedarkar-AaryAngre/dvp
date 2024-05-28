<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
	<?php include_once("header.php");?>
  	<title>Contact Form 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script src="https://web3forms.com/client/script.js" async defer></script>

	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Beyond the Boost - DVP Project</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row justify-content-center">
							<div class="col-lg-8 mb-5">
								<div class="row">
									<div class="col-md-4">
										<div class="dbox w-100 text-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-map-marker"></span>
					        		</div>
					        		<div class="text">
						            <p><span>Address:</span> COEP TU, Wellesely Road, Shivaji Nagar, Pune-05</p>
						          </div>
					          </div>
									</div>
									<div class="col-md-4">
										<div class="dbox w-100 text-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-phone"></span>
					        		</div>
					        		<div class="text">
						            <p><span>Phone:</span> <a href="tel://1234567920">+91 7507929739</a></p>
						          </div>
					          </div>
									</div>
									<div class="col-md-4">
										<div class="dbox w-100 text-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-paper-plane"></span>
					        		</div>
					        		<div class="text">
						            <p><span>Email:</span> <a href="mailto:angreas23.elec@coeptech.ac.in">angreas23.elec@coeptech.ac.in</a></p>
						          </div>
					          </div>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="contact-wrap">
									<h3 class="mb-4 text-center">Get in touch with us</h3>
									<div id="form-message-warning" class="mb-4 w-100 text-center"></div> 
				      		<div id="form-message-success" class="mb-4 w-100 text-center">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm" action="https://api.web3forms.com/submit">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
												<input type="hidden" name="access_key" value="c89a9461-0f61-406e-818d-e3df7938aa93">
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
												<div class="h-captcha" data-captcha="true"></div>
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
									<a href="index.php">Home</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

