<?php
    ini_set('display_errors', '0');   
require 'galerijos/fotosesijos/Galerija.php';
$galerija =new Galerija();
 $galerija->setPath('galerijos/fotosesijos/images/');

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
        
         <!-- paginacija -->
<meta name="viewport" content="width=device-width,initial-scale=1">


  <link rel="stylesheet" href="css/jPages.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/github.css">

  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script type="text/javascript" src="js/highlight.pack.js"></script>
  <script type="text/javascript" src="js/tabifier.js"></script>

  <script src="js/jPages.js"></script>
        
        
 

<!-- Add fancyBox -->
<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen">
<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script> 
 

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
			<li><a href="#">DEKLAI</a></li>
			<li><a id="test3" href="#"></a>
					<ul>
						<li><a href="#">SVETAINES</a></li>
						<li><a href="#">ANIMACIJA</a></li>
						<li><a href="#">GRAFINIS DIZAINAS</a></li>
					</ul>
			</li>
			<li><a href="#">DRAUGAI</a>
					<ul>
						<li><a href="#">GELES</a></li>
						<li><a href="#">MUZIKANTAI</a></li>
						<li><a href="#">FERVERKAI</a></li>
					</ul>
			</li>
		</ul>
</div>


<div id="straip">

	<div id="knuotraukas">

           
                <?php if($images):?>
                 
            
          
                            <div id="itemContainer">
                    <?php foreach($images as $image): ?>

                     <div  class="galerijos-item">
                         <a class="fancybox" rel="group" href="<?php echo $image['didele nuotrauka'] ?>"><img src="<?php echo $image['maza nuotrauka'];?>" alt="nuotrauka"></a>
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

   <div id="a6">
							
				<a href="austina_pagrc.html#logoah"><div class="remai2"><h4>Apie mane</h4></div></a>
				<a href="gvestuviu.php"><div class="remai2"><h4> Vestuvės </h4></div></a>
				<a href="gkrikstynu.php"><div class="remai2"><h4>Krikštynos</h4></div></a>
				<a href="gfotosesiju.php"><div class="remai2"><h4>Fotosesijos</h4></div></a>
					<a href="kainorastis.html"><div class="remai2"><h4>Kainoraštis</h4></div></a>
					<a href="afilm.html"><div class="remai2"><h4> Filmukai</h4> </div></a>
						</div>
			
					<!--	<div id="a6">
							
				<div class="remai2"><a href="#logoah"><img src="Images/aust2.jpg" alt="Smiley face"  ></a><h4>Apie mane</h4></div>
				<div class="remai2"><a href="gvestuviu.php"><img src="Images/austina4.jpg" alt="Smiley face"></a><h4> Vestuvės </h4></div>
				<div class="remai2"><a href="gkrikstynu.php"><img src="Images/austina12.jpg" alt="Smiley face"></a><h4>Krikštynos</h4></div>
				<div class="remai2"><a href="gfotosesiju.php"><img src="Images/austina5.jpg" alt="Smiley face"></a><h4>Fotosesijos</h4></div>
				<div class="remai2"><img src="Images/austina3.jpg" alt="Smiley face"  ><h4>Kainoraštis</h4></div>
				<div class="remai2"><img src="Images/filmukai.jpg" alt="Smiley face"  ><h4> Filmukai</h4> </div>
						</div>
						-->


</div>
     <div id="footer">
	<p>KasperStudio&#169;2015 <a href="login2.php"><img id="loginas" src="Images/log3.png" alt="Smiley face" ></a></p>
 </div>
</div>
 <script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
		$(".fancybox")
    .attr('rel', 'gallery')
    .fancybox({
        padding : 3
    });
	});

</script>


             <script>
  /* when document is ready */
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
  </script>

</body>
</html>