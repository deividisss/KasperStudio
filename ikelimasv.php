
<?php
   
            session_start();
     


//patikrina ar vartotojas prisijunges jei nei grazina i prisijungimo puslapi

   if(!isset($_SESSION['nick']))
{
    header("Location: login2.php");
       
}
  $nick=$_SESSION['nick'];
        echo "Sveikas $nick ";
         echo "<a href='ikelimai_i_galerijas.php'> Atgal</a> <a href='index.html'>Pagrindinis</a>";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Nuotrauku ikelimas</title>
    </head>
    <body>
        <h1 style="text-align: center">Vestuviu Galerija</h1>
<form action="ikelimasv.php" method="post" enctype="multipart/form-data">
        Pasirinkti didele nuotrauka:<input type="file" name="image"/>
              Pasirinkti thumb nuotrauka<input type="file" name="imagethumb"/>
        <br><input type="submit" name="upload" value="Ikelti nuotraukas"/></form>
<?php




if (isset($_POST['upload'])){
    
     $image_name = $_FILES['image'] ['name'];
         $image_type = $_FILES['image'] ['type'];
         $image_size = $_FILES['image'] ['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
     
         $imagethumb_name = $_FILES['imagethumb'] ['name'];
         $imagethumb_type = $_FILES['imagethumb'] ['type'];
        $imagethumb_size = $_FILES['imagethumb'] ['size'];
       $imagethumb_tmp_name = $_FILES['imagethumb']['tmp_name'];
     
     
     if(($image_name=='') or ($imagethumb_name==''))   {  
              echo "<script>alert ('Pasirink nuotraukas')</script>";
              exit();}
          
          if($image_name!=$imagethumb_name){
              echo "<script>alert ('Neatitink pavadidimai')</script>";
              echo"<br><img src='https://cdn.meme.am/instances/500x/55085414.jpg'><br>";
              exit();}
          
         
         

          else
          move_uploaded_file($image_tmp_name,"galerijos/vestuves/images/$image_name");
           move_uploaded_file($imagethumb_tmp_name,"galerijos/vestuves/images/thumbs/$imagethumb_name");
          echo "Nuotrauka ikelta sekminga";
          echo "<br><img src='galerijos/vestuves/images/$image_name'><br>";
           echo "Thumbnailas ikelta sekminga";
          echo "<br><img src='galerijos/vestuves/images/thumbs/$imagethumb_name'>";
}
    



?>
    </body>
</html>