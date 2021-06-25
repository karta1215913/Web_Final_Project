<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>佶園伴手禮商品分類</title>

		<link rel="stylesheet" href="https://cms.cdn.91app.com/theme/0/master_b8da342/css/desktop.default.css"> 
		<link rel='stylesheet' href='https://cms.cdn.91app.com/contents/fonts/font-awesome.css' />
		<link rel='stylesheet' href='https://cms.cdn.91app.com/contents/icons/default/icon91.css?master_b8da342' /> 
		<link rel='stylesheet' href='https://cms.cdn.91app.com/static/css/style.css?master_b8da342' /> 

	</head>

	<body>

		<div id="root">
            <div class="container-component">
                <div class="layout-header">
                    <div style="min-height:1px">
                        <header class="headerA">
                            <div class="headerA__top headerA__top--fix" style="background-color:#cac848">
                                <div class="headerA__wrapper">
                                    <div class="headerA__inner-wrapper">
                                        <div class="headerA__logo logo-container">
                                            <img alt="佶緣伴手禮" class="logo-img" src="http://25.111.70.70/Web_Final_Project/public/item/logo.jpg">
                                        </div>
                                        <nav class="headerA__nav-menu nav-menu">
                                            <ul class="headerA__nav-menu-sub nav-menu-ul"></ul>
                                            <div class="headerA__nav-menu-main">
                                                <ul class="nav-menu-ul">
                                                    <li class="nav-menu-li">
                                                        <a class="nav-menu-link" href="http://25.111.70.70/Web_Final_Project/public/itemInformation.php" style="color:#000000">
                                                        <h4 class="nav-menu-title">商品分類</h4></a>
                                                        <i></i>
                                                    </li>
                                                    <li class="nav-menu-li">
                                                        <a class="nav-menu-link" href="http://25.111.70.70/Web_Final_Project/public/storeInformation.php" style="color:#000000">
                                                        <h4 class="nav-menu-title">店家資訊</h4></a>
                                                    </li>
                                                    <li class="nav-menu-li">
                                                        <a class="nav-menu-link" href="http://25.111.70.70/Web_Final_Project/public/login" style="color:#000000">
                                                        <h4 class="nav-menu-title">會員加入</h4></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
						</header>
					</div>
				</div>
			</div>
		</div>

		<style type="text/css">
		#sitebody 
		{
			width: 1400px ;
			margin: 0 auto;
			font-size: 20px;
			font-weight: bold;
		}
		#header 
		{
			background-color: #FFD4D4;
			height: 80px;
			text-align: center;
			line-height: 80px;
		}
		#sidebar_left 
		{
			background-color: #FFECC9;
			width: 200px;
			height: 1500px;
			text-align: center;
			line-height: 60px;
			float: left;
		}
		#sidebar_right 
		{
			background-color: #FFECC9;
			width: 200px;
			height: 1500px;
			text-align: center;
			line-height: 400px;
			float: right;
		}
		#content 
		{
			margin-left: 120px;
			margin-right: 120px;
			height: 1500px;
			text-align: left;
			line-height: 50px;
		}
		#footer 
		{
			clear: both;
			background-color: #FFD4D4;
			height: 80px;
			text-align: center;
			line-height: 80px;
		}
		</style>

		<div id="sitebody">	　
			<div id="header">
				~~~ 佶緣伴手禮歡迎您的光臨 ~~~
			</div>　

			<div id="sidebar_left">
				<ul>
					<li>
						<a href="http://25.111.70.70/Web_Final_Project/public/itemInformation_1.php">瓜瓜園商品</a>
					</li>

					<li>
						<a href="http://25.111.70.70/Web_Final_Project/public/itemInformation_2.php">各農會商品</a>
					</li>

					<li>
						<a href="http://25.111.70.70/Web_Final_Project/public/itemInformation_3.php">其他商品</a>
					</li>

				</ul>

			</div>　

			<div id="sidebar_right">
				
			</div>　

			<div id="content">
				<?php
					ini_set('display_errors', '1');
					error_reporting(E_ALL);

					$db_link = mysqli_connect("25.111.70.70", "web", "410528737", "web");

					$sql_query = "SELECT * FROM `items`";
					$result = mysqli_query($db_link, $sql_query);
					$fieldinfo = mysqli_fetch_fields($result);

					//$data_name = array();
					//$data_price = array();
					$index = 1;
					while($row = mysqli_fetch_assoc($result))
					{
						//array_push($data_name, $row["item_name"]);
						//array_push($data_price, $row["item_price"]);

						$n = $row["item_id"];
                        if($n == 3)
                        {
                            $link = '"http://25.111.70.70/Web_Final_Project/public/item_html/item_'.$index.'.html"';
						    echo "<ul><li>";
						    echo "<a href=".$link.">".$row["item_name"]."</a>";
						    echo "</ul></li>";

							$index++;
                        }
                        else 
						{
							$index++;
							continue;
						}
					}

					mysqli_close($db_link);
				?>
			</div>　

			<div id="footer">
				~~~ 沒有其他商品囉 ~~~
			</div>
			
		</div>

	</body>

</html>
