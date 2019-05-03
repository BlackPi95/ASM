.<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="UTF-8">
</head>
<style>
.container{
		width: 100%;
		height: 700px;
		margin: 0 auto;
		background-color: #FCF6F6;
	}
	
	.header{
		width: 100%;
		height: 70px;
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

	.main{
		width: 100%;
		height: 500px;
	}

	.right{
		width: 50%;
		height: 450px;
		float:right;
		margin-right: 300px;
	}

	
	.image img{
		width: 100%;
		margin-left: 20px;
	}
	.name{
		font-family: calibri;
		font-size: 20px;
		margin-left: 20px;
	}

	.price{
		font-family: calibri;
		font-size: 25px;
		font-weight: bold;
		margin-left: 20px;
	}
	.dropdown {
  position: relative;
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
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

	.nav ul li ul{
		color: black;
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
                     $CateID=$_GET['CateID'];
                     $sql="Select * from categories where CateID = $CateID";	
                     $rows = $cn->runQuery($sql);                    		
                     foreach ($rows as $r) {
			         ?>	
				<form action="SubmitCate.php?CateID=<?=$r['CateID']?>" method="POST">
					<table width="100%">
						<tr>
							<td colspan="2" style="width: 100%;
							font-size:30px;
							font-weight: bold;
							background-color: #A7EDFC;
							text-align: center;
							padding:10px;
							margin:0px 0px 10px 15px;
							font-family: calibri;
							color: white;">Edit Categories</td>
						</tr>
						<tr>
							<td width="45%" style="text-align: right;">ID</td>
							<td><input type="text" name="CateID" value="<?=$r['CateID']?>"></td>
						</tr>
						<tr>
							<td width="45%" style="text-align: right;">Name</td>
							<td><input type="text" name="CateName"  value="<?=$r['CateName']?>"></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align: center;"><input type="Submit" name="Submit" id="Submit" value ="Submit"></td>
						</tr>
					</table>
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