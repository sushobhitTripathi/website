<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><span class="text-warning">Boots</span>trap</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#contact">Contact</a>
          </li>
      </div>
    </div>
  </nav>

  <!-----------corousel----------->

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/download.png" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Your Dream House01</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sit laborum accusamus optio cupiditate?</p>
          <p><a href="#" class="btn btn-warning mt3">Learn More</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/home02.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption ">
          <h5>Your Dream House02</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sit laborum accusamus optio cupiditate?</p>
          <p><a href="#" class="btn btn-warning mt3">Learn More</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/home03.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption ">
          <h5>Your Dream House03</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sit laborum accusamus optio cupiditate?</p>
          <p><a href="#" class="btn btn-warning mt3">Learn More</a></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <section id="about" class="about section-padding">
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-12">
          <div class="about-img">
            <img src="img/home1.jpeg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
          <div class="about-text">
            <h2>We Provide Best Quality<br> Of Website Designing</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Doloribus exercitationem quia magnam sint consequatur sit
              unde quas ut! Animi quia veritatis, atque illo tempore
              natus sed consequuntur commodi autem iste perspiciatis,
              voluptates consectetur dolorum est explicabo recusandae? Nemo labore sit,
              quaerat dicta nam consequatur ex eum ipsum at similique incidunt.</p>
            <a href="#" class="btn btn-warning mt3">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-----------services------------>
  <section id="services" class="services services-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>Our Services</h2>
            <p>Lorem ipsum dolor sit amet <br>consectetur adipisicing elit. Velit, et.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-white text-center bg-dark pb-2">
            <div class="card-body">
              <i class="bi bi-subtract"></i>
              <h3 class="card-title">Best Quality</h3>
              <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Commodi eum aliquam at dignissimos quisquam veniam necessitatibus
                magni iusto? Excepturi eligendi ab praesentium magni, eum nesciunt.</p>
            </div>
            <button id="service-btn" class="btn btn-warning text-dark"><a href="#services">Read More</a></button>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-white text-center bg-dark pb-2">
            <div class="card-body">
              <i class="bi bi-slack"></i>
              <h3 class="card-title">Integrity</h3>
              <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Commodi eum aliquam at dignissimos quisquam veniam necessitatibus
                magni iusto? Excepturi eligendi ab praesentium magni, eum nesciunt.</p>
            </div>
            <button id="service-btn" class="btn btn-warning text-dark"><a href="#services">Read More</a></button>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-white text-center bg-dark pb-2">
            <div class="card-body">
              <i class="bi bi-playstation"></i>
              <h3 class="card-title">Best Quality</h3>
              <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Commodi eum aliquam at dignissimos quisquam veniam necessitatibus
                magni iusto? Excepturi eligendi ab praesentium magni, eum nesciunt.</p>
            </div>
            <button id="service-btn" class="btn btn-warning text-dark"><a href="#services">Read More</a></button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!---------------Portfolio--------------->

  <section id="portfolio" class="portfolio section-padding mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>Our Projects</h2>
            <p>Lorem ipsum dolor sit amet <br>consectetur adipisicing elit. Velit, et.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-light text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div class="img-area mb-4">
                  <img src="img/portfolio01.jpeg" alt="" class="img-fluid">
                </div>
                <h3 class="card-title">Images</h3>
                <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing
                  elit. Eos consequatur aspernatur aliquam
                  quas nobis minima quaerat blanditiis adipisci, magnam iusto.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-light text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div class="img-area mb-4">
                  <img src="img/portfolio02.png" alt="" class="img-fluid">
                </div>
                <h3 class="card-title">Images</h3>
                <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing
                  elit. Eos consequatur aspernatur aliquam
                  quas nobis minima quaerat blanditiis adipisci, magnam iusto.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-light text-center bg-white pb-2">
              <div class="card-body text-dark">
                <div class="img-area mb-4">
                  <img src="img/portfolio03.png" alt="" class="img-fluid">
                </div>
                <h3 class="card-title">Images</h3>
                <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing
                  elit. Eos consequatur aspernatur aliquam
                  quas nobis minima quaerat blanditiis adipisci, magnam iusto.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!------------team----------->

  <section id="team" class="team team-padding mt-5">
    <div class="container mb-5">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h3 class="card-title py-2">Our Team</h3>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sequi deleniti molestiae harum, natus id.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card text-center">
            <div class="card-body">
              <img src="img/img_avatar.png" alt="" class="img-fluid rounded-circle">
              <h3 class="card-title py-2">Team 01</h3>
              <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia magnam quos omnis eligendi minus enim!</p>
              <p class="socials">
                <i class="bi bi-twitter text-dark mx-1"></i>
                <i class="bi bi-facebook text-dark mx-1"></i>
                <i class="bi bi-linkedin text-dark mx-1"></i>
                <i class="bi bi-instagram text-dark mx-1"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card text-center">
            <div class="card-body">
              <img src="img/img_avatar.png" alt="" class="img-fluid rounded-circle">
              <h3 class="card-title py-2">Team 02</h3>
              <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia magnam quos omnis eligendi minus enim!</p>
              <p class="socials">
                <i class="bi bi-twitter text-dark mx-1"></i>
                <i class="bi bi-facebook text-dark mx-1"></i>
                <i class="bi bi-linkedin text-dark mx-1"></i>
                <i class="bi bi-instagram text-dark mx-1"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card text-center">
            <div class="card-body">
              <img src="img/img_avatar.png" alt="" class="img-fluid rounded-circle">
              <h3 class="card-title py-2">Team 03</h3>
              <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia magnam quos omnis eligendi minus enim!</p>
              <p class="socials">
                <i class="bi bi-twitter text-dark mx-1"></i>
                <i class="bi bi-facebook text-dark mx-1"></i>
                <i class="bi bi-linkedin text-dark mx-1"></i>
                <i class="bi bi-instagram text-dark mx-1"></i>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="card text-center">
            <div class="card-body">
              <img src="img/img_avatar.png" alt="" class="img-fluid rounded-circle">
              <h3 class="card-title py-2">Team 04</h3>
              <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia magnam quos omnis eligendi minus enim!</p>
              <p class="socials">
                <i class="bi bi-twitter text-dark mx-1"></i>
                <i class="bi bi-facebook text-dark mx-1"></i>
                <i class="bi bi-linkedin text-dark mx-1"></i>
                <i class="bi bi-instagram text-dark mx-1"></i>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-----------Contact----------->

  <section id="contact" class="contact contact-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, ipsa!</p>
          </div>
        </div>
      </div>
      <div class="row m-0">
        <div class="col md-12 p-0 pt-4 pb-4">
         <form action="contact.php" method="post" class="bg-light p-4 m-auto">
         <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <input type="text" name="name" placeholder="Your Full Name" required class="form-control">
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <input type="email" name="email" placeholder="Your Email" required class="form-control">
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <textarea name="query" placeholder="Your Query Here" required class="form-control" rows="3"></textarea>
              </div>
            </div>
            <button name="submit" class="btn btn-warning btn-lg btn-block mt-3">Send Now</button>
          </div>
         </form>
        </div>
      </div>
    </div>
  </section>

  <!---------footer--------->

  <footer class="bg-dark p-2 text-center">
    <div class="container">
      <p class="text-white">All Right Reserved @Bootstrap</p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>