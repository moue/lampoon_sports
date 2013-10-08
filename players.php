<?php include 'includes/head.php'?>

<body>

<?php include 'includes/header.php' ?>	

<div class="wrapper">
	<div class="pure-g-r">
		<div class="pure-u-1">
			<div class="fix-padding">
				<h2>2014 NFL Draft</h2> 

			<!--
				<ul class="bxslider"">
					<li><img src="imgs/draft1.jpg"></li>
					<li><img src="imgs/draft2.jpg"></li>
					<li><img src="imgs/draft3.jpg"></li>
					<li><img src="imgs/draft4.jpg"></li>
				</ul>-->
				
				<div id="main" class="container">
					<div class="main_image">
						<img src="imgs/draft1.jpg"/>
						<div class="desc">
							<div class="block">
								<h2>Teddy Bridgewater's Updated 2014 NFL Draft Stock After Win vs. Temple</h2>
								<p style="display: none;">Louisville quarterback Teddy Bridgewater is having an outstanding 2013 campaign, one that could lead to his name being the first one called out by NFL commissioner Roger Goodell next April.</p>
							</div><!--end block-->
						</div><!--end desc-->
					</div><!--end main image-->

					<div class="image_thumb">
						<ul>
							<li>
								<div><figure style="float: left; margin-right: 15px;"><a href="imgs/draft1.jpg"><img  src="imgs/draft1.jpg"/></a></figure>
									<div class="block">
										<h2>Teddy Bridgewater's Updated 2014 NFL Draft Stock After Win vs. Temple</h2>
										<p style="display: none;">Louisville quarterback Teddy Bridgewater is having an outstanding 2013 campaign, one that could lead to his name being the first one called out by NFL commissioner Roger Goodell next April.</p>
									</div><!--end block-->
								</div><!--end container-->
							</li>
							<li>
								<figure style="float: left; margin-right: 15px;"><a href="imgs/draft2.jpg"><img src="imgs/draft2.jpg"/></a></figure>
								<div class="block">
									<h2>NFL execs: No one cares Jadeveon Clowney is hurt, draft stock is fine</h2>
									<p style="display: none;">NFL teams may not be as concerned with star defensive end and potential No. 1 draft pick Jadeveon Clowney's approach to his junior season as University of South Carolina coach Steve Spurrier is.</p>
								</div><!--end block-->
							</li>
							
							<li>
								<figure style="float: left; margin-right: 15px;"><a href="imgs/draft3.jpg"><img src="imgs/draft3.jpg"/></a></figure>
								<div class="block">
									<h2>Top Prospect of Week Five: Texas A&M OT Jake Matthews</h2>
									<p style="display: none;">Virtually all of the buzz surrounding Texas A&M's first trip to play Arkansas since 1990 focused on either mega-watt star Johnny Manziel or the fact that this contest was the SEC debut for new Razorbacks' head coach Bret Bielema.</p>
								</div><!--end block-->
							</li>
						
							<li>
								<figure style="float: left; margin-right: 15px;"><a href="imgs/draft4.jpg"><img src="imgs/draft4.jpg"/></a></figure>
								<div class="block">
									<h2>Oregon's Marcus Mariota named Pac-12 offensive player of the week</h2>
									<p style="display: none;">WALNUT CREEK, Calif. -- Quarterback Marcus Mariota of OREGON, linebacker Trent Murphy of STANFORD and wide receiver/kick returner Ty Montgomery, also of Stanford, have been named Pac-12 Players of the Week in football.</p>
								</div><!--end block-->
							</li>
						</ul>
					</div><!--end image thumbnail-->
				</div><!--end main container-->

			</div><!--end fix padding-->
		</div><!--end unit 1-->
		

		
		<div class="pure-u-1-3">	
			<aside style="padding: 20px">
				<table class="pure-table" style="width: 100%; font-family: 'open sans', 'droid sans', sans serif;">
    				<thead>
				    <tr>
				    		<th colspan="3" class="contrast_menu_label" style="color: #D4AE00; text-align: center;">2014 Top NFL Draft Prospects</th>
				    </tr>
				    
				    <tr>
			        <th>Rank</th>
			        <th>Player</th>
			        <th>Pos.</th>
				    </tr>
					</thead>
					
					<tbody>
		      
		      <script>
		      		var draft = ['Teddy Bridgewater', 'QB', 'Jadeveon Clowney', 'DE', 'Jake Matthews', 'OT', 'Marcus Mariota', 'QB', 'Anthony Barr', 'OLB', 'Cyrus Kouandjio', 'OT', 'Sammy Watkins', 'WR', 'Brett Hundley', 'QB', 'Taylor Lewan', 'OT', 'Tajh Boyd', 'QB'];
		      		
		      		var i;
		      		var j=1;
		      		for (i=0; i<20; i++) {
		      			document.write('<tr style="font-size: .95em;"><td>'+[j]+'</td><td>'+draft[i]+'</td>');
		      			i++;
		      			document.write('<td>'+draft[i]+'</td></tr>');
		      			j++;
		      		}
		      		
		      </script>
		      		
		      	</tbody>
		    </table>
			</aside>
		</div><!--end col 1-->
		
		<div class="pure-u-1-3">
			<aside style="padding: 20px 0px 20px">
				<div class="pure-menu pure-menu-open" id="draft_headlines">
					<a class="contrast_menu_label" style="color: #D4AE00;">Draft Analysis and News</a>
		
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
								
								// only want 6 stories
								var count = 0;
				
								var ul = $('<ul/>');
								$.each(data.headlines, function() {
									var li = $('<li/>').html('<a href="#" style="white-space: normal; font-family: lato, sans serif;">'+this.headline+'</a>');
									ul.append(li);
									count++;
									if(count == 7)
										return false;
										 
								});
								// append this list to the document body
								$('#draft_headlines').append(ul);
							},
							error: function() {
								 // handle the error
							}
						});
					</script>
		
				</div><!--end more headlines-->
			</aside>
		</div><!-- end col 2-->
		
		<div class="pure-u-1-3">
			<figure style="margin: 20px; float: right;">
				<a href="#"><img src="http://cdn.adnxs.com/p/d5/22/85/25/d522852539c76c01b4454ee63c50aff8.gif"></a>
			</figure>
		</div><!--end col 3-->
		
		<!--
		<div class="pure-u-1-3">
			<div id="list">
				<h1 style="padding-left: 10px;">Featured Players</h1>
				<article>
					<h3 class="tagline">"Amazing!"</h3>
					<figure><img src="imgs/prof1.jpg" class="profpic"></figure>
				</article>
				<article>
					<h3 class="tagline">"Who knew?!"</h3>
					<figure><img src="imgs/prof2.jpg" class="profpic"></figure>
				</article>
				<article class="eachprof">
					<h3 class="tagline">"No one expected this dark horse!"</h3>
					<figure><img src="imgs/prof3.jpg" class="profpic"></figure>
				</article>
				<article class="eachprof">
					<h3 class="tagline">"Instant classic!"</h3>
					<figure><img src="imgs/prof4.jpg" class="profpic"></figure>
				</article>
			</div>
		</div>
		<div class="pure-u-1-2">
			<h1 style="padding-left=10px;">Latest</h1>
			<figure class="featuredimg">
				<img src="http://o.onionstatic.com/images/21/21320/original/700.jpg?7596" width=100%>
			</figure>
			<article>
				<h2>Basketball Coach Sees Something In 7’3” High School Sophomore</h2>
				<p>CHICAGO—Explaining that he can sometimes spot raw talent just by looking at someone, Kelvyn Park High School basketball coach Keith Burris told reporters Thursday that he sees something in 7’3” sophomore Adrian Patton. “I can’t put my finger on it, but there’s definitely something special about that kid,” said Burris, who added that where others might see another random 7’3” teenager, he sees a basketball player with a lot of potential. “I think there’s a spark in him, and I think he could help us. We’ll try him out as a shooter, but I actually have a hunch the low post is where he’s going to shine.” Upon being invited to try out for the team in the fall, Patton reportedly told Burris that he can’t participate in sports due to severe arthritis.</p>
			</article>
		</div>
		-->
		<!--
		<div class="pure-u-1-6 sidead">
			<img src="http://behance.vo.llnwd.net/profiles24/1123028/projects/3874097/1665c4024876e86804db48d25d08d65f.png" width=100%>
		</div>
		-->
	</div><!--end grid-->
	
	<?php include 'includes/footer.php';?>

</div><!--end wrapper-->

</body>
</html>
