<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="UTF-8">
</head>
<style>
	.container{
		width: 100%;
		height: 100%;
		margin: 0 auto;
		background-color: #FCF6F6;
	}
	
	.header{
		width: 100%;
		height: 50px;

	}
	.nav{
		width: 100%;
		height: 50px;
		background-color: #A7EDFC;
		font-family: calibri;
	}
	.nav ul{
		margin:0px;
		padding:0px;
		list-style: none;
	}
	.nav form input{
		margin-top: 10px;
		height: 30px;
	}
	.nav a{
		color:white;
		font-size: 30px;
		text-decoration: none;
		line-height: 50px;
		padding:0 50px;
		font-weight: bold;

	}
	.nav li{
		float:left;
	}
	.nav li:hover{
		background-color: #C3F4FA;
	}

	.nav form input{
		margin-top: 10px;
		height: 30px;

	}

	.main{
		width: 100%;
		height:100%;
	}

	.Product1{
		width: 98%;
		height: 450px;
		float:right;
		margin-right:15px;
		padding: 20px;
	}
	.Product1 h1{
		width: 100%;
		background-color: #A7EDFC;
		text-align: center;
		padding:10px;
		margin:0px 0px 0px 15px;
		font-family: calibri;
		color: white;
	}

	.item{
		width: 32%;
		float: left;
		padding: 5px;
		box-sizing: border-box;
	}
	
	.image img{
		width: 100%;
		margin-left: 20px;
	}
	.name{
		font-family: calibri;
		text-align:center;
		font-size: 20px;
		margin-left: 20px;
	}

	.price{
		font-family: calibri;
		text-align: center;
		font-size: 25px;
		font-weight: bold;
		margin-left: 20px;
	}
	
	.Product2{
		width: 98%;
		height: 450px;
		float:right;
		margin-right: -60px;
		padding:100px;
	}
	.Product2 h1{
		width: 100%;
		background-color: #A7EDFC;
		text-align: center;
		padding:10px;
		margin:0px 0px 0px 15px;
		font-family: calibri;
		color: white;
	}

	.item{
		width: 32%;
		float: left;
		padding: 5px;
		box-sizing: border-box;
	}
	
	.image img{
		width: 100%;
		margin-left: 20px;
	}
	.name{
		font-family: calibri;
		text-align:center;
		font-size: 20px;
		margin-left: 20px;
	}

	.price{
		font-family: calibri;
		text-align: center;
		font-size: 25px;
		font-weight: bold;
		margin-left: 20px;
	}
	.nav ul li ul{
		color: black;
	}

	.nav ul li ul{
		color: black;
	}

	li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: #A7EDFC;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>
<body>
	<div class ="container">
		<div class = "header">
			<div class="nav">
				<ul>
					<li><a href="HomePage.php">Home</a></li>
					  <li class="dropdown">    <a class="dropbtn">Categories</a>
					  	<div class="dropdown-content">
					  	<?php 
							//including library
							require_once('./dbconnector.php');
							$conn = new DBConnector();
							$sql = "Select * From categories";
							$rows = $conn->runQuery($sql);
							foreach($rows as $r)
							{
							?>
								<a href="CategoryPage.php?CateID=<?=$r['CateID']?>"><?=$r['CateName']?></a>

						<?php
							}
						?>
					</div>
					  </li>
						
					</li>
					<li><a href="Manager.php">Manager</a></li>
					<li><a href="About.php">About</a></li>
					<form action="Search.php">
					<input type="text" name="search" size="60">
					<input type="submit" name="searchbtn" value="Search" placeholder="Search....">
					</form>
				</ul>
			</div>
		</div>
		<div class = "main">
			<div class="Product1">
				<h1>Smartphone</h1>
				<div class = "Smartphone">
					<?php 

						//instance an object DBConnector
						$cn = new DBConnector();
						//call the function of object DBConnector
						$rows = $cn->runQuery('Select * From products where CateID = 1');

						foreach($rows as $r)
						{
					?>

					<div class="item">
						<a href="ShowDetail.php?productID=<?=$r['productID']?>">
							<div class="image"><img src="<?=$r['image']?>"></div>
							<div class="name"><?=$r['productName']?></div>
							<div class="price"><?=$r['price']?></div>
						</a>
					</div>
					<?php
						}
					?>
				</div>
			</div>

			<div class="Product2">
				<h1>Camera</h1>
				<div class = "Camera">
					<?php 

						//instance an object DBConnector
						$cn = new DBConnector();
						//call the function of object DBConnector
						$rows = $cn->runQuery('Select * From products where CateID = 2');

						foreach($rows as $r)
						{
					?>

					<div class="item">
						<a href="ShowDetail.php?productID=<?=$r['productID']?>">
							<div class="image"><img src="<?=$r['image']?>"></div>
							<div class="name"><?=$r['productName']?></div>
							<div class="price"><?=$r['price']?></div>
						</a>
					</div>
					<?php
						}
					?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>