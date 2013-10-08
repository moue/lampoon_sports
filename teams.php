<?php include 'includes/head.php'; ?>

<body id="index" class="home">

<?php include 'includes/header.php' ?>	

<div class="wrapper">
	<div class="banner-ad" style="padding: 20px;">
		<a href="#"><img src="http://cdn2.adsdk.com/CDN/104526/728x90_Mountain_Free_Shipping.jpg" width=100% height=auto></a>
	</div><!--end top ad-->
	
	<div class="pure-g">
		
		<div class="pure-u-1">
			<h2 style="margin-left: 20px;">Teams</h2>
		</div><!--end title-->
		
		<div class="pure-u-1-3">
			<div class="team-table">
				<script>
					var i;
					var j;
					for(i=0;i<4;i++){
						document.write('<table class="pure-table pure-table-horizontal" style="margin-bottom: 20px; font-family: Droid Sans, sans serif; line-height: 1.3em;"><thead><tr><th colspan="2">'+n_division[i]+'</th></tr></thead>');		
								
						var k=i*4+4;
						var last = k-1;
							
						for (j=i*4; j<k; j++) {
							document.write('<tbody>');
							
							if(j%2!=0)
								document.write('<tr class="pure-table-odd">');
							else
								document.write('<tr>');
							
							document.write('<td style="vertical-align:bottom;"><img src='+n_teamlogo[j]+' style="margin: 0px;"></td><td style="vertical-align:top;"><b>'+n_team[j]+'</b><br><a href="#">Stats</a> | <a href="#">Schedule</a> | <a href="#">Roster</a> | <a href="#">Chart</a></td></tr></tbody>');
							
							if(j==last)
								document.write('</table>');
						}
					}
				</script>		
			</div><!--end team-table-->
		</div><!--end col 1-->
		
		<div class="pure-u-1-3">
			<div class="team-table">
				<script>
					var i;
					var j;
					for(i=0;i<4;i++){
						document.write('<table class="pure-table pure-table-horizontal" style="margin-bottom: 20px; font-family: Droid Sans, sans serif; line-height: 1.3em;"><thead><tr><th colspan="2">'+a_division[i]+'</th></tr></thead>');		
								
						var k=i*4+4;
						var last = k-1;
							
						for (j=i*4; j<k; j++) {
							document.write('<tbody>');
							
							if(j%2!=0)
								document.write('<tr class="pure-table-odd">');
							else
								document.write('<tr>');
							
							document.write('<td style="vertical-align:bottom;"><img src='+a_teamlogo[j]+' style="margin: 0px;"></td><td style="vertical-align:top;"><b>'+a_team[j]+'</b><br><a href="#">Stats</a> | <a href="#">Schedule</a> | <a href="#">Roster</a> | <a href="#">Chart</a></td></tr></tbody>');
							
							if(j==last)
								document.write('</table>');
						}
					}
				</script>		
			</div><!--end team-table-->
		</div><!--end col 2-->
		<div class="pure-u-1-3" style="text-align: right;">
			<figure class="sidead">
				<img src="http://behance.vo.llnwd.net/profiles24/1123028/projects/3874097/af3674fa8a1cd884ec0b46fa0bc979bb.png" width=100%>
				<img src="http://behance.vo.llnwd.net/profiles24/1123028/projects/3874097/b7c77617424e5d89cd57b19bd5e1b054.png" width=100%>
				<!--<img src="http://www.thenextlegend.com/images/TEAM%20STORE%20SIDE%20BANNER%20OCT.jpg">-->
			</figure>
		</div>
			
	
	</div><!--end grid-->
	
	<?php include 'includes/footer.php'?>
	
</div><!--end wrapper-->



</body>
</html>
