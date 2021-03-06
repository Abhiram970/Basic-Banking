<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Banking System </title>
    <link rel="shortcut icon" type="image/x-icon" href="images/icons8-internet.gif">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href = "styles.css">
</head>
<body class="b1">
    <div class="f1"> 
        <nav class="navbar navbar-expand-lg navbar-dark">
            <img src="images/sec.png" class="i1" width="70" height="70"> &nbsp;&nbsp;
            <a class="navbar-brand correctness h12" ref="h"> Banking System </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item f4">
                  <a class="nav-link hover-underline-animation" style="color: white;" href="index.html">Home</a>
                </li>
                <li class="nav-item f4">
                  <a class="nav-link hover-underline-animation" style="color: white;" href="cus.php"> View Customers </a>
                </li>
                <li class="nav-item f4">
                  <a class="nav-link hover-underline-animation" style="color: white;" href="tranhis.php">Transaction History</a>
                </li>
                <li class="nav-item f4">
                  <a class="nav-link hover-underline-animation" style="color: white;" href="maketran.html">Make Transaction</a>
                </li>
                <li class="nav-item f4">
                  <a class="nav-link hover-underline-animation" style="color: white;" href="contactus.html">Contact Us</a>
                </li>
              </ul>
            </div>
          </nav>
    </div>
    <div class="d2" id = "Aboutus">
      <div class="header-content">
        <div class="left-header">
            <div class="image">
                <img src="images/cus2.png" style="height: 300px; width:500px; margin: 80px 0px 0px 50px;" class="image2" alt="">
            </div>
        </div>
        <div class="right-header" style="padding-top: 120px; color: white;">
            <div style = "display:flex; flex-direction:row;">
                <h1 class="name">
                    Username :  
                </h1>
                <h1 class="name2" style = "padding-top:10px; padding-left:10px;">
                    <?php echo $_GET['name']; ?>
                </h1> 
            </div>
            <p style = "font-size:1.5rem; position:relative; bottom:15px;">
                <?php 
                    $name = $_GET['name'];
                    include 'connect.php';
                    $query = "SELECT * FROM customers WHERE Name='$name'";
                    $result = mysqli_query($conn, $query);
                    while( $rows = mysqli_fetch_assoc($result) )
                    {
                        echo "Amount : " . $rows['Amount'];
                        echo "<br>";
                        echo "Email : " . $rows['Email'];
                        echo "<br>";
                        echo "Phone Number : " . $rows['phone'];
                        echo "<br>";
                    }
                ?>
            </p>  
            <a href="cus.php" class="btn btn-info" onclick>Return to view all customers </a>
        </div>
    </div>
    </div>
    <footer id="footer">
      <div class="buttons">
        <i class="fab fa-twitter fa-3x button2" onclick="location.href = 'https://twitter.com/Abhiram32964286';"></i>&nbsp;&nbsp;&nbsp;
        <i class="fab fa-facebook fa-3x button2" onclick="location.href = 'https://www.facebook.com/abhiram.pvabhiram/';"></i>&nbsp;&nbsp;&nbsp;
        <i class="fab fa-instagram fa-3x button2" onclick="location.href = 'https://www.instagram.com/p.v.abhiram/';"></i>&nbsp;&nbsp;&nbsp;
        <i class="fab fa-github fa-3x button2" onclick="location.href = 'https://github.com/Abhiram970';"></i>&nbsp;&nbsp;&nbsp;
      </div>
      <br><br>
      <p class="p2" style="font-size: 25px;">?? Copyright 2022 PV Abhiram </p>
    </footer>
    <script src = "index.js"></script>
</body>
</html>