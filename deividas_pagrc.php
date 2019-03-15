
<!DOCTYPE html>
<html>

		<title>KasperStudio</title>
              <meta charset="utf-8" />
		<link href="Images/favicon2.ico" rel="shortcut icon" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="css/asmeninis.css">
		<script src="script/ksScript.js"></script>
<meta name="viewport" content="width=device-width,initial-scale=1">
        <style>
#konteineris{background-image:none}
            

#meniu{cursor:pointer;}

	@media only screen and (min-width: 0px) and (max-width: 1024px) {
		 div#straipf.deivmenu{
background-image:none;
			 margin-top:42%;
		 }
</style>


		<link type="text/css" rel="stylesheet" href="css/demo2.css" />
		<link type="text/css" rel="stylesheet" href="dist/css/jquery.mmenu.all.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.0.js"></script>

		<script type="text/javascript" src="dist/js/jquery.mmenu.all.min.umd.js"></script>
		<script type="text/javascript">
			$(function() {
				$('nav#menu').mmenu();
			});
		</script>

<!-- Add fancyBox -->

<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen">
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js"></script>





<script src="src/js/jquery.swipebox.js"></script>

  <link rel="stylesheet" href="src/css/swipebox.css">
  
  <link rel="stylesheet" href="dist/css/lightbox.min.css">
  
  <!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
  <script type="text/javascript">
  if ($.fn.swipebox) {

    //Get largest dimension in viewport pixels
    var maxSize = Math.max(document.documentElement.clientWidth, 
                           document.documentElement.clientHeight);
    maxSize *= window.devicePixelRatio ? window.devicePixelRatio : 1;
    //Limit to 2048.
    maxSize = Math.min(2048,maxSize); 
    //Round up to multiple of 160 for cache efficiency (~13 variations)
    maxSize = maxSize - (maxSize % 160) + 160;

    //Set the width and height (if present) to maxSize
    $("a.swipebox").each(function(i,e){
        e.href = e.href.replace(/width=\d+/,"width=" + maxSize).replace(/height=\d+/,"height=" + maxSize);
      });
    //Launch swipebox
    $(".swipebox").swipebox({useCSS:true, hideBarsDelay:0});
  }
</script>


</head>

<body>	

<div id="konteineris">
				<div id="header">
				
				
				
				

<!-- including jQuery from the google cdn -->


<script type="text/javascript">
// This is our actual script
function lol(){
		      
$( "video,#videoMessage" ).fadeOut( "slow", function() {
       lol3();
    });

}

