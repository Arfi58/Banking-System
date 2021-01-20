<!DOCTYPE html>
<html>
<head>
	<title>home page</title>

	<?php include 'connection.php'?>
	<?php include 'links.php'?>
	<?php include 'navbar.php'?>


	<style>
		*{
			margin: 0;
			padding:0;
			box-sizing: border-box;
		}
		h1{
			font-size: 40px;
			margin-top: 60px;
		}
		span{
			color: purple;
			text-transform: uppercase;

		}
		p{
			font-size: 22px;
			padding-top: 20px;
		}
		a.btn{
			font-size: 15px;
			margin: 30px 10px;
			width: 150px;
			padding: 10px;
			border-radius: 20px;
			word-spacing: 3px;
			transition: 0.9 linear;
		}
		a.btn-first{
			background: darkorange;
			color: white;
		}
		a.btn-second{
			background: transparent;
			color: #333;
			border: 1px solid darkorange;
		}
		a.btn:hover{
			background: darkorange;
			border: none;
			color: #fff;
			box-shadow: 5px 5px 10px #999;
			transition: 0.3s;
		}
		.footer{
			margin-top: 120px;
			text-align: center;
		}
		.footer a{
			height: 100px;
			width: 100px;
			background-color: #f5f6fa;
		}
		i{
			padding: 8px;
			transition: all 0.3s linear;
		}
		.fa-instagram{ color: #e84393; }
		.fa-twitter{ color: #0096e6; }
		.fa-linkedin{ color: #0097e6; }
		.fa-youtube{ color: #e84118; }



	</style>

</head>
<body>

  <div class="container">
  	<div class="row">
  		<div class="col-sm-6 banner-info">
  			<h1> Welcome to the <br><span>Sparks Bank</span><br></h1>
  			<p>Your faithful and friendly financial partner</p>
  			<a href="/banking/users.php" class="btn btn-first"> View Customers</a>
  			<a href="/banking/history.php" class="btn btn-second"> Transfer History</a>
  		</div>
  		<div class="col-sm-6 banner-image">
  			<img src="image1.jpg" class="img-fluid">
  			
  		</div>
  		
  	</div>
  </div>
  	
  <div class="footer">
  	<h5> Copyright © 2021, designed by Arfi Azim as intern of The Sparks Foundation</h5>

  	<a href=""> <i class="fa fa-2x fa-facebook"></i></a>
  	<a href=""> <i class="fa fa-2x fa-twitter"></i></a>
  	<a href=""> <i class="fa fa-2x fa-instagram"></i></a>
  	<a href="https://www.linkedin.com/in/arfi-azim-49b0ba18b/" target="_blank"> <i class="fa fa-2x fa-linkedin"></i></a>
  	<a href=""> <i class="fa fa-2x fa-youtube"></i></a>
  	
  </div>

</body>
</html>