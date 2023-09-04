<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e9f64432b6.js" crossorigin="anonymous"></script>
    <title>Welcome page</title>
  </head>
  <body class="bg-light" >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand text-primary mx-2" style="font-size:30px; font-weight:bold;" href="index.php">JobHunt</a>
            <!-- <a href="" class="btn btn-primary">JobHunt</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto" id="navbar">
                <li class="nav-item  mx-1 my-1">
                    <a href="index.php" class="btn btn-outline-primary"><i class="fa fa-house"></i> Home</a>
                </li>
                <li class="nav-item mx-1 my-1">
                    <a href="#service" class="btn btn-outline-primary"><i class="fa fa-gear"></i> Services</a>
                </li>
                <li class="nav-item mx-1 my-1">
                    <a href="#about" class="btn btn-outline-primary"><i class="fa fa-users"></i> About</a>
                </li>
            
                <li class="nav-item mx-1 my-1">
                    <a href="#contact" class="btn btn-outline-primary"><i class="fa fa-phone"></i> Contact Us</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class=" btn btn-outline-primary" aria-current="page" href="signup.php"><i class="fa fa-right-to-bracket "></i> SignIn</a>
                    </li>
            </ul>
            </div>
        </div>
    </nav>

    <!-- services section -->
    <div class="container" id="service">
            <h2 class="text-center my-2" >Our Services</h2>
            <div class="row">
              <!-- Student Cards -->
              <div class="col-md-4">
                <div class="card mb-4">
                  <img src="../images/button1.jpg" class="card-img-top" alt="Profile Picture">
                  <div class="card-body">
                    <h5 class="card-title">Internship and Job getaway</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias officiis, in amet laboriosam impedit fugiat id unde adipisci consequatur maiores!</p>
                    <!-- <a href="../intern-profile/profile.html">
                      <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalJohnDoe">View Profile</button>
                    </a> -->
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card mb-4">
                  <img src="../images/download 1.jpg" class="card-img-top" alt="Profile Picture">
                  <div class="card-body">
                    <h5 class="card-title">Website Design</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita sit, fugiat accusamus vitae eveniet omnis?</p>
                   <!-- <a href="../intern-profile/profile.html">
                     <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalJohnDoe">View Profile</button>
                   </a> -->
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="card mb-4">
                  <img src="../images/button3.jpg" class="card-img-top" alt="Profile Picture">
                  <div class="card-body">
                    <h5 class="card-title">Job/Internship Posting</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero illo obcaecati omnis optio eaque, quaerat, molestiae</p>
                    <!-- <a href="../intern-profile/profile.html">
                      <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalJohnDoe">View Profile</button>
                    </a> -->
                  </div>
                </div>
              </div>
              <!-- Add more student cards as needed -->
            </div>
          </div>

    <!-- about section -->
    <div class="container" id="about">
        <h2 class="text-center my-2">About Us</h2>
      <div class="row p-2">
        <div class="col-md-4" id="image-card">
          <img src="../images/my intern.jpg" alt="" class="img-fluid m-2">
        </div>
        <div class="col-md-8">
          <h2>Why use this platform</h2>
          <ul>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia molestias, praesentium alias veniam nihil nulla.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia molestias, praesentium alias veniam nihil nulla.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia molestias, praesentium alias veniam nihil nulla.</li>
          </ul>
        </div>
      </div>
    </div>

<!-- contact section -->
<div class="container border rounded mt-5" id="contact">
      <div class="text-center">
          <h2>Get in touch</h2>
          <p class="lead">Questions? Do not hesitate to contact us</p>
      </div>
      <div class="row justify-content-center my-5">
          <div class="col-lg-6">
              <form action="">
                  <label for="query" class="text-center">Write a message</label>
                  <textarea name="query" id="query" cols="20" rows="10" class="form-control mt-3"></textarea>
                  <div class="text-center">
                      <button type="submit" class="btn btn-primary my-3 text-white">Send!</button>
                  </div>
                  <div class="text-center">
                      <p>or Contact Admin through</p>
                        <a href="#" class="btn btn-outline-primary"> <i class="fa-brands fa-whatsapp"></i> </a>
                        <a href="#" class="btn btn-outline-primary"> <i class="fa-brands fa-twitter"></i> </a>
                        <a href="#" class="btn btn-outline-primary"> <i class="fa-brands fa-facebook-messenger"></i> </a>
                  </div>
              </form>
          </div>
      </div>
  </div>

    
  <div class="footer mt-2 text-center">
    <footer>
        <p> <span id="year"> </span> © JobHunt. All rights reserved</p>
    </footer>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>