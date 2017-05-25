<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Simple Jquery Accordion Demo</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
	</head>
	<body>
		<div class="container">
			<div id="promo-wrapper internetissue" style="display:none">
				<section id="promo">
					<h2>No Internet Connection</h2>
					<a class="button">Try Again</a>
				</section>
			</div>
			<h1>Semicon <b>;</b> Developrs Guide</h1>
			<div class="toc-tab-box">
				<h2 class="acc-title">HTML</h2>
				<div class="acc-content">
					<div class="col-md-6">
						<div id="questionAnswersData">
							<?php /* <div class="quest">
								<div class="accordionItemHeading">
								<table>
								<tbody>
								<tr> <td> <div class="circle"><span>1</span></div> </td>
								<td> <h4 class="">Question </h4> </td>
								</tr>
								</tbody>
								</table>
								</div>
							    <div class="answer"  style="display: none;">
								<p>Answer : Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
								</div>
							</div> */?>
						</div>
						
						
					</div>
				</div>
				
			</div>
			
		</div>
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="assets/js/accordion.js" ></script>
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
			var Counter = 1;
			$.each( data.feed.entry, function( i, item ) {
				category 		= item['gsx$category']['$t'];
				question 		= item['gsx$question']['$t'];
				answer 			= item['gsx$answer']['$t'];
				//console.log(category); console.log(question);  console.log(answer);
				qAData  +='<div class="quest"><div class="accordionItemHeading"><table><tbody><tr> <td> <div class="circle"><span>'+Counter+'</span></div> </td><td> <h4 class="">'+question+' </h4> </td></tr></tbody></table></div><div class="answer"  style="display: none;"><p>'+answer+'</p></div></div>';
				Counter++;
			});
			
			$("#questionAnswersData").html(qAData);
		})
		.fail(function() {
			$(".internetissue").show();
		});
		
	});
</script>			
















