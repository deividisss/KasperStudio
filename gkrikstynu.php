<?php
    ini_set('display_errors', '0');   
require 'galerijos/krikstynos/Galerija.php';
$galerija =new Galerija();
 $galerija->setPath('galerijos/krikstynos/images/');

 //print_r($galerija->getDirectory('galerija/images'));// atprintin visus folderi nuskaitytus failus
  //pvz svetainej rodytu tik jpg formato nuotraukas $images = $galerija->getImages(array('jpg')); 
 $images = $galerija->getImages(array('jpg','png'));
 //echo '<pre>', print_r($images), '</pre>'; // atprintin graziai visus masyvus pagal indexa folderi esncius failus
 //var_dump($images);
?>

<!DOCTYPE html>
<html>


<head>
     <meta charset="utf-8" />
		<title>KasperStudio</title>
		<link href="Images/favicon2.ico" rel="shortcut icon" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="css/asmeninis.css">
       <link rel="stylesheet" href="css/galerija.css">
	   
	   
	   <link type="text/css" rel="stylesheet" href="css/demo2.css" />
		<link type="text/css" rel="stylesheet" href="dist/css/jquery.mmenu.all.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.0.js"></script>

		<script type="text/javascript" src="dist/js/jquery.mmenu.all.min.umd.js"></script>
		<script type="text/javascript">
			$(function() {
				$('nav#menu').mmenu();
			});
		</script>

        
         <!-- paginacija -->
<meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/jPages.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/github.css">


  <script type="text/javascript" src="js/highlight.pack.js"></script>
  <script type="text/javascript" src="js/tabifier.js"></script>

  <script src="js/jPages.js"></script>
        
        
 

<!-- Add fancyBox -->
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen">
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script> 


<!-- Swipwbox -->

<script src="src/js/jquery.swipebox.js"></script>

  <link rel="stylesheet" href="src/css/swipebox.css">
  
  <link rel="stylesheet" href="dist/css/lightbox.min.css">
  
  
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

