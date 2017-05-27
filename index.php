<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
			.circle {
			width: auto;
			height: 23px;
			text-align:top;
			float: right;
			background: #ffff00;
			color: #fff;
			color: black;
			padding-top: 3px;
			margin-right: -15px;
			margin-top: -10px;
			border-bottom-left-radius: 500%;
			font-size: 11px;
			padding-left: 7px;
			padding-right: 7px;
			}
			
			.panel_heading_bg {
			background-color: #122c5f !important;
			color: white !important;
			}
			
		</style>
	</head>
	
	<body>
		<div class="container">
			<h2 class="text-center"><b style="color:red;">;</b> <i>Developrs Guide</i><b style="color:green;"> ;</b></h2>
			<div id="promo-wrapper internetissue" style="display:none">
				<section id="promo">
					<h2>No Internet Connection</h2>
					<a class="button">Try Again</a>
				</section>
			</div>
			<div class="panel-group" id="accordionMain">
				<?php	/* HTML */ ?>
				<div class="panel panel-default"  >  
					<div class="panel-heading panel_heading_bg" style="cursor:pointer" data-toggle="collapse" data-parent="#accordionMain" href="#collapseHTML"> 
						<h4 class="panel-title "><a><span class="circle"><b>H</b></span>HTML</a> </h4> 
					</div>
					<div id="collapseHTML" class="panel-collapse collapse in " style="cursor:pointer"> 
						<div class="panel-body ">
							<div class="panel-group" id="accordionHTML">
								<div class="panel panel-default" data-toggle="collapse" data-parent="#accordionHTML" href="#collapseHTML1" >  <div class="panel-heading panel_heading_bg" style="cursor:pointer"> <h4 class="panel-title "><a><span class="circle"><b>1</b></span>question1</a> </h4> </div> <div id="collapseHTML1" class="panel-collapse collapse '+collap+' " style="cursor:pointer"> <div class="panel-body ">answer1</div> </div> </div>
								
								<div class="panel panel-default" data-toggle="collapse" data-parent="#accordionHTML" href="#collapseHTML2" >  <div class="panel-heading panel_heading_bg" style="cursor:pointer"> <h4 class="panel-title "><a><span class="circle"><b>2</b></span>question2</a> </h4> </div> <div id="collapseHTML2" class="panel-collapse collapse '+collap+' " style="cursor:pointer"> <div class="panel-body ">answer2</div> </div> </div> 
							</div> 
						</div> 
					</div> 
				</div>
				<?php	/* HTML  END */ ?>
				
				<?php	/* PHP */ ?>
				<div class="panel panel-default" >  
					<div  data-toggle="collapse" data-parent="#accordionMain" href="#collapsePHP" class="panel-heading panel_heading_bg" style="cursor:pointer"> <h4 class="panel-title "><a><span class="circle"><b>P</b></span>PHP</a> </h4> </div>
					<div id="collapsePHP" class="panel-collapse collapse " style="cursor:pointer"> 
						<div class="panel-body ">
							<div class="panel-group" id="accordionPHP">
								<div class="panel panel-default" data-toggle="collapse" data-parent="#accordionPHP" href="#collapsePHP1" >  <div class="panel-heading panel_heading_bg" style="cursor:pointer"> <h4 class="panel-title "><a><span class="circle"><b>1</b></span>question1</a> </h4> </div> <div id="collapsePHP1" class="panel-collapse collapse '+collap+' " style="cursor:pointer"> <div class="panel-body ">answer1</div> </div> </div>
								
								<div class="panel panel-default" data-toggle="collapse" data-parent="#accordionPHP" href="#collapsePHP2" >  <div class="panel-heading panel_heading_bg" style="cursor:pointer"> <h4 class="panel-title "><a><span class="circle"><b>2</b></span>question2</a> </h4> </div> <div id="collapsePHP2" class="panel-collapse collapse '+collap+' " style="cursor:pointer"> <div class="panel-body ">answer2</div> </div> </div>
							</div> 
						</div>
					</div>
				</div>
				<?php	/* PHP  END */ ?>
				
				<?php	/* JAVASCRIPT */ ?>
				<div class="panel panel-default" >  
					<div  data-toggle="collapse" data-parent="#accordionMain" href="#collapseJavaScript" class="panel-heading panel_heading_bg" style="cursor:pointer"> <h4 class="panel-title "><a><span class="circle"><b>JS</b></span>JAVASCRIPT</a> </h4> </div>
					<div id="collapseJavaScript" class="panel-collapse collapse " style="cursor:pointer"> 
						<div class="panel-body ">
							<div class="panel-group" id="accordionJavaScript">
								<div class="panel panel-default" data-toggle="collapse" data-parent="#accordionJavaScript" href="#collapseJavaScript1" >  <div class="panel-heading panel_heading_bg" style="cursor:pointer"> <h4 class="panel-title "><a><span class="circle"><b>1</b></span>question1</a> </h4> </div> <div id="collapseJavaScript1" class="panel-collapse collapse '+collap+' " style="cursor:pointer"> <div class="panel-body ">answer1</div> </div> </div>
								
								<div class="panel panel-default" data-toggle="collapse" data-parent="#accordionJavaScript" href="#collapseJavaScript2" >  <div class="panel-heading panel_heading_bg" style="cursor:pointer"> <h4 class="panel-title "><a><span class="circle"><b>2</b></span>question2</a> </h4> </div> <div id="collapseJavaScript2" class="panel-collapse collapse '+collap+' " style="cursor:pointer"> <div class="panel-body ">answer2</div> </div> </div>
							</div> 
						</div>
					</div>
				</div>
				<?php	/* JAVASCRIPT  END */ ?>
				
				<?php	/* MYSQL */ ?>
				<div class="panel panel-default" >  
					<div  data-toggle="collapse" data-parent="#accordionMain" href="#collapseMYSQL" class="panel-heading panel_heading_bg" style="cursor:pointer"> <h4 class="panel-title "><a><span class="circle"><b>SQL</b></span>MYSQL</a> </h4> </div>
					<div id="collapseMYSQL" class="panel-collapse collapse " style="cursor:pointer"> 
						<div class="panel-body ">
							<div class="panel-group" id="accordionMYSQL">
								<div class="panel panel-default" data-toggle="collapse" data-parent="#accordionMYSQL" href="#collapseMYSQL1" >  <div class="panel-heading panel_heading_bg" style="cursor:pointer"> <h4 class="panel-title "><a><span class="circle"><b>1</b></span>question1</a> </h4> </div> <div id="collapseMYSQL1" class="panel-collapse collapse '+collap+' " style="cursor:pointer"> <div class="panel-body ">answer1</div> </div> </div>
								
								<div class="panel panel-default" data-toggle="collapse" data-parent="#accordionMYSQL" href="#collapseMYSQL2" >  <div class="panel-heading panel_heading_bg" style="cursor:pointer"> <h4 class="panel-title "><a><span class="circle"><b>2</b></span>question2</a> </h4> </div> <div id="collapseMYSQL2" class="panel-collapse collapse '+collap+' " style="cursor:pointer"> <div class="panel-body ">answer2</div> </div> </div>
							</div> 
						</div>
					</div>
				</div>
				<?php	/* MYSQL  END */ ?>
				
				
			</div> 
		</div>
		
	</body>
