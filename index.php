<?php include 'includes/head.php'?>
 
<body id="index" class="home">

	<?php include 'includes/header.php' ?>	
	
	
	<div class="wrapper">

		<div class="pure-menu pure-menu-open pure-menu-horizontal sport-score" style="background: black; opacity: .8; font-color: #FFD204; font-family: Cantarell">
			<a href="#" class="pure-menu-heading" style="color: #D4AE00;">Scoreboard</a>
				<ul style="color: #FFD204;">
			    <li class="pure-menu-selected sport-score"><a href="#">NFL</a></li>
			    <li class="sport-score"><a href="#">MLB</a></li>
			    <li class="sport-score"><a href="#">NASCAR</a></li>
			    <li class="sport-score"><a href="#">NCAAF</a></li>
			    <li class="sport-score"><a href="#">Soccer</a></li>
			    <li class="sport-score"><a href="#">NHL</a></li>
			    <li class="sport-score"><a href="#">WNBA</a></li>
			    <li class="sport-score"><a href="#">All Scores >></a></li>
				</ul>
 		</div><!--end score menu-->
	 		

		<table class="pure-table pure-table-bordered" style="margin: auto; width:100%; font-family: 'Cantarell';">
			<thead>
		 		<tr>
		 			<script>
							var i;
							for(i=0; i<5; i++){
								document.write('<th style="text-align: center;"><b>Ongoing</b></th>');
							}
							
							for(i=0; i<5; i++){
								document.write('<th style="text-align: center;"><b>Final</b></th>');
							}
						</script>
					</tr>
				</thead>
				<tbody>
					<tr>
						<script>
							var i;
							for(i=0; i<10; i++){
								makeTLA();
								makeNum();
								document.write('<td><div class="TLA">'+text+'</div><div class="num">'+num+'</div></td>');
							}
						</script>
					</tr>
					<tr>
						<script>
							var i;
							for(i=0; i<10; i++){
								makeTLA();
								makeNum();
								document.write('<td><div class="TLA">'+text+'</div><div class="num">'+num+'</div></td>');
							}
						</script>
					</tr>
				</tbody>	
			</table>

		</div><!--end wrapper-->
		
	
	
	<div class="wrapper" style="margin-top: 20px;">
		<div class="pure-g-r" style="background: black; padding-bottom: 20px;">
			<div class="pure-u-2-3">
				<section class="topstory" style="position: relative; margin-left: 20px; margin-top: 20px;">
					<a href="http://www.hcs.harvard.edu/podcast/sports/article.php"><img width=100% src="imgs/topstory1"></a>
					<div class="topstorywrapper" style="position: absolute; bottom: 0px; left: 0px; width: 100%;">
						<div class="caption dark">
							<a href="http://www.hcs.harvard.edu/podcast/sports/article.php"><h2>Baldwin: Luck can be all-time 'greatest' QB</h2>
							<p>Seattle Seahawks receiver Doug Baldwin, who played college football at Stanford with Indianapolis Colts quarterback Andrew Luck, believes Luck can become the best quarterback ever.</p></a>
						</div><!--end topstory content-->
					</div><!--end topstory wrapper-->
				</section><!--end topstory-->	
			</div><!--end 2-3 unit-->
		
			<div class="pure-u-1-3">
		
				<div id="sidestory" style="margin-top: 20px; margin-right: 20px; margin-left: 2px;">
					<section class="topstory" style="position: relative;">
						<a href="http://www.hcs.harvard.edu/podcast/sports/article.php"><img width=100% src="imgs/topstory2"></a>
						<div class="topstorywrapper" style="position: absolute; bottom: 2px; left: 0px; width: 100%;">
							<div class="caption dark">
								<a href="http://www.hcs.harvard.edu/podcast/sports/article.php"><p>Patriots update: Gronkowski out again, but Amendola could play vs. Bengals</p></a>
							</div><!--end topstory content-->
						</div><!--end topstory wrapper-->
					</section>
				
					<section class="topstory" style="position: relative;">
						<a href="http://www.hcs.harvard.edu/podcast/sports/article.php"><img width=100% src="imgs/topstory3"></a>
						<div class="topstorywrapper" style="position: absolute; bottom: 2px; left: 0px; width: 100%;">
							<div class="caption dark">
								<a href="http://www.hcs.harvard.edu/podcast/sports/article.php"><p>49ers going after Josh Freeman; Raiders, Vikings and Bills want QB, too</p></a>
							</div><!--end topstory content-->
						</div><!--end topstory wrapper-->
					</section>					
				</div><!--end sidestory-->	
			</div><!--end unit 1-3-->
		</div><!--end pure grid-->
	</div>	<!--end wrapper-->
	
	<figure class="banner-ad" style="margin-bottom: 20px; margin-top: 20px;">
		<a href="#"><img src="http://cdn2.adsdk.com/CDN/104526/728x90_Mountain_Free_Shipping.jpg" width=100% height=auto style="margin-left: auto; margin-right: auto;"></a>
	</figure>	

	<div class="wrapper">
		<div class="pure-g-r">		
			<div class="pure-u-3-4" style="margin-bottom: 20px;">
				
				<!-- filter news by team
				
				<h2 style="text-align: center;">All Team Headlines</h2>
				<section id="switch-teams" class="pure-u-1-5">
					<div style="margin-left: 20px;" class="pure-menu pure-menu-open pure-menu-horizontal">
						<ul>
							<script>
								var all_team = n_team.concat(a_team);
								var all_teamlogo = n_teamlogo.concat(a_teamlogo);
						
								var i;
								for (i=0; i<24; i++) {
									document.write('<li><a href="#" class='+all_team[i]+' style="padding: 5px; line-height: 0em;"><img src='+all_teamlogo[i]+' width=></a></li>');
								}
								</script>
						</ul>
					</div>
				</section>
				-->
				
				<div id="headlines-wrapper" style="margin: 20px 0px 20px 20px;">
					<div class="pure-menu pure-menu-open" id="headlines">
						<a class="contrast_menu_label" style="color:#D4AE00">Top Headlines</a>
			
					<!--<ul id="headlines">
						<li><a href="#">5 Years Later: Where are they now? Any of them.</a></li>
						<li><a href="#">New horror movie about figure skaters Nancy Kerrigan and Tonya Harding</a></li>
						<li><a href="#">The kick that was heard around the world: South Africa</a></li>
						<li><a href="#">Investigative report on latest field stabbing during FIFA madness</a></li>
					</ul>-->
			
			
						<script>
							$.ajax({
								url: "http://api.espn.com/v1/sports/news/headlines?apikey=5g5k6sgpsjek64jbavrqf5nj",
								data: {
									// enter your developer api key here
									apikey: "{5g5k6sgpsjek64jbavrqf5nj}",
									// the type of data you're expecting back from the api
									_accept: "application/json; charset=utf-8"
								},
								dataType: "jsonp",
								success: function(data) {
									// create an unordered list of headlines
					
									var ul = $('<ul/>');
									$.each(data.headlines, function() {
										
										var content = '<div class="highlight_grey" style="float: right; width: 64%; padding: 0px 20px;"><h2>'+this.headline+'</h2><p>'+this.description+'</p></div>';
										
										// grab one associated image for each story
										$.each(this.images, function(){
											
											// append image to end of content
											content += '<figure style="float: left; padding: 20px 0px; width: 30%; max-height: 150px; overflow: hidden;"><img src='+this.url+' width=100% height=auto>';
											return false;
										});									
										
										// put everything into container
										var wrapper ='<article>'+content+'</article>';
										
										var li = $('<li/>').html(wrapper);
										ul.append(li);
									});
									// append this list to the document body
									$('#headlines').append(ul);
								},
								error: function() {
									 // handle the error
								}
							});
						</script>
			
					</div><!--end headlines menu-->
				</div><!--end headlines wrapper--> 
			</div><!-- end unit 3-4-->
			
			<figure class="pure-u-1-4" style="margin-top: 20px; text-align:right; float:right;">
				<div style="margin-right: 20px;"><a href="#"><img src="http://1.bp.blogspot.com/-HKdG11bK_74/TWeIPycAtwI/AAAAAAAABHY/xwdupJdPpvA/s1600/elro-saxobank-saxotrader-200x600.jpg"></a></div>
			</figure><!--end col 1-4 adspace-->
		</div><!--end grid-->
	
		<?php include 'includes/footer.php' ?>
	
	</div><!--end wrapper-->
	
</body>
</html>
