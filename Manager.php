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
		height: 150px;
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

	.left{
		width: 200px;
		height: 400px;
		margin:20px 0px 0px 10px;
		float: left;
	}
	.left h1{
		text-align: center;
		background-color: #A7EDFC;
		padding:10px;
		margin:0;
		font-family: calibri;
		color: white;
	}

	.left ul{
		list-style: none;
		margin:10px;
		padding:0;
		line-height: 30px;
	}
	.left a{
		text-decoration: none;
		font-family: calibri;
	}

	.right{
		width: 80%;
		height: 450px;
		float:right;
		margin:20px 20px 0px 0px;
		padding-right: 50px;
	}
	.admin{
		width: 100%;
		height: 40px;
		background-color: #A7EDFC;
		text-align: center;
		padding:10px;
		margin:0px 0px 0px 15px;
		font-family: calibri;
		color: white;
	}
	.admin ul{
		list-style: none;
		margin: 0 auto;
	}
	.admin li{
		float:left;
	}
	.admin a{
		text-decoration: none;
		font-weight: bold;
		color: white;
		font-size: 40px;
		margin-left: 250px;
	}

	.footer{
		clear: both;
		width: 100%;
		height: 40px;
		text-align: center;
		margin:0;
	}
	.footer h3{
		font-size: 20px;
		font-family: calibri;	
	}
	.item{
		width: 25%;
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
	</div>
</body>
</html>