</html>

<script>
	
	/*
		var mouseY = 0;
		var startMouseY = 0;
		$('body').on('mousedown', function (ev) {
		mouseY = ev.pageY;
		startMouseY = mouseY;
		$(document).on('mousemove', function (e) {
		if (e.pageY > mouseY) {
		var d = e.pageY - startMouseY;
		console.log("d: " + d);
		if (d >= 200 ) {
		$("#loader").show();
		GetSheetData();
		//$("#loader").hide();
		}
		$('body').css('margin-top', d/4 + 'px');
		}
		else
		$(document).unbind("mousemove");
		});
		});
		$('body').on('mouseup', function () {
		$('body').css('margin-top', '0px');
		$(document).unbind("mousemove");
		});
		$('body').on('mouseleave', function () {
		
		$('body').css('margin-top', '0px');
		$(document).unbind("mousemove");
		});
	*/
	
	
	
	
	// $(document ).ready(function(){
	// $(".internetissue").hide();
	// var googleDriveSpreadsheetLink = "https://spreadsheets.google.com/feeds/list/1rsStvdM_2X_edrNCqefmuOsz0wXc5d0zRUe1Yi6A2HM/od6/public/values?alt=json";
	// $.getJSON( googleDriveSpreadsheetLink, {
	// tags: "mount rainier",
	// tagmode: "any",
	// format: "json"
	// })
	// .done(function( data ) {
	// console.log(data);
	// finalAns = 	'';
	// var qAData = ''; 
	// var collap = ''; 
	// var Counter = 1;
	// $.each( data.feed.entry, function( i, item ) {
	// category 		= item['gsx$category']['$t'];
	// question 		= item['gsx$question']['$t'];
	// answer 			 = item['gsx$answer']['$t'];
	// html 			= item['gsx$html']['$t'];
	// if(html == ''){ finalAns = answer; }else{ finalAns = html; }
	
	// if(Counter == 1){  collap = 'in'; }else {  collap = ' '; }
	// qAData  +='<div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" href="#collapse'+Counter+'" >  <div class="panel-heading panel_heading_bg" style="cursor:pointer"> <h4 class="panel-title "><a><span class="circle"><b>'+Counter+'</b></span>'+question+'</a> </h4> </div> <div id="collapse'+Counter+'" class="panel-collapse collapse '+collap+' " style="cursor:pointer"> <div class="panel-body ">'+finalAns+'</div> </div> </div>';
	// Counter++;
	// });
	
	// $("#accordion").html(qAData);
	// })
	// .fail(function() {
	// $(".internetissue").show();
	// });
	
	// });
</script>	
<script type="text/javascript" src="cordova.js"></script>