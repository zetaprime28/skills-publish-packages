<?php
    include 'connection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="carsr35.css">
  </head>
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
    <style>
  body {
    background-color: rgb(43, 40, 45);
  }

  .bgbanner {
    position: relative;
    background-image: url('img/157048488036f067f89cc14862cNissan-GT-R-R35-Godzilla-bg.jpg');
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 70vh;
  }

  .bgbanner .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.6);
  }

  .bgbanner .container {
    position: relative;
    z-index: 2;
  }

  .bgbanner h1 {
    z-index: 3;
  }
</style>
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
                <a class="nav-link  me-3 fw-bold text-warning" href="#">R35</a>
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
                <a class="nav-link me-3  text-light" href="bmw.php">BMW</a>
              </li>
              <li class="nav-item">
                <a class="nav-link me-3 text-light" href="about.php">About</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!---end navbar--->
      <!---banner--->
      <div class="bgbanner">
          <div class="overlay"></div>
          <div class="container h-100">
              <div class="row h-100 justify-content-center align-items-center">
                  <div class="col-7 text-center">
                      <h5 class="display-6 fw-bold text-light">Nissan GT-R R35</h5>
                      <p class="text-light">Nissan's twin turbo, AWD, technological
                         tour de force debuted in 2008 and punched well above its 
                         weight, or should we say price point. These cars are quite
                          heavy on the scales, but their facts and figures defy physics. 
                          They competed with super cars costing nearly twice as much 
                          when new, and despite minimal changes over the years, their
                           track prowess remains impressive over a decade later.</p>
                      <button class="btn btn-outline-warning rounded-pill btn-lg mt-3 px-5 text-light border-warning">Buy Now</button>
                  </div>
              </div>
          </div>
      </div>
     <!---end banner--->
     <!---r35--->  
     <div class="container mt-5">
        <h4 class="mb-4 text-light fs-3">NISSAN (R35)</h4>
          <div class="row justify-content-center">
              <?php
                $sql = "select * from r35_tbl WHERE id = 5";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                          echo '<div class="col border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                              echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                              echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                              echo'<div class="d-flex mt-3">';
                                echo '<div class="text-warning fs-6 me-3">' .$row['carname'] . '</div>'; 
                                echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                              echo'</div>';                                        
                              echo'<div class="d-flex mt-4">';
                                echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                                echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                                echo'</div>';
                          echo '</div>';
                }
               }
               $sql = "select * from r35_tbl WHERE id = 7";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                          echo '<div class="col  border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                              echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                              echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                              echo'<div class="d-flex mt-3">';
                                echo '<div class="text-warning fs-6 me-3">' .$row['carname'] . '</div>'; 
                                echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                              echo'</div>';                                        
                              echo'<div class="d-flex mt-4">';
                                echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                                echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                                echo'</div>';
                          echo '</div>';
                }
               }
               $sql = "select * from r35_tbl WHERE id = 3";
               $result = mysqli_query($conn, $sql);
               if(mysqli_num_rows($result) > 0){
                 while($row = mysqli_fetch_assoc($result)){
                         echo '<div class="col  border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                             echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                             echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                             echo'<div class="d-flex mt-3">';
                               echo '<div class="text-warning fs-6 me-3">' .$row['carname'] . '</div>'; 
                               echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                             echo'</div>';                                        
                             echo'<div class="d-flex mt-4">';
                               echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                               echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                               echo'</div>';
                         echo '</div>';
               }
              } 
              $sql = "select * from r35_tbl WHERE id = 4";
              $result = mysqli_query($conn, $sql);
              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                        echo '<div class="col  border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                            echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                            echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                            echo'<div class="d-flex mt-3">';
                              echo '<div class="text-warning fs-6 me-4">' .$row['carname'] . '</div>'; 
                              echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                            echo'</div>';                                        
                            echo'<div class="d-flex mt-4">';
                              echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                              echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                              echo'</div>';
                        echo '</div>';
              }
             } 
              ?>
           </div>
      </div>
      <!---end r35--->  
      <!---r35_1--->  
      <div class="container mt-5">
          <div class="row justify-content-center">
              <?php
                $sql = "select * from r35_tbl WHERE id = 8";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                          echo '<div class="col border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                              echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                              echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                              echo'<div class="d-flex mt-3">';
                                echo '<div class="text-warning fs-6 me-5">' .$row['carname'] . '</div>'; 
                                echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                              echo'</div>';                                        
                              echo'<div class="d-flex mt-4">';
                                echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                                echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                                echo'</div>';
                          echo '</div>';
                }
               }
               $sql = "select * from r35_tbl WHERE id = 9";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                          echo '<div class="col  border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                              echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                              echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                              echo'<div class="d-flex mt-3">';
                                echo '<div class="text-warning fs-6 me-3">' .$row['carname'] . '</div>'; 
                                echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                              echo'</div>';                                        
                              echo'<div class="d-flex mt-4">';
                                echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                                echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                                echo'</div>';
                          echo '</div>';
                }
               }
               $sql = "select * from r35_tbl WHERE id = 10";
               $result = mysqli_query($conn, $sql);
               if(mysqli_num_rows($result) > 0){
                 while($row = mysqli_fetch_assoc($result)){
                         echo '<div class="col  border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                             echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                             echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                             echo'<div class="d-flex mt-3">';
                               echo '<div class="text-warning fs-6 me-5">' .$row['carname'] . '</div>'; 
                               echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                             echo'</div>';                                        
                             echo'<div class="d-flex mt-4">';
                               echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                               echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                               echo'</div>';
                         echo '</div>';
               }
              } 
              $sql = "select * from r35_tbl WHERE id = 28";
              $result = mysqli_query($conn, $sql);
              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                        echo '<div class="col  border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                            echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                            echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                            echo'<div class="d-flex mt-3">';
                              echo '<div class="text-warning fs-6 me-3">' .$row['carname'] . '</div>'; 
                              echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                            echo'</div>';                                        
                            echo'<div class="d-flex mt-4">';
                              echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                              echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                              echo'</div>';
                        echo '</div>';
              }
             } 
              ?>
           </div>
      </div>
      <!---end r35_1--->  
      <!---r35_2--->  
      <div class="container mt-5">
          <div class="row justify-content-center">
              <?php
                $sql = "select * from r35_tbl WHERE id = 12";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                          echo '<div class="col border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                              echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                              echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                              echo'<div class="d-flex mt-3">';
                                echo '<div class="text-warning fs-6 me-5">' .$row['carname'] . '</div>'; 
                                echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                              echo'</div>';                                        
                              echo'<div class="d-flex mt-4">';
                                echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                                echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                                echo'</div>';
                          echo '</div>';
                }
               }
               $sql = "select * from r35_tbl WHERE id = 13";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                          echo '<div class="col  border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                              echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                              echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                              echo'<div class="d-flex mt-3">';
                                echo '<div class="text-warning fs-6 me-5">' .$row['carname'] . '</div>'; 
                                echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                              echo'</div>';                                        
                              echo'<div class="d-flex mt-4">';
                                echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                                echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                                echo'</div>';
                          echo '</div>';
                }
               }
               $sql = "select * from r35_tbl WHERE id = 14";
               $result = mysqli_query($conn, $sql);
               if(mysqli_num_rows($result) > 0){
                 while($row = mysqli_fetch_assoc($result)){
                         echo '<div class="col  border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                             echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                             echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                             echo'<div class="d-flex mt-3">';
                               echo '<div class="text-warning fs-6 me-3">' .$row['carname'] . '</div>'; 
                               echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                             echo'</div>';                                        
                             echo'<div class="d-flex mt-4">';
                               echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                               echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                               echo'</div>';
                         echo '</div>';
               }
              } 
              $sql = "select * from r35_tbl WHERE id = 15";
              $result = mysqli_query($conn, $sql);
              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                        echo '<div class="col  border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                            echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                            echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                            echo'<div class="d-flex mt-3">';
                              echo '<div class="text-warning fs-6 me-3">' .$row['carname'] . '</div>'; 
                              echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                            echo'</div>';                                        
                            echo'<div class="d-flex mt-4">';
                              echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                              echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                              echo'</div>';
                        echo '</div>';
              }
             } 
              ?>
           </div>
      </div>
      <!---end r35_2--->  
       <!---r35_3--->  
       <div class="container mt-5">
          <div class="row justify-content-center">
              <?php
                $sql = "select * from r35_tbl WHERE id = 16";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                          echo '<div class="col border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                              echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                              echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                              echo'<div class="d-flex mt-3">';
                                echo '<div class="text-warning fs-6 me-3">' .$row['carname'] . '</div>'; 
                                echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                              echo'</div>';                                        
                              echo'<div class="d-flex mt-4">';
                                echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                                echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                                echo'</div>';
                          echo '</div>';
                }
               }
               $sql = "select * from r35_tbl WHERE id = 17";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                          echo '<div class="col  border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                              echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                              echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                              echo'<div class="d-flex mt-3">';
                                echo '<div class="text-warning fs-6 me-3">' .$row['carname'] . '</div>'; 
                                echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                              echo'</div>';                                        
                              echo'<div class="d-flex mt-4">';
                                echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                                echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                                echo'</div>';
                          echo '</div>';
                }
               }
               $sql = "select * from r35_tbl WHERE id = 18";
               $result = mysqli_query($conn, $sql);
               if(mysqli_num_rows($result) > 0){
                 while($row = mysqli_fetch_assoc($result)){
                         echo '<div class="col  border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                             echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                             echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                             echo'<div class="d-flex mt-3">';
                               echo '<div class="text-warning fs-6 me-3">' .$row['carname'] . '</div>'; 
                               echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                             echo'</div>';                                        
                             echo'<div class="d-flex mt-4">';
                               echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                               echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                               echo'</div>';
                         echo '</div>';
               }
              } 
              $sql = "select * from r35_tbl WHERE id = 29";
              $result = mysqli_query($conn, $sql);
              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                        echo '<div class="col  border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                            echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                            echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                            echo'<div class="d-flex mt-3">';
                              echo '<div class="text-warning fs-6 me-4">' .$row['carname'] . '</div>'; 
                              echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                            echo'</div>';                                        
                            echo'<div class="d-flex mt-4">';
                              echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                              echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                              echo'</div>';
                        echo '</div>';
              }
             } 
              ?>
           </div>
      </div>
      <!---end r35_3--->  
       <!---r35_4--->  
       <div class="container mt-5">
          <div class="row justify-content-center">
              <?php
                $sql = "select * from r35_tbl WHERE id = 20";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                          echo '<div class="col border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                              echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                              echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                              echo'<div class="d-flex mt-3">';
                                echo '<div class="text-warning fs-6 me-3">' .$row['carname'] . '</div>'; 
                                echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                              echo'</div>';                                        
                              echo'<div class="d-flex mt-4">';
                                echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                                echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                                echo'</div>';
                          echo '</div>';
                }
               }
               $sql = "select * from r35_tbl WHERE id = 21";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                          echo '<div class="col  border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                              echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                              echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                              echo'<div class="d-flex mt-3">';
                                echo '<div class="text-warning fs-6 me-3">' .$row['carname'] . '</div>'; 
                                echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                              echo'</div>';                                        
                              echo'<div class="d-flex mt-4">';
                                echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                                echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                                echo'</div>';
                          echo '</div>';
                }
               }
               $sql = "select * from r35_tbl WHERE id = 22";
               $result = mysqli_query($conn, $sql);
               if(mysqli_num_rows($result) > 0){
                 while($row = mysqli_fetch_assoc($result)){
                         echo '<div class="col  border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                             echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                             echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                             echo'<div class="d-flex mt-3">';
                               echo '<div class="text-warning fs-6 me-3">' .$row['carname'] . '</div>'; 
                               echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                             echo'</div>';                                        
                             echo'<div class="d-flex mt-4">';
                               echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                               echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                               echo'</div>';
                         echo '</div>';
               }
              } 
              $sql = "select * from r35_tbl WHERE id = 23";
              $result = mysqli_query($conn, $sql);
              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                        echo '<div class="col  border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                            echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                            echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                            echo'<div class="d-flex mt-3">';
                              echo '<div class="text-warning fs-6 me-3">' .$row['carname'] . '</div>'; 
                              echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                            echo'</div>';                                        
                            echo'<div class="d-flex mt-4">';
                              echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                              echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                              echo'</div>';
                        echo '</div>';
              }
             } 
              ?>
           </div>
      </div>
      <!---end r35_4--->  
       <!---r35_5--->  
       <div class="container mt-5">
          <div class="row justify-content-center">
              <?php
                $sql = "select * from r35_tbl WHERE id = 24";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                          echo '<div class="col border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                              echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                              echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                              echo'<div class="d-flex mt-3">';
                                echo '<div class="text-warning fs-6 me-3">' .$row['carname'] . '</div>'; 
                                echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                              echo'</div>';                                        
                              echo'<div class="d-flex mt-4">';
                                echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                                echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                                echo'</div>';
                          echo '</div>';
                }
               }
               $sql = "select * from r35_tbl WHERE id = 25";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                          echo '<div class="col  border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                          echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                          echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                              echo'<div class="d-flex mt-3">';
                                echo '<div class="text-warning fs-6 me-5">' .$row['carname'] . '</div>'; 
                                echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                              echo'</div>';                                        
                              echo'<div class="d-flex mt-4">';
                                echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                                echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                                echo'</div>';
                          echo '</div>';
                }
               }
               $sql = "select * from r35_tbl WHERE id = 26";
               $result = mysqli_query($conn, $sql);
               if(mysqli_num_rows($result) > 0){
                 while($row = mysqli_fetch_assoc($result)){
                         echo '<div class="col  border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                             echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                             echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                             echo'<div class="d-flex mt-3">';
                               echo '<div class="text-warning fs-6 me-3">' .$row['carname'] . '</div>'; 
                               echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                             echo'</div>';                                        
                             echo'<div class="d-flex mt-4">';
                               echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                               echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                               echo'</div>';
                         echo '</div>';
               }
              } 
              $sql = "select * from r35_tbl WHERE id = 27";
              $result = mysqli_query($conn, $sql);
              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                        echo '<div class="col  border border-danger p-3 me-2 text-white shadow-lg rounded-3">';
                            echo '<div><img src="img/'.$row['img'].'" height="100%" width="100%"></div>';
                            echo '<div class="text-warning mt-3 fs-6">' .$row['year'] . '</div>';  
                            echo'<div class="d-flex mt-3">';
                              echo '<div class="text-warning fs-6 me-3">' .$row['carname'] . '</div>'; 
                              echo '<div class="text-warning fs-6 ms-5">' .$row['price'] . '</div>';     
                            echo'</div>';                                        
                            echo'<div class="d-flex mt-4">';
                              echo'<button class="btn btn-outline-danger text-light px-4">Buy Now</button>';
                              echo'<span class="ms-auto pt-2"><button class="btn btn-danger text-light px-3">About</button></span>';
                              echo'</div>';
                        echo '</div>';
              }
             } 
              ?>
           </div>
      </div>
      <!---end r35_5---> 
      <!-- Footer Section -->
      <div class="container-fluid mt-5 ">
      <footer class="bg-white text-dark pt-5 pb-4 shadow-lg">
          <div class="container text-center text-md-start">
              <div class="row">
                  <!-- Social media links -->
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

                  <!-- Footer Links -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
