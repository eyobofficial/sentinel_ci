<!-- PAGE HEADER WITH BACKGROUND IMAGE -->
<div id="page-header-about" class="page-header has-background-image">
	<div class="overlay"></div>
	<div class="container">
		<h1 class="page-title">CONTACT US</h1>
		<ol class="breadcrumb link-accent">
			<li><a href="#">Home</a></li>
			<li><a href="#">Pages</a></li>
			<li class="active">Contact</li>
		</ol>
	</div>
</div>
<!-- END PAGE HEADER WITH BACKGROUND IMAGE -->

<div class="page-content no-margin-bottom">
	<div class="container">			
		<div class="row">
			<div class="col-md-8">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure ad omnis consequuntur quas hic esse, nesciunt vel laudantium culpa nisi aspernatur totam, optio quis voluptatum suscipit repellendus! Temporibus, commodi, aliquid!</p>
				<br>
				<form method="post" id="contact-form" class="form-horizontal">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="contact-name" class="control-label sr-only">Name</label>
								<input type="text" class="form-control" id="contact-name" name="name" placeholder="Name*" required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="contact-email" class="control-label sr-only">Email</label>
								<input type="email" class="form-control" id="contact-email" name="email" placeholder="Email*" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="contact-subject" class="control-label sr-only">Subject</label>
						<div class="col-sm-12">
							<input type="text" class="form-control" id="contact-subject" name="subject" placeholder="Subject">
						</div>
					</div>
					<div class="form-group">
						<label for="contact-message" class="control-label sr-only">Message</label>
						<div class="col-sm-12">
							<textarea class="form-control" id="contact-message" name="message" rows="5" cols="30" placeholder="Message" required></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<button id="submit-button" type="submit" class="btn btn-primary"><i class="fa loading-icon"></i> <span>Submit Message</span></button>
						</div>
					</div>
					<input type="hidden" name="msg-submitted" id="msg-submitted" value="true">
				</form>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="widget">
						<h4 class="widget-title">CONTACT INFO</h4>
						<address class="contact-info">
							<p><i class="icon icon_pin_alt ico-styled text-primary"></i> Ghana Street, Park Plaza Building 7<sup>th</sup> Floor <br> Bole Subcity, Wereda 03 <br> Addis Ababa, Ethiopia</p>
							<p><i class="icon icon_phone ico-styled text-primary"></i> (+251) 011 - 667 - 3395</p>
							<p><i class="icon icon_mail_alt ico-styled text-primary"></i> sales@setinelsteel.net</p>
						</address>
					</div>

					<div class="widget">
						<h4 class="widget-title">BUSINESS HOURS</h4>
						<ul class="list-unstyled">
							<li><strong>Monday-Friday: </strong> 8am to 5pm</li>
							<li><strong>Saturday: </strong> 9am to 12pm</li>
							<li><strong>Sunday: </strong> Closed</li>
						</ul>
					</div>

					<div class="widget">
						<h4 class="widget-title">GET THERE</h4>
						<div id="google-map" class="no-margin-top"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->