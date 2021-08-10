
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customers - The Sparks Foundation Bank</title>
    <link rel="stylesheet" href="CSS/table.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <style type="button">
       button:focus {
    outline: none !important;
    }
    </style> 
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
 <?php
     include 'DBCONFIG/config.php';
     $sql = "SELECT * FROM sparksusers";
     $result = mysqli_query($conn,$sql);
 ?>
<?php
   include 'navbar.php';
 ?>
 
    <div align="center" style="background-image: url('bg-4.png'); height: 100%; background-position: center;
    background-repeat: no-repeat; background-size: cover; margin:auto; ">

    <!-- CUSTOMER DETAILS -->
    <h2 class="text-center pt-4" style="font-weight:bold; color: white;">CUSTOMER DETAILS</h2>  
    <table class="content-table" style="margin-bottom:auto;">
        <thead>
          <tr>
            <th scope="col" class="text-center py-2">ACC.NO</th>
            <th scope="col" class="text-center py-2">NAME</th>
            <th scope="col" class="text-center py-2">E-MAIL ID</th>
            <th scope="col" class="text-center py-2">PHONE NO.</th>
            <th scope="col" class="text-center py-2">BALANCE</th>
            <th scope="col" class="text-center py-2">OPERATION</th>
          </tr>
        </thead>
        <tbody>
        <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="text-center py-2"><?php echo $rows['id'] ?></td>
                        <td class="text-center py-2"><?php echo $rows['name']?></td>
                        <td class="text-center py-2"><?php echo $rows['email']?></td>
                        <td class="text-center py-2"><?php echo $rows['phone']?></td>
                        <td class="text-center py-2">₹<?php echo $rows['balance']?></td>
                        <div class="message-wrapper">
                           <div class="container">
                           <td class="text-center"><a href="transact.php?id= <?php echo $rows['id'] ;?>"> <span class="btn message" ><b>TRANSFER</b></span></a></td>
                           </div>
                       </div>
                       
                   </tr>
                <?php
                    }
                ?>
        </tbody>
      
    </div>
    </table>
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
