<!DOCTYPE html>
<html>
<head>
	<title>nav page</title>

	<?php include 'connection.php' ?>
	<?php include 'links.php'?>

	<style>
		*{
			margin:0;
			padding: 0;
		    box-sizing: border-box;
		    font-family: 'Josefin Sans', sans-serif;
		}
		#head{
			font-size: 28px;
			color: tomato;
			animation: head 4s linear infinite;
			overflow: hidden;
			white-space: nowrap;
		}
		@keyframes head{
			0%{width: 0ch;}
			100%{width: 11ch;}
		}
		#menu{
			text-decoration: none;
		}

		ul li a{
			text-decoration: none;
			text-transform: uppercase;
			color: white;
			position: relative;
			padding: 10px;
		}

		ul li a:before{
			content: "";
			position: absolute;
			left: 0;
			top: 70%;
			width: 0px;
			height: .1rem;
			background-color: aqua;
			transition: all 0.5s linear;
		}

		ul li a:hover:before{
			width:100%;
			background-color: white;
		}

		ul li a:hover{
			cursor: pointer;
			color: tomato;
			transition: 0.7s linear;
		}

		

		
	</style>

</head>
<body>

	<div class="bgimg">
		<nav class="navbar navbar-expand-md bg-dark navbar-dark">
			<div class="container">
				<a href="" class="navbar-brand font-weight-bold" id="head">Sparks Bank</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
				<span class="navbar-toggler-icon"> </span>
				</button>

				<div class="collapse navbar-collapse" id="collapsenavbar">
				

				<ul class="navbar-nav ml-auto">
					<li class="nav-item"> <a href="/banking/index.php" class="nav-link text-white p-3" id="menu"> Home </a></li> 
					<li class="nav-item"> <a href="/banking/users.php" class="nav-link text-white p-3" id="menu"> View Customers </a></li> 
					<li class="nav-item"> <a href="/banking/history.php" class="nav-link text-white p-3" id="menu"> Transfer Records </a></li> 
				</ul>

					
				</div>

			</div>
		</nav>
	</div>

</body>
</html>