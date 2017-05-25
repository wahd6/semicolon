<!DOCTYPE html>
	<html>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		</head>
		
		<body>
			<div class="container">
				<h1>Semicon <b>;</b> Developrs Guide</h1>
				<div id="promo-wrapper internetissue" style="display:none">
					<section id="promo">
						<h2>No Internet Connection</h2>
						<a class="button">Try Again</a>
					</section>
				</div>
				<div class="panel-group" id="accordion">
					<?php /* DATA APPENDS HERE */?>
					<?php /* <div class="panel-group" id="accordion">
    <div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#html">Collapsible Group 1</a>
			</h4>
		</div>
		<div id="html" class="panel-collapse collapse in">
			<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
		</div>
	</div>
    <div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#php">Collapsible Group 2</a>
			</h4>
		</div>
		<div id="php" class="panel-collapse collapse">
			<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
		</div>
	</div>
    <div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#jQuery">Collapsible Group 3</a>
			</h4>
		</div>
		<div id="jQuery" class="panel-collapse collapse">
			<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
		</div>
	</div>
</div> */?>
				</div> 
			</div>
			
		</body>
	</html>
	
	<script>
		$(document ).ready(function(){
			$(".internetissue").hide();
			var googleDriveSpreadsheetLink = "https://spreadsheets.google.com/feeds/list/1rsStvdM_2X_edrNCqefmuOsz0wXc5d0zRUe1Yi6A2HM/od6/public/values?alt=json";
			$.getJSON( googleDriveSpreadsheetLink, {
				tags: "mount rainier",
				tagmode: "any",
				format: "json"
			})
			.done(function( data ) {
				console.log(data);
				var qAData = ''; 
				var collap = ''; 
				var Counter = 1;
				$.each( data.feed.entry, function( i, item ) {
					category 		= item['gsx$category']['$t'];
					question 		= item['gsx$question']['$t'];
					answer 			= item['gsx$answer']['$t'];
					if(Counter == 1){  collap = 'in'; }else {  collap = ' '; }
					//console.log(category); console.log(question);  console.log(answer);
					// qAData  +='<div class="quest"><div class="accordionItemHeading"><table><tbody><tr> <td> <div class="circle"><span>'+Counter+'</span></div> </td><td> <h4 class="">'+question+' </h4> </td></tr></tbody></table></div><div class="answer"  style="display: none;"><p>'+answer+'</p></div></div>';
					qAData  +='<div class="panel panel-default"> <div class="panel-heading"> <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse'+Counter+'">'+question+'</a> </h4> </div> <div id="collapse'+Counter+'" class="panel-collapse collapse '+collap+'"> <div class="panel-body">'+answer+'</div> </div> </div>';
					Counter++;
				});
				
				$("#accordion").html(qAData);
			})
			.fail(function() {
				$(".internetissue").show();
			});
			
		});
	</script>	
	<script type="text/javascript" src="cordova.js"></script>