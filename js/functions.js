var n_division = ["NFC East", "NFC North", "NFC South", "NFC West"];
var n_team = ["Dallas Cowboys", "New York Giants", "Philadelphia Eagles", "Washington Redskins", "Chicago Bears", "Detroit Lions", "Green Bay Packers", "Minnesota Vikings", "Atlanta Falcons", "Carolina Panthers", "New Orleans Saints", "Tampa Bay Buccaneers", "Arizona Cardinals", "San Francisco 49ers", "Seattle Seahawks", "St. Louis Rams"];
var n_teamlogo = ["http://st.snimg.com/image/nfl/logos/6_medium.png", "http://st.snimg.com/image/nfl/logos/19_medium.png", "http://st.snimg.com/image/nfl/logos/21_medium.png", "http://st.snimg.com/image/nfl/logos/28_medium.png", "http://st.snimg.com/image/nfl/logos/3_medium.png", "http://st.snimg.com/image/nfl/logos/8_medium.png", "http://st.snimg.com/image/nfl/logos/9_medium.png", "http://st.snimg.com/image/nfl/logos/16_medium.png", "http://st.snimg.com/image/nfl/logos/1_medium.png", "http://st.snimg.com/image/nfl/logos/29_medium.png", "http://st.snimg.com/image/nfl/logos/18_medium.png", "http://st.snimg.com/image/nfl/logos/27_medium.png", "http://st.snimg.com/image/nfl/logos/22_medium.png", "http://st.snimg.com/image/nfl/logos/25_medium.png", "http://st.snimg.com/image/nfl/logos/26_medium.png", "http://st.snimg.com/image/nfl/logos/14_medium.png"];
							
var a_division = ["AFC East", "AFC North", "AFC South", "AFC West"];
var a_team = ["Buffalo Bills", "Miami Dolphins", "New England Patriots", "New York Jets", "Baltimore Ravens", "Cincinnati Bengals", "Cleveland Browns", "Pittsburgh Steelers", "Houston Texans", "Indianapolis Colts", "Jacksonville Jaguars", "Tennessee Titans", "Denver Broncos", "Kansas City Chiefs", "Oakland Raiders", "San Diego Chargers"];
var a_teamlogo = ["http://st.snimg.com/image/nfl/logos/2_medium.png", "http://st.snimg.com/image/nfl/logos/15_medium.png", "http://st.snimg.com/image/nfl/logos/17_medium.png", "http://st.snimg.com/image/nfl/logos/20_medium.png", "http://st.snimg.com/image/nfl/logos/33_medium.png", "http://st.snimg.com/image/nfl/logos/4_medium.png", "http://st.snimg.com/image/nfl/logos/5_medium.png", "http://st.snimg.com/image/nfl/logos/23_medium.png", "http://st.snimg.com/image/nfl/logos/34_medium.png", "http://st.snimg.com/image/nfl/logos/11_medium.png", "http://st.snimg.com/image/nfl/logos/30_medium.png", "http://st.snimg.com/image/nfl/logos/10_medium.png", "http://st.snimg.com/image/nfl/logos/7_medium.png", "http://st.snimg.com/image/nfl/logos/12_medium.png", "http://st.snimg.com/image/nfl/logos/13_medium.png", "http://st.snimg.com/image/nfl/logos/24_medium.png"];
			
var text = "";
var num = "";


function makeTLA(){
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    
    // generate 3 random letters
    var letter1= possible.charAt(Math.floor(Math.random() * possible.length));
    var letter2= possible.charAt(Math.floor(Math.random() * possible.length));
    var letter3= possible.charAt(Math.floor(Math.random() * possible.length));
    
    // concatonate 3 letters together
    text = letter1.concat(letter2,letter3);
    return text;
}

function makeNum() {
	num = Math.floor((Math.random()*100));
	return num;	
}


// functions that depend on DOM elements
$(document).ready(function() {  
  
  /* reload sport scores for each sport
	$('.sports-scores').live('click', function() {
		$('.sports-scores').reload();
	})*/
	
	// highlight headlines on home page	
	$('.highlight_grey').live('mouseleave', function() {
		$(this).css("background", "white");
	})
	
	$('.highlight_grey').live('mouseover', function() {
		$(this).css("background", "#eee");
	})

	// highlight previous / next buttons on article
	$('.prevnext').live('mouseover', function() {
		$(this).css("background", "#eee");
		$(this).prev('.arrow').css("background", "#eee")
	})

	$('.prevnext').live('mouseleave', function() {
		$(this).css("background", "#DEDEDE");
		$(this).prev('.arrow').css("background", "#DEDEDE")
	})
	
	// functions for nfl draft page
	$(".main_image .desc").show(); // Show Banner
	$(".main_image .block").animate({ opacity: 0.85 }, 1 ); // Set Opacity
	$(".image_thumb ul li:first").addClass('active');
	
	$(".image_thumb ul li").click(function(){ 
		// Set Variables
		var imgTitle = $(this).find('a').attr("href"); // Get Main Image URL
		var imgDesc = $(this).find('.block').children('h2').html(); 	//  Get HTML of block
		var imgDescHeight = $(".main_image").find('.block').height();	// Calculate height of block	
		
		if ($(this).is(".active")) {  // If it's already active, then...
			return false; // Don't click through
		} else {
			// Animate the Teaser				
			$(".main_image .block").animate({ opacity: 0, marginBottom: -imgDescHeight }, 250 , function() {
				$(".main_image .block").html(imgDesc).animate({ opacity: 0.85,	marginBottom: "0" }, 250 );
				$(".main_image img").attr({ src: imgTitle});
			});
		}
		
		$(".image_thumb ul li").removeClass('active'); // Remove class of 'active' on all lists
		$(this).addClass('active');  // add class of 'active' on this list only
		return false;
		
	}) .hover(function(){
		$(this).addClass('hover');
		}, function() {
		$(this).removeClass('hover');
	});
	
	// Function to autoplay cycling of images
    // Source: http://stackoverflow.com/a/9259171/477958
    function cycleImage(){
    var onLastLi = $(".image_thumb ul li:last").hasClass("active");       
    var currentImage = $(".image_thumb ul li.active");
    
    
    if(onLastLi){
      var nextImage = $(".image_thumb ul li:first");
    } else {
      var nextImage = $(".image_thumb ul li.active").next();
    }
    
    $(currentImage).removeClass("active");
    $(nextImage).addClass("active");
    
		// Duplicate code for animation
		var imgAlt = $(nextImage).find('img').attr("alt");
		var imgTitle = $(nextImage).find('a').attr("href");
		var imgDesc = $(nextImage).find('.block').html();
		var imgDescHeight = $(".main_image").find('.block').height();
					
		$(".main_image .block").animate({ opacity: 0, marginBottom: -imgDescHeight }, 250 , function() {
      $(".main_image .block").html(imgDesc).animate({ opacity: 0.85,	marginBottom: "0" }, 250 );
      $(".main_image img").attr({ src: imgTitle , alt: imgAlt});
		});
  };
  
})

