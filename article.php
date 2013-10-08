<? include 'includes/head.php' ?>

<body id="index" class="home">

<?php include 'includes/header.php' ?>	

<div class="wrapper">
	<div class="pure-g-r">
		<div class="pure-u-1">
			<div class="fix-padding">
				<h2>Ex-teammate: Luck can be greatest</h2>
				<h4 class="smallupper">By Terry Blount | ESPN.com</h4>
			</div><!--end fix-padding-->
		</div><!--end pure header-->
		
		<div class="pure-u-2-3">
			<div class="fix-padding">

				<figure class="featuredimg">
					<img src="http://funafun.com/wp-content/uploads/Andrew-Luck-Jersey-Get-The-Most-From-Camping-outdoors-9.jpg" width=100%>
				</figure>
				<article>
					<p>RENTON, Wash. -- Seattle Seahawks receiver Doug Baldwin, who played college football at Stanford with Indianapolis Colts quarterback Andrew Luck, believes Luck can become the best quarterback ever.</p>
					<p>"I'm on the record as saying Andrew Luck can be the greatest quarterback who ever played the game of football," Baldwin said Wednesday. "I've seen him do some unbelievable things that I still can't believe a quarterback was able to do. I have tremendous respect for that guy."</p>
					<p>Luck also has the utmost respect for Baldwin. The Colts host the Seahawks on Sunday at Lucas Oil Stadium.</p>
					<p>"I always admired Doug's work ethic and his football smarts," Luck said Wednesday. "I remember Doug's last year at Stanford really developing a good rapport with him."</p>
					<p>Baldwin said he was convinced of Luck's greatness watching him in his NFL rookie season last year.</p>
					<p>"I don't like to compare guys," Baldwin said. "But when I look at Andrew's rookie season, he took control of a team that really didn't have much around him and he took them to the playoffs. They didn't have a defense and didn't have a running game, but they made it to the playoffs. He had a whole bunch of fourth-quarter comeback victories."</p>
					
					<aside class="quote" style="float: left;">
						<h3><i>"I'm on the record as saying Andrew Luck can be the greatest quarterback who ever played the game of football."</i></h3>
						<h4 style="text-align:right;">Doug Baldwin</h4>
				 	</aside>  	
					
					<p>Baldwin was asked to list what makes Luck special.</p>
					<p>"He's everything you would want in a quarterback, both as a pocket passer and a guy who can make plays with his legs," Baldwin said. "He's highly intelligent."</p>
					<p>Baldwin also emphasized Luck's ability to improvise.</p>
					<p>"There would be crucial moments of a game [at Stanford] where we needed to make a play," Baldwin said. "He would tell me to go to a specific spot on the field and just throw the ball there. I remember numerous times he would ask me what I saw, and we would just makes plays on the fly. We definitely had a great relationship."</p>
					<p>Baldwin also was asked how Seahawks quarterback Russell Wilson compares to Luck.</p>
					<p>"They're both very good quarterbacks," Baldwin said. "They're both highly intelligent, both make plays with their feet and both have great arms. I don't want to take it any further than that."</p>
					
					<!--needed more article text, so added text from another article http://www.usatoday.com/story/sports/nfl/colts/2013/10/05/indianapolis-colts-andrew-luck--animal-teammates-dull-public-image/2929595/-->
					<p>INDIANAPOLIS — Andrew Luck is measured and polished and — publicly, anyway — intentionally dull.</p>

					<p>But did you know the Indianapolis Colts quarterback is also intense, fiery and, when necessary, profane? You didn't because you've never been in the huddle with him.</p>
					<p>Those who have see another side of Luck. The side willing to get in your face, the side that demands nothing less than perfection and the side that runs completely counter to Luck's public image that even teammates admit is a bit, well, "nerdy."</p>

					<p>"You look at him, and you wouldn't think some of that stuff could come out of his mouth," receiver Darrius Heyward-Bey said. "I don't know if I can repeat some of it."</p>

					<p>Receiver Reggie Wayne added: "Everybody thinks he's low-key, which he is. But once he's in front of his teammates, really, he's an animal."</p>

					<p>A quick survey of Luck's offensive teammates helped paint an unexpected picture of the Stanford engineering graduate with a vocabulary that consists of a considerable number of four-syllable words.</p>
				</article>
				

				<div class="pure-u-1-2" style="float: left;">
					<div class="arrow" style="float: left;	margin-right: 20px;">
						<img src="imgs/prev.png">
					</div>
					
					<div class="prevnext" style="margin-right: 10px;">
						<h3 style="text-transform: uppercase;">Previous article</h3>
						<h4>Eli Manning, Matt Schaub among QBs who've been cut enough slack</h4>
					</div>
				</div><!--end col 1-2-->
				<div class="pure-u-1-2" style="float: left;">
					<div class="arrow" style="float: right;">
							<img src="imgs/next.png">
					</div>
					
					<div class="prevnext" style="margin-left: 10px;">
						
						
						<h3 style="text-transform: uppercase;">Next article
						<h4>Football Team Accused of Plagiarizing Star Running Back</h4>
						
						
					</div>
				</div><!--end col 1-2-->

			</div><!--end fix padding-->
		</div><!--end unit 2-3-->
			
		<div class="pure-u-1-3">
			<div style="padding: 0px 20px 0px 0px;">
			
				<div class="pure-menu pure-menu-open" id="moreheadlines">
					<a class="contrast_menu_label" style="color: #D4AE00;">Related Articles</a>
		
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
									var li = $('<li/>').html('<a href="#" style="white-space: normal; font-family: lato, sans serif;">'+this.headline+'</a>');
									ul.append(li);
								});
								// append this list to the document body
								$('#moreheadlines').append(ul);
							},
							error: function() {
								 // handle the error
							}
						});
					</script>
		
				</div><!--end more headlines-->
			
				<figure style="margin-top: 20px;"><img src="http://www.deshow.net/d/file/sports/2009-06/nike-sports-589-12.jpg" width=100%></figure>
				<figure style="margin: auto; width: 100%;">
					<div class="dark" style="background: black; opacity: .8; margin-top: 20px; padding: 1px 0px 20px; text-align: center;"><a href="#"><h2 style="margin-bottom: 0px;">Image Gallery</h2></a></div>
					<a href="#"><img src="imgs/luckgallery.png"></a>
				</figure>

				<section style="margin-top: 20px;" id="playerprofile">	

					<table class="pure-table pure-table-horizontal" style="margin: auto; width:100%; font-family: 'lato';">
						<thead>
							<tr>
								<th colspan="2" style="text-transform: uppercase; text-align: center;">Player Profile: Andrew Luck</th>
							</tr>
						</thead>
						<tbody>	
							<script>
							var info = ["Born", "Sep 12, 1989 (Age: 24)", "Drafted", "2012: 1st Rnd, 1st by IND", "Experience", "2 years", "College", "Stanford"];
				
							var i=0;
							for (i; i<7; i++){
								document.write('<tr><td style="text-align: right;"><b>'+info[i]+'</b></td>');
								i++;
								document.write('<td>'+info[i]+'</td>');
							}
							</script>
						</tbody>
					</table>
					
					<!--
					<div class="Collage">
						<a href="#"><img src="imgs/luck1.jpeg" width=50% height: auto></a><a href="#"><img src="imgs/luck7.jpeg" width=50% height: auto></a><a href="#"><img src="imgs/luck2.jpg" width=30% height: auto></a><a href="#"><img src="imgs/luck3.jpg" width=30% height: auto></a>	<a href="#"><img src="imgs/luck5.jpeg" width=30% height: auto></a><a href="#"><img src="imgs/luck4.jpeg" width=100px height: auto></a>
					</div>end image gallery-->

					
				<section><!-- end player profile section-->
				

			
			</div><!--end fix padding-->
		</div><!--end col3-->
	</div><!--end grid-->
	
	<figure class="bottomad">
		<img src="http://cdn.adnxs.com/p/c2/95/3c/de/c2953cdef44bace47264cc2ff57a14a7.gif" width=100% height=auto>
	</figure>
	
	<?php include 'includes/footer.php'?>
	
</div><!--end wrapper-->



</body>
</html>
