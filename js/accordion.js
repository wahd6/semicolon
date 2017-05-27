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
		htmlData 			= 	'';		htmlCounter			= 	1;		htmlCollapser			= 	'';
		phpData				=	'';		phpCounter			=	1;		phpCollapser			=	'';
		javascriptData		=	'';		javascriptCounter	=	1;		javascriptCollapser		=	'';
		mysqlData			=	'';		mysqlCounter		=	1;		mysqlCollapser			=	'';
		othersData			=	'';		othersCounter		=	1;		othersCollapser			=	'';
		finalAns = 	'';
		var finalData = ''; 
		
		$.each( data.feed.entry, function( i, item ) {
			
			if(htmlCounter == 1)		{  htmlCollapser = 'in'; 				}else {  htmlCollapser = ' '; }
			if(phpCounter == 1)			{  phpCollapser = 'in'; 				}else {  phpCollapser = ' '; }
			if(javascriptCounter == 1)	{  javascriptCollapser = 'in';			}else {  javascriptCollapser = ' '; }
			if(mysqlCounter == 1)		{  mysqlCollapser = 'in'; 				}else {  mysqlCollapser = ' '; }
			if(othersCounter == 1)		{  othersCollapser = 'in'; 				}else {  othersCollapser = ' '; }
			
			category 		= item['gsx$category']['$t'];
			question 		= item['gsx$question']['$t'];
			answer 			 = item['gsx$answer']['$t'];
			html 			= item['gsx$html']['$t'];
			if(html == ''){ finalAns = answer; }else{ finalAns = html; }
			
			
			if(category == 'HTML'){
				
				htmlData  +='<div class="panel panel-default" data-toggle="collapse" data-parent="#accordionHTML" href="#collapseHTML'+htmlCounter+'" >  <div class="panel-heading panel_heading_bg" style="cursor:pointer"> <h4 class="panel-title "><a><span class="circle"><b>'+htmlCounter+'</b></span>'+question+'</a> </h4> </div> <div id="collapseHTML'+htmlCounter+'" class="panel-collapse collapse '+htmlCollapser+' " style="cursor:pointer"> <div class="panel-body ">'+finalAns+'</div> </div> </div>';
				
				
				htmlCounter++;
			}
			else if(category == 'PHP'){
				
				phpData  +='<div class="panel panel-default" data-toggle="collapse" data-parent="#accordionPHP" href="#collapsePHP'+phpCounter+'" >  <div class="panel-heading panel_heading_bg" style="cursor:pointer"> <h4 class="panel-title "><a><span class="circle"><b>'+phpCounter+'</b></span>'+question+'</a> </h4> </div> <div id="collapsePHP'+phpCounter+'" class="panel-collapse collapse '+phpCollapser+' " style="cursor:pointer"> <div class="panel-body ">'+finalAns+'</div> </div> </div>';
				
				phpCounter++;
				
				}else if(category == 'JQUERY'){
				
				javascriptData  +='<div class="panel panel-default" data-toggle="collapse" data-parent="#accordionJavaScript" href="#collapseJavaScript'+javascriptCounter+'" >  <div class="panel-heading panel_heading_bg" style="cursor:pointer"> <h4 class="panel-title "><a><span class="circle"><b>'+javascriptCounter+'</b></span>'+question+'</a> </h4> </div> <div id="collapseJavaScript'+javascriptCounter+'" class="panel-collapse collapse '+javascriptCollapser+' " style="cursor:pointer"> <div class="panel-body ">'+finalAns+'</div> </div> </div>';
				
				javascriptCounter++;
				
				}	else if(category == 'MYSQL'){
				
				mysqlData  +='<div class="panel panel-default" data-toggle="collapse" data-parent="#accordionMYSQL" href="#collapseMYSQL'+mysqlCounter+'" >  <div class="panel-heading panel_heading_bg" style="cursor:pointer"> <h4 class="panel-title "><a><span class="circle"><b>'+mysqlCounter+'</b></span>'+question+'</a> </h4> </div> <div id="collapseMYSQL'+mysqlCounter+'" class="panel-collapse collapse '+mysqlCollapser+' " style="cursor:pointer"> <div class="panel-body ">'+finalAns+'</div> </div> </div>';
				mysqlCounter++;
				
				}else{	
				
				othersData  +='<div class="panel panel-default" data-toggle="collapse" data-parent="#accordionOther" href="#collapseOther'+othersCounter+'" >  <div class="panel-heading panel_heading_bg" style="cursor:pointer"> <h4 class="panel-title "><a><span class="circle"><b>'+othersCounter+'</b></span>'+question+'</a> </h4> </div> <div id="collapseOther'+othersCounter+'" class="panel-collapse collapse '+othersCollapser+' " style="cursor:pointer"> <div class="panel-body ">'+finalAns+'</div> </div> </div>';
				
				othersCounter++;					
			}
			
		});
		
		if(htmlData == ''){ 			$("#panelForHTML").hide();  		}
		if(phpData == ''){  			$("#panelForPHP").hide();  			}
		if(javascriptData == ''){ 		$("#panelForJavaScript").hide(); 	}
		if(mysqlData == ''){  			$("#panelForMYSQL").hide();  		}
		if(othersData == ''){ 			$("#panelForOther").hide();  		}
		
		
		$("#accordionHTML").html(htmlData);
		$("#accordionPHP").html(phpData);
		$("#accordionJavaScript").html(javascriptData);
		$("#accordionMYSQL").html(mysqlData);
		$("#accordionOther").html(othersData);
	})
	.fail(function() {
		$(".internetissue").show();
	});
	
});