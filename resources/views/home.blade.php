@extends('layouts.base')

@section('content')

	<section class="bg-two py-3">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-md-6 my-auto py-3">
                <h1>Get a professional website for your company.</h1>
                <p class="lead">We are a digital agency that specializes in creating professional websites and unique digital experiences that grow brands and drive audiences to action.</p>
                <p>
                  Your website is your digital ages first impression with potential customers  and it should reflect your brand and clearly indicate what you are all about. <br>
                 
                   <a href=""> Learn more -></a>
                </p>
                <a class="btn btn-primary btn-lg" href="tel:+27610717955" role="button">061 071 7955</a>
                <a class="btn btn-outline-primary btn-lg" href="mailto:info@keithzano.com" role="button">Email Us</a>
              </div>
              <div class="col-sm-12 col-md-6 my-auto py-3">
                <img class="image" src="images/website-design.webp" alt="website design" loading="lazy">
              </div>
          </div>
      </div>
  </section>


  <section class="py-3">
      <div class="container">
        <div class="row py-3 invert">
          <div class="col-sm-12 col-md-6 my-auto py-3">
            <h2>Give your website the home it deserves</h2>
            <p class="lead">
              Get fast reliable website hosting. Affordable website hosting for Companies and website developers across South Africa.
            </p>
            <p>
              Have your website hosted on enterprise-grade hardware so your website is always up and running on our secure and stable networks.
              All traffic going through your site is secure and compliant with international standards. <br>
              <a href="{{ route('hosting.web') }}">
                Learn more ->
              </a>
            </p>
            <a class="btn btn-primary btn-lg" href="tel:+27610717955" role="button">061 071 7955</a>
            <a class="btn btn-outline-primary btn-lg" href="{{ route('contact-us') }}" role="button">Contact Us</a>
          </div>
          <div class="col-sm-12 col-md-6 my-auto my-auto py-3">
            <img class="image" src="images/website-hosting.webp" alt="Website design Cape Town, South Africa" loading="lazy">
          </div>
        </div>
      </div>
    </section>


    <section class="py-3 bg-one">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto text-center">
            <h2 class="mx-auto">Our full range of services</h2>
            <p class="lead">
              All the digital products you will need for your Business in One place. We wil provide you with all the tools you will need to get online quickly, manage your business and build your brand.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <h3 class="h4"><strong>Website Development</strong></h3>
            <p>
              Our website development services focus on presenting quality and result oriented website development solutions.<br>
              <a href="{{ route('web.dev') }}">learn more -></a>
            </p>
          </div>
          <div class="col-sm-12 col-md-4">
            <h3 class="h4"><strong>Domain Registration</strong></h3>
            <p>
              Get your Business Online with no hussle . We offer the cheapest domain name prices in South Africa.<br>
              <a href="https://host.keithzano.com/cart.php?a=add&domain=register">Get yours Now -></a>
            </p>
          </div>
          <div class="col-sm-12 col-md-4">
            <h3 class="h4"><strong>Company Registration</strong></h3>
            <p>
              Register your company in South Africa in just 2 simple steps. We’ve helped a lot of business people successfully register their companies in South Africa. <br>
              <a href="{{ route('company.registration') }}">Start Now -></a> 
            </p>
          </div>
          <div class="col-sm-12 col-md-4">
            <h3 class="h4"><strong>PPC & Google Adwords</strong></h3>
            <p>
              Target the right customers and reach a wide audiance with eye catching adverts. <br>
              <a href="{{ route('seo.ppc') }}">Learn More -></a>
            </p>
          </div>
          <div class="col-sm-12 col-md-4">
            <h3 class="h4"><strong>Organic SEO</strong></h3>
            <p>
              Increase organic traffic to your website by implementing good SEO methods.<br>
              <a href="{{ route('seo.organic') }}">Learn More -></a>
            </p>
          </div>
          <div class="col-sm-12 col-md-4">
            <h3 class="h4"><strong>Wordpress Development</strong></h3>
            <p>
              WordPress that is professionally developed to appease your customers <br>
              <a href="{{ route('web.design') }}">Learn More -></a>
            </p>
          </div>
          <div class="col-sm-12 col-md-4">
            <h3 class="h4"><strong>Wordpress Hosting</strong></h3>
            <p>
              Wordpress hosting that has all the best server configurations to get you going. <br>
              <a href="{{ route('hosting.web') }}">Get yours -></a>
            </p>
          </div>
          <div class="col-sm-12 col-md-4">
            <h3 class="h4"><strong>Email Hosting</strong></h3>
            <p>
              Website hosting that comes with professional emails that match your domain name.
            </p>
          </div>
          <div class="col-sm-12 col-md-4">
            <h3 class="h4"><strong>Domain Transfare</strong></h3>
            <p>
              Transfere your domain to us and get advanced DNS management with DDOS protection. <br>
              <a href="https://host.keithzano.com/cart.php?a=add&domain=transfer">Start Now -></a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 my-auto py-3">
            <h2>Ready To Grow your Business?</h2>
            <p class="lead">
              Take the next step in growing your business using digital marketing. Connect with one of our expert digital strategists to learn how we can help you reach your business goals and achieve amazing results because of our expert digital marketers.
              <br> <br>
              <a class="btn btn-primary btn-lg" href="tel:+27610717955" role="button">061 071 7955</a>
              <a class="btn btn-outline-primary btn-lg" href="mailto:info@keithzano.com" role="button">Email Us</a>
            </p>
          </div>
          <div class="col-sm-12 col-md-6 my-auto py-3">
            <img class="image" src="/images/digital-marketing.webp" alt="SEO" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    @include('components.get-in-touch')

    <section class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <img class="image" src="/images/put-your-business-on-the-map.webp" alt="company registration south africa">
            <h4 class="mt-3 h5"><strong>Get your business on the map.</strong></h4>
            <p>
              We get your business listed on Google Maps so you can get a lot more face-time with your customers.
            </p>
          </div>
          <div class="col-sm-12 col-md-4">
            <img class="image" src="images/Email-Marketing.webp" alt="website design south africa">
            <h4 class="mt-3 h5"><strong>Give your business a social life.</strong></h4>
            <p>We create and manage a facebook, twitter and instagram account for your business.</p>
          </div>
          <div class="col-sm-12 col-md-4">
            <img class="image" src="/images/digital-marketing.webp" alt="search engine optimization (SEO)">
            <h4 class="mt-3 h5"><strong>Keep your customers engaged</strong></h4>
            <p>
              Engage your customers and keep them up to date on how to stay connected to your business.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-3 bg-one">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 my-auto py-3">
            <h2>Let us help your business grow online leads</h2>
            <p class="lead">
              Our expert digital marketing team gives you an unfair advantage over your competition. 
              As a leader in website design services, we pride ourselves on delivering real results for our clients. <br><br>
              Get in touch with our team today to experience what makes us stand apart from other digital agencies.
            </p>
            <a class="btn btn-primary btn-lg" href="tel:+27610717955" role="button">061 071 7955</a>
            <a class="btn btn-outline-primary btn-lg" href="{{ route('contact-us') }}" role="button">Contact Us</a>
          </div>
          <div class="col-sm-12 col-md-6 my-auto py-3">
            <img class="image" src="/images/social-marketing.webp" alt="website design Cape Town" loading="lazy">
          </div>
        </div>
      </div>
    </section>
    
    @include('components.newsletter')

@endsection