<style>

		@media (min-width: 1px) and (max-width:1023px) {
.fancybox{display:none;}
				.swipebox{display:block;}
		}

		@media (min-width: 1024px)  {
.swipebox{display:none;}
	
</style>

</head>


<body>	

<div id="konteineris">
				<div id="header">
				<a href="index.html"><img  id="logo" src="Images/log2.png" alt="Mazas logo" width="100"></a>
					<a href="index.html"><img id="pav" src="Images/lolgo3.png" alt="Pagr. logotipas" width="420"  ></a>
</div>
<div id="wrap">
		<ul class="navbar">
			<li><a id="test" href="austina_pagrc.html"></a></li>
			<li><a id="test2" href="#"></a></li>
			<li><a href="#">Dėklai</a></li>
			<li><a id="test3" href="#"></a>
					<ul>
						<li><a href="#">Svetainės</a></li>
						<li><a href="#">Animacija</a></li>
						<li><a href="#">Grafinis dizainas</a></li>
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

	<div id="knuotraukas" class="kaskas">

           
                <?php if($images):?>
                 
            
          
                            <div id="itemContainer">
                    <?php foreach($images as $image): ?>

                     <div  class="galerijos-item">
                         <a  class="fancybox" rel="group" href="<?php echo $image['didele nuotrauka'] ?>"><img src="<?php echo $image['maza nuotrauka'];?>" alt="nuotrauka"></a>
						 <a  class="swipebox" rel="group" href="<?php echo $image['didele nuotrauka'] ?>"><img src="<?php echo $image['maza nuotrauka'];?>" alt="nuotrauka"></a>
                      </div>
                        <?php endforeach; ?>
                            </div>
                      <div class="holder"></div>
                         
                    
               
                <?php else: //ifs patikrins ar yta paveiksliukiu jei nerea ismes zinute?>
                Nera nuotrauku.
                <?php
                  endif;
                ?>
   


</div>



			
<!--		<    <div id="a6">
							

			
						</div>
-->
			

<div id="a6">
<div id="a6">
			    <a href="austina_pagrc.html#logoah">
  <div class="button-fill grey">
    <div class="button-text">Apie mane</div>
    <div class="button-inside">
      <div class="inside-text">Plačiau</div>
    </div>
  </div></a>
  
  <a href="gvestuviu.php">
  <div class="button-fill orange">
    <div class="button-text">Vestuvių</div>
    <div class="button-inside">
      <div class="inside-text">Galerija</div>
    </div>
  </div></a>
  
      <a href="gkrikstynu.php">
  <div class="button-fill grey">
    <div class="button-text">Krikštynų</div>
    <div class="button-inside">
      <div class="inside-text">Galerija</div>
    </div>
  </div></a>
  
  <a href="gfotosesiju.php">
  <div class="button-fill orange">
    <div class="button-text">Fotosesijų</div>
    <div class="button-inside">
      <div class="inside-text">Galerija</div>
    </div>
  </div></a>
  
      <a href="kainorastis.html">
  <div class="button-fill grey">
    <div class="button-text">Fono</div>
    <div class="button-inside">
      <div class="inside-text">Paveikslėliai</div>
    </div>
  </div></a>
  
  <a href="kainorastis.html">
  <div class="button-fill orange">
    <div class="button-text">Kainoraštis</div>
    <div class="button-inside">
      <div class="inside-text">Paslaugų</div>
    </div>
  </div></a>
  
    <a href="afilm.html">
  <div class="button-fill grey">
    <div class="button-text">Filmukai</div>
    <div class="button-inside">
      <div class="inside-text">Nuotraukų</div>
    </div>
  </div></a>
      


        
		
		
<script src="js/index.js"></script>
 
							
		
</div>



</div>


</div>

 <div id="footer">
		<p>	<a href="austina_pagrc.html#konteineris"><span id="meniu">Meniu</span></a>
		<a href="https://www.facebook.com/austinosphotography"><img  style="vertical-align:top" src="Images/fb.png" alt="Smiley face" ></a> 
		KasperStudio&#169;2015 <a href="login2.php"><img id="loginas" src="Images/log3.png" alt="Smiley face" ></a></p>
 </div>
</div>
 <script type="text/javascript">
	$(document).ready(function() {
		
		$(".fancybox").fancybox();
		$(".fancybox")
    .attr('rel', 'gallery')
    .fancybox({
        padding : 3,
		maxWidth: "100%"
    });
	});

    $(document).ready(function(){
    var ww = $(window).width();
    var limit = 1280;            

    function refresh() {
        ww = $(window).width();
        var w =  ww<limit ? (location.reload(true)) :  ( ww>limit ? (location.reload(true)) : ww=limit );
    }

    var tOut;
    $(window).resize(function() {
        var resW = $(window).width();
        clearTimeout(tOut);                 
        if ((ww>limit && resW<limit) || (ww<limit && resW>limit) ) {        
            tOut = setTimeout(refresh, 100);
        }
    });
});




</script>


             <script>
			 if ( $(window).width() > 1280) {     
			   $(function(){

    /* initiate the plugin */
    $("div.holder").jPages({
      containerID  : "itemContainer",
      perPage      : 21,
      startPage    : 1,
      startRange   : 1,
      midRange     : 5,
      endRange     : 1
    });

  });			 
  //Add your javascript for large screens here 
} 

else if( $(window).width() > 1023) {     
			   $(function(){

    /* initiate the plugin */
    $("div.holder").jPages({
      containerID  : "itemContainer",
      perPage      : 15,
      startPage    : 1,
      startRange   : 1,
      midRange     : 5,
      endRange     : 1
    });

  });			 
  //Add your javascript for large screens here 
} 
else {			   $(function(){

    /* initiate the plugin */
    $("div.holder").jPages({
      containerID  : "itemContainer",
      perPage      : 200,
      startPage    : 1,
      startRange   : 1,
      midRange     : 5,
      endRange     : 1,
	  animation:"none",
jqueryanimation:"none"
    });

  });
  //Add your javascript for small screens here 
}



  </script>


</body>
</html>