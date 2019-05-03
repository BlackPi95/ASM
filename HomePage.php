<!DOCTYPE html>
<html>
<head>
	<title>new</title>
</head>
<style>
	.container{
		width: 90%;
		margin: 0 auto;
	}
	.header{
		width: 100%;
		margin: 0 auto;
	}
	.footer{
		width: 100%;
		height: 100px;
		background-color: red;
	}
	.main{
		width: 100%;
		height: 500px;
		background-color: gray;

	}
	.hot{
		width: 100%;
	}
	.image{
		width: 40%;
		float: left;
		padding-left: 20px;
		box-sizing: border-box;
	}
	.image img{
		width: 100%;
	}
	.des{
		width: 60%;
		float: left;
		padding-top: 10px;
		padding-right: 20px;
		padding-left: 20px;
		box-sizing: border-box;
		font-size: 20px;
	}
	div.title{
		background-color: yellow;
		font-size:30px;
		line-height: 40px;
	}
	div.detail{
		background-color: white;
		box-sizing: border-box;
	}
	.separator{
		width: 100%;
		clear:both;
		color:pink;
		padding: 10px 20px;
	}
	.normal{
		width: 100%;
		box-sizing: border-box;
	}
	div.item{
		width: 25%;
		float: left;
		box-sizing: border-box;
	}

	div.itemimage img{
		width: 100%;
	}
	div.imtemtitle{
		background-color: yellow;
	}
	div.itemdetail{
		color:black;
		float:right;
		background-color: white;
		width: 100px;
	}

</style>
<body>
	<div class="container"></div>
	<div class="header"></div>
	<div class="footer"></div>
	<div class="main">
		<div class="hot">
			<div class="image">
				<img src="img/DeGea.jpg">
			</div>
		<div class="des">
			<div class="title">About</div>
			<div class="detail">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</div>
		</div>
	</div>
	<div class="separator">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</div>
	<?php 
		$ilist = array(array('Title','img/DeGea.jpg',aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa),array('Hello','img/DeGea.jpg',aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa),array('asda','img/DeGea.jpg',aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa),array('Tasds','img/DeGea.jpg',aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa))
	?>
	<div class="normal">

		<?php 
			for($i=0;$i<count($ilist);$i++)
			{
				?>

			}
		 ?>
		<div class="item">
			<div class="itemtitle">
				<?=$ilist[$i][0]?>
			</div>
			<div class="itemimage"><img src="<?=$ilist[$i][1]?>"></div>
			<div class="itemdes"><?=$ilist[$i][2]?>></div>
			<div class="itemdetail">detail</div>
		</div>
	</div>
	<?php 
		}
	 ?>
	<div class="footer"></div>
</body>
</html>