function lolrek(){
		      
$( "video,#videoMessage" ).fadeOut( "slow", function() {
       lol3rek();
    });

}

 function lol3rek(){
	 $( "video,#videoMessage" ).fadeIn( "slow")
	 
	//alert("Hello! I am an alert box!!");
	$('video').attr("src", "skrenda.mp4");

 
	//$("video").addClass("videoats");
	   //alert("I am an alert box!");
        $.ajax({
            url: "receiver.php",
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
	
	function lolbendras(){
		      
$( "video,#videoMessage" ).fadeOut( "slow", function() {
       lol3bendras();
    });

}

 function lol3bendras(){
	 $( "video,#videoMessage" ).fadeIn( "slow")
	 
	//alert("Hello! I am an alert box!!");
	$('video').attr("src", "tankas.mp4");

 
	//$("video").addClass("videoats");
	   //alert("I am an alert box!");
        $.ajax({
            url: "receiver.php",
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
	
	
	function lolpak(){
		      
$( "video,#videoMessage" ).fadeOut( "slow", function() {
       lol3pak();
    });

}

 function lol3pak(){
	 $( "video,#videoMessage" ).fadeIn( "slow")
	 
	//alert("Hello! I am an alert box!!");
	$('video').attr("src", "suo.mp4");

 
	//$("video").addClass("videoats");
	   //alert("I am an alert box!");
        $.ajax({
            url: "receiver.php",
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                $('#container').html(data);
            }
        });
    }
	
	
	
	function lolkaina(){
		      
$( "video,#videoMessage" ).fadeOut( "slow", function() {
       lol3kaina();
    });

}

 function lol3kaina(){
	 $( "video,#videoMessage" ).fadeIn( "slow")
	 
	//alert("Hello! I am an alert box!!");
	$('video').attr("src", "kaina.mp4");

 
	//$("video").addClass("videoats");
	   //alert("I am an alert box!");
        $.ajax({
            url: "receiver.php",
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                $('#container').html(data);
            }
        });
    }




 function lol3(){
	 $( "video,#videoMessage" ).fadeIn( "slow")
	 
	//alert("Hello! I am an alert box!!");
	$('video').attr("src", "lenta.mp4");

 
	//$("video").addClass("videoats");
	   //alert("I am an alert box!");
        $.ajax({
            url: "receiver.php",
            type: 'GET',
            dataType: 'html',
            success: function (data) {
                $('#container').html(data);
            }
        });
    }

	
	
	
	
	
	$(document).ready(function(){
    $("button").click(function(){
        $("p").hide("slow", function(){
            alert("The paragraph is now hidden");
        });
    });
});



	function lol2(){
		      
$( "video,#videoMessage" ).fadeOut( "slow", function() {
       lol4();
    });

}
	
	
	
	
	 function lol4(){
		 	   $('#container').html("");
	 $( "video,#videoMessage" ).fadeIn( "slow")
	//alert("Hello! I am an alert box!!");
	 $('video').attr("src", "roling_1.mp4");}

	 
	  function bendras(){

	 
	//alert("Hello! I am an alert box!!");

 
	//$("video").addClass("videoats");
	   //alert("I am an alert box!");
        $.ajax({
            url: "bendras.php",
            type: 'GET',
            dataType: 'html',
            success: function (data) {
				//alert(data);
                $('#aprasas2').html(data);
					$('html, body').animate({
    scrollTop: $("#logoah").offset().top
}, 1000);
            }
        });
		

    }
	
	
		  function modeliai3D(){

	 
	//alert("Hello! I am an alert box!!");

 
	//$("video").addClass("videoats");
	   //alert("I am an alert box!");
        $.ajax({
            url: "galerija3D.php",
            type: 'GET',
            dataType: 'html',
            success: function (data) {
				//alert(data);
                $('#straip').html(data);

            }
        });
		

    }
	
	


	 
	 
	 	$(document).ready(function(){
    $("button").click(function(){
        $("p").hide("slow", function(){
            alert("The paragraph is now hidden");
        });
    });
});
	 </script>
				
				
				
				
				
				
				
				
				
				
<a href="index.html"><img  id="logo" src="Images/log2.png" alt="Mazas logo" width="100"> </a>
					<a href="index.html"><img id="pav"src="Images/lolgo3.png" alt="Pagr. logotipas" width="420"  >  </a>
</div>




<div id="wrap">
		<ul class="navbar">
			<li><a id="test" href="austina_pagrc.html"></a></li>
			<li><a id="test2" href="#"></a></li>
			<li><a href="#">Dėklai</a></li>
			<li><a id="test3" href="deividas_pagrc.php"></a>
					<ul>
						<li><a href="#">Svetainės</a></li>
						<li><a href="#">Animacija</a></li>
						<li><a href="3dgalerija.html">3D Modeliai</a></li>
							<li><a href="https://sketchfab.com/deividiss">3D Ats</a></li>
					</ul>
			</li>
			<li><a href="#">Draugai</a>
					<ul>
						<li><a href="#">Gėlės</a></li>
						<li><a href="#">Muzikantai</a></li>
						<li><a href="#">Ferverkai</a></li>
					</ul>
			</li>
			<li><a href="index.html#kontaktai">Kontaktai</a></li>

		</ul>
</div>

		<div id="page">
			<div class="header">
				<a href="#menu"></a>
			</div>
			

			<nav id="menu">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="#about">Apie mus</a></li>
							<li><a  href="austina_pagrc.html">Fotografavimas</a></li>
							<li><a id="test2" href="#"></a></li>
								<li><a href="#">Medijos </a>
					<ul>
						<li><a href="#">Svetainės</a></li>
						<li><a href="#">Animacija</a></li>
						<li><a href="#">Grafinis dizainas</a></li>
					</ul>
			</li>
					

					<li><a href="#">Dėklai</a></li>
								<li><a href="#">Draugai</a>
					<ul>
						<li><a href="#">Gėlės</a></li>
						<li><a href="#">Muzikantai</a></li>
						<li><a href="#">Ferverkai</a></li>
					</ul>
			</li>
			<li><a href="#">KASKAS</a></li>
								<li><a href="index.html#kontaktai">Kontaktai</a></li>
				</ul>
			</nav>
		</div>
<div id="straip">

 <div id="videoDiv" >
 
<video id="video"   autoplay="autoplay" loop="loop" >

<source id="pagrVid" src="roling_1.mp4" type="video/mp4" ></source>

</video>
<div class="atsmenu answer_list" id="welcomeDiv"  style="display:none;">
	<div id="straipf"  class="deivmenu">
			<div id="a5"  class="wow slideInLeft deivmenu" data-wow-delay="0.1s" style="visibility: visible; -webkit-animation-delay: 0.1s;">
				<div id="a15" onmouseout='lol2()' onmouseover='lolbendras()' onclick='bendras()'class="eile1 remaipagr wow slideInLeft animated" data-wow-delay="2s" 
				style="visibility: visible; -webkit-animation-delay: 2s;"><img src="Images/bendras2.jpg" alt="Smiley face"  >
				<h4>Bendra informacija</h4></div>
				
			<div id="a17" onmouseout='lol2()' onmouseover='lolpak()' div class="eile1 remaipagr wow slideInLeft animated" data-wow-delay="1.7s" 
			style="visibility: visible; -webkit-animation-delay: 1.7s;">
			<img src="Images/paketas.jpg" alt="Smiley face"  ><h4>Reklaminis paketas</h4> </div>
			
<div id="a18" onmouseout='lol2()' onmouseover='lol()' onclick='modeliai3D()' class="eile1 remaipagr wow slideInLeft animated" data-wow-delay="1.6s" style="visibility: visible; -webkit-animation-delay: 1.6s;">
<img src="Images/modeliai.jpg" alt="Smiley face"  > <h4>3D modeliai</h4></div>
			
			
			<div id="a19" onmouseout='lol2()' onmouseover='lolrek()' class="eile1 remaipagr wow slideInLeft animated" 
			data-wow-delay="1.5s" style="visibility: visible; -webkit-animation-delay: 0.1s;">
			<a href="deividas_pagrc.html"><img src="Images/bendras.jpg" alt="Smiley face"  ></a><h4>Video galerija</h4></div>

<div id="a20" onmouseout='lol2()' onmouseover='lolkaina()' class="eile1 remaipagr wow slideInLeft animated" data-wow-delay="1.4s" style="visibility: visible; -webkit-animation-delay: 1.4s;">
<img src="Images/kaina.jpg" alt="Smiley face"  ><h4>Kainoraštis</h4></div>

				<div id="a21" class="eile1 remaipagr wow slideInLeft animated" data-wow-delay="1.3s" style="visibility: visible; -webkit-animation-delay: 1.3s;">
				<img src="Images/sport.jpg" alt="Smiley face"  ><h4> Svetainės </h4></div>

			</div>
			

</div>
</div>
 <div id="videoMessage">
    
	
	
	
	<div id="welcomeDiv"  style="display:none;" class="answer_list" >






</div>



 		<div class="grid__item color-11">
 <a class="link link--yaku" href="#">
 <h1><span>M</span><span>o</span><span>d</span><span>e</span><span>r</span><span>n</span><span>ū</span><span>s</span><span>&nbsp;</span><span>r</span><span>e</span><span>k</span><span>l</span><span>a</span><span>m</span><span>o</span><span>s</span></h1>
 <h2><span>s</span><span>p</span><span>r</span><span>e</span><span>n</span><span>d</span><span>i</span><span>m</span><span>a</span><span>i</span></h2>
 <h3></h3>
 </a>

 <p class="videoClick" onclick="showDiv()"  >
 <a class="atsMenu">Meniu</a>
 </p>
 </div>
 </div>


<!--<video width="100%"  autoplay="autoplay" loop="loop">

<source src="roling_1.mp4" type="video/mp4"></source>
  <source src="roling_1.webm" type="video/webm"></source>
</video>
-->	

			
		
 
 </div>
 
 
 
 
 <div id="aprasas2">
		
 
  </div>


 </div>
 <div id="footer">
		<p onclick="meniuShow()"><span id="meniu">Meniu</span></a>
		<a href="https://www.facebook.com/austinosphotography"><img  style="vertical-align:top" src="Images/fb.png" alt="Smiley face" ></a> 
		KasperStudio&#169;2015 <a href="login2.php"><img id="loginas" src="Images/log3.png" alt="Smiley face" ></a></p>
 </div>
 
 </div>
</body>
 <script type="text/javascript">
 
  var on=1;
				  function meniuShow(){

	 
	//alert("Hello! I am an alert box!!");

 
	//$("video").addClass("videoats");
	   //alert("I am an alert box!");
        $.ajax({
            url: "deivismeniu.php",
            type: 'GET',
            dataType: 'html',
            success: function (data) {
				//alert(data);
                $('#straip').html(data);
				 on=1;
				  $('#meniu').click(showDiv());
				 

            }
			
        });
		

    }
	
 




 function showDiv() {
	 
  if(on==1){
	$('html, body').animate({ scrollTop: 0 }, 'slow');
   document.getElementById('welcomeDiv').style.display = "block";
    setTimeout(function(){
	 //  $('#a16').removeClass("slideInLeft animated")
        $('#a15,#a16,#a17,#a18,#a19,#a20,#a21').removeClass("slideInLeft animated")
    }, 3400);
	
   setTimeout(function(){
	 //  $('#a16').removeClass("slideInLeft animated")
        $('#isores1,#isores2,#isores3,#isores4').removeClass("bounceIn animated")
    }, 3400);
 
 on=2;
 //alert(on);
 }
 else{
	 //alert('fsadf')
	 
	 document.getElementById('welcomeDiv').style.display = "none";
	 on=1;
 }

 }
 
 
 

	
	//else{
	//	document.getElementById('welcomeDiv').style.display = "none";
	//}
 
 
	$(document).ready(function() {
		$(".fancybox").fancybox();
		$(".fancybox")
    .attr('rel', 'gallery')
    .fancybox({
        padding : 3,
		width:'80%',
		
    });
	});

</script>
</html>