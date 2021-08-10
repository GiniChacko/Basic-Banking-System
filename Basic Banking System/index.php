<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>TSFB - The Sparks Foundation Bank</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/footer.css">

</head>
<body >

<header>

  <!-- NAVBAR -->
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg" style="background-color: black;">
        <a class="navbar-brand" href="index.php" style="font-weight: bold;" >
          <i class="fas fa-university fa-2x mx-3" style="color:white;"></i>TSFB - The Sparks Foundation Bank</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto text-right">
            <li class="nav-item">
              <a class="nav-link active-home" href="index.php" style="font-weight:bold;">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#foot" style="font-weight:bold;">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#contact" style="font-weight:bold;">CONTACT US</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    
    <!-- HOME PAGE-->
    <div class="main" >
    <div class="container text-center" >
      <div class="row">
        <div class="col-md-7 col-sm-12  text-white">
          <h1>THE<br>SPARKS FOUNDATION BANK</h1>
          <p>
           WE LIVE WHERE YOU LIVE. YOUR IDEAL BANKING ASSOCIATE
          </p>
          <a href="#service"><button class="btn btn-light px-5 py-2 primary-btn">LET'S GET STARTED</button></a>
        </div>
      <div class="col-md-5 col-sm-12 h-25">
        <img class="responsive" src="images/bank.png" alt="SFB" style="opacity:0.7;"/>
    </div>
    </div>
</div>
</div>
</header>

<!-- SERVICES -->
<section class="service" id="service"> 
  <div class="container">
    <h2 class="title">THE SPARKS FOUNDATION BANK</h2>
    <p class="subtitle">WHAT WOULD YOU LIKE TO VIEW</p>
      <div class="row offset-md-0">
        <div class="col-md-6">
          <a href="history.php" style="text-decoration:none; color:black;">
            <div class="service-box">
              <i class="fa fa-history fa-5x" style="margin-bottom:50px"></i>
              <h5>CLICK HERE TO VIEW</h5>
              <h2><b style="color:black;">TRANSACTION HISTORY</b></h2>
              <p>Contains the records of every transaction done. Transaction History 
                would have the details which include the sender's and receiver's name, 
                the amount that is transfered and also the date and time of the tranaction done</p>
              <i class="fa fa-arrow-right"></i>
            </div>
          </a>
        </div>
        <div class="col-md-6">
          <a href="usertable.php" style="text-decoration:none; color:black;">
            <div class="service-box">
              <i class="fa fa-users fa-5x" aria-hidden="true"></i>
              <h5>CLICK HERE TO </h5>
              <h2><b style="color:black;">VIEW CUSTOMERS</b></h2>
              <p>Contains the records of all the customers having account in our bank. View Customers 
                would have the details which include the C.No, name, e-mail, phone, balance and also you 
              can transfer your money</p>
              <i class="fa fa-arrow-right"></i>
            </div>
          </a>
        </div> 
  </div>
</div>
</section>

 <!--CONTACT US-->
 <section class="contactus" id="contact">
        <div class="container headings text-center">
            <h1 class="center" style="font-weight: bold;text-align: center; color:linen;">CONTACT US</h1>
            <p style="color:linen; font-weight:bold;">We're Here To Help And Answer Any Questions You Might Have.We Look Forward To Hearing From You</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offet-md-2-col col-1">
                    <form>
                        <div class="form-group">  
                          <input type="text" class="form-control" placeholder="Enter name" id="username" required autocomplete="off">
                        </div>
                            <div class="form-group">
                              <input type="email" class="form-control" placeholder="Enter email" id="email" required autocomplete="off">
                            </div>
                                <div class="form-group">
                                  <input type="number" class="form-control" placeholder="Enter mobile number" id="mobile" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="comment" style="color:linen; font-weight: bold;">Comment:</label>
                                    <textarea class="form-control" rows="4" id="comment" placeholder="Your Comments"></textarea>
                                  </div>
                                  <div class="formbutton" style="display: flex;justify-content: center;">
                        <button type="submit" >Submit</button></div>
                      </form>
                </div>
            </div>
        </div>
       </section>    

<!-- ABOUT US -->
<footer id="foot">
  <div class="container-fluid p-0">
    <div class="row text-left">
      <div class="col-md-5 col-sm-5">
        <p class="pt-4 text-muted">Copyright ©2021 All rights reserved | This website is made by
          <span>GINI CHACKO - THE SPARKS FOUNDATION</span>
        </p>
      </div>
      <div class="col-md-7 col-sm-12" style="text-align: right;">
        <h4 class="text-light">Follow Us</h4>
        <p class="text-muted">Let us be social</p>
        <div class="column text-light">
          <a href="https://github.com/GiniChacko"><i class="fab fa-github"></i>
          <a href="#"><i class="fab fa-instagram" style="margin-left:15px;"></i></a>
          <a href="https://www.linkedin.com/in/gini-chacko-a105b11a3/" style="margin-left:15px;"><i class="fab fa-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>
 </footer>
</body>
</html>