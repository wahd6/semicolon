<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Simple Jquery Accordion Demo</title>
		<!-- Latest compiled and minified CSS -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
		
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
						<div id="accordion" role="tablist" aria-multiselectable="true">
							<div class="card">
								<div class="card-header" role="tab" id="headingOne">
									<h5 class="mb-0">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Collapsible Group Item #1
										</a>
									</h5>
								</div>
								
								<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
									<div class="card-block">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" role="tab" id="headingTwo">
									<h5 class="mb-0">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											Collapsible Group Item #2
										</a>
									</h5>
								</div>
								<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="card-block">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" role="tab" id="headingThree">
									<h5 class="mb-0">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											Collapsible Group Item #3
										</a>
									</h5>
								</div>
								<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="card-block">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<?php /* 	<script type="text/javascript" src="assets/js/accordion.js" ></script> */?>
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
				// qAData  +='<div class="quest"><div class="accordionItemHeading"><table><tbody><tr> <td> <div class="circle"><span>'+Counter+'</span></div> </td><td> <h4 class="">'+question+' </h4> </td></tr></tbody></table></div><div class="answer"  style="display: none;"><p>'+answer+'</p></div></div>';
				qAData  +='<div class="card"> <div class="card-header" role="tab" id="headingOne'+Counter+'"><h5 class="mb-0"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne'+Counter+'" aria-expanded="true" aria-controls="collapseOne'+Counter+'">Q:'+Counter+' '+question+'</a> </h5> </div> <div id="collapseOne'+Counter+'" class="collapse show" role="tabpanel" aria-labelledby="headingOne'+Counter+'"> <div class="card-block">'+answer+' </div> </div> </div>';
				Counter++;
			});
			
			// $("#accordion").html(qAData);
		})
		.fail(function() {
			$(".internetissue").show();
		});
		
	});
</script>			
















