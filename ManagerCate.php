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
		margin-top:73px;
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
		font-family: calibri;
	}
	.item th{
		font-size:30px;
	}
	.item tr td{
		text-align:center;
		border:1px solid black;
		font-size:20px;
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
						if(isset($_POST['CateID']))
						{
							$CateID = $_POST['CateID'];
							$CateName = $_POST['CateName'];
							$STT = $_POST['STT'];
							$sql = "Insert Into categories(CateID,CateName,STT) values ('" . $CateID . "','" . $CateName . "','" . $STT . "')";
							$conn = new DBConnector();
							$conn->execStatement($sql);
							if($conn === true)
							{
								echo "New category has been added successfully!";
							}
						}
						?>
						<form action="" method="POST">

							ID: <input type="text" name="CateID"><br>
							Name: <input type="text" name="CateName"> <br>
							STT: <input type="text" name="STT">
							</select><br>
							<input type="Submit" value ="Add Categories">
						</form>
					</div>
			</div>
			<div class="right">
				<h1>Manager Categories</h1>
				<div class = "Prod">
					<table class ="item">
							<tr>
								<th>ID</th>
								<th>Name</th>
							</tr>
					<?php 
							$mysqli = new mysqli("localhost","root","","asm2");
							$query = $mysqli -> query("Select * From categories");
							while($rows=$query->fetch_assoc()){
					?>
							<tr>
								<td><?php echo $rows['CateID']?></td>
								<td><?php echo $rows['CateName']?></td>
								<td><a href="editCate.php?CateID=<?=$rows['CateID']?>">Edit</a><td>
								<td><a href="deleteCate.php?CateID=<?=$rows['CateID']?>">Delete</a><td>
							</tr>

					<?php
						}
					?>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>