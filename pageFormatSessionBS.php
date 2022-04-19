<?php
if(session_status() === PHP_SESSION_NONE) session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title></title>
    <style type="text/css">
    	.mt-2 {
 				 margin-top: 30px !important; 
         color: blue;
						}
			.pb-0 {
				 	padding-bottom: 1px !important; 

			}
			.mt-0 {
				 				 margin-top: 0px !important; 

			}
      hr .style1 {
       border-top: 1px dashed #8c8b8b;
       
      }
      .navbar .nav-item {
          
          font-size: 20px;
          margin: 8px 0;
      }
    </style>
  </head>
  <body>
  	<?php
  	
    function pageHeaderSession($title,$img)
    {
       echo<<<EOT
        <div class="row">
          <img src="$img"  class="img-fluid col-1" >
          <h2 class="mt-10">$title</h2>
        </div>

       <div class="row">
        <nav class="navbar col-6">
          <!-- Navbar content -->
         
              <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="./menu.php">Menu</a>
              <a class="nav-item nav-link" href="./orders.php">Order</a>
              
EOT;
      
              if(!isset($_SESSION['name']))
                echo ' <a class="nav-item nav-link" href="LoginForm.php">Login</a>';
              else
              echo '<a class="nav-item nav-link" href="logout.php">Logout</a>';
           
             echo<<<EOT
                   <a class="nav-item nav-link" href="./signup.php">Signup</a>
              
              
            </nav>
             <a class="nav-item nav-link col-1 offset-5" href="cart.php"><img src="./images/cart.jpg" alt="cart" style="width:42px;height:42px;"></a>
        </div>
        <hr class="style1"/>
EOT;
     }


function sideNavBar(){
echo<<<_END
<h3>About Us</h3>
<a class="nav-item nav-link" href="#">Our Pizza</a>
<a class="nav-item nav-link" href="#">Quality Guarantee</a>
<a class="nav-item nav-link" href="#">Ingredients</a> 
<a class="nav-item nav-link" href="#">Nutritional Info</a>
<a class="nav-item nav-link" href="#">Corporate Responsibility</a> 
<a class="nav-item nav-link" href="#">Our Awards</a>

_END;
}
     function pageFooterSession()
     {
   echo '<a class="nav-item nav-link" href="adminLogin.php">Admin Login</a>';
         
      }

  	?>
    
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>



