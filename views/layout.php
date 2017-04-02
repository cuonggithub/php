
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=utf8">
<<<<<<< HEAD
		<link rel="stylesheet" type="text/css" href="resource/css/jquery-ui.min.css">
		<link rel="stylesheet" type="text/css" href="resource/css/dhtmlxcalendar.css">
		<link rel="stylesheet" type="text/css" href="resource/css/fonts/font_roboto/roboto.css"/>
=======
>>>>>>> origin/master
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
	<head>
	
	<body>
		<div class="wrap">
			<div class="contain">
				
				<div class="header">
					<a href="index.php?controller=question&action=index">フォーム機能</a>
					&nbsp;&nbsp;
					<a href="index.php?controller=calendar&action=index">カレンダー機能</a>
				</div>
				<br />
				<br />
				<?php require_once('routes.php');?>
			<div>
		</div>
	</body>
	
	<script src="resource/javascript/jquery-3.2.0.min.js"></script>
	<script src="resource/javascript/jquery-ui.min.js"></script>
	<script src="resource/javascript/dhtmlxcalendar.js"></script>
	
	<script>
	  $( function() {
			
			$( "#datepicker" ).datepicker({
				dayNamesShort: ['日', '月', '火', '水', '木', '金', '土'],
				dayNamesMin: ['日', '月', '火', '水', '木', '金', '土'],
				monthNames: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
				monthNamesShort: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
				changeMonth: true,
				changeYear: true,
				yearRange:'-2:+2',
				dateFormat:'yy/mm/dd',
				showMonthAfterYear: true,
				prevText: '＜',
				nextText: '＞',
				yearSuffix: '年',
				altFormat: "yy-mm-dd",
				altField: "#inputdate",
				buttonImage: "",
                buttonImageOnly: false,
			});
	  } );
	  
		var myCalendar;
		
		dhtmlXCalendarObject.prototype.langData["jp"] = {
			dateformat: '%Y/%m/%d',
			hdrformat: '%Y年%F', 
			monthesFNames: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
			monthesSNames: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
			daysFNames: ['日', '月', '火', '水', '木', '金', '土'],
			daysSNames: ['日', '月', '火', '水', '木', '金', '土'],
		};
		
		dhtmlXCalendarObject.prototype.lang = "jp";
		
		
		myCalendar = new dhtmlXCalendarObject("dhtmlXCalendar");
		myCalendar.hideTime();
		
		myCalendar.attachEvent("onClick", function(date, state){
			$('#inputdate1').val(date.getFullYear() + '-' + date.getMonth() + '-' + date.getDate());
		});
  </script>
	
</html>
