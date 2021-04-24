<footer>
	<div class="bb">
		<div class="container pt-5 pb-3">
			<div class="row">
				<div class="col-sm-12 col-md-4 text-md-start text-center">
					<a class="navbar-brand" href="{{ route('home') }}">
						<img src="images/logo.png" class="navbar-brand-img" alt="Website design" style="height:40px;">
					</a>
				</div>
				<div class="col-sm-12 col-md-4 text-center">
					<div class="row justify-content-center">
						<div class="col-2">
							<a href="https://twitter.com/creativeparksa">
								<img class="socials" src="{{ asset("images/nav/twitter.svg") }}">
							</a>
						</div>
						<div class="col-2">
							<a href="https://instagram.com/creativeparksa">
								<img class="socials" src="{{ asset("images/nav/instagram.svg") }}">
							</a>
						</div>
						<div class="col-2">
							<a href="https://facebook.com/creativeparksa">
								<img class="socials" src="{{ asset("images/nav/facebook.svg") }}">
							</a>
						</div>
					</div> 
				</div>
				<div class="col-sm-12 col-md-4 text-md-end text-center">
					<a class="p" href="mailto:info@creativepark.co.za">info@creativepark.co.za</a>
				</div>
			</div>
		</div>
	</div>

	<div class="bb">
		<div class="container pt-5 pb-3">
			<div class="row">
				<div class=" col-6 col-md-3">
					<h2 class="footer-menu">Company</h2>
					<ul>
						<li>
							<a href="{{ route('home') }}">About us</a>
						</li>
						<li>
							<a href="{{ route('contact-us') }}">Contact Us</a>
						</li>
						<li>
							<a href="{{ route('home') }}">Terms & Conditions</a>
						</li>
					</ul>
				</div>
				<div class="col-6 col-md-3">
					<h2 class="footer-menu">Our Services</h2>
					<ul>
						<li>
							<a href="{{ route('web.design') }}">Web design</a>
						</li>
						<li>
							<a href="{{ route('hosting.web') }}">Web hosting</a>
						</li>
						<li>
							<a href="{{ route('web.dev') }}">Web development</a>
						</li>
						<li>
							<a href="{{ route('seo.ppc') }}">PPC & Google Adwords</a>
						</li>
					</ul>
				</div>
				<div class="col-6 col-md-3">
					<h2 class="footer-menu">Support</h2>
					<ul>
						<li>
							<a href="{{ route('contact-us') }}">Contact Us</a>
						</li>
						<li>
							<a href="">Submit a Ticket</a>
						</li>
						<li>
							<a href="">Knowledgebase</a>
						</li>
						<li>
							<a href="{{ route('contact-us') }}">Move to Creative Park</a>
						</li>
					</ul>
				</div>
				<div class="col-6 col-md-3">
					<h2 class="footer-menu">Our Products</h2>
					<ul>
						<li>
							<a href="{{ route('seo.organic') }}">Organic SEO</a>
						</li>
						<li>
							<a href="{{ route('hosting.web') }}">Website Hosting</a>
						</li>
						<li>
							<a href="{{ route('web.design') }}">Website Design</a>
						</li>
					</ul>
				</div>
				
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col">
				<p class="py-3 copy">
					&copy;<script>document.write(new Date().getFullYear());</script> KEITHZANO (PTY) LTD | All rights reserved
				</p>
			</div>
		</div>
	</div>

</footer>