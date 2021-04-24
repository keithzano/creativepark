<div class="pagewidefixed-top">
  <div class="container">
    <div class="content-fixed-width">
      <div class="permalinkheader">
        <a href="https://sacoronavirus.co.za/" style="padding-right:12px; color: #019be0;" target="_blank" class="topnavhide" rel="”nofollow”">Keep updated on COVID-19 </a>
        <a href="https://host.keithzano.com/serverstatus.php" target="_blank">NETWORK STATUS</a>
        <a href="tel:+27610717955">+27 61 071 7955</a>
        <a href="https://host.keithzano.com/submitticket.php?step=2&amp;deptid=1">SUPPORT</a>
        <a href="https://host.keithzano.com/clientarea.php"><i class="fas fa-sign-in-alt"></i> MY LOGIN</a> 
      </div>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="images/logo.png" class="navbar-brand-img" alt="Website design" style="height:40px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            web design
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li>
              <a class="dropdown-item" href="{{ route('web.design') }}">
                <div class="row">
                  <div class="col-2 col-sm-2">
                    <img src="{{ asset("images/nav/web-design.svg") }}" alt="Web design">
                  </div>
                  <div class="col-9 col-sm-10">
                    <div class="link">Web design </div>
                  <div class="description">Website designs that are tailored to perfectly suit your business.</div>
                  </div>
                </div>
              </a>
            </li>

            <li>
              <a class="dropdown-item" href="{{ route('web.dev') }}">
                <div class="row">
                  <div class="col-2 col-sm-2">
                    <img src="{{ asset("images/nav/web-development.svg") }}" alt="Web development">
                  </div>
                  <div class="col-9 col-sm-10">
                    <div class="link">web development </div>
                  <div class="description">We take your design an make them beautiful websites.</div>
                  </div>
                </div>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            hosting
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li>
              <a class="dropdown-item" href="{{ route('hosting.web') }}">
                <div class="row">
                  <div class="col-2 col-sm-2">
                    <img src="{{ asset("images/nav/web-hosting.svg") }}" alt="Web Hosting">
                  </div>
                  <div class="col-9 col-sm-10">
                    <div class="link">Web Hosting</div>
                  <div class="description">Take your idea or business online today with our shared web hosting solutions.</div>
                  </div>
                </div>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            domains
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li>
              <a class="dropdown-item" href="#">
                <div class="row">
                  <div class="col-2 col-sm-2">
                    <img src="{{ asset("images/nav/domain-registration.svg") }}" alt="Domain name registration">
                  </div>
                  <div class="col-9 col-sm-10">
                    <div class="link">Register a domain</div>
                  <div class="description">Search for and register your domain today.</div>
                  </div>
                </div>
              </a>
            </li>

            <li>
              <a class="dropdown-item" href="#">
                <div class="row">
                  <div class="col-2 col-sm-2">
                    <img src="{{ asset("images/nav/domain-transfere.svg") }}" alt="Domain name Transfere">
                  </div>
                  <div class="col-9 col-sm-10">
                    <div class="link">Domain Transfere</div>
                  <div class="description">Transfere your domain to us.</div>
                  </div>
                </div>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('company.registration') }}">comp reg</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            seo & marketing
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
            <li>
              <a class="dropdown-item" href="{{ route('seo.organic') }}">
                <div class="row">
                  <div class="col-2 col-sm-2">
                    <img src="{{ asset("images/nav/organic-seo.svg") }}" alt="Organic SEO">
                  </div>
                  <div class="col-9 col-sm-10">
                    <div class="link">Organic SEO</div>
                  <div class="description">SEO that will get you more organic traffic to your website.</div>
                  </div>
                </div>
              </a>
            </li>

            <li>
              <a class="dropdown-item" href="{{ route('seo.ppc') }}">
                <div class="row">
                  <div class="col-2 col-sm-2">
                    <img src="{{ asset("images/nav/pay-per-clic.svg") }}" alt="PPC & Google Adwords">
                  </div>
                  <div class="col-9 col-sm-10">
                    <div class="link">PPC & Google Adwords</div>
                  <div class="description">Reach the right customers at the right time with PPC</div>
                  </div>
                </div>
              </a>
            </li>

          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('blog.index') }}">blog</a> 
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            contact-us
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
            <li>
              <a class="dropdown-item" href="#">
                <div class="row">
                  <div class="col-2 col-sm-2">
                    <img src="{{ asset("images/nav/move.svg") }}" alt="Move your web hosting to creativepark">
                  </div>
                  <div class="col-9 col-sm-10">
                    <div class="link">
                      Move to creativepark <span class="badge  badge-success">Free</span>
                    </div>
                  <div class="description">Website data, domain name transfer and 3 months free hosting!</div>
                  </div>
                </div>
              </a>
            </li>

            <li>
              <a class="dropdown-item" href="#">
                <div class="row">
                  <div class="col-2 col-sm-2">
                    <img src="{{ asset("images/nav/knowledge-base.svg") }}" alt="creativepark contact details, phone number, email address.">
                  </div>
                  <div class="col-9 col-sm-10">
                    <div class="link">Knowledge base</div>
                  <div class="description">Browse our knowledge base to get help immediately.</div>
                  </div>
                </div>
              </a>
            </li>

            <li>
              <a class="dropdown-item" href="{{ route('contact-us') }}">
                <div class="row">
                  <div class="col-2 col-sm-2">
                    <img src="{{ asset("images/nav/customer-service.svg") }}" alt="Knowledge base">
                  </div>
                  <div class="col-9 col-sm-10">
                    <div class="link">Contact us</div>
                  <div class="description">Need other help with your account?</div>
                  </div>
                </div>
              </a>
            </li>

          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>