.<!DOCTYPE html>
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

	.right {
		width: 50%;
		height: 450px;
		float:right;
		margin-right:300px;
		padding: 20px;
	}
	.right h1{
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
	table tr td{
		font-family: calibri;
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
					  
					<li class="dropdown">    <a class="dropbtn">Manager</a>
					  	<div class="dropdown-content">
					  		  <a href="ManagerCate.php">Categories</a>
							  <a href="ManagerPro.php">Products</a>
						</div>
					  </li>
				</ul>
			</div>
		</div>
		<div class = "main">
			
			<div class="right">
				<div class = "Prod">
					<div class="action">
					<?php 
			         require_once('./dbconnector.php');
                     $cn = new DBConnector();
                     $productID=$_GET['productID'];
                     $sql="Select * from products where productID = $productID";	
                     $rows = $cn->runQuery($sql);                    		
                     foreach ($rows as $r) {
			         ?>	
				<form action="SubmitPro.php?productID=<?=$r['productID']?>" method="POST">
					<table width="100%">
						<tr><td colspan="2" style="width: 100%;
							font-size:30px;
							font-weight: bold;
							background-color: #A7EDFC;
							text-align: center;
							padding:10px;
							margin:0px 0px 10px 15px;
							font-family: calibri;
							color: white;">Edit Products</td>
						</tr>
					<tr>
						<td width="45%" style="text-align: right;">ID</td>
						<td><input type="text" name="productID" value="<?=$r['productID']?>"></td>
					</tr>
					<tr>
						<td width="45%" style="text-align: right;">Name</td>
						<td><input type="text" name="productName"  value="<?=$r['productName']?>"></td>
					</tr>
					<tr>
						<td width="45%" style="text-align: right;">Image</td>
						<td><input type="file" name="image"><img src="<?=$r['image']?>"></td>
					</tr>
					<tr>
						<td width="45%" style="text-align: right;">Price</td>
						<td><input type="text" name="price"  value="<?=$r['price']?>"></td>
					</tr>
					<tr>
						<td width="45%" style="text-align: right;">Describe</td>
						<td><input type="text" name="describe"  value="<?=$r['describe']?>"></td>
					</tr>
					<tr>
						<td width="45%" style="text-align: right;">Cate ID</td>
						<td>  
					<select name="CateID">
				<?php 
				$conn = new DBConnector();
				$sql = "Select * From categories";
				$rows = $conn->runQuery($sql);
				foreach($rows as $r)
				{
					?>
						<option value="<?=$r['CateID']?>"><?=$r['CateName']?></option>
					<?php
				}
				?>
					</select></td></tr>
					
					<tr>
						<td colspan="2" style="text-align: center;"><input type="Submit" name="Submit" id="Submit" value ="Submit"></td>
					</tr>

				</form>
				 <?php
				     }
				     ?>	
				</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>