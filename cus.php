<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
  <title>Customer Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href = "styles.css">
</head>
<style>
table, th, td {
  border: 1px solid black;
  padding: 2px;
}
table {
  border-spacing: 10px;
}
.container{
  padding-left : 60px;
  padding-right : 60px;
}
</style>
<body>
 <section>
 <div class="f3"> 
        <nav class="navbar navbar-expand-lg navbar-dark">
            <img src="images/sec.png" class="i1" width="70" height="70"> &nbsp;&nbsp;
            <a class="navbar-brand correctness" style = "font-size: 30px; color: black; position: relative; left: 30px; font-family: 'Roboto', sans-serif;" ref="h"> Banking System </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item f4">
                  <a class="nav-link hover-underline-animation" style="color: black;" href="index.html">Home</a>
                </li>
                <li class="nav-item f4">
                  <a class="nav-link hover-underline-animation" style="color: black;" href="cus.php"> View Customers </a>
                </li>
                <li class="nav-item f4">
                  <a class="nav-link hover-underline-animation" style="color: black;" href="tranhis.php">Transaction History</a>
                </li>
                <li class="nav-item f4">
                  <a class="nav-link hover-underline-animation" style="color: black;" href="maketran.html">Make Transaction</a>
                </li>
                <li class="nav-item f4">
                  <a class="nav-link hover-underline-animation" style="color:black;" href="contactus.html">Contact Us</a>
                </li>
              </ul>
            </div>
          </nav>
    </div>

<body>

 <div class="container"> 
<main id="main"class="main">

<div class="container bg-white shadow">
    <div class="py-5 mt-5"> 
    <h4 class="text-center pb-3">Customer Details</h4>
    <div class="table-responsive">
    <table class="table-hover text-center"style="width:100%">
    <tr class="bg-dark text-white">
        <th>S.No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php 
    include 'connect.php';
    $query = "select * from customers";
    $result = mysqli_query($conn, $query);
    $i = 1;
    if( mysqli_num_rows($result) > 0)
    {
      while( $rows = mysqli_fetch_assoc($result) )

        {
             echo "<tr>
                    <th scope='row'>".$i ."</th>
                    <td>".$rows['Name']."</td>
                    <td>".$rows['Email']."</td>
                    <td><a href='view.php?name=".$rows['Name']."'><button type='button' class='btn btn-primary btn-sm'>View all details of customer</button></a></td>
                  </tr>";
          $i++;
        }
      }
      else{
        echo "<script>alert('No data found in table!');</script>";
      }
    ?>
     </tr>
    </table>
  </div>
   
    </div>
</div>

</main>
                <br><br><br><br>
</div>

  <footer id="footer">
      <div class="buttons">
        <i class="fab fa-twitter fa-3x button2" onclick="location.href = 'https://twitter.com/Abhiram32964286';"></i>&nbsp;&nbsp;&nbsp;
        <i class="fab fa-facebook fa-3x button2" onclick="location.href = 'https://www.facebook.com/abhiram.pvabhiram/';"></i>&nbsp;&nbsp;&nbsp;
        <i class="fab fa-instagram fa-3x button2" onclick="location.href = 'https://www.instagram.com/p.v.abhiram/';"></i>&nbsp;&nbsp;&nbsp;
        <i class="fab fa-github fa-3x button2" onclick="location.href = 'https://github.com/Abhiram970';"></i>&nbsp;&nbsp;&nbsp;
      </div>
      <br><br>
      <p class="p2" style="font-size: 25px;">© Copyright 2022 PV Abhiram </p>
    </footer>
 

</body>

</html>