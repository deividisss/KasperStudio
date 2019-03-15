<?php
   
            session_start();
          $nick=$_SESSION['nick'];
        echo "Sveikas $nick ";
         echo "<a href='index.html'> Pagrindinis</a>";

//patikrina ar vartotojas prisijunges jei nei grazina i prisijungimo puslapi

   if(!isset($_SESSION['nick']))
{
    header("Location: login2.php");

}



?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <a href="ikelimasv.php"><p>Nuotrauku kelimas i Vestuviu galerija</p></a>
       <a href="ikelimask.php"><p>Nuotrauku kelimas i Krikstynu galerija galerija</p></a>
         <a href="ikelimasf.php"><p>Nuotrauku kelimas i Fotosesiju galerija galerija</p></a>
      <a href="login.php"><p>Svetaines tvarkymas</p></a>
         </body>
</html>
