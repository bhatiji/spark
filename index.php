<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text" href="style.css">
    <link rel="stylesheet" type="text" href="navbar.css">
    <link rel="stylesheet" href="createuser.css">

    <title>Basic Banking System</title>
    <style>
    h1{ position: relative;
    color: #4C4B4B;
    font-weight: bold;
    transition: 0.5s;
    left: 350px;
}
h3{ position: relative;
	color:#2F363F;
	left: 350px;
  top: 15px;
}


button{
	width: 800px;
	 border:none;
	border-radius: 8px;
	 padding: 20px; 
	background:#7B8788; 
	color:white;
	letter-spacing: 1.5px;
	font-size: 20px;
	transition: 0.5s; 
}
button:hover,h1:hover{
	transform: scale(1.1);
}
button:hover{
	background-color:#4C4B4B;
}
.img-fluid {
    max-width: 20%;
    height: auto;
}
.len{
  position: relative;
  width: 100%;
}
h2{
  padding: relative;
	top: 40px;
    
}


 /* user css  */

</style>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  <div class="len">
    
    <div class="container-fluid">
      <!-- Introduction section -->
      <div style="background: rgb(255 255 255 / 94%);" class="row intro py-1">
        <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>Bank of Sparks</h1>
                </div>
              </div>
             
            </div>
            
           
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="User.jpg" alt="user id" class="img-fluid" >
                    <br>
                    <a href="createuser.php"><button class ="bt">Create account</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="Transfer.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button class ="bt">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="History.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button class ="bt">Transaction History</button></a>
                  </div>
                </div>
              </div>
            </div>
             
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>