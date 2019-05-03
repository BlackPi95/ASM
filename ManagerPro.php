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

	.main{
		width: 100%;
		height: 500px;
	}
	.left{
		width: 30%;
		height: 100%;
		float: left;
		margin-top:80px;
	}
	.left form{
		font-family: calibri;
		text-align: left;
		line-height: 30px;
		margin-left: 40px;
	}
	.left input{
		margin-left:30px;
		margin-top: 10px;
	}
	.right {
		width: 70%;
		height: 450px;
		float:right;
		margin: 0px;
		padding: 0px;
	}

	.right h1{
		text-align: center;
		font-family: calibri;
		font-size: 30px;
	}

	.item{
		width: 100%;
		height: 100%;
		padding: 5px;
		margin-top: 20px;
		border:1px solid black;
	}
	
	.item tr td{
		text-align:center;
		border:1px solid black;
	}
	.nav ul li ul{
		color: black;
	}
	.btnAdd{
		text-align: center;
	}
	.btnAdd a{
		width: 150px;
		text-decoration: none;
		font-family: Calibri;
		font-weight: bold;
		background-color: #F8DE4F;
		line-height: 40px;
		border-radius: 5px;
		font-size: 20px;
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
			<div class="left">
				<div class="action">
				<?php 
				require_once('./dbconnector.php');
				if(isset($_POST['productID']))
				{
					$productID = $_POST['productID'];
					$productName = $_POST['productName'];
					$image = $_POST['image'];
					$describe = $_POST['describe'];
					$CateID = $_POST['CateID'];
					$sql = "Insert into products(productID,productName,image,describe,CateID) values ('" . $productID . "','" . $productName . "','" . $image	. "','" .	$describe ."',". $CateID .")";
					$conn = new DBConnector();
					$conn->execStatement($sql);
				}
				?>
				<form action="" method="POST">	

					ID: <input type="text" name="productID" size="10"><br>
					Name: <input type="text" name="productName" size="20"> <br>
					Image: <input type="file" name="image"> <br>
					Price: <input type="text" name="price" size="20"> <br>
					Describe: <input type="text" name="describe" size="20"> <br>
					Category:  
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
					</select><br>
					<input type="Submit" value ="Add Product">
				</form>
				</div>
			</div>

			<div class="right">
				<h1>Manager Product</h1>
				<div class = "Prod">
						<table class ="item">
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Image</th>
								<th>Price</th>
								<th>Describe</th>
							</tr>
							<?php 
								$mysqli = new mysqli("localhost","root","","asm2");
								$query = $mysqli -> query("Select * From products");
								while($rows=$query->fetch_assoc()){
							?>
							<tr>
								<td><?php echo $rows['productID']?></td>
								<td><?php echo $rows['productName']?></td>
								<td><?php echo $rows['image']?></td>
								<td><?php echo $rows['price']?></td>
								<td><?php echo $rows['describe']?></td>
								<td><a href="editPro.php?productID=<?=$rows['productID']?>">Edit</a><td>
								<td><a href="deletePro.php?productID=<?=$rows['productID']?>">Delete</a><td>
							</tr>

					<?php
						}
					?>
					</table>
					</div>
				</div>
		</div>
	</div>
</body>
</html>