<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Leasing Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>

        .hero {
            background-image: url('img/coup-3d-rendering-black-coupe-sports-car-on-background_9849977.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
        }

        .hero-overlay {
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .hero-content {
            z-index: 1;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn-primary {
            background-color: #007bff;
            padding: 10px 30px;
            font-size: 1.2rem;
            border: none;
            border-radius: 50px;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .stats-section {
            background-color: #121212;
            color: #f1f1f1;
            padding: 30px 0;
        }

        .stats-section .stat {
            text-align: center;
            padding: 20px 0;
        }

        .stats-section h3 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .stats-section p {
            font-size: 1.1rem;
        }

        .cta-section {
            background-color: #f8f9fa;
            text-align: center;
            padding: 50px 0;
            color: black;
        }

        .cta-section h2 {
            margin-bottom: 20px;
            font-size: 2.5rem;
        }

        .cta-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn-secondary {
            background-color: #007bff;
            padding: 10px 30px;
            font-size: 1.2rem;
            border-radius: 50px;
        }

        .car-image {
            max-width: 100%;
            height: auto;
        }
    </style>
     <style>
        footer a {
            text-decoration: none;
            color: #333;
        }
        footer a:hover {
            color: #000;
        }
        footer h6 {
            font-weight: bold;
        }
        footer {
            border: none;
            outline: none;
        }
    </style>
</head>
<body>
    <!---navbar--->
    <nav class="navbar navbar-expand-lg fixed-top bg-danger shadow-lg">
        <div class="container">
          <a class="navbar-brand fw-bold fs-1 text-warning" href="#">CARSHOP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto fs-5 fw-medium">
              <li class="nav-item">
                <a class="nav-link active me-3 text-light" aria-current="page" href="listcars">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-3 text-light" href="carsr34.php">R34</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  me-3 text-light" href="carsr35.php">R35</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-3 text-light" href="lamborghini.php">lamborghini</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-3 text-light" href="ferrari.php">ferrari</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-3 text-light" href="bugatti.php">bugatti</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-3 text-light" href="bmw.php">BMW</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-3 fw-bold text-warning" href="#">About</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!---end navbar--->

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content col-7 text-white">
            <h1 class="fw-bold">Large enough to serve you, small enough to know you.</h1>
            <p>BillFlex360 has made car leasing simple. In three steps you can pick a car, see its price, and boom! You're done.</p>
            <a href="../signup.php" class="btn btn-danger fs-5 px-5 py-2 rounded-pill">Sign Up Today</a>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 stat border-end">
                    <h3>20%</h3>
                    <p>Average Savings</p>
                </div>
                <div class="col-md-4 stat border-end">
                    <h3>28+</h3>
                    <p>Cars Leased with Us</p>
                </div>
                <div class="col-md-4 stat">
                    <h3>4.9/5</h3>
                    <p>Average Rating</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
<div class="container car-section border-bottom">
  <div class="row">
    <div class="col-6 me-3">
      <img src="img/Jaguar-F-Type-PNG-Images-HD.png" alt="Car Image" class="car-image">
    </div>
    <div class="col-4 ms-3 d-flex align-items-center text-dark">
      <div>
        <h2 class="fs-1">Driving you to your next new car.</h2>
        <p>Billflex360 is the cheapest and easiest way to lease a car on planet Earth.</p>
        <a href="../signup.php" class="btn btn-danger px-4 py-2 rounded-pill shadow-lg">Get Started Now</a>
      </div>
    </div>
  </div>
</div>
  <!-- Footer Section -->
  <div class="container-fluid mt-5 ">
      <footer class="bg-white text-dark pt-5 pb-4">
          <div class="container text-center text-md-start">
              <div class="row">
                  <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                      <h6 class="text-uppercase fw-bold mb-4">
                       <a class="navbar-brand fw-bold fs-3 text-warning" href="#">CARSHOP</a>
                      </h6>
                      <div class="mb-3">
                          <a href="https://www.instagram.com/vuthvireak28?igsh=d3k3YXQyNTkwczE4&utm_source=qr" class="text-dark me-3"><i class="bi bi-instagram"></i></a>
                          <a href="https://www.tiktok.com/@rakkk9999?_t=8q8tzOzQ6oU&_r=1" class="text-dark me-3"><i class="bi bi-tiktok"></i></a>
                          <a href="https://www.facebook.com/share/ZRkCrLhUGh1ec3Vv/?mibextid=LQQJ4d" class="text-dark me-3"><i class="bi bi-facebook"></i></a>
                          <a href="https://t.me/vuth_vireak" class="text-dark me-3"><i class="bi bi-telegram"></i> </a>
                          <a href="https://youtube.com/@vireakvuth?si=SEotQE9GwKr2caYA" class="text-dark me-3"><i class="bi bi-youtube"></i></a>
                          <a href="https://x.com/VireakV9999" class="text-dark me-3"><i class="bi bi-twitter-x"></i></a>
                      </div>
                      <div>
                          <form class="d-flex">
                              <input type="email" class="form-control" placeholder="Your email" />
                              <button class="btn btn-dark ms-2"><i class="bi bi-send"></i></button>
                          </form>
                          <small class="form-text">Unsubscribe any time. <a href="#">Privacy Policy</a>.</small>
                      </div>
                  </div>
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 ">
                      <h6 class="text-uppercase fw-bold mb-4">Discover</h6>
                      <p><a href="#" class="text-dark">About Envato</a></p>
                      <p><a href="#" class="text-dark">Our Pricing & Plans</a></p>
                      <p><a href="#" class="text-dark">Stock Video</a></p>
                      <p><a href="#" class="text-dark">Video Templates</a></p>
                      <p><a href="#" class="text-dark">Royalty-Free Music</a></p>
                      <p><a href="#" class="text-dark">Fonts</a></p>
                  </div>

                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                      <h6 class="text-uppercase fw-bold mb-4">License & User Terms</h6>
                      <p><a href="#" class="text-dark">License Terms</a></p>
                      <p><a href="#" class="text-dark">Terms & Conditions</a></p>
                      <p><a href="#" class="text-dark">Privacy Policy</a></p>
                      <p><a href="#" class="text-dark">Acceptable Use Policy</a></p>
                      <p><a href="#" class="text-dark">Cookie Settings</a></p>
                  </div>

                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                      <h6 class="text-uppercase fw-bold mb-4">Resources</h6>
                      <p><a href="#" class="text-dark">Discover Tuts+</a></p>
                      <p><a href="#" class="text-dark">Video & Music</a></p>
                      <p><a href="#" class="text-dark">Web Design</a></p>
                      <p><a href="#" class="text-dark">Explore Blog</a></p>
                  </div>

                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                      <h6 class="text-uppercase fw-bold mb-4">About Us</h6>
                      <p><a href="#" class="text-dark">Who We Are</a></p>
                      <p><a href="#" class="text-dark">Join Our Team</a></p>
                      <p><a href="#" class="text-dark">Our Forum</a></p>
                      <p><a href="#" class="text-dark">Company Blog</a></p>
                  </div>

              </div>
          </div>
      </footer> 
    </div>
     <!--end Footer Section -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
