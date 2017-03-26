
<html>
	<head>
		<style>
			.wrap{
				width:100%;
				text-align:center;
				margin:0px;
				padding:0px;
			}
			
			.contain{
				width:950px;
				margin:auto;
				text-align:left;
			}
			
			.list{
				border-collapse: collapse;
				border:1px solid gray;
				width:100%;
			}
			.list th, .list td{
				border:1px solid gray;
			}
			.error{
				color:red;
				margin-left:20px;
			}
			.tbNew{
				border-collapse: collapse;
				border:none;
				width:100%;
			}
			.tbNew th, .tbNew td{
				border:none;
				text-align:left;
			}
			
		</style>
		<META http-equiv="Content-Type" contentType="text/html; charset=EUC-JP" >
	<head>
	
	<body>
		<div class="wrap">
			<div class="contain">
				
				<div class="header">
					<a href="index.php?controller=question&action=index">フォーム機能</a>
					&nbsp;&nbsp;
					<a href="#">カレンダー機能</a>
				</div>
				<br />
				<br />
				<?php require_once('routes.php');?>
			<div>
		</div>
	</body>
</html>


